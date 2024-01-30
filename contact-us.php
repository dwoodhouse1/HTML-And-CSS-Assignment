<?php
    //include ("php/formSubmission.php");
    session_start();
    //echo 'SESSION HAS STARTED HEHE';
    include("php/dbConnection.php");
    include("php/postData.php");
    
    $formSent = false;
    if (!isset($_SESSION['success']))
    {
        $_SESSION['success'] = false;
      
    }

    if (!isset($_SESSION['form_sent']))
    {
        $_SESSION['form_sent'] = false;
    }
    
    if (!isset($_SESSION['errorMessage']))
    {
        $_SESSION['errorMessage'] = [];
    }
    
    function sanatiseInput($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }

    function validateInput($postData, $input, $regex=true)
    {
        if (empty($postData) == true)
        {
            array_push($_SESSION['errorMessage'], "Please enter a value into " . $input . ".");
            $_SESSION[$input . "-valid"] = false;
            return false;
        }
        else if ($regex == false)
        {
            array_push($_SESSION['errorMessage'], "The " . $input . " format is incorrect.");
            $_SESSION[$input . "-valid"] = false;
            return false;
        }
        else
        {
            $_SESSION[$input . "-valid"] = true;
            return true;
        }
        
    }

    

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // Filering / Sanitising all inputs and storing the values into session variables

        $name = sanatiseInput($_POST['name']);
        $_SESSION['name'] = $name;

        $company = sanatiseInput($_POST['company']);
        $_SESSION['company'] = $company;

        $email = sanatiseInput($_POST['email']);
        $_SESSION['email'] = $email;

        $telephone = sanatiseInput($_POST['telephone']);
        $_SESSION['telephone'] = $telephone;

        $message = sanatiseInput($_POST['message']);
        $_SESSION['message'] = $message;
        
        $marketing = $_POST['checkbox-marketing'];

        

        

        $_SESSION['name-valid'] = true;
        $_SESSION['email-valid'] = true;
        $_SESSION['telephone-valid'] = true;
        $_SESSION['message-valid'] = true;

        $nameRegex = "/^[a-zA-Z-' ]*$/";
        $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

        //function validateInput($postData, $input, $regex=true)
        $isNameValid = validateInput($name, "name", preg_match($nameRegex, $name));
        $isEmailValid = validateInput($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
        $isPhoneValid = validateInput($telephone, "telephone", preg_match($phoneRegex, $telephone));
        $isMessageValid = validateInput($message, "message");

        if ($isNameValid && $isEmailValid && $isPhoneValid && $isMessageValid)
        {
            postData($name, $email, $company, $telephone, $message, $marketing);

            unset($_SESSION['name']);
            unset($_SESSION['email']);
            unset($_SESSION['company']);
            unset($_SESSION['telephone']);
            unset($_SESSION['message']);

            $_SESSION['success'] = true;
            $_SESSION['errorMessage'] = [];

            $_SESSION['form_sent'] = true;

            echo 'Data submitted to the Database Successfully';
            header("Location: contact-us.php#contact-form");
        
            exit();

        }
        
        
        






    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Netmatters</title>

    <link rel="stylesheet" href="css/application.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include("php/cookies.php");
         ?>
        
    <div id="container">
        <div class="main">
            <div class="main-outer">
                <div class="main-inner">
                    <?php include("php/header.php"); ?> <!-- Header Content -->
                    <div class="hidden-xs breadcrumb-container">
                        <div class="container">
                            <ul class="breadcrumb">
                                <li><a>Home</a></li>
                                <li>Our Offices</li>
                            </ul>
                        </div>

                    </div>
                    <div class="section-top">
                        <div class="page-head">
                            <div class="container">
                                <h1>Our Offices</h1>
                            </div>
                            
                        </div>
                    </div>
                    

                    
                        <div class="container">
                            <div class="office-addresses">
                                <div class="block address address-london margin-right">
                                    <div class="location-image">
                                        <a><img src="img/london.jpg" alt="London Office" class="img-office"></a>
                                    </div>
                                    <div class="location-content">
                                        <p class="h2"><a>London Office</a></p>
                                        <p class="p">Unit G6,
                                            <br>
                                            Pixel Business Centre,
                                            <br>
                                            110 Brooker Road, Waltham Abbey,
                                            <br>
                                            London,
                                            <br>
                                            EN9 1JH
                                        </p>
                                        <div class="tel">
                                            <a class="h3 text-web">02045 397354</a>
                                        </div>
                                        <div class="view-more">
                                            <a class="btn btn-web">View More</a>
                                        </div>
                                    </div>
                                    <div class="map">
                                        <img src="img/london-loc.jpeg" class="img-office-location">
                                    </div>
                                </div>

                                <div class="block address address-cambridge margin-left">
                                    <div class="location-image">
                                        <a><img src="img/cambridge.jpg" alt="Cambridge Office" class="img-office"></a>
                                    </div>
                                    <div class="location-content">
                                        <p class="h2"><a>Cambridge Office</a></p>
                                        <p class="p">Unit 1.31,
                                            <br>
                                            St John's Innovation Centre,
                                            <br>
                                            Cowley Road, Milton,
                                            <br>
                                            Cambridge,
                                            <br>
                                            EN9 1JH
                                        </p>
                                        <div class="tel">
                                            <a class="h3 text-web">01223 37 57 72</a>
                                        </div>
                                        <div class="view-more">
                                            <a class="btn btn-web">View More</a>
                                        </div>
                                    </div>
                                    <div class="map">
                                        <img src="img/cambridge-loc.jpeg" class="img-office-location">
                                    </div>
                                </div>

                                <div class="block address address-wymondham margin-right">
                                    <div class="location-image">
                                        <a><img src="img/wymondham.jpg" alt="Wymondham Office" class="img-office"></a>
                                    </div>
                                    <div class="location-content">
                                        <p class="h2"><a>Wymondham Office</a></p>
                                        <p class="p">Unit 15,
                                            <br>
                                            Penfold Drive,
                                            <br>
                                            Gateway 11 Business Park,
                                            <br>
                                            Wymondham, Norfolk,
                                            <br>
                                            NR18 0WZ
                                        </p>
                                        <div class="tel">
                                            <a class="h3 text-web">01603 70 40 20</a>
                                        </div>
                                        <div class="view-more">
                                            <a class="btn btn-web">View More</a>
                                        </div>
                                    </div>
                                    <div class="map">
                                        <img src="img/wymondham-loc.jpeg" class="img-office-location">
                                    </div>
                                </div>

                                <div class="block address address-yarmouth margin-left">
                                    <div class="location-image">
                                        <a><img src="img/yarmouth-2.jpg" alt="Great Yarmouth Office" class="img-office"></a>
                                    </div>
                                    <div class="location-content">
                                        <p class="h2"><a>Great Yarmouth Office</a></p>
                                        <p class="p">Suite F23,
                                            <br>
                                            Beacon Innovation Centre,
                                            <br>
                                            Beacon Park, Gorleston,
                                            <br>
                                            Great Yarmouth, Norfolk,
                                            <br>
                                            NR31 7RA
                                        </p>
                                        <div class="tel">
                                            <a class="h3 text-web">01493 60 32 04</a>
                                        </div>
                                        <div class="view-more">
                                            <a class="btn btn-web">View More</a>
                                        </div>
                                    </div>
                                    <div class="map">
                                        <img src="img/yarmouth-loc.jpeg" class="img-office-location">
                                    </div>
                                </div>
                            </div>   
                        </div>
                       
                    
                    <div class="container section">
                        <div class="form-section">
                            <div class="netmatters-info">
                                <p><strong>Email us on:</strong></p>
                                <p><a class="h3 text-web">sales@netmatters.com</a></p> <!-- May need to use mailto:sales@netters.com attribute -->
                                <p><strong>Business Hours:</strong></p>
                                <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                               <!-- container class for dropdown-content class will go here -->
                                <div id="dropdown-accordian">
                                    <h4><strong><a>Out of Hours IT Support&nbsp;</a><span class="icon-chevron-down"></strong></h4>
                                </div> <!-- Need a new icon here -->
                                    <div id="dropdown-expand">
                                        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                        <p>
                                            <strong>Monday - Friday 18:00 - 22:00</strong>
                                            <strong>Saturday 08:00 - 16:00</strong>
                                            <br>
                                            <strong>Sunday 10:00 - 18:00</strong>
                                        </p>
                                        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours&nbsp; voicemail. A technician will contact you on the number provided within 45 minutes of your call.&nbsp;</p>
                                    </div>
                                
                            </div>
                            <div class="form-enquiry">
                                <form method="POST" id="contact-form" action="contact-us.php">
                                    <div class="hidden-all <?php if ($_SESSION['form_sent'] == true) {echo 'success-validating';} else {echo 'error-validating';}  ?>">
                                        <span><?php if($_SESSION['form_sent'] == true) {echo 'Your Enquiry has been Submitted';} else {echo implode("<br>",$_SESSION['errorMessage']); $_SESSION['errorMessage'] = [];} ?></span>
                                        <button type="button" class="close">X</button>
                                    </div>

                                    <div class="form-group-flex">
                                        
                                        <div class="form-group form-group-space-between form-name">
                                            <label for="name" class="required">Your Name</label>
                                            <input class="form-control" name="name" type="text" id="form-name" value="<?php echo $_SESSION['name'] ?? ''; ?>"> <!-- checking set variable, if set, display this ?? otherwise output this instead -->
                                        </div>

                                        <div class="form-group form-group-space-between form-company">
                                            <label for="company">Company Name</label>
                                            <input class="form-control" name="company" type="text" id="form-company" value="<?php echo $_SESSION['company'] ?? ''?>">
                                        </div>

                                        <div class="form-group form-group-space-between form-email">
                                            <label for="email" class="required">Your Email</label>
                                            <input class="form-control" name="email" type="text" id="form-email" value="<?php echo $_SESSION['email'] ?? ''?>">
                                        </div>

                                        <div class="form-group form-group-space-between form-telephone">
                                            <label for="telephone" class="required">Your Telephone Number</label>
                                            <input class="form-control" name="telephone" type="text" id="form-telephone" value="<?php echo $_SESSION['telephone'] ?? ''?>">
                                        </div>
                                    </div>
                                    

                                    <div class="form-group form-message">
                                        <label for="message" class="required">Message</label>
                                        <textarea class="form-control" name="message" id="form-message"><?php echo $_SESSION['message'] ?? 'Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?'?></textarea>
                                            
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="newsletter-tickboxarea">
                                            <input type="hidden" name="checkbox-marketing" value="no" >
                                            <input type="checkbox" id="enquiryCheckbox" name="checkbox-marketing" value="yes" >
                                            <span class="label-checkbox icon-check_box"></span>
                                            <span class="media-body">
                                                Please tick this box if you wish to receive marketing information from us. Please see our 
                                                <a class="privacy-policy" href ="#" target="_blank">Privacy Policy</a>
                                                for more information on how we keep your data safe.
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-group form-label recaptcha-terms">
                                        <span>
                                            This site is protected by reCAPTCHA and the Google
                                            <a href="#"><u>Privacy Policy</u></a>
                                            and
                                            <a href="#"><u>Terms of Service</u></a>
                                            apply.
                                        </span>
                                    </div>

                                    <div class="action-block">
                                        <button type="submit" name="submit" id="btn-enquiry" class="btn btn-enquiry">Send Enquiry</button>
                                        <small class="helper-text">
                                            <span class="text-danger">*</span>
                                            Fields Required
                                        </small>
                                    </div>
                                        
                                    
                                </form>
                            </div>
                            
                        </div>
                       
                    </div>                         
                    <?php include("php/newsletter.php"); ?> <!-- Newsletter Content -->
                    <?php include("php/footer.php"); ?> <!-- Footer Content -->
                </div>

            </div>
        </div>
        
    </div>
    <?php include("php/sidebar.php"); ?> <!-- Sidebar Content -->
    <?php include("php/stickyHeader.php"); ?> <!-- Sticky Header Content -->
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/main.js"></script>
   <script src="js/cookies.js"></script>
   <script src="js/sidebar.js"></script>
   <script src="js/sticky.js"></script>
   <script src="js/form-validation.js"></script>
</body>
</html>
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
    <?php include("php/cookies.php"); ?>
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
                    <div class="page-head">
                        <div class="container">
                            <h1>Our Offices</h1>
                        </div>
                        
                    </div>

                    <div class="office-addresses">
                        <div class="container">

                            <div class="block address address-london">
                                <div class="location-image">
                                    <a><img src="img/london.jpg" alt="London Office" class="img-office"></a>
                                </div>
                                <div class="location-content">
                                    <p class="h2"><a>London Office</a></p>
                                    <p class="p">Unit G6,
                                        <br>
                                        Pixel Business Centre
                                        <br>
                                        110 Brooker Road, Waltham Abbey,
                                        <br>
                                        London
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

                            <div class="block address address-cambridge">
                                <div class="location-image">
                                    <a><img src="img/london.jpg" alt="Cambridge Office" class="img-office"></a>
                                </div>
                                <div class="location-content">
                                    <p class="h2"><a>Cambridge Office</a></p>
                                    <p class="p">Unit 1.31,
                                        <br>
                                        St John's Innovation Centre,
                                        <br>
                                        Cowley Road, Milton,
                                        <br>
                                        Cambridge
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

                            <div class="block address address-wymondham">
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

                            <div class="block address address-yarmouth">
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
                        <div class="row">
                            <div class="netmatters-info">
                                <p>Email us on:</p>
                                <p><a class="h3 text-web">sales@netmatters.com</a></p> <!-- May need to use mailto:sales@netters.com attribute -->
                                <p><strong>Business Hours:</strong></p>
                                <p><strong>Monday - Friday 07:00 - 18:00&nbsp;</strong></p>
                               <!-- container class for dropdown-content class will go here -->
                                <div class="dropdown-content">
                                    <h4><a>Out of Hours IT Support&nbsp;</a><span class="icon-angle-double-right"></h4> <!-- Need a new icon here -->
                                    <div class="dropdown-expand"> <!-- Section needs JS to expand / collapse -->
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
                            </div>
                            <div class="form-enquiry">
                                <form method="POST" accept-charset="UTF-8" id="contact-form" novalidate="novalidate">
                                    
                                    <div class="form-group">
                                        <label for="name" class="required">Your Name</label>
                                        <input class="form-control" name="name" type="text" id="form-name">
                                    </div>

                                    <div class="form-group">
                                        <label for="company">Company Name</label>
                                        <input class="form-control" name="company" type="text" id="form-company">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="required">Your Email</label>
                                        <input class="form-control" name="email" type="text" id="form-email">
                                    </div>

                                    <div class="form-group">
                                        <label for="telephone" class="required">Your Telephone Number</label>
                                        <input class="form-control" name="telephone" type="text" id="form-telephone">
                                    </div>

                                    <div class="form-group">
                                        <label for="message" class="required">Message</label>
                                        <textarea class="form-control" name="message" cols="50" rows="10" id="form-message">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
                                            
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="newsletter-tickboxarea">
                                            <input type="checkbox" id="customCheckbox">
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
                                        <button class="btn btn-enquiry">Send Enquiry</button>
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
</body>
</html>
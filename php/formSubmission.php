<?php
// session_start();
// include("php/dbConnection.php");
// include("php/postData.php");

// if (!isset($_SESSION['success']))
// {
//     $_SESSION['success'] = false;
    
// }
// $_SESSION['success'] = false;
// echo $_SESSION['success'];
// if (!isset($_SESSION['errorMessage']))
// {
//     $_SESSION['errorMessage'] = [];
// }

// function sanatiseInput($input)
// {
//     $input = htmlspecialchars($input);
//     $input = trim($input);
//     $input = stripslashes($input);
//     return $input;
// }

// function validateInput($postData, $input, $regex=true)
// {
//     if (empty($postData) == true)
//     {
//         array_push($_SESSION['errorMessage'], $input . " is empty.");
//         $_SESSION[$input . "-valid"] = false;
//         return false;
//     }
//     else if ($regex == false)
//     {
//         array_push($_SESSION['errorMessage'], $postData . " is not the correct format");
//         $_SESSION[$input . "-valid"] = false;
//         return false;
//     }
//     else
//     {
//         $_SESSION[$input . "-valid"] = true;
//         return true;
//     }
    
// }



// if ($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     echo 'Request Method has been set to POST (button pressed)';
//     // Filering / Sanitising all inputs and storing the values into session variables

//     $name = sanatiseInput($_POST['name']);
//     $_SESSION['name'] = $name;

//     $company = sanatiseInput($_POST['company']);
//     $_SESSION['company'] = $company;

//     $email = sanatiseInput($_POST['email']);
//     $_SESSION['email'] = $email;

//     $telephone = sanatiseInput($_POST['telephone']);
//     $_SESSION['telephone'] = $telephone;

//     $message = sanatiseInput($_POST['message']);
//     $_SESSION['message'] = $message;
    
//     $marketing = $_POST['checkbox-marketing'];

//     if ($marketing != "no")
//     {
//         $marketing = "yes";
//     }


//     $_SESSION['name-valid'] = true;
//     $_SESSION['email-valid'] = true;
//     $_SESSION['telephone-valid'] = true;
//     $_SESSION['message-valid'] = true;

//     $nameRegex = "/^[a-zA-Z-' ]*$/";
//     $phoneRegex = "/^\+?\(?([0-9]{2,4})[)\s\d.-]+([0-9]{3,4})([\s.-]+([0-9]{3,4}))?$/";

//     //function validateInput($postData, $input, $regex=true)
//     $isNameValid = validateInput($name, "name", preg_match($nameRegex, $name));
//     $isEmailValid = validateInput($email, "email", filter_var($email, FILTER_VALIDATE_EMAIL));
//     $isPhoneValid = validateInput($telephone, "telephone", preg_match($phoneRegex, $telephone));
//     $isMessageValid = validateInput($message, "message");

//     if ($isNameValid && $isEmailValid && $isPhoneValid && $isMessageValid)
//     {
//         postData($name, $email, $company, $telephone, $message, $marketing);

//         unset($_SESSION['name']);
//         unset($_SESSION['email']);
//         unset($_SESSION['company']);
//         unset($_SESSION['telephone']);
//         unset($_SESSION['message']);
//         unset($_SESSION['marketing']);

//         $_SESSION['success'] = true;
//         $_SESSION['errorMessage'] = [];

//     }

//     header("Location: contact-us.php#btn-enquiry");
//     echo 'Data submitted to the Database Successfully';
//     exit();






// }













?>
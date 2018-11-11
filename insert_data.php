<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thecliof_usersdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 //File data
    $uploadDirectory = "uploads/";

    $errors = []; // Store all foreseen and unforseen errors here

    $fileExtensions = ['pdf','doc','docx','txt','rtf','jpg','jpeg','png'];

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));
    
    $uploadPath = $uploadDirectory . basename($fileName);

    
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

        //File validation
        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file<br>";
        }

        if ($fileSize > 20000000) {
            $errors[] = "This file is more than 20MB. Sorry, it has to be less than or equal to 20MB<br>";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if (!$didUpload) {
                echo "An error occurred somewhere. Try again or contact the admin<br>";
                // echo "The file " . basename($fileName) . " has been uploaded<br>";
            }
            // else {
            //   echo "An error occurred somewhere. Try again or contact the admin<br>";
            // }
         } // else {
        //     foreach ($errors as $error) {
        //         echo $error . "These are the errors" . "\n";
        //     }
        // }
    
    
    //Form data
    if(isset($_POST['user_name']) && isset($_POST['user_email']) && isset($_POST['user_name'])!='' && isset($_POST['user_email'])!='' && $didUpload) 
    {
        $name = $_POST['user_name'];
        $email = $_POST['user_email'];
        $number = $_POST['contact_number'];
        $type = $_POST['user_presentation'];
        $conference = $_POST['conference'];
        $filename = basename($fileName);
        $address1 = $_POST['user_address1'];
        $address2 = $_POST['user_address2'];
        $city = $_POST['user_city'];   
        $state = $_POST['user_state'];
        $state = $_POST['user_country'];
        $zip_code = $_POST['user_zip'];

 //   echo $name, $email, $number, $type, $user_filepath, $address1, $address2, $city, $state, $country, $zip_code;

        $sql = "INSERT INTO users_data (user_name, user_email, contact_number, user_presentation, conference, user_filename, user_address1, user_address2, user_city, user_state, user_country, user_zip) VALUES ('$name', '$email', '$number', '$type', '$conference', '$filename', '$address1', '$address2', '$city', '$state', '$country', '$zip_code')";
        
        if(mysqli_query($conn, $sql)){
        //  echo "<br><h5>New record created successfully</h5></br>";
            send_email(); //Sending email after successful submission.
        }
       // else{
         // echo "Error: ". $sql . "<br>" . mysqli_error($conn);
       // }
    }
    
}

//Mail function
function send_email()
{
    require("mail/src/PHPMailer.php");
    require("mail/src/SMTP.php");
    
    global $name;
    global $email;
    global $number;
    global $type;
    global $conference;
    global $uploadDirectory;
    global $fileName;
    global $address1;
    global $address2;
    global $city;
    global $state;
    global $country;
    global $zip;
    
    
    
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    
    // $mail->SMTPDebug = 2;  debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "riconferences";
    $mail->Password = "Riconferences@111";
    $mail->SetFrom("riconferences@gmail.com");
    $mail->Subject = "New Abstract Submission - ".$conference;
    $mail->Body = "You have received a new abstract submission <br>Name : $name <br> Conference : $conference <br>Contact number: $number <br>Presentation type: $type <br> Email : $email <br> Abstract filename : $fileName <br>Adress : $address1 $address2<br> City : $city <br>State : $state<br>Country : $country<br>Zip: $zip<br> <p>Thanks,<br>Team RI CONFERENCES</p>";
    $mail->AddAddress('riconferences@gmail.com');
    
    //Attachments
    $file = $uploadDirectory.$fileName;
    $mail->addAttachment($file, $conference);    // Optional name
    
     if($mail->Send()) {
          header("Location:https://riconferences.com/thank-you.php");
     } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
     }
}
mysqli_close($conn);
?>
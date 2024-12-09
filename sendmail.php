<link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">

<?php

require_once('includes/connect.php');

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$msg = isset($_POST['message']) ? $_POST['message'] : '';

$errors = [];


$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$msg = trim($msg);

if(empty($name)) {
    $errors['name'] = 'Name cant be empty';
}

if(empty($msg)) {
    $errors['message'] = 'Comment field cant be empty';
}

if(empty($phone)) {
    $errors['phone'] = 'Phone field cant be empty';  
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(!empty($errors)) {
    foreach($errors as $error) {
        echo '<p class="error_form">' .($error). '</p>';
    }
} else {

    $query = "INSERT INTO CONTACT (NAME, EMAIL, PHONE, MESSAGE) VALUES ('$name', '$email', '$phone', '$msg')";

    if(mysqli_query($connect, $query)) {
  
        $to = 'rodrigonn@gmail.com';
        $subject = 'Message from your Portfolio site!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: ".$name."\n";
        $message .= "Email: ".$email."\n";
        $message .= "Phone: ".$phone."\n";
        $message .= "Message: ".$msg."\n";

        mail($to, $subject, $message);

  
        header('Location: index.php');
        exit();  
    }
}

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // You can add further processing here, such as sending an email or saving the data to a database.
    
    // For this example, let's simply display the submitted data.
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
} else {
    echo "Invalid request.";
}
?>

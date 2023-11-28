<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $designation = $_POST["designation"];
    $signature = $_POST["signature"];
    $communicationAddress = $_POST["communicationAddress"];
    $businessAddress = $_POST["businessAddress"];
    $state = $_POST["state"];
    $district = $_POST["district"];

    // Prepare email content
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New IDC Member Registration";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nDesignation: $designation\nSignature: $signature\nCommunication Address: $communicationAddress\nBusiness Address: $businessAddress\nState: $state\nDistrict: $district";

    // Send email
    mail($to, $subject, $message);

    // Redirect after submission (you can customize the URL)
    header("Location: thank_you.html");
    exit();
}
?>

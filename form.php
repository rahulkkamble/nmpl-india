<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $lethal_pistols = $_POST['lethal_pistols'];
    $name = $_POST['name'];
    $adhar_card = $_POST['adhar_card'];
    $pan_card = $_POST['pan_card'];
    $uin_number = $_POST['uin_number'];
    $validity_date = $_POST['validity_date'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // Here you can perform any necessary validation or processing of the form data
    
    // For demonstration, let's simply log the data
    $log_data = "Type of Pistols: $lethal_pistols\n";
    $log_data .= "Name: $name\n";
    $log_data .= "Aadhaar Card Number: $adhar_card\n";
    $log_data .= "PAN Card Number: $pan_card\n";
    $log_data .= "UIN Number: $uin_number\n";
    $log_data .= "License Renewed Validity Date: $validity_date\n";
    $log_data .= "Email: $email\n";
    $log_data .= "Phone Number: $phone_number\n";
    $log_data .= "Address: $address\n";
    $log_data .= "=================================================\n";

    // Log the data to a file (You might need to adjust the file path)
    $log_file = fopen("form_data.log", "a") or die("Unable to open file!");
    fwrite($log_file, $log_data);
    fclose($log_file);

    // Send a response back to the client
    echo "Form data submitted successfully!";
} else {
    // If someone tries to access this file directly
    echo "Access denied!";
}
?>

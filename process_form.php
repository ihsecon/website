<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $email = isset($_GET["email"]) ? $_GET["email"] : "";

    if (!empty($email)) {
        $data = "Email: " . $email . "\n";

        // Open the file in append mode
        $file = fopen("emails.txt", "a");

        if ($file) {
            fwrite($file, $data);
            fclose($file);
            echo "Email has been successfully written to emails.txt";
        } else {
            echo "Error writing to file";
        }
    } else {
        echo "Email field is required";
    }
}
?>
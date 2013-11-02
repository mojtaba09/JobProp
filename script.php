<?php
    // Check if the user submitted this form
    if (isset($_POST["myForm"])) {
        // Open the file in write mode
        $handle = fopen("writetest.txt","w+");
         
        // If successful
        if ($handle) {
            // Write to that handle the username submitted in the form and the date
            fwrite($handle,$_POST["values"];
             
            // Close the file
            fclose($handle);
        }
    }
?>

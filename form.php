<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = trim($_POST["name"]);
        $contact = trim($_POST["contact"]);

        $place = trim($_POST["place"]);
        $date = trim($_POST["date"]);
        $time = trim($_POST["time"]);

        // Check that data was sent to the mailer.
        if ( empty($name) OR empty($contact)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Vyplňte nám prosím <strong>vaše jméno</strong> a <strong>kontakt</strong> na který se vám můžeme ozvat.";
            exit;
        }

        // Set the recipient email address.
        // FIXME: Update this to your desired email address.
        $recipient = "info@kuchyne-karasek.cz";

        // Set the email subject.
        $subject = "Návštěva studia s konzultací - $name";

        // Build the email content.
        $email_content = "Jméno: $name\n";
        $email_content .= "Kontakt: $contact\n\n";
        $email_content .= "vybrané studio: $place\n";
        $email_content .= "Datum: $date\n";
        $email_content .= "Čas: $time\n";

        $headers = array("From: info@kuchyne-karasek.cz",
            "Reply-To: info@kuchyne-karasek.cz.cz",
            "X-Mailer: PHP/" . PHP_VERSION
        );
        $headers = implode("\r\n", $headers);

        // Send the email.
        if (mail($recipient, $subject, $email_content, $headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "<i></i><h2>Děkujeme za váš zájem o konzultaci!</h2>";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Omlouváme se, ale zprávu se nepodařilo odeslat.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Něco se pokazilo, zkuste to prosím znovu.";
    }

?>

<?php

/**
 * Plugin Name: Insecurely force SMTP
 * Description: Force usage of SMTP protocol when sending emails
 * Version: 1.0
 * Author: Cristian Radulescu
 * URL: https://github.com/cristianradulescu/wp-insecurely-force-smtp
 */

function force_smtp(\PHPMailer\PHPMailer\PHPMailer $PHPMailer) {

    // Debugging mode
    // $PHPMailer->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_LOWLEVEL;

    // Emails will be sent from this address
    $PHPMailer->Username = 'myemailadderess@mycoolwordpresssite';

    // Storing the password here in plain text is unsecure - use at your own risk!
    $PHPMailer->Password = 'S3cr3tPassw0rd!';

    // This value is usually provided by the hosting provider
    $PHPMailer->Host = 'myWebsiteHost';

    $PHPMailer->isSMTP();
}

add_action('phpmailer_init', 'force_smtp');
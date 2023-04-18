<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use chillerlan\QRCode\QRCode;
//Load Composer's autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';

$data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';

// quick and simple:
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
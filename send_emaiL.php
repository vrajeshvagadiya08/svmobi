<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];
	
	
  // Perform additional validation and email sending here
  // For simplicity, this example only echoes the message as the response
 // echo "Hello, " . $name . "! Your message has been sent: " . $message;
  // multiple recipients
$to = 'hardik.rana@rysun.com';

// subject
$subject = 'You have new enquire';

// message
$message_email = '
<html>
<head>
  <title>SVMobi</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: Open Sans, sans-serif;
            font-weight: 400;
        }

        table {
            border-collapse: collapse;
        }

        table td {
            border-collapse: collapse;
        }

        img {
            border: none;
        }

        @media only screen and (max-width: 480px) {
            table#canspamBar td {
                font-size: 14px !important;
            }

            table#canspamBar td a {
                display: block !important;
                margin-top: 10px !important;
            }
        }
    </style>
</head>
<body>
<table width="700" border="0" align="center" cellpadding="0" style="border: 1px solid #E6E6E6; margin: auto;">
<tr>
    <td valign="top" align="center">
      <table width="700" border="0" cellpadding="0" cellspacing="0"
        style="font-family: Open Sans, sans-serif;font-weight: 400;">
          <tr>
              <td colspan="2" style="padding-top: 10px; padding-left: 20px; padding-bottom: 10px;">
                  <a href="" title="SVMobi" style="display: block;"><img src="http://localhost/Static-HTML/svmobi-ready/assets/images/resources/svmobi-logo.png" style="width: 155px; height: 40px; display: block;"></a>
              </td>
          </tr>
      </table>
        <table width="700" border="0" cellpadding="0" cellspacing="0"
            style="font-family: Open Sans, sans-serif;font-weight: 400;background: #F6F6F6;">
            <tr>
                <td valign="middle" style="padding: 20px 20px 40px;">
                    <table style="width:100%;">
                        <tr>
                            <td colspan="2"
                                style="font-weight: 700;color: #000000;font-size:28px;line-height: 40px;padding-top:20px;">
                                Dear SVMobi Administrator,
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"
                                style="font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:15px;">
                                We received the below enquiry through the contact us form on our website.
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:132px;font-weight: 500;color: #000000; font-size:18px;line-height: 24px;padding-top:30px;">
                                Name:
                            </td>
                            <td
                                style="font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:30px;">
                                '.$name.'
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:132px;font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                Email:
                            </td>
                            <td
                                style="font-weight: 500;color: #000000;font-size:16px;line-height: 34px;padding-top:16px;">
                                '.$email.'
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:132px;font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                Phone:
                            </td>
                            <td
                                style="font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                '.$phone.'
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:132px;font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                Subject:
                            </td>
                            <td
                                style="font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                '.$subject.'
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:132px;font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                Message:
                            </td>
                            <td
                                style="font-weight: 500;color: #000000;font-size:18px;line-height: 24px;padding-top:16px;">
                                '.$message.'
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="left" valign="top" style="font-weight: 700;color: #000000;font-size:18px;line-height: 24px;padding-top:30px;">
                                Team SVMobi
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Additional headers

// Mail it
mail($to, $subject, $message_email, $headers);
mail($email, $subject, $message_email, $headers);
echo "your message has been sent successfully";
}
?>

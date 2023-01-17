<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PhpMailer/src/Exception.php';
    require 'PhpMailer/src/PHPMailer.php';
    require 'PhpMailer/src/SMTP.php';

    if (isset($_POST['submit'])) {
      if (!(empty($_POST['cEmail']) || empty($_POST['cName']) || empty($_POST['cSubject']) || empty($_POST['cMessage']))) {
          $mail = new PHPMailer(true); // Passing `true` enables exceptions

          // Server settings
          $mail->isSMTP(); // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
          $mail->SMTPAuth = true; // Enable SMTP authentication
          $mail->Username = 'xyujinwho@gmail.com'; // SMTP username
          $mail->Password = 'tmawyrhyozcbzeyn'; // SMTP password
          $mail->SMTPSecure = 'ssl';
          $mail->Port = 465;

          $mail->setFrom('xyujinwho@gmail.com', 'The TechOut'); // Sender Email
          $mail->addAddress($_POST['cEmail'], $_POST['cName']); // Add a recipient

          // Content
          $mail->isHTML(true); // Set email format to HTML
          $mail->Subject = 'Received: ' . $_POST['cSubject'];
          $mail->Body    = "<style>
              table, td, div, h1, p {
                font-family: Arial, sans-serif;
              }

              a {
                  text-decoration: none;
              }   

              @media screen and (max-width: 530px) {
                .col-lge {
                  max-width: 100% !important;
                }
              }
              @media screen and (min-width: 531px) {
                .col-sml {
                  max-width: 27% !important;
                }
                .col-lge {
                  max-width: 73% !important;
                }
              }
          </style>

          <body style=\"margin: 0; padding: 0; background-color: gray;\">
            <div style=\"text-size-adjust: 100%; background-color: #939297;\">
              <table style=\"width: 100%; border: none; border-spacing: 0;\">

                <tr>
                  <td align=\"center\" style=\"padding:0;\">
                    <table style=\"width: 94%; max-width: 600px; border: none; border-spacing: 0; text-align: left; font-size: 16px; line-height: 22px; color: #363636;\">

                      <tr>
                        <td style=\" padding: 30px; background-color: #ffffff; \">
                          <h1 style=\"margin-top: 0; margin-bottom: 16px; font-size: 26px; line-height: 32px; font-weight: bold;\">Thanks for sending out a message!</h1>
                          <p style=\"margin: 0;\">We read all those messages, to improve and to be inspired! <em>The Tech Out</em> are passionate about providing our customers with the best possible shopping experience.</p>
                        </td>
                      </tr>

                      <tr>
                        <td style=\"padding: 0; font-size: 24px; line-height: 28px; font-weight: bold;\">
                          <img src=\"https://www.denofgeek.com/wp-content/uploads/2021/07/BeQuiet.jpg?fit=1200%2C675\" width=\"600\" style=\"width: 100%; height: auto; display: block; border: none; color: #363636;\">
                        </td>
                      </tr>

                        <td style=\"padding: 30px; background-color: #ffffff;\">
                          <p style=\"margin: 0; font-size: 10px;\"> This is your message >>>>> &emsp; <em>". $_POST['cMessage'] ." </em></p>
                        </td>
                      </tr>

                      <tr>
                        <td style=\"padding: 30px; text-align: center; font-size: 12px; background-color: #404040; color: #cccccc;\">
                          <p style=\"margin: 0 0 8px 0;\">
                              <a href=\"http://www.facebook.com/\"><img src=\"https://assets.codepen.io/210284/facebook_1.png\" width=\"40\" height=\"40\" style=\"display: inline-block; color: #cccccc;\"></a>
                              <a href=\"http://www.twitter.com/\"><img src=\"https://assets.codepen.io/210284/twitter_1.png\" width=\"40\" height=\"40\" style=\"display: inline-block; color: #cccccc;\"></a>
                          </p>
                          <p style=\"margin: 0; font-size: 14px; line-height: 20px;\">&reg; 2023. The Tech Out Company, Region 1, Philippines<br/></p>
                        </td>
                      </tr>

                    </table>
                  </td>
                </tr>

              </table>
            </div>
          </body>";

        if(!$mail->send()) {
          header("Location: ../homepage.php?email-unsuccessful#contact");
          exit();
        } 
        else {
          header("Location: ../homepage.php?email-successful#contact");
          exit();
        }
      }
      else {
          header("Location: ../homepage.php?empty-fields#contact");
      }
    }    
    

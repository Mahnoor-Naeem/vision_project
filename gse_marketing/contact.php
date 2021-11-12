<?php 
include "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];

    $query = "INSERT INTO queries(q_name,q_email,q_sub,q_msg)VALUES('$name','$email','$subject','$msg')";
    $result = mysqli_query($con, $query); 
    if($result){
        
        $alert = "<b>Thanks for your message. We will reach you soon...!</b>";
    }else{
        $error = "<b>Unseccesfull. FATAL error</b>";
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<div class="row contact-form">

                    <!-- <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28950.620811550118!2d66.98694351557651!3d24.903861517028073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb35b7f5bfd6e89%3A0xc463ba9517671d59!2sKarachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1636532598410!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                    
                    </div> -->
                    <div class="col-md-8 m-auto">
                        <div id="success"></div>
                        <form action="" method="post">
                        <?php if(isset($alert)){?>
                    <div class="alert alert-success" role="alert">
  <?php echo $alert; ?> 
                  </div>
<?php
} ?>
           <?php if(isset($error)){?>
	<div class="alert alert-danger" role="alert">
  <?php echo $error; ?> 
                  </div>
<?php
} ?>
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" name="msg" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" name="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
                    </body>
                    </html>
<?php
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Story form</title>
</head>
<body>
	<?php if(!empty($message)):?>
		<p><?php echo $message;?></p>
	<?php endif;?>
    <h2>Tell us your story</h2>
    <div class="wrapper">
	<div class="inner contact">
    <!-- Form Area -->
    <div class="contact-form">
        <!-- Form -->
        <form id="contact-us" method="post" action="#">
            <!-- Left Inputs -->
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
                <!-- Name -->
                <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                <!-- Email -->
                <input type="text" name="mail" id="mail" required="required" class="form" placeholder="Image" />
            </div><!-- End Left Inputs -->
            <!-- Right Inputs -->
            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                <!-- Message -->
                <textarea name="message" id="message" class="form textarea"  placeholder="Story"></textarea>
            </div><!-- End Right Inputs -->
            <!-- Bottom Submit -->
            <div class="relative fullwidth col-xs-12">
                <!-- Send Button -->
                <button action="admin/scripts/send_email.php" method="get" type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
            </div><!-- End Bottom Submit -->
            <!-- Clear -->
            <div class="clear"></div>
        </form>

        <!-- Your Mail Message -->
        <div class="mail-message-area">
            <!-- Message -->
            <div class="alert gray-bg mail-message not-visible-message">
                <strong>Thank You !</strong> Your email has been delivered.
            </div>
        </div>

    </div><!-- End Contact Form Area -->
</div><!-- End Inner -->
<div>

</body>
</html>

<style>

    .wrapper {
        width: 100%;
    }
    h1{text-align: center;}

#contact{
    padding:10px 0 10px;
    height: 100%;
  }

  .contact-text{
    margin:45px auto;
  }

  .mail-message-area{
    width:100%;
    padding:0 15px;
  }

  .mail-message{
    width: 100%;
    background:rgba(255,255,255, 0.8) !important;
    -webkit-transition: all 0.7s;
    -moz-transition: all 0.7s;
    transition: all 0.7s;
    margin:0 auto;
    border-radius: 0;
  }

  .not-visible-message{
    height:0px;
    opacity: 0;
  }

  .visible-message{
    height:auto;
    opacity: 1;
    margin:25px auto 0;
  }

/* Input Styles */

  .form{
    width: 100%;
    padding: 15px;
    background:#f8f8f8;
    border:1px solid rgba(0, 0, 0, 0.075);
    margin-bottom:25px;
    color:#727272 !important;
    font-size:13px;
    -webkit-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
  }

  .form:hover{
    border:1px solid #E1332D;
  }

  .form:focus{
    color: white;
    outline: none;
    border:1px solid #E1332D;
  }

  .textarea{
    height: 200px;
    max-height: 200px;
    max-width: 100%;
  }
  
/* Generic Button Styles */

  .button{
    padding:8px 12px;
    background:#0A5175;
    display: block;
    width:120px;
    margin:10px 0 0px 0;
    border-radius:3px;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    text-align:center;
    font-size:0.8em;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .button:hover{
    background:#E1332D;
    color:white;
  }

/* Send Button Styles */

  .form-btn{
    width:180px;
    display: block;
    height: auto;
    padding:15px;
    color:#fff;
    background:#E1332D;
    border:none;
    border-radius:3px;
    outline: none;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    margin:auto;
    box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -moz-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
    -webkit-box-shadow: 0px 1px 4px rgba(0,0,0, 0.10);
  }

  .form-btn:hover{
    background:#111;
    color: white;
    border:none;
  }

  .form-btn:active{
    opacity: 0.9;
  }
center{
  margin-top:330px;
}
input {
    position: relative;
    z-index: 9999;
}
</style>

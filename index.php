<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/a2p-favico-128x60.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Approved to Print</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  
  <!-- AJAX Contact Form -->
            <!--<script type="text/javascript" src="assets/js/jquery.jigowatt.js"></script>-->
            <script type="text/javascript">
                jQuery(document).ready(function(){

                    $('#contactform').submit(function(){
                
                        var action = $(this).attr('action');
                
                        $("#message").slideUp(750,function() {
                        $('#message').hide();
                
                        $('#submit')
                            
                            .attr('disabled','disabled');
                
                        $.post(action, {
                            name: $('#name').val(),
                            email: $('#email').val(),
                            phone: $('#phone').val(),
                            comments: $('#comments').val()
                        },
                            function(data){
                                document.getElementById('message').innerHTML = data;
                                $('#message').slideDown('slow');
                                $('#contactform img.loader').fadeOut('slow',function(){$(this).remove()});
                                $('#submit').removeAttr('disabled');
                                if(data.match('success') != null) $('#contactform').slideUp('slow');
                
                            }
                        );
                
                        });
                
                        return false;
                
                    });
                
                });
            </script>
        <!-- AJAX Contact Form -->  
  
</head>
<body>
<section id="ext_menu-9">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index.html" class="navbar-logo"><img src="assets/images/a2p-logo-final-1660x128.png" alt="Approved to Print"></a>
                        <a class="navbar-caption" href="http://approvedtoprint.com">Approved to Print</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.html#features3-2">EQUIPMENT</a></li><li class="nav-item"><a class="nav-link link" href="index.html#form1-5">CONTACT</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box3-8" style="background-image: url(assets/images/hands-people-woman-working-2000x1333.jpg); padding-top: 200px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Make an impression</h3>
                <div class="lead"><p>We offer a wide variety of print media to fit your needs.</p></div>
                <div><a class="btn btn-secondary" href="index.html#form1-5">Put your ideas into print</a></div>
                <div class="scroll-down-arrow"><a href="index.html#features3-2"><img src="assets/images/scroll-down-arrrow.png"></a></div>
            </div>
        </div>
    </div>

</section>

<!-- <section class="mbr-cards mbr-section mbr-section-nopadding" id="features4-7" style="background-color: rgb(255, 255, 255);">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-phone mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Bootstrap 4</h4>
                        <h5 class="card-subtitle">Bootstrap 4 has been noted</h5>
                        <p class="card-text">Bootstrap 4 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-edit mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Responsive</h4>
                        <h5 class="card-subtitle">One of Bootstrap 4's big points</h5>
                        <p class="card-text">One of Bootstrap 4's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-briefcase mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Web Fonts</h4>
                        <h5 class="card-subtitle">Google has a highly exhaustive list of fonts</h5>
                        <p class="card-text">Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-phone mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Bootstrap 4</h4>
                        <h5 class="card-subtitle">Bootstrap 4 has been noted</h5>
                        <p class="card-text">Bootstrap 4 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-edit mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Responsive</h4>
                        <h5 class="card-subtitle">One of Bootstrap 4's big points</h5>
                        <p class="card-text">One of Bootstrap 4's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-briefcase mbr-iconfont mbr-iconfont-features4" style="color: rgb(255, 255, 255);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Web Fonts</h4>
                        <h5 class="card-subtitle">Google has a highly exhaustive list of fonts</h5>
                        <p class="card-text">Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</section> -->

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-2" style="background-color: rgb(255, 255, 255);">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><img src="assets/images/flatbed-600x399.jpg" class="card-img-top" alt="Flatbed" title="Flatbed"></div>
                  <div class="card-block">
                    <h4 class="card-title">Flatbed</h4>
                    
                    <p class="card-text">Mimaki JFX200</p>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="assets/images/roll-printing-600x400.jpg" class="card-img-top" alt="Roll Printing" title="Roll Printing"></div>
                    <div class="card-block">
                        <h4 class="card-title">Roll Printers</h4>
                        
                        <p class="card-text">Mimaki CJV300-130<br>Roland Sol Jet<br></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="assets/images/digital-600x400.jpg" class="card-img-top" alt="Digital Printing" title="Digital Printing"></div>
                    <div class="card-block">
                        <h4 class="card-title">Digital</h4>
                        
                        <p class="card-text">Xerox 1000<br>Xerox Nuvera 120 <br>Xerox Versant 3100 - 13x26<br></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><img src="assets/images/envelope-press-600x400.jpg" class="card-img-top" alt="Envelope Press" title="Envelope Press"></div>
                    <div class="card-block">
                        <h4 class="card-title">Envelope Press</h4>
                        
                        <p class="card-text">Halm Jet Super Jet<br></p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<section class="mbr-section bindery" id="msg-box5-3" style="background-color: rgb(239, 239, 239); padding-top: 0px; padding-bottom: 0px;">

    
    <div class="container">
        <div class="row">
            <div class="mbr-table-md-up">

              <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7 image-size" style="width: 56%;">
                  <div class="mbr-figure"><img src="assets/images/bindery-1400x933.jpg" alt="Bindery" title="Bindery"></div>
              </div>

              


              <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                  <h3 class="mbr-section-title display-2"><span style="color: inherit; font-size: 3rem; line-height: 1.1;">Bindery</span><br></h3>
                  <div class="lead">

                    <p>Polar 76 programmable cutter<br>Horizon SPF-200A saddle sticher<br>Horizon CRF-362 creaser/folder/perf<br>Clamco Shrink Wrap<br>Docupunch - auto punch <br>GBC - Autopunch<br>Rhino hand punch x3<br>Challenge 3-Hole Drill<br></p>

                  </div>

                  
              </div>


              

            </div>
        </div>
    </div>

</section>

<section class="mbr-section" id="form1-5" style="background-color: rgb(0, 86, 159); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">CONTACT US</h3>
                    <small class="mbr-section-subtitle">Got a question? Need a quote? We can help!</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding contact-form">
        <div class="container">
            <div class="row">
                <!-- <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid"> -->
                <div class="col-xs-12 col-lg-10 col-lg-offset-1">


                    <!-- <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div> -->


                    <!-- <form action="contact.php" method="post" name="contactform" id="contactform" data-form-title="CONTACT FORM"> -->
                    <form action="contact.php" method="post" name="contactform" id="contactform">

                        <input type="hidden" value="ikInIPizGnRYCuyjah0aflvhYyvikxvxKHoAKrBwNFT6rqRQBVz6v0jK4vUCgPN9QVGVEUAHM8qKj9wvK6x9h0w/5YxGitZtWn62Z8bFbkTV/GHCYLTtWgd8txHjFTl4" data-form-email="true">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-5-name">Name<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" id="name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-5-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" id="email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-5-phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" id="phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-5-message">Message</label>
                            <textarea class="form-control" name="comments" rows="7" id="comments"></textarea>
                        </div>

                        <div><button type="submit" class="btn btn-secondary">SEND</button></div>

                    </form>
                    <div id="message" class="alert alert-form alert-success text-xs-center"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright &copy; 2017 Approved to Print.</p>
    </div>
</footer>


  
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
 <!-- contact form -->
 <?php

if(!$_POST) exit;

// Email address verification, do not edit.
function isEmail($email) {
	return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
}

if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$email    = $_POST['email'];
$phone   = $_POST['phone'];
$comments = $_POST['comments'];


if(trim($name) == '') {
	echo '<div class="error_message">Attention! You must enter your name.</div>';
	exit();
} else if(trim($email) == '') {
	echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
	exit();
}
// else if(trim($phone) == '') {
// 	echo '<div class="error_message">Attention! Please enter a valid phone number.</div>';
// 	exit();
// } else if(!is_numeric($phone)) {
// 	echo '<div class="error_message">Attention! Phone number can only contain digits.</div>';
// 	exit();
// }
else if(!isEmail($email)) {
	echo '<div class="error_message">Attention! You have enter an invalid e-mail address, try again.</div>';
	exit();
} else if(trim($comments) == '') {
	echo '<div class="error_message">Attention! Please enter your message.</div>';
	exit();
} 

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "cheerstodesign@gmail.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = 'New Form Message from ' . $name . ';

$e_subject = 'New Form Message from ' . $name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_body = "You have been contacted by: $name" . PHP_EOL . PHP_EOL;
$e_reply = "E-mail: $email\r\nPhone: $phone";
$e_content = "Message:\r\n$comments" . PHP_EOL . PHP_EOL;


$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

if(mail($address, $e_subject, $msg, $headers)) {

	// Email has sent successfully, echo a success page.

	echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h3>Message Sent!</h3>";
	echo "<p>We will be in touch with you soon regarding your request.</p>";
	echo "</div>";
	echo "</fieldset>";

} else {

	echo 'ERROR!';

}
?>
  </body>
</html>

<?php include($_SERVER['DOCUMENT_ROOT'].'/wp-config.php');

if(isset($_POST['contact_us'])){

  require_once('recaptchalib.php');
  $privatekey = "6LcQCeASAAAAAHL-F_F4aYSnZTwaOw3AsfoUoLQ_";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again.");
  } 


    $message = "Name: ".$_POST['name']."<br />Email: ".$_POST['email']."<br />Phone: ".$_POST['phone']."<br />Message: ".$_POST['message'];
    
    $emailOne = get_option('admin_email');
    $emailTwo = "dcenit@premierecreative.com";
    
    add_filter( 'wp_mail_content_type', 'set_html_content_type' );
    $res = wp_mail( array($emailOne, $emailTwo), $_POST['subject'], $message );
    remove_filter( 'wp_mail_content_type', 'set_html_content_type' ); // reset content-type to to avoid 
    
    if(!$res){
        echo "Fatal error! Please try later...";
        die();
    }
}
function set_html_content_type()
{
	return 'text/html';
}
?>
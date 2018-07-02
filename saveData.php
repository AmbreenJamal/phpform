<?php
require_once('config.php');
if (isset($_POST['action'])) {
   switch ($_POST['action']) {
        case 'Submit':
        $name = $_POST['name'];
        $email = $_POST['email'];
		$comments = $_POST['comments'];
        $optradio = $_POST['optradio'];
		 echo "please waite";
		 var_dump($email);
		 exit;
        User::SaveUser($name,$email,$comments,$optradio);
           break;
    /*case 'SubmitVote':
        if(isset($_POST['poll_option_id']))
        {
        //echo "<span>You have selected :<b> ".$_POST['pollValue']."</b></span>";
          $poll_option_id = $_POST['poll_option_id'];
          $poll_id = $_POST['poll_id'];
           Poll::saveVote($poll_option_id, $poll_id);
        exit;
        }
        else{
             echo "<span>Please choose any radio button.</span>";
        exit;
    }
    break*/
    }

}
	else {
		
		echo "post not set yet"";
	}
?>
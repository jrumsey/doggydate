<?php

if(doggydate_isLoggedin()) {
		redirect('home');
}
$username = input('username');
$password = input('password');

if(empty($username) || empty($password)) {
		ossn_trigger_message(ossn_print('login:error') , 'error');
		redirect();
}
$user = doggydate_user_by_username($username);

////check if username is email
//if(strpos($username, '@') !== false) {
//		$user     = doggydate_user_by_email($username);
//		$username = $user->username;
//}
//
//if($user && !$user->isUserVALIDATED()) {
//		$user->resendValidationEmail();
//		doggydate_trigger_message(ossn_print('doggydate:user:validation:resend'), 'error');
//		redirect(REF);
//}
//$vars = array(
//		'user' => $user
//);
//doggydate_trigger_callback('user', 'before:login', $vars);
//
//$login           = new DoggyDateUser;
//$login->username = $username;
//$login->password = $password;
//if($login->Login()) {
//		//One uneeded redirection when login #516
//		doggydate_trigger_callback('login', 'success', $vars);
//		redirect('home');
//} else {
//		redirect('login?error=1');
//}

?>


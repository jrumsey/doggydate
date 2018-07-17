<?php


header('Content-Type: application/json');

$user['username'] = input('username');
$user['firstname'] = input('firstname');
$user['lastname'] = input('lastname');
$user['email'] = input('email');
$user['reemail'] = input('email_re');
$user['password'] = input('password');

$fields = doggydate_user_fields_names();
foreach($fields['required'] as $field){
	$user[$field] = input($field);
}

if (!empty($user)) {
    foreach ($user as $field => $value) {
        if (empty($value)) {
            $json['error'] = '1';
        }
    }
}
if (isset($json['error']) && !empty($json['error'])) {
    echo json_encode($json);
    exit;
}

if ($user['reemail'] !== $user['email']) {
    $em['dataerr'] = doggydate_print('email:error:matching');
    echo json_encode($em);
    exit;
}


$add = new DoggyDateUser;
$add->username = $user['username'];
$add->first_name = $user['firstname'];
$add->last_name = $user['lastname'];
$add->email = $user['email'];
$add->password = $user['password'];
$add->sendactiviation = true;

foreach($fields as $items){
	foreach($items as $field){
		$add->{$field} = $user[$field];
	}
}

if (!$add->isUsername()) {
    $em['dataerr'] = doggydate_print('username:error');
    echo json_encode($em);
    exit;
}
if (!$add->isPassword()) {
    $em['dataerr'] = doggydate_print('password:error');
    echo json_encode($em);
    exit;
}
if($add->isDoggyDateUsername()){
    $em['dataerr'] = doggydate_print('username:inuse');
    echo json_encode($em);
    exit;	
}
if($add->isDoggyDateEmail()){
    $em['dataerr'] = doggydate_print('email:inuse');
    echo json_encode($em);
    exit;	
}
//check if email is valid email 
if(!$add->isEmail()){
    $em['dataerr'] = doggydate_print('email:invalid');
    echo json_encode($em);
    exit;		
}
if ($add->addUser()) {
    $em['success'] = 1;
    $em['datasuccess'] = doggydate_print('account:created:email');
    echo json_encode($em);
    exit;
} else {
    $em['dataerr'] = doggydate_print('account:create:error:admin');
    echo json_encode($em);
    exit;
}
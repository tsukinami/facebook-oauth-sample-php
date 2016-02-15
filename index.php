<?php

session_start();

require 'vendor/autoload.php';
use Facebook\Facebook;

require_once 'config.php';

$fb = new Facebook([
    'app_id' => APP_ID,
    'app_secret' => APP_SECRET,
    'default_graph_version' => 'v2.5',
]);
$helper = $fb->getRedirectLoginHelper();

$permissions = ['email', 'public_profile'];
$loginUrl = $helper->getLoginUrl(LOGIN_URL, $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

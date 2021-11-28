<?php

$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
$title="Home";
$header=$view;
switch ($view) {
    case 'home':
        $title = "Home";
        $content = './home.php';
        break;

    case 'teslist':
        $title = "TES List";
        $content = 'pages/teslist/index.php';
        break;

    case 'announcement':
        $title = "Announcement";
        $content = 'pages/announement/index.php';
        break;

    case 'user':
        $title = "Users";
        $content = 'pages/users/index.php';
        break;

    case 'message':
        $title = "Message";
        $content = 'pages/messages/index.php';
        break;

    case 'profile':
        $title = "Profile";
        $content = 'pages/profile/index.php';
        break;

    case 'logout':
        $title = "Bye";
        $content = './logout.php';
        break;

    default:
        $title = "Home";
        $content = './home.php';
}
require_once  ("./theme/template.php");

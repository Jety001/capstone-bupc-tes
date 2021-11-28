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
        $content = 'php/user/teslist.php';
        break;

    case 'announcement':
        $title = "Announcement";
        $content = 'php/user/Announcement.php';
        break;

    case 'about':
        $title = "About";
        $content = 'php/user/ABOUT.php';
        break;

    case 'contact':
        $title = "Contact";
        $content = 'php/user/CONTACT.php';
        break;

    case 'message':
        $title = "Message";
        $content = 'php/user/index.php';
        break;

    case 'logout':
        $title = "Bye";
        $content = './logout.php';
        break;

    default:
        $title = "Home";
        $content = './home.php';
}
require_once  ("./theme/header.php");

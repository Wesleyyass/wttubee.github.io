<?php
// +------------------------------------------------------------------------+
// | @author Deen Doughouz (DoughouzForest)
// | @author_url 1: http://www.WT_Tubescript.com
// | @author_url 2: http://codecanyon.net/user/doughouzforest
// | @author_email: wowondersocial@gmail.com   
// +------------------------------------------------------------------------+
// | PlayTube - The Ultimate Video Sharing Platform
// | Copyright (c) 2017 PlayTube. All rights reserved.
// +------------------------------------------------------------------------+

// You can access the admin panel by using the following url: http://yoursite.com/admincp 

require 'assets/init.php';

if (IS_LOGGED == false || PT_IsAdmin() == false) {
	header("Location: " . PT_Link(''));
    exit();
}
if (!empty($_GET)) {
    foreach ($_GET as $key => $value) {
        $_GET[$key] = strip_tags($value);
    }
}
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = strip_tags($value);
    }
}

// autoload admin panel files
require 'admin-panel/autoload.php';
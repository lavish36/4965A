<?php
session_start();
$con=mysqli_connect("localhost","root","","ecomm");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'/navra/navra/');
define('SITE_PATH','http://127.0.0.1/navra/navra/');


define('INSTAMOJO_REDIRECT',SITE_PATH.'payment_complete.php');

define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('PRODUCT_MULTIPLE_IMAGE_SERVER_PATH',SERVER_PATH.'media/product_images/');
define('PRODUCT_MULTIPLE_IMAGE_SITE_PATH',SITE_PATH.'media/product_images/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');

define('INSTAMOJO_KEY','b1dce34a82d8c0eaf91e3ac52425c055');
define('INSTAMOJO_TOKEN','f11ed771e07746692fa4198119b58eab');


define('SMTP_EMAIL','ksha26652@gmail.com');
define('SMTP_PASSWORD','9829299265');


define('SMS_KEY','teDsFU5WbRgpBMLxZnG783PSaq49zrVm6kihHKcXjuTNQYfCov84eD2kjwAMv3gXEFdn7ItC5oRsHfaN');
?>
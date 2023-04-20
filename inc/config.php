<?php
use Krugozor\Database\Mysql\Mysql as Mysql;
include(ROOT . '/admin/MySQLlib/dbAccess.php');
include(ROOT . '/admin/MySQLlib/Mysql.php');
include(ROOT . '/admin/MySQLlib/Statement.php');
include(ROOT . '/admin/MySQLlib/Exception.php');


$connect = Mysql::create($db_host, $db_user, $db_password)->setDatabaseName($database)->setCharset("utf8");

$user_id = $_SESSION['authorization'];

$users = $connect -> query("SELECT * FROM `users` WHERE `user_id` = '?s'", $user_id);
$row = $users -> fetch_assoc();
$user_id = $row['user_id'];
$user_email = $row['user_email'];
$first_name = $row['first_name'];
$last_name = $row['last_name'];

// settings
$settings_query = $connect -> query("SELECT * FROM `settings` WHERE `id` = '1'");
$settings = $settings_query -> fetch_assoc();
$domain_redirect = $settings['domain_redirect'];
$head_footer_color = $settings['head_footer_color'];
$sidebar_color = $settings['sidebar_color'];

// Домен в виде mysite.com
$domain = "mysite.com";

// Адрес сайта виде https://mysite.com
$domain_url = "https://mysite.com";

?>
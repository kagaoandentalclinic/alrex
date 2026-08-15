<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'Alrex','password'=>'202cb962ac59075b964b07152d234b70','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url', getenv('APP_URL') ?: 'http://localhost/Alrex_System/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);

// DB creds: Railway's MySQL plugin injects MYSQLHOST/MYSQLUSER/etc; DB_* is a manual
// override; both fall back to the original XAMPP localhost defaults.
if(!defined('DB_SERVER')) define('DB_SERVER', getenv('MYSQLHOST') ?: (getenv('DB_SERVER') ?: 'localhost'));
if(!defined('DB_PORT')) define('DB_PORT', (int)(getenv('MYSQLPORT') ?: (getenv('DB_PORT') ?: 3306)));
if(!defined('DB_USERNAME')) define('DB_USERNAME', getenv('MYSQLUSER') ?: (getenv('DB_USERNAME') ?: 'root'));
if(!defined('DB_PASSWORD')) define('DB_PASSWORD', getenv('MYSQLPASSWORD') ?: (getenv('DB_PASSWORD') ?: ''));
if(!defined('DB_NAME')) define('DB_NAME', getenv('MYSQLDATABASE') ?: (getenv('DB_NAME') ?: 'alrexx_db'));

// SMTP creds, same fallback pattern.
if(!defined('SMTP_HOST')) define('SMTP_HOST', getenv('SMTP_HOST') ?: 'mail.smtp2go.com');
if(!defined('SMTP_USERNAME')) define('SMTP_USERNAME', getenv('SMTP_USERNAME') ?: 'alrex');
if(!defined('SMTP_PASSWORD')) define('SMTP_PASSWORD', getenv('SMTP_PASSWORD') ?: '12345678');
?>
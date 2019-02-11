<?php
#-----------------------------------------------------#
# =============     BOT TWEET WAKTU     ============= #
# Original Made by ./H1dek4zu!
# Copyright 2014 
# Hargai Jika Ingin Dihargai!!
# Twitter	: http://twitter.com/DHIMAZROBY
# Facebook	: http://www.facebook.com/DHIMAZROBY
# Thanks To My Lovely Weni Puji :*
# Thanks To JKT48 CYBER TEAM
# Thanks To SGB Team
# Thanks To All
#-----------------------------------------------------#
/* Memuat file yang dibutuhkan. */
session_start();
require_once('./twitteroauth/twitteroauth.php');

/* Login Robot. */
define('CONSUMER_KEY', '');  //Isi Dengan Consumer Key Mu
define('CONSUMER_SECRET', ''); //Isi Dengan Consumer Secret Mu 
define('ACCESS_TOKEN', ''); //Isi Dengan Access Token Mu 
define('ACCESS_TOKEN_SECRET', ''); //Isi Dengan Secret Key Mu 

/* TimeZone. */
$timezone = "Asia/Jakarta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
$waktu = date('H:i:s');

/* Pengeksekusi Tweet. */
{
$eksekusi = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
$eksekusi->post('statuses/update', array('status' => '@sekarang Jam:'.$waktu.' #Hidekazu #BotGanteng ')); 
}/* Bisa diganti Sesuka Hatimu Format dan Isi Tweetnya. */


if ($eksekusi) {
	header('location:./tweet.php');
	}
?>
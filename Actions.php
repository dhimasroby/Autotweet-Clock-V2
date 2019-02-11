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
define('CONSUMER_KEY', 'yT577ApRtZw51q4NPMPPOQ'); //Isi Dengan Consumer Key Mu 
define('CONSUMER_SECRET', '3neq3XqN5fO3obqwZoajavGFCUrC42ZfbrLXy5sCv8'); //Isi Dengan Consumer Secret Mu 
define('ACCESS_TOKEN', '2364023538-HZ2BGkgRJ8UZ0flEOfVCuTE0TwfBZMmjeDj74o6'); //Isi Dengan Access Token Mu 
define('ACCESS_TOKEN_SECRET', 'mWttDaUEPMc7e68QeR4f7XdepNnSe9jymOiPwasF1xYbW'); //Isi Dengan Secret Key Mu 

/* TimeZone. */
$timezone = "Asia/Jakarta";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

/* Pemilihan Hari, Supaya tidak English. */
/* CASE 0 di edit menyesuaikan mulai hari dipasangkan botnya, jika tidak, ya ngawur :v. */
$hari = date('l');
	switch($hari){
			case 1 : {$hari='Minggu';}break;
			case 2 : {$hari='Senin';}break;
			case 3 : {$hari="Selasa";}break;
			case 4 : {$hari='Rabu';}break;
			case 5 : {$hari='Kamis';}break;
			case 6 : {$hari="Jum'at";}break;
			case 7 : {$hari='Sabtu';}break;
			default: {$hari='Unknown';}break;
			}
			
/* Pemilihan Bulan, Supaya tidak English. */
/* CASE 0 di edit menyesuaikan mulai bulan dipasangkan botnya, jika tidak, ya ngawur :v. */
$tgl = date('d');
$bln = date('F');
	switch($bln){
			case 1 : {$bln='Januari';}break;
			case 2 : {$bln='Februari';}break;
			case 3 : {$bln='Maret';}break;
			case 4 : {$bln='April';}break;
			case 5 : {$bln='Mei';}break;
			case 6 : {$bln='Juni';}break;
			case 7 : {$bln='Juli';}break;
			case 8 : {$bln='Agustus';}break;
			case 9 : {$bln='September';}break;
			case 10 : {$bln='Oktober';}break;
			case 11 : {$bln='November';}break;
			case 12 : {$bln='Desember';}break;
			default: {$bln='Unknown';}break;
			}
$thn = date ('Y');
$waktu = date('H:i:s');

/* Pengeksekusi Tweet. */
{
$eksekusi = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

/* Bisa diganti Sesuka Hatimu Format dan Isi Tweetnya. */
$eksekusi->post('statuses/update', array('status' => '@sekarang Jam:'.$waktu.',Hari '.$hari.', Tanggal:'.$tgl.''.$bln.''.$thn'')); 
// Bisa diganti sesuka hatimu
}

if ($eksekusi) {
	header('location:./tweet.php');
	}
// Copyright Dhimaz
// BOT TWEET WAKTU BY DHIMAZ
?>
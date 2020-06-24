<?php

/* for traffic source update table*/

	if(!empty($_SERVER['HTTP_REFERER']))
	{

	$serverUrl=$_SERVER['HTTP_REFERER'];
    $serverResult=parse_url($serverUrl);
 	$serverSource=$serverResult['host'];
 	if($serverSource!='get-job.online')
 	{
 		
 		if($serverSource!='WWW.facebook.com' && $serverSource!='www.facebook.com' && $serverSource!='L.instagram.com' && $serverSource!='t.co' && $serverSource!='www.linkedIn.com' && $serverSource!='WWW.linkedIn.com' && $serverSource!='in.pinterest.com' && $serverSource!='t.umblr.com')
 		{
 			$serverSource='other';
 		$serverArray= array('trafficSource' => $serverSource,'count'=>'1');
 		$this->load->model('insert');
 		$this->insert->trafficSource($serverArray);
	}
	else
	{
		$serverArray= array('trafficSource' => $serverSource,'count'=>'1');
 		$this->load->model('insert');
 		$this->insert->trafficSource($serverArray);
	}
}
	else
 	{
 		
 	}
 }
	//$this->Insert->trafficSource($array);

//traffic source code end
 	

?>


<html  lang="en">

<head>
<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url(); ?>fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?= base_url(); ?>fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url(); ?>fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url(); ?>fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url(); ?>fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?= base_url(); ?>fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url(); ?>fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?= base_url(); ?>fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>fav/favicon-16x16.png">
<link rel="manifest" href="<?= base_url(); ?>fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
</html>
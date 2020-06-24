
<html  lang="en">
<head><?php
include 'fav.php';
?><title>Online job portal for job seekers and job providers | Please wait redirecting :: Get-job.online</title>
        <meta name="keywords" content="Job employement, job finder, internet jobs, lattest job vacancies, job carrer, seek jobs, jobs, part time jobs, job opportunities, It jobs" />
        <meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online." />
       <meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="htps://www.get-job.online">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

        <link rel="alternate" href="https://www.get-job.online" hreflang="en"/>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4121794652594490",
          enable_page_level_ads: true
     });
</script>
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>
</head>
<body>
   
<form action="<?php echo $action; ?>" method="post" name="payuForm" id="payuForm" style="display: block">
    <input type="hidden" name="key" value="<?php echo MERCHANT_KEY ?>" />
    <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
    <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
    <input name="amount" type="hidden" value="<?php echo $totalCost; ?>" />
    <input type="hidden" name="firstname" id="firstname" value="<?php echo $firstName; ?>" />
    <input type="hidden" name="uid" id="firstname" value="<?php echo $uid; ?>" />
    <input type="hidden" name="email" id="email" value="<?php echo $email; ?>" />
    <input type="hidden" name="phone" value="<?php echo $mobile; ?>" />
    <textarea  style="display:none;" name="productinfo"><?php echo "productinfo"; ?></textarea>
    <input type="hidden" name="surl" value="<?= base_url(); ?>TransactionSuccessfull" />
    <input type="hidden" name="furl" value="<?= base_url(); ?>TransactionFailedEmployee"/>
    <input type="hidden" name="service_provider" value="payu_paisa"/>
    <input type="hidden" name="lastname" id="lastname" value="<?php echo $lastName ?>" />
</form>

<script type="text/javascript">
    var payuForm = document.forms.payuForm;
    payuForm.submit();
</script>
<img src="/images/loading.gif" style="margin-left:30%;" alt="loading image"></img>



</body>
</html>
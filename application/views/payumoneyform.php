
<html  lang="en">
	<head><?php
		include 'googleadvertisement.php';

include 'fav.php';
?><title>Pay u money form</title>
<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
			<meta name="keywords" content="Job employement, job finder, internet jobs, lattest job vacancies, job carrer, seek jobs, jobs, part time jobs, job opportunities, It jobs" />
			<meta name="description" content="find jobs online from the best of the best recruiters in india. get job news updates at home . register for free to apply jobs online." />

<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

	</head>
	<body>
		<form action="<?= base_url(); ?>payumoney/payusubmit" method="post">
				<input type="text" name="email" placeholder="email"/>
				<input type="text" name="mobile" placeholder="mobile"/>
				<input type="text" name="firstName" placeholder="firstname"/>
				<input type="text" name="lastName" placeholder="lastname"/>
				<input type="text" name="totalCost" placeholder="total cost"/>
				<input type="submit" value="submit"/>
		</form>
	</body>
</html>
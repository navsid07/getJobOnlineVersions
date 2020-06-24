<?php

$countTrafficArray=count($trafficAnalytics);

$monthlyChartData="";
        foreach ($trafficAnalytics as $monthlyrow )
        {

            $trafficSource=$monthlyrow["trafficSource"];
            if($trafficSource=='www.facebook.com' || $trafficSource=='WWW.facebook.com')
            {
              $trafficFrom='Facebook';
            }
            elseif($trafficSource=='L.instagram.com')
            {
              $trafficFrom='Instagram';
            }
            elseif($trafficSource=='t.co')
            {
              $trafficFrom='Twitter';
            }
            elseif($trafficSource=='www.linkedIn.com' || $trafficSource=='WWW.linkenIn.com')
            {
              $trafficFrom='LinkedIn';
            }
             elseif($trafficSource=='t.umblr')
            {
              $trafficFrom='Tumblr';
            }
             elseif($trafficSource=='other')
            {
              $trafficFrom='Other';
            }

            $monthlyChartData .= "{ datee:'".$trafficFrom."', count:".$monthlyrow["count"]."}, ";
        }
        ?>
<html>
<head>        


<!doctype html>
<html amp lang="en">
<head>

<?php
include 'fav.php';
?>

<title>Find a job and get recruited online | Get Job Online</title>
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">

<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="job search, jobs, part time jobs, online data entry jobs, job application, online jobs for students, online part time jobs, apply for jobs online,job recruitment" />
<meta name="description" content="
online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.
" />

 <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?= base_url(); ?>css/style3.css" rel='stylesheet' type='text/css'/>
<link rel="canonical" href="<?= current_url(); ?>"  />
<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>js/jquery.breadcrumbs-generator.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>

<!----font-Awesome---->
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet" > 

<!-- flexisel slider-->

<!-- chart data-->
 <link rel="stylesheet" href="<?= base_url(); ?>morris/css/moris.css">

 <script src="<?= base_url(); ?>morris/js/jquery.min.js"></script>
 <script src="<?= base_url(); ?>morris/js/raphael.min.js"></script> 
 <script src="<?= base_url(); ?>morris/js/morris.min.js"></script> 
<!-- chart data end-->

</head>

<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= base_url(); ?>Dashboard"><img src="<?= base_url(); ?>logo/getjob.png" alt="logo"/></a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">

            <ul class="nav navbar-nav">
                 <li ><a class="classli" href="<?= base_url(); ?>">Home</a></li>
              
              
                      
                        <li><a href="<?= base_url(); ?>EmployeeLogin">Employee</a></li>
             
                        <li><a href="<?= base_url(); ?>RecruiterLogin">Recruiter</a></li>
                       
                        
                        <li><a href="<?= base_url(); ?>AboutUs" >About Us</a></li>
                        <li><a href="<?= base_url(); ?>ContactUs" >Contact Us</a></li>
                        <li><a href="https://blog.therevew.com" target="_blank">Blog</a></li>

                    </ul>
                </div>
            </div>
        </nav>

</br>
</br>
<div class="container">
  <?php
  if($countTrafficArray==1)
  {
  ?>
    <div class="col-md-offset-5 col-md-2 col-md-offset-5">
      <div id="MonthlyChart"></div>
    </div>
  <?php
}

elseif($countTrafficArray==2)
{
  ?>
    <div class="col-md-offset-4 col-md-4 col-md-offset-4">
      <div id="MonthlyChart"></div>
    </div>
  <?php
}

elseif($countTrafficArray==3)
{
  ?>
    <div class="col-md-offset-3 col-md-5 col-md-offset-3">
      <div id="MonthlyChart"></div>
    </div>
  <?php
}

elseif($countTrafficArray==4)
{
  ?>
    <div class="col-md-offset-2 col-md-7 col-md-offset-2">
      <div id="MonthlyChart"></div>
    </div>
  <?php
}

elseif($countTrafficArray==5)
{
  ?>
    <div class="col-md-offset-1 col-md-9 col-md-offset-1">
      <div id="MonthlyChart"></div>
    </div>
  <?php
}

elseif($countTrafficArray==6)
{
  ?>
    <div class="col-md-12">
      <div id="MonthlyChart"></div>
    </div>
  <?php
}
  ?>



<script>
    Morris.Bar({
    	  barGap:1,
    	barSizeRatio:0.35,
    	resize:true,
        element : 'MonthlyChart',
        data:[<?php echo $monthlyChartData; ?>],
        xkey:'datee',
        ykeys:['count'],
        parseTime: false,
        labels:[''],
        hideHover:'auto',
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#d3404e";
    }
    else {
      return '#000';
    }
  }
    });
</script>
</div>
</br> </br>
<?php
   
    include('footer.php');
?>

</body>
</html>
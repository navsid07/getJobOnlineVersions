<!--A Design by W3layouts

Author: W3layout

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

--><?php

//session_start();

$sessionid=$this->session->userdata('employe_id');


/*if(!empty($id))

{

	echo 'isset';

}

else

{

	echo 'notisset';

}*/


 $linkid=$this->session->userdata('linkid');

 if(!empty($linkid))
 {
 	$this->session->unset_userdata('linkid');
 }


 $employe_session=$this->session->userdata('employe_id');
 $recruiter_session=$this->session->userdata('recruiter_id');

?><!DOCTYPE HTML>

<html  lang="en">

<head><?php

include 'fav.php';

?><title><?php

	/*	$emplyee_uuid=$this->session->userdata('employe_id');
		foreach ($jobs as $key ) {
	echo $key['submitjob_job_title'];
} */?>
 | Job description:: Get-job.online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates. register for free and find a job at home and apply a job online.">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Global site tag (gtag.js) - Google Ads: 995257176 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-995257176"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-995257176');
</script>

<meta name="keywords" content="job consultants in bathinda, job opportunities, career center, online typing jobs, home based jobs, data entry jobs, jobs in india, job recruitment, naukri jobs, postal jobs" />

<meta name="description" content="" />

<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<script src="<?= base_url(); ?>js/jquery.min.js"></script>

<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>

<!-- Custom Theme files -->

<link href="<?= base_url(); ?>css/styleOriginal.css" rel='stylesheet' type='text/css' />


<!-- style sheet for body background , shadow and other designs-->
<link href="<?= base_url(); ?>css/stylesheetOriginal.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!----font-Awesome-->

<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet"> 

<!----font-Awesome-->


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>

     (adsbygoogle = window.adsbygoogle || []).push({

          google_ad_client: "ca-pub-4121794652594490",

          enable_page_level_ads: true

     });

</script>


<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-WHCKLM4');</script>

<style>

  .rating 
  {
  display: inline-block;
  position: relative;
  height: 10px;
  line-height: 10px;
  font-size: 10px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: white;
 text-shadow: 0 0 5px #f15f43;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #f15f43;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: white;
  text-shadow: 0 0 5px #f15f43;
}


	/* Three column layout */
.sidee {
    margin-top:0;
    float: left;
    width: 15%;
  
}

.middlee {

    float: left;
    width: 70%;
}

/* Place text to the right */
.floatright {
    text-align: right;
    
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* The bar container */
.bar-container {
    width: 100%;
    background-color: #f1f1f1;
    text-align: center;
    color: white;
}

/* Individual bars */
.bar-0 {width: 0%; height: 10px; background-color: #f44336;}
.bar-0-10 {width: 5%; height: 10px; background-color: #f44336;}
.bar-10-20 {width: 10%; height: 10px; background-color: #f44336;} 
.bar-20-30 {width: 20%; height: 10px; background-color: #ff9800;}
.bar-30-40 {width: 30%; height: 10px; background-color: #ff9800;}
.bar-40-50 {width: 40%; height: 10px; background-color: #ff9800;}
.bar-50-60 {width: 50%; height: 10px; background-color: #00bcd4;}
.bar-60-70 {width: 60%; height: 10px; background-color: #00bcd4;}
.bar-70-80 {width: 70%; height: 10px; background-color: #2196F3;}
.bar-80-90 {width: 80%; height: 10px; background-color: #2196F3;}
.bar-90-100 {width: 90%; height: 10px; background-color: #4CAF50;}
.bar-100 {width: 100%; height: 10px; background-color: #4CAF50;}


/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
    .sidee, .middlee {
        width: 100%;
    }
    .floatright {
        display: none;
    }
}

.review-description
{
  font-size:13px;
  text-transform: capitalize;
}
.margin-left
{
  margin-left: 2%;
}

.margin-bottomm
{
  margin-bottom: 2%;

}

.reviewpadding
{
  padding:1%;
  margin-left: 2%;
}

.bborder
{
  border-bottom: 1px solid #e6e6e6;
}
.reply
{
  font-size: 12px;
  cursor:pointer;
}
#replytextbox
{
  display:none;
}

.cancelx
{
  display: none;
  font-size: 12px;
  cursor: pointer;
  
}
.datesize
{
  color: #666666;
font-size:13px;
}
.replyfont
{
font-size:13px;
text-transform: capitalize;
color:  #808080;
}

.replydate
{
font-size:11px;
text-transform: capitalize;
color:  #808080;
}

.replybuttonfont
{
  color:  #808080;
}

#hidereplies
{
  display: none;
}

.reviewtitle
{
  font-size: 1.5em;
  text-transform: capitalize;
}
.reportform
{
  display: none;
}
.linkclass a
{
  background-color: #f15f43;
  color:white;
  text-decoration: none;
  border-radius: 50%;
  
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#reply").click(function(){
        $("#replytextbox").show();
    });
    
});
</script>


<link rel="stylesheet" href="<?= base_url(); ?>css/modal.css">
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>



</head>

<body>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><font color="#f15f43">Rate Recruiter Here</font></h4>
        </div>
        <div class="modal-body">
        <form action="<?= base_url(); ?>RecruiterRating" method="post" class="form">
           <div class="rating">
  <label>
    <input type="radio" name="rating" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="rating" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="rating" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="rating" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="rating" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</div>
</br>
  <input type="text" placeholder="Review title here" name="title" class="form-control" required>
      </br>
      <textarea cols="10" class="form-control" name="review" Placeholder="Write something exciting for the recruiter" required></textarea>
         <?php
           foreach ($data as $datavalue) {
             
           ?>
          <input type="hidden" name="uid" value="<?= $datavalue['employee_uid'] ; ?>">
        <?php
      }
        ?>  
          

          <input type="hidden" name="rid" value="<?= $rid ; ?>">
      
        </div>
        <div class="modal-footer">
         <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>-->
         <button type="submit" class="btn btn-default">Submit</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>


<!-- rating modal end-->

  <?php
  include('RecruiterHeader.php');

  ?>

<div id="spacer">
    &nbsp;
  </div>
  <div id="spacetop">
    
  </div>
<div class="container" >
    <div class="row" style="margin-top:2%;">
    <div class="col-lg-4">
      
<div class="col_3 cool radius margin-bottom">
          
          <h3 class="radius">Rating & Review</h3>
    <ul class="list_1" class="radius">
         
          


            <li style="text-align:center;" class="border padding">
<p><?php echo $ratingstar ?>  average based on <?php echo $ratingcount; ?> reviews.</p>
<p>Out of 5</p>


</li>



  <li class="border padding">
  <div class="sidee">
    <div>5 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

      if($recruiter5star=='')
      {
        ?>
<div class="bar-0"></div>
        <?php
      }
      

      elseif($recruiter5star>0 || $recruiter5star<=20)
      {
        ?>
<div class="bar-10-20"></div>
        <?php
      }
      

      elseif($recruiter5star>20 || $recruiter5star<=40)
      {
        ?>
<div class="bar-20-30"></div>
        <?php
      }
      

      elseif($recruiter5star>40 || $recruiter5star<=60)
      {
        ?>
<div class="bar-50-60"></div>
        <?php
      }
      

      elseif($recruiter5star>60 || $recruiter5star<=80)
      {
        ?>
<div class="bar-60-70"></div>
        <?php
      }
      

      elseif($recruiter5star>60 || $recruiter5star<=100)
      {
        ?>
<div class="bar-80-90"></div>
        <?php
      }
      

      else
      {
        ?>
<div class="bar-100"></div>
        <?php
      }
      ?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter5star; ?></div>
  </div>
</li>

<li class="border padding">
  <div class="sidee">
    <div>4 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
     <?php

      if($recruiter4star=='')
      {
        ?>
<div class="bar-0"></div>
        <?php
      }
      

      elseif($recruiter4star>0 || $recruiter4star<=20)
      {
        ?>
<div class="bar-10-20"></div>
        <?php
      }
      

      elseif($recruiter4star>20 || $recruiter4star<=40)
      {
        ?>
<div class="bar-20-30"></div>
        <?php
      }
      

      elseif($recruiter4star>40 || $recruiter4star<=60)
      {
        ?>
<div class="bar-50-60"></div>
        <?php
      }
      

      elseif($recruiter4star>60 || $recruiter4star<=80)
      {
        ?>
<div class="bar-60-70"></div>
        <?php
      }
      

      elseif($recruiter4star>60 || $recruiter4star<=100)
      {
        ?>
<div class="bar-80-90"></div>
        <?php
      }
      

      else
      {
        ?>
<div class="bar-100"></div>
        <?php
      }
      ?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter4star; ?></div>
  </div>
</li>

<li  class="border padding">
  <div class="sidee">
    <div>3 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

      if($recruiter3star=='')
      {
        ?>
<div class="bar-0"></div>
        <?php
      }
      

      elseif($recruiter3star>0 || $recruiter3star<=20)
      {
        ?>
<div class="bar-10-20"></div>
        <?php
      }
      

      elseif($recruiter3star>20 || $recruiter3star<=40)
      {
        ?>
<div class="bar-20-30"></div>
        <?php
      }
      

      elseif($recruiter3star>40 || $recruiter3star<=60)
      {
        ?>
<div class="bar-50-60"></div>
        <?php
      }
      

      elseif($recruiter3star>60 || $recruiter3star<=80)
      {
        ?>
<div class="bar-60-70"></div>
        <?php
      }
      

      elseif($recruiter3star>60 || $recruiter3star<=100)
      {
        ?>
<div class="bar-80-90"></div>
        <?php
      }
      

      else
      {
        ?>
<div class="bar-100"></div>
        <?php
      }
      ?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter3star; ?></div>
  </div>
</li>

<li  class="border padding">
  <div class="sidee">
    <div>2 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

      if($recruiter2star=='')
      {
        ?>
<div class="bar-0"></div>
        <?php
      }
      

      elseif($recruiter2star>0 || $recruiter2star<=20)
      {
        ?>
<div class="bar-10-20"></div>
        <?php
      }
      

      elseif($recruiter2star>20 || $recruiter2star<=40)
      {
        ?>
<div class="bar-20-30"></div>
        <?php
      }
      

      elseif($recruiter2star>40 || $recruiter2star<=60)
      {
        ?>
<div class="bar-50-60"></div>
        <?php
      }
      

      elseif($recruiter2star>60 || $recruiter2star<=80)
      {
        ?>
<div class="bar-60-70"></div>
        <?php
      }
      

      elseif($recruiter2star>60 || $recruiter2star<=100)
      {
        ?>
<div class="bar-80-90"></div>
        <?php
      }
      

      else
      {
        ?>
<div class="bar-100"></div>
        <?php
      }
      ?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter2star; ?></div>
  </div>
</li>

<li  class="border padding">
  <div class="sidee">
    <div>1 star</div>
  </div>
  <div class="middlee">
    <div class="bar-container">
      <?php

      if($recruiter1star=='')
      {
        ?>
<div class="bar-0"></div>
        <?php
      }
      

      elseif($recruiter1star>0 || $recruiter1star<=20)
      {
        ?>
<div class="bar-10-20"></div>
        <?php
      }
      

      elseif($recruiter1star>20 || $recruiter1star<=40)
      {
        ?>
<div class="bar-20-30"></div>
        <?php
      }
      

      elseif($recruiter1star>40 || $recruiter1star<=60)
      {
        ?>
<div class="bar-50-60"></div>
        <?php
      }
      

      elseif($recruiter1star>60 || $recruiter1star<=80)
      {
        ?>
<div class="bar-60-70"></div>
        <?php
      }
      

      elseif($recruiter1star>60 || $recruiter1star<=100)
      {
        ?>
<div class="bar-80-90"></div>
        <?php
      }
      

      else
      {
        ?>
<div class="bar-100"></div>
        <?php
      }
      ?>
   
    </div>
  </div>
  <div class="floatright">
    <div><?= $recruiter1star; ?></div>
  </div>
</li>

              
   
          </ul>
          <div class="row" style="text-align:center padding:10px;">
              <div class="social marginbottom2" style="margin-top:2%; text-align:center;">  
  
          <a class="btn_1" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://get-job.online">
            <i class="fa fa-facebook fb"></i>
            <span class="share1 fb">Share</span>                
          </a>
          <a class="btn_1" target="_blank" href="https://twitter.com/share?url=<?= base_url(); ?>&text=%23joblisting %23jobopening %23gejobs %23marketing %23jobtips %23freelance %23jobhuntchat %23resume %23graduatejobs">
            <i class="fa fa-twitter tw"></i>
            <span class="share1">Tweet</span>               
          </a>
              <a class="btn_1" href="https://www.linkedin.com/shareArticle?mini=true&url=https://get-job.online&title=Some%20Title&summary=Some%20Summary&source=YourWebsiteName" target="_blank">
            <i class="fa fa-linkedin in"></i>
            <span class="share1 insta">Share</span>
          </a>
         </div>
            <!--<a name="fb_share" type="button" href="https://www.facebook.com/sharer.php?u=http://www.get-job.online" target="_blank">share on Facebook</a>
      --><!-- Place this tag in your head or just before your close body tag. -->
<!-- Place this tag in your head or just before your close body tag. -->


        </div>

       </div>

    </div>

    <div class="col-lg-8">
       <!-- <div class="col_3 cool radius margin-bottom">
             <h3 class="radius">Employee Reviews</h3>
             <?php
             $ad=0;
             foreach ($fetchreview as $value) {
            $ad++;

            $rating_reviewid=$value['rrating_id'];
            $reviewreplies=$this->fetch->fetchreviewreply($rating_reviewid);
             ?>
             <form action="<?= base_url() ?>recruiter/submitfinal" method="post">
             <h4 class="reviewpadding"><?= $value['rrating_title']; ?><h4>
              <p class="review-description reviewpadding "><?= $value['rrating_description']; ?></p>
            <!--<p class="marginleft reply" title="View all replies"><a style="text-decoration:none;" href="<?= base_url();?>recruiter/allreplies?rid=<?= $rid; ?>&ratingid=<?= $value['rrating_id']; ?>">View all Replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII="></a></p>
            --><!--<p class="marginleft reply" id="reply<?= $value['rrating_id']; ?>" onclick="return showmobile(<?php echo $value['rrating_id']; ?>)" title="Reply">Reply<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII=">
            </p>
            <p class="marginleft cancelx" id="cancelx<?= $value['rrating_id']; ?>" onclick="return showreply(<?php echo $value['rrating_id']; ?>)">Cancel<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACOSURBVDhPYxgc4LurmeJ/BgZGKBcFgMRB8lAuKvjmaCn/xcnszWcn05noBoD4n51NZ4DkQeqgwggAV+Bs9h/ZAFziGACsEKgASSETURphAM2Aa0RrhAGwjQiN10B8qBR+ALYZ4VTibUbTCPEzwgu4DcCiEawQLA4zACiP1QCC8QwyAFc8gwDZKYzOgIEBAC1nirFlRv9xAAAAAElFTkSuQmCC"></p>
            <p style="margin-left:5%; margin-right:5%; display:none;"  id="replytextbox<?= $value['rrating_id']; ?>"><textarea style="width:100%;" name="reply" class="margintop2 form-control" rows="1" placeholder="Your reply"></textarea>
            <input type="hidden" name="rid" value="<?= $value['rrating_id']; ?>">
           <input type="hidden" name="recruiterid" value="<?= $rid; ?>">
            </br><input type="submit" class="marginleft editbutton" value="Submit reply">
            </p><div class="bborder reviewpadding"></div>
          </form>

             <?php
              foreach ($reviewreplies as $reply) {
                $childid=$reply['rrating_id'];
                  $childreviewreplies=$this->fetch->fetchchildreview($childid);
                ?>

                <form action="<?= base_url() ?>recruiter/submitfinal" style="margin-left:8%;" method="post">
             
              <p class="review-description reviewpadding "><?= $reply['rrating_description']; ?></p>
            <!--<p class="marginleft reply" title="View all replies"><a style="text-decoration:none;" href="<?= base_url();?>recruiter/allreplies?rid=<?= $rid; ?>&ratingid=<?= $value['rrating_id']; ?>">View all Replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII="></a></p>
            --><!--<p class="marginleft reply" id="reply<?= $reply['rrating_id']; ?>" onclick="return showmobile(<?php echo $reply['rrating_id']; ?>)" title="Reply">Reply<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII=">
            </p>
            <p class="marginleft cancelx" id="cancelx<?= $reply['rrating_id']; ?>" onclick="return showreply(<?php echo $reply['rrating_id']; ?>)">Cancel<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACOSURBVDhPYxgc4LurmeJ/BgZGKBcFgMRB8lAuKvjmaCn/xcnszWcn05noBoD4n51NZ4DkQeqgwggAV+Bs9h/ZAFziGACsEKgASSETURphAM2Aa0RrhAGwjQiN10B8qBR+ALYZ4VTibUbTCPEzwgu4DcCiEawQLA4zACiP1QCC8QwyAFc8gwDZKYzOgIEBAC1nirFlRv9xAAAAAElFTkSuQmCC"></p>
            <p style="margin-left:5%; margin-right:5%; display:none;"  id="replytextbox<?= $reply['rrating_id']; ?>"><textarea style="width:100%;" name="reply" class="margintop2 form-control" rows="1" placeholder="Your reply"></textarea>
            <input type="hidden" name="rid" value="<?= $reply['rrating_id']; ?>">
           <input type="hidden" name="recruiterid" value="<?= $rid; ?>">
            </br><input type="submit" class="marginleft editbutton" value="Submit reply">
            </p><div class="bborder reviewpadding"></div>
          </form>

                <?php
                  foreach ($childreviewreplies as $childvalue) {
                   ?>
                      <form action="<?= base_url() ?>recruiter/submitfinal" style="margin-left:15%;" method="post">
             
              <p class="review-description reviewpadding "><?= $childvalue['rrating_description']; ?></p>
            <!--<p class="marginleft reply" title="View all replies"><a style="text-decoration:none;" href="<?= base_url();?>recruiter/allreplies?rid=<?= $rid; ?>&ratingid=<?= $value['rrating_id']; ?>">View all Replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII="></a></p>
            --><!--<p class="marginleft reply" id="reply<?= $childvalue['rrating_id']; ?>" onclick="return showmobile(<?php echo $childvalue['rrating_id']; ?>)" title="Reply">Reply<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII=">
            </p>
            <p class="marginleft cancelx" id="cancelx<?= $childvalue['rrating_id']; ?>" onclick="return showreply(<?php echo $childvalue['rrating_id']; ?>)">Cancel<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACOSURBVDhPYxgc4LurmeJ/BgZGKBcFgMRB8lAuKvjmaCn/xcnszWcn05noBoD4n51NZ4DkQeqgwggAV+Bs9h/ZAFziGACsEKgASSETURphAM2Aa0RrhAGwjQiN10B8qBR+ALYZ4VTibUbTCPEzwgu4DcCiEawQLA4zACiP1QCC8QwyAFc8gwDZKYzOgIEBAC1nirFlRv9xAAAAAElFTkSuQmCC"></p>
            <p style="margin-left:5%; margin-right:5%; display:none;"  id="replytextbox<?= $childvalue['rrating_id']; ?>"><textarea style="width:100%;" name="reply" class="margintop2 form-control" rows="1" placeholder="Your reply"></textarea>
            <input type="hidden" name="rid" value="<?= $childvalue['rrating_id']; ?>">
           <input type="hidden" name="recruiterid" value="<?= $rid; ?>">
            </br><input type="submit" class="marginleft editbutton" value="Submit reply">
            </p><div class="bborder reviewpadding"></div>
          </form>
          

                   <?php
                  }
              }
          
         }
             ?>
        </div>-->


       <div class="col_3 cool radius margin-bottom">
             <h3 class="radius">Employee Reviews</h3>

             <?php

            $ad=0;
            foreach ($results as $value) {
            $ad++;
            $rating_reviewid=$value['rrating_id'];
            ?>
              <div class="fetchdata<?= $value['rrating_id']; ?>">

            <?php
            $reviewreplies=$this->fetch->fetchreviewreply($rating_reviewid);
         
             ?>
             <form method="post" id="reportform<?= $value['rrating_id']; ?>" class="reportform">
              <p class="review-description reviewpadding" >
                <input type="hidden" value="<?= $value['rrating_id']; ?>" name="review_id">
              <input type="radio" name="answer" value="spam" onclick="return showtextarea(<?php echo $value['rrating_id']; ?>)"> Report as spam</br>  
              <input type="radio" name="answer" value="offensive" onclick="return showtextarea2(<?php echo $value['rrating_id']; ?>)"> Report as offensive</br>  
              <input type="radio" name="answer" value="abuse" onclick="return showtextarea2(<?php echo $value['rrating_id']; ?>)"> Report as abuse</br>
              <textarea name="description" class="form-control" rows="2" placeholder="Write down report description here" style="width:100%; display:none;"  id="reportdescription<?= $value['rrating_id']; ?>"></textarea>
             </p>
             <button type="button"  class="reviewpadding editbutton" id="replybutton1<?= $reply['rrating_id']; ?>" onclick="return submitreport(<?php echo $value['rrating_id']; ?>)">Submit Report</button> <a style="cursor:pointer;" id="cancelreportform<?= $value['rrating_id']; ?>" onclick="return cancelreportform(<?php echo $value['rrating_id']; ?>)">Cancel</a><div class="bborder reviewpadding"></div>
           </form>
            <div class="row">
            <div id="successmsgreport<?= $value['rrating_id']; ?>" style="display:none;" class="col-md-offset-2 col-md-8 reply alert alert-success"><strong>Dear Recruiter!</strong> Your Report for this review successfully submitted. <a href="<?= base_url(); ?>EmployeeRefresh">Refresh page</a></div> 
            </div>
             <form method="post" id="reviewreply_form<?= $value['rrating_id']; ?>">
             <p ><font class="reviewtitle reviewpadding"><?= $value['rrating_title']; ?></font><font style="float:right;" id="showreportform<?= $value['rrating_id']; ?>" onclick="return showreviewform(<?php echo $value['rrating_id']; ?>)" class="reply marginright4">Report this review</font></p>
             
              <p class="review-description reviewpadding "><?= $value['rrating_description']; ?></p><p class="marginright4 datesize floatright"><?= $value['rrating_date']?></p>
            <!--<p class="marginleft reply" title="View all replies"><a style="text-decoration:none;" href="<?= base_url();?>recruiter/allreplies?rid=<?= $rid; ?>&ratingid=<?= $value['rrating_id']; ?>">View all Replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII="></a></p>
            --><p> 
            <?php
            
              if($reviewreplies!=null)
          {
            
            ?>
            <div style="float:right;" id="showreplies<?php echo $value['rrating_id']; ?>" class="reply marginright2" onclick="return showreplies(<?php echo $value['rrating_id']; ?>)">View all replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACpSURBVDhPYxjC4GWoPc+HOKe5IBoqhBXgVPcx3rn1Q7zTYVwGgDUC5UHqoEKoAJcBeDX+Dw1l/hDnEgZioxuArhGkDqQexAaDfyEWnB/inQ9+jHNqB/FhBnyJt5dA1giSB6kDqQfx4eB5jCs3pgHO39A1gtSB+BgAbECc8yGYAR/iHN1ANFgjUBynRhhAN4BojTAAMwDo32MkaYQBsAHxTn0ka6QDYGAAACjBh8x3JssNAAAAAElFTkSuQmCC"></div>
        <?php
      }
        ?>
          <div style="float:right; display:none;" id="hidereplies<?php echo $value['rrating_id']; ?>" class="reply marginright2" onclick="return hidereplies(<?php echo $value['rrating_id']; ?>)">Hide all replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAFkSURBVDhPrVFNKwVRGD6SpbLxsbAh2VhJEgtjzpkrC6VkRHfmnLmu7paUnVJ2SsQfsCVX8gskGxt2LP0Bas7M2I/nPZ3RvQs3N546nfe8532e94v9GUkwN5VVeb99tgciJpJf/4tAFpT60lAsaSVqSSgWY+X02LCfoStiGIT7RPFnHXGf2jECir9pKc4/ys6gDW0Gsm7hnMWRt4y73tgCVQLfHUQuY8lXrJuxnLEOrfgxzpqW7ryW3ioRkekGWW/jUIxTHN57OnBGILCdKLFryKl0Z/FxYmzFqzoSk2QTCYKvWvJT80bGWHmCbJCv4qA0RDbDUHZIjYRSyTfJl0l3DP7RogXcB2YmUhyhwnVDLEBTRUkXKPXxUzkD1l1soY4qHqgNxE3br2a8b8x0Q/kQ54V6NOuSfB+kciLF03eprZDXJrqoZ7Nj3LnvdxYVNG6hLRgBDCutLPRaV3ugnf+q/NZg7AvBWbzJtiwIDwAAAABJRU5ErkJggg=="></div>
            </p>
            <div class="row">
            <div id="successmsg1<?= $value['rrating_id']; ?>" style="display:none;" class="col-md-offset-2 col-md-8 reply alert alert-success"><strong>Dear Employee!</strong> Your Review successfully submitted. <a href="<?= base_url(); ?>EmployeeRefresh">Refresh page</a></div> 
            </div>
            
            <p class="marginleft cancelx" id="cancelx<?= $value['rrating_id']; ?>" onclick="return showreply(<?php echo $value['rrating_id']; ?>)">Cancel<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACOSURBVDhPYxgc4LurmeJ/BgZGKBcFgMRB8lAuKvjmaCn/xcnszWcn05noBoD4n51NZ4DkQeqgwggAV+Bs9h/ZAFziGACsEKgASSETURphAM2Aa0RrhAGwjQiN10B8qBR+ALYZ4VTibUbTCPEzwgu4DcCiEawQLA4zACiP1QCC8QwyAFc8gwDZKYzOgIEBAC1nirFlRv9xAAAAAElFTkSuQmCC"></p>
            <p style="margin-left:5%; margin-right:5%; display:none;"  id="replytextbox<?= $value['rrating_id']; ?>"><textarea style="width:100%;" name="reply" class="margintop2 form-control" rows="1" placeholder="Your reply"></textarea>
            <input type="hidden" name="rid" value="<?= $value['rrating_id']; ?>">
            <input type="hidden" name="grandparentid" value="<?= $value['rrating_id']; ?>">
           <input type="hidden" name="employeid" value="<?= $value['rrating_uid']; ?>">
            </br><button type="button" class="marginleft editbutton" id="submitbutton2<?= $value['rrating_id']; ?>" onclick="reviewreply(<?= $value['rrating_id']; ?>)">Submit reply</button>
            </p><div class="bborder reviewpadding"></div>
          </form>
              

                <div class="replies" id="allreplies_id<?php echo $value['rrating_id']; ?>" style="display:none;">
                
                 <?php

                  foreach ($reviewreplies as $reply) {
                  $childid=$reply['rrating_id'];
                  $childreviewreplies=$this->fetch->fetchchildreview($childid);
                    
                    ?>
                    <form method="post" id="replyreportform<?= $reply['rrating_id']; ?>" class="reportform">
              <p class="review-description reviewpadding" >
                <input type="hidden" value="<?= $reply['rrating_id']; ?>" name="review_id">
              <input type="radio" name="answer" value="spam" onclick="return showtextareaa(<?php echo $reply['rrating_id']; ?>)"> Report as spam</br>  
              <input type="radio" name="answer" value="offensive" onclick="return showtextareaa2(<?php echo $reply['rrating_id']; ?>)"> Report as offensive</br>  
              <input type="radio" name="answer" value="abuse" onclick="return showtextareaa2(<?php echo $reply['rrating_id']; ?>)"> Report as abuse</br>
              <textarea name="description" class="form-control" rows="2" placeholder="Write down report description here" style="width:100%; display:none;"  id="reportdescriptionn<?= $reply['rrating_id']; ?>"></textarea>
             </p>
             <button type="button"  class="reviewpadding editbutton" id="replybutton1<?= $reply['rrating_id']; ?>" onclick="return submitreplyreportreply(<?php echo $reply['rrating_id']; ?>)">Submit Report</button> <a style="cursor:pointer;" id="cancelreplyreportform<?= $reply['rrating_id']; ?>" onclick="return cancelreplyreportform(<?php echo $reply['rrating_id']; ?>)">Cancel</a>
           </form>
           <div class="row">
            <div id="successmsgreplyreport<?= $reply['rrating_id']; ?>" style="display:none;" class="col-md-offset-2 col-md-8 reply alert alert-success"><strong>Dear Recruiter!</strong> Your Report for this review successfully submitted. <a href="<?= base_url(); ?>EmployeeRefresh">Refresh page</a></div> 
            </div>

           
                  
                    <form id="reply_form<?= $reply['rrating_id']; ?>" style="margin-left:8%;" method="post">
             
              <p class="reviewpadding replyfont"><?= $reply['rrating_description']; ?><font style="float:right;" id="showreplyreportform<?= $reply['rrating_id']; ?>" onclick="return showreplyreviewform(<?php echo $reply['rrating_id']; ?>)" class="reply marginright4">Report this review</font></p>
              <p class="marginright4 replydate floatright"><?= $reply['rrating_date']; ?></p>
            <!--<p class="marginleft reply" title="View all replies"><a style="text-decoration:none;" href="<?= base_url();?>recruiter/allreplies?rid=<?= $rid; ?>&ratingid=<?= $value['rrating_id']; ?>">View all Replies<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII="></a></p>
            -->
            <p class="marginleft reply replybuttonfont" id="reply<?= $reply['rrating_id']; ?>" onclick="return showmobile(<?php echo $reply['rrating_id']; ?>)" title="Reply">Reply<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABmSURBVChTY4CBtwlusu9jXBWhXNzgQ5yj8sc4p/MfY53VoEK4wadEJy1aKna+8C7WRQ4qhB18jHEw/xjvfOZLvL0EVAgTwBS9ibaXgQphAqIUfY5x1SGoCARA7vmU6CEK5aIBBgYA7gg1F+pBCuEAAAAASUVORK5CYII=">
            </p>
            <div class="row">
            <div id="successmsg<?= $reply['rrating_id']; ?>" style="display:none;" class="col-md-offset-2 col-md-8 reply alert alert-success"><strong>Dear Employee!</strong> Your Review successfully submitted. <a href="<?= base_url(); ?>EmployeeRefresh">Refresh page</a></div> 
            </div><p class="marginleft cancelx replybuttonfont" id="cancelx<?= $reply['rrating_id']; ?>" onclick="return showreply(<?php echo $reply['rrating_id']; ?>)">Cancel<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACOSURBVDhPYxgc4LurmeJ/BgZGKBcFgMRB8lAuKvjmaCn/xcnszWcn05noBoD4n51NZ4DkQeqgwggAV+Bs9h/ZAFziGACsEKgASSETURphAM2Aa0RrhAGwjQiN10B8qBR+ALYZ4VTibUbTCPEzwgu4DcCiEawQLA4zACiP1QCC8QwyAFc8gwDZKYzOgIEBAC1nirFlRv9xAAAAAElFTkSuQmCC"></p>
            <p style="margin-left:5%; margin-right:5%; display:none;"  id="replytextbox<?= $reply['rrating_id']; ?>"><textarea style="width:100%;" name="reply" class="margintop2 form-control" rows="1" placeholder="Your reply"></textarea>
            <input type="hidden" name="rid" value="<?= $reply['rrating_id']; ?>">
             <input type="hidden" name="employeid" value="<?= $value['rrating_uid']; ?>">
           <input type="hidden" name="grandparentid" value="<?= $reply['rrating_grandparent_review_id']; ?>">
            </br><button type="button"  id="replybutton1<?= $reply['rrating_id']; ?>" onclick="replyform(<?= $reply['rrating_id']; ?>)" class="marginleft editbutton">Submit reply</button>
            </p>
          </form>
        <div class="bborder reviewpadding"></div>
    
              <?php
          
        }
        ?>
  </div>
      </div>
        <?php
        
      }
         
             ?>
             <p style="text-align:center;" class="linkclass"><?php echo $links; ?></p>
        </div>
    

    </div>

    <script>

  /*  $("input[type='radio']" + id).change(function(){

   if($(this).val()=="offensive" || $(this).val()=="abuse")
   {
  
      $("#reportdescription").show(600);
      $('#reportdescription').prop("required", true);
   }
   else if($(this).val()=="spam")
   {
    $("#reportdescription").hide(600);   ///$("#otherAnswer").hide(); 
   }

});*/

    function showtextarea(id)
    {
      
    
       $("#reportdescription" + id).hide(600);
    
   
    }

     function showtextarea2(id)
    {
      
    
       $("#reportdescription" + id).show(600);
    
   
    }

    function showtextareaa(id)
    {
      
    
       $("#reportdescriptionn" + id).hide(600);
    
   
    }

     function showtextareaa2(id)
    {
      
    
       $("#reportdescriptionn" + id).show(600);
    
   
    }


    function showmobile(id) {
        if($("#replytextbox" + id).css('display') == 'none') {
            $("#replytextbox" + id).show(900);
             $("#reply" + id).hide(900);
            $("#cancelx" + id).show(900);
         
        }else {
            $("#replytextbox" + id).hide(900);
            $("#cancelx" + id).hide(900);
              $("#reply" + id).show(900);

        }
    }


 function cancelreportform(id) {

              $("#reviewreply_form" + id).show(1100);
                $("#reportform" + id).hide(900);
     }


 function cancelreplyreportform(id) {

              $("#reply_form" + id).show(1100);
                $("#replyreportform" + id).hide(900);
     }

    function showreply(id) {
            
               $("#replytextbox" + id).hide(900);
               $("#cancelx" + id).hide(900);
             $("#reply" + id).show(900);
            
 
    }
    function showreviewform(id)
    {
        $("#reviewreply_form" + id).hide(900);
        $("#reportform" + id).show(1100);
    }

     function showreplyreviewform(id)
    {
        $("#reply_form" + id).hide(900);
        $("#replyreportform" + id).show(1100);
    }


    function showreplies(id) {
            
               $("#showreplies" + id).hide(900);
               $("#hidereplies" + id).show(900);
                $("#allreplies_id" + id).show(900);
          
    }

    function hidereplies(id) {
            
               $("#allreplies_id" + id).hide(900);
               $("#hidereplies" + id).hide(900);
               $("#showreplies" + id).show(900);
               
                           }
    
    
</script>
</div>
  </div>
	<div class="container">
<div class="row refer_earn" style="margin-top:15%;">
	 <div class="col_3 message background">
	 	<h3 class="radius">Refer & Earn</h3>
<p class="padding" style="font-size:1em;  color:#666666;">We are delighted to let you know that you are about to be a part of our referral program. Earn reward points on our platform. This is where you will become a member of our family of job seekers and job providers. Here you will be able to earn money by inviting new users and if you have additional users who will reach the total profile completeness then you will get the chance to earn more.
</br></br>
This is our perfect vision of making things easier for our users. People who are having a hard time finding a job they can work for us and earn commissions of our new users.
</br></br>
So let us get you started with this. Click below to create your referral link. You can start sharing the link directly and on different social media platforms or you can copy the link and share it anywhere you want. The more you share the more you will earn. Keep sharing and earning.</p>
	  <a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard"><button id="editbutton" title="Go to Refferal dashboard">Referral Dashboard</button></a>
	 </div>
	</div>
</div>

<?php include 'footer.php'; ?>
</body>

<script src="<?= base_url(); ?>js/analytics.js"></script>

</html>	

<script type="application/javascript">

 function branddetails()

 {
		var paramstr=$("#applyform").serialize();

		//$('#loading_pic').show();

		$.post("<?php echo base_url();?>ajaxcontrol/applyajax",

		paramstr, 

		function(data) 

		{

			/*$("#votingg").hide();

			$("#voting_answer").show();*/

		

		 if(data == "Success")

		 {

		 	

		   /*$('#success_msg').show();

		  $('#success_msg').text(" Record saved successfully");*/

		/* }

		});	*/



		

 }

 </script>






<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-36521580-23"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-36521580-23');

</script>

<script type="application/javascript">
 function reviewreply(id)
 {

    var paramstr=$("#reviewreply_form" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/submitfinalrdashboard",
    paramstr))
    {
       $("#replytextbox" + id).val('');
      $("#replytextbox" + id).hide(600);
      $("#submitbutton2" + id).hide(600);
       $("#cancelx" + id).hide(600);
        $("#reply" + id).show(900);
       $("#successmsg1" + id).show(600);


      
    }
   }
  
 function replyform(id)
 {

    var paramstr=$("#reply_form" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/submitfinalrdashboard",
    paramstr))
    {
       $("#replytextbox" + id).val('');
      $("#replytextbox" + id).hide(600);
      $("#replybutton1" + id).hide(600);
       $("#cancelx" + id).hide(600);
        $("#reply" + id).show(900);
       $("#successmsg" + id).show(600);


      
    }
   }

   function submitreport(id)
 {

    var paramstr=$("#reportform" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/submitreport",
    paramstr))
    {
      $("#reportform" + id).hide(600);
      $("#successmsgreport" + id).show(900);
    }
   }

    function submitreplyreportreply(id)
 {

    var paramstr=$("#replyreportform" + id).serialize();
   
    if($.post("<?php echo base_url();?>recruiter/submitreport",
    paramstr))
    {
      $("#replyreportform" + id).hide(600);
      $("#successmsgreplyreport" + id).show(900);
    }
   }
   

 </script>

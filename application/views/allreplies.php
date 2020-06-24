<!--A Design by W3layouts

Author: W3layout

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

--><?php

//session_start();

//echo $id=$this->session->userdata('eid');

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

		$emplyee_uuid=$this->session->userdata('employe_id');
		foreach ($jobs as $key ) {
	echo $key['submitjob_job_title'];
} ?>| Job description:: Get-job.online</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">

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

<meta name="description" content="
" />


<link rel="alternate" href="<?= base_url(); ?>" hreflang="en"/>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?= base_url(); ?>css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="<?= base_url(); ?>js/jquery.min.js"></script>

<script src="<?= base_url(); ?>js/jquery-3.3.1.js"></script>

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
  .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
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
.bar-0 {width: 0%; height: 18px; background-color: #f44336;}
.bar-0-10 {width: 5%; height: 18px; background-color: #f44336;}
.bar-10-20 {width: 10%; height: 18px; background-color: #f44336;} 
.bar-20-30 {width: 20%; height: 18px; background-color: #ff9800;}
.bar-30-40 {width: 30%; height: 18px; background-color: #ff9800;}
.bar-40-50 {width: 40%; height: 18px; background-color: #ff9800;}
.bar-50-60 {width: 50%; height: 18px; background-color: #00bcd4;}
.bar-60-70 {width: 60%; height: 18px; background-color: #00bcd4;}
.bar-70-80 {width: 70%; height: 18px; background-color: #2196F3;}
.bar-80-90 {width: 80%; height: 18px; background-color: #2196F3;}
.bar-90-100 {width: 90%; height: 18px; background-color: #4CAF50;}
.bar-100 {width: 100%; height: 18px; background-color: #4CAF50;}


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
  font-size:15px;
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

</style>


<link rel="stylesheet" href="<?= base_url(); ?>css/modal.css">
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
$(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>



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

            <li class="dropdown">

                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>

                <ul class="dropdown-menu">

                  <?php

                  foreach ($allcategory as $value) {

                    

                  ?>

                  <li><a href="<?= base_url(); ?>EmployeeSearch?category=<?= base64_encode(base64_encode($value['submitjob_category'])); ?>"><?= $value['submitjob_category']; ?></a></li>

                  <?php

              }

                  ?>

             </ul>

            </li>

            

                     <li><a href="<?= base_url(); ?>EmployeeWishlist">My Shortlist</a></li>



                  <li><a href="<?= base_url(); ?>EditEmployee">Edit Profile</a></li>

                 
                  <?php
                  foreach ($data as $value) {
                    $status=$value['employee_referral_status'];
                    if($status!=1)
                    {
                  ?>
                   <li><a href="<?= base_url(); ?>referral?q=<?= base64_decode(base64_decode($value['employee_email'])); ?>" title="Get started Refferal program">Refer & earn</a></li>
                 
                  <?php
              }
              else
              {
                  ?>
                   <li><a href="<?= base_url(); ?>ReferralDashboard" title="Go to referral Dashboard">Referral Dashboard</a></li>
                 
            <?php
          }
            }
            ?>
                  

                  <li><a href="<?= base_url(); ?>EmployeeLogout">Logout</a></li>


          </ul>
</div>
</div>
</nav>
<div id="spacer">
    &nbsp;
  </div>
  <div id="spacetop">
    
  </div>
<div class="container" >
    <div class="row" style="margin-top:2%;">
    

    <div class="col-lg-8">
     <!-- <div class="background padding">
        <form id="frm-comment">
          <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" />

          <textarea style="width:100%" id="reply" rows="3" placeholder="Add your reply here"></textarea>
          </br><input type="submit" class="editbutton" id="submitButton"><div id="comment-message">Comments Added Successfully!</div>
        </form>

            </div>-->
      </div>
    </br>
        <div class="col_3 cool radius margin-bottom">
             <h3 class="radius">All Replies</h3>
             <?php
              foreach ($review as $value) 
               {
             ?>
               <h4 class="reviewpadding"><?= $value['rrating_title']; ?><h4>
               <p class="review-description reviewpadding "><?= $value['rrating_description']; ?></p>
            <?php
          }
            ?>
             <div id="output"></div>
        </div>
    </div>

  <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#reply").focus();
            }

            $("#submitButton").click(function () {
                 $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "<?= base_url(); ?>recruiter/replyadd",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                          $("#comment-message").css('display', 'inline-block');
                            
                            $("#reply").val("");
                            $("#commentId").val("");
                         listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
                 listComment();
            });

            function listComment() {
                $.post("<?= base_url(); ?>recruiter/review_list?reviewid=1",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['rrating_id'];
                                parent = data[i]['rrating_parent_review_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['rrating_description'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].rrating_parent_review_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span>  <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['rrating_description'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['rrating_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>

    <div class="col-lg-4">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4121794652594490"
     data-ad-slot="1357016498"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="en" class="loading">
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="img/favicon.png">
        <title>Payumoney Codeigniter</title>   
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>  
                <div class="col-md-8">
                	<span="text-center">* All feilds are required</span>
                    <form method="post" id="booking_car_detailes" enctype="multipart/form-data" action="<?= base_url()?>payumoneytest/check">                                                                  
                        <div class="form-group">                      
                          <input type="text"  name="totalCost" id="payble_amount" class="form-control" placeholder="Enter Payble Amount"/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="product_info" id="product_info" class="form-control"  Placehosder="Product info" />
                        </div>
                       <div class="form-group">                      
                          <input type="text"  name="firstName" id="customer_name" class="form-control" placeholder="Full Name (Only alphabets)"/>
                        </div>
                          <div class="form-group">                      
                          <input type="text"  name="lastName" id="customer_name" class="form-control" placeholder="Full Name (Only alphabets)"/>
                        </div>
                        <div class="form-group">                                   
                          <input type="number"  name="mobile" id="mobile_number" class="form-control" placeholder="Mobile Number(10 digits)"/>
                        </div>
                        <div class="form-group">                                   
                          <input type="email"  name="email" id="customer_email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="address" id="customer_address" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <button class="btn btn-default"  data-dismiss="modal" >Cancel</button>
                        </div>
                    </form>      
                    <div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/F0561F88D621D20CD59C262E3F0B46FE'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/23.png' /></a></div> 

                    <div class='pm-button'><a href='https://www.payumoney.com/paybypayumoney/#/C7187A1A95B4DCCDC32FB43377E7BC3A'><img src='https://www.payumoney.com/media/images/payby_payumoney/new_buttons/21.png' /></a></div>          
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>    
    </body>
</html>    

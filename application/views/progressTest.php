<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload File In Codeigniter With ProgressBar</title>
<!--main css-->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
-->
    <!-- upload button css-->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    
    <link rel="stylesheet" type="text/css" href="https://get-job.online/assets/progressbar.css">
    <!-- js for animate progress bar-->
    <script src="https://get-job.online/assets/progressbar.js"></script>

    <script type="text/javascript">
    $(document).ready(function() { 
       $('#imageupload').submit(function(e) { 
        if($('#image_up_id').val()) {
          e.preventDefault();

          $("#progress-bar-status-show").width('0%');
          var file_details    =   document.getElementById("image_up_id").files[0];
          var extension       =   file_details['name'].split(".");
          
          var allowed_extension   =   ["png", "jpg", "jpeg"];
          var check_for_valid_ext =   allowed_extension.indexOf(extension[1]);

          

          if(file_details['size'] > 2097152)
          {
            alert('Please upload a file less than 2 MB');
            return false;
          }
          else if(check_for_valid_ext == -1)
          {
            alert('upload valid image file');
            return false;
          }
          else
          { 
            if(file_details['size'] < 2097152 && check_for_valid_ext != -1)
            {
              $('#loader').show();
              $(this).ajaxSubmit({ 
                //target:   '#toshow', 
                beforeSubmit: function() {
                  $("#progress-bar-status-show").width('0%');
                },
                uploadProgress: function (event, position, total, percentComplete){ 
                  $("#progress-bar-status-show").width(percentComplete + '%');
                  $("#progress-bar-status-show").html('<div id="progress-percent">' + percentComplete +' %</div>');               
                },
                success:function (){
                  $('#loader').hide();
                  //$('#imageDiv').show();
                 // var url = $('#toshow').text();
                  //var img = document.createElement("IMG");
                  //img.src = url;
                 // img.height = '100';
                  //img.width  = '150';
                  //document.getElementById('imageDiv').appendChild(img);             
                },
                resetForm: true 
              }); 
              return false;
            }   
          }    
        }
      });
    }); 
    </script>
  </head>
  
  

 
  

<body class="main-body">
<br><br><br><br>
<div class="uploadmain-div container">
  <!-- <div class="form-group" style="width:20%;float:left;">
     <a class="anchor_class" href="http://www.onlinestudys.com">Onlinestudys.com</a>
   </div>
   <div class="form-group" style="width:70%;float:right;">
     <a class="anchor_class" href="http://www.onlinestudys.com">Upload File In Codeigniter With ProgressBar </a>
  </div> -->
  
  <form id="imageupload" action="<?php echo base_url('Admin/progressTestQuery');?>" method="post">

        <div class="row">
        <div class="col-sm-9">      
          <div class="form-group">
           <div id="progressbr-container">
            <div  id="progress-bar-status-show">  </div>        
          </div>
          </div>
        </div>
      
         <div class="col-sm-9">   
            <div class="form-group">
              <label for="image">Upload Image</label>
              <input name="image_up" id="image_up_id" type="file" class="demoInputBox form-control" />
            </div>
          </div>
      </div>      

        <div class="row">
         <div class="col-sm-9">
            <div class="form-group">
              <input type="submit"  value="Upload Image" class="btn btn-success" />
            </div>
          </div>
          <div class="col-sm-9">
            <div class="form-group">
              <div id="toshow" style="visibility:hidden;"></div>
          </div>
        </div>  
      </div>
      <div class="row">
          <div class="col-sm-9">        
            <div class="form-group">
              <div id="imageDiv" style="display:none;color:red;"><strong>Your Uploaded Image :-</strong>  </div>
            </div>
          </div>
          <div class="col-sm-9">  
            <div class="form-group">
            <div id="loader" style="display:none;">
            <img  src="<?php echo base_url('assets/images/LoaderIcon.gif');?>" />
            </div>
          </div>  
        </div>
      </div>    
  </form>
</div>  

    <!-- nvaigation end -->

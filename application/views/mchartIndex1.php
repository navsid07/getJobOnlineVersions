<!DOCTYPE html> 
  <head> 
  <title>Google Chart and Codeigniter with MySQL</title> 
    <!--Load the AJAX API--> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 

     <script type="text/javascript">
     $(document).ready(function() {
     	$.ajax({
     		url : "<?= base_url(); ?>Mcharttest/data2";?>,
     		dataType : "JSON",
     		success : function(result) {
     			alert(result);
     		}
     	});
     }) ;
     </script>
    
</head>
     <body>
     	<table class="columns">
     		<tr><td>
     			<div id="piechart_div" style="border:1px solid #ccc"></div>
     			<div id="barchart_div" style="border:1px solid #ccc"></div>
     		</td></tr>
     	</table>
     </body>
</html>
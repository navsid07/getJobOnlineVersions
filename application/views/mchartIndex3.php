<?php
$chart_data=" ";
foreach ($data as $row ) {
  
  $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
  }
  $chart_data = substr($chart_data, 0, -2);
?><html>
  <head> 

  <title>Google Chart and Codeigniter with MySQL</title> 
    <!--Load the AJAX API--> 
    <link rel="stylesheet" href="<?= base_url(); ?>morris/css/moris.css">
 
    <script src="<?= base_url(); ?>morris/js/jquery.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/raphael.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/morris.min.js"></script> 
  
</head>
     <body>
     	<div class="container"  style="width:300px;">

            <div id="chart" style="color:black;"></div></div>
     </body> 
</html>
<script>
    Morris.Bar({

        element : 'chart',
        data:[<?php echo $chart_data; ?>],
        xkey:'year',
        ykeys:['profit'],
        labels:['Profit'],
        hideHover:'auto',
        resize: true,
        barColors: function (row, series, type) {
    if (type === 'bar') {
      var red = Math.ceil(255 * row.y / this.ymax);
      return "#f15f43";
    }
    else {
      return '#000';
    }
  }
    });
</script>
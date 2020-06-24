<?php
$monthlyChartData="";
        foreach ($monthlychartdataEmployee as $monthlyrow )
        {
  
            $monthlyChartData .= "{ datee:'".$monthlyrow["employee_name"]."', count:".$monthlyrow["employee_uid"]."}, ";
        }
        ?><html>
<head>        
 <link rel="stylesheet" href="<?= base_url(); ?>morris/css/moris.css">
 
    <script src="<?= base_url(); ?>morris/js/jquery.min.js"></script>
    <script src="<?= base_url(); ?>morris/js/raphael.min.js"></script> 
    <script src="<?= base_url(); ?>morris/js/morris.min.js"></script> 
</head>

<body>
<div id="MonthlyChart"></div>

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

</body>
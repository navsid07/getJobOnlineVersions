<html>  
 <head>  
   <title>Datatable view</title>  
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
   <meta property="og:title" content="Find a job and get recruited online | Get Job Online">
<meta property="og:type" content="Website">
<meta property="og:url" content="<?= base_url(); ?>">
<meta property="og:image" content="">
<meta property="og:description" content="online job portal to offer jobs matching your skills. find part time and full time jobs. well paid jobs in india,jobs for students and experienced candidates.">
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
      <div id="container" class="container">
  <h1>Welcome to CodeIgniter!</h1>
  <div class="table table-responsive">
    <table class="table" id="datatable">
    <thead>
      <tr>
        <td>ID</td>
        <td>tweet</td>
      </tr>
    </thead>
    <tbody>
      
    </tbody>
  </table>
  </div>
  
</div> 
      <script type="text/javascript">
    $(document).ready(function() {
    $('#datatable').DataTable( {
        "processing": true,
        "serverSide": true,

        "ajax": {
            "url": "<?= base_url(); ?>datatable/get_records",
            "type": "POST"
        },
        "columns": [
            { "data": "employee_uid" },
            { "data": "employee_name" }
       
        ]
    } );
} );
</script>
 </body>  
 </html>  
 
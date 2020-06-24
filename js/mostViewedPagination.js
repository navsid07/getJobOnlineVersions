//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#mostViewedPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/welcome/loadMostViewedPagination/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#loading111').hide();
						$('#mostViewedPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#mostViewedList tbody').empty();
				for(index in result){
					var jobTitle = result[index].submitjob_job_title;
					var jobId = result[index].submitjob_id;
					
					sno+=1;
					
				
						var tr = "<tr>";
						tr += "<td class='padding hidden-xs'><a href='EmployeeJobDetail?uid="+ jobId +"&&title="+ jobTitle +"' style='text-decoration:none; color:#999999;' >"+ jobTitle +"</a></td>";
						tr += "</tr>";
				
				
					$('#mostViewedList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
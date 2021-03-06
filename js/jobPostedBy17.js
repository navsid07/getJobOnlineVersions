//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#jobPostedByPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/welcome/loadJobPostedByPagination/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						
						 $('#jobPostedloading').hide();
						$('#jobPostedByPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#jobPostedByList tbody').empty();
				for(index in result){
					var jobid = result[index].submitjob_id;
					var title = result[index].submitjob_job_title;
					var description1 = result[index].submitjob_job_description;
					var description2 = description1.substr(0, 200);
					var description3 = window.atob(description2);
					var description = window.atob(description3) + " ... ";
					var location = result[index].submitjob_preffered_location;
					var payscale = result[index].submitjob_payscale;


					
					sno+=1;
					
							var tr = "<tr>";
						tr += "<td><a href='JobVisitor?uid="+ jobid +"&&title="+ title +"' style='text-decoration:none; color:#999999;' >"+ title +"</a></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class=' title'>"+ description +"</td>";
						tr += "</tr>";
						tr += "<tr class='border'>"; 
						tr += "<td class='padding border' style='margin-bottom:20px;'><span itemprop='jobLocation' class='city'><i class='fa fa-map-marker'></i>"+ location +"</span> <span class='type full-time'><i class='fa fa-clock-o'></i> Full Time</span><span itemprop='baseSalary' class='sallary'><i class='fa fa-dollar'></i>"+ payscale +"</span></td>";
						tr += "</tr>";
						
				
					$('#jobPostedByList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#searchWidgetPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/Employee/loadSearchWidgetPagination/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						// This alert box for alert resultalert(JSON.stringify(response));
						 $('#searchWidgetLoading').hide();
						$('#searchWidgetPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#searchWidgetPaginationList tbody').empty();
				for(index in result){
					var jobTitle = result[index].submitjob_job_title;
					var jobid = result[index].submitjob_id;
					
					var location = result[index].submitjob_preffered_location;
					var payscale = result[index].submitjob_payscale;
					var description1 = result[index].submitjob_job_description;
					// var description2 = description1.substr(0, 40);
					 var description3 = window.atob(description1);
					var description = window.atob(description3);
					
					sno+=1;
					

						var tr = "<tr>";
						tr += "<td class='title' style='text-transform:capitalize'><a href='JobVisitor?uid="+ jobid +"&&title="+ jobTitle +"' style='text-decoration:none; font-size:1.2em;' >"+ jobTitle +"</a></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class='title' style='padding-left:2%;'>"+ description +"</td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class='data'><span class='sallary'><i class='fa fa-map-marker'></i>"+ location +"</span><span class='sallary'><i class='fa fa-dollar'></i>"+ payscale +"</span><span class='type full-time'><i class='fa fa-clock-o'></i> Full Time</span></td>";
						tr += "</tr>";
						tr += "<tr class='padding'>";
						tr += "<td class='padding'></td>";
						tr += "</tr>";
						tr += "<tr class='border'>";
						tr += "<td></td>";
						tr += "</tr>";
						tr += "<tr class='padding'>";
						tr += "<td class='padding'></td>";
						tr += "</tr>";
						
						
				
					$('#searchWidgetPaginationList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
				
			}

});
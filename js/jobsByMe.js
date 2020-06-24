//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#jobsPostedPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: '/employee/jobsByMe/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#loading1').hide();
						$('#jobsPostedPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#jobsByMeList tbody').empty();
				for(index in result){
					var jobtitle = result[index].submitjob_job_title;
					var education = result[index].submitjob_lowest_education;
					var location = result[index].submitjob_preffered_location;	
					var link = result[index].submitjob_id;
					sno+=1;
					var desc = result[index].submitjob_job_viewed;
					// desc = desc.substr(0, 40);
					
					//var desc1 = window.atob(desc);
					//var desc2 = window.atob(desc1) + " ... ";
					var education1 =atob(education);
					var education2 = atob(education1);
					
					
					var tr = "<tr class='border'>";
					tr += "<td class='fontSize profile_left70 padding'><a href='https://get-job.online/RecruiterJobDetail?rid="+ link +"'>"+ jobtitle +"</a></td>";
					tr += "<td class='padding fontSize'><img src='https://get-job.online/icons/eye.png' title='Job Viewed'>"+ "  "+ desc +"</td>";
					tr +="</tr>";
					
					$('#jobsByMeList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}


});
//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#recruiterreplypagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'http://get-job.online/employee/loadreviewreplyRecord/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#loading1').hide();
						$('#recruiterreplypagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#RecruiterReplyReviewList tbody').empty();
				for(index in result){
					var jobtitle = result[index].submitjob_job_title;
					var education = result[index].submitjob_lowest_education;
					var location = result[index].submitjob_preffered_location;
						
					var link = result[index].submitjob_id;
					sno+=1;
					var desc = result[index].submitjob_job_description;
					 desc = desc.substr(0, 40);
					
					var desc1 = window.atob(desc);
					var desc2 = window.atob(desc1) + " ... ";
					var education1 =atob(education);
					var education2 = atob(education1);

					var tr = "<tr>";
					tr += "<td class='leftt mainname'><a href='RecruiterJobDetail?uid="+ link +"' >"+ jobtitle +"</a></td>";
					tr += "</tr>";
					tr += "<tr>";
					tr += "<td class='leftt'>"+ education2 +"</td>";
					tr +="</tr>";
					tr += "<tr>";
					tr += "<td class='leftt'>"+ desc2 +"</td>";
					tr +="</tr>";
					tr +="<tr class='border'>";
					tr += "<td class='leftt'><font color='#f15f43'>	<div itemscope itemtype='http://schema.org/Place'><span itemprop='name'>"+ location +"</span><div></font></td>";
					tr += "</tr>";
					
					$('#RecruiterReplyReviewList tbody').append(tr);
						
				}
			}

});
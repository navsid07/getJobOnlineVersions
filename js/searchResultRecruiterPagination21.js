//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#searchResultRecruiterPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/recruiter/searchResultRecruiterPagination/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#searchResultRecruiterPaginationLoading').hide();
						$('#searchResultRecruiterPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#searchResultRecruiterPaginationList tbody').empty();
				for(index in result){

					var uid = result[index].employee_uid;
					var name1 = result[index].employee_name;
					var name2 = window.atob(name1);
					var name = window.atob(name2); 
					
					var location = result[index].employee_preffered_location;
						
				
					var desc = result[index].employee_description;
					 desc = desc.substr(0, 40);
					var desc1 = window.atob(desc);
					var desc2 = window.atob(desc1) + " ... ";
					/*var education1 =atob(education);
					var education2 = atob(education1);*/
					/*<span itemscope itemtype="http://schema.org/Place"><span itemprop="name"><?php if(empty($value['employee_preffered_location']))
						{
							$locationn='not inserted';
						} 
						else
							{
								$locationn=$value['employee_preffered_location'];
							} */
					var tr = "<tr>";
					tr += "<td class='leftt mainname' colspan='2'><h4><a href='https://get-job.online/EmployeeDetailRecruiter?uid="+ uid +"' style='text-decoration:none; color:#d3404e; font-size:1.1em;'>"+ name +"</a></h4></td>";
					tr += "</tr>";
				    tr += "<tr>";
					tr += "<td style='width:1%;'></td><td >"+ desc2 +"</td>";
					tr += "</tr>";
					 tr += "<tr>";
					tr += "<td colspan='2'><p><span class='city'><i class='fa fa-map-marker'></i>"+ location +"</span></p></td>";
					tr += "</tr>";
					 tr += "<tr>";
					tr += "<td class='padding'></td>";
					tr += "</tr>";
					
					$('#searchResultRecruiterPaginationList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
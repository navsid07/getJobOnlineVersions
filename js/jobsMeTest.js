//jquery for employerprofile line number 852
		$(document).ready(function(){

			//pagination jquery second

			// Detect pagination click
			$('#jobsPostedPagination1').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination1(pageno);
			});

			loadPagination1(0);

			// Load pagination
			function loadPagination1(pagno){
				$.ajax({
					url: 'https://get-job.online/employee/jobsByMeTest/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#loading1').hide();
						$('#jobsPostedPagination1').html(response.pagination);
						createTable1(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable1(result,sno)
			{
				sno = Number(sno);
				$('#jobsByMeList1 tbody').empty();
				for(index in result)
				{
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
					tr += "<td class='fontSize profile_left70 padding'><a href='RecruiterJobDetail?rid="+ link +"'>"+ jobtitle +"</a></td>";
					tr += "<td class='padding fontSize'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHsSURBVDhP7VMxaxRBFB7FxigWYiMkhTGFtY1KinVn7jYHHoJwgsftzawxhvyAgI3hwDZCLAxoaSkoNhJrFSwtFBttEvUQ4c6dXc+DiNzme3Oz6+5xcPkB+eAV+773ffPevFl2gAw//PIxLd26VmI9UvypVvxJJPm9MHB50modtmWT0WlUTmgp7kdK/EYkY0OK7SgQixONY1We15K3c+JvML8bNUU1lLwGo4fouJ/y6Pptr7Fw2sqLAHkD4r+ZmeSvfl53jls6Q6y8c3RQZooGtO/MWXoInFqB4W5WpMR3ukNLs0Ht4tHEcY7YTxb5ly+gZpDW4/CvnYYzbcgw4OeR+JORQ8M1QwIY9Q4O+4f8L1qITTNM86agkeKTmQgtf8gTJqR7lUTt5eqUNRuKcGfGDYDBRkFjePGAxt0aJWgBJKIx0X03zcPkhXEDkH+c15iQ7ioL/fIZbC8sknzT6mhklzqDwfNu4M1QLmHsECb7nNeg5l12z7pZWkAiv5Q+bdOQYxCq0u28WWEpKWLJr6Gz3v9CvoP3d8nSBtQZ6pbyhyO+4I86a0uKoI2j+GNaTE8D8ZouG9+PRsdEZ8/0Le+klY8H3QNMV9Dh+4LYBj1+GL9EV56V7B/6ppiFyRVzQFMoWlBcd05Z+gAExvYAEA2cktP9p5wAAAAASUVORK5CYII=' title='Job Viewed'>"+ desc +"</td>";
					tr +="</tr>";
					
					$('#jobsByMeList1 tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

			});
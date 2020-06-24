$(document).ready(function(){

			// Detect pagination click
			$('#paginationFeaturedEmployeeNew').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);


			
			
			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: '/pagination/loadRecordFeaturedEmployeeNew/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						$('#loading2').hide();
						$('#loading22').hide();
						$('#loadingFeaturedEmployeeRecruiterLogin').hide();
						$('#paginationFeaturedEmployeeNew').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#FeaturedEmployeeNew ubody').empty();
				for(index in result){
					var employeename = result[index].employee_name;
					var country = result[index].employee_city;
					var country1 = atob(country);
					var country2 = atob(country1);
					var emp1= atob(employeename);
					var emp2 =atob(emp1);
					var link = result[index].employee_uid;
					sno+=1;
					
					var li = "<li style='text-align:center;'><a href='EmployeeDetailRecruiter?uid="+ link +"' style='text-decoration:none;'><font size='3.5em'>"+ emp2 + ' - ' + country2+"</a></li>";
					
					$('#FeaturedEmployeeNew ubody').append(li);
					
					//$('#postsListtodayjobs ubody').append(div);
					
				}
			}
	});

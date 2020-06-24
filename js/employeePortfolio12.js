//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#portfolioPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/employee/loadPortfolio/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#portfolioLoading').hide();
						$('#portfolioPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#portfolioList tbody').empty();
				for(index in result){
					
					var name = result[index].projectName;
					var link = result[index].projectLink;
					var id = result[index].id;
					var uid = result[index].uid;
					var name1 =atob(name);
					var name2 = atob(name1);
					var link1 =atob(link);
					var link2 = atob(link1);
					var description = result[index].Description;
					var description1 = atob(description);
					var description2 = atob(description1);
				
						var tr = "<tr>";
						tr += "<td class='leftt mainname'><a href='EmployeeJobDetail?uid="+ id +"&&title="+ name2 +"'>"+ name2 +"</a></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td>"+ link2 +"</td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td>"+ description +"</td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td><form method='post' action='http://get-job.online/AddEmployeePortfolio'><input type='hidden' name='pid' value='"+ id +"'><input type='hidden' name='uid' value='"+ uid +"'><input type='hidden' name='editStatus' value='edit'><button type='submit' title='Edit Certification' style='border:none; background-color: white;'><img src='https://get-job.online/images/EditPencil1.png' style='padding:2%;' alt='edit icon'></button></form></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td><form method='post' id='deletePortfolioForm"+ id +"'><input type='hidden' name='id' value='"+ id +"'><button type='button' style='border:none; background-color: white;' onclick='return deleteportfolio("+ id +")'><img src='https://get-job.online/icons/deleteIcon.png' style='padding: 2%;' title='Delete Certification' alt='edit icon' ></button></form></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td><tr class='border' style='display:none;' id='deletePortfolioSuccessmsg"+ id +"'><td><span  style='color:green; font-weight:bold;'>Portfolio deleted.</span></td></tr></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class='padding'></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class='border'></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class='padding'></td>";
						tr += "</tr>";
						
				
					$('#portfolioList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#certificationPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/employee/loadCertification/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#certificationLoading').hide();
						$('#certificationPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#certificationList tbody').empty();
				for(index in result){
					var name = result[index].certificateName;
					var number = result[index].certificateNumber;
					var provider = result[index].certificateProvider;
					var period = result[index].certificatePeriod;
					var uid = result[index].uid;
					var id = result[index].id;
					
					/*var education = result[index].submitjob_lowest_education;
					var location = result[index].submitjob_preffered_location;
					var experience = result[index].submitjob_experience_required;
					var link = result[index].submitjob_id;
					sno+=1;
					var desc = result[index].submitjob_job_description;
					 desc = desc.substr(0, 40);
					*/
					var name1 = atob(name);
					var name2 = atob(name1);
					var provider1 = atob(provider);
					var provider2 = atob(provider1);
					var period1 = atob(period);
					var period2 = atob(period1);

				
				
						var tr = "<tr>";
						tr += "<td colspan='2'><a href='#'><h4>"+ name2 +"</h4></a></td>";
						tr += "</tr>";
						 tr += "<tr>";
						tr += "<td colspan='2'>"+ number +"</td>";
						tr += "</tr>";
					    tr += "<tr>";
						tr += "<td colspan='2'>"+ provider2 +"</td>";
						tr += "</tr>";
						 tr += "<tr>";
						tr += "<td colspan='2'>"+ period2 +"</td>";
						tr += "</tr>";
						 tr += "<tr>";
						tr += "<td><form method='post' action='https://get-job.online/employee/editcertification'><input type='hidden' name='uid' value='"+ uid +"'><input type='hidden' name='name' value='"+ name2 +"'><button type='submit' title='Edit Certification' style='border:none; background-color: white;'><img src='https://get-job.online/images/editNew.png' style='padding:2%;' alt='edit icon'></button></form></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td><form method='post' id='deleteCertificationForm'"+ id +"'><input type='hidden' name'id' value='"+ uid +"'><button type='button'style='border:none; background-color: white;' onclick='return deletecertification('"+ uid +"')'><img src='https://get-job.online/images/deleteNew.png' style='padding: 2%;' title='Delete Certification' alt='edit icon'></button></form></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td colspan='2' class='border'></td>";
						tr += "</tr>";
						tr += "<tr>";
						tr += "<td class='padding'></td>";
						tr += "</tr>";


					$('#certificationList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
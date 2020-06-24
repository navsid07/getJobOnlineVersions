//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#locationPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/welcome/loadLocationPagination/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#loading11').hide();
						$('#locationPagination').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#locationPaginationList tbody').empty();
				for(index in result){
					var location = result[index].submitjob_preffered_location;

					
					sno+=1;
					
				
						var tr = "<tr>";
						tr += "<td class='padding hidden-xs'><a href='Search?city="+ location +"' style='text-decoration:none; color:#999999;' >"+ location +"</a></td>";
						tr += "</tr>";
				
				
					$('#locationPaginationList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
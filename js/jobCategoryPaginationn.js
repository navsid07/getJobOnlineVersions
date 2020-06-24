//jquery for employerprofile line number 852
		$(document).ready(function(){

			// Detect pagination click
			$('#categoryPagination').on('click','a',function(e){

				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: 'https://get-job.online/welcome/loadCategoryPagination/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						
						 $('#loading1').hide();
						$('#categoryPagination').html(response.pagination);
						createTable(response.result,response.row);
						
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#categoriesList tbody').empty();
				for(index in result){
					var category = result[index].submitjob_category;

					
					sno+=1;
					
				
						var tr = "<tr>";
						tr += "<td class='padding hidden-xs'><a href='CategorySearch?category="+ category +"' style='text-decoration:none; color:#999999;' >"+ category +"</a></td>";
						tr += "</tr>";
				
				
					$('#categoriesList tbody').append(tr);
					//$('#postsList tbody')fadeIn(1000);	
				}
			}

});
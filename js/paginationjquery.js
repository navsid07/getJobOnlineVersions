
//jquery for employerprofile line number 852
		$(document).ready(function(){

//recruiter login line number 633
		
//end 633

//recruiterlogin line number 737

//end 737


//recruiterprofile line number 539



// Detect pagination click
			$('#paginationemployeerecommendation').on('click','a',function(e){
				e.preventDefault(); 
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});

			loadPagination(0);

			// Load pagination
			function loadPagination(pagno){
				$.ajax({
					url: '/pagination/loadRecordfeaturedemployee/'+pagno,
					type: 'get',
					dataType: 'json',
					success: function(response){
						 $('#loading2').hide();
						$('#paginationemployeerecommendation').html(response.pagination);
						createTable(response.result,response.row);
					}
				});
			}

			// Create table list
			function createTable(result,sno){
				sno = Number(sno);
				$('#employeerecommendation tbody').empty();
				for(index in result){
					
					var employeename = result[index].employee_name;
					
					
						var country = result[index].employee_city;
					var country1 = atob(country);
					var country2 = atob(country1);
					var emp1= atob(employeename);
					var emp2 =atob(emp1);
					var link = result[index].employee_uid;
					sno+=1;
					
					var desc = result[index].employee_description;
					 desc = desc.substr(0, 40);
					
					var desc1 = window.atob(desc);
					var desc2 = window.atob(desc1) + " ... ";

					var tr = "<tr>";
					tr += "<td class='leftt mainname fontSize' ><a href='EmployeeDetailRecruiter?uid="+ link +"' style='color:#d3404e; text-decoration:none;'>"+ emp2 +"</a></td>";
					tr += "</tr>";
					
					tr +="<tr>";
					tr += "<td class='leftt fontSize'><div itemscope itemtype='http://schema.org/Place'><span itemprop='name'>"+ country2 +"</span></div></td>";
					tr += "</tr>";
					tr +="<tr class='border'>";
					tr += "<td class='leftt fontSize'>"+ desc2 +"</td>";
					tr += "</tr>";
					$('#employeerecommendation tbody').append(tr);
					
					

					
				}
			}

//end line number 539




		});
// jquery for employerprofilr 852 end

//jquery from editemployerprofile line number 821
    document.getElementById('showexperience').style.display="none";
    function showw()
    {
      var x=document.getElementById('selectt').value;
      if(x=='Experience')
      {
        document.getElementById('showexperience').style.display="block";
      }
      else if(x=='Fresher')
      {
          document.getElementById('showexperience').style.display="none";
      }
       else
      {
          document.getElementById('showexperience').style.display="none";
      }
    }
// end line number 821 editemployerprofile



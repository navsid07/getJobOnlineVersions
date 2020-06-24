$(document).ready(function () {

    $("#degreename").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCountryName",
            data: {
                keyword: $("#degreename").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownDegree').empty();
                    $('#degreename').attr("data-toggle", "dropdown");
                    $('#DropdownDegree').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#degreename').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownDegree').append('<li role="presentation"><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['degree'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#degreename').val($(this).text());
      
    });

//second
$("#degreename1").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCountryName",
            data: {
                keyword: $("#degreename1").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownDegree1').empty();
                    $('#degreename1').attr("data-toggle", "dropdown");
                    $('#DropdownDegree1').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#degreename1').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownDegree1').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['degree'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry1').on('click', 'li a', function () {
        $('#degreename1').val($(this).text());
      
    });
    

    //three
$("#degreename2").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCountryName",
            data: {
                keyword: $("#degreename2").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownDegree2').empty();
                    $('#degreename2').attr("data-toggle", "dropdown");
                    $('#DropdownDegree2').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#degreename2').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownDegree2').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['degree'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry2').on('click', 'li a', function () {
        $('#degreename2').val($(this).text());
      
    });

    //three
$("#degreename3").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCountryName",
            data: {
                keyword: $("#degreename3").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownDegree3').empty();
                    $('#degreename3').attr("data-toggle", "dropdown");
                    $('#DropdownDegree3').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#degreename3').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownDegree3').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['degree'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry3').on('click', 'li a', function () {
        $('#degreename3').val($(this).text());
      
    });

    //four
$("#degreename4").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCountryName",
            data: {
                keyword: $("#degreename4").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownDegree4').empty();
                    $('#degreename4').attr("data-toggle", "dropdown");
                    $('#DropdownDegree4').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#degreename4').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownDegree4').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['degree'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry4').on('click', 'li a', function () {
        $('#degreename4').val($(this).text());
      
    });
    

    //four
$("#degreename5").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCountryName",
            data: {
                keyword: $("#degreename5").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownDegree5').empty();
                    $('#degreename5').attr("data-toggle", "dropdown");
                    $('#DropdownDegree5').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#degreename5').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownDegree5').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['degree'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry5').on('click', 'li a', function () {
        $('#degreename5').val($(this).text());
      
    });



    //city
$("#city").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCityName",
            data: {
                keyword: $("#city").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCity').empty();
                    $('#city').attr("data-toggle", "dropdown");
                    $('#DropdownCity').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#city').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCity').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['city'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcity').on('click', 'li a', function () {
        $('#city').val($(this).text());
      
    });




   //state
$("#state").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetStateName",
            data: {
                keyword: $("#state").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownState').empty();
                    $('#state').attr("data-toggle", "dropdown");
                    $('#DropdownState').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#state').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownState').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['name'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtstate').on('click', 'li a', function () {
        $('#state').val($(this).text());
      
    });



   //state
$("#getcity").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetCity",
            data: {
                keyword: $("#getcity").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#Dropdowngetcity').empty();
                    $('#getcity').attr("data-toggle", "dropdown");
                    $('#Dropdowngetcity').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#getcity').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#Dropdowngetcity').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['name'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtgetcity').on('click', 'li a', function () {
        $('#getcity').val($(this).text());
      
    });


//state
$("#pincode").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://www.test.autorevew.com/test/GetPincode",
            data: {
                keyword: $("#pincode").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#Dropdownpincode').empty();
                    $('#pincode').attr("data-toggle", "dropdown");
                    $('#Dropdownpincode').dropdown('toggle');
                                    }
                else if (data.length == 0) {
                    $('#pincode').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#Dropdownpincode').append('<li role="presentation" ><a role="menuitem dropdownnameli" class="dropdownlivalue">' + value['pin'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtgetpincode').on('click', 'li a', function () {
        $('#pincode').val($(this).text());
      
    });

});

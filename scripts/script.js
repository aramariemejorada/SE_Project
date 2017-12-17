$(document).ready(function(){
  function addError(ID){
    $('#' + ID).addClass('has-error');
    setTimeout(function(){
                $('#' + ID).removeClass('has-error');
        }, 3000);
  }
  function formatDate(date1,date2) {
      var date1 = new Date(date1);
      var date2 = new Date(date2);
      var month1 = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"][date1.getMonth()];
      var month2 = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"][date2.getMonth()];
      $("#mod_date").text(((month1) + ' ' + date1.getDate() + ', ' +  date1.getFullYear()) 
          + " - " + (month2) + ' ' + date2.getDate() + ', ' +  date2.getFullYear());
  }
  function display(date){
    window.open('after-print.php');
    $.ajax({
        url: "includes/login.inc.php",
        type: "POST",
        data:{
            id: $("#user").prop('value'),
            pass : $("#password").prop('value')
        },
        success: function (data) {
             if(data == 2){
                 window.location = 'driver.php';
             }else if(data == 1){
                 window.location = 'admin.php';
             }else{
                 console.log('error');
             }
        },
        error: function(jqXHR, textStatus, errorThrown) {
             console.log(textStatus, errorThrown);
        }  
    });
  }
  function setDistance(){
    var a = parseFloat($("#f_odomReading").prop('value'));
    var b = parseFloat($("#s_odomReading").prop('value'));
    var c = a-b;
    dis = a -b;
    return c;
  }
  function getDistance(){
    if($('#odomCheck').is(":checked")){
      var distance_val = parseFloat($('#distance').val());
      return distance_val;
    }else{
      var distance_val = parseFloat($('#distance').text());
      return distance_val;
    }
  }
  function getGasUsed(){
    var gas;
    // var dis = getDistance();
    var dis = parseFloat($('#distance').val());
    console.log(dis);
    $.ajax({
      url: "includes/balance.php",
      type: "POST",
      data:{
          tt_date : $('#select-type2').prop('value'),
      },
      success: function (data) {
          console.log(data);
          data = JSON.parse(data)
          data = parseFloat(data['normal_travel']); 
          console.log(data);
          gas = (dis/data);
          console.log(gas);
          $('#gasUsed').text(gas.toFixed(3));
          $('#gasUsed').val(gas.toFixed(3));
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
      }  
    });
  }
  function getFinal(){
    var a = parseFloat($('#balance').val())+0;
    var b = parseFloat($('#issuedStock').val())+0;
    var c = parseFloat($('#purchased').val())+0;
    var d = a + b + c;
    var f = (d - $('#gasUsed').val());
    return Math.abs(f.toFixed(3));
  }
  $("#login_button").click(function(){
    console.log($("#user").prop('value'));
    console.log($("#password").prop('value'));
    $.ajax({
       url: "includes/login.inc.php",
       type: "POST",
       data:{
           id: $("#user").prop('value'),
           pass : $("#password").prop('value')
       },
       success: function (data) {
            if(data == 2){
                window.location = 'driver.php';
            }else if(data == 1){
                window.location = 'admin.php';
            }else{
                addError("login");
            }
       },
       error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
       }  
    });
  }); 
  $("#signup_button").click(function(){
    var radioValue = $("input[name='optradio']:checked").val();
    console.log($("#passw").prop('value'));
    console.log($("#passwordcon").prop('value'));
    $.ajax({
       url: "includes/signup.inc.php",
       type: "POST",
       data:{
           firstname: $("#firstName").prop('value'),
           lastname : $("#lastName").prop('value'),
           middlename: $("#middleName").prop('value'),
           empid: $("#empid").prop('value'),
           passw: $("#passw").prop('value'),
           passwordcon: $("#passwordcon").prop('value'),
           role : radioValue
       },
       success: function (data) {
            console.log(data);
            if(data == 1){
              alert("Sign-up successful.");
              window.location = 'index.php';
            }else if(data == -3){
              alert("Passwords do not match");
            }else if(data == -4){
              alert("Username taken");
            }
            else{
              alert('Error in fields');
            }
       },
       error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
       }  
    }); 
  });
  $('#newVehicle').click(function(){
    if($("#vehicleName").prop('value')==""|| $("#licensePlate").prop('value')=="" ||
      $("#cylinder").prop('value')==""||$("#cylinder").prop('value') <1 || $("#cylinder").prop('value')>6 
      || $("#normalTravel").prop('value')==""){
      alert("Error in fields.");
    }else{
      $.ajax({
          url: "includes/newVehicle.php",
          type: "POST",
          data:{
              vehicleType : $("#vehicleName").prop('value'),
              licensePlate : $("#licensePlate").prop('value'),
              cylinder : $("#cylinder").prop('value'),
              normalTravel : $("#normalTravel").prop('value')
          },
          success: function (data) {
              console.log(data);
              if(data ==1){
                alert("Added a new vehicle.");
                window.location = 'admin.php';
              }else{
                window.location = 'admin.php';
              }
              // if(data==1){
              //   alert("Added a new vehicle.");
              //   window.location = 'admin.php';
              // }else{
              //   alert("Add failed.");
              //   window.location = 'admin.php';
              // }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
          }  
      });
    }
  });
  var initial;
  var final;
  $('#s_odomReading').change(function(){
    initial = $(this).val();
    $('#distance').val(parseFloat(final)-parseFloat(initial));
  });
  $('#f_odomReading').change(function(){
    final = $(this).val();
    $('#distance').val(parseFloat(final)-parseFloat(initial));
  });
  var plate;
  $(document).on("click", ".modifyVehicle", function(event) {
    plate = $(this).val();
    console.log(plate);
  });
  $('#edit').click(function(){
    if($('#newBalance').prop('value')=="" && $('#newTravel').prop('value')==""){
      alert("Empty fields");
    }else{
       $.ajax({
          url: "includes/modifyVehicle.php",
          type: "POST",
          data:{
            id : plate,
            action: 1,
            newBalance: $('#newBalance').prop('value'),
            newTravel : $('#newTravel').prop('value')
          },
          success: function (data) {
            console.log(data);
            if(data ==1){
              window.location = "admin.php";
            }else{
              alert("Edit error.");
              window.location = "admin.php";
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }  
      }); 
    }
  });
  $(document).on("click", ".removeUser", function(event) {
    var a = $(this).val();
    console.log(a)
    if(confirm("Do you really want to delete this user")==true){
       $.ajax({
          url: "includes/deleteUser.php",
          type: "POST",
          data:{
            id : a
          },
          success: function (data) {
            console.log(data);
            if(data ==1){
              window.location = "admin.php";
            }else{
              alert("Deletion failed.");
              window.location = "admin.php";
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }  
      }); 
    }
  });
  $(document).on("click", ".removeVehicle", function(event) {
    plate = $(this).val();
    console.log(plate);
    if(confirm("Do you really want to delete this vehicle?")==true){
       $.ajax({
          url: "includes/modifyVehicle.php",
          type: "POST",
          data:{
            id : plate,
            action: 2,
          },
          success: function (data) {
            console.log(data);
            if(data ==1){
              window.location = "admin.php";
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }  
      }); 
    }
  });
  $('#exportVT').click(function(e){
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#VT').html()));
    e.preventDefault();
  });
  $('#exportTVT').click(function(e){
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#tvt').html()));
    e.preventDefault();
  });
  $('#show_before_modal').click(function(){
      var date1 = $("#beforeDate1").prop('value');
      var date2 = $("#beforeDate2").prop('value'); 
      formatDate(date1,date2);
      $("#mod_vehicle").text($("#beforePlateNo").prop('value'));
      $("#mod_dest").text($("#beforePass").prop('value'));
      $("#mod_pass").text($("#beforeDest").prop('value'));
      $("#mod_purp").text($("#beforePurp").prop('value'));
  });
  $("#printTrip").click(function(e){
    if($("#beforeDate1").prop('value')== "" || $("#beforeDate2").prop('value')== ""|| $("#beforePlateNo").prop('value')== 0|| 
      $("#beforePass").prop('value')== ""|| $("#beforeDest").prop('value')== ""|| $("#beforePurp").prop('value')== ""){
      alert("Some fields are empty.");
    }else{
      var date1 = new Date($("#beforeDate1").prop('value'));
      var date2 = new Date($("#beforeDate2").prop('value'));
      var month1 = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"][date1.getMonth()];
      var month2 = ["January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"][date2.getMonth()];
      var a = ((month1) + ' ' + date1.getDate() + ', ' +  date1.getFullYear());
      var b = ((month2) + ' ' + date2.getDate() + ', ' +  date2.getFullYear());

      $.ajax({
          url: "includes/before.php",
          type: "POST",
          data:{
              date : $('#mod_date').text(),
              beginDate: $('#beforeDate1').prop('value'),
              endDate : $('#beforeDate2').prop('value'),
              beforePlateNo : $("#beforePlateNo").prop('value'),
              beforePass : $("#beforePass").prop('value'),
              beforeDest : $("#beforeDest").prop('value'),
              beforePurp : $("#beforePurp").prop('value')
          },
          success: function (data) {
              console.log(data);
              if(data == 1){
                window.open('before-print.php');
                window.location = "driver.php";
              }else{
                alert('Error in fields. Please try again.');
                window.location = "driver.php";
              }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
          }  
      });
    }
  });
  var selectData;
  var selectData2;
  var date;
  $('#select-type1').change(function(){
    selectData = $(this).val();
  });
  $('#select-type2').change(function(){
    selectData2 = $(this).val();
    $.ajax({
      url: "includes/balance.php",
      type: "POST",
      data:{
          tt_date : selectData2,
      },
      success: function (data) {
          console.log(data);
          if(data==-1){
             $('#balance').val('');
          }else{ 
            data = JSON.parse(data);
            $('#balance').val(data['balance_in_tank']);
          }
      },
      error: function(jqXHR, textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
      }  
    });
  });
  $("#submit_after_button").click(function(){
    var distance = setDistance();
    $("#distance").text(distance);
    $("#distance").attr('Placeholder',distance);
    $( "input[id='s_odomReading']").val('');
    $( "input[id='f_odomReading']").val('');
  });
  $( "input[id='s_odomReading']").prop({disabled: true});
  $( "input[id='f_odomReading']").prop({disabled: true});
  $( "input[id='s_odomReading']").attr('value', "");
  $( "input[id='f_odomReading']").attr('value', "");
  $( "#after_info").hide();
  $( "#odomCheck" ).change(function(){
    if(this.checked){
      $( "#after-Form").trigger("reset");
      $( "input[id='s_odomReading']").prop({disabled: true});
      $( "input[id='f_odomReading']").prop({disabled: true});
      $( "input[id='s_odomReading']").val('');
      $( "input[id='f_odomReading']").val('');
      $("#distance").attr('readonly', false);
      $("#distance").val('');
      $( "#after_info").hide();
    }else{
      $( "input[id='s_odomReading']").prop({disabled: false});
      $( "input[id='f_odomReading']").prop({disabled: false});
      $( "input[id='s_odomReading']").attr('value', "");
      $( "input[id='f_odomReading']").attr('value', "");
      $( "#after_info").show();
      $("#distance").prop('readonly', true);
      $("#distance").val('');
    }
  });
  $('.test').change(function(){
    getGasUsed();
  });
    
  $('#printFuel').click(function(){
    if($('#select-type2').prop('value')=="" ||parseFloat($("#mod_km").text())=="" || parseFloat($("#mod_fin").text())==""){
      alert("Some fields are empty.");
    }else{
      $.ajax({
          url: "includes/fuel.php",
          type: "POST",
          data:{
             tt_date : $('#select-type2').prop('value'),
             balance : parseFloat($("#mod_bal").text()),
             purchased : parseFloat($("#mod_purch").text()),
             issuedStock : parseFloat($("#mod_stock").text()),
             gasUsed : parseFloat($("#mod_gas").text()),
             distance : parseFloat($("#mod_km").text()),
             gearOil : parseFloat($("#mod_gear").text()),
             lubeOil : parseFloat($("#mod_lube").text()),
             grease : parseFloat($("#mod_grease").text()),
             remarks : $("#remarks").val(),
             ten_percent : (parseFloat($("#mod_gas").text())*.10),
             final_bal : parseFloat($("#mod_fin").text())
          },
          success: function (data) {
              console.log(data);
              if(data ==-1){
                alert('Error in fields.');
                console.log(data);
              }else{
                alert('Success');
                window.location = "driver.php";
              }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
          }  
      });
    }
  });
  $('#submit_fuel_button').click(function(){
    $("#mod_bal").text($("#balance").prop('value'));
    $("#mod_stock").text($("#issuedStock").prop('value'));
    $("#mod_purch").text($("#purchased").prop('value'));
    $("#mod_gas").text($("#gasUsed").prop('value'));
    $("#mod_km").text($("#distance").prop('value'));
    $("#mod_gear").text($("#gearOil").prop('value'));
    $("#mod_lube").text($("#lubeOil").prop('value'));
    $("#mod_grease").text($("#grease").prop('value'));
    $("#mod_fin").text(getFinal());
  });
  $('#searchYear').click(function(){
    console.log( $('#year option:selected').val())
    $.ajax({
        url: "includes/displayYearSearch.php",
        type: "POST",
        data:{
          search_year : $('#year option:selected').val()
        },
        success: function (data) {
          $('#tableData').html(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }  
    });
  });
    $('#searchMonthYear').click(function(){
      console.log( $('#month_1 option:selected').val())
      console.log( $('#month_2 option:selected').val())
      console.log( $('#year_2 option:selected').val())
      $.ajax({
          url: "includes/displayYearMonthSearch.php",
          type: "POST",
          data:{
            month_1 : $('#month_1 option:selected').val(),
            month_2 : $('#month_2 option:selected').val(),
            search_year : $('#year_2 option:selected').val()
          },
          success: function (data) {
            console.log(data);
            $('#VT').html(data);
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
          }  
      });
    });
    $(document).on("click", ".rePrint", function(event){
      console.log($(this).val());
      $.ajax({
          url: "rePrint.php",
          type: "POST",
          data:{
            data : $(this).val()
          },
          success: function (data) {
            console.log(data);
            window.open ('afterPrint.php');
          },
          error: function(jqXHR, textStatus, errorThrown) {
              console.log(textStatus, errorThrown);
          }  
      });
    });
});
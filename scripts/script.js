$(document).ready(function(){
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
    function getDistance(){
      var a = parseInt($("#f_odomReading").prop('value'));
      var b = parseInt($("#s_odomReading").prop('value'));
      var c = a-b;
      return c;
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
                    console.log('error');
                }
           },
           error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
           }  
       }); 
    });
    $("#signup_button").click(function(){
        var radioValue = $("input[name='optradio']:checked").val();
       $.ajax({
           url: "includes/signup.inc.php",
           type: "POST",
           data:{
               firstname: $("#firstName").prop('value'),
               lastname : $("#lastName").prop('value'),
               middlename: $("#middleName").prop('value'),
               empid: $("#empid").prop('value'),
               password: $("#password").prop('value'),
               passwordcon: $("#passwordcon").prop('value'),
               role : radioValue
           },
           success: function (data) {
                console.log(data);
                if(data == 1){
                    window.location = 'index.php';
                }
           },
           error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
           }  
       }); 
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

    $("#printTrip").click(function(){
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
                beforeDate1 : a,
                beforeDate2 : b,
                beforePlateNo : $("#beforePlateNo").prop('value'),
                beforePass : $("#beforePass").prop('value'),
                beforeDest : $("#beforeDest").prop('value'),
                beforePurp : $("#beforePurp").prop('value')
            },
            success: function (data) {
                console.log(data);
                // window.open('before-print.php');
                // window.location = "driver.php";
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }  
        });
    });
    var selectData;
    var selectData2;
    $('#select-type1').change(function(){
      selectData = $(this).val()
    });
    $('#select-type2').change(function(){
      selectData2 = $(this).val()
    });
    $("#submit_after_button").click(function(){
       $("#distance").attr('value',getDistance());
       $("#distance").attr('Placeholder',getDistance());

      // if(confirm("Data that will be submitted will not be changed.Would you like to submit?")==true){
      //   $.ajax({
      //       url: "includes/after.php",
      //       type: "POST",
      //       data:{
      //           tt_date : selectData,
      //           dateDepart : $("#dateDepart").prop('value'),
      //           odomReading : $("#odomReading").prop('value'),
      //           timeOfDepart : $("#timeOfDepart").prop('value'),
      //           timeOfArrival : $("#timeOfArrival").prop('value'),
      //           departure : $("#departure").prop('value'),
      //           arrival : $("#arrival").prop('value'),
      //       },
      //       success: function (data) {
      //           console.log(data);
      //           if(data == 1){
      //             window.location = 'driver.php';
      //           }
      //       },
      //       error: function(jqXHR, textStatus, errorThrown) {
      //           console.log(textStatus, errorThrown);
      //       }  
      //   });
      // }
    });
    var a;
    var b;
    function getFinalBalance(){
      var x = parseFloat( $("#balance").prop('value'));
      var y = parseFloat( $("#purchased").prop('value'));
      var z = parseFloat( $("#issuedStock").prop('value'))
      var a = x+y+z;
      var b = (a - parseFloat($("#gasUsed").prop('value'))).toFixed(4);
      return b;
    }

    $( "input[id='s_odomReading']").prop({disabled: true});
    $( "input[id='f_odomReading']").prop({disabled: true});
    $( "input[id='s_odomReading']").attr('value', 0);
    $( "input[id='f_odomReading']").attr('value', 0);
    $( "#after_info").hide();

    $( "#odomCheck" ).change(function(){
      if(this.checked){
        $( "#after-Form").trigger("reset");
        $( "input[id='s_odomReading']").prop({disabled: true});
        $( "input[id='f_odomReading']").prop({disabled: true});
        $( "input[id='s_odomReading']").val('');
        $( "input[id='f_odomReading']").val('');
        $( "#after_info").hide();

      }else{
        $( "input[id='s_odomReading']").prop({disabled: false});
        $( "input[id='f_odomReading']").prop({disabled: false});
        $( "input[id='s_odomReading']").attr('value', "");
        $( "input[id='f_odomReading']").attr('value', "");
        $( "#after_info").show();
        $("#distance").prop('readonly',true);
         $("#distance").val('');
       
      }
    });
    $('#submit_fuel_button').click(function(){
      console.log(selectData2);
      if(confirm("Data that will be submitted will not be changed.Would you like to submit?")==true){
        $.ajax({
            url: "includes/fuel.php",
            type: "POST",
            data:{
                tt_date : selectData2,
                balance : $("#balance").prop('value'),
                purchased : $("#purchased").prop('value'),
                issuedStock : $("#issuedStock").prop('value'),
                gasUsed : $("#gasUsed").prop('value'),
                distance : $("#distance").prop('value'),
                gearOil : $("#gearOil").prop('value'),
                lubeOil : $("#lubeOil").prop('value'),
                grease : $("#grease").prop('value'),
                remarks : $("#remarks").prop('value'),
                fin_bal : getFinalBalance(b)
            },
            success: function (data) {
                console.log(data);
                if(data == 1){
                  window.location = 'driver.php';
                  display(tt_date);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }  
        });
      }
    });
});
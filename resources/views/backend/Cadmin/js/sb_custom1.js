(function($) {
  "use strict"; // Start of use strict
  $(document).ready(function () {
      $('select').select2();
  });

$(document).ready( function(){
$("#contractor").on('change', function(){
  var contractor_id = $(this).val();
  if(contractor_id){
  $.ajax({
    type: "POST",
    url: 'ajax.php',
    data: {contractor_id: contractor_id},
     cache: false,
    dataType: "html",
    success:function(data) {
      console.log(data);
      $("#sub_contractor").html(data);
    }
  });
} 
else{
  $('#sub_contractor').html('<option value="">Select country first</option>');
}
});
});



  // Add category Page
/*$('#submitpay').click(function() {
    $("#after_selected" ).reload();
});
*/
  $('body').on('change','#date', function () {
    $('#after_selected').show();
  });
   

  $('body').on('change','#sub_contractor', function () {
    $('#after_selected').show();
    $('#basic').val('');
    $('#cis').val('');
    $('#gross').val('');
    $('#deduction_amount').val('');
    $('#cis').val('');
    $('#gross').val('');
  });


  $('body').on('keyup','#basic', function () {
    var basic = 0;
    var cis = 0;
    var gross = 0;
    var sub_deduct = 0;
    var material = 0;
    var deduction = 0;
    var tax = $('select#sub_contractor').find(':selected').data('zntax'); 

  /*  basic = $('#basic').val()

    cis =  (parseInt(basic) * 20)/100;

    $('#cis').val(cis);
    $('#gross').val(parseInt(basic) - parseInt(cis));
    $('#deduction_amount').val(basic);*/
    
     material = parseInt($('#material').val());
    deduction = parseInt($('#deduction').val());
     basic = parseInt($('#basic').val());
    
    if (parseInt(tax)==0) {
      console.log(tax);
      cis =  0;
      $('#cis').val(cis);
      $('#gross').val(basic);
      $('#deduction_amount').val(basic);
    }
    
    if(parseInt(tax)==20) {
      console.log(tax);
      cis =  (basic * 20)/100;
      $('#cis').val(cis);
      $('#gross').val(basic-cis);
      $('#deduction_amount').val(basic);
    }
    
    if(parseInt(tax) == 30)  {
      console.log('222');
      cis =  (basic * 30)/100;
      $('#cis').val(cis);
      $('#gross').val(basic-cis); 
      $('#deduction_amount').val(basic);
    }

  });

  $('body').on('click','#submitpay',function (e) {
    var date = $('#date').val(); 
    var contractor = $('select#contractor').find(':selected').val(); 
    var sub_contractor = $('select#sub_contractor').find(':selected').val(); 
    var basic = $('#basic').val(); 
    var material = $('#material').val();
    var deduction = $('#deduction').val(); 
    var notes = $('#notes').val(); 
    var deduction_amount = $('#deduction_amount').val();
    var cis = $('#cis').val(); 
    var gross = $('#gross').val();
    var tax = $('select#sub_contractor').find(':selected').data('zntax');

    if (basic && sub_contractor && date ) {
      $.ajax({
        type: "POST",
        url: '/adminDashboard1/function/function.php',
        dataType:"json",
        data: { 
            action: 'add_payout',
            date : date,
            sub_contractor: sub_contractor,
            material: material,
            deduction: deduction,
            notes: notes,
            basic:basic,
            cis: cis,
            gross: gross,
            tax : tax

        },
        cache: false,
        success: function(data){

          if (data.status == true) {
              console.log(data);
              $('#basic').val('');
              $('#material').val('');
              $('#deduction').val('');
              $('#notes').val('');
              $('#deduction_amount').val('');
              $('#cis').val('');
              $('#gross').val('');
          }else{
          }
        }
      });
    }

  });
  

  $('body').on('keyup','#material', function () {
    var material = 0;
    var cis = 0;
    var sub_deduct = 0;
    var deduction = 0;
    var basic = parseInt($('#basic').val());
    var gross = parseInt($('#gross').val());
   var tax = $('select#sub_contractor').find(':selected').data('zntax'); 
    var sub_deduct=parseInt($('#deduction_amount').val()); 
    
    material = parseInt($('#material').val());
        if (material) {  material = parseInt($('#material').val()); }
          else
           material = 0;
           console.log(material);
    deduction = parseInt($('#deduction').val());
    if (deduction) {  deduction = parseInt($('#deduction').val());
     sub_deduct  = (basic - deduction);
     sub_deduct = (sub_deduct - material); }
    else
     { deduction = 0;
   sub_deduct = (basic - material);}

   if (tax==0) {
    cis =  0;
   //  sub_deduct = (basic - material);

    $('#deduction_amount').val(sub_deduct);
    $('#cis').val(cis);
   
      $('#gross').val(gross );
  }


    if(tax==20) {
     //  sub_deduct = (basic - material);

    $('#deduction_amount').val(sub_deduct);
      cis =  (sub_deduct * 20)/100;
      $('#cis').val(cis);
      gross = (sub_deduct - cis);/*
      gross = (gross - sub_deduct);*/
     
      $('#gross').val(gross + material);
    }


    if(tax==30)  {
      //  sub_deduct = (basic - material);

    $('#deduction_amount').val(sub_deduct);
       cis =  (sub_deduct * 30)/100;
       $('#cis').val(cis);
       gross = (sub_deduct - cis);
    //  gross = (gross - sub_deduct);
    
      $('#gross').val(gross + parseInt($('#material').val()));
    }
    
  });






    $('body').on('keyup','#deduction', function () {
    var deduction = 0;
    var cis = 0;
    var sub_deduct = 0;
    var material = 0;
    var gross1 = 0;
    var basic = parseInt($('#basic').val());
    var gross = parseInt($('#gross').val());
    var tax = $('select#sub_contractor').find(':selected').data('zntax'); 
    var sub_deduct=parseInt($('#deduction_amount').val()); 
    deduction = parseInt($('#deduction').val());
    if (deduction) {  deduction = parseInt($('#deduction').val()); }
    else
     deduction = 0;
    // console.log(deduction);
    material = parseInt($('#material').val());
   
    if (material) {  material = parseInt($('#material').val()); 
    sub_deduct  = (basic - material);
     sub_deduct = (sub_deduct - deduction);}
    else
   { material = 0;
   sub_deduct = (basic - deduction);}
    // console.log(material);
     
    

    if (tax==0) {
    cis =  0;

   // sub_deduct = (basic - deduction);
    $('#deduction_amount').val(sub_deduct);
    $('#cis').val(cis);
    gross = (sub_deduct + material);
    $('#gross').val(gross  );
  }
    if(tax==20) {

    $('#deduction_amount').val(sub_deduct);
      cis =  (sub_deduct * 20)/100;
      $('#cis').val(cis);
      gross = (sub_deduct - cis);
      console.log(gross);
      gross1 = (gross - deduction);
      console.log(gross1);
      $('#gross').val(gross1 + material);
    }
    if(tax==30)  {
  //  deduction = (basic - deduction); //10000 - 250 
    $('#deduction_amount').val(sub_deduct); // 9750
       cis =  (sub_deduct * 30)/100; //2925
       $('#cis').val(cis); //2925
       gross = (sub_deduct - cis); //9750 - 2925 = 6825
       gross1 = (gross - deduction); //6825 - 250 = 6575
      $('#gross').val(gross1 + material);
    }
    
  });
   $('body').on('click','#check_report', function () {
    var val = $('#sub_contactor_id_for_reports').val();
    var val_1 = $('#zn_start_date').val();
    var val_2 = $('#zn_end_date').val();

    if (val && val_1 && val_2 ) {
      $.ajax({
        type: "POST",
        url: '/adminDashboard1/function/function.php',
        dataType:"json",
        data: { 
            action: 'sub_contactor_id_for_reports',
            val : val,
            start: val_1,
            end: val_2,
        },
        cache: false,
        success: function(data){

          if (data.status == true) {
             console.log(data);
            $('#mytable tbody').html('');
            $('#mytable tbody').html(data.html);
            $('#mytable').DataTable();
          }else{
          }
        }
      });
    }
      
  });


  $('body').on('click','#check_report', function () {
    var val = $('#contactor_id_for_reports').val();
    var val_1 = $('#zn_start_date').val();
    var val_2 = $('#zn_end_date').val();

    if (val && val_1 && val_2 ) {
      $.ajax({
        type: "POST",
        url: '/adminDashboard1/function/function.php',
        dataType:"json",
        data: { 
            action: 'contactor_id_for_reports',
            val : val,
            start: val_1,
            end: val_2,
        },
        cache: false,
        success: function(data){
          if (data.status == true) {
            $('#mytable tbody').html('');
            $('#mytable tbody').html(data.html);
            $('#mytable').DataTable();
          }else{
          }
        }
      });
    }
      
  });
  


  // End add category Page
})(jQuery); // End of use strict

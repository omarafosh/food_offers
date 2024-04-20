(function($) {
  "use strict"; // Start of use strict
 $(document).ready(function () {
      $('select').select2();
  });

  // Add category Page
  $('body').on('change','.zn_servies_uk_category_1', function () {
    var selected_val = $('#zn_servies_uk_category_1').find(":selected").val();
    $.ajax({
      type: "POST",
      url: '/adminDashboard/function/function.php',
      dataType:"json",
      data: { 
          action: 'select_cat_1',
          val : selected_val
      },
      cache: false,
      success: function(data){
        if (data.status == true) {
          $('#zn_servies_uk_category_2').html('');
          $('#zn_servies_uk_category_2').html(data.html);
          $('.zn_servies_uk_category_2_value').val('');
          $('.zn_cat_level_2').show();
        }else{
          $('.zn_cat_level_2').hide();
          $('.zn_servies_uk_category_1_value').val('');
          $('.zn_servies_uk_category_2_value').val('');
          $('#zn_servies_uk_category_2').html('');
        }
      }
    });
  });

  $('body').on('change','#contractor', function () {
    $('#after_selected').show();
    console.log('hello');
  });
  $('body').on('change','#sub_contractor', function () {
    $('#after_selected').show();
    $('#banked').val('');
    $('#cis').val('');
    $('#gross').val('');
  });
  $('body').on('keyup','#banked', function () {
    var banked = 0;
    var cis = 0;
    var gross = 0;
    banked = parseInt($('#banked').val());
    cis =  (banked*25)/100;
    if (cis) {
      $('#cis').val(cis);
      $('#gross').val(cis+banked);
    }else{
      $('#cis').val('');
      $('#gross').val('');
    }

  });
  $('body').on('keyup','#cis', function () {
    var banked = 0;
    var cis = 0;
    var gross = 0;
    
    cis = parseInt($('#cis').val());
    
    banked =  (cis*4);
    if (banked) {
      $('#banked').val(banked);
      $('#gross').val(cis+banked);
    }else{
      $('#banked').val('');
      $('#gross').val('');
    }
  });
  $('body').on('keyup','#gross', function () {
    var banked = 0;
    var cis = 0;
    var gross = 0;
    
    gross = parseInt($('#gross').val());
    
    cis =  (gross/5);
    if (cis) {
      $('#cis').val(cis);
      $('#banked').val(cis*4);
    }else{
      $('#cis').val('');
      $('#banked').val('');
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

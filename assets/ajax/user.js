/*
*************************************
**= ini untuk daftar siswa jika berhasil
*************************************
*/
$('#daftarSiswa').click(function(){
  var email = $('#EDS').val();
  var password = $('#PDS').val();
  if(email==""){
    alert("tulis nama anda");
    return false;
  }
  var form_data = {
    email : $('#EDS').val(),
    password : $('#PDS').val(),
  };
  $('#SS').modal('hide');
  $.ajax({
    url: "student/f_student/register_student",
    type:'POST',
    data:form_data,
    success: function(msg){
      $('#BB').modal('show');
    }
  });
  return false;
});
/*
*************************************
**= ini untuk daftar guru jika berhasil
*************************************
*/
$('#daftarGuru').click(function(){
  var email = $('#EDT').val();
  var password = $('#PDT').val();
  if(email==""){
    alert("tulis email anda");
    return false;
  }
  var form_data = {
    email : $('#EDT').val(),
    password : $('#PDT').val(),
  };
  $('#ST').modal('hide');
  $.ajax({
    url: "teacher/f_teacher/register_teacher",
    type:'POST',
    data:form_data,
    success: function(msg){
      $('#BB').modal('show');
    }
  });
  return false;
});

/*
*************************************
**= untuk cek login benar atau tidak siswa
*************************************
*/
$('#Lsiswa').click(function(){
  var email = $('#LES').val();
  var password = $('#LPS').val();
  var form_data = {
    email : $('#LES').val(),
    password : $('#LPS').val(),
  };
  $.ajax({
    url: "student/f_student/login",
    type:'POST',
    data:form_data,
    success: function(msg){
      if(msg=="email/password salah"){
        $('.errort').html(msg);
        $('#LS').modal('show');
      }else{
        $('#LS').modal('hide');
         window.location.assign("student/student")
      }
    }
  });
  return false;
});

/*
*************************************
**= untuk cek login benar atau tidak teacher
*************************************
*/
$('#Lteacher').click(function(){
  var email = $('#LEP').val();
  var password = $('#LPP').val();
  var form_data = {
    email : $('#LEP').val(),
    password : $('#LPP').val(),
  };
  $.ajax({
    url: "teacher/f_teacher/login",
    type:'POST',
    data:form_data,
    success: function(msg){
      if(msg=="email/password salah"){
        $('.errorteacher').html(msg);
        $('#LT').modal('show');
      }else{
        $('#LT').modal('hide');
         window.location.assign("teacher/teacher")
      }
    }
  });
  return false;
});

/*
*************************************
**= ajax untuk menu left pada tampilan student
*************************************
*//*
function loadWrapper($url){
    $('#forAjaxView').load($url+' > *',function(){
      $('#forAjaxView').fadeIn('slow');
        $(this).on('click','a',function(e){
            e.preventDefault();
            loadWrapper($(this).attr('href'));
        });
    });
}
$('#menuDash').on('click',function(e){
    e.preventDefault();
    loadWrapper($(this).attr('href'));
    $(".sidebar-menu li:eq(2)").removeClass("active");
    $(".sidebar-menu li:eq(1)").removeClass("active");
    $(".sidebar-menu li:eq(3)").removeClass("active");
    $(".sidebar-menu li:first").addClass("active");
});
$('#menuProfile').on('click',function(e){
    e.preventDefault();
    loadWrapper($(this).attr('href'));
    $(".sidebar-menu li:eq(1)").addClass("active");
    $(".sidebar-menu li:eq(2)").removeClass("active");
    $(".sidebar-menu li:eq(3)").removeClass("active");
    $(".sidebar-menu li:first").removeClass("active");
});
$('#menuMessage').on('click',function(e){
    e.preventDefault();
    loadWrapper($(this).attr('href'));
    $(".sidebar-menu li:eq(2)").addClass("active");
    $(".sidebar-menu li:eq(1)").removeClass("active");
    $(".sidebar-menu li:eq(3)").removeClass("active");
    $(".sidebar-menu li:first").removeClass("active");
});
$('#menuAssign').on('click',function(e){
    e.preventDefault();
    loadWrapper($(this).attr('href'));
    $(".sidebar-menu li:eq(3)").addClass("active");
    $(".sidebar-menu li:eq(1)").removeClass("active");
    $(".sidebar-menu li:eq(2)").removeClass("active");
    $(".sidebar-menu li:eq(4)").removeClass("active");
    $(".sidebar-menu li:first").removeClass("active");
});
/*$('#menuClass').on('click',function(e){
    e.preventDefault();
    // loadWrapper($(this).attr('href'));
    // $(window).load($(this).attr('href'));

    $(".sidebar-menu li:eq(4)").addClass("active");
    $(".sidebar-menu li:eq(1)").removeClass("active");
    $(".sidebar-menu li:eq(2)").removeClass("active");
    $(".sidebar-menu li:eq(3)").removeClass("active");
    $(".sidebar-menu li:first").removeClass("active");
});*/
// $('#menuClass').on('click',function(e){
//     e.preventDefault();
//     //loadWrapper($(this).attr('href'));
//     $(document).load($(this).attr('href'));
//     $(".sidebar-menu li:last").addClass("active");
//     $(".sidebar-menu li:eq(1)").removeClass("active");
//     $(".sidebar-menu li:eq(2)").removeClass("active");
//     $(".sidebar-menu li:first").removeClass("active");
// });


/*
*************************************
**= show tab
*************************************
*/
/*
*************************************
**= ini untuk delete materi
*************************************
*/
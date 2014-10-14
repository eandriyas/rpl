
$('#submit2').click(function(){
  var nama = $('#email2').val();
  var pass = $('#password').val();
  if(nama==""){
    alert("tulis nama anda");
    return false;
  }
  var form_data = {
    nama : $('#email2').val(),
    pass : $('#password').val(),
  };
  $.ajax({
    url: "index.php/test/input_contact ",
    type:'POST',
    data:form_data,
    success: function(msg){
      $('#untuk_isi').html(msg);
      $( "#untuk_isi" ).append( "<p>Test</p>" );
      $('#ST').modal('hide');
      $('#berhasil').modal('show');
  
    }
  });
  return false;
});


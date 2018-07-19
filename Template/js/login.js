$(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: 'login.php',
       data: $(this).serialize(),
       success: function(data) {
          console.log(JSON.stringify(data));
          if (data.message === 'SUCCESS') {
            window.location = '/accommodations/index.php';
          }
          else {
            alert('Invalid Credentials. ' +data.message);
          }
       },
       error: function(data) {
        $('.alert-warning').removeClass('hidden');
       }
   });
 });
});
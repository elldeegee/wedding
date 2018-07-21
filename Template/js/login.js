$(document).ready(function() {
  $('#loginform').submit(function(e) {
    e.preventDefault();
    $.ajax({
       type: "POST",
       url: 'login.php',
       data: $(this).serialize(),
       success: function(data) {
          if (data.code === 200) {
            var url = '/accommodations/index.php';
            var form = $('<form action="' + url + '" method="post">' +
              '<input type="text" name="api_url" value="' + data.message + '" />' +
              '</form>');
            $('body').append(form);
            form.submit();
          }
          else {
            alert('Server error: ' +data.message);
          }
       },
       error: function(data) {
        $('.alert-warning').removeClass('hidden');
       }
   });
 });
});
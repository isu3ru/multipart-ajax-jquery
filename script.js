function sendAjaxRequest(formdata) {
  $.ajax({
    type: "POST",
    enctype: 'multipart/form-data',
    url: "/upload.php",
    data: formdata,
    processData: false,
    contentType: false,
    cache: false,
    timeout: 800000,
    success: function (data) {
      $("#output").html(data);
      $("#send_formdata").prop("disabled", false);
    },
    error: function (e) {
      $("#output").html("<strong>Error</strong><br />" + e.responseText);
      $("#send_formdata").prop("disabled", false);
    }
  });
}

$('#ajax_multipart_form').submit(function () {
  //stop submit the form, we will post it manually.
  event.preventDefault();
  
  // Create an FormData object 
  var formdata = new FormData();
  formdata.append('username', $('#username').val());
  formdata.append('email_address', $('#email_address').val());
  formdata.append('profile_picture', $('#profile_picture')[0].files[0]);
  formdata.append('cover_picture', $('#cover_picture')[0].files[0]);

  // disable submit button to make sure no double requests are triggered
  $("#send_formdata").prop("disabled", true);

  // send request
  sendAjaxRequest(formdata);
});
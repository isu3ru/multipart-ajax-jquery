<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Multipart Form Data AJAX Request</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Multipart Form Data Ajax Submission</h1>
        <p>In this demonstration, the form will submit data from two text input fields and two file input fields via
          AJAX, using jQuery.</p>

        <form id="ajax_multipart_form" action="#" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="username-addon">@</span>
              </div>
              <input type="text" id="username" name="username" class="form-control" placeholder="Your Username"
                aria-label="Your Username" aria-describedby="username-addon">
            </div>
          </div> <!-- end:username -->
          <div class="form-group">
            <label for="email_address">Email Address</label>
            <div class="controls">
              <input type="email" name="email_address" id="email_address" class="form-control"
                placeholder="Your Email Address">
            </div>
          </div> <!-- end:email_address -->
          <div class="form-group">
            <label for="profile_picture">Profile Picture</label>
            <div class="controls">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="profile_picture" name="profile_picture">
                <label class="custom-file-label" for="profile_picture">Choose file</label>
              </div>
            </div>
          </div> <!-- end:profile_picture -->
          <div class="form-group">
            <label for="cover_picture">Cover Picture</label>
            <div class="controls">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="cover_picture" name="cover_picture">
                <label class="custom-file-label" for="cover_picture">Choose file</label>
              </div>
            </div>
          </div> <!-- end:cover_picture -->
          <div class="form-group">
            <button class="btn btn-primary" id="send_formdata" name="send_formdata" type="submit">Create My
              Account</button>
          </div>
        </form>

        <div id="output" class="alert alert-info mt-3">Form response will be displayed here.</div>
      </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.0/js/bootstrap.min.js'></script>
    <script src="./script.js"></script>
</body>

</html>
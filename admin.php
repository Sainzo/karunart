<?php
 session_start();
 if(!isset($_SESSION["username"]))
 {
    header("location:login.php");
 }
?>

<!DOCTYPE html>
<html>

<body>
    <center>
        <h1>Welcome to Admin Page</h1>
        <p>You can select images to upload here.</p>
        <br><br><br>
       <h3>Guide</h3>
        <p>i)Choose a image; make sure about image ratio and should compressed.</p>
        <p>ii)After choosing file, simply click upload button. And your image will be uploaded.</p>
        <p>After uploading you can logout. </p>
        <p><h4>"Alert"</h4>Never share your password and username to anyone.</p>
<div style="background-color:grey; width:500px;">

<br><br>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="" alt="" class="img-fluid py-2">
      </div>
      </div>
      </div>
<!-- #region -->
<button>
<a href="logout.php">Log out</a>
</button>
<br><br>
</div>
</center>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
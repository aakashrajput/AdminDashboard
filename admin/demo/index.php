<?php
require_once('connect.php');
if (isset($_FILES) & !empty($_FILES)) {
$name = $_FILES['file']['name'];
$size = $_FILES['file']['size'];
$type = $_FILES['file']['type'];
$tmp_name = $_FILES['file']['tmp_name'];
}
$location = "uploads/";
$maxsize= 100000;
if (isset($name) &!empty($name)){
    if($type == "image/jpeg" && $size <= $maxsize) {
      if(move_uploaded_file($tmp_name, $location.$name)) {
        echo "upload suc";
        echo $sql= "INSERT INTO `upload` (name, size, type, location) VALUES ('$name','$size','$type','$location$name')";
        $res = mysqli_query($connection, $sql);
        if($res) {
          echo "Uploaded successfully";

        }
      }else {
        echo "Failed to Upload";
      }
    }else{
      echo "File Should be jpeg image only & 100 kb in size";
    }

}
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<html>
<body>
<form class="form-signin" method="POST" enctype="multipart/form-data">
        <h2 class="form-signin-heading">Upload File</h2>
	  <div class="form-group">
	    <label for="InputFile">File input</label>
	    <input type="file" name="file" id="InputFile">
	    <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      </form>
    </body>
    </html>

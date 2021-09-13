<!DOCTYPE html>
<html>

<head>
  <title>Upload Image System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="jumbotron text-center">
  <h1>WELCOME</h1>
  <p>Upload Image System</p>
</div>


<!-- Upload file's form -->
<div class="container">
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <br><br><input type="file" name="fileToUpload" id="fileToUpload"> <br><!-- id to call function from upload.php -->
  <input type="submit" value="Upload Image" name="submit"><br>
</form>
</div>

</body>
</html>
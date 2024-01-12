<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration form</h1>
    <form method="post" action="<?php echo site_url('insert') ?>" enctype="multipart/form-data">
        <label for="">Username</label>
        <input type="text" name="username"><br><br>
        <label for="">User email</label>
        <input type="email" name="email"><br><br>
        <label for="">User password</label>
        <input type="text" name="password"><br><br>
        <label for="">User Image</label>
        <input type="file" name="user_image" id="img-upload" onchange="loadFile(event)" accept="image/*"><br><br>
        <img class="mb-3" id="output-img" alt="Preview Image" style="width: 100px;" src="https://via.placeholder.com/300" /><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
 var loadFile = function(event) {
      var image = document.getElementById("output-img");
      image.src = URL.createObjectURL(event.target.files[0]);
   };
</script>
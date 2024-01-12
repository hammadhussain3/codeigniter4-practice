<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <div class="container mt-3">
        <h3>Registration form</h3>
        <form method="post" action="<?php echo site_url('insert') ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="username"><br><br>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Password</label>
                <input type="text" class="form-control" name="password"><br><br>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Profile</label>
                <input type="file" class="form-control" name="user_image" id="img-upload" onchange="loadFile(event)" accept="image/*"><br><br>
                <img class="mb-3" id="output-img" alt="Preview Image" style="width: 100px;" src="https://via.placeholder.com/300" /><br><br>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Submit</button>
        </form>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
 var loadFile = function(event) {
      var image = document.getElementById("output-img");
      image.src = URL.createObjectURL(event.target.files[0]);
   };
</script>
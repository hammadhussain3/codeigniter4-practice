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
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <h3>Update form</h3>
    <form method="post" action="<?php echo site_url('update') ?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $user['user_id']?>">
    <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $user['user_name']?>"><br><br>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $user['user_email']?>"><br><br>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" value="<?php echo $user['user_password']?>"><br><br>
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Profile</label>
                <input type="file" name="user_image" id="img-upload" onchange="loadFile(event)" accept="image/*"><br><br>
        <?php if($user['user_image']){?>
            <img class="mb-3" id="output-img" alt="Preview Image" style="width: 100px;" src="<?= base_url('public/uploads/' . $user['user_image']) ?>" /><br><br>
        <?php } else{?>
            <img class="mb-3" id="output-img" alt="Preview Image" style="width: 100px;" src="https://via.placeholder.com/300" /><br><br>
        <?php } ?>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="float: right;">Update</button>
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
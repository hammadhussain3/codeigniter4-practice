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
    <table class="table" border="1px" cellpadding="2px" cellspacing="2px">
        <thead>
            <tr>
                <th>UserID</th>
                <th>UserName</th>
                <th>UserEmail</th>
                <th>UserPassword</th>
                <th>UserImage</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php foreach($users as $user){ ?>
            <tr>
                <td><?php echo $user['user_id'] ?></td>
                <td><?php echo $user['user_name'] ?></td>
                <td><?php echo $user['user_email'] ?></td>
                <td><?php echo $user['user_password'] ?></td>
                <td>
                <?php if($user['user_image']){?>
                    <img class="mb-3" id="output-img" alt="Preview Image" style="width: 50px;" src="<?= base_url('public/uploads/' . $user['user_image']) ?>" /><br><br>
                <?php } else{?>
                    <img class="mb-3" id="output-img" alt="Preview Image" style="width: 50px;" src="https://via.placeholder.com/300" /><br><br>
                <?php } ?>
                </td>
                <td><a href="<?php echo base_url(); ?>edit/<?php echo $user['user_id'] ?>">Edit</a></td>
                <td><a href="<?php echo base_url(); ?>delete/<?php echo $user['user_id'] ?>">Delete</a></td>
            </tr>
      <?php  } ?>
    </table>
    </div>
</body>
</html>
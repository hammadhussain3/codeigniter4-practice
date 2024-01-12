<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px" cellpadding="2px" cellspacing="2px">
        <tr>
            <th>UserID</th>
            <th>UserName</th>
            <th>UserEmail</th>
            <th>UserPassword</th>
            <th>UserImage</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
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
</body>
</html>
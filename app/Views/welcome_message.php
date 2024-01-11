<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration form</h1>
    <form method="post" action="<?php echo site_url('insert') ?>">
        <label for="">Username</label>
        <input type="text" name="username"><br><br>
        <label for="">User email</label>
        <input type="email" name="email"><br><br>
        <label for="">User password</label>
        <input type="text" name="password"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
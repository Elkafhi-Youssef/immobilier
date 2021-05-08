<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER LOGIN</title>
</head>
<body>
    <hr>
    <form method="POST" action="<?= URLROOT.DS.'user/login' ?>">
        <input name="email" type="text" placeholder="Enter email..." required>
        <br>
        <button type="submit" name="submit">Submit E-mial</button>
    </form>
    <hr>
    <div class="err">
        <?php echo $data['err']; ?>
    </div>
</body>
</html>
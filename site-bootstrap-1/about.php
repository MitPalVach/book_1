<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Contacts</title>
</head>
<body>
<?php
require_once "blocks/header.php";
?>

<div class="container mt-5">
    <h3 class='mb-5'>Contacts</h3>
    <form class='contacts-form' action="check.php" method='post'>
        <input class='form-control' type="email" name="email" placeholder='Email'>
        <textarea class='form-control' name="message" placeholder='Message'></textarea>
        <button class='btn btn-success' type='submit' name='send'>Submit</button>
    </form>
</div>

<?php
require_once "blocks/footer.php";
?>
</body>
</html>



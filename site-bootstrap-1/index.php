<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP web site</title>
</head>
<body>

<?php
require_once "blocks/header.php";
?>

<div class="container mt-5">
    <h3 class="mb-5">Наши статьи</h3>
    <div class="d-flex flex-wrap">
        <?php
        for ($i = 0;
             $i < 5;
             $i++):
            ?>
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    <h4 class="my-0 fw-normal">Текст</h4>
                </div>
                <div class="card-body">
                    <img class='image_thumbnail' src="img/<?php echo($i + 1) ?>.jpg" alt="">
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php
require_once "blocks/footer.php";
?>

</body>
</html>



<?php
require 'method.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>TP ANIMAUX PHP</title>
</head>



<body class="container my-4">
    <section class="col-5">
        <ul class="list-group my-3">
            <?php
            foreach ($chien as $key => $value) { ?>
                <li class="list-group-item">
                    <p>
                        <?= $value->nom ?>
                        <?= $value->type ?>
                    </p>
                </li>
            <?php } ?>
        </ul>

        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"> nom
                </label>
                <div class="col-sm-10">
                    <input type="text" name="nom" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"> race
                </label>
                <div class="col-sm-10">
                    <input type="text" name="race" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-2">ajouter un chien</button>
        </form>
    </section>
</body>



<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>
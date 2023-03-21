<?php

include __DIR__ . './functions.php';

$password = '';

$error = null;

if (isset($_GET['length']) && is_numeric($_GET['length'])) {

    $passwordLength = intval($_GET['length']);

        $password = generaPassword($passwordLength);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Strong Password Generator</title>
</head>
<body>

    <div class="container">
        <h1 class="my-5">Generatore di Password "Abbastanza" sicure</h1>

        <section class="row my-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                       Password
                    </div>
                    <div class="card-body">
                        <form method="GET" action="index.php" class="row">

                            <div class="col-9 mb-3">
                            <input type="number" name="length" placeholder="Password" min="10" max="30" value="<?php echo (isset($_GET['length']) ? $_GET['length'] : 10); ?>" required>
                            </div>
                            <div class="col-3 mb-3">
                                <button class="btn btn-primary w-100">Genera Password</button>
                            </div>
                        </form>

                        <div>
                <?php
                      echo 'La tua password "abbastanza" sicura generata casualmente è: ' .  $password; 

                ?>
                     </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>



</body>
</html>
<?php
//    Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

//var_dump($_GET['password']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live coding</title>

    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }
    </style>
</head>

<body>
    <?php
    if (empty($_GET['password'])) {
        echo 'inserisci una password';
    } else {
        $password = $_GET['password'];
        if ($password === 'Boolean') {
            $class = 'green';
        } else {
            $class = 'red';
        }
    }
    ?>

    <?php if (isset($_GET['password']) && !empty($_GET['password'])) { ?>
        <p class="<?php echo $class; ?>">La password è: <?php echo $password; ?></p>
    <?php } ?>

    <form action="" method="GET">
        <input type="text" name="password" id="password">
        <button type="submit">Send</button>
    </form>
</body>

</html>
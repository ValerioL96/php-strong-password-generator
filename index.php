<?php

session_start();






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>
<body>
    <header>
        <h1>
            Profilo Utente
        </h1>
    </header>
    <main>
        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]) {?>
        <h2>
            Benvent* <?php echo $_SESSION['username']?>
        </h2>
        <?php } else { ?>
        <h2>
            Accesso Negato!
        </h2>
        <?php }?>
    </main>
</body>
</html>
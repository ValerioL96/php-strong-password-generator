<?php

//Consegna

//Dato un array di utenti, ovvero array associativi con username e password in chiaro
//Creiamo una sicurissima e semplicissima pagina di login in cui l'utente puo' autenticarsi via form con:
//- un username
//- una password

//La pagina di login (login.php) ci redireziona, una volta effettuato e SOLO se avvenuto correttamente,
//alla pagina principale della nostra applicazione (index.php), in cui visualizziamo via sessione il nome dell'utente loggato.
//Creiamo poi una pagina di logout (logout.php) che rimuova le informazioni della sessione dalla sessione attuale e redirezioni
//all pagina di login (login.php).

//Bonus 1:
//Impedire la visualizzazione dei contenuti di index.php (anche semplici di prova) fino a quanto l'utente non sia loggato.

//Bonus 2:
//Prevedere l'uso di qualsiasi controllo attraverso una funzione inserita in un file separato in 'src/functions.php/') (modificato) 


$users = [

    [
        'username'=>'ValerioL96',
        'password'=>'valerioool',
    ],
    [
        'username'=>'Gigget88',
        'password'=>'gigg',
    ],
    [
        'username'=>'paSqualo',
        'password'=>'squalone',
    ],
    [
        'username'=>'Rock90',
        'password'=>'therock',
    ],
    [
        'username'=>'DenisF',
        'password'=>'denisf',
    ],
    [
        'username'=>'suSsann',
        'password'=>'juan',
    ],
];

session_start();

$attemptedLogin= false;

if (isset($_SESSION["logged"]) && $_SESSION["logged"]=== true) {
    Header("Location: ./index.php");
}

if(isset($_POST['username']) && isset($_POST['password'])){
    foreach ($users as $user) {
        if ($user['username']===$_POST['username']) {
            if ($user['password']===$_POST['password']) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION["logged"] = true;
                Header("Location: ./index.php");
                break;
            }
        }
    }

    if (!isset($_SESSION["logged"])) {
        $attemptedLogin= true;
    }
    
}

?>




<form action="./login.php" method="POST">
    <h1>Login:</h1>
    <div>
        <label for="username">
            Username:
        </label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label for="password">
            Password:
        </label>
        <input type="password" name="password" id="password">
    </div>
    <button type="submit">
        Login
    </button>

    <?php if ($attemptedLogin) { ?>
        <pre>
            Dati inseriti non corretti!
        </pre>
        
    <?php }?>
</form>
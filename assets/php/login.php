<?php
require_once __DIR__ . "/sql.php";
$db = new Database('reco_indé');
$error = null;

foreach ($db->query('SELECT `ID`,`Mail`,`PassWord` FROM members') as $member) {
    if (!empty($_POST['mail'] && !empty($_POST['password']))) {
        if ($_POST['mail'] === $member->Mail && $_POST['password'] === $member->PassWord) {
            session_start();
            $_SESSION['connect'] = 1;
            $_SESSION['Id'] = $member->ID;
            header('Location: dashboard.php');
        }else {
            $error = 'Identifiants incorrects';
        }
    }
}

require_once 'auth.php';
if (is_connect()) {
    header('Location: dashboard.php');
    exit();
}
require_once 'header.php';


?>
<?php
    if ($error) {
        print_r($error);
    }
?>

    <h1>Connexion</h1>
<form action="" method="POST">

    <label><b>E-mail</b></label>
    <input type="text" placeholder="Entrer le mail" name="mail" required>

    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <input type="submit" id='submit' value='LOGIN'>
</form>


<?php

require_once 'footer.php';
?>
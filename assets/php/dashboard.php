<?php
require_once 'auth.php';
require_once __DIR__ . "/sql.php";
user_connected();
require_once 'header.php';
$db = new Database('reco_indé');
$error = null;
$id = $_SESSION['Id'];

error_reporting(E_ALL);
ini_set("display_errors", 1);

?>
<div id="dashboard">
    <div id="sidebar">
        <ul>
            <li><a href="http://">Profil</a></li>
            <li><a href="http://">Edit</a></li>
            <li><a href="http://">Mail</a></li>
        </ul>
    </div>
    <main>
        <?php foreach ($db->query('SELECT * FROM members where ID') as $member) : ?>
            <?php if ($id === $member->ID) : ?>
                <div class="welcome">
                   <h1>Bienvenue <?= $member->LastName; ?> <?= $member->FirstName; ?> !</h1> 
                </div>
                <div class="comp">
                    <h2>Récapitulatif de tes expertises :</h2>
                    <ul class="content">
                        <li><?= $member->Comp1; ?></li>
                        <li><?= $member->Comp2; ?></li>
                        <li><?= $member->Comp3; ?></li>
                    </ul>
                </div>
                <div class="description">
                    <h2>Description affiché sur ta carte :</h2>
                    <div class="content"><?= $member->Descriptions; ?></div>
                </div>
                <div class="contact">
                    <h2>Mail de contact :</h2>
                    <div class="content"><?= $member->Mail; ?></div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <div id="edit">
            <a href="#">Editer le profil</a>
        </div>
    </main>
</div>

<?php require_once 'footer.php'; ?>
<?php
include __DIR__ . "/assets/php/debug.php";
include __DIR__ . "/assets/php/sql.php";
require __DIR__ . "/assets/php/auth.php";

$db = new Database('reco_indé');

include __DIR__ . "/assets/php/header.php";

?>

<nav id="breadcrumb">
    <ul>
        <li><a href="#">Graphiste</a></li>
        <li><a href="#">Copywritter</a></li>
        <li><a href="#">Développeur</a></li>
    </ul>
</nav>

<section id="members">

    <?php foreach ($db->query('SELECT * FROM members') as $member) : ?>
        <div class="card">
            <div class="card-content">
                <div class="card-bg"></div>
                <div class="round-bar">
                    <h3><?= $member->LastName . " " . $member->FirstName; ?></h3>
                </div>
                <div class="media">
                    <img src="<?= "./assets/" . $member->img; ?>" alt="Placeholder image">
                </div>
                <div class="comp round-bar">
                    <div>
                       <?= $member->Comp1;?>
                    </div>
                </div>
                <div class="desc">
                    <p><?= $member->Descriptions; ?></p>
                </div>
                <div class="mail">
                    <a href="mailto:<?= $member->Mail; ?>">Contact</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</section>
<?php

include __DIR__ . "/assets/php/footer.php";

//mysqli_close($conn);

?>
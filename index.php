<?php
include __DIR__ . "/assets/php/debug.php";
include __DIR__ . "/assets/php/sql.php";

$db = new Database('reco_indé');

include __DIR__ . "/assets/php/header.php";
?>
<section id="hero">
    <div>
        <h1>Tu cherche un expert digital ?</h1>
        <h2>Retrouves ici la liste des techs de la Tribu Indé !!!</h2>
    </div>
</section>

<nav id="breadcrumb">
    <ul>
        <li><a href="#">Graphiste</a></li>
        <li><a href="#">Copyrighter</a></li>
        <li><a href="#">Développeur</a></li>
    </ul>
</nav>

<section id="members">

    <?php foreach ($db->query('SELECT * FROM members') as $member) : ?>
        <div class="card">
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image">
                            <img src="<?= "./assets/" . $member->img; ?>" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <h3><?= $member->FirstName . " " . $member->LastName; ?></h3>
                        <a href="mailto:<?= $member->Mail; ?>">Contact me !</a>
                    </div>
                </div>
                <div class="content">
                    <?= $member->Descriptions; ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</section>

<?php

include __DIR__ . "/assets/php/footer.php";

//mysqli_close($conn);

?>
<?php
require_once ("../src/MysqlConnection.php");
$mysqlConnection = new MysqlConnection('root', 'root', 'cv');


$users = $mysqlConnection->select('SELECT * FROM competences');
?>
<h1 class="titleSchool">Mon Compétences</h1>
<div>

    <?php foreach ($users as $user){?>

        <div class="TitleContent">
            <h4 ><?= $user["Name"]; ?> :</h4>
        </div>


        <div class="contentSchool">
            <p><?= $user['Content']?></p>
        </div>

    <?php } ?>
</div>



<?php
$users = $mysqlConnection->select('SELECT * FROM diplomas');
?>

<h1 class="titleSchool">Mon diplomes</h1>
<div>

    <?php foreach ($users as $user){?>

        <div class="TitleContent">
            <h4 ><?= $user["Name"]; ?> :</h4>
        </div>


        <div class="contentSchool">
            <p>Mention <?= $user['Content']?> obtenue en : <?= $user['Year']?>.</p>
            <div class="PhotoContent">
<!--               --><?//=$user['Img']?>
            </div>
        </div>

    <?php } ?>
</div>
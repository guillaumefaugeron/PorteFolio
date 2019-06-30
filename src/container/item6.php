<!--Using Php Foreach Loop With MySQL Databse-->
<?php

$dsn = 'mysql:dbname=cv;host=127.0.0.1';
$username = 'root';
$password = 'root';

try{
    // connect to mysql
    $connection = new PDO($dsn,$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $ex) {
    echo 'Not Connected '.$ex->getMessage();
}
// mysql select query
$stmt = $connection->prepare('SELECT * FROM school');
$stmt->execute();
$users = $stmt->fetchAll();
?>

<h1 class="titleSchool">Mon parcours Scolaire</h1>
    <div>

        <?php foreach ($users as $user){?>

        <div class="TitleContent">
            <h4 ><?= $user["Year"]; ?> :</h4>
        </div>


        <div class="contentSchool">
            <p><?= $user['Content']?></p>

        </div>
            <div class="PhotoContent">
                <?= $user['Img']?>
            </div>




        <?php } ?>
    </div>
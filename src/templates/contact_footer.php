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
$stmt = $connection->prepare('SELECT * FROM contact');
$stmt->execute();
$users = $stmt->fetchAll();
?>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 80%;
        position: center;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</head>
<body>



<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">email</th>
        <th scope="col">titre</th>
        <th scope="col">Contenue</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user){?>

        <tr>
        <th scope="row"><?= $user['E-mail']?></th>
        <td><?= $user['TitleMessage']?></td>
        <td><?= $user['ContentMessage']?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

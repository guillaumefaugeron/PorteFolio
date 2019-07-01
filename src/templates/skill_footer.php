<?php
require_once (__DIR__."/../../src/MysqlConnection.php");
$mysqlConnection = new MysqlConnection('root', 'root', 'cv');


$users = $mysqlConnection->select('SELECT * FROM competences');

if(count($_POST)===4) {
    $data = array(
            'ID'=>$_POST['ID'],
            'Name'=>$_POST['Name'],
            'Content'=>$_POST['Content'],
            'Level'=>$_POST['Level'],

);

    $mysqlConnection->insert("competences",$data);
    header("Refresh:0");


}

if(isset($_GET['delete_id']) && $_GET['delete_id']!= null){
    $mysqlConnection->delete("competences");
    unset($_GET['delete_id']);
    header('location: http://'.$_SERVER['HTTP_HOST'].'/admin//skills/skill_index.php');
}
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
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Content</th>
        <th scope="col">Level</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $user){?>
    <tr>
        <th scope="row"><?= $user['ID']?></th>
        <td><?= $user["Name"]; ?></td>
        <td><?= $user['Content']?></td>
        <td><?= $user['Level']?></td>
        <td><a href="http://<?=$_SERVER['HTTP_HOST']?>/admin//skills/skill_index.php?delete_id=<?=$user['ID']?>" >Supprimer</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<form method="post">
    <div class="form-group">
        <label for="IDInsert">ID</label>
        <input name="ID" class="form-control" id="IDInsert" aria-describedby="ID" placeholder="ID skill">
    </div>

    <div class="form-group">
        <label for="NameInsert">Name</label>
        <input name="Name"  class="form-control" id="NameInsert" aria-describedby="Name"  placeholder="Name skill">
    </div>

    <div class="form-group">
        <label for="ContenuInsert">Contenu</label>
        <input name="Content"  class="form-control" id="ContenuInsert" aria-describedby="Contenu"  placeholder="Contenu skill">
    </div>

    <div class="form-group">
        <label for="NiveauInsert">Niveau</label>
        <input name="Level"  class="form-control" id="NiveauInsert" aria-describedby="Niveau"  placeholder="Niveau skill">
    </div>



    <button name=""  type="submit" class="btn btn-primary">Ajouter la ligne</button>
</form>

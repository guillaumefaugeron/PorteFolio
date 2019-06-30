<?php
require_once(__DIR__."/../src/Form.php");
require_once(__DIR__."/../src/Mailing/Mail.php");
if (count($_POST) === 3)
    {
        $mail = new Form($_POST["name"],$_POST["email"],$_POST["message"]);
        $nameMail = $mail->name();
        $emailMail = $mail->email();
        $messageMail = $mail->message();
        $sendmail = new Mail(465,"ssl");
        $sendmail ->sendMail($messageMail,$emailMail,$nameMail,"guillaume.faugeron.pro@gmail.com");
        unset($_POST);
        header('location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
        exit();
    };

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="index.js"></script>



</head>






<body>
<div class="container">
    <?php require_once("../src/nav.php")?>


    <div class="item1"><?php require_once("../src/container/item1.php")?></div>


    <?php require_once("../src/container/contentItem2345/contentItem2345.php"); ?>
    <?php foreach($item2345Content as $item) { ?>
        <div class=<?= $item["nom"];?> >
            <div  class="button">
                <p class="buttonText"> <?=$item['button']; ?> </p>
            </div>
            <div>
                <div class="descriptionTopButton"> <?=$item['contentDescription']; ?>  </div>
            </div>
        </div>
    <?php } ?>
    <div id="item6" class="item6"><?php require_once("../src/container/item6.php")?></div>
    <div id="item7" class="item7"><?php require_once("../src/container/item7.php")?></div>
    <div id="item8" class="item8"><?php require_once("../src/container/item8.php")?></div>
    <div id="item9" class="item9"><?php require_once("../src/container/contact.php")?></div>

</div>

</body>



</html>






<form class="form" action="http://<?=$_SERVER['HTTP_HOST']?>/index.php" method="post">

    <h1> Me contacter</h1>
    <div class="NameEmailcontact">
        <!-- Name input-->
        <div class="form-group">
            <h3 class="titleFormName"><label class="" for="name">Votre Nom</label></h3>
            <div class="">
                <input class="input" id="name" name="name" type="text" placeholder="Votre nom">
            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <h3><label class="" for="email">Votre E-mail</label></h3>
            <div class="">
                <input class="input" id="email" name="email" type="text" placeholder="Entrer votre email">
            </div>
        </div>
    </div>


    <!-- Message body -->
    <div class="MessageContact">
        <h3><label class="" for="message">Votre message</label></h3>
        <div class="">
            <textarea class="input" id="message" name="message" placeholder="Entrer votre message..." rows="10"
                      cols="60"></textarea>
        </div>


    </div>

    <!-- Form actions -->
    <div >
        <div class="buttonMaildiv" >
            <button class="buttonMail" type="submit">Envoyer</button>
        </div>
    </div>

</form>

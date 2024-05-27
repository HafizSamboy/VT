<?php
    session_start();

    if (isset($_POST['send'])) {
        //extraction des variables
        extract($_POST);

        if (isset($Nom) && $Nom != "" &&
            isset($tel) && $tel != "" &&
            isset($email) && $email != "" &&
            isset($Objet) && $Objet != "" &&
            isset($Message) && $Message != ""){

                //envoi de l'email
                //adresse du destinataire
                    $to = "sambohafiz7@gmail.com";
                    //objet du mail
                    $subject = "Vous avez reçu un message de : " . $email;

                    $message = "
                        <p>Vous avez reçu un message de <strong>". $email ."</strong></p>
                        <p><strong>Nom : </strong>". $Nom ."</p>
                        <p><strong>Téléphone :</strong>". $tel ."</p>
                        <p><strong>Message :</strong>". $Message ."</p>
                    ";

                    // Always set content-type when sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    // More headers
                    $headers .= 'From: <'. $email .'>' . "\r\n";

                    //envoi du mail
                     $send = mail($to,$subject,$message,$headers);

                    //Vérification de l'envoi
                    if($send) {
                        $_SESSION['succes_message'] = "Message envoyé";
                    
                    } else {
                        $info = "Message non envoyé";
                        
                    }


                }else {
            $info = "Veuillez remplir tous les champs s'il vous plait !";
            
        }
    }
?>


<!-- section Contacts -->

<section id="contact">
        <h1 class="section_title">CONTACTS</h1>
        <div class="localisation_contact_div">
            <div class="localisation">
                <h3>Notre Adresse</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914410252736!2d2.2919063757422085!3d48.85837360070861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sbj!4v1708694592773!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form_contact">
                <h3>Envoyer un message</h3>
                <?php
                    //Message d'erreur
                    if (isset($info)){ ?>
                        <p class="request_message" style="color:red"> <?=$info?></p>
                    <?php
                    }
                ?>

                <?php
                    //Message de succes
                    if (isset($_SESSION['succes_message'])){ ?>
                        <p class="request_message" style="color:green"> <?=$_SESSION['succes_message']?></p>
                    <?php
                    }
                ?>
                
                <form action="" method="POST">
                    <input type="text" name="Nom" placeholder="Nom" required>
                    <input type="text" name="tel" placeholder="Téléphone" required>
                    <input type="email" name="email" placeholder="Adresse Mail" required>
                    <input type="text" name="Objet" placeholder="Objet" required>
                    <textarea name="Message" id="" cols="30" rows="10" placeholder="Message" required></textarea>
                    <button name="send">Envoyer</button>
                </form>
            </div>
        </div>
    </section>
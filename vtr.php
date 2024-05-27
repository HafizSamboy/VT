<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Luxe</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/6c0da3d318.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        include("header.php");
    ?>
    <?php
        include("accueil.php");
    ?>
    <?php
        include("vehicules.php");
    ?>
    <?php
        include("services.php");
    ?>
    <?php
        include("contacts.php");
    ?>
    <?php
        include("footer.php")
    ?>

    <script>
        // menu responsive pour le code java script

        var menu_toggle = document.querySelector('.menu_toggle');
        var menu= document.querySelector('.menu');
        var menu_toggle_span = document.querySelector('.menu_toggle span');

        menu_toggle.onclick = function() {
            menu_toggle.classList.toggle('active');
            menu_toggle_span.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
    </script>


</body>
</html>
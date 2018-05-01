<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <h1>Kiitoksia tilauksesta</h1>
        <p style="font-weight:bold;">Olet tehnyt seuraavanlaisen tilauksen</p>
        
        <?php

            echo $_POST['pizza'] . "<br/>";
            echo $_POST['size'] . "<br/>";
            echo $_POST['delivery'] . "<br/>";
            echo $_POST['comment'];

        ?>
        
    </body>
</html>
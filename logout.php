<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" description="logged out">
        <title>Logout</title>
    </head>
    <body>
        <?php
            if(isseet["logout"])
            {
                header("location:home.html");
            }
        ?>
    </body>
</html>
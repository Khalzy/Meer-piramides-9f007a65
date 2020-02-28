    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>

    <body>


        <table cellspacing="0px" cellpadding="0px">


            <?php


            for ($i = 0; $i <= 8; $i++) {
                echo "<tr>";
                echo "<td>";
                for ($j = 1; $j <= $i; $j++) {
                    echo "<td height=30px width=30px bgcolor= #00000></td>";
                }
            }
            ?>



    </body>

    </html>
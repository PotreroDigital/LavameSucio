<?php

$nombres= ["Marcos", "Gabriel", "Ricardo", "Soledad", "Laura"];

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <ul>
      <?php foreach ($nombres as $value) { ?>
        <li>
        <?php echo "$value";} ?>
        </li>
        <br>
        <a href="index.html"> Regresar </a>
    </ul>
   </body>
 </html>

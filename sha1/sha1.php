<!DOCTYPE HTML>
<html>
    <head>
       <title>Criptografia - Sha1</title>
          <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>

    <body>
       <form>
         <h1>Criptografia Sha1</h1>
            <?php
             $hash = $_POST['variavel'];
             
             echo "<h4>". sha1($hash);
            ?>
           <br><br>
         <a href="../index.php">Voltar</a>
       </form>
    </body>
</html>
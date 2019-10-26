<!DOCTYPE HTML>
<html>
    <head>
       <title>Criptografia - Encode64</title>
          <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>

    <body>
       <form>
          <h1>Criptografia Encode64</h1>
            <?php
              $hash = $_POST ['variavel'];  
              
              echo "<h4>". base64_encode($hash);        
            ?>
          <br><br>
         <a href="../index.php">Voltar</a>
       </form>
    </body>
</html>


  
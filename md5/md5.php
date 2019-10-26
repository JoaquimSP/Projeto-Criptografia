<!DOCTYPE HTML>
<html>
    <head>
       <title>Criptografia - Md5</title>
          <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>

    <body>
       <form>
           <h1>Criptografia Md5</h1>
         <?php
            $hash = $_POST ['variavel'];       
            
            echo "<h4>". md5($hash); 
         ?>
          <br><br>
         <a href="../index.php">Voltar</a>
       </form>
    </body>
</html>



  
<?php 

session_start();

?>
<!DOCTYPE html>
<html>
    
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="confirma.css">
        
        <title>Esse é você?</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
  
        <div class="container-fluid"> 
        <div class="col-md-12">
        <div class="configdiv">
            
        <style>
            a :hover {
                background-color: #2055f4 ;
        </style>
         
        <h1><a href="index.html" >AprendendoComAzul</a></h1>
            
            <div class="row">
                <div class="col-md-6 col-md-offset-3 caixa">
                    <h2>ESSE(A) É VOCÊ?</h2>       

                    
               <?php //                                     Em SRC eu gostaria de inserir a imagem que acaba de ser enviada pelo usuário
                    
                   echo "<img alt='teste' class='img-circle' src='" . $_SESSION['foto'] . "'/>"; 
              ?>
              
                            </div>
            </div>
            
           
                <div class="col-md-offset-3 col-md-2 botao">
                    <a href="bem_vindo.php"><img class="confirma img-responsive" src="img/botao confirma.png"/></a>   
                </div>
                
                <div class="col-md-offset-2 col-md-2 botao col-md-offset-3">
                    <a href="loginUsuario.html"><img class="cancela img-responsive" src="img/botao de não.png"/></a>    
                </div>
            </div>
                
            
        </div>
        </div>
        </div>
    </body>
</html>
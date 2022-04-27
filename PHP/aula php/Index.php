<!DOCTYPE hmtl>
<html lang= "pt-br">
   <head>
      <meta charset="utf-8">   
      <title> Meu primeiro dite em PHP! Woohooo!</title>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
	    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	  
	  
	   <script>
          $( function() {
          $( "#accordion" ).accordion();
           } );
        </script>  
   </head>


   <body>
      <?php
         for ( $i = 0  ; $i < 10 ;  $i++ ) {
               print("Linhas número " . $i . " <br/>");
          }        
       ?>

<div id="accordion">
  <h3>Primeiro Painel</h3>
  <div>conteudo primeiro painel</div>
  <h3>Segundo Painel</h3>
  <div>Conteudo segundo painel</div>
</div>

   </body>
</hmtl>
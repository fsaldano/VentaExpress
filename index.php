<?php include('lib/constante.php')?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Venta Express</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="contenedor">
                    <div id="titulo"></div>
                    <div id="menu"><?php include('menu.php');?></div>
                    <div id="contenido"></div>
        </div>
        <?php
        
        ?>
    </body>
    
    <script>
        $("#menusolucitudes").click(function(){
            
            if ($("[id*=subingresos]").css("display")!="none"){
                $("[id*=subingresos]").css("display","none");
            }
            else{
                $("[id*=subingresos]").show();
                $("[id*=subingresos]").css("display","block");
            }
         });
    </script>
</html>


<?php

include_once("../includes/menu.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cad_cli.css">
    <title>Document</title>
</head>
<body>
    
    <section class="main">         
    
        <form action="">

                
                <div class="area-input"> 
                <h1 id="txt-titulo">Cadastrar Cliente</h1>

                <div class="input-group">
                    <i id="icon-cad" class="bi bi-person-fill"></i>
                    <input required="" type="text" name="text" autocomplete="off" class="input" placeholder="Nome">
                </div>

                <div class="input-group">
                    <i id="icon-cad" class="bi bi-telephone-fill"></i>
                    <input required="" type="text" name="text" autocomplete="off" class="input"  placeholder="Telefone">
                </div>

                <div class="input-group">
                    <i id="icon-cad" class="bi bi-car-front-fill"></i>
                    <input required="" type="text" name="text" autocomplete="off" class="input"  placeholder="Carro">
                </div>

                <div class="input-group">
                    <i id="icon-cad" class="bi bi-tag-fill"></i>
                    <input required="" type="text" name="text" autocomplete="off" class="input"  placeholder="Placa">
                </div>

                <div class="area-btn">

                    <button id="cad-btn" type="button" class="btn btn-primary">Cadastrar</button>
                    <button id="cancelar-btn" type="button" class="btn btn-danger">Cancelar</button>

                </div>
            </div>

        </form>
        
            
    </section>
    
    

</body>
</html>
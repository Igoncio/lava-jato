<?php

include_once("../includes/menu.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/home.css">
    <title>Document</title>
</head>
<body>
    
    <section class="main">         
        <div class="card">   
            <h1 id="txt-titulo">Serviços</h1>
            <select name="" id="">
                <option value="#">Filtrar</option>
                <option value="#">Finalizados</option>
            </select>
            
            <div class="card-content">
     

                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
                <div class="area-sevico">
                    <div class="servico-content">
                        <p id="txt-servico">Celta NRQ0G80</p>
                        <button id="btn-finalizar">finalizar</button>
                    </div>
                </div>
            </div>

                <button id="openModalBtn">Criar Serviço</button>
            </div>
        </section>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Criação de Serviço</h2>
                <form method="POST">
                    <div class="area-placa">

                        <label for="filter-plate">Filtrar Placa do Carro:</label>
                        <input type="text" id="filter-plate" placeholder="Digite para filtrar...">
                        
                        
                        <label class="car-laber" for="car-plate">Placa do Carro:</label>
                        <select id="car-plate">
                            <option value="NQRE">Seleciona a Placa</option>
                            <option value="SFDAS">SFDAS</option>
                            <option value="EGTW">EGTW</option>
                            <option value="WE$WETGW">WE$WETGW</option>
                        </select>
                    </div>

                        <div class="area-lavagem">
                    
                    
                        <label for="service-name">Tipo de Lavagem:</label>

                        <select name="" id="">
                            <option value="#">Escolha a lavagem</option>
                            <option value="#">Lavagem Meia Boca</option>
                            <option value="#">Lavagem interna</option>
                            <option value="#">Lavagem de verdade</option>
                        </select>

                    </div>
                    
                    <button type="submit">Criar</button>
                    <button type="button" id="cadastrarClienteBtn">Cadastrar Cliente</button>                </form>
            </div>
        </div>

        <script src="../assets/js/home.js"></script>
        </div>
    </section>
</body>
</html>

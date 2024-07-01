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


                <button class="btn btn-success" id="openModalBtn">Criar Serviço</button>
            </div>
        </section>

        <!-- Finalize Modal -->
        <div id="finalizeModal2" class="modal2">
            <div class="modal-content2">
                <span class="close2 finalize-close2">&times;</span>
                <h2>Finalizar Serviço</h2>
                <p>Cliente: Igor</p>
                <p>Carro: Celta</p>
                <p>Placa: NRQ0G80</p>
                <p>Tipo de Lavagem: Completa</p>
                <p>Valor: R$40,00</p>
                <div class="area-finalizar">
                    <a href="#" id="area-finalizar2" class="link-finalizar">Ligar<i id="icon-finalizar2" class="bi bi-telephone-fill"></i></a>
                    <a href="#" id="area-finalizar1" class="link-finalizar">Enviar Mensagem<i id="icon-finalizar1" class="bi bi-whatsapp"></i></a>
            
                </div>
                <button id="confirmFinalizeBtn2">Confirmar</button>
                <button id="cancelFinalizeBtn2">Cancelar</button>
            </div>
        </div>

        <!-- Create Service Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Criação de Serviço</h2>
                <form method="POST">
                    <div class="area-placa">
                        <label  class="label-form" for="filter-plate">Filtrar Placa do Carro:</label>
                        <input  class="input-form"    type="text" id="filter-plate" placeholder="Digite para filtrar...">
                        <label  class="label-form" for="car-plate">Placa do Carro:</label>
                        <select class="input-form"  id="car-plate">
                            <option value="NQRE">Seleciona a Placa</option>
                            <option value="SFDAS">SFDAS</option>
                            <option value="EGTW">EGTW</option>
                            <option value="WE$WETGW">WE$WETGW</option>
                        </select>
                    </div>
                    <div class="area-lavagem">
                        <label class="label-form" for="service-name">Tipo de Lavagem:</label>
                        <select name="" id="">
                            <option value="#">Escolha a lavagem</option>
                            <option value="#">Lavagem Meia Boca</option>
                            <option value="#">Lavagem interna</option>
                            <option value="#">Lavagem de verdade</option>
                        </select>
                    </div>
                    <div class="area-btn">
                    <button type="button" class="btn btn-primary">Criar</button>
                    <button type="button" class="btn btn-light" id="cadastrarClienteBtn">Cadastrar Cliente</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="../assets/js/home.js"></script>

</body>
</html>

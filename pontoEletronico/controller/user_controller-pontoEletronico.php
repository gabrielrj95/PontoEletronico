<?php
    require_once "../model/user_model-pontoEletronico.php";

    
    if(!isset($_GET["acao"])) { // se acao NÃO ESTIVER SETADO
        $acao = "create";
    } else {
        $acao = $_GET["acao"];
    }

        //
   if ($acao == "create"){
    
        if (isset($_POST['matricula']) || !empty($_POST['matricula'])){ //isset -> checa se o indice(name) do array existe
            $matricula = $_POST['matricula'];
        } else{
            echo "Campo Matricula não preenchido";
        }

        //
        if (isset($_POST['tipo']) || !empty($_POST['tipo'])){ //isset -> checa se o indice(name) do array existe
            $tipo = $_POST['tipo'];
        }
         
        else{
            echo "Campo Tipo não preenchido";
        } 

        //
        $userModelPontoEletronico = new userModelPontoEletronico(); //new cria(instancia) o objeto
        $result = $userModelPontoEletronico -> create($matricula, $tipo); // -> chamando a função create
    
    }
    /*if ($_POST) {
        $horario = date("Y-m-d H:i:s");
    }
        */
?>
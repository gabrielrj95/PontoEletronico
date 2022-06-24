<?php

    require_once "../util/database_pontoEletronico.php";

class UserModelPontoEletronico {

    public function create($matricula, $tipo) {
        $db = new Database();
        $con = $db->connect();

        $sql = "INSERT INTO pontoeletronico (matricula, tipo, horario) VALUES (:matricula, :tipo, current_time())"; //: coloca " " e torna tudo dentro tipo uma string
        $stmt = $con->prepare($sql);
        $result = $stmt->execute(['matricula'=>$matricula, 'tipo'=>$tipo]); //name entre aspas deve ser o mesmo name que está nos VALUES

        return  $result;

    }

}
?>



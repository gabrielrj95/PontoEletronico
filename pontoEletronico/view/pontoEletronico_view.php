<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../static/css/styles.css">
    <title>Ponto Eletronico</title>
</head> 
<body>
    <div class="container">
                <h1 class="titulo">REGISTRO DE PONTO</h1>
                <form method="post" class="formBox" action="../controller/user_controller-pontoEletronico.php?acao=create">

                    <div class="formMatricula">
                        <label for="" class="subtitulos" >Matricula</label>
                        <input type="text" name="matricula" id="matricula" placeholder="Digite a sua matrícula"/>
                    </div>

                    <div class="formdata_hora">
                        <label for="" class="subtitulos">Horário</label>
                        <span id= 'horario'></span>

                    </div>

                    <div class="etapas">
                        <label for="" class="subtitulos">Tipo</label>
                        <select name="tipo" id="tipo">
                            <option>Escolha o tipo de marcação</option>
                            <option value="1">Entrada Manhã</option>
                            <option value="2">Saída Manhã</option>
                            <option value="3">Entrada Tarde</option>
                            <option value="4">Saída Tarde</option>
                        </select>
                    </div>

                    <div class="botao">
                            <input class="btn" type="submit" value="REGISTRAR"/>

                    </div>

                </form>    
    </div>

</body>

    <script>   
var timeDisplay = document.getElementById("horario");


function refreshTime() {
  var dateString = new Date().toLocaleString("en-US", {timeZone: "America/Sao_Paulo"});
  var formattedString = dateString.replace(", ", " - ");
  timeDisplay.innerHTML = formattedString;
}

setInterval(refreshTime, 100);

                        
    </script>
</html>
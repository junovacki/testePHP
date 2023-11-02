<?php

use Illuminate\Support\Facades\DB;
$modelos = DB::select("SELECT * FROM modelos");
$marcas = DB::select("SELECT * FROM marcas");
$veiculos = DB::select("SELECT veiculos.*,marcas.nome_marca,modelos.nome_modelo FROM veiculos
                    LEFT JOIN marcas
                    ON veiculos.id_marca = marcas.id
                    LEFT JOIN modelos
                    ON veiculos.id_modelo = modelos.id
                    WHERE veiculos.id = ?",[$id]);

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Veiculo</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body id="body">
@include('menu')
<form id="formCadastro">
    <div id="campoLogin">
        Nome do veiculo: <input type="text" name="nome_turno" id="nome_veiculo" value="<?=$veiculos[0]->nome ?>"/>
    </div>
    <div id="campoLogin">
        Preco do veiculo: <input type="number" name="nome_turno" id="preco_veiculo" value="<?=$veiculos[0]->preco ?>"/>
    </div>

    <div id="campoTipoUsuario">
        Marca do veiculo: <select id="marcaVeiculo" name="tipoCurso" style="margin-left: 14px;">
            @foreach($marcas as $marca)
                <option value="<?= $marca->id?>" <?php if($veiculos[0]->id_marca == $marca->id){echo "selected";} ?>><?= $marca->nome_marca?></option>
            @endforeach
        </select>
    </div>
    <div id="campoTipoUsuario">
        Modelo do veiculo: <select id="modeloVeiculo" name="tipoCurso" style="margin-left: 14px;">
            @foreach($modelos as $modelo)
                <option value="<?= $modelo->id?>" <?php if($veiculos[0]->id_modelo == $modelo->id){echo "selected";} ?>><?= $modelo->nome_modelo?></option>
            @endforeach
        </select>
    </div>

    <input type="hidden" name="link" value="{{ env('APP_URL') }}">
    <input type="button" onclick="enviar()" name="submitUsuario" id="submitUsuario" value="Enviar"/>
</form>

</body>
</html>

<script>
    function enviar() {
        const link = document.getElementsByName("link")[0].value;

        const url = link+"/api/registrarVeiculo";
        let eCategoria = document.getElementById('marcaVeiculo');
        let marca= eCategoria.options[eCategoria.selectedIndex].value;
        let eModalidade = document.getElementById('modeloVeiculo');
        let modelo= eModalidade.options[eModalidade.selectedIndex].value;

        $.ajax({
            url: url,
            type: 'POST',
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
                "Authorization": "Bearer "+localStorage.getItem('authToken')
            },
            data: {
                nome: document.getElementById('nome_veiculo').value,
                preco: document.getElementById('preco_veiculo').value,
                id_marca: marca,
                id_modelo: modelo,
                path_img: 'aaa'
            },

            success: function () {
                window.location.href = link+'/dashVeiculos';
                alert("Veiculo atualizado com sucesso!!");
            },
            error: function () {
                alert("Houve um problema ao registrar o veiculo!");
            },
        });
    }

</script>

<style>

    #formCadastro{
        background-color: rgb(177, 174, 174);
        position: center;
        width: 512px;
        height: 350px;
        margin-left: 20%;
        margin-top: 50px;
        border-style: solid;
        border-radius: 20% !important;
        position: fixed;
    }
    #body{
        flex-direction: row-reverse;
    }

    #botaoVoltar {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        margin-top: -650px;
        text-decoration: none;
        position: fixed;
        font-size: 16px;
        margin-left: 85% !important;
    }
    #campoLogin{
        margin-top: 1% !important;
        margin-left: 10% !important;
    }
    #login{
        padding: 0px;
        width: 60%;
    }
    #nome_turno{
        width: 49%;
    }
    #campoSenha{
        margin-top: 3%;
        margin-left: 10%;
    }
    #senhas{
        padding: 0px;
        width: 65%;
    }
    #campoTipoUsuario{
        margin-top: 3%;
        margin-left: 10%;
    }
    #submitUsuario{
        margin-top: 25%;
        margin-left: 15%;
        width: 45%;

    }
    #submitCurso{
        margin-top: 21%;
        margin-left: 45%;
    }
</style>

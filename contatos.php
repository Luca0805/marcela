<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de contatos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">
    <script src="scriptcontatos.js"></script>
</head>
<body>
    <div class='row'>
        <div class='col-12'>
            <form action="acao.php" method='post'>
                <div class='row'>
                    <div class='col-2'>
                        <label for="nome">Nome:</label>
                    </div>
                    <div class='col-4'>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class='col-2'>
                        <label for="sobrenome">Sobrenome:</label>
                    </div>
                    <div class='col-4'>
                        <input type="text" name="sobrenome" id="sobrenome">
                    </div>
                </div>
                <div class='row'>
                    <div class='col-2'>
                        <label for="email">E-mail</label>
                    </div>
                    <div class='col-4'>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class='col-2'>
                        <label for="niver">Data de nascimento</label>
                    </div>
                    <div class='col-4'>
                        <input type="date" name="niver" id="niver">
                    </div>
                </div>
                <div class='col-2'>
                        <label for="telefone">numero de telefone</label>
                    </div>
                    <div class='col-4'>
                        <input type="text" name="telefone" id="telefone">
                    </div>
                </div>
                <div class='col-2'>
                        <label for="cidade">cidade</label>
                    </div>
                    <div class='col-4'>
                        <input type="text" list="cidades" name="cidade" id="cidade">
                        <datalist id='cidades'></datalist>
                            <!--<?php// include "lista_cidades.php";
                          //  foreach ($cidades as $cidade) {
                           //     echo "<option value={$cidade['id']}>{$cidade['nome']}</option>";
                       //     } ?>-->
                        </select>
                    </div>
                </div>
                <div class='col-2'>
                        <label for="obsv">observações</label>
                    </div>
                    <div class='col-4'>
                        <textarea name="observa" id="observa" cols="30" rows="10"></textarea>
                    </div>
                    <div class='col-2'>
                        <label for="vivo">vivo?</label>
                    </div>
                    <div class='col-4'>
                        <input type="checkbox" name="vivo" id="vivo" checked>
                    </div>
                    <div class='row'>
                        <div class='col-12'>
                            <button name="acao" id="acao" value="salvar" type="submit">Ok</button>
                        </div>
                    </div>
                
            </form>
        </div>
    </div>
</body>
</html>
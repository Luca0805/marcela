<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Esportes</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class='row'>
        <div class='col-12'>
            <form action="acao2.php" method='post'>
                <div class='row'>
                    <div class='col-2'>
                        <label for="nome">Nome:</label>
                    </div>
                    <div class='col-4'>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class='col-2'>
                        <label for="descricao">descricao:</label>
                    </div>
                    <div class='col-4'>
                        <input type="textarea" name="descricao" id="descricao">
                    </div>
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
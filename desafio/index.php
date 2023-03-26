<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela seleção</title>
</head>

<body>
    <form action="tabela.php" method="POST">
        <div>
            <div>Formulário</div>
            <div>
                <div>
                    <label">Número de colunas</label>
                        <input type="number" min="0" name="colunasDinamicas">
                </div>
                <div>
                    <label">Número de linhas</label>
                        <input type="number" min="0" name="linhasDinamicas">
                </div>
                <div>
                    <button type="submit">Enviar dados</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
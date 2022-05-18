<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gerador de QR-Code</title>
</head>

<body>
    <div class="container text-center p-4">
        <h3>Gerador de crachá</h3>
    </div>

    <div class="container">
        <div class="p-2">
            <select class="form-select" id="badgeType">
                <option value="">Selecione o crachá</option>
                <option value="1">Crachá de aluno</option>
                <option value="2">Crachá de professor</option>
                <option value="3">Crachá de funcionário</option>
            </select>
        </div>

        <div class="p-2">
            <select class="form-select" id="user">
                <option value="">Selecione o usuário</option>
                <option value="1">Crachá de aluno</option>
            </select>
        </div>

        <div class="p-2"> 
            <button class="btn btn-dark" id="generate">Gerar</button>
        </div>

    </div>
</body>

</html>

<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <title>Ticket</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        </head>
 <body>
            <div class="row">
                <div class="offset-lg-4 col-lg-4 mt-5 p-5 card">
                    <form action="?page=verificar-esqueceu-senha" method="POST">
                        <div class="mb-3">
                            <label>Seu Usuário</label>
                            <input type="text" name="nome_usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Data de Nascimento</label>
                            <input type="date" name="data_nascimento" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>RGM</label>
                            <input type="int" name="rgm" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>3 Primeiros dígitos CPF</label>
                            <input type="int" name="cpf" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit">Acessar</button>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>

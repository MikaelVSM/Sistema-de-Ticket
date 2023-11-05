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
                    <form action="verificar-esqueceu-senha.php" method="POST">
                        <div class="mb-3">
                            <label>Informe seu Usuário</label>
                            <input type="text" name="nome_usuario" class="form-control">
                        </div>
                        <div class="mb-3">
		                    <label>Escolha sua Pergunta de Segurança</label>
		                        <select name="pergunta_seguranca_usuario" class="form-control">
                                    <option>-= Escolha =-</option>
                                    <option value="1">Qual o nome de seu tio favorito?</option>
                                    <option value="2">Onde você encontrou seu/sua marido/mulher?</option>
                                    <option value="3">Qual o apelido de seu primo mais velho?</option>
                                    <option value="4">Qual o apelido de seu filho mais velho?</option>
                                    <option value="5">Qual o apelido de seu filho mais novo? </option>
                                    <option value="6">Qual o nome de sua sobrinha mais velha?</option>
                                    <option value="7">Qual o nome de seu sobrinho mais velho?</option>
                                    <option value="8">Qual o nome de sua tia favorita?</option>
                                    <option value="9">Onde você passou sua lua-de-mel?</option>
                                    <option value="10">Qual o nome de um professor importante para você?</option>
		                        </select>
	                     </div>
                         <div class="mb-3">
                            <label>Informe a Resposta</label>
                            <input type="text" name="resposta_seguranca_usuario" class="form-control">
                        </div>  
                        <div class= "mb-3">
                            <button type="submit">verificar</button>
                        </div>  
                    </form>
                </div>
            </div>
</body>
</html>

<h1>Cadastrar Ticket</h1>
<form action="?page=dashboard&pag=ticket-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Departamento</label>
		<?php
			$sql = "SELECT * FROM departamento ORDER BY nome_departamento";
			$res = $conn->query($sql);
			if($res->num_rows > 0){
				print "<select name='departamento_id_departamento' class='form-control'>";
				print "<option>-=Escolha=-</option>";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_departamento."'>".$row->nome_departamento."</option>";
				}
				print "</select>";
			}else{
				print "<p>Não há departamento cadastrado</p>";
			}
		?>
	</div>
	<div class="mb-3">
		<label>Selecione Usuário</label>
		<?php
			$sql_1 = "SELECT * FROM usuario";
			$res_1 = $conn->query($sql_1);
			if($res_1->num_rows > 0){
				print "<select name='usuario_id_usuario' class='form-control'>";
				print "<option>-=Escolha=-</option>";
				while($row_1 = $res_1->fetch_object()){
					print "<option value='".$row_1->id_usuario."'>".$row_1->nome_usuario."</option>";
				}
				print "</select>";
			}else{
				print "<p>Não há usuário cadastrado</p>";
			}
		?>
	</div>
	<div class="mb-3">
		<label>Título do Ticket</label>
		<input type="text" name="titulo_ticket" class="form-control">
	</div>
	<div class="mb-3">
		<label>Descrição</label>
		<textarea type= "text" name="desc_ticket" class="form-control"></textarea>
	</div>
	<div class="row">
		<div class="col">
			<div class="mb-3">
				<label>Data</label>
				<input type="date" name="data_ticket" class="form-control">
			</div>
		</div>
		<div class="col">
			<div class="mb-3">
				<label>Hora</label>
				<input type="time" name="hora_ticket" class="form-control">
			</div>
		</div>
		<div class="mb-3">
		<label>Status</label>
		<select name="status_ticket" class="form-control">
			<option value="1">Abrir</option>
		</select>
	</div>
	</div>
	<div class="mb-3">
		<button class="btn btn-success">Salvar</button>	
	</div>
</form>

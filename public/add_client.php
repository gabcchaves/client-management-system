<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/add_client.css">
	<link rel="stylesheet" href="css/reset.css">
</head>
<html>
	<body>
		<!-- Reusable navbar -->
		<?= require 'navbar.php'; ?>

		<div class="container">
			<div class="form-container">
				<h1>Cadastro de cliente</h1>

				<form action="add.php" method="POST">
					<div class="form-group">
						<input name="client_name" id="client_name" type="text" placeholder="Nome">
					</div>
					<div class="form-group">
						<input name="client_name" id="client_name" type="text" placeholder="E-mail">
					</div>
					<div class="form-group">
						<input name="client_name" id="client_name" type="text" placeholder="Telefone">
					</div>
					<input type="submit" value="Cadastrar">
				</form>

			</div>	
		</div>

	</body>
</html>

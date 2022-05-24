<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="css/add_client.css">
	<link rel="stylesheet" href="css/reset.css">
</head>
<html>
	<body>
		<!-- Reusable navbar -->
		<?= require 'navbar.html'; ?>

		<div class="container">
			<h1>Cadastro de cliente</h1>
			<div class="form-container">

				<form action="add.php" method="POST">
					<div class="form-group">
						<label for="client_name">Nome:</label>
						<input name="client_name" id="client_name" type="text">
					</div>
					<div class="form-group">
						<label for="client_name">Nome:</label>
						<input name="client_name" id="client_name" type="text">
					</div>
					<div class="form-group">
						<label for="client_name">Nome:</label>
						<input name="client_name" id="client_name" type="text">
					</div>
					<input type="submit" value="Cadastrar">
				</form>

			</div>	
		</div>

	</body>
</html>

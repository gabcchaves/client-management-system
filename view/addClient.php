<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gerenciamento de cliente</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body id="add-client-page">
		<!-- Reusable header -->
		<?php require_once 'header.php'; ?>

		<!-- Main content area -->
		<div class="main-content">
			<div class="card">
				<div class="form-info">
					<h1>Adicionar cliente</h1>	
				</div>
				
				<div class="form-container">
					<form action="../controller/add.php" method="POST">
						<div class="input-group">
							<label for="client_name">Nome:</label><br>
							<input name="client_name" id="client_name" type="text">
						</div>
						<div class="input-group">
							<label for="client_email"><i>E-mail</i>:</label><br>
							<input name="client_email" id="client_email" type="email">
						</div>
						<div class="input-group">
							<label for="client_phone">Telefone:</label><br>
							<input name="client_phone" id="client_phone" type="tel">
						</div>
						<input type="submit" value="Adicionar" class="button-dark">
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>

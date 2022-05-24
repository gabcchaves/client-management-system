<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Gerenciamento de clientes</title>
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/reset.css">
	</head>

	<body>
		<?= require_once 'navbar.php'; ?>

		<main>
			<table class="client-list">
				<tr class="list-header">
					<th>Nome</th>
					<th>E-mail</th>
					<th>Telefone</th>
					<th>Opções</th>
				</tr>

				<?= require_once '../resources/query.php'; ?>
				

			</table>
		</main>

	</body>

</html>


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

				<!-- Fill table with data -->
				<?php
					require_once '../resources/query.php';
					for ($i = 0; $i < count($user_list); $i++) {
						echo '<tr>';
						for ($j = 0; $j < count($user_list[$i]); $j++) {
							echo '<td>' . $user_list[$i][$j] . '</td>';
						}
						echo '<td><button>Editar</button><button>Remover</button></td>';
						echo '</tr>';
					}
				?>
			</table>
		</main>

	</body>

</html>


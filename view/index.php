<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gerenciamento de cliente</title>
	</head>
	<body id="client-list-page">
		<!-- Reusable header -->
		<?php require_once 'header.php'; ?>

		<!-- Main content area -->
		<div class="main-content">
			<table>
				<!-- Table header -->
				<tr>
					<th>Nome</th>
					<th><i>E-mail</i></th>
					<th>Telefone</th>
				</tr>
				
				<!-- Table data -->
				<?php 
					require_once '/controller/getClientList.php';
					for ($i = 0; $i < $clientList; $i++) {
						echo '<tr>';
						echo '<td>' . $clientList['name'] . '</td>';
						echo '<td>' . $clientList['email'] . '</td>';
						echo '<td>' . $clientList['phone'] . '</td>';
						echo '</tr>';
					}
				?>
			</table>
		</div>
	</body>
</html>

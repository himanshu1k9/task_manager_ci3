<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<style>
		body {
			font-family: arial, sans-serif;
			margin: 40px;
			background: #f4f4f9;
		}
		table {
			width: 100%;
			border-collapse: collapse;
			background: #fff;
			margin-top: 20px;
		}
		th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background: #007bff; color: white; }
	</style>
</head>
<body>
	<h3><?php echo $title; ?></h3>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Description</td>
				<td>Status</td>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($tasks)):
				foreach($tasks as $task): ?>
			<tr>
				<td><?php echo $task['id'] ?></td>
				<td><?php echo $task['title'] ?></td>
				<td><?php echo $task['description'] ?></td>
				<td><?php echo $task['status'] ?></td>
			</tr>
			<?php endforeach;
			endif; ?>
		</tbody>
	</table>
</body>
</html>

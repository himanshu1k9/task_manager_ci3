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
	<a href="<?php echo site_url('tasks/create'); ?>" style="background: #28a745; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 15px;">+ Add New Task</a>
	<h3><?php echo $title; ?></h3>
	<table>
		<thead>
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Description</td>
				<td>Status</td>
				<th>Actions</th>
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
				<td>
					<a href="<?php echo site_url('tasks/edit/' . $task['id']); ?>" style="color: #ffc107; text-decoration: none; font-weight: bold; margin-right: 10px;">Edit</a>
					<a href="<?php echo site_url('tasks/delete/' . $task['id']); ?>" style="color: #dc3545; text-decoration: none; font-weight: bold;" onclick="return confirm('Are you sure?');">Delete</a>
				</td>
			</tr>
			<?php endforeach;
			endif; ?>
		</tbody>
	</table>
</body>
</html>

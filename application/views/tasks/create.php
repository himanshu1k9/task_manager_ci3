<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $title; ?></title>
	<style>
		body {font-family: Arial, sans-serif;margin: 40px;background: #f4f4f9;}
		.form-container { background: #fff; padding: 20px; border-radius: 5px; max-width: 500px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], textarea { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        textarea { height: 100px; }
        button { background: #28a745; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #218838; }
        .error { color: red; font-size: 0.9em; margin-top: 5px; }
        a { display: inline-block; margin-top: 15px; color: #007bff; text-decoration: none; }
	</style>
</head>
<body>
	<div class="form-container">
		<h2><?php echo $title; ?></h2>
		<?php echo validation_errors('<div class="error">', '</div>'); ?>
		<form action="<?php site_url('tasks/create') ?>" method="POST">
			<div class="form-group">
				<label for="title">Task Title</label>
				<input type="text" name="title" id="title" value="<?php set_value('title'); ?>">
			</div>
			<div class="form-group">
				<label for="description">Task Title</label>
				<textarea name="description" id="description"><?php echo set_value('description'); ?></textarea>
			</div>
			<button type="submit">Save Task</button>
			<a href="<?php echo site_url('tasks'); ?>">Back to Task List</a>
		</form>
	</div>
</body>
</html>

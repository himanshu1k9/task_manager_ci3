<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f9; }
        .form-container { background: #fff; padding: 20px; border-radius: 5px; max-width: 500px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], textarea, select { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        textarea { height: 100px; }
        button { background: #ffc107; color: #333; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-weight: bold; }
        button:hover { background: #e0a800; }
        .error { color: red; font-size: 0.9em; margin-top: 5px; }
        a { display: inline-block; margin-top: 15px; color: #007bff; text-decoration: none; }
    </style>
</head>
<body>

    <div class="form-container">
        <h1><?php echo $title; ?></h1>

        <?php echo validation_errors('<div class="error">', '</div>'); ?>

        <form action="<?php echo site_url('tasks/edit/' . $task['id']); ?>" method="post">
            <div class="form-group">
                <label for="title">Task Title:</label>
                <input type="text" name="title" id="title" value="<?php echo set_value('title', $task['title']); ?>">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description"><?php echo set_value('description', $task['description']); ?></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="pending" <?php echo ($task['status'] == 'pending') ? 'selected' : ''; ?>>Pending</option>
                    <option value="completed" <?php echo ($task['status'] == 'completed') ? 'selected' : ''; ?>>Completed</option>
                </select>
            </div>

            <button type="submit">Update Task</button>
        </form>

        <a href="<?php echo site_url('tasks'); ?>">← Back to Task List</a>
    </div>

</body>
</html>

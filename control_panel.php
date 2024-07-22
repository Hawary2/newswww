<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="color"],
        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Control Panel</h1>
    <form action="save_settings.php" method="POST">
        <div class="form-group">
            <label for="themeColor">Theme Color</label>
            <input type="color" id="themeColor" name="themeColor" value="#6610f2">
        </div>
        <div class="form-group">
            <label for="fontFamily">Font Family</label>
            <select id="fontFamily" name="fontFamily">
                <option value="Arial, sans-serif">Arial</option>
                <option value="Verdana, sans-serif">Verdana</option>
                <option value="Helvetica, sans-serif">Helvetica</option>
                <option value="'Inter', sans-serif">Inter</option>
                <option value="'Times New Roman', serif">Times New Roman</option>
            </select>
        </div>
        <button type="submit">Save Settings</button>
    </form>
</body>
</html>

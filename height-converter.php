<!DOCTYPE html>
<html>
<head>
    <title>Height Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fb94aa;
            color: #6c8fa7;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #6c8fa7; 
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #6c8fa7;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #fb94aa;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a {
            color: #6c8fa7;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Height Converter 💎</h2>
        <?php
        if(isset($_POST['height_km'])) {
            $height_km = $_POST['height_km'];
            $height_m = $height_km * 1000;
            echo "$height_km kilometers is equal to $height_m meters.";
        }
        ?>
        <form action="height-converter.php" method="post">
            Enter height in kilometers (km): <input type="text" name="height_km" required><br><br>
            <input type="submit" value="Convert">
        </form>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>

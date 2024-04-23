<!DOCTYPE html>
<html>
<head>
    <title>Weight Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d4e2f0;
            color: #fb94aa;
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
            color: #fb94aa;
        }
        form {
            margin-top: 20px;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #fb94aa;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #d4e2f0; 
            color: #fb94aa; 
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        a {
            color: #fb94aa; 
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
        <h2>Weight Converter 💎</h2>
        <?php
        if(isset($_POST['weight_kg'])) {
            $weight_kg = $_POST['weight_kg'];
            $weight_mg = $weight_kg * 1000000;
            echo "$weight_kg kilograms is equal to $weight_mg milligrams.";
        }
        ?>
        <form action="weight-converter.php" method="post">
            Enter weight in kilograms (kg): <input type="text" name="weight_kg" required><br><br>
            <input type="submit" value="Convert">
        </form>
        <a href="index.php">Back to Home</a>
    </div>
</body>
</html>

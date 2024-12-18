<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World - Motivational Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        
        h1 {
            font-size: 3em;
            color: #4CAF50;
            margin-bottom: 20px;
        }
        
        p {
            font-size: 1.5em;
            color: #555;
            margin-bottom: 40px;
        }
        
        .quote {
            font-size: 1.3em;
            color: #00796b;
            font-style: italic;
            border-left: 4px solid #00796b;
            padding-left: 20px;
            margin-top: 30px;
        }
        
        .footer {
            font-size: 1em;
            color: #888;
            margin-top: 30px;
        }
        
        .btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 30px;
            text-align: center;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Hello Teacher, My name is Kevin Santiago Zurita PRUEBA3 :3!</h1>
        <p>Welcome to my page Test QA in php 2024/11/28 2024<?php echo gethostname();?></p>


        <div class="quote">
            <p>"Discipline is choosing between what you want now and what you want most. Every drop of sweat brings you closer to your goals—stay consistent, and the results will follow."</p>
            <p> :D relax</p>
        </div>
        <div class="footer">
            <button class="btn" onclick="window.location.reload();">Reload Page</button>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Information sur l'Hôtel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 600px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>Formulaire d'Information sur l'Hôtel</h2>

    <form action="inserthotel.php" method="post">
        <label for="hotelName">Nom de l'Hôtel:</label>
        <input type="text" id="hotelName" name="hotelName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="phone">Phone:</label>
        <input type="phone" id="phone" name="phone" required>
        <label for="hotelLocation">Emplacement:</label>
        <input type="text" id="hotelLocation" name="hotelLocation" required>
        <label for="hotelDescription">Description de l'Hôtel:</label>
        <textarea id="hotelDescription" name="hotelDescription" rows="6"></textarea>

        <button type="submit" name="submit">Soumettre</button>
    </form>

   

</body>
</html>

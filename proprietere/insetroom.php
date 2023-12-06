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
            background-color: #af9e4c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #a08245;
        }
    </style>
</head>
<body>

    <form action="insertroom.php" method="post">
        
        <h1>Ajouter une chambre:</h1>

        <label for="typeChambre">Type de Chambre:</label>
        <input type="text" id="typeChambre" name="typeChambre" required>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required>

        <label for="prix">Prix:</label>
        <input type="text" id="prix" name="prix" required>

        <label for="disponibilite">Disponibilité:</label>
        <select id="disponibilite" name="disponibilite" required>
            <option value="disponible">1</option>
            <option value="indisponible">0</option>
        </select>

        <label for="quantite">Quantité:</label>
        <input type="number" id="quantite" name="quantite"  required>
        <label for="id_hotel">Id_hotel:</label>
        <input type="text" name="ID" value="1">


        <button type="submit" name="submit">Soumettre</button>
    </form>
</body>
</html>

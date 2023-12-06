<?php
include 'connexion.php';

$query = "SELECT * FROM hotels";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "
        <tr>
            <td>{$row['ID']}</td>
            <td>{$row['Nom_hotel']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Phone']}</td>
            <td>{$row['Description']}</td>
            <td>
                <a class='btn btn-warning btn-sm' href='edithotel.php?id={$row['ID']}'>Edit</a>
                <a class='btn btn-danger btn-sm' href='deletehotel.php?id={$row['ID']}'>delete</a>
            </td>
        </tr> ";
}
?>

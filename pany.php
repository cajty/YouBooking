<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="  container p-5 mt-2  py-5">

        <div class="row  mt-4 p-3 " style="background: #64CCC5;">
            <div class=" col-6  ">
                <h2 class="text-center">Room Details</h2>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">hotle</h5>
                        <h5 class="card-title">type_chambre</h5>
                        <p class="card-text">numeroèchambre</p>
                        <p class="card-text">Price: $200.00</p>
                        <spam class="card-text">date_fin</spam>
                        <spam class="card-text">date_fin</spam>
                    </div>
                </div>
            </div>

            <div class="  col-6  ">
                <h2 class="text-center">info user</h2>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">nom</h5>
                        <p class="card-text">prenom</p>
                        <p class="card-text">email</p>
                        <p class="card-text">phone</p>
                    </div>
                </div>
                <a class='btn btn-primary btn-sm ' href=\"edit.php?id=$row[id]\">Edit</a>
                <a class='btn btn-danger btn-sm ' href=\"delete.php?id=$row[id]\"onClick=\"return confirm('Are you sure
                    you want to delete?')\">Delete</a>
            </div>
        </div>
    </div>
</body>

</html>
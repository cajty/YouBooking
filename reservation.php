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
    <div class="container p-5">
        
        <div class="row justify-content-center" style="background: #64CCC5;">
            <div class="col-4 p-0">
                <!-- <img src="booking.jpg" class="img-fluid" alt="booking"> -->
                <div class="container mt-2">
                    <h2 class="text-center">Room Details</h2>

                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">type_chambre</h5>
                            <p class="card-text">numeroèchambre</p>
                            <p class="card-text">Price: $200.00</p>
                            <p class="card-text">Availability: Available</p>
                            <p class="card-text">Quantity: 50</p>
                        </div>
                    </div>
                </div>
                <div class="container mt-2">
                    <h2 class="text-center">Room Details</h2>

                    <div class="card" >
                        <div class="card-body">
                            <h5 class="card-title">Suite Junior</h5>
                            <p class="card-text">Suite spacieuse avec vue panoramique</p>
                            <p class="card-text">Price: $200.00</p>
                            <p class="card-text">Availability: Available</p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <form class="row g-3 needs-validation justify-content-around" novalidate>
                    <i class="col-md-10 fs-4">Saisissez vos coordonnées</i>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom02" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-10 ">
                        <label for="validationCustomUsername" class="form-label">Adresse e-mail</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationCustomUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                    </div>
                    <div class="col-md-10 fs-4">Vos coordonnées</div>
                    <div class="col-md-10">
                        <label for="validationCustom01" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-10">
                        <label for="validationCustom02" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                    <div class="col-md-10">
                        <label for="validationCustomUsername" class="form-label">Téléphone</label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" id="validationCustomUsername" required>
                            <div class="invalid-feedback">Please choose a username.</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-success" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
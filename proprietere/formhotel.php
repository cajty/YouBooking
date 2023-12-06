<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>New Hotel</h2>
        <form action="inserthotel.php" method="post">
            <div class="mb-3 row">
                <label for="nom" class="col-sm-3 col-form-label">Nom Hotel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tel" class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tel" name="phone" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="description" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="description" name="description" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-3 col-sm-9 d-grid">
                    <button type="submit" class="btn btn-warning" name="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
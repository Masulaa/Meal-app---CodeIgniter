<!DOCTYPE html>
<html>

<head>
    <title>Ordered meal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-success text-center">
            <h2>Thank you for using our service!</h2>
            <p>You ordered: <strong><?= esc($meal['name']) ?></strong></p>
        </div>
        <div class="text-center">
            <a href="/" class="btn btn-secondary">Go back to lsit of meals</a>
        </div>
    </div>
</body>

</html>
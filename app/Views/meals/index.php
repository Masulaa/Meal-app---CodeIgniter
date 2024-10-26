<!DOCTYPE html>
<html>

<head>
    <title>List of meals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">List of meals</h1>
        <div class="row">
            <?php foreach ($meals as $meal): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= esc($meal['name']) ?></h5>
                            <p class="card-text"><?= esc($meal['description']) ?></p>
                            <p class="card-text"><strong>Price:</strong> $<?= esc($meal['price']) ?></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/order/<?= $meal['id'] ?>" class="btn btn-primary">Price</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
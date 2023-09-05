<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-center">Image</th>
                            <th scope="col" class="text-center">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $key=>$product): ?>
                            <tr>
                            <th scope="row" class="text-center"><?= ($key+1); ?></th>
                            <td class="text-center"><?php echo $product['name']; ?></td>
                            <td class="text-center"><?php echo $product['price']; ?></td>
                            <td class="text-center"><img src="product-images/<?php echo $product['image']; ?>" alt="" height="250px"></td>
                            <td class="text-center"><?php echo $product['description']; ?></td>
                            </tr>
                           <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
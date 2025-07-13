<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products - E-Commerce Admin</title>
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="container py-5">
        <h2 class="mb-4">Manage Products</h2>
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://via.placeholder.com/80x60" alt="Product 1" class="img-thumbnail" style="height: 60px;"></td>
                        <td>Product 1</td>
                        <td>$19.99</td>
                        <td>Electronics</td>
                        <td>
                            <a href="edit-product.html" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete-product.html" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="https://via.placeholder.com/80x60" alt="Product 2" class="img-thumbnail" style="height: 60px;"></td>
                        <td>Product 2</td>
                        <td>$29.99</td>
                        <td>Clothing</td>
                        <td>
                            <a href="edit-product.html" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete-product.html" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <!-- Add more products as needed -->
                </tbody>
            </table>
        </div>
    </div>
    <?php include "./includes/footer.php" ?>
</body>
</html> 
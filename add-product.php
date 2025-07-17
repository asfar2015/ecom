<?php
require_once "./config.php";
session_start();

if (isset($_POST['submit'])) {
    $product_name = $_POST['productName'];
    $product_price = $_POST['productPrice'];
    $username = $_SESSION['username'] ?? 1;

    $image = $_FILES['productImage'];
    $image_name = time() . "_" . basename($image['name']);
    $target_path = "uploads/" . $image_name;

    if (move_uploaded_file($image['tmp_name'], $target_path)) {
        $insert = "INSERT INTO products(name, image_path, product_price, username) 
                   VALUES('$product_name', '$target_path', '$product_price', '$username')";

        if (mysqli_query($link, $insert)) {
            echo "<script>
                alert('Product added successfully');
            </script>";
            header("refresh:5");
        } else {
            echo "<script>
                alert('Failed to add product');
            </script>";
        }
    } else {
        echo "<script>
            alert('Failed to upload image');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - E-Commerce Admin</title>
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="container py-5">
        <h2 class="mb-4">Add New Product</h2>
        <form id="addProductForm" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="productName" required>
                <div class="invalid-feedback">Please enter the product name.</div>
            </div>
            <div class="mb-3">
                <label for="productDescription" class="form-label">Description</label>
                <textarea class="form-control" id="productDescription" rows="3" required></textarea>
                <div class="invalid-feedback">Please enter a description.</div>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">Price ($)</label>
                <input type="number" class="form-control" id="productPrice" min="0" step="0.01" required>
                <div class="invalid-feedback">Please enter a valid price.</div>
            </div>
            <div class="mb-3">
                <label for="productCategory" class="form-label">Category</label>
                <input type="text" class="form-control" id="productCategory" required>
                <div class="invalid-feedback">Please enter a category.</div>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Product Image</label>
                <input class="form-control" type="file" id="productImage" accept="image/*" required>
                <div class="invalid-feedback">Please upload a product image.</div>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
    <?php include "./includes/footer.php" ?>
    <script>
        // Simple form validation
        document.getElementById('addProductForm').addEventListener('submit', function(event) {
            var form = this;
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    </script>
</body>
</html> 
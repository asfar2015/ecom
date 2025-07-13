<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product - E-Commerce Admin</title>
    <?php include "./includes/header.php" ?>
</head>
<body>
    <?php include "./includes/navbar.php" ?>
    <div class="container py-5">
        <h2 class="mb-4">Edit Product</h2>
        <form id="editProductForm" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="editProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="editProductName" value="Sample Product" required>
                <div class="invalid-feedback">Please enter the product name.</div>
            </div>
            <div class="mb-3">
                <label for="editProductDescription" class="form-label">Description</label>
                <textarea class="form-control" id="editProductDescription" rows="3" required>Sample description of the product.</textarea>
                <div class="invalid-feedback">Please enter a description.</div>
            </div>
            <div class="mb-3">
                <label for="editProductPrice" class="form-label">Price ($)</label>
                <input type="number" class="form-control" id="editProductPrice" min="0" step="0.01" value="19.99" required>
                <div class="invalid-feedback">Please enter a valid price.</div>
            </div>
            <div class="mb-3">
                <label for="editProductCategory" class="form-label">Category</label>
                <input type="text" class="form-control" id="editProductCategory" value="Electronics" required>
                <div class="invalid-feedback">Please enter a category.</div>
            </div>
            <div class="mb-3">
                <label for="editProductImage" class="form-label">Product Image</label>
                <input class="form-control" type="file" id="editProductImage" accept="image/*">
                <div class="form-text">Current image: <img src="https://via.placeholder.com/100x70" alt="Current Product" class="img-thumbnail" style="height: 70px;"></div>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
    <?php include "./includes/footer.php" ?>
    <script>
        // Simple form validation
        document.getElementById('editProductForm').addEventListener('submit', function(event) {
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
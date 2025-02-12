<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error { color: red; }

        .form-label{
            font-weight: bold;
        }


    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Insert Product Details</h2>
    <form action="insert.php" method="post" onsubmit="return validateForm()">
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control">
            <span class="error"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <input type="text" name="short_description" class="form-control">
            <span class="error"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Long Description</label>
            <textarea name="long_description" class="form-control"></textarea>
            <span class="error"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control">
            <span class="error"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control">
            <span class="error"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Purchase Date</label>
            <input type="date" name="purchase_date" class="form-control">
            <span class="error"></span>
        </div>

        <div class="mb-3">
            <label class="form-label">Vendor</label>
            <select name="vendor" class="form-control">
                <option value="">Select Vendor</option>
                <option value="hp">HP</option>
                <option value="dell">Dell</option>
                <option value="apple">Apple</option>
                <option value="lenovo">Lenovo</option>
                <option value="acer">Acer</option>
            </select>
            <span class="error"></span>
        </div>
        <br>
        <center>
        <button type="submit" class="btn btn-primary">Submit</button>
        </center>
        <br>
    </form>
</div>

    
<script> // using javascript for validating the form
function validateForm() {
    let fields = document.querySelectorAll("input, textarea, select");
    let valid = true;

    fields.forEach(field => {
        let errorSpan = field.nextElementSibling;
        if (field.value.trim() === "") {
            errorSpan.textContent = "Fill this field";
            valid = false;
        } else {
            errorSpan.textContent = "";
        }
    });

    return valid;
}
</script>

</body>
</html>

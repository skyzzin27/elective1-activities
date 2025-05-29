<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { box-shadow: 0 5px 15px rgba(0,0,0,0.1); border-radius: 15px; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4">Controller | Order Details</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Transaction No</label>
                        <input type="text" class="form-control" value="{{ $transNo }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Order No</label>
                        <input type="text" class="form-control" value="{{ $orderNo }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Item ID</label>
                        <input type="text" class="form-control" value="{{ $itemId }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Item Name</label>
                        <input type="text" class="form-control" value="{{ $name }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" value="{{ $price }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantity</label>
                        <input type="text" class="form-control" value="{{ $qty }}" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Order Information</title>
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
                <h3 class="text-center mb-4">Controller | Order Information</h3>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Customer ID</label>
                        <input type="text" class="form-control" value="{{ $custId }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Customer Name</label>
                        <input type="text" class="form-control" value="{{ $custName }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Order No</label>
                        <input type="text" class="form-control" value="{{ $orderNo }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="text" class="form-control" value="{{ $date }}" readonly>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>

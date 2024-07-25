<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class=" tajawal_black container">
        <div class=" tajawal_black row">
            <div class=" tajawal_black col-md-12">
                <!-- Bootstrap Card Component -->
                <div class=" tajawal_black card">
                    <div class=" tajawal_black card-body">
                        <h1 class=" tajawal_black card-title">{{ $subject }}</h1>
                        <p class=" tajawal_black card-text">{{ $content }}</p>
                    </div>
                </div>
                <!-- End Bootstrap Card Component -->
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js for Bootstrap features -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE 3 Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
    <style>
        .dashboard-container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e0f0ff;
        }
        .dashboard-box {
            background-color: #3498db;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 900px;
            padding: 30px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .dashboard-item {
            background-color: #2980b9;
            border-radius: 15px;
            color: #fff;
            text-align: center;
            padding: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s;
        }
        .dashboard-item:hover {
            transform: translateY(-10px);
        }
        .dashboard-item i {
            font-size: 40px;
            margin-bottom: 15px;
        }
        .dashboard-item h5 {
            margin: 0;
            font-size: 18px;
        }
        .settings-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #fff;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-box position-relative">
            <div class="settings-icon">
                <i class="fas fa-cog"></i>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-walking"></i>
                <h5>1. Please stand on the marked area</h5>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-thermometer"></i>
                <h5>2. Get yourself thermal scanned</h5>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-lungs"></i>
                <h5>3. Quick check your Oxygen level</h5>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-pump-soap"></i>
                <h5>4. Get your hand sanitized</h5>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-qrcode"></i>
                <h5>5. Scan the QR code get your data</h5>
            </div>
            <div class="dashboard-item">
                <i class="fas fa-check-circle"></i>
                <h5>6. You are all set to go!</h5>
            </div>
        </div>
    </div>
</body>
</html>

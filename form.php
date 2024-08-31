<?php
include("connection.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';
$redirect = false;

if (isset($_POST['submit'])) {
    $temperature = $_POST['temperature'];
    $altitude = $_POST['altitude'];
    $rainfall = $_POST['rainfall'];
    $soil_moisture = $_POST['soil_moisture'];
    $humidity = $_POST['humidity'];

    if ($temperature != "" && $altitude != "" && $rainfall != "" && $soil_moisture != "" && $humidity != "") {
        // Validation
        $canProceed = true;
        $errorMessages = [];

        if ($temperature < 20 || $temperature > 40) {
            $canProceed = false;
            $errorMessages[] = "Temperature must be between 20 and 40°C.";
        }

        if ($altitude > 1500) {
            $canProceed = false;
            $errorMessages[] = "Altitude must be up to 1500 meters.";
        }

        if ($rainfall <= 500) {
            $canProceed = false;
            $errorMessages[] = "Rainfall must be greater than 500 mm/year.";
        }

        if ($soil_moisture <= 10) {
            $canProceed = false;
            $errorMessages[] = "Soil moisture must be greater than 10%.";
        }

        if ($humidity < 30 || $humidity > 60) {
            $canProceed = false;
            $errorMessages[] = "Humidity must be between 30% and 60%.";
        }

        if ($canProceed) {
            // Insert data into the database
            $stmt = $con->prepare("INSERT INTO area_data (temperature, altitude, rainfall, soil_moisture, humidity) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ddddd", $temperature, $altitude, $rainfall, $soil_moisture, $humidity);

            if ($stmt->execute()) {
                $message = 'Data submitted successfully. You can proceed for Hardware approach.';
                $redirect = true; // Set redirect flag to true
            } else {
                $message = 'Failed to insert data.';
            }

            $stmt->close();
        } else {
            $message = implode(" ", $errorMessages);
        }
    } else {
        $message = 'Please fill in all required fields.';
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Data Input Form</title>
    <link rel="stylesheet" href="form_style.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var message = <?php echo json_encode($message); ?>;
            var redirect = <?php echo json_encode($redirect); ?>;
            if (message) {
                alert(message);
                if (redirect) {
                    window.location.href = 'success.php';
                }
            }
        });
    </script>
</head>

<body>
    <?php include("header.php"); ?>

    <div class="main-content">
        <section class="form-section">
            <h2>Enter Area Data</h2>
            <form method="post">
                <div class="form-group">
                    <label for="temperature">Temperature (°C):</label>
                    <input type="number" id="temperature" name="temperature" required>
                </div>

                <div class="form-group">
                    <label for="altitude">Altitude (meters):</label>
                    <input type="number" id="altitude" name="altitude" required>
                </div>

                <div class="form-group">
                    <label for="rainfall">Rainfall (mm):</label>
                    <input type="number" id="rainfall" name="rainfall" required>
                </div>

                <div class="form-group">
                    <label for="soil-moisture">Soil Moisture (%):</label>
                    <input type="number" id="soil-moisture" name="soil_moisture" required>
                </div>

                <div class="form-group">
                    <label for="humidity">Humidity (%):</label>
                    <input type="number" id="humidity" name="humidity" required>
                </div>

                <button type="submit" name="submit">Submit</button>
            </form>
        </section>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>

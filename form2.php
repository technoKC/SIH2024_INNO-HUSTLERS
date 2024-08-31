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
                    <label for="season">Season:</label>
                    <select id="season" name="season" required>
                        <option value="">Select Season</option>
                        <option value="Spring">Spring</option>
                        <option value="Summer">Summer</option>
                        <option value="Autumn">Autumn</option>
                        <option value="Winter">Winter</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="river">River:</label>
                    <input type="text" id="river" name="river" placeholder="Enter river name" required>
                </div>

                <button type="submit" name="submit">Submit</button>
            </form>
        </section>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>
<?php
include("connection.php");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = '';
$redirect = false;

if (isset($_POST['submit'])) {
    $season = $_POST['season'];
    $river = $_POST['river'];

    if ($season != "" && $river != "") {
        // Insert data into the database
        $stmt = $con->prepare("INSERT INTO  data (season, river) VALUES (?, ?)");
        $stmt->bind_param("ss", $season, $river);

        if ($stmt->execute()) {
            $message = 'Data submitted successfully. You can proceed for Hardware approach.';
            $redirect = true; // Set redirect flag to true
        } else {
            $message = 'Failed to insert data.';
        }

        $stmt->close();
    } else {
        $message = 'Please fill in all required fields.';
    }
    $con->close();
}
?>



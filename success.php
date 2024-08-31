<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Delay Input Form</title>
    <link rel="stylesheet" href="form_style.css">
</head>
<body>
    <?php include("header.php"); ?>

    <div class="main-content">
        <section class="form-section">
            <h2>Enter Time Delays</h2>
            <form method="post" action="generate_graphs.php">
                <div class="form-group">
                    <label for="delay1">Delay 1 (ms):</label>
                    <input type="number" id="delay1" name="delay1" required>
                </div>

                <div class="form-group">
                    <label for="delay2">Delay 2 (ms):</label>
                    <input type="number" id="delay2" name="delay2" required>
                </div>

                <div class="form-group">
                    <label for="delay3">Delay 3 (ms):</label>
                    <input type="number" id="delay3" name="delay3" required>
                </div>

                <div class="form-group">
                    <label for="delay4">Delay 4 (ms):</label>
                    <input type="number" id="delay4" name="delay4" required>
                </div>

                <button type="submit">Generate Graphs</button>
            </form>
        </section>
    </div>

    <?php include("footer.php"); ?>
</body>
</html>


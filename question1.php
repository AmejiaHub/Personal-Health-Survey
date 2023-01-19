<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Survey</title>
    <!-- Bootstrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Internal CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Include PHP Header -->
    <div class="header">
        <?php include 'includes/header.php';?>
    </div>

    <!-- Start Content of Page -->

    <div class="container-fluid">
        <div id="question_box">
            <p>Question 1/10</p>
            <p>How healthy are you?</p>
            <div class="range_slider">
                <div class="range-text">
                    <div class="rating">1</div>
                    <div class="rating">2</div>
                    <div class="rating">3</div>
                    <div class="rating">4</div>
                    <div class="rating">5</div>
                </div>
            <input type="range" class="form-range" min="1" max="5" step="1" id="customRange3">
            </div>
            <br>
            <button type="button" onclick="question2.php">Next Question</button>
        </div>
    </div>

    <!-- End Content of Page -->

    <!-- Include PHP Footer -->
    <div class="footer">
        <?php include 'includes/footer.php';?>
    </div>

    <!-- Bootstrap5 Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
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
    <!-- Javascript Validation -->
    <script src="tools/form-validation.js"></script>
</head>

<body>
    <!-- Include PHP Header -->
    <div class="header">
        <?php include 'includes/header.php';?>
    </div>

    <!-- Start Body of Page -->

    <div class="fitness_image">
        <img src="/images/landing_image.jpeg"/>
    </div>

    <div class="container" id="start_survey">
      <ul class="nav nav-pills justify-content-center">
          <li class="nav-item"><a class="home_button" href="question1.php" target="_self">Start Survey</a></li>
      </ul>
    </div>

    <!-- End Body of Page -->

    <!-- Include PHP Footer -->
    <div class="footer">
        <?php include 'includes/footer.php';?>
    </div>

    <!-- Bootstrap5 Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
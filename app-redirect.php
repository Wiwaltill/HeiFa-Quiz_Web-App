<?php
// Set the site name and description
$site_name = "App-Redirect";
$site_description = "Herzlich Willkommen zum offiziellen Kinderquiz zur Heiligtumsfahrt 2023 in Aachen";

// Set the body class
$body_class = 'class="bodyWhite"';

// Include the header file
include ("includes/header.php");
?>

<!-- Meta tag to redirect to the app link after 0 seconds (immediately) -->
<meta http-equiv="refresh" content="0; URL=https://heifa-quiz.app.link/US0SkTcmneb">

<!-- Container div to hold the content -->
<div class="container">
    <!-- Content error div to display a message -->
    <div id="ContentError">
        <!-- Display the site name as a heading -->
        <h1 class="text-center"><?= $site_name ?></h1>
        <!-- Display a message with a link to the app link -->
        <h2 class="text-center">Du wirst in Kürze weitergeleitet.<br/>Wenn dies nicht der Fall ist, klicke <a href="https://heifa-quiz.app.link/US0SkTcmneb">hier.</a></h2>
    </div>
</div>

<!-- Include the footer file -->
<?php include ("includes/footer.php"); ?>
<?php
// Define site-wide variables
$site_name = "Error 401"; // Site name for the error page
$site_description = "Herzlich Willkommen zum offiziellen Kinderquiz zur Heiligtumsfahrt 2023 in Aachen"; // Site description for the error page
$body_class = 'class="bodyWhite"'; // CSS class for the body element

// Include the header file
include("includes/header.php");

// Start the main content container
?>
<div class="container">
    <!-- Error 401 content -->
    <div id="ContentError">
        <!-- Display the error message -->
        <h1 class="text-center">Error 401 <br/> Unauthorized</h1>
        <!-- Provide a brief explanation of the error -->
        <h2 class="text-center">Die angeforderte Ressource erfordert eine Authentifizierung.</h2>
    </div>
</div>

<?php
// Include the footer file
include("includes/footer.php");
?>
<?php

$imageFolder = "VILLA_IXORA_MEDIA"; // Define the image folder here
$images = scandir($imageFolder);

foreach ($images as $image) {
    if ($image != '.' && $image != '..') {
        echo "<div class='image'>";

            echo "<img src='$imageFolder/$image' alt='$image'>";
            echo "<p>File Name: $image</p>";
            echo "<p>Image Path: $imageFolder/$image</p>";

        echo "</div>";
    }
}

?>

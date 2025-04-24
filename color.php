<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color array</title>
    <link rel="stylesheet" href="css/color.css">
</head>

<body>
    <form action="colorarray.php" method="post">
        <div class="container">
            <?php
            $colors = [
                "Green",
                "Red",
                "Yellow",
                "Blue",
                "Purple"
            ];

            foreach ($colors as $color)
            echo "<div class='colors' style='color: $color'> $color </div>";
        ?>
        <?php

        // checking for form validation
        if (isset($_POST['summit'])) {
            $color = $_POST['color'];
            if (empty($_POST['color'])) {
                echo "<p>Choose a color to display</p>" . "<br>";
            } else {
                echo "<h2 style='color: $color'> $color</h2>";
            }
        }
        ?>
            <input style="padding:15px;border-radius:5px; border:solid black;" type="text" name="color"
                placeholder="Enter a color here" class="color">
            <button style="padding:15px;background-color:black; color:white;border-radius:5px;" type="summit"
                name="summit">Print Color</button>

        </div>
    </form>

</body>

</html>
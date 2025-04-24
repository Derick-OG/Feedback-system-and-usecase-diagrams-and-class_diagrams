<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="box-shadow:0px 0px 5px 1px rgba(0, 0, 0, 0.5);padding:20px; justify-self:">
    <form action="" method="post">
        <label for="name">Your Name:</label><br>
        <input type="text" name="name" placeholder="Enter your name" style="padding:10px;width:95%"><br><br>
        <label for="age">Your Age:</label><br>
        <input type="number" name="age" placeholder="Enter your age" style="padding:10px;width:95%"><br><br>
        <label for="phone">Your Phone Number:</label><br>
        <input type="text" name="phone" placeholder="Enter your phone number" style="padding:10px;width:95%"><br><br>
        <label for="Skills">Skills:</label>
        <input type="text" name="skills" placeholder="Enter skills, seperate with commas (,)" style="padding:10px;width:95%"><br><br>
        <label for="message">Your Message:</label><br>
        <textarea name="summary" id="" style="height:100px;width:98%"></textarea><br><br>
        <input type="submit" name="submit" value="Submit" style="padding:10px;background:green;color:white;border:transparent;border-radius:8px">
    </form>
    <?php
    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $summary = $_POST['summary'];
       
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $inputSkills = $_POST['skills'];
            $skills = explode(',', $inputSkills);
        }

        echo "<table border= '1' cellpadding='10' cellspacing='0' style='margin:20px;width:90%'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Age</th>";
        echo "<th>Phone</th>";
        echo "<th>Summary</th>";
        echo "<th>Skills</th>";

        echo "</tr>";

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$age</td>";
        echo "<td>$phone</td>";
        echo "<td>$summary</td>";
        echo "<td>";
            echo "<ol>";
            
                foreach($skills as $skill){
                    echo "<li style='background:green;color:white;list_style_type:none;border-radius:5px;padding:5px;margin-top:5px'> $skill </li>";
                }

            echo "</ol>";
        echo "</td>";
        echo "</table>";
            }
    ?>
</body>
</html>
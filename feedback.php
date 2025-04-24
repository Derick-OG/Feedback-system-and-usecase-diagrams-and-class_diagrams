<?php
include 'feeddatabase.php';
$feedbacks = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $department = $_POST["department"];
    $gender = $_POST["gender"];
    $feedbackMessage = $_POST["feedbackMessage"];

    $feedback = [
        "Full Name" => $fullName,
        "Department" => $department,
        "Gender" => $gender,
        "Feedback Message" => $feedbackMessage,
    ];

    $feedbacks[] = $feedback;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="feedback.php" style='justify-items:center; margin:100px auto; box-shadow:0px 0px 5px 1px rgba(0, 0, 0, 0.6); width: fit-content;padding:20px' method="post">
        <h3 style="text-align:center">Feedback Form</h3>
        <?php
        echo "<p style='color:green;text-align:center'> $message </p>"
        ?><br>
        <label for="fullName">Full Name:</label>
        <br>
        <input type="text" id="fullName" name="fullName" required style='width:300px;height:30px'placeholder="Your full name" ><br><br>
        <label for="department">Department:</label>
        <br>
        <select id="department" name="department" style='width:300px;height:30px;placeholder:Select department'required>
            <option value="Nursing" placeholder="Select department">Nursing</option>
            <option value="IT">IT</option>
            <option value="Marketing">Marketing</option>
            <option value="Sales">Sales</option>
        </select><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" style='margin-left:100px;'>
        <label for="female">Female</label><br><br>
        <label for="feedbackMessage">Feedback Message:</label>
        <br>
        <textarea id="feedbackMessage" name="feedbackMessage" style='width:300px;height:100px'placeholder="Enter your message here" required></textarea><br><br>
        <input type="submit" style='background:green; color:white;border-radius:10px;padding:10px;border:transparent;margin-top:10px' value="Submit">
    </form>

    <?php if (!empty($feedbacks)) : ?>
        <h2>Feedback Responses:</h2>
        <table style='border=1;width: 100%;border-collapse:collapse;'>
            <tr>
                <th>Full Name</th>
                <th>Department</th>
                <th>Gender</th>
                <th>Feedback Message</th>
            </tr>
            <?php foreach ($feedbacks as $feedback) : ?>
                <tr>
                    <td><?= $feedback["Full Name"] ?></td>
                    <td><?= $feedback["Department"] ?></td>
                    <td><?= $feedback["Gender"] ?></td>
                    <td><?= $feedback["Feedback Message"] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>


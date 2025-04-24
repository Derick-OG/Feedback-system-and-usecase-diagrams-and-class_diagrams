<?php
$people = [
    [
        "Name" => "Derick",
        "Age" => "17",
        "City" => "Yaounde"
    ],
    [
        "Name" => "Rickson",
        "Age" => "23",
        "City" => "Douala"
    ],
    [
        "Name" => "Emmanuel",
        "Age" => "20",
        "City" => "Bamenda"
    ]
]
    ?>
<?php
echo "<table border='1'; style='width: 100%;border-collapse:collapse;'>
    <thead>
    <tr>
    <th style='padding:10px'>Name</th>
    <th>Age</th>
    <th>City</th>
    </tr>
    </thead>"

    ?>
<?php
foreach ($people as $person)
    echo "<tr>
<td style='padding:10px'>" . $person['Name'] . "</td>
<td style='padding:10px'>" . $person['Age'] . "</td>
<td style='padding:10px'>" . $person['City'] . "</td>
</td>"

?>
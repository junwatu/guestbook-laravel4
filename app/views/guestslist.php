<!DOCTYPE html>
<head>
    <title>Guests List</title>
    <meta charset="utf-8" lang="en">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h4>Guests List | <a href="/">Home</a></h4>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php

    foreach ($data as $guest) {
        echo "<tr>
                <td>$guest->name</td>
                <td>$guest->email</td>
               </tr>";
    };
    ?>
</table>
</body>
</html>



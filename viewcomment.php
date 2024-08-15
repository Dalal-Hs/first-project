<?php
include("includes/db.php");
include("comment.php");


function getAllUsers($conn) {
    $query = "SELECT * FROM comment";
    $result = $conn->query($query);

    echo "<h2>All Comment</h2>";

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th> Name</th>
                    <th>Comment </th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>  
                    <td>" . $row["CO_name"] . "</td>
                    <td>" . $row["Comm"] . "</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Show All Users</title>
</head>
<body>


    <div class="container">
        

     
        <div class="content">
          
            <?php
                getAllUsers($conn);
            ?>
        </div>
    </div>

</body>
</html>

<?php

$conn->close();
?>
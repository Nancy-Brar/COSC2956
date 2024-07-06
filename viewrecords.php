<?php 
$title = "View Records";
require_once './includes/header.php';
require_once './db/conn.php';

$sql = "SELECT client_id, email, address, city, province, area_code FROM client_info";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Province</th>
                <th>Area Code</th>
            </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row["client_id"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["city"]."</td>
                <td>".$row["province"]."</td>
                <td>".$row["area_code"]."</td>
                <td><a href='delete_record.php?id={$row['client_id']}' class='btn btn-danger'>Delete</a></td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
require_once './includes/footer.php';
?>

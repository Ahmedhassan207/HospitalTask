<?php 
    include "header.php";

?>

<table>
    <th>NO</th>
    <th>Name</th>
    <th>Email</th>
    <th>date </th>



<?php 
    $host = "localhost";
    $user = 'root';
    $password = '';
    $dbname = 'Hospital';
    $conn = mysqli_connect($host,$user,$password,$dbname);

    
    $get_query = 'SELECT * FROM patients';
    $res = mysqli_query($conn,$get_query);

    while ($row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }

    
?>

</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "project1");
if ($mysqli->connect_error) {
    exit('Could not connect');
}
$id = $_GET['q'];
$sql = "SELECT * FROM `bill_shop` WHERE month(create_at)=$id";
$result = $mysqli->query($sql);
$total = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $total += (int) $row["price"];
        echo '<tr>';
        echo '<td>1</td>';
        echo '<td>' . $row['id_bill'] . '</td>';
        echo '<td>' . $row['id_user'] . '</td>';
        echo '<td>' . $row['id_shop'] . '</td>';
        echo '<td><mark>' . $row['extension_time'] . '</mark></td>';
        echo '<td>' . $row["price"] . '</td>';
        echo '<td>' . $row["create_at"] . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td colspan=7>Tháng này không có khách</td>';
    echo '</tr>';
}
echo '<tr>';
echo '<td class=bg-blue colspan=7>Doanh thu tháng này:<mark> ' . $total . '</mark></td>';
echo '</tr>';
// }

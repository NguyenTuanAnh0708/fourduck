<?php
$mysqli = new mysqli("localhost", "root", "", "project1");
if ($mysqli->connect_error) {
    exit('Could not connect');
}
$q = $_GET['q'];
if ($q == '') {
    $sql = "SELECT * FROM `product` limit 4";
} else {
    $sql = "SELECT * FROM `product` WHERE name_product like '%$q%'";
}
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<li class="header__search-history-item">
        <a href="index.php?url=detail-product&id_product=' . $row['id_product'] . '">' . $row['name_product'] . '</a>
    </li>';
    }
} else {
    echo '<li class="header__search-history-item">
     Không có kết quả nào hết :(
</li>';
}

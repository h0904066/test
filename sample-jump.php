
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>sample2</title>
<style>
table td {
    padding: 30px;
}

</style>
</head>
<body>

<?php

$total = $_POST['total'] ?? '';
$total2 = $_POST['total2'] ?? '';
$type = $_POST['type'] ?? '';
$type2 = $_POST['type2'] ?? '';

?>

<table border="1">
    <tr>
        <td><?= $type ?>:<?= $total ?>頭<br><?= $type2 ?>:<?= $total2 ?>頭</td>
        <td>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
</table>

</body>
</html>
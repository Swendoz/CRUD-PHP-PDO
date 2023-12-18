<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h1>De duurste auto's ter wereld</h1>

        <a href="./Car/create.php" class="button">Nieuw record</a>

        <?php if (isset($_GET['status']) && $_GET['status'] != null) {
            $getStatus = explode('-', $_GET["status"]);
        ?>
        <div class='<?php echo "status {$getStatus[0]}"; ?>'>
            <?php echo $getStatus[1] ?> </div>
        <?php } ?>

        <table>
            <thead>
                <tr>
                    <th>Merk</th>
                    <th>Model</th>
                    <th>Topsnelheid</th>
                    <th>Prijss</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include './db/db_conn.php';

                $sql = "SELECT * from car ORDER BY Prijs DESC";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $cars = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // print_r($cars);
                foreach ($cars as $car) {
                    echo "
                <tr>
                    <td>{$car['Merk']}</td>
                    <td>{$car['Model']}</td>
                    <td>{$car['Topsnelheid']}</td>
                    <td>{$car['Prijs']}</td>
                    <td class='change'>
                        <a href='./Car/update.php?id={$car["id"]}'><img src='https://icons.veryicon.com/png/o/business/personnel-icon/staff-information-change.png' alt='Wijzigen'></a>
                        <a href='./Car/delete.php?id={$car["id"]}'><img src='https://cdn-icons-png.flaticon.com/512/1345/1345874.png' alt='Verwijderen'></a>
                    </td>
                ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="script.js"></script>

</html>
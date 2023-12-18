<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Create</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <h1>De duurste auto's ter wereld</h1>

        <a href="../index.php" class="button">Kijk records</a>

        <form action="./create_func.php" method="POST">
            <?php if (isset($_GET['status']) && $_GET['status'] != null) { ?>
            <div class="status"> <?php echo $_GET['status']; ?> </div>
            <?php } ?>

            <label for="Merk">Merk</label>
            <input type="text" name="Merk" id="Merk" placeholder="Merk">

            <label for="Model">Model</label>
            <input type="text" name="Model" id="Model" placeholder="Model">

            <label for="Topsnelheid">Topsnelheid</label>
            <input type="number" name="Topsnelheid" id="Topsnelheid" placeholder="Topsnelheid">

            <label for="Prijs">Prijs</label>
            <input type="number" name="Prijs" id="Prijs" placeholder="Prijs">

            <input type="submit" value="Opslaan">
        </form>
    </div>
</body>
<script src="../script.js"></script>

</html>
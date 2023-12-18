<?php

include '../db/db_conn.php';

if ($_POST["Merk"] == null || $_POST["Model"] == null || $_POST["Topsnelheid"] == null || $_POST["Prijs"] == null) {
    header("Location: ./create.php?status=error-Vul alle velden in");
    exit;
}

if ($_POST["Topsnelheid"] < 0) {
    header("Location: ./create.php?status=error-Topsnelheid moet hoger zijn dan 0");
    exit;
}

if ($_POST["Prijs"] < 0) {
    header("Location: ./create.php?status=error-Prijs moet hoger zijn dan 0");
    exit;
}

$sql = "INSERT INTO car (Merk, Model, Topsnelheid, Prijs) VALUES (:Merk, :Model, :Topsnelheid, :Prijs)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(":Merk", $_POST["Merk"]);
$stmt->bindParam(":Model", $_POST["Model"]);
$stmt->bindParam(":Topsnelheid", $_POST["Topsnelheid"]);
$stmt->bindParam(":Prijs", $_POST["Prijs"]);
$stmt->execute();

header("Location: ../index.php?status=success-Record is toegevoegd");
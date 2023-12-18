<?php

include "../db/db_conn.php";

if (isset($_GET["id"]) && $_GET["id"] != null) {
    $sql = "DELETE FROM car WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"]);
    $stmt->execute();

    if ($stmt->rowCount() == 1) {
        header("Location: ../index.php?status=success-Record is verwijderd");
        exit;
    } else {
        header("Location: ../index.php?status=error-Something went wrong");
        exit;
    }
}
<?php 

session_start();
include 'config.php';


if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $country = $_POST['country'];
    $streetAdress = $_POST['streetAdress'];
    $secondAdress = $_POST['secondAdress'];
    $city = $_POST['city'];
    $postCode = $_POST['postCode'];
    $Phone = $_POST['Phone'];
    $payment = $_POST['payment'];
    $userId = $_SESSION['id'];
    $sql = "INSERT INTO checkout (firstName, lastName, country, streetAdress, secondAdress, city, postCode, Phone, payment, userId)
    VALUES ('$firstName', '$lastName', '$country', '$streetAdress', '$secondAdress', '$city', '$postCode', '$Phone', '$payment', '$userId')";
    $pdo->query($sql);
    $pdo = null;
    unset($_SESSION['totalall']);
    header('location:checkout.php');



}
?>
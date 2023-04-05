<?php
session_start();
      if(isset($_GET['action'])){
          if($_GET['action'] == "clearall"){
              unset($_SESSION['cart']);
              header('location:cart.php');
          }
          if($_GET['action'] == "remove"){
              foreach($_SESSION['cart'] as $key => $value)
              if($value['id'] == $_GET['id']){
                  unset($_SESSION['cart'][$key]);
                  header('location:cart.php');
              }
          }
          
      } ?>
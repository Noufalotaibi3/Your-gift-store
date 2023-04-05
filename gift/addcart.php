<?php

if(isset($_POST['add'])){
    if(isset($_SESSION['cart'])){
      $session_array_id = array_column($_SESSION['cart'], 'id');
      if(!in_array($_GET['itemid'],$session_array_id)){
        $session_array = array (
            'id'    => $_GET['itemid'],
            'name'  => $_POST['name'],
            'image'  => $_POST['image'],
            'price'  => $_POST['price'],
            'quantity'  => $_POST['quantity'],
          );
          $_SESSION['cart'][] = $session_array;

      }
  
      
    }else{
        $session_array = array (
            'id'    => $_GET['itemid'],
            'name'  => $_POST['name'],
            'image'  => $_POST['image'],
            'price'  => $_POST['price'],
            'quantity'  => ($_POST['quantity']),
        );
        $_SESSION['cart'][] = $session_array;
  
  
    }
  }

  
  
  ?>
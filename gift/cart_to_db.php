    <?php
    session_start();
    include 'config.php';

    if(isset($_POST['submit'])){
        foreach($_SESSION['cart'] as $key => $value){ ?>

            <input type="hidden" name="item_id" value="<?php echo $value['id'];?>">
            <input type="hidden" name="item_name" value="<?php echo $value['name']; ?>">
            <input type="hidden" name="price" value="<?php echo $value['price']; ?>">
            <input type="hidden" name="quantity" value="<?php echo $value['quantity']; ?>">
            <?php $total = $value['price'] * $value['quantity'];?>
            <input type="hidden" name="total" value="<?php echo $total; ?>">
            <input type="hidden" name="user" value="$_SESSION['id']">
            <?php
            $item_id = $value['id'];
            $item_name = $value['name'];
            $price = $value['price'];
            $quantity = $value['quantity'];
            $userid = $_SESSION['id'];
            $sql = "INSERT INTO cart (item_id, item_name, price, quantity, total, userid)
            VALUES ('$item_id', '$item_name', '$price', '$quantity', '$total', '$userid')";
            $pdo->query($sql);
        }
            if(isset($_POST['submit'])){
            $sql = "INSERT INTO orders (user_id)
            VALUES ('$userid')";
            $pdo->query($sql);
            if(isset($_POST['submit'])){
                // $d = date("Y-m-d H:i:s");
                $sql = "SELECT MAX(id) FROM orders;";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $maxid = $result["MAX(id)"];
                if(isset($result["MAX(id)"])){
                    foreach($_SESSION['cart'] as $key => $value){ ?>
                        <input type="hidden" name="item_id" value="<?php echo $value['id'];?>">
                        <input type="hidden" name="item_name" value="<?php echo $value['name']; ?>">
                        <input type="hidden" name="price" value="<?php echo $value['price']; ?>">
                        <input type="hidden" name="quantity" value="<?php echo $value['quantity']; ?>">
                        <?php $total = $value['price'] * $value['quantity'];?>
                        <input type="hidden" name="total" value="<?php echo $total; ?>">
                        <input type="hidden" name="user" value="$_SESSION['id']">
                        <?php
                        $item_id = $value['id'];
                        $item_name = $value['name'];
                        $order_id = $maxid;
                        $price = $value['price'];
                        $quantity = $value['quantity'];
                        $sql = "INSERT INTO order_items (item_id, item_name, order_id, price, quantity, total)
                        VALUES ('$item_id', '$item_name', '$order_id', '$price', '$quantity', '$total')";
                        $pdo->query($sql);
                        unset($_SESSION['cart']);
                        $pdo = null;
                        header('location:checkout.php');
                        
                    }

                }

                }


            }

    }
    ?>

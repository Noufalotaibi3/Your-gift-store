<?php foreach($_SESSION['cart'] as $key => $value){ ?>
							<input type="hidden" name="item_id" value="<?php echo $value['id'];?>">
							<input type="hidden" name="item_name" value="<?php echo $value['name']; ?>">
							<input type="hidden" name="price" value="<?php echo $value['price']; ?>">
							<input type="hidden" name="quantity" value="<?php echo $value['quantity']; ?>">
							<?php $total = $value['price'] * $value['quantity'];?>
							<input type="hidden" name="total" value="<?php echo $total; ?>">
							<input type="hidden" name="user" value="<?php echo $_SESSION['id']; ?>">
							

					<?php 
					            $item_id = $value['id'];
								$item_name = $value['name'];
								$price = $value['price'];
								$quantity = $value['quantity'];
								$userid = $_SESSION['id'];
					}
					?>
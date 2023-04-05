
<?php 

session_start();
include 'config.php';

$category = 2;
$sql = "SELECT * FROM items WHERE category=:category ORDER BY items.id DESC";
$stmt = $pdo->prepare($sql);
$stmt->bindParam('category', $category, PDO::PARAM_INT);
$stmt->execute();

while($row = $stmt->fetch()){
    echo $row['items_name'];
}


?>









<!-- <section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/prod-1.jpg" class="image-popup prod-img-bg"><img src="images/6.jpg"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>Box</h3>
                <div class="rating d-flex">
                        <p class="text-left mr-4">
                        
                    </div>
                <p class="price"><span>100 RS</span></p>
                
                    <div class="row mt-4">
                        <div class="input-group col-md-6 d-flex mb-3">
                 <span class="input-group-btn mr-2">
                    <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                   <i class="fa fa-minus"></i>
                    </button>
                    </span>
                 <input type="text" id="quantity" name="quantity" class="quantity form-control input-number" value="1" min="1" max="100">
                 <span class="input-group-btn ml-2">
                    <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                     <i class="fa fa-plus"></i>
                 </button>
                 </span>
              </div>
              <div class="w-100"></div>
              <div class="col-md-12">
                  <p style="color: #000;"></p>
              </div>
          </div>
          <p><a href="cart.html" class="btn btn-primary py-3 px-5 mr-2">Add to Cart</a><a href="cart.html" class="btn btn-primary py-3 px-5">Buy now</a></p>		</div>
        </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</section> -->

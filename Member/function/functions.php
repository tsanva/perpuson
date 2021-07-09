<?php
$conn=mysqli_connect("localhost", "vasant", "password","ecom");
//$db=mysqli_select_db("ecom",$conn);	


//function pop()
//{
//  global $conn;
//  $id_buku_pop = mysqli_query($conn, "SELECT id_buku FROM logs GROUP BY id_buku ORDER BY sum(banyak) DESC LIMIT 1");
//  $rowhasil = mysqli_fetch_row($id_buku_pop);
//
//}


function getIpAdd()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function cart(){
    if(isset($_GET['add_cart']))
    {
        global $conn;

        $ip=getIpAdd();
        $book_id=$_GET['add_cart'];
          $insert_cart="INSERT INTO `cart`(`bookid`, `ip_add`) VALUES ('$book_id','$ip')";
          $run_cart = mysqli_query($conn, $insert_cart);
            echo "added";
          echo "<script>window.open('index.php','_self')</script>";
        
    }
}
function total_items(){
    global $conn;
    $email = $_SESSION["email"];
    $ip=getIpAdd();
    if(isset($_GET['add_cart']))
    {
        $get_items="SELECT * FROM `cart` WHERE email IS NULL OR email = '$email'";
        $run=mysqli_query($conn, $get_items);
        $count = mysqli_num_rows($run);
    }
    else {
        $get_items="SELECT * FROM `cart` WHERE email IS NULL OR email = '$email'";
        $run=mysqli_query($conn, $get_items);
        $count = mysqli_num_rows($run);
    }
    echo $count;
}

function mycart() {
  global $conn;
  $email = $_SESSION["email"];
  $ip = getIpAdd();
    $count = 1;
  $cart_items = mysqli_query($conn,"SELECT * FROM books where book_id IN (SELECT bookid FROM cart WHERE email IS NULL OR email = '$email')");
$total_price =0;    
  while($bk = mysqli_fetch_array($cart_items)){
    $price_arr = array($bk['price']);
    //$total_price = array_sum($price_arr);
    $single_price = $bk['price'];
    $total_price += $single_price;  
    $bk_title = $bk['title'];
    $bk_id = $bk['book_id'];
    $count_row = mysqli_query($conn, "SELECT bookid FROM cart WHERE bookid = '$bk_id' ");
    $quantity = mysqli_num_rows($count_row);
    echo "<tr>
                <td scope='row'><h3>".$count++."</h3></td>
                <td><img src='assets/images/".$bk['image']."' width='60px' height='80px'></td>
                <td><h3>".$bk_title."</h3></td>
                <td><h3>$quantity</h3></td>
                <td>
								<button class='btn btn-danger'><a href='checkout.php?idbuku=".$bk['book_id']."&kuantitas=".$quantity."'>Pinjam</a></button>

              <button class='btn btn-danger'><a href='hapus.php?idbuku=".$bk['book_id']."'>Hapus</a></button>
            </td>
                
            </tr>";
    
  }
    
}

function mybooks() {
  global $conn;
  $email = $_SESSION["email"];
  $ip = getIpAdd();
    $count = 1;

    $cart_items = mysqli_query($conn,"SELECT * FROM books where book_id IN (SELECT bookid FROM dipinjam WHERE email = '$email')");
$total_price =0;    
  while($bk = mysqli_fetch_array($cart_items)){
    $price_arr = array($bk['price']);
    //$total_price = array_sum($price_arr);
    $single_price = $bk['price'];
    $total_price += $single_price;  
    $bk_title = $bk['title'];
    $bk_id = $bk['book_id'];
    $count_row = mysqli_query($conn, "SELECT bookid FROM dipinjam WHERE bookid = '$bk_id' ");
    $quantity = mysqli_num_rows($count_row);
    echo "<tr>
                <td scope='row'><h3>".$count++."</h3></td>

                <td><img src='assets/images/".$bk['image']."' width='60px' height='80px'></td>
                <td><h3>".$bk_title."</h3></td>
                <td><h3>$quantity</h3></td>
                <td>
								<button class='btn btn-danger'><a href='kembalikan.php?idbuku=".$bk['book_id']."&kuantitas=".$quantity."'>Kembalikan</a></button>
							</td>
               
                
            </tr>";
    
  }
    
}

function getcats(){
	global $conn;

	$query4="SELECT * from category";
	$result=mysqli_query($conn, $query4);
	while($row=mysqli_fetch_array($result))
	{
		echo "<li role=\"presentation\"><a href=\"index.php?category=".$row['name']."\">".$row['name']."</a></li>";
	}

}
function getauths(){
	global $conn;

	$query3="SELECT DISTINCT author FROM Books";
	$result=mysqli_query($conn, $query3);
	while($row=mysqli_fetch_array($result))
	{
		echo "<li role=\"presentation\"><a href=\"#".$row['author']."\">".$row['author']."</a></li>";
	}

}

function getbooks(){
	global $conn;
    if(!isset($_GET['category'])){
	$query="SELECT * from books";
	$result=mysqli_query($conn, $query);
	while($row=mysqli_fetch_array($result))
	{
		echo "<div class='col-lg-4 col-md-6'>
                            <div class='card'>
                                <img class='card-img' height='200px' width='100px' src='assets/images/".$row['image']."'>
                                <span class='content-card'>
                                    <h6>".$row['title']."</h6>
                                    <h7>".$row['author']."</h7>
                                </span>
                                <a href='index.php?add_cart=".$row['book_id']."'><button class='buybtn btn btn-warning btn-round btn-sm'>
	 								Add <i class='material-icons'>add_shopping_cart</i>
								</button></a>
                                ";
                                
           //code for modal
        echo "<div class='modal fade' id='".$row['book_id']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                        <h4 class='modal-title' id='myModalLabel'>".$row['title']."</h4>
                      </div>
                      <div class='modal-body'>
                      <h4><p align='right'>&#8377;".$row['price']."</p></h4>".
                          $row['description']
                      ."</div>
                     
                    </div>
                  </div>
                </div>
                                
							</div>
                        </div>";    //the last two </div> are from previous echo.
	}
    }
}


function getpop()
{
  
}

function pop()
{
  global $conn;
  $result=mysqli_query($conn, );
  echo "<div class='container'>
  <h2>Buku Terpopuler</h2>
      <div class='row'>
          <div class='col-md-12'>
              <div class='item active'>
                  <div class='col-md-12' id='bk1'>
                      <img src='./assets/images/perahu.jpg'>
                      <div class='c-content'><b>a</b><br> by Dewi Lestari <br><br>
                      <p>Novel Perahu Kertas dimulai dengan kisah seorang anak muda bernama Keenan. Ia seorang remaja yang baru saja menyelesaikan sekolah menengah atas-nya di Belanda, tepatnya di Amsterdam.</p>
                  </div>
              </div>
          </div> 
          </div>
      </div>
  </div>";
}

function get_bycat(){
  global $conn;
  if(isset($_GET['category'])){
    $cat_id= $_GET['category'];
    $get_cat_pro = "SELECT * FROM books WHERE category LIKE '$cat_id'";
    $run_cat_pro=mysqli_query($conn,$get_cat_pro);
    $count_cat = mysqli_num_rows($run_cat_pro);
    if($count_cat==0){
      echo "<h2>No books found</h2>";
    }
    while($row=mysqli_fetch_array($run_cat_pro))
  {
    echo "<div class='col-lg-4 col-md-6'>
                            <div class='card'>
                                <img class='card-img' height='200px' width='100px' src='assets/images/".$row['image']."'>
                                <span class='content-card'>
                                    <h6>".$row['title']."</h6>
                                    <h7>".$row['author']."</h7>
                                </span>
                                <a href='index.php?add_cart=".$row['book_id']."'><button class='buybtn btn btn-warning btn-round btn-sm'>
                  Add <i class='material-icons'>add_shopping_cart</i>
                </button></a>
                                ";
                                
           //code for modal
        echo "<div class='modal fade' id='".$row['book_id']."' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                        <h4 class='modal-title' id='myModalLabel'>".$row['title']."</h4>
                      </div>
                      <div class='modal-body'>
                      <h4><p align='right'>&#8377;".$row['price']."</p></h4>".
                          $row['description']
                      ."</div>
                      
                    </div>
                  </div>
                </div>
                                
              </div>
                        </div>";    //the last two </div> are from previous echo.
  }
    }
  }

?>

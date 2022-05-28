<?php  
 //cart.php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "barbershop");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Multi Tab Shopping Cart By Using PHP Ajax Jquery Bootstrap Mysql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:800px;">  
                <?php  
                if(isset($_POST["place_order"]))  
                {  
                     $insert_orders = " 
                     INSERT INTO orders(id_customer, tanggal_order, total_harga)  
                     VALUES('1', '".date('Y-m-d')."', 'pending')  
                     ";  
                     $id_order = "";  
                     if(mysqli_query($connect, $insert_orders))  
                     {  
                          $id_order = mysqli_insert_id($connect);  
                     }  
                     $_SESSION["id_order"] = $id_order;  
                     $orders_details = "";  
                     foreach($_SESSION["barbershop"] as $keys => $values)  
                     {  
                          $orders_details .= "  
                          INSERT INTO produk(id, nama_produk, deskripsi, harga_beli)  
                          VALUES('".$id_order."', '".$values["nama_produk"]."', '".$values["deskripsi_produk"]."', '".$values["harga_produk"]."', '".$values["product_quantity"]."');  
                          ";  
                     }  
                     if(mysqli_multi_query($connect, $orders_details))  
                     {  
                          unset($_SESSION["barbershop"]);  
                          echo '<script>alert("You have successfully place an order...Thank you")</script>';  
                          echo '<script>window.location.href="cart.php"</script>';  
                     }  
                }  
                if(isset($_SESSION["id_order"]))  
                {  
                     $customer_details = '';  
                     $orders_details = '';  
                     $total = 0;  
                     $query = '  
                     SELECT * FROM orders  
                     INNER JOIN orders_details  
                     ON orders_details.id_order = orders.id_order  
                     INNER JOIN tbl_customer  
                     ON tbl_customer.CustomerID = orders.customer_id  
                     WHERE orders.id_order = "'.$_SESSION["id_order"].'"  
                     ';  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $customer_details = '  
                          <label>'.$row["CustomerName"].'</label>  
                          <p>'.$row["Address"].'</p>  
                          <p>'.$row["City"].', '.$row["PostalCode"].'</p>  
                          <p>'.$row["Country"].'</p>  
                          ';  
                          $orders_details .= "  
                               <tr>  
                                    <td>".$row["nama_produk"]."</td> 
                                    <td>".$row["deskripsi_produk"]."</td> 
                                    <td>".$row["product_quantity"]."</td>  
                                    <td>".$row["harga_produk"]."</td>  
                                    <td>".number_format($row["product_quantity"] * $row["harga_produk"], 0,',','.')."</td>  
                               </tr>  
                          ";  
                          $total = $total + ($row["product_quantity"] * $row["harga_produk"]);  
                     }  
                     echo '  
                     <h3 align="center">Order Summary for Order No.'.$_SESSION["id_order"].'</h3>  
                     <div class="table-responsive">  
                          <table class="table">  
                               <tr>  
                                    <td><label>Customer Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>'.$customer_details.'</td>  
                               </tr>  
                               <tr>  
                                    <td><label>Orders Details</label></td>  
                               </tr>  
                               <tr>  
                                    <td>  
                                         <table class="table table-bordered">  
                                              <tr>  
                                                   <th width="50%">Product Name</th> 
                                                   <th width="50%">Deskripsi</th> 
                                                   <th width="15%">Quantity</th>  
                                                   <th width="15%">Price</th>  
                                                   <th width="20%">Total</th>  
                                              </tr>  
                                              '.$orders_details.'  
                                              <tr>  
                                                   <td colspan="3" align="right"><label>Total</label></td>  
                                                   <td>'.number_format($total, 0,',','.').'</td> 
                                              </tr>  
                                         </table>  
                                    </td>  
                               </tr>  
                          </table>  
                     </div>  
                     ';  
                }  
                ?>  
           </div>  
      </body>  
 </html> 
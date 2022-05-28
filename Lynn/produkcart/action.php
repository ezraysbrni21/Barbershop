<?php  
 //action.php  
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "barbershop");  
 if(isset($_POST["id_produk"]))  
 {  
      $order_table = '';  
      $message = '';  
      if($_POST["action"] == "add")  
      {  
           if(isset($_SESSION["barbershop"]))  
           {  
                $is_available = 0;  
                foreach($_SESSION["barbershop"] as $keys => $values)  
                {  
                     if($_SESSION["barbershop"][$keys]['id_produk'] == $_POST["id_produk"])  
                     {  
                          $is_available++;  
                          $_SESSION["barbershop"][$keys]['product_quantity'] = $_SESSION["barbershop"][$keys]['product_quantity'] + $_POST["product_quantity"];  
                     }  
                }  
                if($is_available < 1)  
                {  
                     $item_array = array(  
                          'id_produk'               =>     $_POST["id_produk"],
                          'nama_produk'               =>     $_POST["nama_produk"], 
                          'deskripsi_produk'               =>     $_POST["deskripsi_produk"],  
                          'harga_produk'               =>     $_POST["harga_produk"],  
                          'product_quantity'          =>     $_POST["product_quantity"]  
                     );  
                     $_SESSION["barbershop"][] = $item_array;  
                }  
           }  
           else  
           {  
                $item_array = array(  
                     'id_produk'               =>     $_POST["id_produk"],  
                     'nama_produk'               =>     $_POST["nama_produk"], 
                     'deskripsi_produk'               =>     $_POST["deskripsi_produk"], 
                     'harga_produk'               =>     $_POST["harga_produk"],  
                     'product_quantity'          =>     $_POST["product_quantity"]  
                );  
                $_SESSION["barbershop"][] = $item_array;  
           }  
      }  
      if($_POST["action"] == "remove")  
      {  
           foreach($_SESSION["barbershop"] as $keys => $values)  
           {  
                if($values["id_produk"] == $_POST["id_produk"])  
                {  
                     unset($_SESSION["barbershop"][$keys]);  
                     $message = '<label class="text-danger">Product Removed</label>';  
                }  
           }  
      }  
      if($_POST["action"] == "quantity_change")  
      {  
           foreach($_SESSION["barbershop"] as $keys => $values)  
           {  
                if($_SESSION["barbershop"][$keys]['id_produk'] == $_POST["id_produk"])  
                {  
                     $_SESSION["barbershop"][$keys]['product_quantity'] = $_POST["quantity"];  
                }  
           }  
      }  
      $order_table .= '  
           '.$message.'  
           <table class="table table-bordered">  
                <tr>  
                     <th width="30%">Product Name</th>
                     <th width="40%">Deskripsi</th>  
                     <th width="10%">Quantity</th>  
                     <th width="20%">Price</th>  
                     <th width="15%">Total</th>  
                     <th width="5%">Action</th>  
                </tr>  
           ';  
      if(!empty($_SESSION["barbershop"]))  
      {  
           $total = 0;  
           foreach($_SESSION["barbershop"] as $keys => $values)  
           {  
                $order_table .= '  
                     <tr>  
                          <td>'.$values["nama_produk"].'</td>  
                          <td>'.$values["deskripsi_produk"].'</td>  
                          <td><input type="text" name="quantity[]" id="quantity'.$values["id_produk"].'" value="'.$values["product_quantity"].'" class="form-control quantity" data-id_product="'.$values["id_produk"].'" /></td>  
                          <td align="right">Rp. '.$values["harga_produk"].'</td>  
                          <td align="right">Rp. '.number_format($values["product_quantity"] * $values["harga_produk"], 2,',','.').'</td>  
                          <td><button name="delete" class="btn btn-danger btn-xs delete" id="'.$values["id_produk"].'">Remove</button></td>  
                     </tr>  
                ';  
                $total = $total + ($values["product_quantity"] * $values["harga_produk"]);  
           }  
           $order_table .= '  
                <tr>  
                     <td colspan="3" align="right">Total</td>  
                     <td align="right">Rp. '.number_format($total, 2,',','.').'</td>  
                     <td></td>  
                </tr>  
                <tr>  
                     <td colspan="5" align="center">  
                          <form method="post" action="cart.php">  
                               <input type="submit" name="place_order" class="btn btn-warning" value="Place Order" />  
                          </form>  
                     </td>  
                </tr>  
           ';  
      }  
      $order_table = '</table>';  
      $output = array(  
           'order_table'     =>     $order_table,  
           'cart_item'          =>     count($_SESSION["barbershop"])  
      );  
      echo json_encode($output);  
 }  
 ?>

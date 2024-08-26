<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add prduct</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">

</head>
<body id="body_product">

    <div id="all">
      <div class="part left">
         <h1 id="logo_websit_dashboard">Homey Fine</h1>
         <ul id="menu_all">
            <li>
               <img src="../assets/icon/icons8-dashboard-50.png" id="image_dashboard" name="image_dashboard" >
               <a href="{{url('viwe_User')}}" id="write_Dashboard">Dashboard</a><br>
            </li><br>
            <li>
               <img src="../assets/icon/icons8-product-50.png" id="image_Product" name="image_Product" >
               <a href="{{url('viwe_Prod')}}" id="write_Product">Product</a><br>
               <ul id="menu_add_edite">
                  <li><a href="" class="style_add_edite_delete">Add</a></li><br>
                  <li><a href="" class="style_add_edite_delete">Edite & Delete</a></li>
               </ul>
            </li><br>
            <li>
               <img src="../assets/icon/icons8-menu-50.png" id="image_Section" name="image_Section" >
               <a href="" id="write_Section">Section</a><br>
               <ul id="menu_add_edite" >
                  <li><a href="" class="style_add_edite_delete">Add</a></li><br>
                  <li><a href="" class="style_add_edite_delete">Edite & Delete</a></li>
               </ul>
            </li><br>
            <li>
               <img src="../assets/icon/icons8-user-50.png" id="image_User" name="image_User" >
               <a href="" id="write_User">User</a><br>
               <ul id="menu_add_edite">
                  <li><a href="" class="style_add_edite_delete">Add</a></li><br>
                  <li><a href="" class="style_add_edite_delete">Edite & Delete</a></li>
               </ul>
            </li><br>
            <li>
               <img src="../assets/icon/icons8-statistics-50.png" id="image_Statistics" name="image_Statistics" >
               <a href="" id="write_Statistics">Statistics</a><br>
            </li><br>
            <li>
               <img src="../assets/icon/icons8-invoice-50.png" id="image_Invoice" name="image_Invoice" >
               <a href="" id="write_Invoice">Invoice</a><br>
            </li>
         </ul>
         <img src="../assets/icon/icons8-log-out-64.png" id="image_logout" name="image_Exit" >
         <a href="" id="write_logout">Log out</a><br>
     </div>
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">Add Product</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>

            <form action="{{url('add_product')}}" method="post" enctype="multipart/form-data" >
                @csrf
               <div  id="part_all">
                  <div class="part_input">
                  <label for="">Product Name</label><br>
                  <input type="text" name="product_add_name" id="product_add_name"  placeholder="Product Name"><br>
                  <label id="label_product_price">Product Price</label><br>
                  <input type="text" name="product_add_price" id="product_add_price" placeholder="Product Price"><br>
                  <label id="label_description">Description</label><br>
                  <textarea name="product_add_description" claas="grid_input" id="product_add_description" placeholder="Description"></textarea>
                  </div>
                  <div class="part_input">
                  <label for="">Product Image</label><br>
                  <input type="file" name="product_add_image"  id="product_add_image" placeholder="Product Image"><br>
                  <label id="lable_section">Section</label><br>

                  <select name="section_id"  id="section_product_add_id" placeholder="Section">
                    @foreach ($sec as $s)
                     <option value="{{$s->id}}">{{$s->Section_Name}}</option>
                     @endforeach
                  </select><br>

                  </div>
                  <div class="part_input">
                  <label for="">Color</label><br>
                  <input type="text" name="product_add_color" claas="input3" id="product_add_color" placeholder="Color"><br>
                  <label id="label_size">Size</label><br>
                  <input type="text" name="product_add_size" claas="input3" id="product_add_size" placeholder="Size"><br>
                  <button type="submit" claas="" id="submit_add_product">Add</button>
                  </div>
                 </div>
            </form>

            <h3 id="add_product_title_table">Product Table</h3>

               <table  id="add_product_tuble" >
                  <tr>
                     <th class="column_id_product">Id</th>
                     <th class="th_product">Product Name</th>
                     <th class="th_product">Product Price</th>
                     <th class="th_product">Product Image</th>
                     <th class="th_product">Section Id</th>
                     <th class="th_product">Size</th>
                     <th class="th_product">Color</th>
                     <th class="column_size_product">Description</th>
                  </tr>
                  @foreach ($prod as $p)
                  <tr>
                     <td class="column_id_product">{{$p->id}}</td>
                     <td class="td_product">{{$p->Product_Name}}</td>
                     <td class="td_product">{{$p->Product_Price}}</td>
                     <td class="td_product">{{$p->Product_Imge}}</td>
                     <td class="td_product">{{$p->Section_ID}}</td>
                     <td class="td_product">{{$p->Size}}</td>
                     <td class="td_product">{{$p->Color}}</td>
                     <td class="column_size_product">{{$p->Description}}</td>
                     @endforeach
                  </tr>

              </table>

        </div>

    </div>
</body>
</html>

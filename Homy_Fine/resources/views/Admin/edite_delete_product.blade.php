<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edite and delete product</title>
    <link rel="stylesheet" href="../assets/css/style project.css">
    <link rel="icon" href="../assets/icon/icons8-edit-62-removebg-preview.png"/>
</head>
<body id="body_edite_and_delete_product">

    <div id="all">
        @include('nav_dashboard.test')

        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">D&E Product</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>
            <div class="container">
               <div class="overlay">
                  <form action="" method="get" >
                     <div  id="part_all_edite" class="form_edite_delete_product">
                        <div class="part_input_edite">
                        <label for=""><h3>Product Name</h3></label><br>
                        <input type="text" name="product_name_edite" class="input_name"  placeholder="Product Name"><br>
                        <label id="label_product_price_edite"><h3>Product Price</h3></label><br>
                        <input type="text" name="product_price_edite" class="input_price" placeholder="Product Price"><br>
                        <label id="label_description_edite"><h3>Description</h3></label><br>
                        <textarea name="product_description_edite" claas="grid_input" class="input_description" placeholder="Description"></textarea>
                        </div>
                        <div class="part_input_edite">
                        <label for=""><h3>Product Image</h3></label><br>
                        <input type="file" name="product_image_edite"  class="input_image" placeholder="Product Image"><br>
                        <label id="lable_section_edite"><h3>Section</h3></label><br>
                        <select name="section_product_id_edite"  class="input_section" placeholder="Section">
                           <option value="">asdasfasd</option>
                        </select><br>
                        </div>
                        <div class="part_input_edite">
                        <label for=""><h3>Color</h3></label><br>
                        <input type="text" name="product_color_edite" claas="input3" class="input_color" placeholder="Color"><br>
                        <label id="label_size_edite"><h3>Size</h3></label><br>
                        <input type="text" name="product_size_edite" claas="input3" class="input_size" placeholder="Size"><br>
                        <button type="submit"  class="submit_all">Edite</button>
                        </div>
                       </div>
                  </form>
               </div>
              <div  class="div_table_product">
                 <h3 id="title_table_ED_product">Product Table</h3>
                 <table  id="edite_delete_product_tuble" >
                    <tr>
                       <th class="column_id_product">Id</th>
                       <th class="th_product">Product Name</th>
                       <th class="th_product">Product Price</th>
                       <th class="th_product">Product Image</th>
                       <th class="th_product">Section Id</th>
                       <th class="th_product">Size</th>
                       <th class="th_product">Color</th>
                       <th class="th_product">Description</th>
                       <th class="th_product">Active</th>
                       <th class="column_size_product">Active</th>
                    </tr>
                    <tr>
                       <td class="column_id_product">1</td>
                       <td class="td_product">asdfafasd</td>
                       <td class="td_product">1122222233</td>
                       <td class="td_product">sadfsdf</td>
                       <td class="td_product">dsfdsf</td>
                       <td class="td_product">dsfdsf</td>
                       <td class="td_product">dsfdsf</td>
                       <td class="td_product">dsfdsf</td>
                       <td class="td_product"><a href="#part_all_edite"  name="button_edite_product"><img class="button_table" id="button_edite_product" src="../assets/icon/icons8-edit-62-removebg-preview.png" alt=""></a></td>
                       <td class="column_size_product"><a href=""  name="button_delete_product"><img class="button_delete"  src="../assets/icon/icons8-delete-48 (1).png" alt=""></a></td>
                    </tr>
                </table>
              </div>
            </div>
         </div>

        <script src="../assets/java script/file java script.js"></script>
    </div>

</body>
</html>

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
        @include("nav_dashboard.test")
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
                  <input type="text" name="Product_Name" id="product_add_name"  placeholder="Product Name"><br>
                  <label id="label_product_price">Product Price</label><br>
                  <input type="text" name="Product_Price" id="product_add_price" placeholder="Product Price"><br>
                  <label id="label_description">Description</label><br>
                  <textarea name="Description" claas="grid_input" id="product_add_description" placeholder="Description"></textarea>
                  </div>
                  <div class="part_input">
                  <label for="">Product Image</label><br>
                  <input type="file" name="imge"  id="product_add_image" placeholder="Product Image"><br>
                  <label id="lable_section">Section</label><br>

                  <select name="Section_ID" id="section_product_add_id" placeholder="Section" >
                    @foreach ($sec as $s)
                     <option value="{{$s->id}}">{{$s->Section_Name}}</option>
                     @endforeach
                  </select><br>

                  </div>
                  <div class="part_input">
                  <label for="">Color</label><br>
                  <input type="text" name="Color" claas="input3" id="product_add_color" placeholder="Color"><br>
                  <label id="label_size">Size</label><br>
                  <input type="text" name="Size" claas="input3" id="product_add_size" placeholder="Size"><br>
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
                  @foreach ($product as $p)
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

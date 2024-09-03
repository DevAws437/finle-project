<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body id="body_product">

    <div id="all">
        @include("nav_dashboard.test")
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">Product</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>


            <h3 id="title_table_product">Product Table</h3>

               <table id="table_scr" class="product_tuble" >
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

                  </tr>
                  @endforeach

              </table>
              <script src="assets/script.js"></script>

        </div>

    </div>
</body>
</html>

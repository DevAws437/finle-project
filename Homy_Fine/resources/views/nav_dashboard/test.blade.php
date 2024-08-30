<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
                 <li><a href="{{url('add_Prodcut_view')}}" class="style_add_edite_delete">Add</a></li><br>
                 <li><a href="" class="style_add_edite_delete">Edite & Delete</a></li>
              </ul>
           </li><br>
           <li>
              <img src="../assets/icon/icons8-menu-50.png" id="image_Section" name="image_Section" >
              <a href="{{url('viwe_Sections')}}" id="write_Section">Section</a><br>
              <ul id="menu_add_edite" >
                 <li><a href="{{url('add_Sections_viwe')}}" class="style_add_edite_delete">Add</a></li><br>
                 <li><a href="" class="style_add_edite_delete">Edite & Delete</a></li>
                 <li><a href="" class="style_add_edite_delete">Add Image Scrole</a></li>
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
</body>
</html>

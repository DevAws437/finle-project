<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body id="body_dashboard">

    <div id="all">
      <div class="part left">
         <h1 id="logo_websit_dashboard">Homey Fine</h1>
         <ul id="menu_all">
            <li>
               <img src="../assets/icon/icons8-dashboard-50.png" id="image_dashboard" name="image_dashboard" >
               <a href="" id="write_Dashboard">Dashboard</a><br>
            </li><br>
            <li>
               <img src="../assets/icon/icons8-product-50.png" id="image_Product" name="image_Product" >
               <a href="" id="write_Product">Product</a><br>
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
                <h1 id="total_dashboard">Dashboard</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>

            <div id="All_statistics">
                <header id="The_first_statistic">
                  <img src="../assets/icon/icons8-user-50.png" class="icon_dashboard" alt="">
                  <h2 class="title_dive_dashboard">Number of users</h2>
                  <p class="statistise_dashboard"><b>dasdasfadfadasda</b></p>
                </header>
                <header id="The_second_statistic">
                  <img src="../assets/icon/icons8-sales-64.png" class="icon_dashboard" id="icon_product_div">
                  <h2 class="title_dive_dashboard">Most popular product</h2>
                  <p class="statistise_dashboard"><b>dasdasfadfadasda</b></p>
                </header>
                <header id="The_third_statistic">
                  <img src="../assets/icon/icons8-money-50 (1).png" class="icon_dashboard" alt="">
                  <h2 class="title_dive_dashboard">Sales</h2>
                  <p class="statistise_dashboard"><b>dasdasfadfadasda</b></p>
                </header>
                <header id="The_fourth_statistic">
                  <img src="../assets/icon/icons8-product-50.png" class="icon_dashboard" alt="">
                  <h2 class="title_dive_dashboard">Number of products</h2>
                  <p class="statistise_dashboard"><b>dasdasfadfadasda</b></p>
                </header>
            </div>
            <h3 id="title_table">user table</h3>

               <table  id="user_tuble" >
                  <tr>
                     <th class="column_id">Id</th>
                     <th>Full Name</th>
                     <th>Number</th>
                     <th>Email</th>
                     <th>Adress</th>
                     <th class="column_type">Type</th>
                  </tr>
                  @foreach ($user as $u)
                  <tr>
                     <td class="column_id">{{$u->id}}</td>
                     <td >{{$u->name}}</td>
                     <td >{{$u->phone}}</td>
                     <td >{{$u->email}}</td>
                     <td >{{$u->adress}}</td>
                     <td class="column_type">{{$u->usertype}}</td>
                  </tr>
                  @endforeach
              </table> 

        </div>

    </div>
</body>
</html>

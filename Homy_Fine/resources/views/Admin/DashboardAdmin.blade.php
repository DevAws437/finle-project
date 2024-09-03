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
        @include("nav_dashboard.test")
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
            <h3 id="title_table" id="tuble">user table</h3>

               <table id="table_scr"  class="user_tuble" >
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
              <script src="assets/script.js"></script>

        </div>

    </div>
</body>
</html>

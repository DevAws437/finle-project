<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
    <link rel="icon" href="../assets/icon/icons8-invoice-50.png"/>
</head>
<body id="body_dashboard">

    <div id="all">
        @include("nav_dashboard.test")
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">Invoice</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>

            <h3 id="title_table_invoice">Invoice table</h3>

               <table id="table_scr" class="invoice_tuble" >
                  <tr>
                     <th class="column_id">Id</th>
                     <th>Total amount</th>
                     <th>Payment method</th>
                     <th>Bill status</th>
                     <th>Shopping Card</th>
                     <th class="column_type">user</th>
                  </tr>
                  @foreach ($bill as $b)


                  <tr>
                     <td class="column_id">{{$b->id}}</td>
                     <td >{{$b->Total_amount}}</td>
                     <td >{{$b->Payment_method}}</td>
                     <td >{{$b->Bill_status}}</td>
                     <td >{{$b->shoppingCart_id}}</td>
                     <td class="column_type">{{$b->user_id}}</td>
                  </tr>
                  @endforeach
              </table>
              <script src="assets/script.js"></script>

        </div>

    </div>
</body>
</html>

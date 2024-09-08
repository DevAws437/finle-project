<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
    <link rel="icon" href="../assets/icon/icons8-user-50.png"/>
</head>
<body id="body_dashboard">

    <div id="all">
      @include('nav_dashboard.test')

        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">User</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>
            
            <h3 id="page_title_table">User table</h3>
            
               <table  id="page_user_tuble" >
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit & Delete User</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
    <link rel="icon" href="../assets/icon/icons8-edit-62-removebg-preview.png"/>
</head>
<body id="body_dashboard">

    <div id="all">
      @include("nav_dashboard.test")
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">E&D User</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>
            
            <div class="container">
               <div class="overlay">
                  <form action="" method="get" class="from_edit_user">
                     <div  id="part_all_edite" >
                        <div class="part_input_edite">
                        <label for=""><h3>User Name</h3></label><br>
                        <input type="text" name="user_name_edite" class="input_name"  placeholder="Full Name"><br>
                        <label id="label_product_price_edite"><h3>Number</h3></label><br>
                        <input type="text" name="user_nuber_edite" class="input_price" placeholder="Enter Number"><br>
                        </div>
                        <div class="part_input_edite">
                        <label for=""><h3>Email</h3></label><br>
                        <input type="email" name="user_email_edite"  class="input_image" placeholder="Enter Email"><br>
                        <label id="lable_section_edite"><h3>Type</h3></label><br>
                        <select name="user_edite"  class="input_section" placeholder="type">
                           <option value="">asdasfasd</option>
                        </select><br>
                        </div>
                        <div class="part_input_edite">
                        <label for=""><h3>Adress</h3></label><br>
                        <input type="text" name="user_adress_edite"  class="input_color" placeholder="Enter Adress"><br>
                        <button type="submit"  class="submit_all" id="submit_all_edit_user">Edite</button>
                        </div>
                       </div>
                  </form>
               </div>
               <div  class="div_table_product">
                  <h3 id="edit_user_title_table">User table</h3>
            
                  <table  id="page_edit_user_tuble" >
                     <tr>
                        <th class="column_id">Id</th>
                        <th class="th_user_edit">Full Name</th>
                        <th class="th_user_edit">Number</th>
                        <th class="th_user_edit">Email</th>
                        <th class="th_user_edit">Adress</th>
                        <th class="th_user_edit">Active</th>
                        <th class="column_type" id="column_Description_user_edite">Active</th>
                     </tr>
                     @foreach ($user as $u)
                     <tr>
                        <td class="column_id">{{$u->id}}</td>
                        <td class="td_user_edit">{{$u->name}}</td>
                        <td class="td_user_edit">{{$u->phone}}</td>
                        <td class="td_user_edit">{{$u->email}}</td>
                        <td class="td_user_edit">{{$u->adress}}</td>
                        <td class="td_edite_section"><button type="submit" class="button_edite_product" name="button_edite_product">edite</button>
                        <td class="column_Description_section_edite" id="column_Description_user_edite"><a href="{{url('delet_user',$u->id)}}"  name="button_delete_user"><img class="button_delete" id="button_delete_user" src="../assets/icon/icons8-delete-48 (1).png" alt=""></a></td>
                     </tr>
                     @endforeach
                 </table>
               </div>
               
            </div>
            <script src="assets/css/main.js"></script>
        </div>
      
    </div> 
</body>
</html>
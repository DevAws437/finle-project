<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edite and delete Section</title>
    <link rel="stylesheet" href="../assets/css/style project.css">
    <link rel="icon" href="../assets/icon/icons8-edit-62-removebg-preview.png"/>
</head>
<body id="body_edite_and_delete_product">

    <div id="all">
      @include('nav_dashboard.test')
      <!-- ************************************************************ -->
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">D&E Section</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search">
            </div>
            <div class="container">
               <div class="overlay">
                  <form action="" method="get" >
                     <div  id="part_all_edite" class="form_edite_delete_product">
                        <div class="part_input_edite">
                        <label for=""><h3>Section Name</h3></label><br>
                        <input type="text" name="section_name_edite" class="input_name"  placeholder="Section Name"><br>
                        </div>
                        <div class="part_input_edite">
                        <label for=""><h3>Section Image</h3></label><br>
                        <input type="file" name="section_image_edite"  class="input_image" placeholder="Section Image"><br>
                        </div>
                        <div class="part_input_edite">
                            <label id="label_description_edite_section"><h3>Description</h3></label><br>
                            <textarea name="section_description_edite"  class="input_description" id="input_description_e_section" placeholder="Description"></textarea>
                        <button type="submit"  class="submit_all" id="submit_all_section">Edite</button>
                        </div>
                       </div>
                  </form>
               </div>
              <div  class="div_table_product">
                 <h3 id="title_table_ED_section">Section Table</h3>
                 <table  id="edite_delete_section_tuble" >
                    <tr>
                       <th class="column_id_section">Id</th>
                       <th class="th_edite_section">Section Name</th>
                       <th class="th_edite_section">Section Image</th>
                       <th class="th_edite_section">Description</th>
                       <th class="th_edite_section">active</th>
                       <th class="column_Description_section_edite">active</th>
                    </tr>
                    <tr>
                        @foreach ( $section as $s )
                        <td class="column_id_section">{{$s->id}}</td>
                        <td class="td_section">{{$s->Section_Name}}</td>
                        <td class="td_section">{{$s->Product_Imge}}</td>
                        <td class="column_Description_section">{{$s->Description}}</td>
                       <td class="td_edite_section"><a href="#part_all_edite"  name="button_edite_product"><img class="button_table" id="button_edite_product" src="../assets/icon/icons8-edit-62-removebg-preview.png" alt=""></a></td>
                       <td class="column_Description_section_edite"><a href=""  name="button_delete_product"><img class="button_delete"  src="../assets/icon/icons8-delete-48 (1).png" alt=""></a></td>
                    </tr>
                    @endforeach
                </table>
              </div>
            </div>
         </div>

         <script src="../assets/java script/file java script.js"></script>
    </div>
</html>

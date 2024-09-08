<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>section</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
    <link rel="icon" href="../assets/icon/icons8-menu-50.png"/>
</head>
<body id="body_product">

    <div id="all">
   @include("nav_dashboard.test")
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">Section</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search" class="input_search">
            </div>

            <h3 id="title_table_section">Section Table</h3>

               <table name="table" class="section_tuble">
                  <tr>
                     <th class="column_id_section">Id</th>
                     <th class="th_section">Section Name</th>
                     <th class="th_section">Section Image</th>
                     <th class="column_Description_section">Description</th>
                  </tr>
                  <tr>
                    @foreach ( $section as $s )
                     <td class="column_id_section">{{$s->id}}</td>
                     <td class="td_section">{{$s->Section_Name}}</td>
                     <td class="td_section">{{$s->Product_Imge}}</td>
                     <td class="column_Description_section">{{$s->Description}}</td>

                  </tr>
                  @endforeach
              </table>
              <script src="assets/script.js"></script>

        </div>

    </div>
</body>
</html>

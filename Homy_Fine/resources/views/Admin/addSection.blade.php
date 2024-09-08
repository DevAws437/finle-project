
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add section</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
    <link rel="icon" href="../assets/icon/icons8-menu-50.png"/>
</head>
<body id="body_product">

    <div id="all">
        @include("nav_dashboard.test")
        <div class="part right">
            <div id="div_search">
                <h1 id="total_dashboard">Add Section</h1>
                <img src="../assets/icon/icons8-search-50.png " id="image_search" >
                <input type="text" name="input_search" id="input_search" placeholder="Search" class="input_search">
            </div>

            <form action="{{url('add_Section')}}" method="post" enctype="multipart/form-data">
                @csrf
               <div  id="part_all">
                  <div class="part_input">
                  <label for=""><b>Section Name</b></label><br>
                  <input type="text" name="Section_Name" id="product_add_name"  placeholder="Section Name"><br>

                  </div>
                  <div class="part_input">
                  <label for=""><b>Section Image</b></label><br>
                  <input type="file" name="Section_image"  id="product_add_image" placeholder="Section Image"><br>
                  </div>
                  <div class="part_input">
                     <label id="Section_label_description"><b>Description</b></label><br>
                     <textarea name="Description" claas="grid_input" id="Section_add_description" placeholder="Description"></textarea>

                  <button type="submit" claas="" id="submit_add_Secion">Add</button>
                  </div>
                 </div>
            </form>

            <h3 id="add_section_title_table">Product Table</h3>

            <table  id="table_scr" name="table" class="section_add_tuble">
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
                     <td class="td_section">{{$s->Section_image}}</td>
                     <td class="column_Description_section">{{$s->Description}}</td>
                  </tr>
                  @endforeach
            </table>

            <script src="assets/script.js"></script>

        </div>

    </div>



</body>

</html>

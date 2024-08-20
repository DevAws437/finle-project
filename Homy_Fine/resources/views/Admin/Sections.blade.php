<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            margin: 20px;
        }
        #inputcat{
            width: 200px;
        }
    </style>
</head>
  <body>
 <form action="{{url('addSection')}}" method="get">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Section_Name</label>
        <input type="text" class="form-control" id="inputcat" placeholder="Section_Name"  name="Section_Name" >
      </div>


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
        <input type="text" class="form-control" id="inputcat" placeholder="Description"  name="Description">
      </div>


      <button type="submit" class="btn btn-success">Add</button>

    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

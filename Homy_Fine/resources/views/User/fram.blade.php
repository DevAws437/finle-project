<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="CodeHim">
      <title> Product Preview Card Example </title>
      <!-- Style CSS -->
      <link rel="stylesheet" href="../assets/css/style_project.css">

   </head>
   <body>
      <!-- <header class="cd__intro">
         <h1> Product Preview Card Example </h1>
         <p> Product Preview Card </p>
         <div class="cd__action">
            <a href="https://www.codehim.com/html5-css3/ecommerce-product-card-design" title="Back to download and tutorial page" class="cd__btn back">Back to Tutorial</a>
         </div>
      </header> -->
      <!--$%adsense%$-->
      <main class="cd__main">
         @foreach ($viwe_fram as $v )
         <div class="container1">
         <form action="{{url('View_Shopping_cart',$v->id)}}" method="post">
      <div class="left-side">
         <input type="hidden" name="product_id" value='{{$v->id}}'>
         <input type="hidden" name="send_image" value='{{$v->Product_Imge}}'>
            <img src="../{{$v->Product_Imge}}" alt="" class="img-product" name="Product_Imge">
            {{-- @foreach ($users as $u)
               <input type="hidden" name="user_id" value='{{$u->id}}'>
            @endforeach --}}
      </div>
      <div class="right-side">
        <p id="perfume"  >PERFUME</p>
        <input type="hidden" name="send_p_name" value='{{$v->Product_Name}}'>
        <h1 id="header" name="Product_Name">{{ $v->Product_Name}}</h1>
        <input type="hidden" name="send_p_description" value='{{$v->Description}}'>
        <p id="description" name=""> {{ $v->Description}}</p>
        <div class="price" >
         <input type="hidden" name="send_p_price" value='{{$v->Product_Price}}'>
          <p id="number-discount" name="Product_Price">{{ $v->Product_Price}}$</p>
        </div>
        <button class="cart-btn">
          <svg width="15" height="16" xmlns="http://www.w3.org/2000/svg"><path d="M14.383 10.388a2.397 2.397 0 0 0-1.518-2.222l1.494-5.593a.8.8 0 0 0-.144-.695.8.8 0 0 0-.631-.28H2.637L2.373.591A.8.8 0 0 0 1.598 0H0v1.598h.983l1.982 7.4a.8.8 0 0 0 .799.59h8.222a.8.8 0 0 1 0 1.599H1.598a.8.8 0 1 0 0 1.598h.943a2.397 2.397 0 1 0 4.507 0h1.885a2.397 2.397 0 1 0 4.331-.376 2.397 2.397 0 0 0 1.12-2.021ZM11.26 7.99H4.395L3.068 3.196h9.477L11.26 7.991Zm-6.465 6.392a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Zm6.393 0a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Z" fill="#FFF"/></svg>
            <b id="btn-text">         <p class="btn-text">Add </p>  <p class="btn-text">cart</p>
            </b>
         </button>
      </div>
    </div>
   </form>
    @endforeach
   </body>
</html>

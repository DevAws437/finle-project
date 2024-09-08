<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/style_project.css">

</head>
<body>

    <section id="product">

        </section>
        @include('nav_dashboard.bar')

           <section class="slider-main">

            <div class="container">
                <div class="logo">
                    <a href="#"><h1>section handbage</h1></a>
                </div>
                <div class="slider-content-wrap">
                    <div class="slider-content">
                        <h2 class="heading-style-2"></h2>
                        <p>Active Noise Cancelling, Transparency Mode, Spatial Audio, Digital Crown for Volume Control. Bluetooth Headphones for iPhone </p>
                        <h3 class="heading-style-2">BAY NOW</h3>
                        <div class="social-icons">
                            <a href="#"><img src="https://www.yudiz.com/codepen/headphone-slider/instagram-icon.svg" alt="instagram"></a>
                            <a href="#"><img src="https://www.yudiz.com/codepen/headphone-slider/facbook-icon.svg" alt="facebook"></a>
                            <a href="#"><img src="https://www.yudiz.com/codepen/headphone-slider/twiter-icon.svg" alt="twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
              
            <div class="slider-images">
            @foreach ($product as $p1)
                <img class="slider-image" src="../{{$p1->Product_Imge}}" alt="headphone image">
            @endforeach
            </div>
            <div id="backgrounds">
                <div class="background" style="background: radial-gradient(50% 50% at 50% 50%, #C7F6D0 0%, #7CB686 92.19%);"></div>
                <div class="background" style="background: radial-gradient(50% 50% at 50% 50%, #D1E4F6 0%, #5F9CCF 100%);"></div>
                <div class="background" style="background: radial-gradient(50% 50% at 50% 50%, #FFB7B2 0%, #ED746E 100%);"></div>
                <div class="background" style="background: radial-gradient(50% 50% at 50% 50%, #D7D7D7 0%, yellow 100%);"></div>
                <div class="background" style="background: radial-gradient(50% 50% at 50% 50%, #6B6B6B 0%, #292929 100%);"></div>
            </div>
        </section>

        <svg width="100%">
            <text x="50%" y="100%">{{$section->Section_Name}}</text>
          </svg>

        <section class="grid_card">
            @foreach ($product as $p)

<form action="{{url('viwe_fram',$p->id)}}" method="post">
    @csrf
    <button id="openModalBtn" type="submit" style="border-style: none; background-color: #c7f6d000;     color: #5c1d9a;">
        <div class="card blue">
            <div class="product">
               <span class="number" >0{{$p->id}}</span>
                <input type="hidden" name="Product_Name" value="{{$p->Product_Name}}">
                <span class="sneakers" name="Product_Name"> Homy Fine

                </span>

                <input type="hidden" name="Product_Imge" value="{{$p->Product_Imge}}">
                <img src="../{{$p->Product_Imge}}" name="Product_Imge">
            </div>
            <div class="title">
                <h2 class="text-name-section"> <input class="title1" type="hidden" name="Product_Name" value="{{$p->Product_Name}}">
                    {{$p->Product_Name}}
                </h2>
            <br>

            <p><span type="hidden" class="tite" class="price" name="Product_Price">{{$p->Product_Price}}$</span></p>
            </div>
        </div>
    </button>
</form>

            @endforeach


        </section>



    <script src="../assets/css/main.js"></script>
</body>




<script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 5000,
        glare: true,
        'max-glare': 0.5,
    });
</script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style_project.css">
</head>
<body>

    <section id="product">

        </section>

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
                <img class="slider-image" src="assets/images/handbag green.png" alt="headphone image">
                <img class="slider-image" src="assets/images/handbag blue.png" alt="headphone image">
                <img class="slider-image" src="assets/images/handbag prupel.png" alt="headphone image">
                <img class="slider-image" src="assets/images/handbag-removebg-preview.png" alt="headphone image">
                <img class="slider-image" src="assets/images/handbag_balck-removebg-preview.png" alt="headphone image">
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
            <text x="50%" y="100%">handbag</text>
          </svg>


        <section class="grid_card">



        @foreach ($product as $p)
           <button id="openModalBtn" style="border-style: none; background-color: #c7f6d000;     color: #5c1d9a;">
            <div class="card blue">
                <div class="product">
                    {{-- <span class="number" >{{$p->id}}</span> --}}
                    <input type="hidden" name="Product_Name" value="{{$p->Product_Name}}">
                    <span class="sneakers" name="Product_Name">{{$p->Product_Name}}

                    </span>

                    <input type="hidden" name="Product_Imge" value="{{$p->Product_Imge}}">
                    <img src="{{$p->Product_Imge}}" name="Product_Imge">
                </div>
                <div class="title">
                    <h2> <input class="title1" type="hidden" name="Product_Name" value="{{$p->Product_Name}}">
                        {{$p->Product_Name}}
                    </h2>
                <br>
                <p><span type="hidden" class="tite" class="price" name="Product_Price">{{$p->Product_Price}}</span></p>
                </div>
            </div>

        </button>
        @endforeach




<!--
           <a href="product.html" >
            <div class="card blue" id="openModalBtn">
                <div class="product">
                    <span class="number">01</span>
                    <span class="sneakers">SNEAKERS</span>
                    <img src="assets/images/Tarmak_-_Shoes_-_men_s_women_s_basketball_shoes_se900_-_white_nba_brooklyn_nets_-_UK_7_-_EU_41-removebg-preview (1).png">
                </div>
                <div class="title">
                    <h2 class="title1">clothes</h2>
                <br>
                <p><span class="price">400$</span></p>
                </div>
            </div>
           </a> -->

        </section>



        <div id="myModal" class="modal">



                    <div class="container1">
                        <div class="left-side">
                          <img src="download (7).jpg" alt="" class="img-product">
                        </div>
                        <div class="right-side">
                            <span class="closeBtn">×</span>
                          <p id="perfume">PERFUME</p>
                          <h1 id="header">Gabrielle Essence Eau De Parfum</h1>
                          <p id="description">A floral, solar and voluptuous interpretation composed by
                                              Olivier Polge, Perfumer-Creator for the House of CHANEL</p>
                          <div class="price">
                            <h1 id="number-discount">$149.99</h1>

                          </div>
                          <button class="cart-btn">
                            <svg width="15" height="16" xmlns="http://www.w3.org/2000/svg"><path d="M14.383 10.388a2.397 2.397 0 0 0-1.518-2.222l1.494-5.593a.8.8 0 0 0-.144-.695.8.8 0 0 0-.631-.28H2.637L2.373.591A.8.8 0 0 0 1.598 0H0v1.598h.983l1.982 7.4a.8.8 0 0 0 .799.59h8.222a.8.8 0 0 1 0 1.599H1.598a.8.8 0 1 0 0 1.598h.943a2.397 2.397 0 1 0 4.507 0h1.885a2.397 2.397 0 1 0 4.331-.376 2.397 2.397 0 0 0 1.12-2.021ZM11.26 7.99H4.395L3.068 3.196h9.477L11.26 7.991Zm-6.465 6.392a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Zm6.393 0a.8.8 0 1 1 0-1.598.8.8 0 0 1 0 1.598Z" fill="#FFF"/></svg>
                              <b id="btn-text"> <p class="btn-text">Add </p>  <p class="btn-text">>cart</p>
                              </b>
                           </button>
                        </div>
                      </div>

        </div>





</body>

<script src="assets/css/main.js"></script>

<script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 5000,
        glare: true,
        'max-glare': 0.5,
    });
</script>
</html>

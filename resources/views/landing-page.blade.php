<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Toko Starlight Computer</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/csslider.css') }}">
    </head>

    <body>
    @include('partials.nav')

    @yield('content')
    <style>
div {
  background-image: url('/ecommerce-example/public/img/logback.png');
}
</style> 
<div class="landing-container">
    <h2>Selamat Datang Di toko kami </h2>
    <div class="slider-container">
        <div class="csslider" align:center >
     <input type="radio" name="slides" id="slides_1" checked />
     <input type="radio" name="slides" id="slides_2" />
     <input type="radio" name="slides" id="slides_3" />
     <input type="radio" name="slides" id="slides_4" />
     <input type="radio" name="slides" id="slides_N" />
     <ul>

         <li><a href="http://localhost/ecommerce-example/public/shop/vga30"><img src="/ecommerce-example/public/img/Slide1.png"></a></li>
         <li><img src="/ecommerce-example/public/img/Slide2.png"></li>
         <li><img src="/ecommerce-example/public/img/Slide3.png"></li>
         <li><img src="/ecommerce-example/public/img/Slide4.png"></li>
         <li>Content of slide 5/li>
        </ul>
     <div class="arrows">
         <label for="slides_1"></label>
         <label for="slides_2"></label>
         <label for="slides_3"></label>
         <label for="slides_4"></label>
         <label for="slides_N"></label>
         <label for="slides_1" class="goto-first"></label>
         <label for="slides_N" class="goto-last"></label>
     </div>
     <div class="navigation">
 	    <div>
         	<label for="slides_1"></label>
         	<label for="slides_2"></label>
         	<label for="slides_3"></label>
         	<label for="slides_4"></label>
         	<label for="slides_N"></label>
             </div>
     </div>
     </div>
 </div> <!-- end slider-container -->
               

                </div> <!-- end top-nav -->
               
       
            </header>

            <div class="featured-section">
            
            


                <div class="containers">
                    <h1 class="text-center">Toko Starlight Computer</h1>

                    <p class="section-description"></p>

                    <div class="text-center button-container">
                        <a href="#" class="button">Featured</a>
                        <a href="#" class="button">On Sale</a>
                    </div>

                    {{-- <div class="tabs">
                        <div class="tab">
                            Featured
                        </div>
                        <div class="tab">
                            On Sale
                        </div>
                    </div> --}}

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">View more products</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            @include('partials.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/app.js"></script>

    </body>

</html>

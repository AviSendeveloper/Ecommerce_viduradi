<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="user/assets/css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="user/assets/css/header-style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="user/assets/css/header-responsive.css" />
   <link rel="stylesheet" href="user/assets/css/bootsnav.css">
    <link rel="stylesheet" href="user/assets/css/banner.css">
   <link rel="stylesheet" href="user/assets/css/style.css">
   <link rel="stylesheet" href="user/assets/css/header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
<body>
  <?php use App\Models\category; ?>
  <?php use App\Models\Product; ?>
  <?php use App\Models\Cart; ?>
  <?php use App\Models\SpecialDiscount; ?>
  <?php $totalArr = Cart::userCartTotalPrice(); ?>
  {{-- <h1>{{gettype($totalArr['special_discount'])}}</h1> --}}
@include('section/header') 

  @include('section/banner') 
  @include('section/category') 
  @include('section/arrivals') 
 
 <section>
    <div class="cata">
        <h2>Top Selling</h2>
    </div>
    <div class="container-fluid">


        <div class="SlickCarousel productlist">
          @foreach($featuredArrayChunk as $key => $featuredItems)
           @foreach($featuredItems as $featuredItem)
           <?php $category = category::where('id', $featuredItem['category_id'])->first(); 
                  // echo "<pre>";print_r($featuredItem['category_id']);die;
           ?>
            <?php $discounted_price = Product::getDiscountedPrice($featuredItem['id']); ?>
            <div class="ProductBlock">
                <div class="Content">
                    <div class="img-fill img-hig">
                      <a href="/product/{{$featuredItem['id']}}">
                        <img src="{{asset('product/image')}}/{{$featuredItem['main_image']}}" alt="">
                      </a>
                        
                    </div>
                    <h5 class="text-left">{{$featuredItem['product_name']}}</h5>
                    <p class="listprice">{{$category['category_name']}}</p>
                    <div class="row">
                        @if($discounted_price>0)<div class="col-12 special-products_pricing"><span 
                                class="offer fsemibold">₹ {{$discounted_price}}</span> <span  class="product-price"
                                style="text-decoration: line-through; color: rgb(204, 204, 204);">₹ {{$featuredItem['product_price']}}</span> <span
                                class="percentage-off">{{$featuredItem['product_discount']}}% OFF</span></div>
                                @else
                                <div class="col-12 special-products_pricing"><span 
                                class="offer fsemibold">₹ {{$featuredItem['product_price']}}</span></div>
                                @endif
                    </div>
                </div>
            </div>
            @endforeach
            @endforeach

        </div>
    </div>
</section>
  @include('section/footer_top') 
  @include('section/footer') 
   
  
  
  
  
  
  <script>
$(function() {
  
  $('.carousel').carousel({
    interval: 4000
  });
  
});


$(document).ready(function() {
    $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
  });

  $(window).resize(function() {
    $('.carousel .carousel-caption').css('zoom', $('.carousel').width()/1250);
  });</script>
  <script>
      $(document).ready(function(){
  $(".SlickCarousel").slick({
    rtl:false, // If RTL Make it true & .slick-slide{float:right;}
    autoplay:true, 
    autoplaySpeed:5000, //  Slide Delay
    speed:800, // Transition Speed
    slidesToShow:3, // Number Of Carousel
    slidesToScroll:1, // Slide To Move 
    pauseOnHover:false,
    appendArrows:$(".Container .Head .Arrows"), // Class For Arrows Buttons
    prevArrow:'<span class="Slick-Prev"></span>',
    nextArrow:'<span class="Slick-Next"></span>',
    easing:"linear",
    responsive:[
      {breakpoint:801,settings:{
        slidesToShow:3,
      }},
      {breakpoint:641,settings:{
        slidesToShow:3,
      }},
      {breakpoint:481,settings:{
        slidesToShow:1,
      }},
    ],
  })
})
  </script>
  <script>
     jQuery('.card-slider').slick({
  slidesToShow:5,
  autoplay: true,
  slidesToScroll:1,
  dots: false,
  responsive:[
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

let cards = document.querySelectorAll('.card');
let card;
let modal = document.querySelector('.modal');
let closeButton = document.querySelector('.modal__close-button');
let page = document.querySelector('.page');
const cardBorderRadius = 20;
const openingDuration = 600; //ms
const closingDuration = 600; //ms
const timingFunction = 'cubic-bezier(.76,.01,.65,1.38)';

var Scrollbar = window.Scrollbar;
Scrollbar.init(document.querySelector('.modal__scroll-area'));


function flipAnimation(first, last, options) {
  let firstRect = first.getBoundingClientRect();
  let lastRect = last.getBoundingClientRect();
  
  let deltas = {
    top: firstRect.top - lastRect.top,
    left: firstRect.left - lastRect.left,
    width: firstRect.width / lastRect.width,
    height: firstRect.height / lastRect.height
  };
  
  return last.animate([{
    transformOrigin: 'top left',
    borderRadius:`
    ${cardBorderRadius/deltas.width}px / ${cardBorderRadius/deltas.height}px`,
    transform: `
      translate(${deltas.left}px, ${deltas.top}px) 
      scale(${deltas.width}, ${deltas.height})
    `
  },{
    transformOrigin: 'top left',
    transform: 'none',
    borderRadius: `${cardBorderRadius}px`
  }],options);
}

cards.forEach((item)=>{
  item.addEventListener('click',(e)=>{
    jQuery('.card-slider').slick('slickPause');
    card = e.currentTarget;
    page.dataset.modalState = 'opening';
    card.classList.add('card--opened');
    card.style.opacity = 0;
    document.querySelector('body').classList.add('no-scroll');

    let animation = flipAnimation(card,modal,{
      duration: openingDuration,
      easing: timingFunction,
      fill:'both'
    });

    animation.onfinish = ()=>{
      page.dataset.modalState = 'open';
      animation.cancel();
    };
  });
});

closeButton.addEventListener('click',(e)=>{
  page.dataset.modalState = 'closing';
  document.querySelector('body').classList.remove('no-scroll');
  
  let animation = flipAnimation(card,modal,{
    duration: closingDuration,
    easing: timingFunction,
    direction: 'reverse',
    fill:'both'
  });

  animation.onfinish = ()=>{
    page.dataset.modalState = 'closed';
    card.style.opacity = 1;
    card.classList.remove('card--opened');
    jQuery('.card-slider').slick('slickPlay');
    animation.cancel();
  };
});
  </script>

<!-- <script src="user/assets/js/jquery-3.2.1.min.js"></script> -->
    <!-- <script src="user/assets/js/popper.min.js"></script> -->
    <!-- <script src="user/assets/js/bootstrap.min.js"></script> -->
   
    <script src="user/assets/js/jquery.superslides.min.js"></script>
    <script src="user/assets/js/bootstrap-select.js"></script>
    <script src="user/assets/js/inewsticker.js"></script>
    <script src="user/assets/js/bootsnav.js"></script>
    <script src="user/assets/js/images-loded.min.js"></script>
    <script src="user/assets/js/isotope.min.js"></script>
    <script src="user/assets/js/owl.carousel.min.js"></script>
    <script src="user/assets/js/baguetteBox.min.js"></script>
    <script src="user/assets/js/form-validator.min.js"></script>
    <script src="user/assets/js/contact-form-script.js"></script>
    <script src="user/assets/js/custom.js"></script>

</body>

</html>
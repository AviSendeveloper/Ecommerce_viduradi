  <?php use App\Models\slider; ?>
<section class="ffdfgfg_12">
<div class="carousel slide carousel-fade " id="featured">
     
    
     <ol class="carousel-indicators">
       <li data-target="#featured" data-slide-to="0" class="active indicator"></li>
       <li data-target="#featured" data-slide-to="1" class="indicator"></li>
       <li data-target="#featured" data-slide-to="2" class="indicator"></li>
     </ol>
    
     <div class="carousel-inner">
        <?php $slider = slider::sliders(); ?>
          <?php 
              use App\Models\HomePageCustomization;
              $homepageModel = new HomePageCustomization;
              $permission = $homepageModel->permissionList();
          ?>
        @if ($permission['slider'] == 1)
          @foreach($slider as $key=>$sliders)
            <div class="item @if ($key==0) active @endif">
              <img class="carousel-image" src="{{asset('slider/image')}}/{{$sliders['image']}}" alt="banner 3">
              <div class="carousel-caption animated fadeInUp">
                <span>@if(isset($sliders['caption'])){{$sliders['caption']}}@endif</span>
              </div>
            
            </div>
          @endforeach
        @endif
     </div>
     
     <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left text-red blink-soft"><i class="fad fa-angle-double-left"></i></span>
     </a>
     
     <a class="right carousel-control" href="#featured" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right text-red blink-soft"><i class="fad fa-angle-double-right"></i></span>
     </a>
    </div>
</section>
<html>
<section class="full-screen-responsive">
    <div class="cata">
        <h2>CATEGORIES</h2>
    </div>
    <?php 
    use App\Models\category;
    $allcategory = category::allcategory();
        //   echo "<pre>";print_r($allcategory);die;
            ?>
    <div class="container-fluid">
   
            <div class="row">
                <?php 
                $count1 = 0;
                $count2 = 1; ?>
                @foreach($allcategory as $category)
                    {{-- $count1 start from 0 --}}
                    {{-- $count2 start from 1 --}}
                    <div class="
                            @if($count1==0 || $count1%6==0) col-md-6 col-lg-6 col-sm-6 @elseif ($count2%6==0) col-md-6 col-lg-6 col-sm-6 @else col-md-6 col-lg-3 col-sm-6 @endif
                        " style="margin-bottom: 20px;">
                        <div class="zoom-effect-container">
                            <div class="image-card">
                                <a href="/{{$category['url']}}"><img src="{{asset('category/image')}}/{{$category['category_image']}}" alt=""></a>
                            </div>
                            <div class="product-title">
                                <h4>{{$category['category_name']}}</h4>
                                {{-- (count1:{{ $count1 }}, count2:{{ $count2 }}) --}}
                            </div>
                        </div>
                    </div>
                    <?php $count2++; 
                          $count1++;
                    ?>
                @endforeach 
            </div>
            <br>
    
    </div>
</section>
<section class="catagory-mobile-responsive">
    <div class="cata">
        <h2>CATEGORIES</h2>
    </div>
    <div class="container-fluid">
        <div class="owl-carousel owl-theme">
                    @foreach($allcategory->chunk(2) as $categories)
                        <div class="item mobile-catagory">      
                            @foreach ($categories as $category)
                                <img src="{{asset('category/image')}}/{{$category['category_image']}}" alt="">
                            @endforeach
                        </div>
                    @endforeach
        </div>
    </div>
</section>
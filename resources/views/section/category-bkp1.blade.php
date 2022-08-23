<section>
    <div class="cata">
        <h2>CATEGORIES</h2>
    </div>
    <?php 
    use App\Models\Section;
    $sections = Section::sections();
         // echo "<pre>";print_r($sections);die;
            ?>
    <div class="container-fluid">
         @foreach($sections as $section)
         @if(count($section['categories'])>0)
        <div class="row">
        <?php
            $count = 0;
            // echo "<pre>";print_r($count);
            ?>
             @foreach($section['categories'] as $category)
            <div class="@if($count % 5 ==0 )col-md-6 @else col-md-3 @endif @if($count%5 ==0 )col-lg-6 @else col-lg-3 @endif col-sm-12" style="margin-bottom: 20px;">

                <div class="zoom-effect-container">
                    <div class="image-card">
                        <a href="/{{$category['url']}}"><img src="{{asset('category/image')}}/{{$category['category_image']}}" alt=""></a>
                    </div>
                    <div class="product-title">
                        <h4>{{$category['category_name']}}</h4>
                    </div>
                </div>
               <?php $count++; ?>
            </div>
            @endforeach 
        </div>
        <br>
        @endif
        @endforeach
    </div>
</section>
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
             @foreach($section['categories'] as $category)
            <div class="col-md-4 col-lg-4 col-sm-12" style="margin-bottom: 20px;">

                <div class="zoom-effect-container">
                    <div class="image-card">
                        <a href="/{{$category['url']}}"><img src="{{asset('category/image')}}/{{$category['category_image']}}" alt=""></a>
                    </div>
                </div>

            </div>
            @endforeach 
        </div>
        <br>
        @endif
        @endforeach
    </div>
</section>
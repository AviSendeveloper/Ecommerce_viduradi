<?php use App\Models\category; ?>
<div class="row justify-content-center">
   <div class="col-lg-3">
      <div class="left-area">
         <h4 class="heading">Select Category Level *
         </h4>
      </div>
   </div>
   <div class="col-lg-6">
         <select class="input-field" name="parent_id">
         <option value="">Select</option>
         <?php
            if (isset($category)) {
               $selectedCategory = $category;
            } 
         ?>
            @foreach($getCategories as $category)
               <option value="{{$category['id']}}" @if (isset($selectedCategory['parent_id']) && $selectedCategory['parent_id'] == 0) selected @endif>&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;{{$category['category_name']}}</option>
               @foreach($category['subcategories'] as $subcategories)
                  <option value="{{$subcategories['id']}}" @if (isset($selectedCategory['parent_id']) && $selectedCategory['parent_id'] == $subcategories['id']) selected @endif disabled="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;---&nbsp;&nbsp;{{$subcategories['category_name']}}</option>
               @endforeach
            @endforeach
         
      </select>
   </div>
</div>


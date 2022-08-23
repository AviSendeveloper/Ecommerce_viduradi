<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function subcategories() {
    	return $this->hasMany('App\Models\category','parent_id')->where('status',1);
    }
    
    public static function allcategory() {
    	$allcategory = category::where(['parent_id'=>0,'status'=>1])->get();
    	return $allcategory;
    // 	$allcategory = json_decode(json_encode($allcategory), true);
    // 	echo "<pre>";print_r($allcategory);die;
    }

    public function section() {
        return $this->belongsTo('App\Models\Section', 'section_id');
    }

    public function parentcategory() {
        return $this->belongsTo('App\Models\category', 'parent_id');
    }

    public static function categoryDetails($url){
        $catDetails = category::select('id','parent_id','category_name','url')->with(['subcategories'=>
                        function($query){
                                $query->select('id','parent_id','category_name','url')->where('status', 1);
                        }])->where('url', $url)->first()->toArray();
        // dd($categroyDetails);die;
        if ($catDetails['parent_id'] == 0) {
            $breadcrumbs = '<li class="breadcrumbs-item"><a class="breadcrumbs-crumb"
            itemprop="url" href="'.$catDetails['url'].'"><span
            itemprop="title">'.$catDetails['category_name'].'</span></a></li>';
        }else {
            // show main and subcategory in breadcrumbs
             $parentCategory = category::select('category_name', 'url')->where('id', $catDetails['parent_id'])->first()->toArray();
             $breadcrumbs = '&nbsp;<li class="breadcrumbs-item"><a class="breadcrumbs-crumb"
             itemprop="url" href="'.$parentCategory['url'].'"><span
             itemprop="title">'.$parentCategory['category_name'].'</span></a></li><li class="breadcrumbs-item"><a class="breadcrumbs-crumb"
             itemprop="url" href="'.$catDetails['url'].'"><span
             itemprop="title">'.$catDetails['category_name'].'</span></a></li>';
        }
        $catIds = array();
        $catIds[] = $catDetails['id'];
        foreach ($catDetails['subcategories'] as $key => $subcat) {
            $catIds[] = $subcat['id'];
        }
        // dd($catIds);die;
        return array('catIds'=>$catIds, 'catDetails'=>$catDetails, 'breadcrumbs'=>$breadcrumbs);
    }

   
}

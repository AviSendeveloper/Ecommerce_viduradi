<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Section;

class IndexController extends Controller
{
    public function Index() {
    	$featureItemsCount = Product::where('is_featured', 'Yes')->count();
    	$featuredItem = Product::where('is_featured', 'Yes')->get()->toArray();
    	$featuredArrayChunk = array_chunk($featuredItem, 4);
    	// echo "<pre>";print_r($featuredArrayChunk);die;
    	// dd($featuredItem);die;
		// $sections = Section::sections();
		// foreach($sections as $section) {
        //     if(count($section['categories'])>0) {
        //         foreach($section['categories']->chunk(2) as $categories) {
		// 			$categories = json_decode(json_encode($categories));
		// 			print "<pre>";
        //             print_r($categories);
		// 			print "<hr>";
		// 		}
		// 	}
		// }
		// die;
    	return view('index')->with(compact('featuredArrayChunk','featureItemsCount'));
    }
}

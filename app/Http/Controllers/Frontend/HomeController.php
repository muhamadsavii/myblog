<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(Request $request)
    {
        return view('frontend.home.index');
    }


    public function content(Request $request)
    {
    	$data = $request->all();
    	$cat='';
    	if(isset($data['id'])){
	    	if($data['id']=='blog'){
	    		$cat = 'cd-icon-blog.png';
	    	}else if($data['id']=='tutorial'){
	    		$cat = 'cd-icon-tutorial.svg';
	    	}else if($data['id']=='galeri'){
	    		$cat = 'cd-icon-picture.svg';
	    	}
    	}

		$article = DB::table('articles');
		if($cat!=''){
			$article->where('category',$cat);
		}
		$article = $article->get();
        return view('frontend.home.content',['article'=>$article]);
    }

}

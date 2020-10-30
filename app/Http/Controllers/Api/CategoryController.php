<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Controllers\Controller;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return CategoryResource::collection(Category::where('id','<',15)->paginate());
        // return response()->json(['categories'=>$categories]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\roadmap;
use App\Models\social_networks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    public function index(){
        $populars = DB::table('populars')->get();
        $product = DB::table('product')->get();
        $social = DB::table('social_networks')->get();
        $carousels = DB::table('carousels')->get();
        $roadmap = DB::table('roadmaps')->get();
        $types = DB::table('types')->get();
        return view('index', ['populars' => $populars, 'product' => $product, 'social' => $social, 'carousels' => $carousels, 'roadmap' => $roadmap, 'types' => $types]);
    }

    public function about(){
        $social = DB::table('social_networks')->get();
        $populars = DB::table('populars')->get();
        return view('about', ['social' => $social, 'populars' => $populars]);
    }

    public function product(){
        $social = DB::table('social_networks')->get();
        $product = DB::table('product')->get();
        $games = DB::table('product')->where('category_id', '1')->get();
        $programs = DB::table('product')->where('category_id', '2')->get();
        $web = DB::table('product')->where('category_id', '3')->get();
        return view('product', ['social' => $social,'product' => $product ,'games' => $games, 'programs' => $programs, 'web' => $web]);
    }

    public function review(){
        $social = DB::table('social_networks')->get();
        $review = DB::table('reviews')->get();
        return view('review', ['social' => $social, 'review' => $review]);
    }
}

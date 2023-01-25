<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\NationalFootball;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class NationalFootballController extends Controller
{
    public function index(Request $i)
    {

        if (!$i->id) {
            $indextitle = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', 1)
                ->get();


            $posts = DB::table('national_footballs')
                ->where('categorieID', 1)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(5)
                ->get();


            $inter_posts = DB::table('national_footballs')
                ->where('categorieID', 2)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(5)
                ->get();



            $contenttopright = DB::table('national_footballs')
                ->select(['id', 'image', 'title'])
                ->where('categorieID', 1)->limit(1)
                ->get();

            $contenttopleftbox = DB::table('national_footballs')
                ->where('categorieID', 1)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(2)
                ->get();

            $cotentbottom = DB::table('national_footballs')
                ->where('categorieID', 1)
                ->select('id', 'image', 'title')
                ->latest('id')->limit(5)
                ->get();

            $catetapbox = DB::table('national_footballs')
                ->where('categorieID', 2)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(3)
                ->get();



            $menu = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', 1)
                ->get();

            $menu2 = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', 2)
                ->get();

            $menu3 = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', '>', 2)
                ->get();
        } else {
            $idi = Category::find($i);

            $indextitle = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', $i->id)
                ->get();


            $posts = DB::table('national_footballs')
                ->where('categorieID', 1)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(5)
                ->get();


            $inter_posts = DB::table('national_footballs')
                ->where('categorieID', 2)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(5)
                ->get();



            $contenttopright = DB::table('national_footballs')
                ->select(['id', 'image', 'title'])
                ->where('categorieID', $i->id)->limit(1)
                ->get();

            $contenttopleftbox = DB::table('national_footballs')
                ->where('categorieID', $i->id)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(2)
                ->get();

            $cotentbottom = DB::table('national_footballs')
                ->where('categorieID', $i->id)
                ->select('id', 'image', 'title')
                ->latest('id')->limit(5)
                ->get();

            $catetapbox = DB::table('national_footballs')
                ->where('categorieID', 2)
                ->select(['id', 'image', 'title'])
                ->latest('id')->limit(3)
                ->get();



            $menu = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', 1)
                ->get();

            $menu2 = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', 2)
                ->get();

            $menu3 = DB::table('categories')
                ->select(['id', 'categorieName'])
                ->where('id', '>', 2)
                ->get();
        }

        return view('index', compact(
            'menu',
            'menu2',
            'menu3',
            'posts',
            'inter_posts',
            'contenttopright',
            'contenttopleftbox',
            'cotentbottom',
            'catetapbox',
            'indextitle'
        )); //view 'index' is from posts.blade.php / compact 'posts' we declare about but compact spp string
    }


    public function insert()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        $NationalFootball = new NationalFootball;
        $NationalFootball->title = $request->input('title');
        $NationalFootball->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $request->file('image')->getClientOriginalName();
            $file->move('upload/nationalFootball/', $filename);
            $NationalFootball->image = $filename;
        }
        if ($request->hasFile('imageTop')) {
            $file = $request->file('imageTop');
            $imageNameWithExt = $request->file('imageTop')->getClientOriginalName();
            $filename = $imageNameWithExt;
            $file->move('upload/nationalFootball/', $filename);
            $NationalFootball->imageTop = $filename;
        }
        $NationalFootball->desTop = $request->input('desTop');
        if ($request->hasFile('imageMid')) {
            $file = $request->file('imageMid');
            $imageNameWithExt = $request->file('imageMid')->getClientOriginalName();
            $filename = $imageNameWithExt;
            $file->move('upload/nationalFootball/', $filename);
            $NationalFootball->imageMid = $filename;
        }
        $NationalFootball->desMid = $request->input('desMid');
        if ($request->hasFile('imageBottom')) {
            $file = $request->file('imageBottom');
            $imageNameWithExt = $request->file('imageBottom')->getClientOriginalName();
            $filename = $imageNameWithExt;
            $file->move('upload/nationalFootball/', $filename);
            $NationalFootball->imageBottom = $filename;
        }
        $NationalFootball->desBottom = $request->input('desBottom');
        $NationalFootball->categorieID = $request->input('cateID');
        $NationalFootball->save();
        return redirect()->back()->with('status', 'insert successfully');
    }

    public function categoriepage($id)
    {
        $posts = DB::table('national_footballs')
            ->where('categorieID', 1)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(5)
            ->get();
        $inter_posts = DB::table('national_footballs')
            ->where('categorieID', 2)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(5)
            ->get();

        $inf = NationalFootball::find($id);

        $catetap = DB::table('national_footballs')
            ->where('categorieID', 2)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(3)
            ->get();

        $id_of_cate = $inf->categorieID;
        $titlecate = Category::find($id_of_cate);


        $menu = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', 1)
            ->get();

        $menu2 = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', 2)
            ->get();

        $menu3 = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', '>', 2)
            ->get();


        return view('categorie', compact('inf', 'menu', 'menu2', 'menu3', 'posts', 'inter_posts', 'catetap', 'titlecate'));
    }


    public function search(Request $req)
    {

        $indextitle = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', 1)
            ->get();


        $posts = DB::table('national_footballs')
            ->where('categorieID', 1)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(5)
            ->get();


        $inter_posts = DB::table('national_footballs')
            ->where('categorieID', 2)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(5)
            ->get();

        $contenttopright = DB::table('national_footballs')
            ->select(['id', 'image', 'title'])
            ->where('categorieID', 1)->limit(1)
            ->get();

        $contenttopleftbox = DB::table('national_footballs')
            ->where('categorieID', 1)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(2)
            ->get();

        $cotentbottom = DB::table('national_footballs')
            ->where('categorieID', 1)
            ->select('id', 'image', 'title')
            ->latest('id')->limit(5)
            ->get();

        $catetapbox = DB::table('national_footballs')
            ->where('categorieID', 2)
            ->select(['id', 'image', 'title'])
            ->latest('id')->limit(3)
            ->get();



        $menu = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', 1)
            ->get();

        $menu2 = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', 2)
            ->get();

        $menu3 = DB::table('categories')
            ->select(['id', 'categorieName'])
            ->where('id', '>', 2)
            ->get();

        $search_title = $_GET[('txtsearch')];


        $search_info = DB::table('national_footballs')
            ->where('title', 'LIKE', '%' . $search_title . '%')
            ->get();


        return view('search', compact(
            'search_title',
            'search_info',
            'menu',
            'menu2',
            'menu3',
            'posts',
            'inter_posts',
            'contenttopright',
            'contenttopleftbox',
            'cotentbottom',
            'catetapbox',
            'indextitle'
        ));
    }
}

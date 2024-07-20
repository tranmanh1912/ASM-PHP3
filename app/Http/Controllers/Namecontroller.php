<?php

namespace App\Http\Controllers;
use App\Models\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NameController extends Controller
{
    public function index()
    {
        $hangs = DB::table('hangs')->get();
        $names = Name::all(); // Lấy tất cả sản phẩm
        return view('trangchu', compact('names', 'hangs')); // Truyền tất cả sản phẩm và danh mục vào view
    }
    
    
    

    public function sanpham()
    {
        $hangs = DB::table('hangs')->get();
        $names = Name::all();
        $highestPricedNames = DB::table('names')
            ->orderBy('price', 'desc')
            ->take(8)
            ->get();
        $lowestPricedNames = DB::table('names')
            ->orderBy('price', 'asc')
            ->take(8)
            ->get();
    
        return view('sanpham', compact('names','highestPricedNames', 'lowestPricedNames', 'hangs'));
    }
    



    public function create()
    {
        $hangs = DB::table('hangs')->get();
        return view('names.create', compact('hangs'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = [
            'tensp' => $request['tensp'],
            'anh' => $request['anh'],
            'price' => $request['price'],
            'soluong' => $request['soluong'],
            'category_id' => $request['category_id'],
        ];
        DB::table('names')->insert($data);
        return redirect()->route('name.index');
    }

    public function destroy($id)
    {
        DB::table('names')->delete($id);
        return redirect()->route('name.index');
    }

    public function edit($id)
    {
        $name = DB::table('names')
            ->where('id', $id)
            ->first();
        $hangs = DB::table('hangs')->get();
        return view('names.edit', compact('name', 'hangs'));
    }

    public function update(Request $request)
    {
        $data = [
            'tensp' => $request['tensp'],
            'anh' => $request['anh'],
            'price' => $request['price'],
            'soluong' => $request['soluong'],
            'category_id' => $request['category_id'],
        ];
        DB::table('names')
            ->where('id', $request['id'])
            ->update($data);
        return redirect()->route('name.index');
    }

    public function show($id)
    {
        $hangs = DB::table('hangs')->get();
        $name = DB::table('names')
            ->join('hangs', 'names.category_id', '=', 'hangs.id')
            ->where('names.id', $id)
            ->first();
        return view('show', compact('name', 'hangs'));
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
	/**
	 * 商品列表
	 * @return mixed
	 */
    public function index(){
    	return Product::paginate();
    }

	/**
	 * 商品详情
	 * @param $id
	 * @return mixed
	 */
    public function show($id) {
    	return Product::findOrFail($id);
    }
}

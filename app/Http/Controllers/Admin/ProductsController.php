<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Admin\Products\IndexRequest;

/**
 * 商品系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Admin
 */
class ProductsController extends Controller
{
    /**
     * 商品一覧画面/検索処理
     *
     * @param IndexRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(IndexRequest $request)
    {
        // keywordsがリクエストで渡された場合は検索処理
        if (isset($request->keywords)) {
            // スペース区切りのkeywordsを配列にする
            $keywords = mb_convert_kana($request->keywords, 'n', 'utf-8');
            $keywords = preg_replace('/　/', ' ', $keywords);
            $keywords = trim($keywords);
            $keywords = preg_replace('/\s(?=\s)/', '', $keywords);
            $aryKeywords = explode(' ', $keywords);

            // product_idとproduct_nameを分ける
            $product_ids = $product_names = [];
            foreach ($aryKeywords as $keyword) {
                if (is_numeric($keyword))   $product_ids[] = $keyword;
                else                        $product_names[] = $keyword;
            }

            $products = Product::whereIn('id', $product_ids)->WhereIn('name', $product_names, 'or')->paginate(10);
            $products->withPath('/admin/products?keywords=' . urlencode($request->keywords));

            return view('admin.products.index', [
                'products' => $products,
            ]);
        }

        return view('admin.products.index');
    }

    /**
     * 商品編集
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($product_id)
    {
        return view('admin.products.edit');
    }

    /**
     * 商品詳細
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($product_id)
    {
        $product = Product::where('id', $product_id)->first();

        return view('admin.products.detail', [
            'product' => $product,
        ]);
    }

    /**
     * 売上詳細
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales($product_id)
    {
        return view('admin.products.sales');
    }

    /**
     * 商品登録
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.products.add');
    }
}
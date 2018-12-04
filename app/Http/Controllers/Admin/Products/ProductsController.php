<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Admin\Products\IndexRequest;
use App\Http\Requests\Admin\Products\EditRequest;
use App\Http\Requests\Admin\Products\AddRequest;
use App\Models\ProductCategory;
use Auth;

/**
 * 商品系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Admin\Products
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
     * 商品詳細画面
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
     * 商品編集画面
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $productCategories = ProductCategory::all();

        return view('admin.products.edit', [
            'product' => $product,
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品編集処理
     *
     * @param EditRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEdit(EditRequest $request)
    {
        Product::where('id', $request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'product_category_id' => $request->category,
        ]);

        return redirect("/admin/products/edit/{$request->id}");
    }

    /**
     * 売上詳細画面
     *
     * @param $product_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sales($product_id)
    {
        return view('admin.products.sales');
    }

    /**
     * 商品登録画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        $productCategories = ProductCategory::all();

        return view('admin.products.add', [
            'productCategories' => $productCategories,
        ]);
    }

    /**
     * 商品登録処理
     *
     * @param AddRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdd(AddRequest $request)
    {
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'user_id' => Auth::user()->user_id,
            'product_category_id' => $request->category,
        ]);

        return redirect('/admin/products/add');
    }
}
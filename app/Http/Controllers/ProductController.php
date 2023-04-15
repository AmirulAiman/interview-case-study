<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public $productService;
    
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::all();
        return view('products.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        
        return view('products.form',[
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): RedirectResponse
    {
        try {
            $product = $this->productService->saveProduct($request);
            notify()->success("Create success!");
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            notify()->error("Failed to create new product!!");
            return redirect()->back()->with(['error' => 'Failed','msg' => $th->getMessage()]);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.form', [
            'brands' => $brands,
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        try {
            $product = $this->productService->updateProduct($request, $product);
            notify()->success("Update success!");
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            notify()->error('Failed to update');
            return redirect()->back()->with(['error' => 'Failed', 'msg' => $th->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

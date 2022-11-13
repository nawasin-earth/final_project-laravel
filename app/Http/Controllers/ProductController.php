<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return IlluminateHttpResponse

     */

    public function index()

    {

        $products = Product::latest()->paginate(5);

        return view('products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return IlluminateHttpResponse

     */

    public function create()

    {

        return view('products.create');

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  IlluminateHttpRequest  $request

     * @return IlluminateHttpResponse

     */

    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',

            'detail' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

        Product::create($input);

        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');

    }

    /**

     * Display the specified resource.

     *

     * @param  AppProduct  $product

     * @return IlluminateHttpResponse

     */

    public function show(Product $product)

    {

        return view('products.show',compact('product'));

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  AppProduct  $product

     * @return IlluminateHttpResponse

     */

    public function edit(Product $product)

    {

        return view('products.edit',compact('product'));

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  IlluminateHttpRequest  $request

     * @param  AppProduct  $product

     * @return IlluminateHttpResponse

     */

    public function update(Request $request, Product $product)

    {

        $request->validate([

            'name' => 'required',

            'detail' => 'required'

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }

        $product->update($input);

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  AppProduct  $product

     * @return IlluminateHttpResponse

     */

    public function destroy(Product $product)

    {

        $product->delete();

        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');

    }

}
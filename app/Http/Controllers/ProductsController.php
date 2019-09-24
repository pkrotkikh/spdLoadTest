<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    /**
     * Product list
     *
     * On this page, the user will be able to perform the following actions:
     * View existing product list;
     * Redirect to the certain product;
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        return view('products.index');
    }


    /**
     * @param $id
     *
     * On this page, the user will be able to perform the following actions:
     * Redirect to the comments list;
     * Redirect to "Make an order" page;
     * Add product to "Wish List"
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show($id)
    {
        return view('products.single');
    }

}

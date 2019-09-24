<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductsController extends Controller
{
    /**
     * Show products page.
     *
     * On this page, the admin will be able to perform the following actions:
     * View existing product list;
     * Redirect to the product creation page;
     * Delete products.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Product creation form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Product store
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function store(Request $request)
    {
        return view('admin.products.index');
    }

    /**
     * Product removal
     */

    public function destroy($id)
    {

    }
}

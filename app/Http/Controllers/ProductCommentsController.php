<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCommentsController extends Controller
{

    /**
     * @param $id
     *
     * Comments list
     *
     * On this page, the user will be able to perform the following actions:
     * Create comment
     * Rate comments of other users
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index($id)
    {
        return view('products.comments.index');
    }

    /**
     * @param $id
     * @param Request $request
     */

    public function store($id, Request $request)
    {

    }
}

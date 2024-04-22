<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User;

class TierPageControllerr extends Controller
{
    public function show()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(5);

        $companies = Company::orderBy('created_at', 'desc')->paginate(5);

        $comments = Comment::orderBy('created_at', 'asc')->paginate(100);

        $users = User::orderBy('created_at', 'desc')->paginate(5);

        return view('tierPage', [
            'products' => $products,
            'companies' => $companies,
            'comments' => $comments,
            'users' => $users
        ]);
    }

    public function create()
    {
        return view("/tierPage");
    }
}

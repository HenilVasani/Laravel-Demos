<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Yajra\DataTables\DataTables;

class SellerController extends Controller
{
    public function index()
    {
        return view('sellers.index');
    }

    public function getSellers()
    {
        $sellers = Seller::select(['seller_id', 'seller_name', 'seller_email', 'created_at']);

        return DataTables::of($sellers)
            ->addColumn('action', function ($seller) {
                return '<a href="/sellers/' . $seller->id . '">View</a>';
            })
            ->make(true);
    }
}

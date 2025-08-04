<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function dashboard()
 {
    $totalcategories = Category::count();
    $totalproducts = Product::count();
    $totalorders = Order::where('order_status','!=', 'Cancelled')->count();
    $pendingorders = Order::where('order_status', 'Pending')->count();
    $processingorders = Order::where('order_status', 'Processing')->count();
    $deliveredorders = Order::where('order_status', 'Delivered')->count();
    $cancelledorders = Order::where('order_status', 'Cancelled')->count();
    $totalusers = User::count();
    
    return view('dashboard',compact('totalcategories','totalproducts','totalorders','pendingorders','processingorders','deliveredorders','cancelledorders','totalusers'));
 }
}

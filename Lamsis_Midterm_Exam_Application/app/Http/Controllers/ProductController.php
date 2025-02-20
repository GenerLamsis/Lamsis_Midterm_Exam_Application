<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($gadget)
    {
        $products = [];

        switch ($Smartphone) {
            case 'Gadgets':
                $products = ['Infinix', 'Samsung', 'Nokia'];
                break;
            case 'Laptop':
                $products = ['Acer', 'Asus', 'Dell'];
                break;
            case 'Tablet':
                $products = ['Xiaomi', 'Samsung', 'Apple'];
                break;
            case 'Smart Watch':
                $products = ['Apple', 'Xiaomi', 'Samsung'];
                break;
            default:
                $products = ['No products available for this Gadget.'];
        }

        return view('products.index', compact('products'));
    }
}
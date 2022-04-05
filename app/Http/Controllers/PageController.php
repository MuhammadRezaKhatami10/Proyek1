<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        return view('index');
    }
    
    function toko() {
        return view('toko');
    }
    
    function cart() {
        return view('cart');
    }
    
    function checkout() {
        return view('checkout');
    }
    
    function gallery() {
        return view('gallery');
    }
    
    function mebel() {
        return view('mebel');
    }
    
    function shopDetail() {
        return view('shop-detail');
    }
    
    function shop() {
        return view('shop');
    }
    
    function wishlist() {
        return view('wishlist');
    }
    
    function contactUs() {
        return view('contact-us');
    }
    
}

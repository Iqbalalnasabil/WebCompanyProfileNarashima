<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Contact;
use App\Models\Review;
use App\Models\About;
use App\Models\Homepage;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        $review = Review::all();
        $contact = Contact::first();
        $about = About::first();
        $homepage = Homepage::first();

        return view('home.index', compact(
            'produk','review','contact','about','homepage',
        ));
    }
}

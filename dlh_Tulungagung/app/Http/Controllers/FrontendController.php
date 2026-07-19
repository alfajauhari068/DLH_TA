<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Download;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Agenda;
use App\Models\SkmScore;
use App\Models\Department;
use App\Models\Official;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $latestNews = News::with('categories')->latest('published_at')->take(3)->get();
        $galleries = Gallery::latest()->take(4)->get();
        $featuredServices = \App\Models\Service::where('is_featured', 1)->where('status', 'published')->take(4)->get();
        $programs = \App\Models\Program::latest('published_at')->take(3)->get();
        
        return view('guest.home', compact('latestNews', 'galleries', 'featuredServices', 'programs'));
    }

    public function profile()
    {
        // Try to find a specific 'profil' page, otherwise fallback to 'tentang-dlh', or first page.
        $page = Page::where('slug', 'profil')->orWhere('slug', 'tentang-dlh')->first();
        
        if (!$page) {
            $page = Page::first();
        }

        if ($page) {
            return view('frontend.page', compact('page'));
        }

        abort(404, 'Halaman profil belum tersedia.');
    }

    public function news()
    {
        $news = News::with('categories')->latest('published_at')->paginate(9);
        return view('frontend.news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $newsItem = News::with(['categories', 'author'])->where('slug', $slug)->firstOrFail();
        return view('frontend.news-detail', compact('newsItem'));
    }

    public function galleries()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('frontend.galleries', compact('galleries'));
    }

    public function galleryDetail($slug)
    {
        $gallery = Gallery::with('items')->where('slug', $slug)->firstOrFail();
        return view('frontend.gallery-detail', compact('gallery'));
    }

    public function documents()
    {
        $documents = Download::latest()->paginate(15);
        return view('frontend.documents', compact('documents'));
    }

    public function services()
    {
        $services = \App\Models\Service::where('status', 'published')->latest()->get();
        return view('frontend.services', compact('services'));
    }

    public function serviceDetail($slug)
    {
        $service = \App\Models\Service::where('slug', $slug)->firstOrFail();
        return view('frontend.service-detail', compact('service'));
    }

    public function agendas()
    {
        $agendas = Agenda::orderBy('start_date', 'asc')->paginate(10);
        return view('frontend.agendas', compact('agendas'));
    }

    public function skm()
    {
        $skmScores = SkmScore::orderBy('year', 'desc')->orderBy('period', 'desc')->get();
        return view('frontend.skm', compact('skmScores'));
    }

    public function officials()
    {
        $departments = Department::with(['officials.position', 'children.officials.position'])
            ->whereNull('parent_id')
            ->orderBy('sort_order', 'asc')
            ->get();
            
        return view('frontend.officials', compact('departments'));
    }

    public function ppid()
    {
        return view('frontend.ppid');
    }

    public function page($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('frontend.page', compact('page'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}

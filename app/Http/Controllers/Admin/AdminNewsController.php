<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsActivities;
use App\Services\NewsService;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function view()
    {
        $news = NewsActivities::paginate(5);

        return view('admin.dashboard.news.view', [
            'news' => $news,
        ]);
    }

    public function destroy(Request $request)
    {
        $new = NewsActivities::findOrFail($request->id);

        $new->delete();

        return redirect()->back()->with('success', 'News deleted successfully');
    }

    public function store(Request $request, NewsService $newsService)
    {
        $validate = $newsService->validation($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $newsService->create($request);

        if ($status) {
            return redirect()->route('admin.news')->with('success', 'News created successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
        }
    }

    public function create()
    {
        return view('admin.dashboard.news.create');
    }

    public function update(Request $request, string $id, NewsService $newsService)
    {
        $validate = $newsService->validationUpdate($request);

        if ($validate !== true) {
            return redirect()->back()->with('validation', $validate->messages());
        }

        $status = $newsService->update($request, $id);

        if ($status) {
            return redirect()->route('admin.news')->with('success', 'News updated successfully');
        } else {
            return redirect()->back()->with('error', 'Gagal membuat Carousel Image');
        }
    }

    public function edit(string $id)
    {
        $news = NewsActivities::findOrFail($id);

        return view('admin.dashboard.news.edit', [
            'news' => $news,
        ]);
    }
}

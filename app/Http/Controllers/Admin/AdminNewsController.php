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
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $newsService->create($request);

        if ($status) {
            handleSession(200, "Berhasil membuat News");
            return redirect()->route('admin.news');
        } else {
            handleSession(400, "Gagal membuat News");
            return redirect()->back()->withInput($request->all());
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
            handleSession(422, $validate->messages());
            return redirect()->back()->withInput($request->all());
        }

        $status = $newsService->update($request, $id);

        if ($status) {
            handleSession(200, "Berhasil memperbaharui News");
            return redirect()->route('admin.news');
        } else {
            handleSession(400, "Gagal memperbaharui News");
            return redirect()->back()->withInput($request->all());
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

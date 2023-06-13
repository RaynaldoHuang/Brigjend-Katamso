<?php

namespace App\Services;

use App\Models\NewsActivities;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewsService
{
    public function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function validationUpdate($request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        return true;
    }

    public function create($request)
    {
        $image = $request->file('image');

        DB::beginTransaction();

        try {
            $path = uploadFile($image, 'images/news');

            if (!$image) {
                DB::rollBack();
                return false;
            }

            $slug = str_replace(' ', '-', strtolower($request->title));

            NewsActivities::create([
                'title' => $request->title,
                'slug' => $slug,
                'content' => $request->content,
                'image' => $path,
            ]);


            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update($request, $id)
    {
        $image = $request->file('image');

        DB::beginTransaction();

        try {
            $news = NewsActivities::findOrFail($id);

            if ($image) {

                $path = $path = uploadFile($image, 'images/news', $news->image);

                if (!$path) {
                    DB::rollBack();
                    return false;
                }

                $news->title = $request->title;
                $news->content = $request->content;
                $news->image = $path;
            } else {
                $news->title = $request->title;
                $news->content = $request->content;
            }
            $news->save();

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}

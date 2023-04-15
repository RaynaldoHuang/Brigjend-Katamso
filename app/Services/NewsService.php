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
            $path = $this->uploadFile($image);

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

    public function uploadFile($file)
    {
        $path = null;

        if ($file) {
            $image = $file;
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/news');
            $image->move($destinationPath, $name);
            $path = '/images/news/' . $name;
        }

        return $path;
    }

    public function update($request, $id)
    {
        $image = $request->file('image');

        DB::beginTransaction();

        try {
            $news = NewsActivities::findOrFail($id);

            if ($image) {
                $oldFile = public_path($news->image);

                if (file_exists($oldFile)) {
                    unlink($oldFile);
                }

                $path = $this->uploadFile($image);

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

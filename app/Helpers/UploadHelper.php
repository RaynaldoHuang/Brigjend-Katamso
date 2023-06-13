<?php

function uploadFile($file, $destionation, $old = null)
{
    $path = null;

    if ($file) {
        $name = nameFile($file);
        $destinationPath = "storage/" . $destionation;
        $file->move($destinationPath, $name);
        $path = $destinationPath . $name;

        if ($old) {
            deletedFile($old);
        }
    }

    return $path;
}

//Membuat generate nama file dg format tahun bulan tanggal jam menit
function nameFile($file)
{
    if (isset($file)) {
        $extention = $file->getClientOriginalExtension();
        $nameFile = date('YmdHis') . '-' . strtoupper(Str::random(5)) . '.' . $extention;
        return '/' . $nameFile;
    }
}

// deleteFile if exists
function deletedFile($path)
{
    if ($path) {
        if (!str_contains($path, "image/") && !str_contains($path, "http:") && !str_contains($path, "https:")) {
            if (file_exists(public_path($path)) && $path) {
                unlink(public_path($path));
            }
        }
    }
}

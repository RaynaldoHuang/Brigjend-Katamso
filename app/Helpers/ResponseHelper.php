<?php

function handleSession(int $status, $message = null)
{
    if ($status == 200) {
        \Session::flash("success", $message ?? "Permintaan Anda berhasil");
    } else if ($status == 400) {
        \Session::flash("error", $message ?? "Terjadi kesalahan");
    } else if ($status == 404) {
        \Session::flash("error", $message ?? "Permintaan Anda tidak ditemukan");
    } else if ($status == 422) {
        \Session::flash("validation", $message ?? [["Harap isi form sesuai dengan ketentuan"]]);
    } else if ($status == 403) {
        \Session::flash("warning", $message ?? "Anda tidak memiliki akses valid untuk permintaan ini");
    } else {
        \Session::flash("success", $message ?? "Permintaan Anda berhasil..");
    }
}

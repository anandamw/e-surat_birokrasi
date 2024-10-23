<?php

if (!function_exists('kategori'))
{
    function kategori()
    {
        $kategori = new App\Models\Kategori;
        return $kategori::get();
    }
}

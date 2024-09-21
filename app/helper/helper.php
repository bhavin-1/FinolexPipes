<?php

use App\Models\Seo;
use Illuminate\Support\Facades\Request;

function seo()
{
    $segment =  Request::segment(1);
    $seo = Seo::select('title','keyword','description')->where('link', $segment)->first();
// dd($seo);
    return $seo;
}
?>
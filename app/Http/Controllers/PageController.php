<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page($postId, $commentId){
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    }

    public function articles($id){
        return "Halaman Artikel dengan ID " .$id;
    }
}

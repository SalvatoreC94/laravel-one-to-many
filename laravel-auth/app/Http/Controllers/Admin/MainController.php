<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        // Reindirizza alla lista dei progetti (pagina principale del portfolio)
        return redirect()->route('admin.projects.index');
    }
}

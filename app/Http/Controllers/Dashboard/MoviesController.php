<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Movies page logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class MoviesController extends Controller {

    /**
     * Render movies index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.movies.index');
    }
    
}
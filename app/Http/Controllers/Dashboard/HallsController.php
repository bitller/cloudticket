<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Halls page logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class HallsController extends Controller {

    /**
     * Render halls index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.halls.index');
    }
    
}
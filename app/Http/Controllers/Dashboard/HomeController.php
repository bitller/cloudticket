<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

/**
 * Index page logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class HomeController extends Controller {

    /**
     * Render home page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.home.index');
    }

}
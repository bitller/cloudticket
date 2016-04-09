<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Statistics page logic.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class StatisticsController extends Controller {

    /**
     * Render statistics index page.
     * 
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.statistics.index');
    }
    
}
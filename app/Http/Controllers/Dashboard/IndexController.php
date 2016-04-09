<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;

/**
 * Index page logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class IndexController extends Controller {

    public function index() {
        return view('pages.print-ticket.index');
    }

}
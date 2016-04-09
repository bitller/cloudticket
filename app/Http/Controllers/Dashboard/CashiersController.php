<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Cashiers page logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class CashiersController extends Controller {

    public function index() {
        return view('pages.dashboard.cashiers.index');
    }

}
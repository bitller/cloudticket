<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

/**
 * Account settings logic.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class AccountSettingsController extends Controller {

    /**
     * Render account settings index page.
     *
     * @return mixed
     */
    public function index() {
        return view('pages.dashboard.account-settings.index');
    }

}
<?php

use App\Role;
use Illuminate\Database\Seeder;

/**
 * Seeds roles table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class RolesTableSeeder extends Seeder {

    /**
     * Seeds table.
     */
    public function run() {
        $this->createApplicationAdministratorRole();
        $this->createCinemaOwnerRole();
        $this->createCinemaOwnerNotSubscribedRole();
    }

    /**
     * Create application_administrator role.
     */
    protected function createApplicationAdministratorRole() {
        $applicationAdministrator = new Role();
        $applicationAdministrator->name = 'application_administrator';
        $applicationAdministrator->display_name = 'Application administrator';
        $applicationAdministrator->description = 'Administrator of the application';
        $applicationAdministrator->save();
    }

    /**
     * Create cinema_owner role.
     */
    protected function createCinemaOwnerRole() {
        $cinemaOwner = new Role();
        $cinemaOwner->name = 'cinema_owner';
        $cinemaOwner->display_name = 'Cinema owner';
        $cinemaOwner->description = 'User is the owner of a cinema';
    }

    /**
     * Create cinema_owner_not_subscribed role.
     */
    protected function createCinemaOwnerNotSubscribedRole() {
        $cinemaOwnerNotSubscribed = new Role();
        $cinemaOwnerNotSubscribed->name = 'cinema_owner_not_subscribed';
        $cinemaOwnerNotSubscribed->display_name = 'Cinema owner not subscribed';
        $cinemaOwnerNotSubscribed->description = 'User is the owner of a cinema without subscription';
    }

}
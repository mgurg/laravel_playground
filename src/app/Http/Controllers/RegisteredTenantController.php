<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTenantRequest;
use App\Models\Tenant;

class RegisteredTenantController extends Controller
{
    public function create()
    {

    }

    public function store()
    {

        $tenant = Tenant::create(['id' => 'a', 'data' => ["tenancy_db_name" => "a"]]);


        dd('create');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

interface MemoryAdmin
{
    public function index(Request $req);

    public function create(Request $req);

    public function get(Request $req);

    public function getAll(Request $req);

    public function update(Request $req);

    public function delete(Request $req);

}
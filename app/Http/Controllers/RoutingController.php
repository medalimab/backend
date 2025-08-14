<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RoutingController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // Dashboard for authenticated users
    public function index(Request $request)
    {
        return view('dashboards.analytics');
    }

    // First-level dynamic view
    public function root(Request $request, $first)
    {
        return view($first);
    }

    // Second-level dynamic view
    public function secondLevel(Request $request, $first, $second)
    {
        return view("{$first}.{$second}");
    }

    // Third-level dynamic view
    public function thirdLevel(Request $request, $first, $second, $third)
    {
        return view("{$first}.{$second}.{$third}");
    }
}

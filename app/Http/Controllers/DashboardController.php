<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $petugasCount = User::role('Petugas')->count();
        $orderUnverifiedCount = Order::whereStatus('unverified')->count();
        $busCount = Bus::count();

        return view('admin.dashboard', compact('petugasCount', 'orderUnverifiedCount', 'busCount'));
    }
}

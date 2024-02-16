<?php

namespace App\Http\Controllers;

use App\Models\CurrentTransaction;
use App\Models\Expiring;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifs = Expiring::all();
        $transactions = CurrentTransaction::all();
        return view('admin.notif.index', compact('notifs', 'transactions'));
    }

    public function read($id)
    {
        $notif = Expiring::findOrFail($id);
        $notif->update([
            'is_read' => true
        ]);
        return redirect('/admin/notif');
    }

    // public function show($id)
    // {
    //     $notif = Expiring::findOrFail($id);
    //     $notif::update([
    //         'is_read' => true
    //     ]);
    //     return view('admin.notif.show', compact('notif'));
    // }
}

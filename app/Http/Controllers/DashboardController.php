<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presnce;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $today = Carbon::today()->format('Y-m-d');

        // SI L'UTILISATEUR EST ADMIN
        if ($user->role === 'admin') {
            $stats = [
                'total_employes' => User::where('role', 'employe')->count(),
                'presents_aujourdhui' => Presence::where('date_jour', $today)->count(),
                'retards_aujourdhui' => Presence::where('date_jour', $today)
                                         ->where('statut', 'retard')->count(),
            ];

            // On récupère les 10 derniers pointages pour l'admin
            $recentPresences = Presence::with('user')->latest()->take(10)->get();

            return view('admin.dashboard', compact('stats', 'recentPresences'));
        }

        // SI L'UTILISATEUR EST UN EMPLOYÉ
        $presence = Presence::where('user_id', $user->id)
                            ->where('date_jour', $today)
                            ->first();

        return view('dashboard', compact('presence'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;
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
   

// Afficher la liste des utilisateurs (pour l'admin)
public function usersList() {
    $users = User::all();
    return view('admin.users', compact('users'));
}

// Mettre à jour le rôle
public function updateRole(Request $request, User $user) {
    $request->validate([
        'role' => 'required|in:admin,employe',
    ]);

    $user->update(['role' => $request->role]);

    return back()->with('success', 'Rôle mis à jour avec succès !');
}
// Afficher la liste des employés (pour l'admin)
public function usersList() {
    $today = \Carbon\Carbon::today()->format('Y-m-d');
    
    // On récupère les employés avec leur présence du jour si elle existe
    $users = User::where('role', 'employe')
                ->with(['presences' => function($query) use ($today) {
                    $query->where('date_jour', $today);
                }])
                ->get();

    return view('admin.users', compact('users'));
}
}

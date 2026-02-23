<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required', 'string', 'min:2', 'max:80'],
            'prenom' => ['required', 'string', 'min:2', 'max:80'],
            'nombre_personnes' => ['required', 'integer', 'min:1', 'max:30'],
            'email' => ['required', 'email', 'max:120'],
            'telephone' => ['required', 'string', 'min:10', 'max:20'],
            'date' => ['required', 'date', 'after_or_equal:today'],
        ]);

        $validated['status'] = 'pending';
        Reservation::create($validated);

        return back()->with('success', 'Merci ! Votre demande est envoyée. Nous vous confirmons par téléphone/WhatsApp.');
    }
}

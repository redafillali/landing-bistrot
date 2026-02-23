<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Reservation;

class ReservationForm extends Component
{
    public $nom = '';
    public $prenom = '';
    public $telephone = '';
    public $email = '';
    public $date = '';
    public $nombre_personnes = 2;

    protected $rules = [
        'nom' => 'required|string|min:2|max:80',
        'prenom' => 'required|string|min:2|max:80',
        'telephone' => 'required|string|min:10|max:20',
        'email' => 'required|email|max:120',
        'date' => 'required|date|after_or_equal:today',
        'nombre_personnes' => 'required|integer|min:1|max:30',
    ];

    public function submit()
    {
        $validatedData = $this->validate();
        
        $validatedData['status'] = 'pending';
        Reservation::create($validatedData);

        session()->flash('success', 'Merci ! Votre demande est envoyée. Nous vous confirmons par téléphone/WhatsApp.');

        // Reset fields after successful submission
        $this->reset(['nom', 'prenom', 'telephone', 'email', 'date']);
        $this->nombre_personnes = 2;
    }

    public function render()
    {
        return view('livewire.reservation-form');
    }
}

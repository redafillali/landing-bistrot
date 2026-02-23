<?php

namespace Tests\Feature;

use App\Livewire\ReservationForm;
use App\Mail\AdminReservationNotification;
use App\Mail\CustomerReservationConfirmation;
use App\Models\Reservation;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class ReservationEmailTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sends_emails_on_reservation_submission()
    {
        Mail::fake();

        Livewire::test(ReservationForm::class)
            ->set('nom', 'Doe')
            ->set('prenom', 'John')
            ->set('telephone', '0600000000')
            ->set('email', 'john@example.com')
            ->set('date', now()->addDay()->format('Y-m-d'))
            ->set('nombre_personnes', 2)
            ->call('submit');

        $this->assertDatabaseHas('reservations', [
            'email' => 'john@example.com',
            'nom' => 'Doe',
        ]);

        Mail::assertSent(CustomerReservationConfirmation::class, function ($mail) {
            return $mail->hasTo('john@example.com');
        });

        Mail::assertSent(AdminReservationNotification::class, function ($mail) {
            return $mail->hasTo(config('mail.from.address'));
        });
    }
}

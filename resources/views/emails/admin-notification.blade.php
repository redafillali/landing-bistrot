<x-mail::message>
# Nouvelle réservation reçue

Une nouvelle demande de réservation a été soumise sur le site.

**Détails de la réservation :**
- **Nom complet :** {{ $reservation->prenom }} {{ $reservation->nom }}
- **Téléphone :** {{ $reservation->telephone }}
- **Email :** {{ $reservation->email }}
- **Date :** {{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }}
- **Nombre de personnes :** {{ $reservation->nombre_personnes }}

<x-mail::button :url="url('/admin/reservations')">
Voir dans l'administration
</x-mail::button>

Merci,<br>
L'application **Bistrot Burger**
</x-mail::message>

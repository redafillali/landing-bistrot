<x-mail::message>

<div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ Vite::asset('resources/assets/images/logo.jpg') }}" alt="Bistrot Burger" style="max-width: 200px; height: auto;">
</div>

# Merci pour votre réservation !

Bonjour {{ $reservation->prenom }} {{ $reservation->nom }},

C'est avec plaisir que nous vous confirmons la réception de votre demande de réservation pour le {{ \Carbon\Carbon::parse($reservation->date)->format('d/m/Y') }} pour {{ $reservation->nombre_personnes }} personnes.

Notre équipe vous contactera très prochainement par téléphone ou WhatsApp pour finaliser la confirmation.

**Informations de contact :**
- 📞 Téléphone : [05 22 66 41 06](tel:0522664106)
- 📱 WhatsApp : [06 62 63 62 95](https://wa.me/212662636295)

**Se rendre chez nous :**
- 📍 [Bistrot Burger, 7 Bd Chefchaouni, Casablanca](https://www.google.com/maps/search/?api=1&query=Bistrot+Burger+7+Bd+Chefchaouni+Casablanca)

À très bientôt,

L'équipe **Bistrot Burger**
</x-mail::message>

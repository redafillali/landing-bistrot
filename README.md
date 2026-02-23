# Requirements mis à jour — Landing Page Réservation (Laravel) — Bistrot Burger Ftour Ramadan

> Objectif : Une landing page **Laravel** (Blade) dédiée au **Menu Ftour Ramadan** de Bistrot Burger, optimisée conversion, avec formulaire de réservation simple.

---

## Contexte & Assets

### Visuels fournis
- Affiche menu/charte : `Gemini_Generated_Image_nzkq7vnzkq7vnzkq.jpg` [image:4]
- Logo officiel : `logo.jpg` [image:3]

### Informations produit (à afficher)
- Titre : **Menu Ftour Ramadan**
- Restaurant : **Bistrot Burger — Steak House**
- Promesse : **Service VIP à table & à volonté**
- Prix : **295 DHS / personne**
- Kids : **150 DHS**

Menu (reprendre depuis l’affiche) :
- Boissons : Eau, Jus, Thé
- Bouchées & accompagnements : Mini viennoiseries, Canapés, Sushis, Nems, Baghrir, Harira
- Entrées : Mini burger, Verrine salade César au poulet
- Plats : Trio mini tajine (Viande, Moules, Poulet)
- Assortiment de grillades : Côtelettes, Brochette mixte, Pilons
- Desserts : Tiramisu nutella, Panacotta

---

## Stack & contraintes

- Backend + Front : **Laravel** (Blade views) [web:7]
- Build assets : **Vite** (Laravel standard) [web:7]
- CSS : TailwindCSS (recommandé) ou CSS custom (en gardant la charte)
- Formulaire : POST sécurisé avec **CSRF** Laravel (standard) [web:13]
- Validation : côté backend via `$request->validate()` (règles Laravel) [web:15]

---

## Structure de page (1 page)

### Sections (ordre recommandé)
1. **Header** : logo + menu “Ftour Ramadan”
2. **Hero** : promesse + prix + CTA principal
3. **Le Menu** : catégories en cards (reprendre l’affiche)
4. **Réservation** : formulaire
5. **Réassurance** : rappel VIP/à volonté, infos contact/localisation (si disponibles)
6. **Footer** : logo, réseaux sociaux, mentions

### Principes UX
- CTA visible dès le hero + rappel CTA après la section menu.
- Formulaire accessible en 1 scroll via ancres `#reservation`.
- Mobile-first : bouton “Réserver” sticky en bas (optionnel).

---

## Formulaire de réservation (spécifications)

### Champs requis (selon votre demande)
- **Nom** (text)
- **Prénom** (text)
- **Nombre de personnes** (number)
- **Email** (email)
- **Téléphone** (tel)
- **Date** (date)

### Règles de validation (recommandées)
- `nom` : required, string, min:2, max:80
- `prenom` : required, string, min:2, max:80
- `nombre_personnes` : required, integer, min:1, max:30
- `email` : required, email, max:120
- `telephone` : required, string, min:10, max:20 (ou regex format Maroc si souhaité)
- `date` : required, date, after_or_equal:today

> Laravel propose la validation via `$request->validate([...])` avec retour automatique des erreurs et old inputs [web:15][web:13].

### Comportement
- À la soumission :
  - Afficher un message succès “Merci, votre demande est envoyée. Nous vous confirmons par téléphone/WhatsApp.”
  - Envoyer un email au restaurant (optionnel) + email au client (optionnel)

---

## Charte graphique (d’après l’affiche)

### Direction visuelle
- Thème : **Ramadan chic**, minimal, premium
- Dominantes : **blanc cassé / doré**
- Accents : doré sur titres, éléments décoratifs arabesques
- Iconographie : lanternes, ornements fins (sans surcharge)

### Couleurs proposées (à ajuster au pixel près si vous voulez)
- Or principal : `#C9A24A`
- Or clair : `#E7D7A4`
- Noir texte : `#111827`
- Fond : `#FFFFFF` / `#FAFAF7`
- Gris UI : `#6B7280`

### Typographies (proposition)
- Titres : serif élégante (Playfair Display) ou une font proche de l’affiche
- Texte : sans-serif lisible (Poppins / Inter)

---

## Textes & Calls To Action (FR)

### Hero — variantes (headline)
1. **“Menu Ftour Ramadan — Service VIP à table & à volonté”**
2. **“Vivez un Ftour d’exception chez Bistrot Burger”**
3. **“Le Ftour premium : saveurs, convivialité et service VIP”**

### Hero — sous-titres (supporting copy)
- “Un menu généreux, des bouchées variées, un trio mini tajine, des grillades et un dessert gourmand.”
- “Places limitées chaque soir : réservez votre table en quelques secondes.”
- “Tarif : 295 DHS/personne — Kids : 150 DHS.”

### CTA principaux (boutons)
- **“Réserver ma table”**
- **“Je réserve pour ce soir”**
- **“Réserver maintenant”**

### CTA secondaires
- “Voir le menu” (ancre `#menu`)
- “Nous appeler” (tel:)
- “WhatsApp réservation” (wa.me)

### Section Menu — intro courte
- “Découvrez notre sélection spéciale Ramadan : boissons, bouchées, entrées, plats, grillades et desserts.”

### Réassurance (3 bullets)
- “Service VIP à table & à volonté.”
- “Ambiance Ramadan chaleureuse.”
- “Confirmation rapide par téléphone.”

### Texte formulaire (microcopy)
- Titre : “Réservation Ftour Ramadan”
- Intro : “Remplissez ce formulaire et nous confirmons votre réservation rapidement.”
- Consentement : “En envoyant, j’accepte d’être contacté(e) pour confirmer ma réservation.”
- Bouton : **“Envoyer ma demande”**
- Note sous bouton : “La réservation n’est confirmée qu’après validation par le restaurant.”

### Page/Bloc confirmation (succès)
- Titre : “Demande envoyée”
- Texte : “Merci ! Nous vous contactons très vite pour confirmer votre table.”
- CTA : “Retour à l’accueil” / “Envoyer un message WhatsApp”

---

## Implémentation Laravel (squelette)

### Routes
```php
// routes/web.php
use App\Http\Controllers\ReservationController;

Route::view('/', 'landing')->name('landing');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
```

### Controller
```php
// app/Http/Controllers/ReservationController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => ['required','string','min:2','max:80'],
            'prenom' => ['required','string','min:2','max:80'],
            'nombre_personnes' => ['required','integer','min:1','max:30'],
            'email' => ['required','email','max:120'],
            'telephone' => ['required','string','min:10','max:20'],
            'date' => ['required','date','after_or_equal:today'],
        ]);

        // TODO: save in DB + notify

        return back()->with('success', 'Merci ! Votre demande est envoyée.');
    }
}
```

> Laravel Blade est adapté au rendu HTML, et la validation standard s’effectue via `$request->validate()` [web:7][web:15].

### Blade (extraits)
```blade
{{-- resources/views/landing.blade.php --}}

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('reservation.store') }}" id="reservation">
  @csrf
  <input name="nom" value="{{ old('nom') }}" required />
  <input name="prenom" value="{{ old('prenom') }}" required />
  <input type="number" name="nombre_personnes" value="{{ old('nombre_personnes', 2) }}" required />
  <input type="email" name="email" value="{{ old('email') }}" required />
  <input name="telephone" value="{{ old('telephone') }}" required />
  <input type="date" name="date" value="{{ old('date') }}" required />

  <button type="submit">Envoyer ma demande</button>
</form>
```

> Les erreurs de validation peuvent être affichées côté view via `$errors` (exemple Laravel) [web:13].

---

## Données & Backoffice (optionnel)

### Table `reservations`
- id
- nom
- prenom
- nombre_personnes
- email
- telephone
- date
- status (pending/confirmed/cancelled)
- created_at, updated_at

### Admin minimal
- Liste des réservations (tri par date)
- Export CSV

---

## Checklist livraison

- [ ] Landing responsive (mobile/tablette/desktop)
- [ ] Logo et charte respectés (couleurs + style)
- [ ] CTA visibles et cohérents
- [ ] Formulaire validé + messages d’erreur
- [ ] Message succès
- [ ] Enregistrement DB (si requis)
- [ ] Notification email/WhatsApp (si requis)

---

## Points à me confirmer (si vous voulez que je finalise les textes à 100%)

- Adresse du restaurant + ville (Casablanca ?)
- Numéro WhatsApp / téléphone de réservation
- Horaires d’accueil ftour (créneaux)
- Capacité max par soirée (optionnel)

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Ftour Ramadan - Bistrot Burger</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="antialiased min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                  <img src="{{ Vite::asset('resources/assets/images/logo.jpg') }}" alt="Logo" class="h-12" />
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#menu" class="text-gray-600 hover:text-or transition-colors font-medium">Le Menu</a>
                    <a href="#reservation" class="text-gray-600 hover:text-or transition-colors font-medium">Réservation</a>
                </nav>
                <div>
                    <a href="#reservation" class="bg-or text-white px-5 py-2.5 rounded hover-bg-or transition-colors font-medium text-sm">
                        Réserver ma table
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="relative bg-white py-20 px-4 sm:px-6 lg:px-8 mx-auto overflow-hidden">
            <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">
                <!-- Text Content -->
                <div class="flex-1 text-center lg:text-left z-10">
                    <div class="absolute top-0 right-0 lg:left-0 w-64 h-64 bg-or-light rounded-full mix-blend-multiply filter blur-3xl opacity-30 pointer-events-none"></div>
                    
                    <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-extrabold text-[#111827] mb-6 leading-tight mt-8">
                        Menu Ftour Ramadan <br class="hidden sm:block" />
                        <span class="text-or">Service VIP à table & à volonté</span>
                    </h1>
                    
                    <p class="mt-4 text-xl text-gray-600 max-w-2xl mx-auto lg:mx-0 mb-8">
                        Vivez un Ftour d’exception chez Bistrot Burger. Un menu généreux, des bouchées variées, un trio mini tajine, des grillades et un dessert gourmand. Places limitées chaque soir.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-6 mb-12">
                        <div class="bg-gray-50 border border-or rounded px-6 py-4 flex flex-col items-center shadow-sm">
                            <span class="text-sm text-gray-500 uppercase tracking-widest font-semibold mb-1">Adulte</span>
                            <span class="font-serif text-3xl font-bold text-or">295 <span class="text-lg">DHS</span></span>
                        </div>
                        <div class="bg-gray-50 border border-gray-200 rounded px-6 py-4 flex flex-col items-center shadow-sm">
                            <span class="text-sm text-gray-500 uppercase tracking-widest font-semibold mb-1">Enfant</span>
                            <span class="font-serif text-3xl font-bold text-gray-700">150 <span class="text-lg">DHS</span></span>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#reservation" class="bg-or text-white px-8 py-4 rounded font-bold text-lg hover-bg-or transition-colors shadow-lg hover:shadow-xl w-full sm:w-auto text-center">
                            Réserver maintenant
                        </a>
                        <a href="https://wa.me/212662636295" target="_blank" class="bg-[#25D366] text-white px-8 py-4 rounded font-bold text-lg hover:bg-green-600 transition-colors shadow-lg hover:shadow-xl w-full sm:w-auto flex items-center justify-center">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            Réserver sur WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Hero Image Placeholder -->
                <div class="flex-1 w-full max-w-lg lg:max-w-none relative mt-10 lg:mt-0">
                    <div class="w-full aspect-[4/5] flex flex-col items-center justify-center p-8 relative overflow-hidden group">
                        <img src="{{ Vite::asset('resources/assets/images/hero.jpg') }}" alt="Bistrot Burger Ftour" class="w-full h-full object-cover rounded-2xl shadow-2xl border-4 border-white">
                    </div>
                </div>
            </div>

        <!-- Menu Section -->
        <section id="menu" class="bg-[#FAFAF7] py-20 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="font-serif text-sm uppercase tracking-widest text-or font-bold mb-2">Notre Sélection</h2>
                <h3 class="font-serif text-3xl sm:text-4xl font-extrabold text-[#111827] mb-12">Le Menu Ftour</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                    <!-- Bouchées & Soupes -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col pb-6">
                        <img src="{{ Vite::asset('resources/assets/images/bouchees.jpg') }}" class="w-full h-48 bg-gray-100 flex items-center justify-center relative mb-6" />
                        <div class="px-8">
                            <h4 class="font-serif text-xl font-bold border-b border-or pb-3 mb-4 inline-block pr-8">Assortiment Entrées</h4>
                            <ul class="space-y-3 text-gray-600">
                                <li>Mini viennoiseries</li>
                                <li>Canapés & Sushis</li>
                                <li>Nems variés</li>
                                <li>Baghrir marocain</li>
                                <li>Harira traditionnelle</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Plats : Trio Tajine -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col pb-6">
                        <img src="{{ Vite::asset('resources/assets/images/tajines.jpg') }}" class="w-full h-48 bg-gray-100 flex items-center justify-center relative mb-6" />
                        <div class="px-8">
                            <h4 class="font-serif text-xl font-bold border-b border-or pb-3 mb-4 inline-block pr-8">Plats Chauds</h4>
                            <p class="text-sm text-or mb-2 font-medium">Trio mini tajine & Burgers :</p>
                            <ul class="space-y-3 text-gray-600">
                                <li>Tajine de viande</li>
                                <li>Tajine de moules</li>
                                <li>Tajine de poulet</li>
                                <li>Mini burger Bistrot</li>
                                <li>Verrine salade César</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Grillades & Desserts -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden flex flex-col pb-6">
                        <img src="{{ Vite::asset('resources/assets/images/grillades.jpg') }}" class="w-full h-48 bg-gray-100 flex items-center justify-center relative mb-6" />
                        <div class="px-8">
                            <h4 class="font-serif text-xl font-bold border-b border-or pb-3 mb-4 inline-block pr-8">Grillades & Douceurs</h4>
                            <p class="text-sm text-or mb-2 font-medium">Assortiment Viandes :</p>
                            <ul class="space-y-3 text-gray-600 mb-4">
                                <li>Côtelettes d'agneau</li>
                                <li>Brochette mixte & Pilons</li>
                            </ul>
                            <p class="text-sm text-or mb-2 font-medium">Desserts :</p>
                            <ul class="space-y-3 text-gray-600">
                                <li>Tiramisu Nutella</li>
                                <li>Panacotta</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Reservation Section -->
        <section id="reservation" class="py-20 px-4 sm:px-6 lg:px-8 bg-white border-t border-gray-100">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="font-serif text-sm uppercase tracking-widest text-or font-bold mb-2">Places Limitées</h2>
                    <h3 class="font-serif text-3xl sm:text-4xl font-extrabold text-[#111827]">Réservation Ftour</h3>
                    <p class="mt-4 text-gray-600">Remplissez ce formulaire et nous confirmons votre réservation rapidement par téléphone ou WhatsApp.</p>
                </div>

                <div class="bg-[#FAFAF7] p-8 sm:p-12 rounded-xl shadow border border-gray-100">
                    <livewire:reservation-form />
                </div>
            </div>
        </section>

        <!-- Reassurance Section -->
        <section class="bg-[#111827] text-white py-16 px-4">
            <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-center items-center text-center divide-y md:divide-y-0 md:divide-x divide-gray-700">
                <div class="p-6 md:px-10 flex-1 w-full">
                    <div class="text-or text-3xl mb-3">VIP</div>
                    <h4 class="font-serif font-bold text-lg mb-2">Service à Table</h4>
                    <p class="text-gray-400 text-sm">Profitez d'un service exclusif, tous nos plats sont servis à volonté directamente à votre table.</p>
                </div>
                <div class="p-6 md:px-10 flex-1 w-full">
                    <div class="text-or text-3xl mb-3">🌙</div>
                    <h4 class="font-serif font-bold text-lg mb-2">Ambiance Ramadan</h4>
                    <p class="text-gray-400 text-sm">Vivez un moment convivial et chaleureux dans un cadre exceptionnel et apaisant.</p>
                </div>
                <div class="p-6 md:px-10 flex-1 w-full">
                    <div class="text-or text-3xl mb-3">✓</div>
                    <h4 class="font-serif font-bold text-lg mb-2">Confirmation Rapide</h4>
                    <p class="text-gray-400 text-sm">Notre équipe valide votre réservation sur WhatsApp au <a href="https://wa.me/212662636295" class="text-or hover:underline">0662636295</a> ou par téléphone.</p>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="font-serif text-2xl font-bold mb-4 text-or">Bistrot Burger</p>
            <p class="text-gray-400 mb-2">Service VIP à table & à volonté</p>
            <p class="text-gray-400 mb-6 font-medium">
                📞 <a href="tel:0522664106" class="hover:text-or transition-colors">05 22 66 41 06</a> &nbsp;|&nbsp; 
                📱 <a href="tel:0662636295" class="hover:text-or transition-colors">06 62 63 62 95</a> <br/>
                <a href="https://wa.me/212662636295" target="_blank" class="text-[#25D366] hover:underline mt-2 inline-block">💬 WhatsApp : 06 62 63 62 95</a>
            </p>
            <div class="flex justify-center space-x-4 mb-8">
                <a href="#reservation" class="text-or hover:text-white transition-colors">Réservation</a>
                <span class="text-gray-600">|</span>
                <a href="#menu" class="text-or hover:text-white transition-colors">Le Menu Ftour</a>
            </div>
            <p class="text-gray-500 text-sm">© {{ date('Y') }} Bistrot Burger - Steak House. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>

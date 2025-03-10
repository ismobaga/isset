<div>
    <!-- Hero Section with Background Image -->
    <section class="relative py-12 md:py-20">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 overflow-hidden">
            <img src="{{ asset('images/isest/eva.jpg') }}" alt="Vie étudiante" class="w-full h-full object-cover">
            {{-- <div class="absolute inset-0 bg-emerald-900/70"></div> <!-- Dark overlay for text readability --> --}}
        </div>

        <!-- Content on top of background -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-black mb-4">Vie Étudiante à l'ISEST</h1>
                <p class="text-lg md:text-xl text-black/90 max-w-3xl mx-auto">
                    Découvrez une expérience étudiante enrichissante, dynamique et épanouissante au sein de notre
                    campus.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-12 md:py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-16">
                <div class="order-2 md:order-1">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Une vie de campus animée</h2>
                    <p class="text-gray-600 mb-4">
                        À l'ISEST, nous croyons que l'éducation va bien au-delà des salles de classe. Notre campus
                        dynamique
                        offre un environnement propice à l'épanouissement personnel et professionnel de nos étudiants.
                    </p>
                    <p class="text-gray-600 mb-4">
                        Des associations étudiantes aux événements culturels, des compétitions sportives aux projets
                        associatifs,
                        vous trouverez de nombreuses opportunités pour développer vos talents, rencontrer des personnes
                        partageant
                        les mêmes idées et créer des souvenirs durables.
                    </p>
                </div>
                <div class="order-1 md:order-2">
                    <div class="rounded-lg overflow-hidden shadow-lg h-full">
                        <img src="/images/isest/1sante.jpg" alt="Vie de campus" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- Activities and Clubs Section -->
            <div class="my-16">
                <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Associations et Clubs Étudiants</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-emerald-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Clubs Académiques</h3>
                        <p class="text-gray-600">Rejoignez des clubs liés à votre domaine d'études pour approfondir vos
                            connaissances et travailler sur des projets innovants.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-emerald-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.25 6.087c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.036-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959v0a.64.64 0 01-.657.643 48.39 48.39 0 01-4.163-.3c.186 1.613.293 3.25.315 4.907a.656.656 0 01-.658.663v0c-.355 0-.676-.186-.959-.401a1.647 1.647 0 00-1.003-.349c-1.036 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401v0c.31 0 .555.26.532.57a48.039 48.039 0 01-.642 5.056c1.518.19 3.058.309 4.616.354a.64.64 0 00.657-.643v0c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.035 1.008-1.875 2.25-1.875 1.243 0 2.25.84 2.25 1.875 0 .369-.128.713-.349 1.003-.215.283-.4.604-.4.959v0c0 .333.277.599.61.58a48.1 48.1 0 005.427-.63 48.05 48.05 0 00.582-4.717.532.532 0 00-.533-.57v0c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.035 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.37 0 .713.128 1.003.349.283.215.604.401.96.401v0a.656.656 0 00.658-.663 48.422 48.422 0 00-.37-5.36c-1.886.342-3.81.574-5.766.689a.578.578 0 01-.61-.58v0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Sports et Loisirs</h3>
                        <p class="text-gray-600">De nombreuses activités sportives et récréatives sont proposées pour
                            maintenir un équilibre entre études et bien-être.</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="text-emerald-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Engagement Social</h3>
                        <p class="text-gray-600">Participez à des projets communautaires et des initiatives solidaires
                            pour contribuer positivement à la société.</p>
                    </div>
                </div>
            </div>

            <!-- Events Calendar -->
            <div class="my-16">
                <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Événements à Venir</h2>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="mb-6">
                        <h3 class="font-semibold text-xl text-emerald-600">Septembre 2023</h3>
                        <ul class="mt-3 space-y-3">
                            <li class="flex gap-4">
                                <div class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded font-semibold text-sm">
                                    15 Sept
                                </div>
                                <div>
                                    <p class="font-medium">Journée d'intégration des nouveaux étudiants</p>
                                    <p class="text-sm text-gray-500">Campus principal - 9h00</p>
                                </div>
                            </li>
                            <li class="flex gap-4">
                                <div class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded font-semibold text-sm">
                                    21 Sept
                                </div>
                                <div>
                                    <p class="font-medium">Forum des associations étudiantes</p>
                                    <p class="text-sm text-gray-500">Grand Hall - 14h00 à 18h00</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-semibold text-xl text-emerald-600">Octobre 2023</h3>
                        <ul class="mt-3 space-y-3">
                            <li class="flex gap-4">
                                <div class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded font-semibold text-sm">
                                    05 Oct
                                </div>
                                <div>
                                    <p class="font-medium">Conférence sur l'innovation technologique</p>
                                    <p class="text-sm text-gray-500">Amphithéâtre central - 10h00</p>
                                </div>
                            </li>
                            <li class="flex gap-4">
                                <div class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded font-semibold text-sm">
                                    18 Oct
                                </div>
                                <div>
                                    <p class="font-medium">Tournoi sportif inter-filières</p>
                                    <p class="text-sm text-gray-500">Terrains de sport - Toute la journée</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Campus Facilities -->
            <div class="my-16">
                <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Infrastructures et Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <div class="h-48">
                            <img src="https://placehold.co/400x300" alt="Bibliothèque"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Bibliothèque Universitaire</h3>
                            <p class="text-gray-600">Un espace moderne de travail et de recherche avec des milliers
                                d'ouvrages et ressources numériques.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <div class="h-48">
                            <img src="https://placehold.co/400x300" alt="Espace de détente"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Espaces de Détente et de Restauration</h3>
                            <p class="text-gray-600">Plusieurs zones de repos et cafétérias pour se restaurer et se
                                retrouver entre cours.</p>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg overflow-hidden shadow-md">
                        <div class="h-48">
                            <img src="https://placehold.co/400x300" alt="Installations sportives"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Installations Sportives</h3>
                            <p class="text-gray-600">Accès à des terrains multisports, une salle de fitness et d'autres
                                équipements sportifs.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="bg-emerald-50 rounded-xl p-8 text-center my-16">
                <h2 class="text-2xl font-bold text-emerald-700 mb-4">Rejoignez notre communauté étudiante dynamique
                </h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Vous souhaitez en savoir plus sur la vie étudiante à l'ISEST ou vous avez des questions spécifiques
                    ?
                    N'hésitez pas à nous contacter ou à visiter notre campus.
                </p>
                <a href="/contact"
                    class="inline-block bg-emerald-600 text-white px-6 py-3 rounded-full font-medium hover:bg-emerald-700 transition-colors">
                    Contactez-nous
                </a>
            </div>
        </div>
    </section>
</div>

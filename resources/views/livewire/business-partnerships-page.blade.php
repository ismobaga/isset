<div>
    <div class="bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Header section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Partenariats Entreprise</h1>
                <div class="w-24 h-1 bg-emerald-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-3xl mx-auto">
                    À l'ISEST, nous croyons fermement que l'éducation et l'industrie doivent travailler main dans la
                    main pour préparer les talents de demain.
                </p>
            </div>

            <!-- About Partnerships Section -->
            <div class="max-w-4xl mx-auto mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Notre Programme de Partenariat</h2>
                <p class="text-gray-600 mb-6">
                    L'ISEST développe des partenariats stratégiques avec des entreprises de divers secteurs pour
                    enrichir l'expérience éducative de nos étudiants et contribuer à l'innovation dans le monde
                    professionnel. Ces collaborations permettent de créer des ponts entre la formation académique et les
                    réalités du marché du travail.
                </p>
                <p class="text-gray-600 mb-6">
                    Nos partenariats sont conçus pour être mutuellement bénéfiques, offrant aux entreprises un accès
                    privilégié à des talents prometteurs et à notre expertise académique, tout en fournissant à nos
                    étudiants des opportunités concrètes d'apprentissage et d'insertion professionnelle.
                </p>
            </div>

            <!-- Key Partners -->
            <div class="mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Nos Partenaires Clés</h2>
                
                <div class="max-w-4xl mx-auto mb-10">
                    <p class="text-gray-600">
                        L'ISEST s'enorgueillit de collaborer avec des institutions prestigieuses, des entreprises de référence 
                        et des organisations professionnelles reconnues. Ces partenariats stratégiques enrichissent notre offre de 
                        formation, offrent des opportunités professionnelles exclusives à nos étudiants et garantissent que nos 
                        programmes répondent aux besoins réels du marché du travail.
                    </p>
                </div>
                
                <!-- Partner carousel -->
                <div class="w-full relative mt-10">
                    <div class="swiper multiple-slide-carousel swiper-container relative">
                        <div class="swiper-wrapper mb-16">
                            @forelse ($partners as $partner)
                                <div class="swiper-slide">
                                    <a href="{{ $partner->website }}" target="_blank" 
                                       class="bg-indigo-50 rounded-2xl h-48 flex justify-center items-center">
                                        <img class="max-h-36 max-w-[80%]" src="{{ asset('storage/' . $partner->logo) }}" 
                                             alt="{{ $partner->name }}">
                                    </a>
                                </div>
                            @empty
                                <div class="text-center text-gray-500 py-10">
                                    Nos partenariats sont en cours de développement. Revenez bientôt pour découvrir nos collaborations!
                                </div>
                            @endforelse
                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                
                <div class="mt-8 text-center">
                    <p class="text-gray-600 italic">
                        Intéressé par un partenariat avec l'ISEST ? <a href="/contact" class="text-emerald-600 underline">Contactez-nous</a> pour explorer les possibilités de collaboration.
                    </p>
                </div>
            </div>

            <!-- Partnership Benefits -->
            <div class="mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Avantages du Partenariat</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Pour les Entreprises</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Accès à un vivier de talents hautement qualifiés</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Opportunités de stages et projets collaboratifs</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Participation à des événements de recrutement exclusifs</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Collaborations en recherche et développement</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Pour les Étudiants</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Expérience professionnelle dans des entreprises de premier plan</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Mentorat par des professionnels du secteur</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Opportunités d'emploi après l'obtention du diplôme</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-6 w-6 text-emerald-500 mr-2 flex-shrink-0" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Projets pratiques basés sur des cas réels d'entreprises</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Types of Partnerships -->
            <div class="mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Types de Collaboration</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 shadow rounded-lg">
                        <div class="h-12 w-12 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Stages et Alternance</h3>
                        <p class="text-gray-600">
                            Accueillez nos étudiants dans votre entreprise pour des stages ou des contrats d'alternance,
                            offrant une expérience pratique tout en bénéficiant de leurs compétences fraîchement
                            acquises.
                        </p>
                    </div>
                    <div class="bg-white p-6 shadow rounded-lg">
                        <div class="h-12 w-12 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Projets de Recherche</h3>
                        <p class="text-gray-600">
                            Collaborez avec nos enseignants-chercheurs sur des projets d'innovation qui répondent à vos
                            défis d'entreprise tout en contribuant à l'avancement des connaissances.
                        </p>
                    </div>
                    <div class="bg-white p-6 shadow rounded-lg">
                        <div class="h-12 w-12 bg-emerald-100 rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Formation Continue</h3>
                        <p class="text-gray-600">
                            Bénéficiez de programmes de formation sur mesure pour vos collaborateurs, conçus pour
                            répondre aux besoins spécifiques de votre entreprise et de votre secteur.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to action -->
            <div class="bg-emerald-50 p-8 rounded-lg text-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Devenez Partenaire de l'ISEST</h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Vous souhaitez contribuer à la formation de la prochaine génération de professionnels tout en
                    bénéficiant d'un accès privilégié à des talents et des ressources académiques? Rejoignez notre
                    réseau de partenaires!
                </p>
                <a href="/contact"
                    class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300">
                    Nous Contacter
                </a>
            </div>
        </div>
    </div>
    
    @assets
        <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const swiper = new Swiper('.multiple-slide-carousel', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 4,
                            spaceBetween: 40,
                        },
                    },
                    autoplay: {
                        delay: 3000,
                    },
                });
            });
        </script>
    @endassets
</div>

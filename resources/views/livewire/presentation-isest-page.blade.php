<div>
    <div class="bg-white py-12">
        <div class="container mx-auto px-4">
            <!-- Header section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Présentation du Groupe ISEST</h1>
                <div class="w-24 h-1 bg-emerald-500 mx-auto"></div>
            </div>

            <!-- About section -->
            <div class="max-w-4xl mx-auto mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Notre Histoire</h2>
                <p class="text-gray-600 mb-6">
                    L'Institut Supérieur d'Etudes Scientifiques et Techniques (ISEST) est un établissement
                    d'enseignement supérieur fondé avec l'objectif de contribuer au développement de l'enseignement
                    et de la recherche scientifique et technique dans notre pays.
                </p>
                <p class="text-gray-600 mb-6">
                    Depuis sa création, l'ISEST s'est imposé comme un acteur majeur de la formation professionnelle
                    et académique, alliant excellence pédagogique et innovations technologiques pour préparer les
                    étudiants aux défis du monde professionnel.
                </p>
            </div>

            <!-- Mot du Directeur -->
            <div class="max-w-4xl mx-auto mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Mot du Directeur</h2>
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="rounded-full overflow-hidden border-4 border-emerald-100 w-48 h-48 mx-auto">
                            <img src="{{ asset('images/staff.jpg') }}" alt="Directeur de l'ISEST"
                                class="w-full h-full object-cover"
                                onerror="this.src='https://via.placeholder.com/200?text=Directeur';this.onerror=null;">
                        </div>
                    </div>
                    <div class="md:w-2/3">
                        <p class="text-gray-600 mb-4 italic">
                            "Je suis honoré de vous accueillir à l'Institut Supérieur d'Etudes Scientifiques et
                            Techniques (ISEST).
                            Notre établissement s'engage à offrir une formation de qualité qui répond aux besoins du
                            marché
                            et prépare nos étudiants à exceller dans leur parcours professionnel.
                        </p>
                        <p class="text-gray-600 mb-4 italic">
                            Notre équipe pédagogique, composée d'experts dans leurs domaines respectifs, se consacre
                            à accompagner chaque étudiant dans son développement académique et personnel. À l'ISEST,
                            nous croyons fermement que l'éducation est la clé pour construire un avenir meilleur."
                        </p>
                        <p class="text-gray-800 font-semibold text-right">
                            — Dr. Mamour Ndao<br>
                            <span class="text-sm font-normal text-gray-600">Directeur Général de l'ISEST</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Notre Mission</h2>
                    <p class="text-gray-600">
                        L'ISEST a pour mission de former des cadres hautement qualifiés capables de répondre aux
                        besoins du marché du travail et de contribuer au développement économique et social du pays.
                        Nous nous engageons à fournir une éducation de qualité, accessible et adaptée aux enjeux
                        contemporains.
                    </p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Notre Vision</h2>
                    <p class="text-gray-600">
                        Notre vision est de devenir un centre d'excellence reconnu au niveau national et international
                        dans le domaine de l'enseignement supérieur et de la recherche scientifique, en formant des
                        leaders et innovateurs qui contribueront à façonner l'avenir de notre société.
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="mb-16">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Nos Valeurs</h2>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center p-6">
                        <div
                            class="bg-emerald-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Excellence</h3>
                        <p class="text-gray-600">
                            Nous visons l'excellence dans tous nos programmes et services académiques.
                        </p>
                    </div>
                    <div class="text-center p-6">
                        <div
                            class="bg-emerald-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Innovation</h3>
                        <p class="text-gray-600">
                            Nous encourageons l'innovation et la créativité dans l'enseignement et la recherche.
                        </p>
                    </div>
                    <div class="text-center p-6">
                        <div
                            class="bg-emerald-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-emerald-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Inclusion</h3>
                        <p class="text-gray-600">
                            Nous valorisons la diversité et promouvons un environnement inclusif pour tous.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to action -->
            <div class="bg-emerald-50 p-8 rounded-lg text-center">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Rejoignez le Groupe ISEST</h2>
                <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                    Découvrez nos programmes de formation et devenez partie intégrante de notre communauté académique
                    dynamique et innovante.
                </p>
                <a href="{{ route('formations') }}"
                    class="inline-block bg-emerald-500 hover:bg-emerald-600 text-white font-semibold py-3 px-8 rounded-full transition duration-300">
                    Voir nos formations
                </a>
            </div>
        </div>
    </div>
</div>

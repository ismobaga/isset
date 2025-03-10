<footer class="bg-gray-900 text-gray-300">
    <!-- Pre-footer newsletter section -->
    <div class="bg-emerald-600">
        <div class="container mx-auto px-6 py-8 md:px-12">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-white text-2xl font-bold">Restez informé</h3>
                    <p class="text-white opacity-90 mt-2">Inscrivez-vous à notre newsletter pour recevoir les dernières
                        actualités</p>
                </div>
                <div class="w-full md:w-1/3">
                    <form class="flex flex-col sm:flex-row gap-2">
                        <input type="email" placeholder="Votre adresse email"
                            class="w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-white"
                            required>
                        <button type="submit"
                            class="bg-white text-emerald-600 hover:bg-gray-100 font-semibold px-6 py-3 rounded-lg transition duration-300">
                            S'inscrire
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer content -->
    <div class="container mx-auto px-6 py-12 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Column 1: About -->
            <div>
                <div class="mb-4 flex items-center">
                    {{-- <svg class="h-10 w-10 mr-2" viewBox="0 0 79 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M35.2574 2.24264C37.6005 -0.100501 41.3995 -0.100505 43.7426 2.24264L76.7574 35.2574C79.1005 37.6005 79.1005 41.3995 76.7574 43.7426L43.7426 76.7574C41.3995 79.1005 37.6005 79.1005 35.2574 76.7574L2.24264 43.7426C-0.100501 41.3995 -0.100505 37.6005 2.24264 35.2574L35.2574 2.24264Z"
                            fill="#10b981" />
                    </svg> --}}

                    <img src="logo.png" alt="" class="h-16 z-50 mr-2  -top-2 -left-3 text-emerald-500" />

                    <h2 class="text-xl font-bold text-white">ISEST</h2>
                </div>
                <p class="text-gray-400 mb-6">Institut Supérieur d'Excellence en Santé de Touba, un établissement dédié
                    à l'excellence académique et à la formation de professionnels de santé qualifiés.</p>

                <div class="flex space-x-4 mt-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Column 2: Explore -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Explorer</h3>
                <ul class="space-y-3">
                    <li><a href="/"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Accueil</a>
                    </li>
                    <li><a href="/presentaion-isest"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            À propos de nous</a>
                    </li>
                    <li><a href="/formations"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Nos formations</a>
                    </li>
                    <li><a href="/vie-etudiante"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Vie étudiante</a>
                    </li>
                    <li><a href="/posts"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Actualités</a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Admission -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Admission</h3>
                <ul class="space-y-3">
                    <li><a href="/candidature"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Candidature</a>
                    </li>
                    <li><a href="/convention-stage"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Convention de stage</a>
                    </li>
                    <li><a href="/procedure-inscription"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Procédure d'inscription</a>
                    </li>
                    <li><a href="/edu"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            EduConnect</a>
                    </li>
                    <li><a href="/moodle"
                            class="text-gray-400 hover:text-emerald-400 transition-colors duration-300 flex items-center">
                            <svg class="h-3 w-3 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Moodle</a>
                    </li>
                </ul>
            </div>

            <!-- Column 4: Contact -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact</h3>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Touba, Sénégal</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>info@isest.touba</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>+221 33 123 45 67</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="h-6 w-6 text-emerald-500 mr-2 mt-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div>
                            <p>Lundi - Vendredi: 8h00 - 17h00</p>
                            <p>Samedi: 9h00 - 13h00</p>
                        </div>
                    </li>
                </ul>

                <a href="/contact"
                    class="mt-6 inline-block px-6 py-2 border-2 border-emerald-500 text-emerald-500 hover:bg-emerald-500 hover:text-white transition-colors duration-300 rounded-lg font-medium">
                    Nous contacter
                </a>
            </div>
        </div>
    </div>

    <!-- Footer bottom -->
    <div class="border-t border-gray-800">
        <div class="container mx-auto px-6 py-6 flex flex-col md:flex-row items-center justify-between">
            <div class="text-sm text-gray-500">
                &copy; {{ date('Y') }} ISEST. Tous droits réservés.
            </div>
            <div class="mt-4 md:mt-0">
                <ul class="flex space-x-6 text-sm text-gray-500">
                    <li><a href="#" class="hover:text-emerald-400 transition-colors duration-300">Conditions
                            d'utilisation</a></li>
                    <li><a href="#" class="hover:text-emerald-400 transition-colors duration-300">Politique de
                            confidentialité</a></li>
                    <li><a href="#" class="hover:text-emerald-400 transition-colors duration-300">Cookies</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

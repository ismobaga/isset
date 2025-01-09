@assets
@endassets

<x-slot:header>

    <div class="bg-cream">
        <div class="max-w-screen-xl min-h-screen px-8 mx-auto flex flex-col lg:flex-row items-start">
            <!--Left Col-->
            <div
                class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
                    Bienvenue à l'Institut Supérieur d'Excellence en Santé de <span class="text-emerald-500">TOUBA</span>


                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">
                    L'ISEST est une institution d'enseignement supérieur dédiée à former les futurs professionnels de la santé avec un engagement envers l'excellence académique et l'innovation dans le domaine médical.</p>
                <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700"
                    class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
                    <button
                        class="lg:mx-0 bg-emerald-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        Admission gratuite
                    </button>
                    <div
                        class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        <button class="bg-white w-14 h-14 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 ml-2" viewBox="0 0 24 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z"
                                    fill="#2F327D" />
                            </svg>
                        </button>
                        
                                <span class="cursor-pointer" wire:click="$toggle('showVideoModal')">Regarder video</span>
                           
                        <x-modal id="view-video">
                            
                            {{-- Contenu du modal --}}
                        </x-modal>
                    </div>
                </div>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
                <img data-aos="fade-up" data-aos-once="true" class="w-10/12 mx-auto 2xl:-mb-20"
                    src="images/pharm-z.png" />
                <!-- calendar -->
                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
                    class="absolute top-20 -left-6 sm:top-32 sm:left-10 md:top-40 md:left-16 lg:-left-0 lg:top-52 floating-4">
                    {{-- <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/calendar.svg"> --}}
                    <x-svg-card class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" />
                </div>
                <!-- red -->
                <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true"
                    class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
                    <svg class="h-16 sm:h-24" viewBox="0 0 149 149" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d)">
                            <rect x="40" y="32" width="69" height="69" rx="14" fill="#059669" />
                        </g>
                        <rect x="51.35" y="44.075" width="47.3" height="44.85" rx="8" fill="white" />
                        <path d="M74.5 54.425V78.575" stroke="#F25471" stroke-width="4" stroke-linecap="round" />
                        <path d="M65.875 58.7375L65.875 78.575" stroke="#059669" stroke-width="4"
                            stroke-linecap="round" />
                        <path d="M83.125 63.9125V78.575" stroke="#059669" stroke-width="4" stroke-linecap="round" />
                        <defs>
                            <filter id="filter0_d" x="0" y="0" width="149" height="149"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                <feOffset dy="8" />
                                <feGaussianBlur stdDeviation="20" />
                                <feColorMatrix type="matrix"
                                    values="0 0 0 0 0.825 0 0 0 0 0.300438 0 0 0 0 0.396718 0 0 0 0.26 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <!-- ux class -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                    class="absolute bottom-14 -left-4 sm:left-2 sm:bottom-20 lg:bottom-24 lg:-left-4 floating">
                    {{-- <img class="bg-white bg-opacity-80 rounded-lg h-20 sm:h-28" src="img/ux-class.svg" alt=""> --}}
                    <x-svg-card class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16"
                        text="Accepter assistant infirmier" />

                </div>
                <!-- congrats -->
                <div data-aos="fade-up" data-aos-delay="600" data-aos-once="true"
                    class="absolute bottom-20 md:bottom-48 lg:bottom-52 -right-6 lg:right-8 floating-4">
                    {{-- <img class="bg-white bg-opacity-80 rounded-lg h-12 sm:h-16" src="img/congrat.svg" alt=""> --}}
                    <x-svg-card class="bg-white bg-opacity-80 rounded-lg h-16 sm:h-20"
                        text="Accepter assistant infirmier" />

                </div>
            </div>
        </div>
        <div class="text-white -mt-14 sm:-mt-24 lg:-mt-36 z-40 relative">
            <svg class="xl:h-40 xl:w-full" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                    fill="currentColor"></path>
            </svg>
            <div class="bg-white w-full h-20 -mt-px"></div>
        </div>
    </div>
</x-slot:header>

<!-- container -->
<div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">

    <!-- trusted by -->
    <div class="max-w-4xl mx-auto">
        <h1 class="text-center mb-3 text-gray-400 font-medium">Nos partenaires</h1>
        <div class="grid grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">
            
            {{-- <x-curator-curation :media="1" curation="thumbnail" /> --}}
            <img class="h-12" src="images/partners/10.png">

            <img class="h-12" src="images/partners/10.png">
            <img class="h-12" src="images/partners/10.png">
            <img class="h-12" src="images/partners/10.png">
            <img class="h-12" src="images/partners/10.png">
            <img class="h-12" src="images/partners/10.png">
        </div>
    </div>

    <!-- All-In-One Cloud Software. -->
    <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24">
        <h1 class="font-bold text-darken my-3 text-2xl">Installations
        </h1>
        <p class="leading-relaxed text-gray-500">Nos installations modernes offrent un environnement propice à l'apprentissage pratique et à la recherche dans le domaine de la santé. De laboratoires bien équipés à des salles de classe interactives, nous sommes déterminés à offrir la meilleure expérience d'apprentissage possible à nos étudiants. De plus, notre bibliothèque offre un large éventail de ressources académiques et professionnelles pour soutenir l'apprentissage et la recherche.</p>
    </div>
    <!-- card -->
    <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
        <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
            <div style="background: #5B72EE;"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <x-icon name="heroicon-o-academic-cap" class="h-6 w-6 text-white" />
            </div>
            <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Diplômes</h1>
            <p class="px-4 text-gray-500">Des diplômes d’Etat du Sénégal reconnus dans l’espace CEDEAO</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
            <div style="background: #047857;"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <x-icon name="heroicon-o-wrench-screwdriver" class="h-6 w-6 text-white" />
            </div>
            <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Equipement</h1>
            <p class="px-4 text-gray-500">Des équipements médicaux de pointe pour les travaux dirigés et les pratiques
            </p>
        </div>
        <div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
            <div style="background: #29B9E7;"
                class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                <x-icon name="heroicon-o-cog-8-tooth" class="h-6 w-6 text-white" />
            </div>
            <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken lg:h-14 pt-3">Système</h1>
            <p class="px-4 text-gray-500">Un système LMD favorisant la mobilité des étudiants au niveau national et
                international</p>
        </div>
    </div>

    <!-- lorem -->
    <div class="mt-28">
        <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
            <h1 class="text-3xl font-bold mb-4">Découvrez l'Institut Supérieur d'Excellence en Santé de Touba <span class="text-emerald-500">(ISEST)</span></h1>
            <p class="text-gray-500">Au cœur de la ville sainte de Touba, l'Institut Supérieur d'Excellence en Santé de Touba (ISEST) s'impose comme un pilier de la formation et de la recherche dans le domaine de la santé. Voici ce qui fait de l'ISEST un choix incontournable.</p>
        </div>
        <div data-aos="fade-up"
            class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
            <div class="relative md:w-5/12">
                <img class="rounded-2xl" src="images/consult.jpg" alt="">
                <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">Pour les
                            etudiants
                        </h1>
                        <button
                            class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                            style="background: rgba(47, 50, 125, 0.9)">Voir nos programmes</button>
                    </div>
                </div>
            </div>
            <div class="relative md:w-5/12">
                <img class="rounded-2xl" src="images/pharm.jpg" alt="">
                <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">POUR LES
                            INSTRUCTEURS
                        </h1>
                        <button
                            class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">Commencez
                            à donner un cours aujourd'hui</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="sm:flex items-center sm:space-x-8 mt-36">
        <div data-aos="fade-right" class="sm:w-1/2 relative">
            <div class="bg-emerald-500 rounded-full absolute w-12 h-12 z-0 -left-4 -top-3 animate-pulse"></div>
            <h1 class="font-semibold text-2xl relative z-50 text-darken lg:pr-10">Formation d'excellence </h1>
            <p class="py-5 lg:pr-32">Profitez d'une formation d'excellence dispensée par une équipe pédagogique hautement qualifiée, composée de professeurs et de chercheurs reconnus dans leur domaine. À l'ISEST, nous nous engageons à fournir un enseignement de qualité, en phase avec les dernières avancées scientifiques et technologiques.</p>
            <a href="" class="underline">En savoir plus</a>
        </div>
        <div data-aos="fade-left" class="sm:w-1/2 relative mt-10 sm:mt-0">
            <div style="background: #2F327D;" class="floating w-24 h-24 absolute rounded-lg z-0 -top-3 -left-3"></div>
            <img class="rounded-xl z-40 relative" src="images/consult.jpg" alt="">
            <button
                class="bg-white w-14 h-14 rounded-full flex items-center justify-center absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out z-50">
                <svg class="w-5 h-5 ml-1" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z"
                        fill="#2F327D" />
                </svg>
            </button>
            <div class="bg-emerald-500 w-40 h-40 floating absolute rounded-lg z-10 -bottom-3 -right-3"></div>
        </div>
    </div>

    <div class="md:flex mt-40 md:space-x-10 items-start">
        <div data-aos="fade-down" class="md:w-7/12 relative">
            <div style="background: #33EFA0" class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse">
            </div>
            <div style="background: #33D9EF;" class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping">
            </div>
            <img class="relative z-50 floating rounded-xl" src="images/pharm.jpg" alt="">
            <div style="background: #2F327D;"
                class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
            <div style="background: #056666;"
                class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
        </div>
        <div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
            <h1 class="text-2xl font-semibold text-darken lg:pr-36">Un <span class="text-emerald-500">personnel
                    d’enseignement et de recherche de qualité,</span> dans un cadre idéal</h1>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                        <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                        <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                        <rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2"
                            fill="#048C06" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D" />
                        <rect width="21.2245" height="21.2245" rx="2" fill="#048C06" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

            </div>
            <div class="flex items-center space-x-5 my-5">
                <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                    <svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z"
                            fill="#2F327D" />
                    </svg>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

            </div>
        </div>
    </div>

    <!-- Tools For Teachers And Learners -->
    <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
        <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
            <h1 class="text-darken font-semibold text-3xl lg:pr-20">Approche pratique et immersive
            </h1>
            <p class="text-gray-500 my-4 lg:pr-32">Expérimentez une approche pédagogique pratique et immersive, conçue pour développer vos compétences professionnelles et vous préparer efficacement à votre future carrière. Grâce à des stages en milieu hospitalier et des projets de recherche, vous aurez l'occasion de mettre en pratique les connaissances acquises en classe et d'acquérir une expérience concrète du travail dans le domaine de la santé.</p>
        </div>
        <img data-aos="fade-left" class="md:w-1/2" src="images/pharm-z.png">
    </div>

    {{-- <!-- Assessments, Quizzes, Tests -->
    <div class="mt-20 flex flex-col-reverse md:flex-row items-center md:space-x-10">
        <div data-aos="fade-right" class="md:w-6/12">
            <img class="md:w-11/12" src="img/true-false.png">
        </div>
        <div data-aos="fade-left" class="md:w-6/12 md:transform md:-translate-y-20">
            <h1 class="font-semibold text-darken text-3xl lg:pr-64">Assessments, <span
                    class="text-yellow-500">Quizzes</span>, Tests</h1>
            <p class="text-gray-500 my-5 lg:pr-52">Easily launch live assignments, quizzes, and tests. Student results
                are automatically entered in the online gradebook.</p>
        </div>
    </div>

    <!-- Class Management Tools for Educators -->
    <div class="flex flex-col md:flex-row items-center mt-12">
        <div data-aos="fade-right" class="md:w-5/12">
            <h1 class="text-darken font-semibold text-3xl leading-tight lg:pr-32"><span class="text-yellow-500">Class
                    Management</span> Tools for Educators</h1>
            <p class="my-5 lg:pr-14">Class provides tools to help run and manage the class such as Class Roster,
                Attendance, and more. With the Gradebook, teachers can review and grade tests and quizzes in real-time.
            </p>
        </div>
        <img data-aos="fade-left" class="md:w-7/12" src="img/gradebook.png">
    </div>

    <!-- One-on-One Discussions -->
    <div class="mt-24 flex flex-col-reverse md:flex-row items-center md:space-x-10">
        <div data-aos="fade-right" class="md:w-7/12">
            <img class="md:w-11/12" src="img/discussion.png">
        </div>
        <div data-aos="fade-left" class="md:w-5/12 md:transform md:-translate-y-6">
            <h1 class="font-semibold text-darken text-3xl lg:pr-64">One-on-One <span
                    class="text-yellow-500">Discussions</span></h1>
            <p class="text-gray-500 my-5 lg:pr-24">Teachers and teacher assistants can talk with students privately
                without leaving the Zoom environment.</p>
        </div>
    </div> --}}

    <button data-aos="flip-up"
        class="px-5 py-3 border border-emerald-500 text-emerald-500 font-medium my-14 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full mx-auto block">Voir
        plus d'avantages</button>

    <!-- INTEGRATIONS -->
    {{-- <div class="mt-24 flex flex-col md:flex-row items-start md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-6/12">
            <img class="md:w-8/12 mx-auto" src="img/integrations.png">
        </div>
        <div data-aos="zoom-in-left" class="md:w-6/12">
            <div class="flex items-center space-x-20 mb-5">
                <span class="border border-gray-300 w-14 absolute"></span>
                <h1 class="text-gray-400 tracking-widest text-sm">INTEGRATIONS</h1>
            </div>
            <h1 class="font-semibold text-darken text-2xl lg:pr-40">200+ educational tools and platform <span
                    class="text-yellow-500">integrations</span></h1>
            <p class="text-gray-500 my-5 lg:pr-20">Schoology has every tool your classroom needs and comes
                pre-integrated with more than 200+ tools, student information systems (SIS), and education platforms.
            </p>
            <button
                class="px-5 py-3 border border-yellow-500 text-yellow-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">See
                All Integrations</button>
        </div>
    </div> --}}

    <!-- TESTIMONIAL -->
    <div class="mt-24 flex flex-col-reverse md:flex-row items-start md:space-x-10">
        <div data-aos="zoom-in-right" class="md:w-5/12">
            <div class="flex items-center space-x-20 mb-5">
                <span class="border border-gray-300 w-14 absolute"></span>
                <h1 class="text-gray-400 tracking-widest text-sm">TÉMOIGNAGE</h1>
            </div>
            <h1 class="font-semibold text-darken text-2xl lg:pr-40">Que disent-ils ?</h1>
            <p class="text-gray-500 my-5 lg:pr-36">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <p class="text-gray-500 my-5 lg:pr-36">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <p class="text-gray-500 my-5 lg:pr-36">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <button
                class="flex items-center space-x-3 pl-3 border-b border-l border-t border-emerald-500 text-emerald-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">
                <span>Rédigez votre évaluation</span>
                <div class="border border-emerald-500 h-14 w-14 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z"
                            fill="#F48C06" />
                    </svg>
                </div>
            </button>
        </div>
        <div data-aos="zoom-in-left" class="md:w-7/12">
            <img class="md:w-10/12 mx-auto" src="images/pharm-z.png">
            <div
                class="bg-white border-l-8 border-emerald-500  mx-auto bg-left md:w-10/12 min-h-40 floating absolute rounded-lg z-20 bottom-10 p-4 right-1/2">
                <figure class="max-w-screen-md mx-auto text-center">
                    <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                    <blockquote>
                        <p class="text-2xl italic font-medium text-gray-900 dark:text-white">Lorem ipsum dolor sit,
                            amet consectetur adipisicing elit. Eveniet asperiores beatae vitae.</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
                        <img class="w-6 h-6 rounded-full" src="/images/pharm-z.png" alt="profile picture">
                        <div
                            class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500 dark:divide-gray-700">
                            <cite class="pe-3 font-medium text-gray-900 dark:text-white">Cheick Mbaye</cite>
                            <cite class="ps-3 text-sm text-gray-500 dark:text-gray-400">Directeur</cite>
                        </div>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>

    <!-- Latest News and Resources -->
    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Dernières nouvelles et ressources</h1>
        <p class="text-gray-500 my-5">Voir les développements survenus à l'ISEST dans le monde</p>
    </div>
    <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20">
        <div class="lg:w-6/12">
            <img class="w-full mb-6" src="{{ Storage::disk('blog')->url($posts[0]->image) }}">
            <span
                class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">{{ $posts[0]->category->name }}</span>
            <h1 class="text-gray-800 font-semibold my-3 text-xl">{{ $posts[0]->title }} </h1>
            <p class="text-gray-500 mb-3">{{ str($posts[0]->content)->limit(100) }}</p>
            <a href="" class="underline">En savoir plus</a>
        </div>
        <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">
            @for ($i = 1; $i < count($posts); $i++)
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full max-h-40"
                                src="{{ Storage::disk('blog')->url($posts[$i]->image) }}">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">{{ $posts[$i]->category?->name }}</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">{{ $posts[$i]->title }}</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">
                            {{ str($posts[$i]->content)->limit(100) }}</p>
                    </div>
                </div>
            @endfor


        </div>
    </div>

</div>
<!-- .container -->

@script
@endscript
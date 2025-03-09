<!-- navbar -->
<div x-data="{ open: false, admissionOpen: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.pageYOffset > 20 })"
    class="w-full sticky top-0 text-gray-700 z-50 transition-all duration-300 ease-in-out"
    :class="{'bg-white shadow-md': scrolled, 'bg-white': !scrolled}">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
        <div class="flex flex-row items-center justify-between" :class="{'py-4': scrolled, 'py-6': !scrolled}">
            <div class="relative md:mt-8">
                <a href="/"
                    class="text-lg relative z-50 font-bold tracking-widest text-gray-900 rounded-lg focus:outline-none focus:shadow-outline">ISEST</a>
                {{-- <img src="logo.png" alt="" class="h-14 z-40 absolute -top-2 -left-3 text-emerald-500"> --}}
                <svg class="h-11 z-40 absolute -top-2 -left-3" viewBox="0 0 79 79" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M35.2574 2.24264C37.6005 -0.100501 41.3995 -0.100505 43.7426 2.24264L76.7574 35.2574C79.1005 37.6005 79.1005 41.3995 76.7574 43.7426L43.7426 76.7574C41.3995 79.1005 37.6005 79.1005 35.2574 76.7574L2.24264 43.7426C-0.100501 41.3995 -0.100505 37.6005 2.24264 35.2574L35.2574 2.24264Z"
                        fill="#10b981" />
                </svg>
            </div>
            <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                    <path x-show="!open" fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        @php
            $menuItems = [
                [
                    'label' => 'Groupe ISEST',
                    'hasSubmenu' => true,
                    'submenu' => [
                        ['label' => 'Présentaion du Groupe ISEST', 'url' => '/presentaion-isest'],
                        ['label' => 'Paténariats Entreprise', 'url' => '/partenariats-entreprise'],
                    ],
                ],
                ['label' => 'Formations', 'url' => '/formations'],
                [
                    'label' => 'Admission',
                    'hasSubmenu' => true,
                    'submenu' => [
                        ['label' => 'Candidature', 'url' => '/candidature'],
                        ['label' => 'Convention de stage', 'url' => '/convention-stage'],
                        ['label' => 'Procédure d\'inscription', 'url' => '/#'],
                        ['label' => 'Frais de scolarité', 'url' => '/#'],
                    ],
                ],
                [
                    'label' => 'Vie de l\'école',
                    'hasSubmenu' => true,
                    'submenu' => [
                        ['label' => 'Vie étudiante', 'url' => '#'],
                        ['label' => 'Actualités', 'url' => '/posts'],
                        ['label' => 'Evénements', 'url' => '#'],
                        ['label' => 'Bourses', 'url' => '#'],
                    ],
                ],

                ['label' => 'Contact', 'url' => '/contact'],
                ['label' => 'Moodle', 'url' => '/moodle'],
            ];
        @endphp
        <nav :class="{ 'transform md:transform-none scale-y-0': !open, 'h-full': open }"
            class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 font-bold ">
            @foreach ($menuItems as $item)
                @if (isset($item['hasSubmenu']) && $item['hasSubmenu'])
                    <div class="group relative cursor-pointer ">
                        <div
                            class="flex items-center  rounded-lg justify-between space-x-1 hover:bg-slate-200 text-black">
                            <a
                                class="text-black px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-4 md:ml-4 hover:bg-slate-200  hover:text-gray-900 focus:outline-none focus:shadow-outline flex">
                                {{ $item['label'] }}
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="h-6 w-6 transition-transform duration-200 -rotate-90 group-hover:rotate-180">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </a>
                        </div>

                        <div
                            class="invisible absolute z-50 flex w-full flex-col bg-white py-1  text-gray-800 shadow-xl
                            opacity-0 transition-all duration-300 ease-in-out
                            group-hover:visible group-hover:opacity-100
                            group-hover:translate-y-0 translate-y-[-10px]">
                            @foreach ($item['submenu'] as $subitem)
                                <a href="{{ $subitem['url'] }}"
                                    class="px-4 y-2 block border-b w-full text-black border-gray-100 py-1 font-semibold hover:bg-slate-200   hover:text-black ">
                                    {{ $subitem['label'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @else
                    <a class=" text-black px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-4 md:ml-4 hover:bg-slate-200  hover:text-gray-900 focus:outline-none focus:shadow-outline"
                        href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                @endif
            @endforeach

            <a class="px-10 py-3 mt-2 text-sm text-center bg-emerald-500 text-white rounded-full md:mt-4 md:ml-4"
                href="/edu">EduConnect</a>
        </nav>
    </div>
</div>

<style>
    /* Add this style section at the bottom of the file */
    .group:hover .absolute {
        transition-delay: 0s;
    }

    .group .absolute {
        transition-delay: 0.3s;
    }

    /* Add new styles for navbar transition */
    .sticky {
        transition: all 0.3s ease;
    }

    .shadow-md {
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
</style>

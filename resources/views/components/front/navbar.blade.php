<!-- navbar -->
<div x-data="{ open: false, admissionOpen: false }" class="w-full text-gray-700 bg-cream">
    <div class="flex flex-col max-w-screen-xl px-8 mx-auto md:items-center md:justify-between md:flex-row">
        <div class="flex flex-row items-center justify-between py-6">
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
                ['label' => 'Accueil', 'url' => '/'],
                ['label' => 'Formations', 'url' => '/formations'],
                [
                    'label' => 'Admission',
                    'hasSubmenu' => true,
                    'submenu' => [
                        ['label' => 'Candidature', 'url' => '/candidature'],
                        ['label' => 'Procédure d\'inscription', 'url' => '/procedure-inscription'],
                        ['label' => 'Frais de scolarité', 'url' => '/frais-scolarite'],
                    ],
                ],
                ['label' => 'A propos', 'url' => '/about'],
                ['label' => 'Contact', 'url' => '/contact'],
            ];
        @endphp
        <nav :class="{ 'transform md:transform-none scale-y-0': !open, 'h-full': open }"
            class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 ">
            @foreach ($menuItems as $item)
                @if (isset($item['hasSubmenu']) && $item['hasSubmenu'])
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = !open"
                        @mouseleave="open = false">
                        <button
                            class="flex items-center px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-4 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline">
                            {{ $item['label'] }}
                            <svg :class="open ? '' : '-rotate-90'" class="w-4 h-4 ml-1 "
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-48 mt-2 origin-top-right bg-white rounded-md shadow-lg md:w-56">
                            <div class="py-1 rounded-md bg-white shadow-xs">
                                @foreach ($item['submenu'] as $subitem)
                                    <a href="{{ $subitem['url'] }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $subitem['label'] }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-4 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
                        href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                @endif
            @endforeach
            <a class="px-10 py-3 mt-2 text-sm text-center bg-emerald-500 text-white rounded-full md:mt-4 md:ml-4"
                href="/edu">EduConnect</a>
        </nav>
    </div>
</div>

<section x-data="{ open: false }"
    class="grid grid-cols-2 sm:grid-cols-3 items-center text-primary border-b border-b-neutral/30 py-2.5 px-5">

    {{-- Logo --}}
    <h1 class="justify-self-start font-heading">
        DOMINIC_KNABE.SYS
    </h1>

    {{-- Desktop nav --}}
    <nav class="hidden sm:flex justify-self-center font-mono">
        <ul class="flex gap-5 items-center">
            <li><a href="">Root</a></li>
            <li><a href="">Registry</a></li>
            <li><a href="">Monitor</a></li>
            <li><a href="">Diagnostics</a></li>
        </ul>
    </nav>

    {{-- Right side desktop --}}
    <div class="hidden sm:flex justify-self-end font-mono">
        Test
    </div>

    {{-- Burger button --}}
    <button @click="open = true" class="justify-self-end sm:hidden">
        <svg class="w-7 h-7 text-primary" viewBox="0 0 24 24" fill="none">
            <path d="M4 18H10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <path d="M4 12L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <path d="M4 6L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
    </button>

    {{-- Mobile overlay --}}
    <div x-show="open" @click="open = false" x-transition.opacity class="fixed inset-0 bg-black/40 z-40 sm:hidden">
    </div>

    {{-- Mobile drawer --}}
    <nav x-show="open" @click.outside="open = false" x-transition:enter="transition transform duration-500"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition transform duration-500" x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="translate-x-full opacity-0"
        class="fixed top-0 right-0 z-50 h-screen w-64 bg-background font-mono sm:hidden">

        <button @click="open = false" class="p-5 text-red-500">
            <!-- X icon -->
            <svg class="w-8 h-8 shrink-0 text-red-500 hover:cursor-pointer -ml-2" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path fill="currentColor"
                    d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
            </svg>
        </button>

        <ul class="flex flex-col gap-2 font-mono text-white">
            <li><a href="" class="block px-5 py-2.5 hover:bg-primary/80 hover:text-black transition">Root</a>
            </li>
            <li><a href="" class="block px-5 py-2.5 hover:bg-primary/80 hover:text-black transition">Registry</a>
            </li>
            <li><a href="" class="block px-5 py-2.5 hover:bg-primary/80 hover:text-black transition">Monitor</a>
            </li>
            <li><a href=""
                    class="block px-5 py-2.5 hover:bg-primary/80 hover:text-black transition">Diagnostics</a></li>
        </ul>
    </nav>

</section>

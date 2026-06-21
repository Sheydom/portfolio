<section x-data="{ open: false }"
    class="grid grid-cols-2 sticky top-0 z-50 bg-black sm:hidden  items-center text-primary border-b border-b-neutral/30 py-2.5 px-5">

    {{-- Burger button --}}
    <button @click="open = true" class="justify-self-start sm:hidden">
        <svg class="w-7 h-7 text-primary" viewBox="0 0 24 24" fill="none">
            <path d="M4 18H10" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <path d="M4 12L16 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            <path d="M4 6L20 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
    </button>

    {{-- Logo --}}
    <h1 class="justify-self-end font-heading sm:hidden">
        DOMINIC_KNABE.SYS
    </h1>






    {{-- Mobile overlay --}}
    <div x-show="open" @click="open = false" x-transition.opacity class="fixed inset-0 bg-black/40 z-40 sm:hidden">
    </div>

    {{-- Mobile drawer --}}
    <nav x-show="open" @focusout="open = false" @click.outside="open = false"
        x-transition:enter="transition transform duration-500" x-transition:enter-start="-translate-x-full opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100" x-transition:leave="transition transform duration-500"
        x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0"
        class="fixed top-0 flex flex-col left-0 z-50 h-screen w-64 bg-background font-mono sm:hidden">

        <button @click="open = false" class="p-5 text-red-500 mr-0">
            <!-- X icon -->
            <svg class="w-8 h-8 shrink-0 text-red-500 hover:cursor-pointer -ml-2" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path fill="currentColor"
                    d="M183.1 137.4C170.6 124.9 150.3 124.9 137.8 137.4C125.3 149.9 125.3 170.2 137.8 182.7L275.2 320L137.9 457.4C125.4 469.9 125.4 490.2 137.9 502.7C150.4 515.2 170.7 515.2 183.2 502.7L320.5 365.3L457.9 502.6C470.4 515.1 490.7 515.1 503.2 502.6C515.7 490.1 515.7 469.8 503.2 457.3L365.8 320L503.1 182.6C515.6 170.1 515.6 149.8 503.1 137.3C490.6 124.8 470.3 124.8 457.8 137.3L320.5 274.7L183.1 137.4z" />
            </svg>
        </button>

        <ul class="flex flex-col gap-2 font-mono text-white">
            <li><a href="#about" @click="open = false"
                    class="flex text-xl items-center gap-2 px-5 py-2.5 hover:bg-primary/80 hover:text-black transition"><svg
                        class="w-7 h-7 shrink-0 text-primary" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="System / Terminal">
                                <path id="Vector"
                                    d="M17 15H12M7 10L10 12.5L7 15M3 15.8002V8.2002C3 7.08009 3 6.51962 3.21799 6.0918C3.40973 5.71547 3.71547 5.40973 4.0918 5.21799C4.51962 5 5.08009 5 6.2002 5H17.8002C18.9203 5 19.4796 5 19.9074 5.21799C20.2837 5.40973 20.5905 5.71547 20.7822 6.0918C21 6.5192 21 7.07899 21 8.19691V15.8031C21 16.921 21 17.48 20.7822 17.9074C20.5905 18.2837 20.2837 18.5905 19.9074 18.7822C19.48 19 18.921 19 17.8031 19H6.19691C5.07899 19 4.5192 19 4.0918 18.7822C3.71547 18.5905 3.40973 18.2837 3.21799 17.9074C3 17.4796 3 16.9203 3 15.8002Z"
                                    stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                    stroke-linejoin="round">
                                </path>
                            </g>
                        </g>
                    </svg>About</a>
            </li>
            <li><a href="#projects" @click="open = false"
                    class="flex text-xl items-center px-5 py-2.5 gap-2 hover:bg-primary/80 hover:text-black transition"><svg
                        class="shrink-0 w-7 h-7 items-center text-primary" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill="none" stroke="currentColor" stroke-width="1"
                                d="M9,15 L9,23 L1,23 L1,15 L9,15 Z M23,15 L23,23 L15,23 L15,15 L23,15 Z M9,1 L9,9 L1,9 L1,1 L9,1 Z M23,1 L23,9 L15,9 L15,1 L23,1 Z">
                            </path>
                        </g>
                    </svg>Projects</a>
            </li>
            <li><a href="#skills" @click="open = false"
                    class="flex text-xl gap-2 items-center px-5 py-2.5 hover:bg-primary/80 hover:text-black transition"><svg
                        class="w-7 h-7 shrink-0 text-primary" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M3 3V21" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M21 21H3" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M7 16L12.25 10.75L15.75 14.25L21 9" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>Skills</a>
            </li>
            {{-- <li><a href="#infrastructure" @click="open = false"
                    class="flex items-center gap-2 px-5 py-2.5 hover:bg-primary/80 hover:text-black transition">
                    <svg class="w-7 h-7 shrink-0 text-primary" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" stroke="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M22 19H14M2 19H10" stroke="currentColor" stroke-width="1"
                                stroke-linecap="round">
                            </path>
                            <path d="M12 17V14" stroke="#000000" stroke-width="1" stroke-linecap="round"></path>
                            <circle cx="12" cy="19" r="2" stroke="currentColor" stroke-width="1">
                            </circle>
                            <path
                                d="M2 11C2 9.34315 3.34315 8 5 8H19C20.6569 8 22 9.34315 22 11C22 12.6569 20.6569 14 19 14H5C3.34315 14 2 12.6569 2 11Z"
                                stroke="currentColor" stroke-width="1"></path>
                            <path
                                d="M2 5C2 3.34315 3.34315 2 5 2H19C20.6569 2 22 3.34315 22 5C22 6.65685 20.6569 8 19 8H5C3.34315 8 2 6.65685 2 5Z"
                                stroke="currentColor" stroke-width="1"></path>
                            <path d="M13 5L19 5" stroke="currentColor" stroke-width="1" stroke-linecap="round">
                            </path>
                            <path d="M13 11L19 11" stroke="currentColor" stroke-width="1" stroke-linecap="round">
                            </path>
                            <circle cx="6" cy="5" r="1" fill="#000000"></circle>
                            <circle cx="6" cy="11" r="1" fill="#000000"></circle>
                        </g>
                    </svg>Infrastructure</a></li> --}}

        </ul>
        <a href="#contactForm" @click="open = false"
            class="text-center mt-auto font-mono mx-5 mb-15 text-primary align-bottom border border-primary px-5 py-1 transition duration-300 ease-in-out hover:-translate-y-2 ">
            INITIATE_CONTACT
        </a>
    </nav>

</section>

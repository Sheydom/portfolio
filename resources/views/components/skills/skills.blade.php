<section id="skills" x-data="{ show: false }" x-intersect.once="show = true" x-bind:class="{ 'is-visible': show }"
    class="fade-card mx-auto flex  flex-col items-center gap-8 px-5 py-20">
    <h2 class="text-center text-4xl text-white font-mono">
        SKILLS
    </h2>

    <div class="grid max-w-6xl grid-cols-2 gap-6 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <x-skills.cardComponent skill="Frontend" :items="[
            ['title' => 'HTML', 'icon' => 'skills/html.png'],
            ['title' => 'CSS', 'icon' => 'skills/css.svg'],
            ['title' => 'JavaScript', 'icon' => 'skills/js.svg'],
            ['title' => 'Tailwind', 'icon' => 'skills/tailwind.png'],
            ['title' => 'Alpine.js', 'icon' => 'skills/alpine.png'],
            ['title' => 'Livewire', 'icon' => 'skills/livewire.png'],
        ]" />

        <x-skills.cardComponent skill="Backend" :items="[
            ['title' => 'PHP', 'icon' => 'skills/php.png'],
            ['title' => 'Laravel', 'icon' => 'skills/laravel.ico'],
            ['title' => 'Eloquent ORM', 'icon' => 'skills/orm.svg'],
            ['title' => 'MySQL', 'icon' => 'skills/mysql.svg'],
            ['title' => 'Authentication', 'icon' => 'skills/auth.svg'],
            ['title' => 'REST APIs', 'icon' => 'skills/api.svg'],
        ]" />

        <x-skills.cardComponent skill="Infrastructure" :items="[
            ['title' => 'Ubuntu Linux', 'icon' => 'skills/ubuntu.svg'],
            ['title' => 'Docker', 'icon' => 'skills/docker.svg'],
            ['title' => 'Caddy', 'icon' => 'skills/caddy.svg'],
            ['title' => 'Reverse Proxy', 'icon' => 'skills/reverse.png'],
            ['title' => 'Cloudflare', 'icon' => 'skills/cloudflare.svg'],
            ['title' => 'Git', 'icon' => 'skills/git.svg'],
        ]" />
        <div
            class="flex min-h-90 flex-col overflow-hidden rounded-xl border border-primary/20 bg-black
                       shadow-[0_0_25px_-15px] shadow-primary">
            <h3 class="sm:border-b border-primary/20 bg-black py-3 text-center font-mono text-2xl text-primary">
                Deployment Workflow
            </h3>

            <div class="flex flex-1 items-center justify-center  sm:hidden">
                <img class="max-h-80 w-full object-contain scale-110 lg:scale-110"
                    src="{{ asset('skills/deployment_flow.png') }}" alt="Deployment workflow">
            </div>
            <div class="hidden sm:flex flex-1   ">
                <img class="max-h-100 w-full object-contain " src="{{ asset('skills/deployment_flow.png') }}"
                    alt="Deployment workflow">
            </div>
        </div>

    </div>
</section>

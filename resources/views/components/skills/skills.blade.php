<section class="flex flex-col items-center p-5 gap-5">
    <h2 class="text-white text-4xl mb-10">SKILLS</h2>
    <div class="grid grid-cols-2 gap-5">
        <x-skills.cardComponent skill="Frontend" :items="[
            ['title' => 'HTML', 'icon' => 'skills/html.png'],
            ['title' => 'CSS', 'icon' => 'skills/css.svg'],
            ['title' => 'JavaScript', 'icon' => 'skills/js.svg'],
            ['title' => 'Tailwind', 'icon' => 'skills/tailwind.png'],
            ['title' => 'Livewire', 'icon' => 'skills/livewire.png'],
            ['title' => 'Alpine.js', 'icon' => 'skills/alpine.png'],
        ]" />
        <x-skills.cardComponent skill="Backend" :items="[
            ['title' => 'PHP', 'icon' => 'skills/php.png'],
            ['title' => 'Laravel', 'icon' => 'skills/laravel.ico'],
            ['title' => 'ORM', 'icon' => 'skills/orm.svg'],
            ['title' => 'Authentication', 'icon' => 'skills/auth.svg'],
            ['title' => 'REST APIs', 'icon' => 'skills/api.svg'],
            ['title' => 'Validation', 'icon' => 'skills/form.svg'],
        ]"></x-skills.cardCopmponent>
            <x-skills.cardComponent skill="Infrastructure" :items="[
                ['title' => 'Docker', 'icon' => 'skills/docker.svg'],
                ['title' => 'Linux-Ubuntu', 'icon' => 'skills/Ubuntu.svg'],
                ['title' => 'MySQL', 'icon' => 'skills/mysql.svg'],
                ['title' => 'Git', 'icon' => 'skills/git.svg'],
                ['title' => 'Cloudflare', 'icon' => 'skills/cloudflare.svg'],
                ['title' => 'Caddy', 'icon' => 'skills/caddy.svg'],
            ]"></x-skills.cardComponent>
            <div class="bg-surface/60 overflow-hidden  border border-primary/20 rounded-xl shadow-[0_0_25px_-15px]
                shadow-primary"><h2 class="bg-black pt-2 text-xl sm:text-2xl text-primary font-mono text-center">Deployment Workflow</h2>
                <img class="" src="{{ asset('skills/deployment_flow.jpg') }}" alt=""></div>
    </div>
</section>

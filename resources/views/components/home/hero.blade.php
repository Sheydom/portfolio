<section
    id="about"
    class="scroll-mt-24 min-h-[calc(100vh-80px)] w-full px-5 py-16
           flex flex-col items-center justify-center 
           lg:grid lg:grid-cols-[360px_600px] lg:gap-10 lg:px-16"
>
    <!-- Profile card -->
    <div class="w-full max-w-90 border border-neutral/30 bg-background p-5 shadow-[0_0_25px_-18px] shadow-primary">
        <span class="block text-right text-neutral font-mono text-xs mb-4">ID: _001</span>

        <div class="h-72 w-full overflow-hidden border border-neutral/30 bg-surface">
            <img
                src=""
                alt="Dominic Knabe"
                class="h-full w-full object-cover"
            >
        </div>

        <div class="mt-5">
            <h1 class="text-white font-bold text-4xl">D.Knabe</h1>
            <p class="mt-2 text-sm text-third font-body leading-relaxed">
                Building Laravel applications and deploying self-hosted infrastructure.
            </p>
        </div>

        <button
            type="button"
            class="mt-6 w-full border border-primary/70 py-2 font-mono font-bold text-primary
                   transition duration-300 ease-in-out hover:border-primary hover:bg-primary/10"
        >
            DOWNLOAD_RESUME.PDF
        </button>
    </div>

    <!-- Info card -->
    <div class="mt-6 w-full max-w-180 border border-neutral/30 bg-background p-6 lg:mt-0">
        <p class="mb-6 flex items-center justify-end gap-2 text-xs text-primary font-mono">
            <span class="statusDot flex"></span>ONLINE
        </p>

        <h2 class="text-3xl font-bold text-white mb-3">
            Full Stack Developer focused on Laravel, Docker and self-hosted deployment.
        </h2>

        <p class="text-neutral leading-relaxed mb-8">
            I build practical web applications with authentication, databases, responsive interfaces,
            and production deployment using Docker, Caddy, Cloudflare and Linux servers.
        </p>

        <div class="grid gap-3 text-sm sm:grid-cols-2">
            <div class="flex justify-between border border-neutral/10 p-3">
                <span class="text-third font-mono">LOCATION:</span>
                <span class="text-white">MELBOURNE, AU</span>
            </div>

            <div class="flex justify-between border border-neutral/10 p-3">
                <span class="text-third font-mono">ROLE:</span>
                <span class="text-white">FULL_STACK_DEV</span>
            </div>

            <div class="flex justify-between border border-neutral/10 p-3">
                <span class="text-third font-mono">STACK:</span>
                <span class="text-primary">PHP/LARAVEL</span>
            </div>

            <div class="flex justify-between border border-neutral/10 p-3">
                <span class="text-third font-mono">DEPLOY:</span>
                <span class="text-primary">DOCKER/CADDY</span>
            </div>
        </div>

        <div class="mt-8 grid grid-cols-2 gap-4">
            <div class="border border-neutral/10 p-5 text-center">
                <span class="block text-primary text-4xl font-bold">03</span>
                <span class="text-neutral text-sm font-mono">PROJECTS</span>
            </div>

            <div class="border border-neutral/10 p-5 text-center">
                <span class="block text-primary text-4xl font-bold">02</span>
                <span class="text-neutral text-sm font-mono">SERVERS</span>
            </div>
        </div>
    </div>
</section>
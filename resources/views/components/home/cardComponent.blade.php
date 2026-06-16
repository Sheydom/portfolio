@props([
    'img' => null,
    'title',
    'status' => 'In Development',
    'description' => null,
    'role' => null,
    'stack' => null,
    'deployment' => null,
    'hosting' => null,
    'href' => '#',
    'items'=>[],
])


<div {{ $attributes->merge(['class' => 'flex h-full max-w-xl flex-col rounded-xl']) }}>
    <article class="flex h-full flex-col overflow-hidden rounded-xl border border-neutral/30 bg-surface/60 shadow-[0_0_25px_-18px] shadow-primary">

        {{-- Image --}}
        <div class="h-48 overflow-y-auto rounded-t-xl bg-background md:h-56">
            <img
                class="w-full object-cover"
                src="{{ asset($img) }}"
                alt="{{ $title }}"
            >
        </div>

        {{-- Content --}}
        <div class="flex flex-1 flex-col p-5 text-white">
            <div class="mb-5 flex items-center justify-between gap-4">
                <h3 class="text-2xl text-primary md:text-3xl">
                    {{ $title }}
                </h3>

                <span class="rounded-full border border-success/40 px-3 py-1 text-xs text-success">
                    Live
                </span>
            </div>

            <div class="mb-5">
                <span class="font-mono text-sm text-third">PURPOSE:</span>
                <p class="mt-1 text-sm leading-relaxed text-text">
                    {{ $description }}
                </p>
            </div>

            <div class="mb-5">
                <span class="font-mono text-sm text-third">FEATURES:</span>

                <ul class="mt-2 grid grid-cols-1 gap-1 text-sm text-text sm:grid-cols-2">
                    @foreach ($items as $item)
                        <li class="ml-5 list-disc">
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-auto space-y-2 text-sm">
                <div class="flex justify-between gap-4">
                    <span class="font-mono text-third">ROLE:</span>
                    <p class="text-right">{{ $role }}</p>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="font-mono text-third">STACK:</span>
                    <p class="text-right">{{ $stack }}</p>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="font-mono text-third">DEPLOYMENT:</span>
                    <p class="text-right">{{ $deployment }}</p>
                </div>

                <div class="flex justify-between gap-4">
                    <span class="font-mono text-third">HOSTING:</span>
                    <p class="text-right">{{ $hosting }}</p>
                </div>
            </div>

            <a
                href="{{ $href }}"
                target="_blank"
                rel="noopener noreferrer"
                class="mt-6 border border-primary px-4 py-2 text-center text-primary transition hover:bg-primary hover:text-background"
            >
                View {{ $title }}
            </a>
        </div>
    </article>
</div>

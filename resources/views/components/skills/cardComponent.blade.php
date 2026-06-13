



@props([
    'skill',
    'items' => [],
])

<section {{$attributes->merge(['class'=>'bg-surface/60 border border-primary/20 rounded-xl p-2 shadow-[0_0_25px_-15px] shadow-primary'])}}>
    <div class="flex flex-col items-center justify-between mb-5">
        <h2 class="text-xl sm:text-2xl text-primary font-mono">
            {{ $skill }}
        </h2>

        <span class="text-xs text-neutral font-mono">
            {{ count($items) }} modules
        </span>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
        @foreach ($items as $item)
            <div
                class="group flex items-center justify-between gap-3 rounded-lg border border-neutral/30 bg-black/50 px-2 py-3
                       hover:border-primary/70 hover:bg-primary/10 transition duration-300">

                <span class="text-sm sm:text-base text-third group-hover:text-primary transition">
                    {{ $item['title'] }}
                </span>

                <img
                    src="{{ asset($item['icon']) }}"
                    alt="{{ $item['title'] }} icon"
                    class="h-6 w-6 shrink-0 opacity-80 group-hover:opacity-100 transition"
                >
            </div>
        @endforeach
    </div>
</section>
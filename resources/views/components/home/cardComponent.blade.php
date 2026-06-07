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
])


<div class="flex flex-col w-full shadow-[0_0_10px_var(--color-primary)] rounded">
    <div class="border border-neutral/30 w-full ">
        <div class="max-h-100 overflow-scroll rounded-t"><img src="{{ asset($img) }}" alt="{{ $title }}"></img>
        </div>
        <div class="flex flex-col text-white p-5 w-full">
            <div class="flex justify-between items-center">
                <h3 class="text-xl text-primary">{{ $title }}</h3><span class="text-success">Live</span>
            </div>
            <div class="mb-5">
                <p class="">{{ $description }}</p>
            </div>
            <div class="flex justify-between text-right"><span class="text-third font-mono">ROLE:</span>
                <p>{{ $role }}</p>
            </div>
            <div class="flex justify-between text-right"><span class="text-third font-mono">STACK:</span>
                <p>{{ $stack }}</p>
            </div>
            <div class="flex justify-between text-right"><span class="text-third font-mono">DEPLOYMENT:</span>
                <p>{{ $deployment }}</p>
            </div>
            <div class="flex justify-between text-right"><span class="text-third font-mono">HOSTING:</span>
                <p>{{ $hosting }}</p>
            </div>
            <a href="{{ $href }}" target="_blank"
                class="mt-5 text-primary border border-primary text-center py-2">Link to {{ $title }}</a>
        </div>
    </div>
</div>

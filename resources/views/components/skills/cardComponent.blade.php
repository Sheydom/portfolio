@props([
    'skill',
    'titleF' => null,
    'iconF' => null,
    'titleS' => null,
    'iconS' => null,
    'titleT' => null,
    'iconT' => null,
    'titleFo' => null,
    'iconFo' => null,
    'titleFi' => null,
    'iconFi' => null,
    'titleSi' => null,
    'iconSi' => null,
])

<section class="bg-background w-full p-5">
    <h2 class=" text-2xl text-primary font-mono mb-5">{{ $skill }}</h2>
    <div class="text-third grid grid-cols-2 gap-1 bg-black">
        <div
            {{ $attributes->merge(['class' => 'border border-neutral py-1 px-2 bg-black flex justify-between items-center']) }}>
            {{ $titleF }}
            <img src="{{ asset($iconF) }}" class="h-5 w-5 shrink-0 ">
        </div>
        <div
            {{ $attributes->merge(['class' => 'border border-neutral py-1 px-2 bg-black flex justify-between items-center']) }}>
            {{ $titleS }} <img src="{{ asset($iconS) }}" class="h-5 w-5 shrink-0">
        </div>
        <div
            {{ $attributes->merge(['class' => 'border border-neutral py-1 px-2 bg-black flex justify-between items-center']) }}>
            {{ $titleT }} <img src="{{ asset($iconT) }}" class="h-5 w-5 shrink-0">
        </div>
        <div
            {{ $attributes->merge(['class' => 'border border-neutral py-1 px-2 bg-black flex justify-between items-center']) }}>
            {{ $titleFo }} <img src="{{ asset($iconFo) }}" class="h-5 w-5 shrink-0">
        </div>
        <div
            {{ $attributes->merge(['class' => 'border border-neutral py-1 px-2 bg-black flex justify-between items-center']) }}>
            {{ $titleFi }} <img src="{{ asset($iconFi) }}" class="h-5 w-5 shrink-0">
        </div>
        <div
            {{ $attributes->merge(['class' => 'border border-neutral py-1 px-2 bg-black flex justify-between items-center']) }}>
            {{ $titleSi }} <img src="{{ asset($iconSi) }}" class="h-5 w-5 shrink-0">
        </div>
    </div>
</section>

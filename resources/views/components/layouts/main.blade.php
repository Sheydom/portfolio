<section {{ $attributes->merge(['class' => 'grid grid-cols-[auto_1fr]']) }}>
    <x-layouts.aside></x-layouts.aside>
    <div class="flex flex-col ">
        <div class="flex-1">{{ $slot }}</div>
        <x-layouts.footer></x-layouts.footer>
    </div>
</section>

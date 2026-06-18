<section {{ $attributes->merge(['class' => ' sm:grid sm:grid-cols-[auto_1fr]']) }}>
    <x-layouts.aside></x-layouts.aside>
    <div class=" sm:ml-59 flex-1 flex-col ">
        <div class="flex-1 bg-black">{{ $slot }}</div>
        <x-layouts.footer></x-layouts.footer>
    </div>
</section>

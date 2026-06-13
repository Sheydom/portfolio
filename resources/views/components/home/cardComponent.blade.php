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


<div class="flex flex-col w-full shadow-[0_0_25px_-15px] shadow-primary border-primary/20 rounded">
    <div class="border flex flex-col flex-1 border-primary/30 w-full ">
        <div class="max-h-100 overflow-auto rounded-t"><img class=""  src="{{ asset($img) }}" alt="{{ $title }}"></img>
        </div>
        <div class="flex flex-col mt-auto  text-white p-5 w-full">
            <div class=" mb-5 flex justify-between items-center">
                <h3 class="text-3xl text-primary">{{ $title }}</h3><span class="text-success">Live</span>
            </div>
            <div class="mb-5">
                <span class="text-third font-mono">PURPOSE:</span>
                <p class="">{{ $description }}</p>
            </div>
            <div class="mb-5">
                <span class="text-third font-mono">FEATURES:</span>
               <ul class="grid grid-cols-2 list-disc ">@foreach ($items as $item )
                   <li class="ml-5">{{$item}}</li>
               @endforeach</ul>
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

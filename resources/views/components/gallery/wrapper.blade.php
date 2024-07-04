@props(['images' => [], 'caption' => 'Typ A'])
<x-layout.grid>
  @foreach ($images as $image)
    <x-layout.span class="sm:col-span-6 md:col-span-4">
      <a data-fancybox="gallery" href="/media/img/galerie/{{ $image }}_lg.jpg" data-caption="{{ $caption }}">
        <img 
          src="/media/img/galerie/{{ $image }}_sm.jpg" 
          alt="" 
          title="" 
          height="900" 
          width="600"
          loading="lazy"
          class="block w-full object-cover">
      </a>
    </x-layout.span>
  @endforeach
</x-layout.grid>
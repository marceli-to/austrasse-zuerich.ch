@props(['route', 'title' => ''])
<li>
  <a 
    href="{{ route($route) }}" 
    title="{{ $title }}" 
    class="lowercase text-md block py-2 xl:text-lg md:mr-20 xl:mr-28 hover:text-serene transition-colors">
    {{ $title }}
  </a>
</li>
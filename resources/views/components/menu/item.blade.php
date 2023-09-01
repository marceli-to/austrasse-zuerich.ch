@props(['route', 'title' => ''])
<li>
  <a 
    href="{{ route($route) }}" 
    title="{{ $title }}" 
    class="block py-2 lowercase text-md xl:text-lg md:mr-20 xl:mr-28 hover:text-serene transition-colors">
    {{ $title }}
  </a>
</li>
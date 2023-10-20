@props(['index'])
<div 
  {{ $attributes->merge(['class' => 'relative overflow-hidden max-h-0']) }}
  x-ref="container{{ $index }}" 
  x-bind:style="selected == {{ $index }} ? 'max-height: ' + $refs.container{{ $index }}.scrollHeight + 'px;' : ''">
  <div class="px-10 py-16">
    {{ $slot }}
  </div>
</div>
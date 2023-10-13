@props(['index', 'title'])
<button 
  x-on:click="selected = {{ $index }}; setTimeout(() => { document.querySelector('[data-qa-keyword=\'{{ $title }}\']').scrollIntoView()}, 15);"
  {{ $attributes->merge(['class' => 'bg-olive font-semi font-normal flex text-white py-12 px-12 leading-none hover:text-serene transition-colors'])}}>
  {{ $title }}
</button>

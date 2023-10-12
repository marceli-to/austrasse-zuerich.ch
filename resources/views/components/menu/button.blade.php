<a href="javascript:;" x-on:click="menu = ! menu" {{ $attributes->merge(['class' => 'text-olive']) }}>
  <x-icons.burger data-menu-icon="burger" x-cloak x-show="!menu" />
  <x-icons.cross data-menu-icon="cross" x-cloak x-show="menu" />
</a>
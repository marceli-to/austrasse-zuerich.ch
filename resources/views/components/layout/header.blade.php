<header class="bg-white h-74 md:h-125 w-full sticky top-0 z-50 p-20 flex justify-between">
  <x-buttons.menu class="md:hidden" />
  <x-menu.wrapper />
  <a href="{{ route('page.home') }}" title="Startseite / {{ env('APP_NAME') }}" class="flex items-center justify-center">
    <x-icons.logo />
  </a>
</header>
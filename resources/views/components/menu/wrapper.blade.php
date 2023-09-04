<nav data-menu class="fixed bg-white w-full left-0 top-70 md:top-0 px-20 pb-20 md:p-0 md:relative hidden md:!block">
  <ul class="md:flex md:mt-30">
    <x-menu.item :route="'page.project'" :title="'Projekt'" class="{{ Route::is('page.project') ? 'text-serene' : '' }}" />
    <x-menu.item :route="'page.living'" :title="'Wohnen'" class="{{ Route::is('page.living') ? 'text-serene' : '' }}" />
    <x-menu.item :route="'page.business'" :title="'Gewerbe'" class="{{ Route::is('page.business') ? 'text-serene' : '' }}" />
    <x-menu.item :route="'page.offer'" :title="'Angebot'" class="{{ Route::is('page.offer') ? 'text-serene' : '' }}" />
    <x-menu.item :route="'page.contact'" :title="'Kontakt'" class="{{ Route::is('page.contact') ? 'text-serene' : '' }}" />
  </ul>
</nav>
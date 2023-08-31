<nav data-menu class="fixed bg-white w-full left-0 top-70 md:top-0 px-20 pb-20 md:p-0 md:relative hidden md:!block">
  <ul class="md:flex md:mt-30">
    <x-menu.item :route="'page.project'" :title="'Projekt'" />
    <x-menu.item :route="'page.living'" :title="'Wohnen'" />
    <x-menu.item :route="'page.business'" :title="'Gewerbe'" />
    <x-menu.item :route="'page.offer'" :title="'Angebot'" />
    <x-menu.item :route="'page.contact'" :title="'Kontakt'" />
  </ul>
</nav>
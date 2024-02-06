<form wire:submit="save" class="mt-24 lg:mt-36">
  @if (session()->has('status'))
    <div class="font-semi font-normal mb-20 inline-block w-auto z-[101]">
      <div class="relative">
        Vielen Dank, wir haben Ihre Anfrage erhalten.
      </div>
    </div>
  @endif
  <x-layout.grid class="sm:gap-y-16 lg:gap-x-24 lg:gap-y-16">
    <x-honeypot />
    <x-layout.span class="relative">
      <x-form.input name="firstname" placeholder="Vorname*" isWire="true" />
      @error('firstname')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="name" placeholder="Name*" isWire="true" />
      @error('name')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="email" type="email" placeholder="E-Mail*" isWire="true" />
      @error('email')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative">
      <x-form.input name="phone" placeholder="Telefon" isWire="true" />
      @error('phone')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:!col-span-12">
      <x-form.textarea name="message" placeholder="Nachricht*" isWire="true" />
      @error('message')
        <x-form.error message="{{ $message }}" />
      @enderror 
    </x-layout.span>
    <x-layout.span class="relative sm:!col-span-12">
      @error('privacy')
        <x-form.error 
          message="Datenschutzerklärung muss akzeptiert werden"
          class="relative right-auto left-0 mb-6"
          />
      @enderror
      <div class="flex items-start">
        <x-form.checkbox name="privacy" id="privacy" isWire="true" class="mt-2 lg:mt-3" />
        <x-form.checkbox-label for="privacy">
          Ich habe die <a href="{{ route('page.privacy') }}" title="Datenschutzerklärung" target="_blank" class="hover:underline underline-offset-2 decoration-1">Datenschutzerklärung</a> gelesen und akzeptiere diese
        </x-form.checkbox-label>
      </div>
    </x-layout.span>
    <x-layout.span class="sm:col-span-12 mt-15">
      <x-form.button>
        <div wire:loading>
          <x-form.spinner class="mr-12 text-olive" />
        </div>
        Senden
      </x-form.button>
    </x-layout.span>
  </x-layout.grid>
</form>

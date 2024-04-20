<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="py-24 sm:py-32">
        <h2 class="text-4xl text-center font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Althafunissa Cycle</h2>

        <div class="px-6 pt-16 pb-20 lg:px-8 lg:pt-24 lg:pb-28">
          <div class="relative mx-auto max-w-lg divide-y-2 divide-gray-200 lg:max-w-7xl">
            
            <img class="h-auto max-w-full mx-auto" src="{{ Storage::url($cycle->photo) }}">

          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</x-guest-layout>
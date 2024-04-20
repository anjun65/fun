<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="py-24 sm:py-32">
        <h2 class="text-4xl text-center font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Road Map</h2>

        <div class="px-6pb-20 lg:px-8 lg:pb-28">
          <div class="relative mx-auto max-w-lg divide-y-2 divide-gray-200 lg:max-w-7xl">
           
            <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-12 lg:gap-y-12">
                @foreach ($roadmaps as $years => $roadmapGroup)
                <div>
                  <div class="mt-4 block">
                    <div class="border-b-8 w-50 border-amber-400" style="border-bottom-width: 10px">
                      <p class="z-10 text-2xl font-semibold text-gray-900">{{ $years }}</p>
                    </div>

                    
                      <p class="mt-3 text-base text-gray-500">
                        <ul class="list-decimal">
                          @foreach ($roadmapGroup as $roadmap)
                            <li>{{ $roadmap->description }}</li>
                          @endforeach
                        </ul>
                      </p>
                  </div>
                </div>
                @endforeach
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
  </div>
</x-guest-layout>
<x-guest-layout>
    <div class="relative overflow-hidden ">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="relative bg-opacity-75 py-32 px-6 sm:py-40 sm:px-12 lg:px-16">
        <main class="mx-auto max-w-7xl py-16 px-4 sm:px-6 lg:px-8 lg:pb-24">
    <div class="max-w-xl">
      <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Our Journey</h1>
    </div>

    <section aria-labelledby="recent-heading" class="mt-16">

      <div class="space-y-20">
        @foreach ($journeys as $year => $journeyGroup)
        <div class="grid grid-cols-4 p-8 gap-4 min-h-32 rounded-lg bg-gradient-to-r from-amber-400 to-white">
          <div>
            <div class="h-12 w-12 flex justify-center border border-gray-900 items-center  rounded-full mr-4">
              <span class="text-gray-900 font-bold text-lg p-10">{{ $year }}</span>
            </div>

          </div>
          <div class="col-span-3">
            <div class="grid grid-cols-2">
              @foreach ($journeyGroup as $journey)
                <div>{{ $journey->description }}</div>
              @endforeach
            </div>
          </div>
        </div>
        @endforeach

        <!-- More orders... -->
      </div>
    </section>
  </main>
      </div>

      
    </div>
</x-guest-layout>
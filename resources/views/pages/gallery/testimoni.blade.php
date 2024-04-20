<x-guest-layout>
    <div class="relative overflow-hidden min-h-screen">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          
        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Testimonial</h2>
            </div>
  
            
            <ul role="list" class="mt-20 space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-3 lg:gap-8">
                @foreach ($testimonials as $testimonial)
                <li class="rounded-lg bg-amber-400 py-10 px-6 text-center xl:px-10 xl:text-left">
                  <div class="space-y-6 xl:space-y-10">
                    <div class="relative w-full">
                      <img class="absolute -my-20 align-middle mx-auto h-24 w-24 rounded-full" src="{{ Storage::url($testimonial->photo) }}" alt="">
                    
                    </div>
                    <div class="mt-20 space-y-2 xl:flex xl:items-center xl:justify-between">
                      <div class="space-y-1 text-lg font-medium leading-6">
                        <h3 class="text-gray-900">{{ $testimonial->user->name }} ({{ $testimonial->location }})</h3>
                        <p class="text-sm text-gray-700">
                          {{ $testimonial->description }}
                        </p>
                      </div>

                    </div>
                  </div>
                </li>
                @endforeach
                
        
                <!-- More people... -->
            </ul>
            
        </section>
  
      </div>
    </div>
  </x-guest-layout>
<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">{{ $media->judul }}</h2>
          </div>

          <main class="mx-auto max-w-7xl px-4 pt-16 pb-24 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
        
              <form class="lg:grid lg:grid-cols-3 lg:gap-x-12 xl:gap-x-16">
                <div class="col-span-2">
                  <img class="rounded-lg object-cover shadow-lg" src="{{ Storage::url($media->photo) }}" alt="">
                
                  <div class="mt-6 space-y-6 text-gray-500">
                    <p class="text-base leading-7">{{ $media->description }}</p>
                  </div>
                </div>
        
                <div class="mt-10 lg:mt-0">
                  <h2 class="text-lg text-left font-medium text-gray-900 border-l-4 border-amber-400" style="padding-left: 1rem">Berita Lainnya</h2>
        
                  <div class="mt-4 rounded-lg">
                    <ul role="list" class="divide-y divide-gray-200">
                      @forelse ( $lains as $lain)
                        <li>
                          <div class="space-y-4">
                            <div class="aspect-w-3 aspect-h-2">
                              <img class="rounded-lg object-cover shadow-lg" src="{{ Storage::url($lain->photo) }}" alt="">
                            </div>
                          
                            <div class="space-y-2">
                              <div class="space-y-1 text-lg font-medium leading-6 mb-10">
                                <h3>{{ $lain->judul }}</h3>
                              </div>
                            </div>
                          </div>
                        </li>
                      @empty
                        Tidak ada berita lainnya
                      @endforelse
                      

                      
                      
        
                      <!-- More products... -->
                    </ul>
                    
                    
                  </div>
                </div>
              </form>
            </div>
          </main>
      </section>

    </div>
  </div>
</x-guest-layout>
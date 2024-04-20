<x-guest-layout>
    <div class="relative overflow-hidden min-h-screen">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          
        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Marketing Activity</h2>
            </div>

            <div class="p-4 rounded-lg w-full mt-20">
              <div class="grid grid-cols-1 gap-y-4">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        
                        <!-- Item 1 -->
                        @foreach ($marketing->file as $image)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                              <img src="{{ Storage::url($image->photo) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                              <div class="ml-4 mb-4 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
                                <h3 class="text-xl font-medium">
                                    <a href="">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        {{ $marketing->judul }}
                                    </a>
                                </h3>
                                <p class="text-base">{{ $marketing->created_at->toDateString() }}</p>
                              </div>
                          </div>
                        @endforeach
                        
                    </div>
                    
                    <!-- Slider indicators -->
                    <div class="relative flex justify-center mx-auto w-full gap-x-4 mt-4">
                        @php
                          $i = 0;
                        @endphp
                        @foreach ($marketing->file as $image)
                          <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 1" data-carousel-slide-to="{{ $loop->index }}">
                              <img src="{{ Storage::url($image->photo) }}" class="rounded-md h-auto w-auto" alt="">
                          </button>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="w-full mt-20">
              <div class="mt-6 text-gray-500">
                <p>Penjelasan Lengkap</p>
                <p class="text-justify text-gray-900 mt-4">
                  {{ $marketing->description }}
                </p>
            </div>
            
            
           
          </div>
            
        </section>
  
      </div>
    </div>
  </x-guest-layout>
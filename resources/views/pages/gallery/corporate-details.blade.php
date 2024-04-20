<x-guest-layout>
    <div class="relative overflow-hidden min-h-screen">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          
        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Corporate Responsibility</h2>
            </div>
            <div class="mt-20 p-4 rounded-lg w-full">
              <div class="grid grid-cols-1 gap-y-4">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        
                      @foreach ( $respon->file as $file)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ Storage::url($file->photo) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="ml-4 mb-4 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
                              <h3 class="text-xl font-medium">
                                  <a href="">
                                      <span aria-hidden="true" class="absolute inset-0"></span>
                                      {{ $respon->judul }}
                                  </a>
                              </h3>
                              <p class="text-base">{{ $respon->created_at->toDateString() }}</p>
                            </div>
                        </div>
                      @endforeach
                    </div>
                    
                    <!-- Slider indicators -->
                    <div class="relative flex justify-center mx-auto w-full gap-x-4 mt-4">
                      @foreach ( $respon->file as $file)  
                        <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                            <img src="{{ Storage::url($file->photo) }}" class="rounded-md h-auto w-auto" alt="">
                        </button>
                      @endforeach
                    </div>
                </div>
            </div>
            
            <div class="w-full">
              <div class="mt-20 mb-6 text-gray-500">
                <p>Penjelasan Lengkap</p>
                <p class="text-justify text-gray-900 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            
            
           
          </div>
            
        </section>
  
      </div>
    </div>
  </x-guest-layout>
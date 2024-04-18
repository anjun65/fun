<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
      <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Lifestyle</h2>
          </div>

          <div class="mb-10 mt-10">
            <ul class="flex flex-wrap -mb-px  text-sm font-medium gap-x-4 text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
              <li class="me-2" role="presentation">
                  <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white"  id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Video Reels</button>
              </li>
              <li class="me-2" role="presentation">
                  <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Artikel</button>
              </li>
            </ul>
          
          </div>
          <div class="p-4 rounded-lg w-full">
            <div class="grid grid-cols-1 gap-y-4">
              <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                  <!-- Carousel wrapper -->
                  <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                      
                      <!-- Item 1 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                          <div class="ml-4 mb-4 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
                            <h3 class="text-xl font-medium">
                                <a href="">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Kunjungan Perumda
                                </a>
                            </h3>
                            <p class="text-base">9 November 2023</p>
                          </div>
                      </div>
                      <!-- Item 2 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 3 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 4 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                      <!-- Item 5 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                      </div>
                  </div>
                  
                  <!-- Slider indicators -->
                  <div class="relative flex justify-center mx-auto w-full gap-x-4 mt-4">
                      <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="rounded-md h-auto w-auto" alt="">
                      </button>
          
                      <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 2" data-carousel-slide-to="1">
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="rounded-md h-auto w-auto" alt="">
                      </button>
          
                      <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 3" data-carousel-slide-to="2">
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="rounded-md h-auto w-auto" alt="">
                      </button>
          
                      <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 4" data-carousel-slide-to="3">
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="rounded-md h-auto w-auto" alt="">
                      </button>
          
                      <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 5" data-carousel-slide-to="4">
                          <img src="{{ asset('img/carousel-1.jpg') }}" class="rounded-md h-auto w-auto" alt="">
                      </button>
                  </div>
              </div>
          </div>
          
          <div class="w-full">
            <div class="mt-6 text-gray-500">
              <p>Penjelasan Lengkap</p>
              <p class="text-justify text-gray-900 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
              </p>
          </div>
          
          
         
        </div>
          
      </section>

    </div>
  </div>
</x-guest-layout>
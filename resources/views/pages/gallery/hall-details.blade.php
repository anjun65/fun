<x-guest-layout>
    <div class="relative overflow-hidden min-h-screen">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          
        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Hall Of Fame</h2>
            </div>

            <div class="mb-10 mt-20">
              <ul class="flex flex-wrap -mb-px  text-sm font-medium gap-x-4 text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white @if ($event->category == "Blog") bg-gray-700 text-white  @endif"  id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Blog</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white @if ($event->category == "Event") bg-gray-700 text-white  @endif" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Event</button>
                </li> @if ($event->category == "Blog") bg-gray-700 text-white  @endif
                <li class="me-2" role="presentation"> @if ($event->category == "Blog") bg-gray-700 text-white  @endif
                    <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white @if ($event->category == "Collaboration") bg-gray-700 text-white  @endif" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Collaboration</button>
                </li>
              </ul>
            
            </div>
            <div class="p-4 rounded-lg w-full">
              <div class="grid grid-cols-1 gap-y-4">
                <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        
                        
                        @foreach ( $event->file as $file)
                          <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ Storage::url($file->photo) }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            <div class="ml-4 mb-4 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
                              <h3 class="text-xl font-medium">
                                  <a href="">
                                      <span aria-hidden="true" class="absolute inset-0"></span>
                                     {{ $event->judul }}
                                  </a>
                              </h3>
                              <p class="text-base">{{ $event->created_at->toDateString() }}</p>
                            </div>
                          </div> 
                        @endforeach
                    </div>
                    
                    <!-- Slider indicators -->
                    <div class="relative flex justify-center mx-auto w-full gap-x-4 mt-4">
                        @foreach ( $event->file as $file)  
                          <button type="button" class="w-40 h-auto bg-transparent" style="background-color: transparent;"aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0">
                              <img src="{{ Storage::url($file->photo) }}" class="rounded-md h-auto w-auto" alt="">
                          </button>
                        @endforeach
                    </div>
                </div>
              </div>
            </div>
            
            <div class="w-full">
              <div class="mt-20 text-gray-500">
                <p>Penjelasan Lengkap</p>
                <p class="text-justify text-gray-900 mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
          
            
          </section>
  
      </div>
    </div>
  </x-guest-layout>
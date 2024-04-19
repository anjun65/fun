<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
      <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Wastra Nusantara</h2>
          </div>

          <div class="mb-10 mt-10">
            <ul class="flex flex-wrap -mb-px  text-sm font-medium gap-x-4 text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
              <li class="me-2" role="presentation">
                  <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white"  id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Blog</button>
              </li>
              <li class="me-2" role="presentation">
                  <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Event</button>
              </li>
              <li class="me-2" role="presentation">
                  <button class="inline-block border-2 border-white sm:w-18 w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Collaboration</button>
              </li>
            </ul>
          
          </div>
          <div class="p-4 rounded-lg w-full">
            <div class="grid grid-cols-1 gap-y-4 relative">
                <div>
                  <img class="h-auto max-w-full" src="{{ asset('img/carousel-1.jpg') }}" alt="image description">

                <div class="absolute bottom-0 text-white left-8 z-10 flex flex-1 flex-col space-y-2 py-4">
                  <h3 class="text-xl font-medium">
                      <a href="">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                          Songket Selayer
                      </a>
                  </h3>
                  <p class="text-base text-gray-900">9 November 2023</p>
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
          </div>
        </div>
          
      </section>

    </div>
  </div>

  <div class="relative overflow-hidden min-h-screen bg-white">
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
      <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl  text-center">Songket Selayer</h2>
          </div>

          <div class="mt-12 p-4 rounded-lg w-full">
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
              <div class="group relative flex flex-col overflow-hidden bg-white">
                <div class="w-11/12 text-sm font-medium text-pink-600 absolute top-2 left-2 z-10 px-2 py-1 rounded-md text-right">
                  <div class="text-sm font-medium text-gray-900 absolute top-2 left-2 z-10 bg-amber-400 px-2 py-1 rounded-md">Preorder</div>
                
                </div>
                <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden group-hover:opacity-75">
                    <img src="{{ asset('temp/produk1.png') }}" class="rounded-lg h-full w-full object-cover object-center">
                </div>
                <div class="flex flex-1 flex-col space-y-2 py-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            SereRayya Family
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Women Espresso</p>
                    <p class="text-base">
                        <span class="text-red-500 line-through">Rp. 400.000,00</span>
                        <span class="ml-2 text-gray-900 line-through">Rp. 300.000,00</span>
                    </p>
                </div>
              </div>
              
              <div class="group relative flex flex-col overflow-hidden bg-white">
                <div class="text-sm font-medium text-gray-900 absolute top-2 left-2 z-10 bg-amber-400 px-2 py-1 rounded-md">Preorder</div>
                <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden group-hover:opacity-75">
                    <img src="{{ asset('temp/produk1.png') }}" class="rounded-lg h-full w-full object-cover object-center">
                </div>
                <div class="flex flex-1 flex-col space-y-2 py-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            SereRayya Family
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Women Espresso</p>
                    <p class="text-base">
                        <span class="text-red-500 line-through">Rp. 400.000,00</span>
                        <span class="ml-2 text-gray-900 line-through">Rp. 300.000,00</span>
                    </p>
                </div>
              </div>

              <div class="group relative flex flex-col overflow-hidden bg-white">
                <div class="text-sm font-medium text-gray-900 absolute top-2 left-2 z-10 bg-amber-400 px-2 py-1 rounded-md">Preorder</div>
                <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden group-hover:opacity-75">
                    <img src="{{ asset('temp/produk1.png') }}" class="rounded-lg h-full w-full object-cover object-center">
                </div>
                <div class="flex flex-1 flex-col space-y-2 py-4">
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="#">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            SereRayya Family
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Women Espresso</p>
                    <p class="text-base">
                        <span class="text-red-500 line-through">Rp. 400.000,00</span>
                        <span class="ml-2 text-gray-900 line-through">Rp. 300.000,00</span>
                    </p>
                </div>
              </div>
            </div>
          </div>
          
          
          
         
        </div>
          
      </section>

    </div>
  </div>
</x-guest-layout>
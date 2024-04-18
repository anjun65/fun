<x-user-layout>
    <div class="md:col-span-3 mt-4 w-full">
        <h2 class="text-2xl font-medium mb-10">Whislist Saya</h2>

        <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
          <h2 id="product-heading" class="sr-only">Products</h2>

          <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
            

            <div class="group relative flex flex-col overflow-hidden bg-white">
              <div class="w-11/12 text-sm font-medium text-pink-600 absolute top-2 left-2 z-10 px-2 py-1 rounded-md text-right">
                
                <svg class="w-11/12 text-pink-500 bg-pink-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                  <path d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
                </svg>
                
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
                      <span class="text-gray-900">Rp. 300.000,00</span>
                  </p>
              </div>
            </div>
          </div>

          

            

            <!-- More products... -->
          </div>
        </section>
    </div>
</x-user-layout>
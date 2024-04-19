<x-guest-layout>

    <div class="bg-white">
  
      <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none">
      <!-- Product -->
      <div class="lg:grid lg:grid-cols-5 lg:items-start lg:gap-x-8">
        <div class="w-1/2 flex items-end">
          <!-- Image selector -->
          <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
            <div class="grid grid-cols-1 gap-6" aria-orientation="horizontal" role="tablist">
              <button id="tabs-2-tab-1" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" aria-controls="tabs-2-panel-1" role="tab" type="button">
                <span class="sr-only"> Angled view </span>
                <span class="absolute inset-0 overflow-hidden rounded-md">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="" class="h-full w-full object-cover object-center">
                </span>
                <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                <span class="ring-transparent pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2" aria-hidden="true"></span>
              </button>

              <button id="tabs-2-tab-1" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" aria-controls="tabs-2-panel-1" role="tab" type="button">
                <span class="sr-only"> Angled view </span>
                <span class="absolute inset-0 overflow-hidden rounded-md">
                  <img src="{{ asset('temp/produk1.png') }}" alt="" class="h-full w-full object-cover object-center">
                </span>
                <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                <span class="ring-transparent pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2" aria-hidden="true"></span>
              </button>

              <!-- More images... -->
            </div>
          </div>
        </div>
        <!-- Image gallery -->
        <div class="col-span-2 flex flex-col-reverse">
          <div class="aspect-w-1 aspect-h-1 w-full">

            <!-- Tab panel, show/hide based on tab state. -->
            <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
              <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
            </div>

            <div id="tabs-2-panel-1" aria-labelledby="tabs-2-tab-1" role="tabpanel" tabindex="0">
              <img src="{{ asset('temp/produk1.png') }}" alt="Angled front view with bag zipped and handles upright." class="h-full w-full object-cover object-center sm:rounded-lg">
            </div>

            <!-- More images... -->
          </div>
        </div>

        <!-- Product info -->
        <div class="col-span-2 mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">Sererayya T-shirt - White</h1>

          <div class="mt-3">
            <h2 class="sr-only">Product information</h2>
            <p class="text-xl tracking-tight text-gray-400">Rp.0 </p>
          </div>

          <!-- Reviews -->
          <div class="mt-3">
            <h3 class="text-sm font-semibold">Ukuran (Custom Size):</h3>
            <div class="flex mt-5 items-center">
              <input type="text" placeholder="Fill the Text" class="rounded border-gray-400 w-2/6"></input>
            </div>
          </div>

          

            <div class="mt-10 flex">
              <button type="submit" class="flex flex-1 items-center justify-center rounded-md border border-transparent bg-amber-400 py-3 px-8 text-base font-medium text-white hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Pesan</button>
            </div>

            <div class="mt-4 flex">
              <button class="flex flex-1 items-center justify-center rounded-md border border-amber-400 bg-white py-3 px-8 text-base font-medium text-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">Whislist</button>
            </div>
          </form>

        </div>
      </div>

      <div class="mx-auto divide-y divide-gray-900/10">
        
        <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
          <div class="pt-6">
            <dt class="bg-amber-300 p-4 ">
              <button type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                <span class="text-xl font-semibold leading-7">Deskripsi</span>
                <span class="ml-6 flex h-7 items-center">
                 
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                  </svg>
                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                  </svg>
                </span>
              </button>
            </dt>
            <dd class="border-2 border-amber-400 p-8" id="faq-0">
              <p class="text-base leading-7 text-gray-900">
                Material :<br/>
                  Gamis ceruti premium<br/>
                  zipper depan tangan karet<br/>
                  Applikasi chantily gucci<br/>
                  full furing, pocket<br/>
                  printed pattern logo terbaru<br/>
                  Outer shimmer dior embroidery<br/>
                  Scarf voal lasercut 120x120cm<br/>
                  Khimar ceruti with new logo swarovksi AS  <br/>
              </p>
            </dd>
          </div>
  
          <!-- More questions... -->
        </dl>
      </div>

      <section aria-labelledby="related-heading" class="mt-10 border-t border-gray-200 py-16 px-4 sm:px-0">
        <h2 id="related-heading" class="text-2xl font-bold text-amber-400 text-center">Rekomendasi untuk anda</h2>

        <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
          <div>
            <div class="relative">
              <div class="relative h-72 w-full overflow-hidden rounded-lg">
                <img src="{{ asset('temp/produk1.png') }}" alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls." class="h-full w-full object-cover object-center">
              </div>
              <div class="relative mt-4">
                <h3 class="text-lg font-medium text-gray-900">SereRAyya Family</h3>
                <p class="mt-1 text-sm text-gray-500">Women Espresso</p>
                <p class="mt-1 text-lg font-medium text-gray-90">Rp. 300.000,00</p>
              </div>
            </div>
          </div>

          <!-- More products... -->
        </div>
      </section>
    </div>
  </main>
  
    </div>

  
</x-guest-layout>

<x-guest-layout>
   
<div class="bg-white">
    
  
    <div>
      <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-25"></div>
  
        <div class="fixed inset-0 z-40 flex">
          <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
            <div class="flex items-center justify-between px-4">
              <h2 class="text-lg font-medium text-gray-900">Filters</h2>
              <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x-mark -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
  
            <!-- Filters -->
            <form class="mt-4">
              <div class="border-t border-gray-200 pt-4 pb-4">
                <fieldset>
                  <legend class="w-full px-2">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                      <span class="text-sm font-medium text-gray-900">Categorie</span>
                      <span class="ml-6 flex h-7 items-center">
                        <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </legend>
                  <div class="px-4 pt-4 pb-2" id="filter-section-0">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <input id="color-0-mobile" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="color-0-mobile" class="ml-3 text-sm text-gray-500">Khimar</label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
  
              <div class="border-t border-gray-200 pt-4 pb-4">
                <fieldset>
                  <legend class="w-full px-2">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                      <span class="text-sm font-medium text-gray-900">Category</span>
                      <span class="ml-6 flex h-7 items-center">
                        <!--
                          Expand/collapse icon, toggle classes based on section open state.
  
                          Heroicon name: mini/chevron-down
  
                          Open: "-rotate-180", Closed: "rotate-0"
                        -->
                        <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </legend>
                  <div class="px-4 pt-4 pb-2" id="filter-section-1">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <input id="category-0-mobile" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-0-mobile" class="ml-3 text-sm text-gray-500">All New Arrivals</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="category-1-mobile" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-1-mobile" class="ml-3 text-sm text-gray-500">Tees</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="category-2-mobile" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-2-mobile" class="ml-3 text-sm text-gray-500">Crewnecks</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="category-3-mobile" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-3-mobile" class="ml-3 text-sm text-gray-500">Sweatshirts</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="category-4-mobile" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="category-4-mobile" class="ml-3 text-sm text-gray-500">Pants &amp; Shorts</label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
  
              <div class="border-t border-gray-200 pt-4 pb-4">
                <fieldset>
                  <legend class="w-full px-2">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                      <span class="text-sm font-medium text-gray-900">Sizes</span>
                      <span class="ml-6 flex h-7 items-center">
                        <!--
                          Expand/collapse icon, toggle classes based on section open state.
  
                          Heroicon name: mini/chevron-down
  
                          Open: "-rotate-180", Closed: "rotate-0"
                        -->
                        <svg class="rotate-0 h-5 w-5 transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </legend>
                  <div class="px-4 pt-4 pb-2" id="filter-section-2">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <input id="sizes-0-mobile" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-0-mobile" class="ml-3 text-sm text-gray-500">XS</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="sizes-1-mobile" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-1-mobile" class="ml-3 text-sm text-gray-500">S</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="sizes-2-mobile" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-2-mobile" class="ml-3 text-sm text-gray-500">M</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="sizes-3-mobile" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-3-mobile" class="ml-3 text-sm text-gray-500">L</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="sizes-4-mobile" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-4-mobile" class="ml-3 text-sm text-gray-500">XL</label>
                      </div>
  
                      <div class="flex items-center">
                        <input id="sizes-5-mobile" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="sizes-5-mobile" class="ml-3 text-sm text-gray-500">2XL</label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
            </form>
          </div>
        </div>
      </div>

      <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        <div class="pt-10 pb-4">
          <nav class="flex mb-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
              <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                  Home
                </a>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Wanita</a>
                </div>
              </li>
              <li>
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Terbaru</span>
                </div>
              </li>
            </ol>
          </nav>
        </div>

        
  
        <div class="pt-12 pb-24 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
          <aside>
            <h2 class="sr-only">Filters</h2>
  
            <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
            <button type="button" class="inline-flex items-center lg:hidden">
              <span class="text-sm font-medium text-gray-700">Filters</span>
              <!-- Heroicon name: mini/plus -->
              <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
              </svg>
            </button>
  
            <div class="hidden lg:block">
              <form class="space-y-10 divide-y divide-gray-200">
                <div>
                  <fieldset>
                    <legend class="block text-sm font-medium text-gray-900">Category</legend>
                    <div class="space-y-3 pt-6">
                      <div class="flex items-center">
                        <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                        <label class="ml-3 text-sm text-gray-600">Khimar</label>
                      </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Gamis</label>
                        </div>
                    </div>
                    
                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Parfume</label>
                        </div>
                    </div>


                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Abaya</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Outer</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Dress Only</label>
                        </div>
                    </div>


                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Set Scraf</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Scraf Polos</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Ring Brooch</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Brooch</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Kemeja Lengan Panjang</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Baju Anak</label>
                        </div>
                    </div>

                    <div class="space-y-3 pt-6">
                        <div class="flex items-center">
                          <input name="category" value="" type="radio" class="h-4 w-4 border-gray-300 text-amber-400 focus:ring-amber-400">
                          <label class="ml-3 text-sm text-gray-600">Kemeja Lengan Pendek</label>
                        </div>
                    </div>




                    
                  </fieldset>
                </div>
  
              </form>
            </div>
          </aside>
  
          <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
            <h2 id="product-heading" class="sr-only">Products</h2>
  
            <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
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

            

              
  
              <!-- More products... -->
            </div>
          </section>
        </div>
      </main>
  
      
    </div>
  </div>
  
</x-guest-layout>

<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="py-24 sm:py-32">
        <h2 class="text-4xl text-center font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Struktur Organisasi</h2>
        <p class="mx-auto text-center mt-4 font-bold text-2xl text-gray-400">Struktur Perusahaan</p>
              
        <div class="border-b-2 pb-10 mt-20 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">Komisaris</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $komisariss as $komisaris )
              <li>
                <div class="flex items-center gap-x-6">
                  <img class="h-16 w-16 rounded-full" src="{{ Storage::url($komisaris->photo) }}" alt="">
                  <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $komisaris->name }}</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-400">{{ $komisaris->jabatan }}</p>
                  </div>
                </div>
              </li>
            @endforeach
            
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">DIREKTUR</p>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $direkturs as $direktur )
              <li>
                <div class="flex items-center gap-x-6">
                  <img class="h-16 w-16 rounded-full" src="{{ Storage::url($direktur->photo) }}" alt="">
                  <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $direktur->name }}</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-400">{{ $direktur->jabatan }}</p>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">GM</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $gms as $gm )
              <li>
                <div class="flex items-center gap-x-6">
                  <img class="h-16 w-16 rounded-full" src="{{ Storage::url($gm->photo) }}" alt="">
                  <div>
                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $gm->name }}</h3>
                    <p class="text-sm font-semibold leading-6 text-gray-400">{{ $gm->jabatan }}</p>
                  </div>
                </div>
              </li>
            @endforeach
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">Corporate Secretary</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $corporates as $corporate )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($corporate->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $corporate->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $corporate->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">PRODUKSI</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $produksis as $produksi )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($produksi->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $produksi->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $produksi->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">Operasional</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $operasionals as $operasional )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($operasional->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $operasional->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $operasional->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">SDM/HRD</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $sdms as $sdm )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($sdm->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $sdm->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $sdm->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">R&D</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $rds as $rd )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($rd->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $rd->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $rd->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>

        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">Marketing</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $marketings as $marketing )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($marketing->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $marketing->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $marketing->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>


        <div class="border-b-2 pb-10 mt-10 mx-auto grid max-w-7xl gap-x-8 gap-y-8 px-6 lg:px-8 xl:grid-cols-2">
          <p class="mt-4 font-bold text-xl text-gray-900 uppercase">Keuangan</p>

          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ( $keuangans as $keuangan )
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="{{ Storage::url($keuangan->photo) }}" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $keuangan->name }}</h3>
                  <p class="text-sm font-semibold leading-6 text-gray-400">{{ $keuangan->jabatan }}</p>
                </div>
              </div>
            </li>
            @endforeach
            
          </ul>
        </div>
      </div>
    </div>
    
  </div>
</x-guest-layout>
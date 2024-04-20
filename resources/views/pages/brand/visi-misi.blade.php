<x-guest-layout>
    <div class="relative overflow-hidden min-h-screen">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-visi-misi.png') }}" class="h-auto w-full">
      </div>
      <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          
        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Visi & Misi</h2>
              <p class="mx-auto mt-4 max-w-xl font-bold text-xl text-gray-600">{{ $visimisi->judul }}</p>
            </div>
        </section>


        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-24 text-center sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Visi</h2>
              <p class="mx-auto mt-4 max-w-xl font-bold text-xl text-gray-600">
                <ul class="ml-10 list-disc">
                    @php
                        $visis = explode(',', $visimisi->visi);
                        $i= 1;
                    @endphp
                    
                    @foreach ($visis as $visi)
                        <li>
                            {{ $visi }}
                        </li>
                    @endforeach
                </ul>
              </p>
            </div>
        </section>

        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-4 text-center sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Misi</h2>
              <p class="mx-auto mt-4 max-w-xl font-bold text-xl text-gray-600">
                <ul class="text-justify list-disc p-10">
                    @php
                        $misis = explode(';', $visimisi->misi);
                    @endphp
                    
                    @foreach ($misis as $misi)
                        <li>
                            {{ $misi }}
                        </li>
                    @endforeach
                </ul>
              </p>
            </div>
        </section>
      </div>
      
    </div>
</x-guest-layout>
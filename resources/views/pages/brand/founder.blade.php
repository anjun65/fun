<x-guest-layout>
    <div class="relative overflow-hidden min-h-screen">
      <div class="absolute inset-0">
        <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
      </div>
      <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          
        <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
              <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Our Founder</h2>
              <p class="mx-auto mt-4 max-w-xl font-bold text-2xl text-gray-900">Direktur Utama PT. Althafunissa Fawwaz Indonesia</p>
              <div class="my-10 justify-center w-full flex items-center align-middle">
                  <img class="w-40 h-40 object-center rounded-full" src="{{ asset('img/founder.jpg') }}">
               </div>
               <div class="mx-auto mt-4 max-w-xl font-bold text-base text-gray-900 text-left">
                    <div class="grid grid-cols-3">
                        <div>
                            Nama lengkap 
                        </div>
                        <div class="w-full font-base col-span-2">
                            : {{ $founder->nama }}
                        </div>
                    </div>

                    <div class="grid grid-cols-3">
                        <div>
                            Tempat Tgl Lahir 
                        </div>
                        <div class="w-full font-base col-span-2">
                            : {{ $founder->tempat }} {{ $founder->tanggal_lahir }}
                        </div>
                    </div>

                    <div class="grid grid-cols-3">
                        <div>
                            Pendidikan terakhir
                        </div>
                        <div class="w-full font-base col-span-2">
                            : {{ $founder->pendidikan }}
                        </div>
                    </div>
                </div>

                <p class="mx-auto mt-4 max-w-xl font-bold text-base text-gray-900">Profesi sekarang:</p>
                <p class="mx-auto max-w-xl font-base text-base text-gray-900">
                    @php
                        $profesis = explode(',', $founder->profesi);
                        $i= 1;
                    @endphp
                    
                    @foreach ($profesis as $profesi)
                        {{ $i }}. {{ $profesi }} <br/>
                        

                        @php
                            $i++;
                        @endphp
                    @endforeach
                </p>

                <p class="mx-auto mt-4 max-w-xl font-bold text-base text-gray-900">Jabatan Organisasi yg aktif saat ini:</p>
                <p class="mx-auto max-w-xl mb-4 font-base text-base text-gray-900">
                    @php
                        $jabatans = explode(',', $founder->jabatan);
                        $i= 1;
                    @endphp
                    
                    @foreach ($jabatans as $jabatan)
                        {{ $i }}. {{ $jabatan }} <br/>
                        

                        @php
                            $i++;
                        @endphp
                    @endforeach
                </p>
            </div>
        </section>


        

                    
      </div>
      
    </div>
</x-guest-layout>
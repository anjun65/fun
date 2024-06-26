<x-guest-layout>
  <div class="relative overflow-hidden min-h-screen">
    <div class="absolute inset-0">
      <img src="{{ asset('img/bg-faq.png') }}" class="h-full w-full object-cover object-center">
    </div>
    <div class="relative bg-opacity-75 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
      <section class="relative mx-auto flex max-w-7xl flex-col items-center px-4 pt-32 text-center sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl lg:text-6xl">Media Coverage</h2>
          </div>
      </section>

      <div class="space-y-12">
          <div class="space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none">
            <h2 class="text-2xl mt-20 font-bold tracking-tight border-l-4 border-amber-400" style="padding-left:1em">Berita</h2>
          </div>
          <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:grid-cols-3 lg:gap-x-8">
            
            @forelse ($medias as $media)
              <li>
                <a href="{{ route('media-details', $media->id) }}" class="space-y-4">
                  <div class="aspect-w-3 aspect-h-2">
                    <img class="rounded-lg object-cover shadow-lg" src="{{ Storage::url($media->photo) }}" alt="{{ $media->judul }}">
                  </div>
                
                  <div class="space-y-2">
                    <div class="space-y-1 text-lg font-medium leading-6 mb-10">
                      <h3>{{ $media->judul }}</h3>
                    </div>
                  </div>
                </a>
              </li>
            @empty
              <li>
                <div class="space-y-4">
                  No Data Found
              </li>
            @endforelse
            
            
            <!-- More people... -->
          </ul>
        </div>

                  
    </div>
    
  </div>
</x-guest-layout>
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
  
            
            

<div class="mb-10 mt-10">
  <ul class="flex flex-wrap -mb-px  text-sm font-medium gap-x-4 text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
    <li class="me-2" role="presentation">
        <button class="inline-block border-2 border-white w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white"  id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Blog</button>
    </li>
    <li class="me-2" role="presentation">
        <button class="inline-block border-2 border-white w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Event</button>
    </li>
    <li class="me-2" role="presentation">
        <button class="inline-block border-2 border-white w-24 bg-white py-1 text-gray-700 rounded-lg focus:text-white focus:bg-gray-700 focus:border-white hover:bg-gray-700 hover:text-white hover:border-white" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Collaboration</button>
    </li>
</ul>

</div>
<div id="default-tab-content">
  <div class="hidden p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    

      <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
        @foreach ($blogs as $blog)
          <div class="group relative flex flex-col overflow-hidden bg-white">
          <div class="w-11/12 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
            <h3 class="text-lg font-medium">
                <a href="{{ route('hall-of-fame-details', $blog->id) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $blog->judul }}
                </a>
            </h3>
            <p class="text-sm">{{ $blog->created_at->toDateString() }}</p>
            <p class="text-sm text-right">
                <a href="{{ route('hall-of-fame-details', $blog->id) }}" class="font-medium text-gray-50">See Details</a>
            </p>
          </div>
          <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden group-hover:opacity-75">
              <img src="{{ Storage::url($blog->file->first()->photo) }}" class="rounded-lg h-full w-full object-cover object-center">
          </div>
          
          </div> 
        @endforeach
        
        
      </div>
   
  </div>
  <div class="hidden p-4 rounded-lg bg-gray-50 " id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
    @foreach ($events as $event)
          <div class="group relative flex flex-col overflow-hidden bg-white">
          <div class="w-11/12 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
            <h3 class="text-lg font-medium">
                <a href="{{ route('hall-of-fame-details', $event->id) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $event->judul }}
                </a>
            </h3>
            <p class="text-sm">{{ $event->created_at->toDateString() }}</p>
            <p class="text-sm text-right">
                <a href="{{ route('hall-of-fame-details', $event->id) }}" class="font-medium text-gray-50">See Details</a>
            </p>
          </div>
          <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden group-hover:opacity-75">
              <img src="{{ Storage::url($event->file->first()->photo) }}" class="rounded-lg h-full w-full object-cover object-center">
          </div>
          
          </div> 
        @endforeach
    </div>
  </div>
  <div class="hidden p-4 rounded-lg bg-gray-50" id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
    @foreach ($collaborations as $collaboration)
          <div class="group relative flex flex-col overflow-hidden bg-white">
          <div class="w-11/12 absolute bottom-0 text-white left-3.5 z-10 flex flex-1 flex-col space-y-2 py-4">
            <h3 class="text-lg font-medium">
                <a href="{{ route('hall-of-fame-details', $collaboration->id) }}">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    {{ $collaboration->judul }}
                </a>
            </h3>
            <p class="text-sm">{{ $collaboration->created_at->toDateString() }}</p>
            <p class="text-sm text-right">
                <a href="{{ route('hall-of-fame-details', $collaboration->id) }}" class="font-medium text-gray-50">See Details</a>
            </p>
          </div>
          <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden group-hover:opacity-75">
              <img src="{{ Storage::url($collaboration->file->first()->photo) }}" class="rounded-lg h-full w-full object-cover object-center">
          </div>
          
          </div> 
        @endforeach
    </div>
  </div>
</div>

            
        </section>
  
      </div>
    </div>
  </x-guest-layout>
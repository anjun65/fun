<div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6">
    <div class="py-4 space-y-4">
        <!-- Top Bar -->
        <div class="items-center justify-between lg:flex">
        <div class="mb-4 lg:mb-0">
            <h3 class="mb-2 text-xl font-bold text-gray-900">Series</h3>
        </div>
        
        <div class="items-center sm:flex">
            <div class="flex items-center">
                <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                    class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5"
                    type="button">
                    Filter by status
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow">
                    <h6 class="mb-3 text-sm font-medium text-gray-900">
                        Status
                    </h6>
                    <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                        <li class="flex items-center">
                            <input id="queue" type="checkbox" checked wire:model="filters.status_queue" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-slate-600 focus:ring-slate-500" />
                            
                            <label for="queue" class="ml-2 text-sm font-medium text-gray-900">
                                Queue
                            </label>
                        </li>
                    
                        <li class="flex items-center">
                            <input id="process" type="checkbox" checked wire:model="filters.status_process" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-slate-600 focus:ring-slate-500" />
                            
                            <label for="process" class="ml-2 text-sm font-medium text-gray-900">
                                Process
                            </label>
                        </li>
                    
                        <li class="flex items-center">
                            <input id="done" type="checkbox" checked wire:model="filters.status_done" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-slate-600 focus:ring-slate-500" />
                            
                            <label for="done" class="ml-2 text-sm font-medium text-gray-900">
                                Done
                            </label>
                        </li>
                    </ul>
                </div>

                <button id="dropdownDefault" data-dropdown-toggle="dropdown-bulk"
                    class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5"
                    type="button">
                    Bulk Action
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div id="dropdown-bulk" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow">
                    <h6 class="mb-3 text-sm font-medium text-gray-900">
                        Bulk Action
                    </h6>
                    <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">

                        <button type="button" wire:click="create" class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 flex items-center space-x-2" wire:click="$toggle('showDeleteModal')" role="menuitem">
                            
                            <svg class="inline-block w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg>


                            <span>New</span>
                        </button>

                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                            <x-icon.trash class="text-gray-700"/> <span>Delete</span>
                        </x-dropdown.item>
                    </ul>
                </div>
            </div>
            <div date-rangepicker class="flex items-center space-x-4">
                <div class="relative">
                    <x-datepicker wire:model="filters.min_tanggal" id="min_tanggal" placeholder="From"></x-datepicker>
                </div>
                <div class="relative">
                    <x-datepicker wire:model="filters.max_tanggal" id="max_tanggal" placeholder="To"></x-datepicker>    
                </div>
            </div>
        
        </div>
    </div>

        <!-- Advanced Search -->
        <div>
            @if ($showFilters)
            <div class="bg-cool-gray-200 p-4 rounded shadow-inner flex relative">
                <div class="w-1/2 pr-2 space-y-4">
                    <x-input.group inline for="filter-status" label="Status">
                        <x-input.select wire:model="filters.status" id="filter-status">
                            <option value="" disabled>Select Status...</option>
                        </x-input.select>
                    </x-input.group>

                    {{-- <x-input.group inline for="filter-date-min" label="Minimum Date">
                        <x-datepicker wire:model="date-min"></x-datepicker>
                    </x-input.group> --}}
                </div>

                <div class="w-1/2 pl-2 space-y-4">
                    

                    {{-- <x-input.group inline for="filter-date-max" label="Maximum Date">
                        <x-datepicker wire:model="filters.date-max"></x-datepicker>
                    </x-input.group> --}}

                    <x-button.link wire:click="resetFilters" class="absolute right-0 bottom-0 p-4">Reset Filters</x-button.link>
                </div>
            </div>
            @endif
        </div>

        <!-- Products Table -->
        <div class="flex-col space-y-4 py-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('title')" :direction="$sorts['title'] ?? null">Title</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('description')" :direction="$sorts['description'] ?? null">Description</x-table.heading>
                    <x-table.heading sortable multi-column>Image</x-table.heading>
                    <x-table.heading />
                </x-slot>

                <x-slot name="body">
                    @if ($selectPage)
                    <x-table.row class="bg-cool-gray-200" wire:key="row-message">
                        <x-table.cell colspan="6">
                            @unless ($selectAll)
                            <div>
                                <span>You have selected <strong>{{ $items->count() }}</strong> data, do you want to select all <strong>{{ $items->total() }}</strong>?</span>
                                <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                            </div>
                            @else
                            <span>You are currently selecting all <strong>{{ $items->total() }}</strong> data.</span>
                            @endif
                        </x-table.cell>
                    </x-table.row>
                    @endif

                    @forelse ($items as $item)
                    <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $item->id }}">
                        <x-table.cell class="pr-0">
                            <x-input.checkbox wire:model="selected" value="{{ $item->id }}" />
                        </x-table.cell>


                        <x-table.cell >
                            {{ $item->title }}
                        </x-table.cell>


                        <x-table.cell>
                            {{ $item->description }}
                        </x-table.cell>

                        <x-table.cell>
                            <img src="{{ Storage::url($item->image) }}" class="w-auto h-20">
                        </x-table.cell>

                        <x-table.cell>
                            <x-button.link wire:click="edit({{ $item->id }})">Edit</x-button.link>
                        </x-table.cell>
                    </x-table.row>
                    @empty
                    <x-table.row>
                        <x-table.cell colspan="10">
                            <div class="flex justify-center items-center space-x-2">
                                <x-icon.inbox class="h-8 w-8 text-gray-400" />
                                <span class="font-medium py-8 text-gray-400 text-medium">No Data Found...</span>
                            </div>
                        </x-table.cell>
                    </x-table.row>
                    @endforelse
                </x-slot>
            </x-table>

            <div>
                {{ $items->links() }}
            </div>
        </div>
    </div>

    <!-- Delete Transactions Modal -->
    <form wire:submit.prevent="deleteSelected">
        <x-modal.confirmation wire:model.defer="showSeriesDeleteModal">
            <x-slot name="title">Delete</x-slot>

            <x-slot name="content">
                <div class="py-8 text-cool-gray-700">Are you sure?</div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-center w-full pb-4 mt-4 space-x-4">
                    <button type="button" wire:click="$set('showDeleteModal', false)" class="w-full justify-center text-gray-600 inline-flex items-center hover:text-gray-600 hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Cancel
                    </button>

                    <button type="submit" class="w-full justify-center text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Save
                    </button>
                </div>  
            </x-slot>
        </x-modal.confirmation>
    </form>

    <!-- Save Product Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showSeriesEditModal">
            <x-slot name="title">Portofolio</x-slot>

            <x-slot name="content">
                <div class="grid grid-cols-6 gap-6 py-4">
                        <div class="col-span-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input type="title" name="title" wire:model="editing.title" id="title" class="block p-2.5 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Insert Title" required="">
                        </div>

                        <div class="col-span-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                            <textarea rows="4" wire:model="editing.description" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-slate-500 focus:border-slate-500" placeholder="Insert Description">{{ $editing->description }}</textarea>
                        </div>

                        <div class="col-span-6">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                              <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                  <label for="file-upload" class="w-full relative cursor-pointer rounded-md bg-white font-semibold text-slate-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-slate-600 focus-within:ring-offset-2 hover:text-slate-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" wire:model="upload" name="file-upload" type="file" class="sr-only">

                                    @error('upload') <span class="error text-red-600">{{ $message }}</span> @enderror
                                  </label>
                                  
                                </div>
                                
                                <div wire:loading wire:target="upload">
                                    <p class="text-sm leading-5 text-gray-600">
                                        Uploading...<br/>
                                    </p>
                                </div>

                                <p class="text-xs leading-5 text-gray-600">
                                    
                                    @if ($upload)
                                        {{ $upload->getClientOriginalName() }}
                                    @else
                                        PNG, JPG, GIF up to 10MB
                                    @endif
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-center w-full pb-4 mt-4 space-x-4">
                    <button type="button" wire:click="$set('showEditModal', false)" class="w-full justify-center text-gray-600 inline-flex items-center hover:text-gray-600 hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Cancel
                    </button>

                    <button type="submit" class="w-full justify-center text-white bg-slate-700 hover:bg-slate-800 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Save
                    </button>
                </div>                
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
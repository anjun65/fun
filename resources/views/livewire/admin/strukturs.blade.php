<div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6">
    <div class="py-4 space-y-4">
        <!-- Top Bar -->
        <div class="items-center justify-between lg:flex">
        <div class=" lg:mb-0">
            <h3 class="text-2xl font-bold text-gray-900">Struktur Organisasi</h3>
        </div>
        
        <div class="items-center sm:flex">
            <div class="flex items-center">
                

                <button id="dropdownDefault" data-dropdown-toggle="dropdown-bulk"
                    class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5"
                    type="button">
                    Aksi
                    <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div id="dropdown-bulk" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow">
                    <h6 class="mb-3 text-sm font-medium text-gray-900">
                        Aksi
                    </h6>
                    <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">

                        <button type="button" wire:click="create" class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 flex items-center space-x-2" wire:click="$toggle('showDeleteModal')" role="menuitem">
                            
                            <svg class="inline-block w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                            </svg>


                            <span>Tambah</span>
                        </button>

                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                            <x-icon.trash class="text-gray-700"/> <span>Hapus</span>
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

        

        <!-- Products Table -->
        <div class="flex-col space-y-4 py-4">
            <x-table>
                <x-slot name="head">
                    <x-table.heading class="pr-0 w-8">
                        <x-input.checkbox wire:model="selectPage" />
                    </x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('name')" :direction="$sorts['name'] ?? null">Nama</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('jabatan')" :direction="$sorts['jabatan'] ?? null">Jabatan</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('departement')" :direction="$sorts['departement'] ?? null">Departement</x-table.heading>
                    
                    <x-table.heading sortable multi-column>Gambar</x-table.heading>
                    
                    
                    
                    
                    
                    
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
                            {{ $item->name }}
                        </x-table.cell>
                        
                        <x-table.cell>
                            {{ $item->jabatan }}
                        </x-table.cell>

                        <x-table.cell>
                            {{ $item->departement }}
                        </x-table.cell>

                        <x-table.cell>
                            <img src="{{ Storage::url($item->photo) }}" class="w-auto h-20">
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
        <x-modal.confirmation wire:model.defer="showDeleteModal">
            <x-slot name="title">Delete</x-slot>

            <x-slot name="content">
                <div class="py-8 text-cool-gray-700">Are you sure?</div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-center w-full pb-4 mt-4 space-x-4">
                    <button type="button" wire:click="$set('showDeleteModal', false)" class="w-full justify-center text-gray-600 inline-flex items-center hover:text-gray-600 hover:bg-gray-50 border border-gray-300 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Cancel
                    </button>

                    <button type="submit" class="w-full justify-center text-white bg-amber-400 hover:bg-amber-500 focus:ring-4 focus:outline-none focus:ring-slate-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Save
                    </button>
                </div>  
            </x-slot>
        </x-modal.confirmation>
    </form>

    <!-- Save Product Modal -->
    <form wire:submit.prevent="save">
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Tambah Struktur Organisasi</x-slot>

            <x-slot name="content">
                <div class="grid grid-cols-6 gap-6 py-4">
                        <div class="col-span-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                            <input type="text" name="name" wire:model.lazy="editing.name" id="name" class="block p-2.5 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Fill the text" required>
                        </div>
                        
                        <div class="col-span-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                            <input type="text" name="jabatan" wire:model.lazy="editing.jabatan" id="jabatan" class="block p-2.5 w-full border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Fill the text" required>
                        </div>

                        <div class="col-span-6">
                            <label for="departement" class="block text-sm font-medium text-gray-700">Departement</label>
                            <select id="departement" name="departement" wire:model.lazy="editing.departement" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                              <option value="" selected>Pilih Departement</option>
                              <option value="Komisaris">Komisaris</option>
                              <option value="Direktur">Direktur</option>
                              <option value="GM">GM</option>
                              <option value="Corporate Secretary">Corporate Secretary</option>
                              <option value="Operasional">Operasional</option>
                              <option value="SDM/HRD">SDM/HRD</option>
                              <option value="R&D">R&D</option>
                              <option value="Marketing">Marketing</option>
                              <option value="Keuangan">Keuangan</option>
                            </select>
                        </div>

                        

                        <div class="col-span-6">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Photo</label>
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
                    <button type="button" wire:click="$set('showEditModal', false)" class="w-full justify-center text-amber-400 inline-flex items-center hover:text-amber-600 hover:bg-amber-50 border border-gray-300 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Cancel
                    </button>

                    <button type="submit" class="w-full justify-center text-white bg-amber-300 hover:bg-amber-400 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Submit
                    </button>
                </div>                
            </x-slot>
        </x-modal.dialog>
    </form>
</div>
<div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6">
    <div class="py-4 space-y-4">
        <!-- Top Bar -->
        <div class="items-center justify-between lg:flex">
        <div class="mb-4 lg:mb-0">
            <h3 class="mb-2 text-xl font-bold text-gray-900">Message</h3>
            <span class="text-base font-normal text-gray-500">This is a list of Client Messages</span>
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
                        <x-dropdown.item type="button" wire:click="$toggle('showDeleteModal')" class="flex items-center space-x-2">
                            <x-icon.trash class="text-cool-gray-400"/> <span>Delete</span>
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
                    <x-table.heading sortable multi-column wire:click="sortBy('first_name')" :direction="$sorts['first_name'] ?? null">Name</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('company')" :direction="$sorts['company'] ?? null">Company</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('email')" :direction="$sorts['email'] ?? null">Email</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('handphone')" :direction="$sorts['handphone'] ?? null">Handphone</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('message')" :direction="$sorts['message'] ?? null">Message</x-table.heading>
                    <x-table.heading>Request</x-table.heading>
                    <x-table.heading sortable multi-column wire:click="sortBy('status')" :direction="$sorts['status'] ?? null">Status</x-table.heading>
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
                            {{ $item->first_name }} {{ $item->last_name }}
                        </x-table.cell>


                        <x-table.cell>
                            {{ $item->company }}
                        </x-table.cell>

                        <x-table.cell>
                            {{ $item->email }}
                        </x-table.cell>

                        <x-table.cell>
                            {{ $item->handphone }}
                        </x-table.cell>

                        <x-table.cell>
                            {{ \Illuminate\Support\Str::limit($item->message , 100, $end=' ...') }}
                        </x-table.cell>

                        <x-table.cell>
                            <div class="grid grid-cols-1 py-2">
                                    <ul role="list" class="mt-1 space-y-8 text-gray-600">
                                        @if ($item->is_penetration)
                                            <li class="flex gap-x-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-1 h-5 w-5 flex-none">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd"></path>
                                                </svg>
                                            
                                                <span>
                                                    <span class="text-gray-600">Vulnerability Assessment & Penetration Testing.</span>
                                                </span>
                                            </li>
                                        @endif

                                        @if ($item->is_consulting)
                                            <li class="flex gap-x-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-1 h-5 w-5 flex-none">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd"></path>
                                                </svg>
                                            
                                                <span>
                                                    <span class="text-gray-600">Cyber Security Consulting.</span>
                                                </span>
                                            </li>
                                        @endif

                                        @if ($item->is_training)
                                            <li class="flex gap-x-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="mt-1 h-5 w-5 flex-none">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z" clip-rule="evenodd"></path>
                                                </svg>
                                            
                                                <span>
                                                    <span class="text-gray-600">Training & Certification.</span>
                                                </span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                        </x-table.cell>

                        <x-table.cell>
                            @if ($item->status == "Queue")
                                    <span
                                    class="bg-slate-100 text-slate-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-slate-100">Queue</span>
                                @endif

                                @if ($item->status == "Process")
                                    <span
                                    class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-orange-100">Process</span>
                                @endif

                                @if ($item->status == "Done")
                                    <span
                                    class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md border border-green-100">Done</span>
                                @endif
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
                                <span class="font-medium py-8 text-gray-400 text-medium">No data Found...</span>
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
                    <button type="button" wire:click="$set('showDeleteModal', false)" class="w-full justify-center text-gray-300 inline-flex items-center hover:text-gray-600 hover:bg-gray-50 border border-gray-600 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
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
        <x-modal.dialog wire:model.defer="showEditModal">
            <x-slot name="title">Message Detail</x-slot>

            <x-slot name="content">
                <div class="grid grid-cols-6 gap-6 py-4">
                        <div class="col-span-6 sm:col-span-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <div class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5">
                                {{ $editing->first_name }} {{ $editing->last_name }}
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                            <div class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5">
                                {{ $editing->company }}
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <div class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5">
                                {{ $editing->email }}
                            </div>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Handphone</label>
                            <div class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5">
                                {{ $editing->handphone }}
                            </div>
                        </div>

                        <div class="col-span-6">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Message</label>
                            <div class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-slate-500 focus:border-slate-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500">{{ $editing->message }}</div>
                        </div>

                        <div class="col-span-6">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                            <select id="category" wire:model.defer="editing.status" class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-slate-500 focus:border-slate-500 block w-full p-2.5">
                                <option selected="" >Choose Status</option>
                                <option value="Queue">Queue</option>
                                <option value="Process">Process</option>
                                <option value="Done">Done</option>
                            </select>
                        </div>
                    </div>
            </x-slot>

            <x-slot name="footer">
                <div class="flex justify-center w-full pb-4 mt-4 space-x-4">
                    <button type="button" wire:click="$set('showEditModal', false)" class="w-full justify-center text-gray-600 inline-flex items-center hover:text-gray-600 hover:bg-gray-50 border border-gray-600 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
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
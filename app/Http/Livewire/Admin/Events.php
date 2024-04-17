<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Models\Event;
use App\Models\EventGallery;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Events extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;
    use WithFileUploads;

    public $showEditModal = false;
    public $showDeleteModal = false;
    public $showDeleteFileModal = false;
    public $showFilters = false;
    public $file_id;
    public $filters = [
        'min_tanggal' => null,
        'max_tanggal' => null,
    ];


    public Event $editing;

    public $upload = [];

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];


    public function rules()
    {
        return [
            'editing.judul' => 'required',
            'editing.category' => 'required',
            'editing.description' => 'required',
            'upload.*' => 'required|image|',
        ];
    }

    public function download_file($id)
    {

        $item = EventGallery::findorFail($id);
        return response()->download(storage_path('app/public/' . $item->path), $item->file_name);

        $this->notify('File tidak bisa didownload.');
    }

    public function file_delete($id)
    {
        $this->showDeleteFileModal = true;
        $this->file_id = $id;
    }

    public function deleteFileSelected()
    {
        $item = EventGallery::findorFail($this->file_id);
        $item->delete();
        $this->file_id = null;
        $this->showDeleteFileModal = false;
        $this->notify('You are deleted data');
    }

    public function mount()
    {
        $this->editing = $this->makeBlankTransaction();
    }
    public function updatedFilters()
    {
        $this->resetPage();
    }

    public function makeBlankTransaction()
    {
        return Event::make();
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = !$this->showFilters;
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) $this->editing = $this->makeBlankTransaction();

        $this->showEditModal = true;
    }

    public function edit(Event $transaction)
    {

        $this->useCachedRows();

        if ($this->editing->isNot($transaction)) $this->editing = $transaction;

        $this->showEditModal = true;
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteModal = false;

        $this->notify('You are deleted ' . $deleteCount . ' data.');
    }

    public function save()
    {

        $this->validate();

        // $this->editing->fill([
        //     'image' => Storage::disk('public')->put('assets/image', $this->upload),
        // ]);

        $this->editing->save();

        foreach ($this->upload as $upload) {
            EventGallery::create([
                'event_id' => $this->editing->id,
                'photo' => Storage::disk('public')->put('assets/image', $upload),
            ]);
        }

        $this->notify('Data saved successfully.');

        $this->showEditModal = false;
    }

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function getRowsQueryProperty()
    {

        $query = Event::query()
            ->when($this->filters['min_tanggal'], fn ($query, $min_tanggal) => $query->where('created_at', '>=', Carbon::parse($min_tanggal)))
            ->when($this->filters['max_tanggal'], fn ($query, $max_tanggal) => $query->where('created_at', '<=', Carbon::parse($max_tanggal)));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('livewire.admin.events', [
            'items' => $this->rows,
        ]);
    }
}

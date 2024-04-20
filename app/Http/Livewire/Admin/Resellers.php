<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Models\Juara;
use App\Models\JuaraGallery;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Resellers extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;
    use WithFileUploads;

    public $showEditModal = false;
    public $showImageModal = false;
    public $showDeleteModal = false;
    public $showDeleteFileModal = false;
    public $showFilters = false;
    public $upload;
    public $filters = [
        'min_tanggal' => null,
        'max_tanggal' => null,
    ];


    public Juara $editing;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];


    public function rules()
    {
        return [
            'editing.years' => 'required',
            'editing.provinsi' => 'required',
            'editing.kota' => 'required',
            'editing.juara' => 'required',
        ];
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
        return Juara::make();
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



    public function createImage()
    {
        $this->showImageModal = true;
    }

    public function edit(Juara $transaction)
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


    public function saveGallery()
    {

        if ($this->upload) {
            JuaraGallery::create([
                'photo' => Storage::disk('public')->put('assets/image', $this->upload),
            ]);

            $this->notify('Data saved successfully.');

            $this->showImageModal = false;
        } else {

            $this->notify('Action Failed.');
        }
    }


    public function save()
    {

        $this->validate();

        $this->editing->save();

        $this->notify('Data saved successfully.');

        $this->showEditModal = false;
    }

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function getRowsQueryProperty()
    {

        $query = Juara::query()
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
        $provinces = Province::all();

        $regencies = Regency::where('province_id', $this->editing->provinsi)->get();

        return view('livewire.admin.resellers', [
            'items' => $this->rows,
            'provinces' => $provinces,
            'regencies' => $regencies,
        ]);
    }
}

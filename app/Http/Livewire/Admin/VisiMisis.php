<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Models\VisiMisi;
use Illuminate\Support\Carbon;

class VisiMisis extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $showEditModal = false;
    public $showDeleteModal = false;
    public $showDeleteFileModal = false;
    public $showFilters = false;
    public $file_id;
    public $filters = [
        'min_tanggal' => null,
        'max_tanggal' => null,
    ];


    public VisiMisi $editing;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];

    public function rules()
    {
        return [
            'editing.judul' => 'required',
            'editing.visi' => 'required',
            'editing.misi' => 'required',
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
        return VisiMisi::make();
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

    public function edit(VisiMisi $transaction)
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

        $query = VisiMisi::query()
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
        return view('livewire.admin.visi-misis', [
            'items' => $this->rows,
        ]);
    }
}
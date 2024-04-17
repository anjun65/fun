<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Http\Livewire\DataTable\WithSorting;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Models\Portofolio;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Lifestyle extends Component
{

    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $showEditModal = false;
    public $showDeleteModal = false;
    public $showFilters = false;
    public $filters = [
        'first_name' => '',
        'status_queue' => true,
        'status_process' => true,
        'status_done' => true,
        'min_tanggal' => null,
        'max_tanggal' => null,
    ];


    public Client $editing;

    public $password;

    protected $queryString = ['sorts'];

    protected $listeners = ['refreshTransactions' => '$refresh'];


    public function rules()
    {
        return [
            'editing.status' => 'required|in:' . collect(Client::STATUSES)->keys()->implode(','),
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
        return Client::make();
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

    public function edit(Client $transaction)
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

        $query = Client::query()
            ->when($this->filters['min_tanggal'], fn ($query, $min_tanggal) => $query->where('created_at', '>=', Carbon::parse($min_tanggal)))
            ->when($this->filters['max_tanggal'], fn ($query, $max_tanggal) => $query->where('created_at', '<=', Carbon::parse($max_tanggal)))
            ->when($this->filters['status_queue'] == false, fn ($query) => $query->where('status', '!=', 'Queue'))
            ->when($this->filters['status_process'] == false, fn ($query) => $query->where('status', '!=', 'Process'))
            ->when($this->filters['status_done'] == false, fn ($query) => $query->where('status', '!=', 'Done'));

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
        return view('livewire.admin.lifestyle', [
            'items' => $this->rows,
        ]);
    }
}

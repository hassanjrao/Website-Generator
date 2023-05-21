<?php

namespace App\Http\Livewire\Notifications;

use Livewire\Component;
use Livewire\WithPagination;


class AllNotifications extends Component
{
    use WithPagination;
    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';
    public $search="";

    public function markAsRead($id){
        auth()->user()->notifications()->where("id", $id)->first()->markAsRead();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }

    public function refresh(){
        $this->search="";
        $this->perPage=10;
    }

    public function render()
    {
        $notifications=auth()->user()->notifications()
        ->when($this->search, function($query){
            // perform case insensitive search
            $query->where("data->message", "like", "%{$this->search}%");

        })
        ->latest()
        ->paginate($this->perPage);
        return view('livewire.notifications.all-notifications', compact("notifications"));
    }
}

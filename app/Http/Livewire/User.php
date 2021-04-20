<?php

namespace App\Http\Livewire;

use App\DataTables\UserDataTable;
use Livewire\Component;

class User extends Component
{
    public function render(UserDataTable $userDataTable)
    {
        return $userDataTable->render('livewire.user');
    }
}

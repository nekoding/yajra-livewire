<?php

namespace App\Http\Livewire;

use App\DataTables\ProductDataTable;
use Livewire\Component;

class Product extends Component
{
    public function render(ProductDataTable $productDataTable)
    {
        return $productDataTable->render('livewire.product');
    }
}

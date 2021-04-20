<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Yajra\DataTables\Services\DataTable;

class DataTableController extends Controller
{

    protected $dataTable;

    public function __construct(DataTable $dataTable)
    {
        $this->dataTable = $dataTable;
    }

    public function index()
    {
        return $this->dataTable->ajax();
    }
}

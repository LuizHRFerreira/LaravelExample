<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ClientDataTable;
class ClientController extends Controller
{
    public function index(ClientDataTable $dataTable)
    {
        return $dataTable->render('clients.index');
    }
}

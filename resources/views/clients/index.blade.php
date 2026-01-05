@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Clientes</h1>
                        </div>
                        <div class="col-sm-6">
                        <div class="breadcrumb float-sm-right">
                            <button type="button" class="btn btn-primary">Novo</button>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{ $dataTable->table() }}
            </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes:[
        'type' => 'module',
    ]) }}
@endpush
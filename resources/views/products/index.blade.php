@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Produtos</h1>
                        </div>
                        <div class="col-sm-6">
                        <div class="breadcrumb float-sm-right">
                            <a href="{{ route('products.create') }}">
                                <button type="button" class="btn btn-primary">Novo</button>
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
@endsection
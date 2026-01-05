@extends('layouts.master')

@section('content')
    <div class="row">

        <div class="col-12">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Criando novo Produto</h1>
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="container">
            <form class="from-prevent-multiple-submits"  action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('products.fields')
                <div class="row no-print">
                    <div class="col-12 mt-4">
                        {{-- <a href="{{ route('companies.users.index', ['company_id' => request()->company_id]) }}">
                        <button type="button" class="btn btn-danger float-right">{{ trans('text.cancel') }}</button>
                        </a> --}}
                        <button type="submit" class="btn btn-success float-right from-prevent-multiple-submits" style="margin-right: 5px;">{{ trans('text.save') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
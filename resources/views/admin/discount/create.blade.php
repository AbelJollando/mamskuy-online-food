@extends('layouts.admin-layout.master')

@section('title')
    Discount Master
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Discount Master</h3>
        @endslot
    @endcomponent

    <div class="container-fluid">
        <div class="row starter-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Create Data Discount</h5>
                        <a href="{{ url('admin/discount') }}" class="float-right btn btn-success btn-sm">Back!</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="post" enctype="multipart/form-data" action="{{ route('admin.discount.store') }}">
                                @csrf
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Product</th>
                                        <td>
                                            <select name="product[]" multiple class="form-control @error('product') is-invalid @enderror" id="product">
                                                @foreach ($products as $product)
                                                    <option value="{{ $product->id }}">{{ $product->product_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('product')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Discount</span> </th>
                                        <td> <input name="discount" type="number" class="form-control @error('discount') is-invalid @enderror" value="{{ old('discount') }}">
                                            @error('discount')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Start Time</span> </th>
                                        <td> <input name="start" type="datetime-local" class="form-control @error('start') is-invalid @enderror" value="{{ old('start') }}">
                                            @error('start')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>End Time</span> </th>
                                        <td> <input name="end" type="datetime-local" class="form-control @error('end') is-invalid @enderror" value="{{ old('end') }}">
                                            @error('end')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" class="btn btn-primary" />
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.3/dist/js/select2.min.js"></script>
        <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
        </script>
        <script>
            $(document).ready(function() {

            // Selecr2
            $('#product').select2({
                placeholder: 'Select Product',
                width: 'resolve',
            }); 
        });
        </script>
    @endpush

    @push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/select2.css') }}">
    <style>
        .select2-selection--multiple .select2-search--inline .select2-search__field {
            width: auto !important;
        }

    </style>
@endpush
@endsection

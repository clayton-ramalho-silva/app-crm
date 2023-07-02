@extends('layout.index')

@section('content')
<div class="row invoice layout-spacing layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <form class="row" method="POST" action="{{ route() }}">
                    @csrf
                    <div class="col-xl-9">

                        <div class="invoice-content">

                            <div class="invoice-detail-body">

                                <div class="invoice-detail-items">

                                    <div class="table-responsive">
                                        <table class="table table-bordered item-table">
                                            <thead>
                                                <tr>
                                                    <th>Descrição</th>
                                                    <th class="">Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="description">
                                                        <input name="name" type="text" class="form-control form-control-sm" placeholder="Título do produto">
                                                        <textarea name="description" rows="10" class="form-control" placeholder="Descrição do produto"></textarea>
                                                    </td>
                                                    <td class="rate">
                                                        <input name="price" type="text" class="form-control form-control-sm" placeholder="Valor">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3">

                        <div class="invoice-actions-btn mt-0">

                            <div class="invoice-action-btn ">

                                <div class="row">
                                    <div class="col-xl-12 col-md-4">

                                            <button type="submit" class="btn btn-success btn-download btn-block">Cadastrar</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
            </form>


        </div>

    </div>
</div>
@endsection

@push('component-scripts')
    <script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/apps/invoice-add.js') }}"></script>
@endpush

@push('component-css')
<link href="{{ asset('assets/css/apps/invoice-add.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
<link href="{{ asset('plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
@endpush




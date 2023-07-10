@extends('layout.index')

@section('content')
<div class="row invoice layout-spacing layout-top-spacing" style="margin-top: 9rem">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <form class="row" method="POST" action="{{ route('customer.store') }}">
                    @csrf
                    <div class="col-xl-9">

                        <div class="invoice-content">

                            <div class="invoice-detail-body">

                                {{-- <div class="invoice-detail-title">

                                    <div class="invoice-logo">
                                        <div class="upload">
                                            <input type="file" id="input-file-max-fs" class="dropify" data-max-file-size="2M" />
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="invoice-detail-header">

                                    <div class="row justify-content-between">
                                        <div class="col-12 invoice-address-company">

                                            <h4>Informações:</h4>

                                            <div class="invoice-address-company-fields">

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Nome</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="name" class="form-control form-control-sm" id="company-name" placeholder="Nome">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-email" class="col-sm-3 col-form-label col-form-label-sm">E-mail</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="email" class="form-control form-control-sm" id="company-email" placeholder="name@company.com">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-address" class="col-sm-3 col-form-label col-form-label-sm">Empresa</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="organization" class="form-control form-control-sm" id="company-address" placeholder="Empresa">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-phone" class="col-sm-3 col-form-label col-form-label-sm">Telefone</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="phone" class="form-control form-control-sm" id="company-phone" placeholder="(11) 5555-5555">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-phone" class="col-sm-3 col-form-label col-form-label-sm">Celular</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="cellphone" class="form-control form-control-sm" id="company-phone" placeholder="(11) 9999-9999">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
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




@extends('layout.index')

@section('content')
<div class="row invoice layout-spacing layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <form class="row" method="POST" action="{{ route('lead.update', $lead->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="col-xl-9">

                        <div class="invoice-content">

                            <div class="invoice-detail-body">

                                <div class="invoice-detail-total">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Titulo:</label>
                                                <div class="col-sm-9">
                                                    <input name="title" type="text"
                                                        class="form-control form-control-sm"
                                                        placeholder="Título do produto"
                                                        value="{{ $lead->title }}"
                                                    >

                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Descrição:</label>
                                                <div class="col-sm-9">
                                                    <textarea name="description" rows="10" class="form-control" placeholder="Descrição do produto">{{ $lead->description }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Valor:</label>
                                                <div class="col-sm-9">
                                                    <input name="value" type="text"
                                                        class="form-control form-control-sm" placeholder="Valor" value="{{ $lead->value }}">
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Produto:</label>
                                                <div class="col-sm-9">
                                                    <select name="product"
                                                        class="form-control country_code  form-control-sm"
                                                        id="payment-method-country">
                                                        <option value="{{ $lead->product }}">{{ $lead->product }}</option>
                                                        <option value="Criação de E-commerce">Criação de E-commerce</option>
                                                        <option value="Criação de Logo">Criação de Logo</option>
                                                        <option value="Criação de Identidade Visual">Criação de Identidade
                                                            Visual</option>
                                                        <option value="Criação de App Mobile">Criação de App Mobile</option>
                                                        <option value="Criação de E-commerce">Criação de E-commerce</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Fonte:</label>
                                                <div class="col-sm-9">
                                                    <select name="source"
                                                        class="form-control country_code  form-control-sm"
                                                        id="payment-method-country">
                                                        <option value="{{ $lead->source }}">{{ $lead->source }}</option>
                                                        <option value="whatsapp">Whatsapp</option>
                                                        <option value="site">Site</option>
                                                        <option value="facebook">Facebook</option>
                                                        <option value="google">Google</option>
                                                        <option value="instagram">Instagram</option>
                                                        <option value="indicacao">Indicação</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Cliente:</label>
                                                <div class="col-sm-9">
                                                    <input name="name_customer" type="text"
                                                        class="form-control form-control-sm" placeholder="Cliente" value="{{ $lead->name_customer }}">
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">Telefone:</label>
                                                <div class="col-sm-9">
                                                    <input name="phone_customer" type="text"
                                                        class="form-control form-control-sm" placeholder="Telefone" value="{{ $lead->phone_customer }}">
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account"
                                                    class="col-sm-3 col-form-label col-form-label-sm">E-mail:</label>
                                                <div class="col-sm-9">
                                                    <input name="email_customer" type="text"
                                                        class="form-control form-control-sm" placeholder="email@email.com" value="{{ $lead->email_customer }}">
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

                                            <button type="submit" class="btn btn-success btn-download btn-block">Atualizar</button>
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




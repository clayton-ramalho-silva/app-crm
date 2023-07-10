@extends('layout.index')

@section('content')
<div class="row invoice  layout-spacing layout-top-spacing" style="margin-top: 9rem">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <div class="row">

                <div class="col-xl-9">

                    <div class="invoice-container">
                        <div class="invoice-inbox">

                            <div id="ct" class="">

                                <div class="invoice-00001">
                                    <div class="content-section">

                                        <div class="inv--detail-section inv--customer-detail-section pt-5">

                                            <div class="row">

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                    <p class="inv-to">Titulo: {{ $lead->title}}</p>
                                                    <p class="inv-street-addr">Descrição: {{ $lead->description }}</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                    <h6 class=" inv-title">Informações:</h6>
                                                </div>

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                    <p class="inv-customer-name">Cliente: {{ $lead->name_customer }}</p>
                                                    <p class="inv-email-address">E-mail: {{ $lead->email_customer }}</p>
                                                    <p class="inv-email-address">Telefone: {{ $lead->phone_customer }}</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                    <div class="inv--payment-info">
                                                        <p><span class=" inv-subtitle">Valor:</span> <span>R$ {{ number_format($lead->value,2, ',', '.') }}</span></p>
                                                        <p><span class=" inv-subtitle">Produto: </span> <span>{{ $lead->product }}</span></p>
                                                        <p><span class=" inv-subtitle">Fonte:</span> <span>{{ $lead->source }}</span></p>
                                                        <p><span class=" inv-subtitle">Estágio: </span> <span>{{ $lead->stages }}</span></p>

                                                    </div>
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

                    <div class="invoice-actions-btn">

                        <div class="invoice-action-btn">

                            <div class="row">
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="{{ route('lead.edit', $lead->id )}}" class="btn btn-dark btn-edit">Editar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>


        </div>

    </div>
</div>
@endsection

@push('component-scripts')
    <script src="{{ asset('assets/js/apps/invoice-preview.js') }}"></script>
@endpush

@push('component-css')
<link href="{{ asset('assets/css/apps/invoice-preview.css') }}" rel="stylesheet" type="text/css" />
@endpush




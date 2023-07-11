@extends('layout.index')

@section('content')

<div class="row invoice  layout-spacing layout-top-spacing" style="margin-top: 150px">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <div class="row">

                <div class="col-xl-9">

                    <div class="invoice-container">
                        <div class="invoice-inbox">

                            <div id="ct" class="">

                                <div class="invoice-00001">
                                    <div class="content-section">

                                        <div class="inv--head-section inv--detail-section">

                                            <div class="row">

                                                <div class="col-sm-6 col-12 mr-auto">
                                                    <div class="d-flex">
                                                        <h3 class="in-heading align-self-center">Pedido</h3>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 text-sm-right">
                                                    <p class="inv-list-number"><span class="inv-title">Nº : </span> <span class="inv-number">{{ $order->id }}</span></p>
                                                </div>

                                                <div class="col-sm-6 align-self-center mt-3">
                                                    <p class="inv-street-addr">{{ $order->customer->organization }}</p>
                                                    <p class="inv-email-address">{{ $order->customer->email }}</p>
                                                    <p class="inv-email-address">{{ $order->customer->phone }}</p>
                                                    <p class="inv-email-address">{{ $order->customer->cellphone }}</p>
                                                </div>
                                                <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                    <p class="inv-created-date"><span class="inv-title">Data Criação : </span> <span class="inv-date">{{ date('d-m-Y', strtotime($order->created_at)) }}</span></p>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="inv--detail-section inv--customer-detail-section">

                                            <div class="row">

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                    <p class="inv-to">Fatura</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                    <h6 class=" inv-title">Informações Pagamento:</h6>
                                                </div>

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                    <p class="inv-customer-name">{{ $order->customer->name }}</p>
                                                    <p class="inv-street-addr">{{ $order->customer->organization }}</p>
                                                    <p class="inv-email-address">{{ $order->customer->email }}</p>
                                                    <p class="inv-email-address">{{ $order->customer->cellphone }}</p>
                                                    <p class="inv-email-address">{{ $order->customer->phone }}</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                    <div class="inv--payment-info">
                                                        <p><span class=" inv-subtitle">Bank Name:</span> <span>Bank of America</span></p>
                                                        <p><span class=" inv-subtitle">Account Number: </span> <span>1234567890</span></p>
                                                        <p><span class=" inv-subtitle">SWIFT code:</span> <span>VS70134</span></p>
                                                        <p><span class=" inv-subtitle">Country: </span> <span>United States</span></p>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="inv--product-table-section">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="">
                                                        <tr>
                                                            <th scope="col">S.No</th>
                                                            <th scope="col">Itens</th>
                                                            <th class="text-right" scope="col">Qtd</th>
                                                            <th class="text-right" scope="col">Preço</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($order->products as $product)
                                                            <tr>
                                                                <td>{{ $loop->index + 1 }}</td>
                                                                <td>{{ $product->name }}</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="inv--total-amounts">

                                            <div class="row mt-4">
                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                </div>
                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                    <div class="text-sm-right">
                                                        <div class="row">
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">Total Itens: </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">R$ {{ number_format($order->subtotal, 2, ',', '.') }}</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">Desconto: </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">R$ {{ number_format($order->desconto, 2, ',', '.') }}</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7 grand-total-title">
                                                                <h4 class="" style="color: #ebedf2">Total : </h4>
                                                            </div>
                                                            <div class="col-sm-4 col-5 grand-total-amount">
                                                                <h4 class="" style="color: #ebedf2">R$ {{ number_format($order->total, 2, ',', '.') }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="inv--note">

                                            <div class="row mt-4">
                                                <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                    <p>{{ $order->obs }}</p>
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
                                    <a href="javascript:void(0);" class="btn btn-primary btn-send">Enviar Pedido</a>
                                </div>
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Imprimir</a>
                                </div>
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="apps_invoice-edit.html" class="btn btn-dark btn-edit">Editar</a>
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

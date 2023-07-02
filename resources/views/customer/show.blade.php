@extends('layout.index')

@section('content')
<div class="row invoice  layout-spacing layout-top-spacing">
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

                                                <div class="col-sm-12 col-12 mr-auto">
                                                    <div class="d-flex">
                                                        <img class="company-logo" src="assets/img/cork-logo.png" alt="company">
                                                        <h3 class="in-heading align-self-center">{{ $customer->organization }}</h3>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 align-self-center mt-3">
                                                    <p class="inv-email-address">{{ $customer->name }}</p>
                                                    <p class="inv-email-address">{{ $customer->email }}</p>
                                                    <p class="inv-email-address">{{ $customer->phone }}</p>
                                                </div>
                                                <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                    <p class="inv-created-date"><span class="inv-title">Cliente Desde : </span> <span class="inv-date">{{ date('d-m-Y', strtotime($customer->created_at)) }}</span></p>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="inv--detail-section inv--customer-detail-section">

                                            <div class="row">

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                    <p class="inv-to">Fatura para:</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                    <h6 class=" inv-title">Informações Pagamento:</h6>
                                                </div>

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                    <p class="inv-customer-name">Jesse Cory</p>
                                                    <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                    <p class="inv-email-address">redq@company.com</p>
                                                    <p class="inv-email-address">(128) 666 070</p>
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
                                                            <th class="text-right" scope="col">Valor</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Calendar App Customization</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">R$ 120</td>
                                                            <td class="text-right">R$ 120</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Chat App Customization</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">R$ 230</td>
                                                            <td class="text-right">R$ 230</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Laravel Integration</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">R$ 405</td>
                                                            <td class="text-right">R$ 405</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Backend UI Design</td>
                                                            <td class="text-right">1</td>
                                                            <td class="text-right">R$ 2500</td>
                                                            <td class="text-right">R$ 2500</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="inv--total-amounts" style="border-bottom: none">

                                            <div class="row mt-4">
                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                </div>
                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                    <div class="text-sm-right">
                                                        <div class="row">
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">Sub Total: </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">R$ 3155</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">Taxas: </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">R$ 700</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7">
                                                                <p class=" discount-rate">Disconto : <span class="discount-percentage">5%</span> </p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">R$ 10</p>
                                                            </div>
                                                            <div class="col-sm-8 col-7 grand-total-title">
                                                                <h4 class="">Total : </h4>
                                                            </div>
                                                            <div class="col-sm-4 col-5 grand-total-amount" >
                                                                <h4 class="">R$ 3845</h4>
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

                    </div>

                </div>

                <div class="col-xl-3">

                    <div class="invoice-actions-btn">

                        <div class="invoice-action-btn">

                            <div class="row">
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-dark btn-edit">Editar</a>
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




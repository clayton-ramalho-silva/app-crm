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

                                        <div class="inv--head-section inv--detail-section" style="border-bottom: none">

                                            <div class="row">

                                                <div class="col-sm-6 col-12 mr-auto">
                                                    <div class="d-flex">
                                                        <h3 class="in-heading align-self-center ml-0">{{ $product->name }}</h3>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 text-sm-right">
                                                    <p class="inv-list-number"><span class="inv-title">Valor : </span> <span class="inv-number">R$ {{ number_format($product->price,2, ',', '.') }}</span></p>
                                                </div>

                                                <div class="col-sm-6 align-self-center mt-3">
                                                    <p class="inv-street-addr">{{ $product->description }}</p>
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
                                    <a href="{{ route('product.edit', $product->id )}}" class="btn btn-dark btn-edit">Editar</a>
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




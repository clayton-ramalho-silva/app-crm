<div class="widget-four">
    <div class="widget-heading">
        <h5 class="">Fontes dos Leads</h5>
    </div>
    <div class="widget-content">
        <div class="vistorsBrowser">



            {{-- First Source --}}
            <div class="browser-list">

                <div class="w-browser-details">
                    <div class="w-browser-info">
                        <h6>{{ Str::ucfirst($sourceFirst['name'])}} - teste</h6>
                        <p class="browser-count bs-tooltip" title="R$ {{ number_format($sourceFirst['value'], 2, '.', ',' )}}">{{ number_format($sourceFirst['percent'], 2, ',', ',') }}%</p>
                    </div>
                    <div class="w-browser-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: {{ $sourceFirst['percent'] }}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

             {{-- Second Source --}}
             <div class="browser-list">

                <div class="w-browser-details">
                    <div class="w-browser-info">
                        <h6>{{ Str::ucfirst($sourceSecond['name'])}}</h6>
                        <p class="browser-count bs-tooltip" title="R$ {{ number_format($sourceSecond['value'], 2, '.', ',')}}">{{ number_format($sourceSecond['percent'], 2, ',', '.') }}%</p>
                    </div>
                    <div class="w-browser-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: {{ $sourceSecond['percent'] }}%" aria-valuenow="190" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

             {{-- Others Source --}}
             <div class="browser-list">

                <div class="w-browser-details">
                    <div class="w-browser-info">
                        <h6>Outros</h6>
                        <p class="browser-count bs-tooltip" title="R$ {{ number_format($sourceOthers['value'], 2, '.', ',') }}">{{ number_format($sourceOthers['percent'], 2, ',', '.') }}%</p>
                    </div>
                    <div class="w-browser-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: {{ $sourceOthers['percent'] }}%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>



@push('component-css')
<link rel="stylesheet" href="{{ asset('plugins/font-icons/fontawesome/css/regular.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/font-icons/fontawesome/css/fontawesome.css')}}">
@endpush

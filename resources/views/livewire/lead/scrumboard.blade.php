<div class="row scrumboard" id="cancel-row" style="margin-top:9rem">
    <div class="col-lg-12 layout-spacing">
        {{--  --}}

        <div id="box-stages-leads" class="task-list-section barra-rolagem-superior-container">

            {{-- Novo --}}
            <div id="new" data-section="s-new" class="task-list-container barra-rolagem-superior-card"
                data-connect="sorting">
                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="In Progress">Novo</h6>
                        <p class="inv-amount"><strong>Total:</strong> R$ {{ number_format($leads_new_value, 2, ',', '.') }}
                        </p>
                    </div>

                    <div class="connect-sorting-content" data-sortable="true">

                        @foreach ($leads_new as $lead)
                            <div id={{ $lead->id }} data-draggable="true" class="card task-text-progress"
                                style="">
                                <div class="card-body">

                                    <div class="task-header">

                                        <div class="">
                                            <a href="{{ route('lead.show', $lead->id) }}">
                                                <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">
                                                    {{ $lead->title }} </h4>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="task-body">

                                        <div class="task-content">
                                            <p class="inv-amount"><strong>Valor:</strong> R$
                                                {{ number_format($lead->value, 2, ',', '.') }}</p>
                                            <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong>
                                                {{ $lead->name_customer }} </p>
                                            <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>
                                                {{ $lead->product }} </p>

                                        </div>

                                        <div class="task-bottom">
                                            <div class="tb-section-1">
                                                <span data-taskDate="08 Aug 2020"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                            </div>
                                            <div class="tb-section-2">
                                                <button type="button" class="btn-submit-delete" data-toggle="modal"
                                                    data-target="#modal-task" data-whatever="{{ $lead->id }}">del
                                                    <svg class="btn-tarefa" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="tb-section-2">
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-submit-delete">del
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2 s-task-delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach


                    </div>

                    <div class="add-s-task">
                        <a href="{{ route('lead.create') }}" class="addLead"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-plus-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg> Novo Lead</a>
                    </div>

                </div>
            </div>

            {{-- Fluxo --}}
            <div id="flow" data-section="s-in-progress" class="task-list-container barra-rolagem-superior-card"
                data-connect="sorting">
                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="Complete">Fluxo</h6>
                        <p class="inv-amount"><strong>Total:</strong> R$
                            {{ number_format($leads_flow_value, 2, ',', '.') }}</p>

                    </div>

                    <div class="connect-sorting-content" data-sortable="true">

                        @foreach ($leads_flow as $lead)
                            <div id={{ $lead->id }} data-draggable="true" class="card task-text-progress"
                                style="">
                                <div class="card-body">

                                    <div class="task-header">

                                        <div class="">
                                            <a href="{{ route('lead.show', $lead->id) }}">
                                                <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">
                                                    {{ $lead->title }} </h4>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="task-body">

                                        <div class="task-content">
                                            <p class="inv-amount"><strong>Valor:</strong> R$
                                                {{ number_format($lead->value, 2, ',', '.') }}</p>
                                            <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong>
                                                {{ $lead->name_customer }} </p>
                                            <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>
                                                {{ $lead->product }} </p>

                                        </div>

                                        <div class="task-bottom">
                                            <div class="tb-section-1">
                                                <span data-taskDate="08 Aug 2020"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                            </div>
                                            <div class="tb-section-2">
                                                <button type="button" class="btn-submit-delete" data-toggle="modal"
                                                    data-target="#modal-task" data-whatever="{{ $lead->id }}">del
                                                    <svg class="btn-tarefa" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="tb-section-2">
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-submit-delete">del
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2 s-task-delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

            {{-- Prospecto --}}
            <div id="prospect" data-section="s-approved" class="task-list-container barra-rolagem-superior-card"
                data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Prospecto</h6>
                        <p class="inv-amount"><strong>Total:</strong> R$
                            {{ number_format($leads_prospect_value, 2, ',', '.') }}</p>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_prospect as $lead)
                            <div id={{ $lead->id }} data-draggable="true" class="card task-text-progress"
                                style="">
                                <div class="card-body">

                                    <div class="task-header">

                                        <div class="">
                                            <a href="{{ route('lead.show', $lead->id) }}">
                                                <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">
                                                    {{ $lead->title }} </h4>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="task-body">

                                        <div class="task-content">
                                            <p class="inv-amount"><strong>Valor:</strong> R$
                                                {{ number_format($lead->value, 2, ',', '.') }}</p>
                                            <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong>
                                                {{ $lead->name_customer }} </p>
                                            <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>
                                                {{ $lead->product }} </p>

                                        </div>

                                        <div class="task-bottom">
                                            <div class="tb-section-1">
                                                <span data-taskDate="08 Aug 2020"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                            </div>
                                            <div class="tb-section-2">
                                                <button type="button" class="btn-submit-delete" data-toggle="modal"
                                                    data-target="#modal-task" data-whatever="{{ $lead->id }}">del
                                                    <svg class="btn-tarefa" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="tb-section-2">
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-submit-delete">del
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2 s-task-delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            {{-- Negociação --}}
            <div id="negotiation" data-section="s-approved" class="task-list-container barra-rolagem-superior-card"
                data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Negociação</h6>
                        <p class="inv-amount"><strong>Total:</strong> R$
                            {{ number_format($leads_negotiation_value, 2, ',', '.') }}</p>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_negotiation as $lead)
                            <div id={{ $lead->id }} data-draggable="true" class="card task-text-progress"
                                style="">
                                <div class="card-body">

                                    <div class="task-header">

                                        <div class="">
                                            <a href="{{ route('lead.show', $lead->id) }}">
                                                <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">
                                                    {{ $lead->title }} </h4>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="task-body">

                                        <div class="task-content">
                                            <p class="inv-amount"><strong>Valor:</strong> R$
                                                {{ number_format($lead->value, 2, ',', '.') }}</p>
                                            <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong>
                                                {{ $lead->name_customer }} </p>
                                            <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>
                                                {{ $lead->product }} </p>

                                        </div>

                                        <div class="task-bottom">
                                            <div class="tb-section-1">
                                                <span data-taskDate="08 Aug 2020"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                            </div>
                                            <div class="tb-section-2">
                                                <button type="button" class="btn-submit-delete" data-toggle="modal"
                                                    data-target="#modal-task" data-whatever="{{ $lead->id }}">del
                                                    <svg class="btn-tarefa" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="tb-section-2">
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-submit-delete">del
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2 s-task-delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            {{-- Convertido --}}
            <div id="win" data-section="s-approved" class="task-list-container barra-rolagem-superior-card"
                data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Convertido</h6>
                        <p class="inv-amount"><strong>Total:</strong> R$
                            {{ number_format($leads_win_value, 2, ',', '.') }}</p>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_win as $lead)
                            <div id={{ $lead->id }} data-draggable="true" class="card task-text-progress"
                                style="">
                                <div class="card-body">

                                    <div class="task-header">

                                        <div class="">
                                            <a href="{{ route('lead.show', $lead->id) }}">
                                                <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">
                                                    {{ $lead->title }} </h4>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="task-body">

                                        <div class="task-content">
                                            <p class="inv-amount"><strong>Valor:</strong> R$
                                                {{ number_format($lead->value, 2, ',', '.') }}</p>
                                            <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong>
                                                {{ $lead->name_customer }} </p>
                                            <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>
                                                {{ $lead->product }} </p>

                                        </div>

                                        <div class="task-bottom">
                                            <div class="tb-section-1">
                                                <span data-taskDate="08 Aug 2020"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                            </div>
                                            <div class="tb-section-2">
                                                <button type="button" class="btn-submit-delete" data-toggle="modal"
                                                    data-target="#modal-task" data-whatever="{{ $lead->id }}">del
                                                    <svg class="btn-tarefa" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="tb-section-2">
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-submit-delete">del
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2 s-task-delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            {{-- Perdido --}}
            <div id="lost" data-section="s-approved" class="task-list-container barra-rolagem-superior-card"
                data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Perdido</h6>
                        <p class="inv-amount"><strong>Total:</strong> R$
                            {{ number_format($leads_lost_value, 2, ',', '.') }}</p>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_lost as $lead)
                            <div id={{ $lead->id }} data-draggable="true" class="card task-text-progress"
                                style="">
                                <div class="card-body">

                                    <div class="task-header">

                                        <div class="">
                                            <a href="{{ route('lead.show', $lead->id) }}">
                                                <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">
                                                    {{ $lead->title }} </h4>
                                            </a>
                                        </div>

                                    </div>

                                    <div class="task-body">

                                        <div class="task-content">
                                            <p class="inv-amount"><strong>Valor:</strong> R$
                                                {{ number_format($lead->value, 2, ',', '.') }}</p>
                                            <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong>
                                                {{ $lead->name_customer }} </p>
                                            <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>
                                                {{ $lead->product }} </p>

                                        </div>

                                        <div class="task-bottom">
                                            <div class="tb-section-1">
                                                <span data-taskDate="08 Aug 2020"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-calendar">
                                                        <rect x="3" y="4" width="18"
                                                            height="18" rx="2" ry="2"></rect>
                                                        <line x1="16" y1="2" x2="16"
                                                            y2="6"></line>
                                                        <line x1="8" y1="2" x2="8"
                                                            y2="6"></line>
                                                        <line x1="3" y1="10" x2="21"
                                                            y2="10"></line>
                                                    </svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                            </div>
                                            <div class="tb-section-2">
                                                <button type="button" class="btn-submit-delete" data-toggle="modal"
                                                    data-target="#modal-task" data-whatever="{{ $lead->id }}">del
                                                    <svg class="btn-tarefa" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-clipboard">
                                                        <path
                                                            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                                        </path>
                                                        <rect x="8" y="2" width="8"
                                                            height="4" rx="1" ry="1"></rect>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="tb-section-2">
                                                <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-submit-delete">del
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2 s-task-delete">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>

        {{--  --}}

    </div>
</div>


{{--  --}}





@push('component-scripts')
    <script>
        $(document).ready(function() {



            var Container = {
                scrumboard: $('.scrumboard'),
                card: $('.scrumboard .card')
            }

            // Containers
            var scrumboard = Container.scrumboard;
            var card = Container.card;


            // Make Task Sortable

            function $_taskSortable() {
                $('[data-sortable="true"]').sortable({
                    connectWith: '.connect-sorting-content',
                    items: ".card",
                    cursor: 'move',
                    placeholder: "ui-state-highlight",
                    refreshPosition: true,
                    stop: function(event, ui) {
                        var parent_ui = ui.item.parent().attr('data-section');

                    },
                    update: function(event, ui) {
                        // console.log(ui);
                        // console.log(ui.item);
                        var id_card = ui.item[0].id;
                        var id_stage = ui.item[0].parentElement.parentElement.parentElement.id;
                        // console.log(id_card);
                        // console.log(id_stage);

                        window.livewire.emit('evento', id_card, id_stage);
                    }
                });
            }


            $_taskSortable();




        });
    </script>
@endpush


@push('component-css')
    <link href="{{ asset('assets/css/apps/scrumboard.css') }}" rel="stylesheet" type="text/css" />
@endpush

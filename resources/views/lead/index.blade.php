@extends('layout.index')

@section('content')



<div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="compose-box">
                    <div class="compose-content" id="addTaskModalTitle">
                        <h5 class="add-task-title">Add Task</h5>
                        <h5 class="edit-task-title">Edit Task</h5>

                        <div class="addTaskAccordion" id="add_task_accordion">
                            <div class="card task-text-progress">
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#add_task_accordion">
                                    <div class="card-body">
                                        <form action="javascript:void(0);">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="task-title mb-4">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                        <input id="s-task" type="text" placeholder="Task" class="form-control" name="task">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="task-badge">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                        <textarea id="s-text" placeholder="Task Text" class="form-control" name="taskText"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> Discard</button>
                <button data-btnfn="addTask" class="btn add-tsk">Add Task</button>
                <button data-btnfn="editTask" class="btn edit-tsk" style="display: none;">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="row scrumboard" id="cancel-row">
    <div class="col-lg-12 layout-spacing">

        <div id="box-stages-leads" class="task-list-section barra-rolagem-superior-container">

            {{-- Novo --}}
            <div data-section="s-new" class="task-list-container barra-rolagem-superior-card" data-connect="sorting">
                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="In Progress">Novo</h6>
                    </div>

                    <div class="connect-sorting-content" data-sortable="true">

                        @foreach ($leads_new as $lead)
                        <div data-draggable="true" class="card task-text-progress" style="">
                            <div class="card-body">

                                <div class="task-header">

                                    <div class="">
                                        <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">{{ $lead->title }} </h4>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'flow']) }}">Fluxo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'prospect']) }}">Prospecto</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'negotiation']) }}">Negociação</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'win']) }}">Convertido</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'lost']) }}">Perdido</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-body">

                                    <div class="task-content">
                                        <p class="inv-amount"><strong>Valor:</strong> R$ {{ number_format($lead->value,2,',','.') }}</p>
                                        <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong> {{ $lead->name_customer }} </p>
                                        <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>  {{ $lead->product }} </p>

                                    </div>

                                    <div class="task-bottom">
                                        <div class="tb-section-1">
                                            <span data-taskDate="08 Aug 2020"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                        </div>
                                        <div class="tb-section-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach


                    </div>

                    <div class="add-s-task">
                        <a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                    </div>

                </div>
            </div>

            {{-- Fluxo --}}
            <div data-section="s-in-progress" class="task-list-container barra-rolagem-superior-card" data-connect="sorting">
                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="Complete">Fluxo</h6>

                    </div>

                    <div class="connect-sorting-content" data-sortable="true">

                        @foreach ($leads_flow as $lead)
                        <div data-draggable="true" class="card task-text-progress" style="">
                            <div class="card-body">

                                <div class="task-header">

                                    <div class="">
                                        <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">{{ $lead->title }} </h4>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'new']) }}">Novo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'prospect']) }}">Prospecto</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'negotiation']) }}">Negociação</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'win']) }}">Convertido</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'lost']) }}">Perdido</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-body">

                                    <div class="task-content">
                                        <p class="inv-amount"><strong>Valor:</strong> R$ {{ number_format($lead->value,2,',','.') }}</p>
                                        <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong> {{ $lead->name_customer }} </p>
                                        <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>  {{ $lead->product }} </p>

                                    </div>

                                    <div class="task-bottom">
                                        <div class="tb-section-1">
                                            <span data-taskDate="08 Aug 2020"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                        </div>
                                        <div class="tb-section-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach

                    </div>

                    <div class="add-s-task">
                        <a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                    </div>

                </div>
            </div>

            {{-- Prospecto --}}
            <div data-section="s-approved" class="task-list-container barra-rolagem-superior-card" data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Prospecto</h6>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_prospect as $lead)
                        <div data-draggable="true" class="card task-text-progress" style="">
                            <div class="card-body">

                                <div class="task-header">

                                    <div class="">
                                        <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">{{ $lead->title }} </h4>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'new']) }}">Novo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'flow']) }}">Fluxo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'negotiation']) }}">Negociação</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'win']) }}">Convertido</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'lost']) }}">Perdido</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-body">

                                    <div class="task-content">
                                        <p class="inv-amount"><strong>Valor:</strong> R$ {{ number_format($lead->value,2,',','.') }}</p>
                                        <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong> {{ $lead->name_customer }} </p>
                                        <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>  {{ $lead->product }} </p>

                                    </div>

                                    <div class="task-bottom">
                                        <div class="tb-section-1">
                                            <span data-taskDate="08 Aug 2020"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                        </div>
                                        <div class="tb-section-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="add-s-task">
                        <a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                    </div>

                </div>
            </div>

             {{-- Negociação --}}
             <div data-section="s-approved" class="task-list-container barra-rolagem-superior-card" data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Negociação</h6>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_negotiation as $lead)
                        <div data-draggable="true" class="card task-text-progress" style="">
                            <div class="card-body">

                                <div class="task-header">

                                    <div class="">
                                        <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">{{ $lead->title }} </h4>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'new']) }}">Novo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'flow']) }}">Fluxo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'prospect']) }}">Prospecto</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'win']) }}">Convertido</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'lost']) }}">Perdido</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-body">

                                    <div class="task-content">
                                        <p class="inv-amount"><strong>Valor:</strong> R$ {{ number_format($lead->value,2,',','.') }}</p>
                                        <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong> {{ $lead->name_customer }} </p>
                                        <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>  {{ $lead->product }} </p>

                                    </div>

                                    <div class="task-bottom">
                                        <div class="tb-section-1">
                                            <span data-taskDate="08 Aug 2020"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                        </div>
                                        <div class="tb-section-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="add-s-task">
                        <a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                    </div>

                </div>
            </div>

             {{-- Convertido --}}
             <div data-section="s-approved" class="task-list-container barra-rolagem-superior-card" data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Convertido</h6>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_win as $lead)
                        <div data-draggable="true" class="card task-text-progress" style="">
                            <div class="card-body">

                                <div class="task-header">

                                    <div class="">
                                        <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">{{ $lead->title }} </h4>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'new']) }}">Novo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'flow']) }}">Fluxo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'prospect']) }}">Prospecto</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'negotiation']) }}">Negociação</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'lost']) }}">Perdido</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-body">

                                    <div class="task-content">
                                        <p class="inv-amount"><strong>Valor:</strong> R$ {{ number_format($lead->value,2,',','.') }}</p>
                                        <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong> {{ $lead->name_customer }} </p>
                                        <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>  {{ $lead->product }} </p>

                                    </div>

                                    <div class="task-bottom">
                                        <div class="tb-section-1">
                                            <span data-taskDate="08 Aug 2020"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                        </div>
                                        <div class="tb-section-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="add-s-task">
                        <a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                    </div>

                </div>
            </div>

            {{-- Perdido --}}
            <div data-section="s-approved" class="task-list-container barra-rolagem-superior-card" data-connect="sorting">

                <div class="connect-sorting">
                    <div class="task-container-header">
                        <h6 class="s-heading" data-listTitle="New">Perdido</h6>
                    </div>


                    <div class="connect-sorting-content" data-sortable="true">
                        @foreach ($leads_lost as $lead)
                        <div data-draggable="true" class="card task-text-progress" style="">
                            <div class="card-body">

                                <div class="task-header">

                                    <div class="">
                                        <h4 class="" data-taskTitle="Launch New SEO Wordpress Theme ">{{ $lead->title }} </h4>
                                    </div>

                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'new']) }}">Novo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'flow']) }}">Fluxo</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'prospect']) }}">Prospecto</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'negotiation']) }}">Negociação</a>
                                            <a class="dropdown-item action-edit" href="{{ route('lead.stages', [$lead->id, 'win']) }}">Convertido</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="task-body">

                                    <div class="task-content">
                                        <p class="inv-amount"><strong>Valor:</strong> R$ {{ number_format($lead->value,2,',','.') }}</p>
                                        <p class="align-self-center mb-0 user-name"><strong>Cliente:</strong> {{ $lead->name_customer }} </p>
                                        <p class="align-self-center mb-0 user-name"><strong>Produto:</strong>  {{ $lead->product }} </p>

                                    </div>

                                    <div class="task-bottom">
                                        <div class="tb-section-1">
                                            <span data-taskDate="08 Aug 2020"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> {{ date('d-m-Y', strtotime($lead->created_at)) }}</span>
                                        </div>
                                        <div class="tb-section-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        @endforeach
                    </div>

                    <div class="add-s-task">
                        <a class="addTask"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



{{-- index  --}}
<div class="row layout-top-spacing">

    <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <table id="invoice-list" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="checkbox-column" style="display: none"> Record no. </th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Cliente</th>
                        <th>Produto</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($leads as $lead)
                        <tr>
                            <td class="checkbox-column" style="display: none"> 1 </td>
                            <td><p class="align-self-center mb-0 user-name"> {{ $lead->title }} </p></td>
                            <td><span class="inv-email"> {{ substr($lead->description, 0, 20)  }}...</span></td>
                            <td><span class="inv-amount">R$ {{ number_format($lead->value,2,',','.') }}</span></td>
                            <td><p class="align-self-center mb-0 user-name"> {{ $lead->name_customer }} </p></td>
                            <td><p class="align-self-center mb-0 user-name"> {{ $lead->product }} </p></td>

                            <td>
                                @if ($lead->status == 'active')
                                    <form action="{{ route('lead.status', $lead->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="deactive">
                                        <button type="submit" class="btn btn-success btn-sm bs-tooltip" title="Desativar">
                                            Ativo
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('lead.status', $lead->id) }}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="active">
                                        <button type="submit" class="btn btn-outline-danger btn-sm bs-tooltip" title="Ativar">
                                            Inativo
                                        </button>
                                    </form>
                                @endif
                            </td>

                            <td>
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                        <a class="dropdown-item action-edit" href="{{ route('lead.show', $lead->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>Visualizar</a>
                                        <a class="dropdown-item action-edit" href="{{ route('lead.edit', $lead->id) }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>Editar</a>
                                        <form action="{{ route('lead.destroy', $lead->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="btn-submit-delete" class=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>Deletar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection



@push('component-scripts')

    <script>

$(document).ready(function(){
var invoiceList = $('#invoice-list').DataTable({
    "dom": "<'inv-list-top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'l<'dt-action-buttons align-self-center'B>><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f<'toolbar align-self-center'>>>>" +
        "<'table-responsive'tr>" +
        "<'inv-list-bottom-section d-sm-flex justify-content-sm-between text-center'<'inv-list-pages-count  mb-sm-0 mb-3'i><'inv-list-pagination'p>>",

    headerCallback:function(e, a, t, n, s) {
        e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
    },
    columnDefs:[ {
        targets:0,
        width:"30px",
        className:"",
        orderable:!1,
        render:function(e, a, t, n) {
            return'<label class="new-control new-checkbox checkbox-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
        },
    }],
    buttons: [
        {
            text: 'Adcionar Lead',
            className: 'btn btn-primary btn-sm',
            action: function(e, dt, node, config ) {
                window.location = "{{ route('lead.create') }}";
            }
        }
    ],
    "order": [[ 1, "asc" ]],
    "oLanguage": {
        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
        "sInfo": "Mostrando página _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Buscar...",
        "sLengthMenu": "Resultados :  _MENU_",
    },
    "stripeClasses": [],
    "lengthMenu": [7, 10, 20, 50],
    "pageLength": 7
});

});

    </script>
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('assets/js/ie11fix/fn.fix-padStart.js') }}"></script>
    <script src="{{ asset('assets/js/apps/scrumboard.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" defer></script>

@endpush

@push('component-css')

    <style>
        #btn-submit-delete{
            border-radius: 5px;
            display: block;
            width: 100%;
            padding: 6px 11px;
            clear: both;
            font-weight: 500;
            background: rgba(231, 81, 90, 0.12);
            color: #e7515a;
            text-align: inherit;
            white-space: nowrap;
            border: 0;
            font-size: 13px;
        }

        #btn-submit-delete svg{
            width: 16px;
            height: 16px;
            margin-right: 7px;
            vertical-align: text-top;
        }

        .barra-rolagem-superior-container{
            transform: rotateX(180deg);
        }

        .barra-rolagem-superior-card{
            transform: rotateX(180deg);
        }



    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assets/css/apps/invoice-list.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/apps/scrumboard.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}" rel="stylesheet" type="text/css">

@endpush

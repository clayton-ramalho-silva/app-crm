@extends('layout.index')

@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12">

        <div class="mail-box-container">
            <div class="mail-overlay"></div>

            <div class="tab-title">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                        <h5 class="app-title">Tarefas</h5>
                    </div>

                    <div class="todoList-sidebar-scroll">
                        <div class="col-md-12 col-sm-12 col-12 mt-4 pl-0">
                            <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a href="{{ route('task.index') }}" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg> Inbox <span class="todo-badge badge"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('task.done') }}" class="nav-link active" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> Finalizados <span class="todo-badge badge"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center w-100">
                        <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#create-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            Nova Tarefa
                          </button>

                    </div>
                </div>
            </div>

            <div id="todo-inbox" class="accordion todo-inbox">
                <div class="search">
                    <input type="text" class="form-control input-search" placeholder="Buscar...">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </div>

                <div class="todo-box">

                    <div id="ct" class="todo-box-scroll">

                        @foreach ($tasks as $task)
                            <div class="todo-item all-list">
                                <div class="todo-item-inner">

                                    <div class="todo-content">
                                        <h5 class="todo-heading" data-todoHeading="{{ $task->title }}">{{ $task->title }}</h5>
                                        <p class="meta-date">{{ date('d-m-Y', strtotime($task->created_at)) }}</p>
                                        <p class="todo-text" data-todoHtml="<p>{{ $task->description }}</p>" data-todoText='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'>{{$task->description}}</p>
                                    </div>

                                    <div class="priority-dropdown custom-dropdown-icon">
                                        <div class="dropdown p-dropdown">
                                            @switch($task->priority)
                                                @case('high')
                                                    <a class="dropdown-toggle danger" href="#" role="button" id="dropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    </a>
                                                    @break
                                                @case('middle')
                                                    <a class="dropdown-toggle warning" href="#" role="button" id="dropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    </a>
                                                    @break
                                                @case('low')
                                                    <a class="dropdown-toggle primary" href="#" role="button" id="dropdownMenuLink-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
                                                    </a>
                                                    @break

                                                @default

                                            @endswitch

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-1">
                                                <form action="{{ route('task.priority', $task->id) }}" method="post">
                                                    @csrf

                                                    <input type="hidden" name="priority" value="high">
                                                    <a class="dropdown-item danger"
                                                    href="{{ route('task.priority', $task->id) }}"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit()";
                                                    ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Alta</a>
                                                </form>

                                                <form action="{{ route('task.priority', $task->id) }}" method="post">
                                                    @csrf

                                                    <input type="hidden" name="priority" value="middle">
                                                    <a class="dropdown-item warning"
                                                    href="{{ route('task.priority', $task->id) }}"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit()";
                                                    ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Média</a>

                                                </form>

                                                <form action="{{ route('task.priority', $task->id) }}" method="post">
                                                    @csrf

                                                    <input type="hidden" name="priority" value="low">
                                                    <a class="dropdown-item primary"
                                                    href="{{ route('task.priority', $task->id) }}"
                                                    onclick="event.preventDefault();
                                                    this.closest('form').submit()";
                                                    ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg> Baixa</a>


                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="action-dropdown custom-dropdown-icon">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink-2">
                                                <a class="edit dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#edit-modal">Edit</a>
                                                <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input class="btn-submit" type="submit" value="Deletar">
                                                </form>
                                                <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn-submit" type="submit" value="Deletar">
                                                    </form>

                                                <a class="dropdown-item permanent-delete" href="javascript:void(0);">Permanent Delete</a>
                                                <a class="dropdown-item revive" href="javascript:void(0);">Revive Task</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            {{-- modal edit --}}
                            <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Nova Tarefa</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </button>
                                        </div>
                                        <form action="{{ route('task.update', $task->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for=""> Título </label>
                                                    <input type="text" name="title" class="form-control" value="{{ $task->title }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Descrição</label>
                                                    <textarea class="form-control" name="description"cols="30" rows="10">{{ $task->description }}</textarea>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Atualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach


                    </div>

                    <div class="modal fade" id="todoShowListItem" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="compose-box">
                                        <div class="compose-content">
                                            <h5 class="task-heading"></h5>
                                            <p class="task-text"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->


<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova Tarefa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <form action="{{ route('task.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for=""> Título </label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                        <textarea class="form-control" name="description"cols="30" rows="10"></textarea>

                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>



    </div>
</div>
@endsection

@push('component-scripts')
    <script src="{{ asset('assets/js/ie11fix/fn.fix-padStart.js') }}"></script>
    <script src="{{ asset('plugins/editors/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/js/apps/todoList.js') }}"></script>
@endpush

@push('component-css')

    <style>
        .btn-submit{
            color: #fff;
            background-color: transparent;
            border: none;
            border-radius: 5px;
            display: block;
            width: 100%;
            padding: 6px 17px;
            clear: both;
            font-weight: 500;
            color: #bfc9d4;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0;
            font-size: 13px;
        }

        .btn-submit:hover{
            color: #2196f3;
        }


    </style>

    <link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/editors/quill/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link href="{{ asset('assets/css/apps/todolist.css') }}" rel="stylesheet" type="text/css" />
@endpush

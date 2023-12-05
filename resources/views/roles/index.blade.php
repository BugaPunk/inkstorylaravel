@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-6"><h2 class="btn-lg">Modulo de Insercion de Rol</h2></div>
        <div class="col-md-6 text-end">
            <!-- Modal trigger button -->
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalId">
              Añadir
            </button>
            
            <!-- Modal Body -->
            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
            <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        {{-- <form action="{{ url('/categorias') }}" method="post" > --}}
                        <x-form :action="route('roles.store')" method="POST">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitleId">Insercion de Rol</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="mb-3">
                                  <label for="" class="form-label">Nombre del Rol</label>
                                  <input type="text"
                                    class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                                  <small id="helpId" class="form-text text-muted">Ingresa el nombre del rol.</small>
                                </div>
                                @foreach ($lista as $p)
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="{{$p->id}}" id="{{$p->id}}" name="permission[]">
                                      <label class="form-check-label" for="{{$p->id}}">
                                        {{ $p->name }}
                                      </label>
                                    </div>                                    
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </x-form>
                    </div>
                </div>
            </div>
            
            <!-- Optional: Place to the bottom of scripts -->
            <script>
                const myModal = new bootstrap.Modal(document.getElementById('modalId'));
            </script>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col" >ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Img</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

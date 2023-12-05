@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-6">
        <h1>Modulo de administracion de Usarios</h1>
    </div>
    <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>                                    
                @endforeach
            </ul>
        </div>
        
    @endif
        <!-- Modal trigger button -->
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalIns">
          Añadir
        </button>
        
        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div class="modal fade" id="modalIns" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                   
                    
                    <x-form action="{{route('user.store')}}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">Insercion de Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="mb-3">
                              <label for="" class="form-label">Nombre Usuario</label>
                              <input type="text"
                                class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" required>
                              <small id="helpId" class="form-text text-muted">Help text</small>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email"
                                  class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                              </div>

                              <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password"
                                  class="form-control" name="password" id="" aria-describedby="helpId" placeholder="" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                              </div>

                              <div class="mb-3">
                                <label for="" class="form-label">Confir Password</label>
                                <input type="password"
                                  class="form-control" name="conf-password" id="" aria-describedby="helpId" placeholder="" required>
                                <small id="helpId" class="form-text text-muted">Help text</small>
                              </div>

                              @foreach ($roles as $r)
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" value="{{$r}}" id="{{$r}}" name="roles[]">
                                    <label class="form-check-label" for="{{$r}}">
                                        {{$r}}
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
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
        
        </script>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>IMAGEN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
    
</div>
    
@endsection
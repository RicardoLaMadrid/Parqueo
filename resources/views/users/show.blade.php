@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')
<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header card-header-primary">
                      <div class="card-title">Usuarios</div>
                      <p class="card-category">Vista detallada del usuario...</p>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="card card-user">
                                  <div class="card-body">
                                      <div class="card-text">
                                          <div class="author">
                                              <a href="#">
                                                  <img src="" alt="image" class="avatar">
                                                  <h5 class="title mt-3"></h5>
                                              </a>
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
@endsection

@extends('layout/layouts')

@section('space-work')

<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-6">
    <h1>Players List</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Players List</li>
    </ol>
    </div>
</div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
    <div class="card">
        @if(Session::has('success'))
             <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ Session::get('success')}}</strong>
                  @php
                  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
                  header("Cache-Control: post-check=0, pre-check=0", false);
                  header("Pragma: no-cache");
                  @endphp

            </div>
         @endif

        <div class="card-header">
        <h3 class="card-title">Players List</h3>
        <div style="float:right">
        <a href="{{route('addPlayers')}}" class="btn btn-block btn-primary"
         style="float:right;">Add Players</a>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->roles == null)
                        User
                    @else

                    {{ $user->roles->name }}

                    @endif
                </td>
                <td>
                <button class="btn btn-dark p-2" >
                          <a href="{{route('editagent',[$user->id])}}" class="text-white" style=" color: #FFFFFF;"><i class="fa fa-edit" ></i>Edit</button></a>
                          <button class="btn  btn-dark p-2" >
                          <a href="javascript:void(0);" data-id="" class="text-white delete-cat" style=" color: #FFFFFF;"><i class="fa fa-trash-o"></i> Delete </button></a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection


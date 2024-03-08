@extends('layout/layouts')

@section('space-work')
<!-- Content Header (Page header) -->
<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-6">
    <h1>Manage Role</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active">Manage Role</li>
    </ol>
    </div>
</div>
</div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
        <div class="card-header">
        <h3 class="card-title">Manage Role</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <form action="{{ route('updateRole') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Select User</label>
                <select class="form-control select2" style="width: 100%;" name="user_id" required>
                <option value="">Select User</option>

                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" @if($user->id == old('user_id')) selected @endif>{{ $user->name }}</option>

                    @endforeach
                </select>
            </div>
            </div>
              <!-- /.col -->
            <div class="col-md-6">
            <div class="form-group">
                <label>Select Role</label>
                <select class="form-control select2" style="width: 100%;" name="role_id" required>
                <option value="">Select Role</option>
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @if($role->id == old('role_id')) selected @endif>{{ $role->name }}</option>
                    @endforeach
                    <option value="0" @if(old('role_id') == "0") selected @endif>User</option>
                </select>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit"  value="Update Role" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection

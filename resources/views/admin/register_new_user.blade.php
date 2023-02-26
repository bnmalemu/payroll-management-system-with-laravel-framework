@extends('layouts.admin.admin')
@section('content')
<!-- Main content -->
  <section class="content">
    <!-- Start add user -->
    <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add New User</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('register_new_user')}}" method="POST">
            @csrf
            <div class="modal-body">
              <!-- College Code -->
              <div class="form-group">
                <select name="c_code" class="form-control" style="border-radius: 50px;" required>
                  <option value="0" selected="true" disabled="true">--college--</option>
                  @foreach($colleges as $college)
                    <option value=" {{ $college->c_code }} "> {{ $college->c_name}} </option>
                   @endforeach
                </select>
              </div>
              <!-- Department -->
              <div class="form-group">
                <select name="d_code" class="form-control" style="border-radius: 50px;" required>
                  <option value="0" selected="true" disabled="true">--department--</option>
                  @foreach($departments as $department)
                    <option value=" {{ $department->d_code }} "> {{ $department->d_name}} </option>
                  @endforeach
                </select>
              </div>
              <!-- Name -->
              <div class="form-group">
                <input class="form-control" style="border-radius: 50px;" type="text" name="name" autocomplete="off"s placeholder="Full Name"/>
              </div>
              <!-- Email Address -->
              <div class="form-group">
                <input class="form-control" style="border-radius: 50px;" type="email" name="email" autocomplete="off" placeholder="Email Address"/>
              </div>
              <!-- Password -->
              <div class="form-group">
                <input id="password" class="form-control" style="border-radius: 50px;" type="password" name="password" autocomplete="off" placeholder="Password" autocomplete="new-password" />
              </div>
              <!-- Confirm Password -->
              <div class="form-group">
                <input id="password_confirmation" class="form-control" style="border-radius: 50px;" type="password" name="password_confirmation" autocomplete="off" placeholder="Confirm Password"/>
              </div>
              <div class="form-group">
                <select name="role_id" class="form-control" style="border-radius: 50px;">
                  <option value="0" selected="true" disabled="true"><i>--select user type--</i></option>
                  <option value="user"><i>Guest User</i></option>
                  <option value="pres"><i>University President</i></option>
                  <option value="vpres"><i>Academic President</i></option>
                  <option value="direc"><i>Academic Director</i></option>
                  <option value="regis"><i>Registrar Director</i></option>
                  <option value="dean"><i>College Dean</i></option>
                  <option value="cord"><i>College Coordinator</i></option>
                  <option value="fresh"><i>Freshman Coordinator</i></option>
                  <option value="head"><i>Head Department</i></option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">Close</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End of add user -->
    <!-- Start delete user -->
    <div class="modal fade" id="delete_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #4285F4;background-color:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Delete Department</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            <div class="modal-body" style="background-color: #34A853;">
              <!-- First Name -->
              <div class="form-control" style="border-radius: 50px;">
                <h8><center><i>Are you sure to delete?</i></center></h8>
              </div>
            </div>
            <div class="modal-footer" style="background-color: #A4C639;">
              <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">No</button>
              <button type="submit" class="form-control" style="width: 150px; border-radius: 50px; background-color: #34A853;">Yes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End delete user -->
    <div class="card-body col-12">
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 float-sm-right">
      <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639;" data-toggle="modal" data-target="#add_user"><i class="fas fa-plus-circle mr-2"></i><i>New User</i></button>
      </div>
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td><b><center><i>College</i></center></b></td>
            <td><b><center><i>Department</i></center></b></td>
            <td><b><center><i>Full Name</i></center></b></td>
            <td><b><center><i>User Name</i></center></b></td>
            <td><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
          @if(!empty($users) && $users->count())
            @foreach($users as $user)
              <tr>
                <td bgcolor="#A4C639"><i>{{$user->c_name}}</i></td>
                <td bgcolor="#A4C639"><i>{{$user->d_name}}</i></td>
                <td bgcolor="#A4C639"><i>{{$user->name}}</i></td>
                <td bgcolor="#A4C639"><i>{{$user->email}}</i></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="" class="trash_button" data-toggle="modal" data-target="#delete_user" style="border-radius: 80px; background-color: #4285F4;">Deactivate User</button>
                  </center>
                </td>
              </tr>
            @endforeach
          @endif
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </section>
  <!-- /.content -->
@endsection 
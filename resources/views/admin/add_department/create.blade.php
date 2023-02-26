@extends('layouts.admin.admin')
@section('content')
<!-- Main content -->
  <section class="content">
    <!-- Start add Department -->
    <div class="modal fade" id="add_dept" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add Department</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('admin.add_department.store')}}" method="POST">
            @csrf
            <div class="modal-body">
              <!-- College -->
              <div class="form-group">
                <select name="c_code" class="form-control" style="border-radius: 50px;">
                  <option value="0" selected="true" disabled="true">
                    Choose College
                  </option>
                  @foreach($colleges as $college)
                    <option value=" {{ $college->c_code }} "> {{ $college->c_name}} </option>
                  @endforeach
                </select>
              </div>
              <!-- Department Code -->
              <div class="form-group">
                <input class="form-control" style="border-radius: 50px;" type="text" name="dept_code" autocomplete="off" placeholder="Department Code" required />
              </div>
              <!-- Department Name -->
              <div class="form-group">
                <input class="form-control" style="border-radius: 50px;" type="text" name="dept_name" autocomplete="off" placeholder="Department Name" required />
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
    <!-- End of add Department -->
    <!-- Start delete Department -->
    <div class="modal fade" id="delete_dept" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
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
    <!-- Start delete Department -->
    <div class="card-body col-12">
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 float-sm-right">
      <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639;" data-toggle="modal" data-target="#add_dept"><i class="fas fa-plus-circle mr-2"></i><i>Department</i></button>
      </div>
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td width="100px"><b><center><i>College</i></center></b></td>
            <td width="100px"><b><center><i>Department</i></center></b></td>
            <td width="50px"><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
          @if(!empty($depts) && $depts->count())
            @foreach($depts as $dept)
              <tr>
                <td bgcolor="#A4C639"><i>{{$dept->c_name}}</i></td>
                <td bgcolor="#A4C639"><i>{{$dept->d_name}}</i></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="" class="trash_button" data-toggle="modal" data-target="#delete_dept" style="border-radius: 80px; background-color: #FBBC05;"><i class="fas fa-trash"></i></button>
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
@extends('layouts.admin.admin')
@section('content')
<!-- Main content -->
  <section class="content">
    <!-- Start add College -->
    <div class="modal fade" id="add_college" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add College</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('admin.add_college.store')}}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <input class="form-control" type="text" name="c_code" placeholder="College Code" style="border-radius: 50px;" autocomplete="off" required="Please Enter College Code" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="c_name" style="border-radius: 50px;" placeholder="College Name" required="Please Enter College Name" autocomplete="off" />
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
    <!-- End of add College -->
    <!-- Start delete College -->
    <div class="modal fade" id="delete_college" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #4285F4;background-color:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Delete College</i></h5>
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
    <!-- End delete College -->
    <div class="card-body col-12">
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 float-sm-right">
      <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639;" data-toggle="modal" data-target="#add_college"><i class="fas fa-plus-circle mr-2"></i><i>College</i></button>
      </div>
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td width="100px"><b><center><i>College</i></center></b></td>
            <td width="50px"><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
          @if(!empty($colleges) && $colleges->count())
            @foreach($colleges as $college)
              <tr>
                <td bgcolor="#A4C639"><i>{{$college->c_name}}</i></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="" class="trash_button" data-toggle="modal" data-target="#delete_college" style="border-radius: 80px; background-color: #FBBC05;"><i class="fas fa-trash"></i></button>
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
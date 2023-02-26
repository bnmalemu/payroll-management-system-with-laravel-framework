@extends('layouts.payroll.payroll')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Start add Charity -->
    <div class="modal fade" id="add_college" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add Charity</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('charity')}}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <input class="form-control" type="text" name="charity_year" style="border-radius: 50px;" placeholder="Charity Year" required autocomplete="off" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="charity_reason" style="border-radius: 50px;" placeholder="Charity Reason" required autocomplete="off" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="charity_code" placeholder="Charity Code" style="border-radius: 50px;" autocomplete="off" required />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="charity_amount" style="border-radius: 50px;" placeholder="Charity Percent" required autocomplete="off" />
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
    <!-- End of add Charity -->
    <!-- Start edit Charity -->
    <div class="modal fade" id="edit_charity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #4285F4;background-color:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Edit Charity</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <input class="form-control" type="text" id="charity_year" name="charity_year" style="border-radius: 50px;" placeholder="Charity Year" required autocomplete="off" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="charity_reason" name="charity_reason" style="border-radius: 50px;" placeholder="Charity Reason" required autocomplete="off" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="charity_code" name="charity_code" placeholder="Charity Code" style="border-radius: 50px;" autocomplete="off" required />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="charity_amount" name="charity_amount" style="border-radius: 50px;" placeholder="Charity Percent" required autocomplete="off" />
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
    <!-- End edit Charity -->
    <!-- Start delete Charity -->
    <div class="modal fade" id="delete_charity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #4285F4;background-color:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Delete Charity</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            <div class="modal-body" style="background-color: #34A853;">
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
    <!-- End delete Charity -->
    <div class="card-body col-12">
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 float-sm-right">
      <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639;" data-toggle="modal" data-target="#add_college"><i class="fas fa-plus-circle mr-2"></i><i>Charity</i></button>
      </div>
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td width="100px"><b><center><i>Charity Year</i></center></b></td>
            <td width="100px"><b><center><i>Charity Reason</i></center></b></td>
            <td width="100px"><b><center><i>Charity Code</i></center></b></td>
            <td width="100px"><b><center><i>Charity Percent</i></center></b></td>
            <td width="50px"><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
          @if(!empty($charities) && $charities->count())
            @foreach($charities as $charity)
              <tr>
                <td bgcolor="#A4C639"><center><i>{{$charity->charity_year}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$charity->charity_reason}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$charity->charity_code}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$charity->charity_amount}}</i></center></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="" class="edit_button" data-toggle="modal" data-target="#edit_charity" style="background-color: #4285F4;"><i class="fas fa-edit"></i></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" value="" class="trash_button" data-toggle="modal" data-target="#delete_charity" style="background-color: #FBBC05;"><i class="fas fa-trash"></i></button>
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
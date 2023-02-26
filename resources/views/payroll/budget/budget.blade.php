@extends('layouts.payroll.payroll')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Start add Budget -->
    <div class="modal fade" id="add_college" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #0F7DC2;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Add Budget</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{route('budget')}}" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <input class="form-control" type="text" name="budget_year" style="border-radius: 50px;" placeholder="Budget Year" required autocomplete="off" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="budget_code" placeholder="Budget Code" style="border-radius: 50px;" autocomplete="off" required />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" name="budget_amount" style="border-radius: 50px;" placeholder="Budget Amount" required autocomplete="off" />
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
    <!-- End of add Budget -->
    <!-- Start edit Budget -->
    <div class="modal fade" id="edit_budget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #4285F4;background-color:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Edit Budget</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="POST">
            @csrf
            <div class="modal-body">
              <div class="form-group">
                <input class="form-control" type="text" id="budget_year" name="budget_year" style="border-radius: 50px;" placeholder="Budget Year" required autocomplete="off" />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="budget_code" name="budget_code" placeholder="Budget Code" style="border-radius: 50px;" autocomplete="off" required />
              </div>
              <div class="form-group">
                <input class="form-control" type="text" id="budget_amount" name="budget_name" style="border-radius: 50px;" placeholder="Budget Amount" required autocomplete="off" />
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
    <!-- End edit Budget -->
    <!-- Start delete Budget -->
    <div class="modal fade" id="delete_budget" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #4285F4;background-color:50px;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Delete Budget</i></h5>
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
    <!-- End delete Budget -->
    <div class="card-body col-12">
      <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 float-sm-right">
        <button type="button" class="form-control" style="border-radius: 50px; background-color: #A4C639;" data-toggle="modal" data-target="#add_college"><i class="fas fa-plus-circle mr-2"></i><i>Add Budget</i></button>
      </div>
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <td width="100px"><b><center><i>Budget Year</i></center></b></td>
            <td width="100px"><b><center><i>Budget Code</i></center></b></td>
            <td width="100px"><b><center><i>Budget Amount</i></center></b></td>
            <td width="50px"><b><center><i>Action</i></center></b></td>
          </tr>
        </thead>
        <tbody>
          @if(!empty($budgets) && $budgets->count())
            @foreach($budgets as $budget)
              <tr>
                <td bgcolor="#A4C639"><center><i>{{$budget->budget_year}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$budget->budget_code}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$budget->budget_amount}}</i></center></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="{{$budget->id}}" class="edit_button" data-toggle="modal" data-target="#edit_budget" style="background-color: #4285F4;"><i class="fas fa-edit"></i></button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" value="{{$budget->id}}" class="delete_button" data-toggle="modal" data-target="#delete_budget" style="background-color: #FBBC05;"><i class="fas fa-trash"></i></button>
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

@section('scripts')
  <script>
    $(document).ready(function()
    {
      $(document).on('click', '.edit_button', function()
      {
        var budget_id = $(this).val();
        //alert(budget_id);
        $('#edit_budget').modal('show');

        $.ajax({
          type: 'GET',
          url: 'edit/'+budget_id,
          dataType: 'json',
          success: function(response)
          {
        /*    $('#academic_year').val(response.student.stud_acad_yrs);
            $('#semester').val(response.student.stud_semester);
            $('#degrees').val(response.student.stud_deg_code);
            $('#edit_id').val(response.student.id); */
          }
        }); 
      });
    });
  </script>
  <script>
    $(document).ready(function()
    {
      $(document).on('click', '.delete_button', function()
      {
        var budget_id = $(this).val();
        //alert(budget_id);
        $('#delete_budget').modal('show');

        $.ajax({
          type: 'GET',
          url: 'destroy/'+budget_id,
          dataType: 'json',
          success: function(response)
          {
            $('#delete_id').val(response.student.id);
          }
        });
      });
    });
  </script>
@endsection
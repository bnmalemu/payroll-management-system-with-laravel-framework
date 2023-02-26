@extends('layouts.payroll.payroll')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Start detail Payroll -->
    <div class="modal fade" id="info_payroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #55ACEE;">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"><i>Details of Individual Payroll</i></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <h8><b><i>Payment Month</i></b></h8>
              <input type="text" id="month_emp" name="month_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Employee ID</i></b></h8>
              <input type="text" id="id_emp" name="id_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Employee First Name</i></b></h8>
              <input type="text" id="f_na_emp" name="f_na_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Employee Middle Name</i></b></h8>
              <input type="text" id="m_na_emp" name="m_na_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Employee Last Name</i></b></h8>
              <input type="text" id="l_na_emp" name="l_na_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Employee Account Number</i></b></h8>
              <input type="text" id="a_no_emp" name="a_no_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Employee Basic Salary</i></b></h8>
              <input type="text" id="b_sa_emp" name="b_sa_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Annualized Payment</i></b></h8>
              <input type="text" id="an_sa_emp" name="an_sa_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly">
            </div>
            <div class="form-group">
              <h8><b><i>Position Payment</i></b></h8>
              <input type="text" id="pos_sa_emp" name="pos_sa_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>House Payment</i></b></h8>
              <input type="text" id="hou_sa_emp" name="hou_sa_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Pocket Money</i></b></h8>
              <input type="text" id="poc_sa_emp" name="poc_sa_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Mobile Card Payment</i></b></h8>
              <input type="text" id="mob_card" name="mob_card" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Transport Payment</i></b></h8>
              <input type="text" id="tran_sala" name="tran_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Muya Payment</i></b></h8>
              <input type="text" id="muya_sala" name="muya_sala" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Non Tax Payment</i></b></h8>
              <input type="text" id="non_tax_sa" name="non_tax_sa" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Total Payment</i></b></h8>
              <input type="text" id="pay_emp" name="pay_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Total Credit</i></b></h8>
              <input type="text" id="cred_emp" name="cred_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Work Tax Payment</i></b></h8>
              <input type="text" id="tax_emp" name="tax_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Pension Payment</i></b></h8>
              <input type="text" id="pension_emp" name="pension_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Teacher Association Payment</i></b></h8>
              <input type="text" id="assoc_emp" name="assoc_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Mana Murti Payment</i></b></h8>
              <input type="text" id="m_murti_sa" name="m_murti_sa" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Kitat Payment</i></b></h8>
              <input type="text" id="kitat_sa" name="kitat_sa" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Help Payment</i></b></h8>
              <input type="text" id="help_sa" name="help_sa" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>PP Deb Payment</i></b></h8>
              <input type="text" id="pp_deb_sa" name="pp_deb_sa" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>PP Oro Payment</i></b></h8>
              <input type="text" id="pp_oro_sa" name="pp_oro_sa" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Total Debit</i></b></h8>
              <input type="text" id="debit_emp" name="debit_emp" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
            <div class="form-group">
              <h8><b><i>Credit Payment</i></b></h8>
              <input type="text" id="credit" name="credit" class="form-control" autocomplete="off" style="border-radius: 50px;" readonly="readonly" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="form-control" style="width: 150px; border-radius: 50px; background-color: #EA4335;" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End detail Payroll -->
    <div class="card-body col-12">
      <table id="bini" class="table table-bordered table-hover">
        <thead>
          <tr bgcolor="#4285F4">
            <th><center>Month</center></th>
            <th><center>First Name</center></th>
            <th><center>Second Name</center></th>
            <th><center>Last Name</center></th>
            <th><center>Account Number</center></th> 
            <th><center>Total Credit</center></th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
           @if(!empty($mains) && $mains->count())
            @foreach($mains as $main)
              <tr>
                <td bgcolor="#34A853"><center><i>{{$main->month}}</i></center></td>
                <td bgcolor="#34A853"><center><i>{{$main->f_name}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$main->m_name}}</i></center></td>
                <td bgcolor="#34A853"><center><i>{{$main->l_name}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$main->acc_no}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$main->emp_credit}}</i></center></td>
                <td bgcolor="#A4C639">
                  <center>
                    <button type="button" value="{{$main->id}}" class="info_button fas fa-info-circle" style="border-radius: 50px; background-color: #4285F4;"></button>
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
      $(document).on('click', '.info_button', function()
      {
        var pay_id = $(this).val();
        //alert(pay_id);
        $('#info_payroll').modal('show');
        $.ajax({
          type: 'GET',
          url: 'info_payment/'+pay_id,
          dataType: 'json',
          success: function(response)
          {
            $('#month_emp').val(response.main.month);
            $('#id_emp').val(response.main.id_no);
            $('#f_na_emp').val(response.main.f_name);
            $('#m_na_emp').val(response.main.m_name);
            $('#l_na_emp').val(response.main.l_name);
            $('#a_no_emp').val(response.main.acc_no);
            $('#b_sa_emp').val(response.main.b_sala);
            $('#an_sa_emp').val(response.main.an_sala);
            $('#pos_sa_emp').val(response.main.pos_sala);
            $('#hou_sa_emp').val(response.main.hou_sala);
            $('#poc_sa_emp').val(response.main.poc_sala);
            $('#mob_card').val(response.main.mob_card);
            $('#tran_sala').val(response.main.transp);
            $('#muya_sala').val(response.main.muy_sala);
            $('#non_tax_sa').val(response.main.non_tax);
            $('#pay_emp').val(response.main.tot_pay);
            $('#cred_emp').val(response.main.tot_cred);
            $('#tax_emp').val(response.main.work_tax);
            $('#pension_emp').val(response.main.pension);
            $('#assoc_emp').val(response.main.tea_asso);
            $('#m_murti_sa').val(response.main.ma_murti);
            $('#kitat_sa').val(response.main.kitat);
            $('#help_sa').val(response.main.help);
            $('#pp_deb_sa').val(response.main.pp_deb);
            $('#pp_oro_sa').val(response.main.pp_oro);
            $('#debit_emp').val(response.main.tot_debit);
            $('#credit').val(response.main.emp_credit);
          }
        }); 
      }); 
    });
 
  </script>
@endsection
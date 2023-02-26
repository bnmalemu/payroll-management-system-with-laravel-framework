@extends('layouts.payroll.payroll')
@section('content')
  <!-- Main content -->
  <section class="content">
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
          </tr>
        </thead>
        <tbody>
          @if(!empty($payments) && $payments->count())
            @foreach($payments as $payment)
              <tr>
                <td bgcolor="#34A853"><center><i>{{$payment->month}}</i></center></td>
                <td bgcolor="#34A853"><center><i>{{$payment->f_name}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$payment->m_name}}</i></center></td>
                <td bgcolor="#34A853"><center><i>{{$payment->l_name}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$payment->acc_no}}</i></center></td>
                <td bgcolor="#A4C639"><center><i>{{$payment->emp_credit}}</i></center></td>
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
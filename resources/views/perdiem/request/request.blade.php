@extends('layouts.perdiem.perdiem')
@section('content')
  <!-- Main content -->
  <section class="content">
    <!-- Horizontal Form -->
    <div class="card card-info">
      <div class="card-header">
        <center>
          <h3 class="card-title">ቡሌ ሆራዩኒቨርሲቲ</h3><img src="{{ asset('public/dist/img/bhulogo.png') }}" alt="BHU Logo" class="brand-image img-circle elevation-3" style="opacity: 1.0"><h3 class="card-title float-right">Bule-Hora University</h3>
        </center>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal">
      @csrf
        <div class="card-body">
          <h8><u><b><center>TRAVEL REQUEST and AUTHORIZATION FORM     የጉዞ መጠየቂያና መፍቀጃ ፎርም</center></b></u></h8>
          <br>
          <ol type="1">
            <li>Name / ስም &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"> &nbsp;&nbsp;Signature / ፊርማ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salary/ደመወዝ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Directorate/College/school/Department/Office የዳይሬክቶሬት/ኮሌጅ/ትምህርት ቤት/ክፍል/ቢሮ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Program/ ፕሮግራም &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Per-diem rate per day birr(When applicable) የውሎ አበል መጠን በየቀን ብር (ሲፈፀም) &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Description of the purpose: -Please provide  a detailed description of the purpose travel by Indicating task you located to accomplish. /ስሇ ዓላማው መግሇጫ -እባክዎ ሇማከናወን ያገኛችኹትን ስራ በመጠቆም ስሇ አላማ ጉዞ ዝርዝር መግሇጫ ያቅርቡ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Departure/ መነሻ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Destination/ መድረሻ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Means of Travel /የትራንስፖር ሁኔታ</li> 
            <input type="radio" id="C" name="C" value="C"/> 
            <label>Air /በአየር</label>
            <input type="radio" id="C" name="C" value="C"/> 
            <label>BHU Vehicle/ በቡሆዩመኪና</label>
            <input type="radio" id="C" name="C" value="C"/> 
            <label>Bus በህዝብ ማመላሇሻ</label>
            <li>ሠራተኛው ከጉዞ የሚቆዩበት ጊዜ ከ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; እስከ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ለ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off">&nbsp;&nbsp; ቀን</li>
            <li>Advanced payment (see details on the attached travel plan)/የቅድመ ክፍያ (የተያያዘውን የጉዞ ዕቅድ ዝርዝር ይመልከቱ)</li> 
            <ol>
              <li>Per-diem Payment birr/ የቀን ውሎ አበል &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
              <li>Fuel / travel Ticket /ነዳጅ/ የጉዞ ደረሰኝ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
              <li>Incidental/መጠባበቂያ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
              <li>Total pay Birr/ ጠቅላላ ተከፋይ (1+2+3) &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
              <li>Accountant name and sig. ያዘጋጀው የሂሳብ ባሇሙያ ስም እና ፊርማ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            </ol>
            <h5>Travel Authorized By/የጉዞ ፈቃድ</h5>
            <li>President/Vise presi./Director /Dean/ Office (ፕሬዝዳንት/ም/ፕሬዝዳንትዳይሬክተር/ዲን/ቢሮ) Name / ስም &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"> &nbsp;&nbsp;Signature / ፊርማ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Budget Clearance (Code) በጀት ክሊራንስ (ኮድ) &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>Authorized / የፈቀደ ስም&nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"> &nbsp;&nbsp;Authorized / የፈቀደ Signature / ፊርማ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
            <li>The above total advance payment in birr / ከላይ የተቀመጠው ጠቅላላ ቅድመ ክፍያ ብር (<input type="text" style="border-radius: 15px; width: 80px;" autocomplete="off">)  &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"> is approved / ተቀባይነት አግኝቷል።</li>
            <h5><u>FINAL APPROVAL/የመጨረሻው ተቀባይነት</u></h5>
            <li>Finance officer/ የፋይናንስ ሀላፊ Name / ስም &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"> &nbsp;&nbsp;Signature / ፊርማ &nbsp;&nbsp;<input type="text" style="border-radius: 50px;" autocomplete="off"></li>
          </ol>
          <p><b>Noted</b>:- The trip authorizing person must make sure that the assigned driver has accounted for any preceding expenses before signing. ፈቃድ የተሰጠው ሰው ጉዞ ከፊርማው በፊት የተመደበው አሽከርካሪ ቀደም ሲል ሇማንኛውም ወጪ ያካሄደ መሆኑን ማረጋገጥ አሇበት።</p>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <center>
            <div>In replaying, please quote our Ref. No.</div>
            <div>መልስ ሲጽፉ የእኛን ቁጥር ይጥቀሱ</div>
            <div>Tell- 046 443 0135   Fax- 046 443 0355</div>
            <div>Post- 144</div>
          </center>
          <button type="submit" class="btn btn-info float-right">Send Request</button>   
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </section>
  <!-- /.content -->
@endsection
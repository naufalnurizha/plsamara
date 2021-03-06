<!DOCTYPE html>
<html>
<head>
<title>Posyandu Lansia Samara</title>
<link href="{{asset('/user/css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{asset('/user/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
<link href="{{asset('/user/fontawesome/css/all.css/')}}" rel="stylesheet" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="{{('/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Millor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<script src="{{asset('/user/js/jquery.min.js')}}"> </script>
<!--start-smoth-scrolling-->
		<script type="text/javascript" src="{{asset('/user/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('/user/js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
<!--header-->
<div class="banner">
	 <div class="container">
		 <div class="banner-top">		  
				<div class="logo">
				</div>
                <div class="top-menu">
                    <span class="menu"> </span> 
                    <ul>
                        <li><a class="hvr-shutter-out-horizontal" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form></li>                     
                     </ul>               
                 </div>
				<div class="clearfix"> </div>	 
				 		 		 <!-- script-for-menu -->
		 <script>
				$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
				});
		 </script>
		 <!-- script-for-menu -->	 
		 </div>	
		 <div  class="banner-bottom">
		 	<div class="col-md-6 banner-left">
		 		<h1><font color="#bdecb6">POSYANDU</font></h1>
                <h1><font color="#bdecb6">LANSIA</font></h1>
                <h1><font color="#bdecb6">SAMARA</font></h1>
                <h5><font color="#bdecb6">Jalan Saikin, RW 08 Pondok Pinang</font></h5>
		 	</div>
		 	<div class="col-md-6 banner-right">
		 		<div class="app-img">
		 			<img src="{{asset('/images/icon/LogoSkripsiOpay2.png')}}" class="img-responsive" alt=""/>
		 		</div>
		 	</div>
		 	<div class="clearfix"> </div>
		 </div>
	</div>
</div>

<div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Info</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Batas Normal Kesehatan</h3>
        </div>
        <div class="modal-body">
          <h4>Tensi Darah < 150/90mmHg</h4>
          <br>
          <h4>Nadi 60-70x / detik</h4>
          <br>
          <h4>Gula sesaat < 140mg/dL</h4>
          <br>
          <h4>Gula puasa < 100-130mg/dL</h4>
          <br>
          <h4>Kolesterol sesaat dan Kolesterol puasa < 200mg/dL (total), < 100mg/dL (LDL), > 50mg/dL (HDL)</h4>
          <br>
          <h4>Asam urat 2 - 8,5mg/dL (pria), 2-8mg/dL (wanita)</h4>
          <br>
          <h4>*dL = desiliter</h4>
          <h4>*LDL = kolesterol jahat</h4>
          <h4>*HDL = kolesterol baik</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="table-responsive m-b-40">
    <table id="multi-filter-select" class="display table table-striped table-hover table-borderless table-data3"  cellspacing="0" width="100%">
        <thead class="thead-dark">
            <tr>
                <th>Tanggal Pemeriksaan</th>
                <th>Tinggi Badan (cm)</th>
                <th>Berat Badan (kg)</th>
                <th>Sistolik (mmHg)</th>
                <th>Diastolik (mmHg)</th>
                <th>Nadi (detik)</th>
                <th>Gula Sesaat (mg/dL)</th>
                <th>Gula Puasa (mg/dL)</th>
                <th>Kolesterol Sesaat (mg/dL)</th>
                <th>Kolesterol Puasa (mg/dL)</th>
                <th>Asam Urat (mg/dL)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $datum)
            <tr>
                <td><center>{{tgl_indo($datum->created_at)}}</center></td>
                <td><center>{{$datum->tinggi_badan}}</center></td>
                <td><center>{{$datum->berat_badan}}</center></td>
                <td><center>{{$datum->sistolik}}</center></td>
                <td><center>{{$datum->diastolik}}</center></td>
                <td><center>{{$datum->nadi}}</center></td>
                <td><center>{{$datum->gula_sesaat}}</center></td>
                <td><center>{{$datum->gula_puasa}}</center></td>
                <td><center>{{$datum->kolesterol_sesaat}}</center></td>
                <td><center>{{$datum->kolesterol_puasa}}</center></td>
                <td><center>{{$datum->asam_urat}}</center></td>
                <!-- <td>{{date_diff(date_create($datum->lansia->tgllahir),\Carbon\Carbon::now())->format('%y tahun, %m bulan')}}</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="text-center">
  <div class="row">
    <div class="col-sm-6">
        <div class="sejajar">
        <i class="fas fa-home fa-7x"> </i>
                <div class="text-center jarak">
                <a class="button curl-bottom-right" href="{{route('homelansia')}}">Home</a>
            </div>
        </div>
    </div>
    <div class="spasi"> <br/> </div>
    <div class="col-sm">
      <div class="sejajar">
        <i class="fas fa-users fa-7x "></i>
                <div class="text-center jarak">
                <a class="button curl-bottom-right" href="{{route('datapribadilansia')}}">Data Pribadi</a>
            </div>
        </div>  
    </div>
    </div>
</div>
<div class="copyrights">
	<div class="container"> 
		<p>Copyrights &copy; 2019 Posyandu Lansia Samara </p>
		
<div class="clearfix"> </div>
	</div>
</div>
 <script type="text/javascript" charset ="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <?php  
function tgl_indo($tanggal){
    $tanggal = date_format($tanggal, "Y-m-d");
$bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tahun
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tanggal
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<script>
        $('#multi-filter-select').DataTable( {
         "pageLength": 5,
         initComplete: function () {
          this.api().columns().every( function () {
           var column = this;
           var select = $('')
           .appendTo( $(column.footer()).empty() )
           .on( 'change', function () {
            var val = $.fn.dataTable.util.escapeRegex(
             $(this).val()
             );

            column
            .search( val ? '^'+val+'$' : '', true, false )
            .draw();
           } );

           column.data().unique().sort().each( function ( d, j ) {
            select.append( ''+d+'' )
           } );
          } );
         }
        });
    </script>

</body>
</html>
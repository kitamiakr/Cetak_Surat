<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" />
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistem Informasi Surat UIN Sunan Kalijaga</title>
        
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
        <link href="http://static.uin-suka.ac.id/images/favicon.png" type="image/x-icon" rel="shortcut icon">
		<link href="http://surat.uin-suka.ac.id/asset/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/style_global.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/style_layout.css" rel="stylesheet" type="text/css"/>
		<link href="http://surat.uin-suka.ac.id/asset/css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css"/>
		<link href="http://surat.uin-suka.ac.id/asset/css/tnde.css" rel="stylesheet" type="text/css"/>
		<link href="http://surat.uin-suka.ac.id/asset/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css"/>
		<link type="text/css" href="http://surat.uin-suka.ac.id/asset/css/ui.multiselect.css" rel="stylesheet" />
		<link href="http://static.uin-suka.ac.id/css/docs.css" rel="stylesheet" type="text/css"/>
		<link href="http://static.uin-suka.ac.id/css/breadcrumb.css" rel="stylesheet" type="text/css"/>
		<script src="http://surat.uin-suka.ac.id/asset/js/jquery-1.7.2.min.js"></script>
		<!-- jQuery UI -->
		<script src="http://surat.uin-suka.ac.id/asset/js/jquery-ui-1.8.21.custom.min.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="http://surat.uin-suka.ac.id/asset/js/jquery-1.9.1.min.js"%3E%3C/script%3E'))</script>
		
		<!-- multiselect -->
		<script type="text/javascript" src="http://surat.uin-suka.ac.id/asset/js/localisation/jquery.localisation-min.js"></script>
		<script type="text/javascript" src="http://surat.uin-suka.ac.id/asset/js/scrollTo/jquery.scrollTo-min.js"></script>
		<script type="text/javascript" src="http://surat.uin-suka.ac.id/asset/js/ui.multiselect.js"></script>
	
		<script type="text/javascript" src="http://surat.uin-suka.ac.id/asset/js/bootstrap-timepicker.js"></script>
		<script src="http://surat.uin-suka.ac.id/asset/js/bootstrap-transition.js"></script>
		<script src="http://surat.uin-suka.ac.id/asset/js/bootstrap-modal.js"></script>
		<script src="http://surat.uin-suka.ac.id/asset/js/nod.min.js"></script>
		
		<script type="text/javascript" src="http://surat.uin-suka.ac.id/asset/js/jquery.multirotation-1.0.js"></script>

		<style type="text/css">
			.ui-autocomplete{
				max-height: 180px;
				max-width: 440px;
				overflow: auto;
			}
		</style>
		<script type="text/javascript">
			$(function() {
				$( ".datepicker" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: "dd/mm/yy",
					showOn: "button",
					buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
					buttonImageOnly: true
				});
				$( ".datepicker_max" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: "dd/mm/yy",
					maxDate: "+0D",
					showOn: "button",
					buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
					buttonImageOnly: true
				});	
				$( ".datepicker_min" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: "dd/mm/yy",
					minDate: new Date(2014, 01 - 1, 01),
					maxDate: "+0D",
					showOn: "button",
					buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
					buttonImageOnly: true
				});
				$( ".datepicker_sk" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: "dd/mm/yy",
					minDate: new Date(2014, 01 - 1, 10),
					maxDate: "+0D",
					showOn: "button",
					buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
					buttonImageOnly: true
				});
				$('#jam_mulai').timepicker({showMeridian: false, minuteStep: 1});
				$('#jam_selesai').timepicker({showMeridian: false, minuteStep: 1});
			});
		</script>	
		<script type="text/javascript">
			function get_datepicker(){
				$( ".multiple_datepicker" ).datepicker({
					changeMonth: true,
					changeYear: true,
					dateFormat: "dd/mm/yy",
					showOn: "button",
					buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
					buttonImageOnly: true
				});
			}
		</script>
		<script type="text/javascript">
			function get_ckeditor(){
				var config =
					{
						height: 100,
						width: 188,
						fullPage: true,
						allowedContent: true,
						toolbar: []
					};
				$('.multiple_ckeditor').ckeditor(config);
				var config2 =
					{
						height: 100,
						width: 140,
						fullPage: true,
						allowedContent: true,
						toolbar: []
					};
				$('.multiple_ckeditor2').ckeditor(config2);
				var config3 =
					{
						height: 100,
						width: 152,
						fullPage: true,
						allowedContent: true,
						toolbar: []
					};
				$('.multiple_ckeditor3').ckeditor(config3);
			}
		</script>
		<script type="text/javascript">
                           $(function() {
                                    $( ".datepicker_mulai" ).datepicker({
                                            changeMonth: true,
                                            changeYear: true,
                                            dateFormat: "dd/mm/yy",
                                            showOn: "button",
											beforeShow: cekTanggal,
                                            buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
                                            buttonImageOnly: true
                                    });
                                    $( ".datepicker_selesai" ).datepicker({
                                            changeMonth: true,
                                            changeYear: true,
                                            dateFormat: "dd/mm/yy",
                                            showOn: "button",
                                            beforeShow: cekTanggal,
                                            buttonImage: "http://surat.uin-suka.ac.id/asset/img/calendar-icon.gif",
                                            buttonImageOnly: true
                                    });
                            });
                           
                            function cekTanggal(input) {
                                    var dateMin = '0';
                                    var dateMax = null;
                                    var fromDate = $(".datepicker_mulai").datepicker('getDate');
                                    var toDate = $(".datepicker_selesai").datepicker('getDate');
     
                                    if (input.id === "datepicker_selesai") {
                                            if ($(".datepicker_mulai").datepicker("getDate") != null) {
                                                    dateMin = $(".datepicker_mulai").datepicker("getDate");
                                            }
                                    }
                                   
                                    if (input.id === "datepicker_mulai") {
                                            if ($(".datepicker_selesai").datepicker("getDate") != null) {
                                                    dateMax = $(".datepicker_selesai").datepicker("getDate");
                                            }
                                    }
                                    return {
                                            minDate: dateMin,
                                            maxDate: dateMax
                                    };
                            }
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				// Support for AJAX loaded modal window.
				// Focuses on first input textbox after it loads the window.
				$('[data-toggle="modal-detail"]').click(function(e) {
					e.preventDefault();
					var url = $(this).attr('href');
					if (url.indexOf('#') == 0) {
						$(url).modal('open');
					}else{
						$.get(url, function(data) {
							$('<div class="modal mdokumen hide fade">' + data + '</div>').modal();
						}).success(function() { $('input:text:visible:first').focus(); });
					}
				});
			});
		</script>
		<script language="javascript" type="text/javascript">
			function opendok(url) {
				newwindow=window.open(url,'name','fullscreen=yes');
				if (window.focus) {newwindow.focus()}
				return false;
			}
		</script>
		<script type="text/javascript">
		  function plus(id) {
			$(id).rotate({ angle: 90 });
			get(id);
			return false;
		  }
		 
		  function minus(id) {
			$(id).rotate({ angle: 90, direction: false });
			get(id);
			return false;
		  }
		 
		  function reset(id) {
			$(id).clearRotation();
			get(id);
			return false;
		  }
		 
		</script>
    </head>
    <body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-41754364-2', 'auto');
	  ga('send', 'pageview');

	</script>
	<div class="app_header-top"></div>
	<div class="app_main">
		<div class="app_header">
			<div class="center">
				<div class="app_uin_id">
					<a href="http://surat.uin-suka.ac.id/" ></a>
				</div>
				<div class="app_header_right">
					<div class="app_system_id">Sistem Informasi Surat</div>
					<div class="app_univ_id">UIN Sunan Kalijaga</div>
				</div>
			<div class="clear"></div>
			</div>
		</div>
		<div id="app_content">	<div class="app-row">
		<div class="col-med-3">
			<div id="sidebar-sia">
								<nav class="accordion">
					<ol>
						<li>
							<div class="sia-profile" style="margin-bottom:10px;width:223px">
								<img class="sia-profile-image" alt="" src="http://static.uin-suka.ac.id/foto/mhs/990/c529431279430136561188462484476703618179549179391394171612703212567734612391395701634466734617705495537736111398395.jpg">
								<h2>DIDIK EKO PRAMONO</h2>
								<br>
								<p style="text-align:center; font-weight:bold;">15650051</p>
							</div>
							<div id="separate"></div>
						</li>
							<li>
								<a class="item full" href="http://surat.uin-suka.ac.id/mhs/surat_masuk/index">
									<span>
										Surat Masuk
																				<span>
											<div class="underline-menu"></div>
										</span>
									</span>
								</a>
															</li>
							<li>
								<a class="item full" href="http://surat.uin-suka.ac.id/mhs/surat_keluar/home">
									<span>
										Surat Keluar
										<span>
											<div class="underline-menu"></div>
										</span>
									</span>
								</a>
															</li>

							<li>
								<a class="item full" href="<?php site_url(); ?>cetak_surat">
									<span>
										Cetak Surat
										<span>
											<div class="underline-menu"></div>
										</span>
									</span>
								</a>

									<ol class="" style="display: block;">
										<li class="submenu">
											<a href="<?php base_url(); ?>masih_kul.php">
												<?php echo $submenu1; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>tdk_men_bea.php">
												<?php echo $submenu2; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>kel_baik.php">
												<?php echo $submenu3; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>bbs_teori.php">
												<?php echo $submenu4; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>telah_ujian_TA.php">
												<?php echo $submenu5; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ket_lulus.php">
												<?php echo $submenu6; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>pndh_studi.php">
												<?php echo $submenu7; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ket_review.php">
												<?php echo $submenu8; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ijin_pen.php">
												<?php echo $submenu9; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ijin_studi_pen.php">
												<?php echo $submenu10; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ijin_val_ins.php">
												<?php echo $submenu11; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ijin_obs.php">
												<?php echo $submenu12; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>ijin_wawancara.php">
												<?php echo $submenu13; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>perm_KP.php">
												<?php echo $submenu14; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>perm_bea.php">
												<?php echo $submenu15; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>perm_disp.php">
												<?php echo $submenu16; ?>
										</li>
										<li class="submenu">
											<a href="<?php base_url(); ?>perm_data.php">
												<?php echo $submenu17; ?>
										</li>
									</ol>					

															</li>


												<li>
							<a class="item full" href="http://surat.uin-suka.ac.id/logout">
								<span>Logout</span>
								<div class="underline-menu"></div>
							</a>
						</li>
					</ol>
				</nav>

			</div>
		</div>
	</div><div class="col-med-9">
	<div class="content-space">
		<ul id="crumbs">
			<li>
				<a title="Halaman Utama" href="#"><?php echo $title1; ?></a>
			</li>
			<li>
				<a title="Halaman Utama" href="#"><?php echo $submenu1; ?></a>
			</li>
		</ul><br/>
		Daftar Document Mahasiswa
<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>Surat</th>
					<th>
						
						Aksi
					</th>				
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Surat Keterangan Kuliah</td>
					<td><button type="button" class="btn btn-default">Write</button></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Surat Ganti KTM</td>
					<td><button type="button" class="btn btn-default">Write</button></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Surat Munaqosah</td>
					<td><button type="button" class="btn btn-default">Write</button></td>
				</tr>
			</tbody>
		</table>
		
		
	</div>


</div>	</div> <!-- div for content -->	
</div>

			<div class="clear5"></div>
			<div class="footer-underline">
				<div class="center">
					<div class="app-row">
						<div class="col-med-3">
							<a href="http://www.uin-suka.ac.id" target="_blank"><img src="http://static.uin-suka.ac.id/images/logo-white.png" width="210" height="44"/></a>
						</div>
						<div class="col-med-3">
							<div style="float:left" class="alamat">
								Jl. Marsda Adisucipto Yogyakarta 55281<br>
								 Telp. +62-274-512474, +62-274-589621<br>
								 Fax. +62-274-586117 <br>
								 Email. humas@uin-suka.ac.id
							</div>
						</div>
						<div class="col-med-3">
							<div class="sitemap" >
								<a href="">Peta Situs</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">Privasi & Kebijakan</a>
							</div>
						</div>
						<div class="col-med-3">	
							<div class="social-media">
								<a style="margin-left:6px; display:inline;" title="Google Plus"  href="http://gplus.to/uinsk" target="_blank"><img src="http://static.uin-suka.ac.id/images/icons/gplus.png" width="30" height="30"/></a>
								<a style="margin-left:7px; display:inline;" title="Facebook"  href="https://www.facebook.com/UINSK" target="_blank"><img src="http://static.uin-suka.ac.id/images/icons/facebook.png" width="30" height="30"/></a>
								<a style="margin-left:6px; display:inline;" title="Twitter" href="https://twitter.com/uinsk" target="_blank"><img src="http://static.uin-suka.ac.id/images/icons/twitter.png" width="30" height="30"/></a>
								<a style="margin-left:6px; display:inline;" title="Youtube" href="http://www.youtube.com/user/UINSK" target="_blank"><img src="http://static.uin-suka.ac.id/images/icons/youtube.png" width="30" height="30"/></a>
								<a style="margin-left:6px; display:inline;" title="Instagram" href="http://www.instagram.com/uinsk" target="_blank"><img src="http://static.uin-suka.ac.id/images/icons/instagram.png" width="30" height="30"/></a>
								<a style="margin-left:6px; display:inline;" title="Foursquare" href="http://foursquare.com/uinsk" target="_blank"><img src="http://static.uin-suka.ac.id/images/icons/foursquare.png" width="30" height="30"/></a>
							</div>
						</div>
					</div>	
					<div class="clear20"></div>
					<div class="app-row">
						<div class="col-med-3">
							<div class="suka-links">
								<span>SUKAnet</span>
								<ul>
									<li><a href="http://auth.uin-suka.ac.id" target="_blank">Internet (Intranet)</a></li>
									<li><a href="http://akun.uin-suka.ac.id" target="_blank">Akun (Intranet)</a></li>
									<li><a href="http://password.uin-suka.ac.id" target="_blank">Password</a></li>
									<li><a href="http://it.uin-suka.ac.id/internet" target="_blank">Internet Eksternal</a></li>
								</ul>
							</div>
							<div class="suka-links">
								<span>SUKAmail</span>
								<ul>
									<li style="text-align: justify;"><a href="http://mail.uin-suka.ac.id" target="_blank">E-Mail</a></li>
									<li style="text-align: justify;"><a href="http://akun.uin-suka.ac.id" target="_blank">Cek Akun E-mail</a></li>
								</ul>			
							</div>	
							<div class="suka-links">
								<span>SUKAphone</span>
								<ul>
									<li style="text-align: justify;"><a href="http://phone.uin-suka.ac.id" target="_blank">IP Telephony</a></li>
								</ul>			
							</div>
						</div>
						<div class="col-med-3">
							<div class="suka-links">
								<span>SUKAdministrativa</span>
								<ul>
									<li style="text-align: justify;">
										<a href="http://surat.uin-suka.ac.id" target="_blank">Persuratan</a></li>
									<li style="text-align: justify;">
										<a href="http://aset.uin-suka.ac.id" target="_blank">Aset dan Ruangan</a></li>
									<li style="text-align: justify;">
										<a href="http://pegawai.uin-suka.ac.id" target="_blank">Kepegawaian</a></li>
									<li style="text-align: justify;">
										<a href="http://uang.uin-suka.ac.id" target="_blank">Keuangan</a></li>
									<li style="text-align: justify;">
										<a href="http://rencana.uin-suka.ac.id" target="_blank">Perencanaan</a></li>
									<li style="text-align: justify;">
										<a href="http://kerjasama.uin-suka.ac.id" target="_blank">Kerjasama</a></li>
									<li style="text-align: justify;">
										<a href="http://uc.uin-suka.ac.id" target="_blank">Unit Cost &amp; Uang Kuliah</a></li>
									<li style="text-align: justify;"><a href="http://medis.uin-suka.ac.id" target="_blank">
										Rekam Medis</a></li>
									<li style="text-align: justify;">
										<a href="http://mutu.uin-suka.ac.id" target="_blank">Dashboard Sistem Mutu</a></li>
									<li style="text-align: justify;">
										<a href="http://digit.lpm.uin-suka.ac.id" target="_blank">Digitalisasi Sistem Mutu</a></li>
								</ul>
							</div>
							<div class="suka-links">
								<span>SUKAexecutiva</span>
								<ul>
									<li><a href="http://executive.uin-suka.ac.id/" target="_blank">Executive Information System (Intranet)</a></li>
									<li><a href="http://resource.uin-suka.ac.id/" target="_blank">Enterprise Resource Planning (Intranet)</a></li>
									<li><a href="http://intelligence.uin-suka.ac.id/" target="_blank">Business Intelligence (Intranet)</a></li>
								</ul>
							</div>
							<div class="suka-links">
								<span><a href="http://tv.uin-suka.ac.id" target="_blank" style="color:#fff"> SUKA TV Channel</a></span>
								<!--<iframe width="220" height="165" src="https://www.youtube.com/watch?v=bgRXRxtZxPY&feature=youtu.be" frameborder="0" allowfullscreen></iframe>-->
							</div>	
							<div class="suka-links">
								<span><a href="http://rasida.uin-suka.ac.id" target="_blank" style="color:#fff">Rasida FM</a></span>
								<!--	<audio style="width:100%" controls>
										<source src="http://103.25.54.172:8000/rasida.mp3"type="audio/mpeg">
									</audio>-->
							</div>
						</div>
						<div class="col-med-3">
							<div class="suka-links">
								<span>SUKApustaka</span>
								<ul>
									<li><a href="http://siprus.uin-suka.ac.id/" target="_blank">Informasi Perpustakaan (Intranet)</a></li>
									<li><a href="http://opac.uin-suka.ac.id/" target="_blank">Online Public Access Catalogue</a></li>
									<li><a href="http://digilib.uin-suka.ac.id/" target="_blank">Digital Library</a></li>
									<li><a href="http://rc.syariah.uin-suka.ac.id/" target="_blank">Resource Center Syariah</a></li>
									<li><a href="http://lib.pps.uin-suka.ac.id/" target="_blank">Perpustakaan Pascasarjana</a></li>
									<li><a href="http://pustaka.uin-suka.ac.id" target="_blank">Interkoneksi Perpustakaan</a></li>
								</ul>
							</div>
							<div class="suka-links">
								<span>SUKAmedia</span>
								
				<ul>
					<li><a href="http://onta.uin-suka.ac.id" target="_blank">E-Repository (Intranet)</a></li>
					<li><a href="http://book.uin-suka.ac.id" target="_blank">E-Book (Intranet)</a></li>
					<li><a href="http://journal.uin-suka.ac.id" target="_blank">E-Journal</a>/<a href="http://ejournal.uin-suka.ac.id" target="_blank">OJS</a></li>
					<li><a href="http://conference.uin-suka.ac.id" target="_blank">E-Conference</a>/<a href="http://econference.uin-suka.ac.id" target="_blank">OCS</a></li>
					<li><a href="http://event.uin-suka.ac.id" target="_blank">E-Event</a></li>
					<li><a href="http://reservation.uin-suka.ac.id" target="_blank">E-Reservation/Booking/Appointment</a></li>
					<li><a href="http://polling.uin-suka.ac.id" target="_blank">E-Polling/E-Survey</a></li>
					<li><a href="http://quiz.uin-suka.ac.id" target="_blank">E-Quiz</a></li>
					<li><a href="http://calendar.uin-suka.ac.id" target="_blank">E-Calendar</a></li>
					<li><a href="http://agenda.uin-suka.ac.id" target="_blank">E-Agenda</a></li>
					<li><a href="http://video.uin-suka.ac.id" target="_blank">E-Video</a></li>
					<li><a href="http://streaming.uin-suka.ac.id" target="_blank">E-Streaming</a></li>
					<li><a href="http://aspirasi.uin-suka.ac.id" target="_blank">E-Aspirasi/Keluhan</a></li>
					<li><a href="http://layanan.uin-suka.ac.id" target="_blank">E-Layanan</a></li>
					<li><a href="http://sms.uin-suka.ac.id" target="_blank">SMS Gateway</a></li>
					<li><a href="http://materi.uin-suka.ac.id" target="_blank">Materi</a></li>
					<li><a href="http://alamat.uin-suka.ac.id/email" target="_blank">Alamat Email Staff (Intranet)</a></li>
					<li><a href="http://alamat.uin-suka.ac.id/admhs" target="_blank">Alamat Email Mahasiswa (Intranet)</a></li>
					<li><a href="http://alamat.uin-suka.ac.id/ipphone" target="_blank">Nomor IP-Phone (Intranet)</a></li>
				</ul>
							</div>
							<div class="suka-links">
							<span>SUKAstudia</span>
							<ul>
								<li><a href="http://learning.uin-suka.ac.id/" target="_blank">E-learning</a></li>
								<li><a href="http://test.uin-suka.ac.id/" target="_blank">Computer-Based Test (Intranet)</a></li>
							</ul>	
							</div>
						</div>
						<div class="col-med-3">	
							<div class="suka-links">
								<span>SUKAdemia</span>
									<ul>
										<li style="text-align: justify;">
											<a href="http://admisi.uin-suka.ac.id" target="_blank">Penerimaan Mahasiswa Baru</a></li>
										<li style="text-align: justify;">
											<a href="http://admisi.uin-suka.ac.id" target="_blank">Yudisium Mahasiswa Baru</a></li>
										<li style="text-align: justify;">
											<a href="http://admisi.uin-suka.ac.id" target="_blank">Rekap Data Mahasiswa Baru</a></li>
										<li style="text-align: justify;">
											<a href="http://admisi.uin-suka.ac.id" target="_blank">Data Profil Mahasiswa</a></li>
										<li style="text-align: justify;">
											<a href="http://admisi.uin-suka.ac.id" target="_blank">Registrasi</a> </li>
										<li style="text-align: justify;">
											<a href="http://admisi.uin-suka.ac.id" target="_blank">Cek Berkas Registrasi</a> </li>
										<li style="text-align: justify;">
											<a href="http://tagih.uin-suka.ac.id" target="_blank">Penagihan Pembayaran (Intranet)</a> </li>
										<li style="text-align: justify;">
											<a href="http://bayar.uin-suka.ac.id" target="_blank">Pembayaran/Penarikan/Perpanjangan /Penghapusan (Intranet)</a> </li>
										<li style="text-align: justify;">
											<a href="http://kartu.uin-suka.ac.id" target="_blank">Cetak Kartu Tanda Mahasiswa</a></li>
										<li style="text-align: justify;">
											<a href="http://kartu.uin-suka.ac.id" target="_blank">Cetak Kartu Alumni</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Data Pribadi Mahasiswa</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Informasi Akademik</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Presensi Kuliah</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Kuliah Praktik</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Kuliah Kerja Nyata</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Tugas Akhir &amp; Munaqasyah</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Indeks Kinerja Dosen </a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Kinerja Dosen </a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Rencana Beban Kerja Dosen </a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Beban Kerja Dosen</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Beasiswa &amp; Kegiatan</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Yudisium Beasiswa &amp; Kegiatan</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Pendidikan Pemakai Perpustakaan</a> </li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Training dan Sertifikasi ICT</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Training dan Sertifikasi Bahasa</a></li>
										<li style="text-align: justify;">
											<a href="http://praktikum.uin-suka.ac.id" target="_blank">Manajemen Praktikum</a></li>
										<li style="text-align: justify;">
											<a href="http://praktikum.uin-suka.ac.id/" target="_blank">Manajemen Laboratorium</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Wisuda</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Yudisium Wisuda</a></li>
										<li style="text-align: justify;">
											<a href="http://alumni.uin-suka.ac.id" target="_blank">Alumni/Tracer Study/Legalisir</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Penelitian</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Pengabdian Masyarakat</a></li>
										<li style="text-align: justify;">
											<a href="http://akademik.uin-suka.ac.id" target="_blank">Penjaminan Mutu</a></li>
									</ul>
							</div>
						</div>
					</div>	
					<div style="clear:both;"></div>
				</div>
			<div class="copyright">&copy; 2014 - Pusat Teknologi Informasi dan Pangkalan Data, UIN Sunan Kalijaga, Yogyakarta</div>	
		</div>
	</body>
</html>
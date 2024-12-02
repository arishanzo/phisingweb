<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Sistem Informasi Akademik Universitas Islam Darul 'Ulum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="gate/css/bootstrap.min.css" rel="stylesheet" media="screen" />
	<link href="gate/css/ionicons.css" rel="stylesheet" media="screen" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="gate/css/menu.css" />
	<link rel="icon" type="image/x-icon" href="gate/image/favicon.png">
	<script type="text/javascript" src="gate/js/jquery-1.7.1.min.js"></script>
	<script src="gate/js/bootstrap.min.js" type="text/javascript"></script>
	<style type="text/css">
		.berita {
			margin-bottom: 10px;
		}

		.berita a {
			color: #258325;
			font-size: 12pt;
			margin-bottom: 10px;
			font-weight: bold
		}

		.berita a:hover {
			color: #095109
		}

		.berita p.substrisi {
			color: #414244;
			font-size: 11pt
		}

		.berita p.waktupost {
			color: #a1a7ad
		}

		.berita span.isiberita {
			display: none
		}

		.modal-subtitle {
			color: #a1a7ad
		}

		.paging_bootstrap {
			text-align: right;
		}

		.paging_bootstrap li a {
			font-size: 11pt;
			color: #000
		}

		.bg {
			background-image: url(image/title_2.png);
			background-repeat: repeat, no-repeat;
			background-position: 0 0;
			background-size: 5px 5px, cover;
			background-attachment: fixed;
		}
	</style>
</head>

<body>
	<div id="main_cont" class="col-md-10 center-block center-self-block">
		<div class="title-name upr-pattern">
			<img src="gate/image/index.png" height="50px"> &nbsp;
			<img src="gate/image/title_2.png" class="title">
		</div>
		<div id="main">
			<div id="header" class="col-md-push-8 col-md-4  col-sm-12 col-xs-12">
				<h2 style="font-size: 25px;"><i class="fa fa-user"></i> Masuk <small>Sistem Informasi Akademik</small></h2><br>
				<form action="process.php" method="post">
					<div class="body bg-gray">
						<div class="form-group">
							<input type="text" name="userid" id="userid" class="form-control" placeholder="Akun Pengguna" />
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Kata Sandi" />
						</div>
						<div class="footerrm-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember_me" value="1" / style="width: 30px"> Ingat saya
								</label>
							</div>
						</div>

						<div class="footer">
							<button type="submit" class="btn btn-success btn-block">Masuk Aplikasi</button>
							<div align="center">atau</div>
							<a href="/gate/googleauth" class="btn btn-info btn-block">
								<img src="https://accounts.google.com/favicon.ico" alt="" width="24" height="24">
								Connect With Google
							</a>
							<a style="float: left;color:#4cae4c;font-size: 11pt;display: block;" href="/gate/lupapw">Lupa Password?</a>
							<a style="float: right; color:#A7A9AC;font-size: 12pt">Powered by <img src="gate/image/siakad2.png"> SEVIMA</a>
						</div>
					</div>
				</form>
			</div>
			<div id="header" class="col-md-8 col-sm-12 col-xs-12  col-md-pull-4">
				<h2 style="font-size: 25px;"><i class="fa fa-bullhorn"></i> Berita <small>Kegiatan Akademik & Sistem Informasi</small></h2><br>
				<div class="berita">
					<a href="javascript:void(0)" data-type="detail">LPPAI UNISDA berbagi takjil</a>
					<p class="substrisi">Lamongan, news.unisda.ac.id&nbsp; Menjelang senja, tepatnya Kamis, 29 April 2021 / 17 Ramadhan&nbsp;&nbsp;Baca Selanjutnya .....</p>
					<p class="waktupost">
						<i class="fa fa-user"></i> 17.00.0141 |
						Jumat, 30 April 2021, 10:06:56
					</p>
					<span class="isiberita">Lamongan, news.unisda.ac.id&nbsp; Menjelang senja, tepatnya Kamis, 29 April 2021 / 17 Ramadhan&nbsp;&nbsp;<a target=_blank rel=nofollow href=https://unisda.ac.id/lppai-unisda-berbagi-takjil/ title=Link: https://unisda.ac.id/lppai-unisda-berbagi-takjil />Baca Selanjutnya </a></span>
				</div>
				<div class="berita">
					<a href="javascript:void(0)" data-type="detail">Peringkat 1 Unisda, ini daftar PTNU versi Webometrics</a>
					<p class="substrisi">Lamongan, news.unisda.ac.id&nbsp;Webometrics kembali merilis daftar universitas terbaik di dunia.&nbsp;Baca Selanjutnya .....</p>
					<p class="waktupost">
						<i class="fa fa-user"></i> 17.00.0141 |
						Jumat, 26 Maret 2021, 10:40:20
					</p>
					<span class="isiberita">
						<p>Lamongan, news.unisda.ac.id&nbsp;Webometrics kembali merilis daftar universitas terbaik di dunia.&nbsp;<a target=_blank rel=nofollow href=https://unisda.ac.id/peringkat-1-unisda-ini-daftar-ptnu-versi-webometrics/ title=Link:https://unisda.ac.id/peringkat-1-unisda-ini-daftar-ptnu-versi-webometrics>Baca Selanjutnya </a></p>
					</span>
				</div>
				<div class="berita">
					<a href="javascript:void(0)" data-type="detail">Pengumuman Penjaringan Beasiswa 2021</a>
					<p class="substrisi">Untuk persyaratan, ketentuan, dan informasi lainnya, Silahkan melihat&nbsp;Baca Selanjutnya .....</p>
					<p class="waktupost">
						<i class="fa fa-user"></i> 17.00.0141 |
						Senin, 22 Maret 2021, 11:49:19
					</p>
					<span class="isiberita">
						<h3><span style=font-size:14px; font-weight: 400;>Untuk persyaratan, ketentuan, dan informasi lainnya, Silahkan melihat&nbsp;</span><a target=_blank rel=nofollow href=https://unisda.ac.id/pengumuman-penjaringan-beasiswa-2021/ style=font-size:14px; font-weight: 400; title=Link:https://unisda.ac.id/pengumuman-penjaringan-beasiswa-2021>Baca Selanjutnya </a></h3>
					</span>
				</div>
				<div class="berita">
					<a href="javascript:void(0)" data-type="detail">Pengisian Kuesioner</a>
					<p class="substrisi">Assalamualaikum Wr. Wb. Salam silaturahim kami sampaikan, semoga kita mendapatkan lindungan dari Allah SWT dan senantiasa mendapatkan kesuksesan dalam aktivitas sehari-hari.&nbsp;Baca Selanjutnya .....</p>
					<p class="waktupost">
						<i class="fa fa-user"></i> 17.00.0141 |
						Jumat, 12 Maret 2021, 13:53:35
					</p>
					<span class="isiberita">
						<p>Assalamualaikum Wr. Wb. Salam silaturahim kami sampaikan, semoga kita mendapatkan lindungan dari Allah SWT dan senantiasa mendapatkan kesuksesan dalam aktivitas sehari-hari.&nbsp;<a target=_blank rel=nofollow href=https://unisda.ac.id/pengisian-kuesioner/ title=Link:https://unisda.ac.id/pengisian-kuesioner>Baca Selanjutnya </a></p>
					</span>
				</div>

				<!-- pagination -->
				<div class="dataTables_paginate paging_bootstrap">
					<ul class="pagination">
						<li class="prev disabled">
							<a href="#" data-toggle="tooltip" title="Halaman pertama">
								<i class="fa fa-angle-double-left"></i>
							</a>
						</li>
						<li class="prev disabled">
							<a href="#" data-toggle="tooltip" title="Halaman sebelumnya">
								<i class="fa fa-angle-left"></i>
							</a>
						</li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="javascript:goPage(2)" data-toggle="tooltip" title="Halaman 2">2</a></li>
						<li><a href="javascript:goPage(3)" data-toggle="tooltip" title="Halaman 3">3</a></li>
						<li><a href="javascript:goPage(4)" data-toggle="tooltip" title="Halaman 4">4</a></li>
						<li class="next">
							<a href="javascript:goPage(2)" data-toggle="tooltip" title="Halaman selanjutnya">
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
						<li class="next">
							<a href="javascript:goPage(36)" data-toggle="tooltip" title="Halaman terakhir">
								<i class="fa fa-angle-double-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="clr"></div>
		</div>
		<input type="hidden" name="act" id="act">
		<input type="hidden" name="sessdata" id="sessdata">
	</div>

	<div class="modal fade berita" id="modal_lookup" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"></h4>
					<h5 class="modal-subtitle"></h5>
				</div>
				<div class="modal-body" style="overflow-y:auto">
				</div>
				<div class="modal-footer" align="center">
					<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		main = document.getElementById('main_cont');
		var e = window,
			a = 'inner';
		if (!('innerHeight' in window)) {
			a = 'client';
			e = document.documentElement || document.body;
		}
		viewport = e[a + 'Height'];
		content = main.offsetHeight;
		if ((viewport - content) < 0) {
			main.setAttribute("style", "margin-top:" + 0 + "px");
		} else {
			main.setAttribute("style", "margin-top:" + ((viewport - content) / 2) + "px");
		}

		var g_abs_url = "/gate/";
		var g_page = "/gate/login";

		var g_extpage = g_page;

		function goPage(page) {
			// simpan nilai scroll dulu
			localStorage.setItem("scroll", $(window).scrollTop());

			location.href = g_page + "/" + page;
		}

		$(document).ready(function() {
			$("#userid").focus();

			$("[data-type='detail']").click(function() {

				var div = $(this).parent();

				$("#modal_lookup .modal-title").html($(this).html());
				$("#modal_lookup .modal-subtitle").html(div.find(".waktupost").html());
				$("#modal_lookup .modal-body").html(div.find(".isiberita").html());

				$("#modal_lookup").modal();
			});

		});
	</script>

</body>

</html>
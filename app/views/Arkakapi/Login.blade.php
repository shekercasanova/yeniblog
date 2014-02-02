<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="plugins/uniform/css/uniform.default.css" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="assets/css/fonts/icomoon/style.css" media="screen">
<link rel="stylesheet" href="assets/css/login.css" media="screen">
<link rel="stylesheet" href="plugins/zocial/zocial.css" media="screen">

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Arkakapı :: İçerik Yönetim Sistemi - Giriş</title>

</head>

<body>


    <div id="login-wrap">

		<div id="login-ribbon"><i class="icon-lock"></i></div>

		<div id="login-buttons">
			<div class="btn-wrap">
				<button type="button" class="btn btn-inverse" data-target="#login-form"><i class="icon-key"></i></button>
			</div>
			<div class="btn-wrap">
				<button type="button" class="btn btn-inverse" data-target="#forget-form"><i class="icon-question-sign"></i></button>
			</div>
		</div>

		<div id="login-inner" class="login-inset">

			<div id="login-circle">
				<section id="login-form" class="login-inner-form" data-angle="0">
					<h1>Giriş</h1>
                                        <form class="form-vertical" action="" method="post">
						<div class="control-group-merged">
							<div class="control-group">
								<input type="text" placeholder="E-Posta Adresiniz" name="email" id="input-username" class="big required">
                                                                    {{$errors->first('email')}}
							</div>
							<div class="control-group">
								<input type="password" placeholder="Şifreniz" name="password" id="input-password" class="big required">
                                                                    {{$errors->first('password')}}
							</div>
						</div>
						<div class="control-group">
							<label class="checkbox">
								<input type="checkbox" name="remember" class="uniform"> Beni Hatırla
							</label>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-success btn-block btn-large">Giriş</button>
						</div>
					</form>
				</section>
				<section id="forget-form" class="login-inner-form" data-angle="180">
					<h1>Şifre Sıfırla</h1>
					<form class="form-vertical" action="dashboard.html">
						<div class="control-group">
							<div class="controls">
								<input type="text" name="sifresifirla" class="big required email" placeholder="E-Posta Adresini Giriniz...">
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-danger btn-block btn-large">Sıfırla</button>
						</div>
					</form>
				</section>
			</div>

		</div>

	     <div id="login-social" class="login-inset">
	    	<button class="zocial facebook">FaceBook İle Bağlan</button>
	    	<button class="zocial twitter">Twitter İle Bağlan</button>
	    </div> 
    </div>

	<!-- Core Scripts -->
	<script src="assets/js/libs/jquery-1.8.3.min.js"></script>
	<script src="assets/js/libs/jquery.placeholder.min.js"></script>
    
    <!-- Login Script -->
    <script src="assets/js/login.js"></script>

    <!-- Validation -->
    <script src="plugins/validate/jquery.validate.min.js"></script>
    <script src="plugins/validate/Localization/messages_tr.js"></script>

    <!-- Uniform Script -->
    <script src="plugins/uniform/jquery.uniform.min.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="Garena Account Center">


	<link href="/css/sso.css?v=0.58" rel="stylesheet" type="text/css" />


	<link href="/css/shopee-captcha-main.css?v=0.01" rel="stylesheet" type="text/css" />
	<title>Garena Account Center</title>
	<script>
		! function(a, b, c, d, e) {
			a.ddCaptchaOptions = e || null;
			var m = b.createElement(c),
				n = b.getElementsByTagName(c)[0];
			m.async = 0, m.src = d, n.parentNode.insertBefore(m, n)
		}(window, document, "script", "https://js.captcha-display.com/xhr_tag.js", {
			ajaxListenerPath: ["garena.sg", "garena.ph", "garena.tw", "garena.ru", "garena.my", "kiosgamer.co.id", "termgame.com", "napthe.vn", "bdgamesbazar.com", "recargajogo.com.br", "pagostore.com", "ggtopup.com", "gshopindia.com", "shop2game.com", "topup.pk", "garena.com", "/api"],
			ajaxListenerPathExclusion: ["api-js.datadome.co"],
			sessionByHeader: true,
			exposeCaptchaFunction: true,
			disableAutoRefreshOnCaptchaPassed: true,
			enableTagEvents: true
		});
	</script>
</head>

<body>
	<script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
	<script src="/js/crypto.js?v=0.60" type="text/javascript"></script>
	<script src="/js/countries.js?v=0.30" type="text/javascript"></script>
	<script src="/js/locales.js?v=0.03" type="text/javascript"></script>
	<script src="/i18n/sso/id.js?v=0.58" type="text/javascript"></script>
	<!--for datadome -->
	<script>
		! function(a, b, c, d, e, f) {
			a.ddjskey = e;
			a.ddoptions = f || null;
			var m = b.createElement(c),
				n = b.getElementsByTagName(c)[0];
			m.async = 1, m.src = d, n.parentNode.insertBefore(m, n)
		}(window, document, "script", "https://js.datadome.co/tags.js", "AE3F04AD3F0D3A462481A337485081");
	</script>
	<!--for google web login-->
	<script src="https://apis.google.com/js/platform.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
	<!-- for shopee captcha -->
	<script src="/js/captcha-sdk-v2.0.1.js?v=0.01"></script>
	<script>
		var SHOPEE_CAPTCHA_DOMAIN = "/shopee_captcha";
		var SHOPEE_CAPTCHA_GENERATE_URL = SHOPEE_CAPTCHA_DOMAIN + "/api/v4/anti_fraud/captcha/generate";
		var SHOPEE_CAPTCHA_VERIFY_URL = SHOPEE_CAPTCHA_DOMAIN + "/api/v4/anti_fraud/captcha/verify";
		var SHOPEE_CAPTCHA_REPORT_URL = SHOPEE_CAPTCHA_DOMAIN + "/api/v4/anti_fraud/captcha/report";
	</script>
	<script src="/js/shopee-captcha-bundle.js?v=0.01" type="text/javascript"></script>

	<script src="/js/js.cookie.js?v=0.01"></script>

	<!-- sso website -->
	<script src="/js/sso/settings.js?v=0.01" type="text/javascript"></script>
	<script src="/js/sso/utils.js?v=0.01" type="text/javascript"></script>
	<script src="/js/sso/captcha.js?v=0.01" type="text/javascript"></script>
	<script src="/js/sso/content.js?v=0.01" type="text/javascript"></script>
	<script src="/js/sso/register.js?v=0.01" type="text/javascript"></script>
	<script src="/js/sso.js?v=0.81" type="text/javascript"></script>
	<script type="text/javascript">
		$(function() {
			SSO_SERVER.init({
				'test': false,
				'static_root': '/',
				'language': 'id',
				'country': 'ID',
				'mode': 'sso_login',


				'app_id': 10100,
				'app_name': 'Garena Account Center',
				'app_icon': '',


				'login': false,



				'session_cookie_name': 'sso_key',
				'session_cookie_domain': 'garena.com',


				'platform': 1,
				'response_type': '',
				'state': '',
				'show_platforms': 0,
				'line_client_id': '',
				'line_state': '',
				'vk_client_id': 0,
				'google_client_id': '',
				'huawei_app_id': '',
				'apple_client_id': '',
				'apple_state': '',
				'fb_app_id': 0,
				'fb_scope': '',


				'gas_download': false,
				'recaptcha_site_key': '6Lcp7B4dAAAAAD1j0NT4JbLgs9MUaC-v4NrmKCA_',



				'': ''
			});

			/* resize cross-origin iframe */
			// browser compatibility: get method for event
			// addEventListener(FF, Webkit, Opera, IE9+) and attachEvent(IE5-8)
			var myEventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
			// create event listener
			var myEventListener = window[myEventMethod];
			// browser compatibility: attach event uses onmessage
			var myEventMessage = myEventMethod == "attachEvent" ? "onmessage" : "message";

			myEventListener('dd_blocked', myCallback);

			function myCallback(event) {
				var dd_dialog = null;

				var element = document.getElementById('recaptcha_wrapper_register_captcha_dialog');

				if (element) {
					dd_dialog = $('#sso_captcha_dialog_container_register_captcha_dialog');
					ga_dialog = $('#gacaptcha_wrapper_register_captcha_dialog');
				} else {
					element = document.getElementById('recaptcha_wrapper_login_captcha_dialog');
					if (element) {
						dd_dialog = $('#sso_captcha_dialog_container_login_captcha_dialog');
						ga_dialog = $('#gacaptcha_wrapper_login_captcha_dialog');
					}
				}

				if (dd_dialog) {
					displayDataDomeCaptchaPage(event.detail.captchaUrl, element);
					dd_dialog.show();
					ga_dialog.hide();
					centralizeCaptchaDialog(dd_dialog);
				}
			}
			// register callback function on incoming message
			myEventListener(myEventMessage, function(e) {
				if (e.data == "dd_captcha_passed") {
					if ($('#sso_captcha_dialog_container_register_captcha_dialog')) {
						// close register captcha dialog
						$('#sso_captcha_dialog_container_register_captcha_dialog').hide();
					}
					if ($('#sso_captcha_dialog_container_login_captcha_dialog')) {
						// close login captcha dialog
						$('#sso_captcha_dialog_container_login_captcha_dialog').hide();
					}
					if ($('#confirm-btn')) {
						// reset login button style
						$('#confirm-btn').attr("disabled", false);
					}
					return;
				}
				// verify the event origin, now only support ccms
				if (e.origin != 'https://contentgarena-a.akamaihd.net') {
					return;
				}
				// we will get a string (better browser support) and validate
				// if it is an int - set the height of the iframe #my-iframe-id
				if (e.data === parseInt(e.data)) {
					var iframe = document.getElementsByClassName('sso_dialog_frame')[0];
					$(iframe).height(e.data + "px");
				}

			}, false);

		});
	</script>
</body>

</html>
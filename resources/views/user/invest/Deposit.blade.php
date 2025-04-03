<html class="pc" style="font-size: 50px;">

<head>
	<meta charset="utf-8">
	<title>Deposit</title>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="expires" content="0">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="full-screen" content="true">
	<meta name="x5-fullscreen" content="true">
	<meta name="360-fullscreen" content="true">
	<meta name="renderer" content="webkit">
	<meta name="robots" content="noindex, nofollow">
	<link rel="manifest" href="/manifest.json">
	<script>
		window.addEventListener("error", function(event) {
			if (event.message.indexOf("Unexpected token '<'") > -1) {
				location.reload();
			}
		});
		if ("standalone" in window.navigator && window.navigator.standalone) {
			var noddy,
				remotes = false;
			document.addEventListener(
				"click",
				function(event) {
					noddy = event.target;
					while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
						noddy = noddy.parentNode;
					}
					if (
						"href" in noddy &&
						noddy.href.indexOf("http") !== -1 &&
						(noddy.href.indexOf(document.location.host) !== -1 || remotes)
					) {
						event.preventDefault();
						document.location.href = noddy.href;
					}
				},
				false
			);
		}
	</script>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		html,
		body {
			width: 100%;
		}

		#startLogo {
			width: 100%;
			min-width: 7.5rem;
			height: 100vh;
			max-width: 8.5rem;
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			z-index: 1000000;
			background: #020503;
			display: flex;
			align-items: center;
			justify-content: center;
			display: none;
		}

		#startLogo img {
			width: 100%;
			height: 100vh;
			object-fit: cover;
		}
	</style>
	<link href="/js1743475952730/app.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/axios.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/compressorjs.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/core-js.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/crypto-js.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/vant.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/vendors~app.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="/js1743475952730/vue.fe8857a9.1743475952730.js?v=1743475952730" rel="preload" as="script">
	<link href="{{asset('')}}static/css/app.6328f701.css" rel="preload" as="style">
	<link href="{{asset('')}}static/css/vant.d14f5539.css" rel="preload" as="style">
	<link href="{{asset('')}}static/css/vant.d14f5539.css" rel="stylesheet">
	<link href="{{asset('')}}static/css/app.6328f701.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7f362702.6a53b834.css">
	<script charset="utf-8" src="/js1743475952730/chunk-7f362702.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
	<script charset="utf-8" src="/js1743475952730/chunk-5576a184.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60c8a75a.d6f6b692.css">
	<script charset="utf-8" src="/js1743475952730/chunk-60c8a75a.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-a7d8f170.c87a4291.css">
	<script charset="utf-8" src="/js1743475952730/chunk-a7d8f170.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-00b1464f.674dbd13.css">
	<script charset="utf-8" src="/js1743475952730/chunk-00b1464f.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-67912ed2.ae8d438d.css">
	<script charset="utf-8" src="/js1743475952730/chunk-67912ed2.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script charset="utf-8" src="/js1743475952730/echarts.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script charset="utf-8" src="/js1743475952730/chunk-0119f9da.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-0b116a05.250ed6be.css">
	<script charset="utf-8" src="/js1743475952730/chunk-0b116a05.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-367626f4.8674be05.css">
	<script charset="utf-8" src="/js1743475952730/chunk-367626f4.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script charset="utf-8" src="/js1743475952730/qrcodejs2.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-0d09da43.555d1171.css">
	<script charset="utf-8" src="/js1743475952730/chunk-0d09da43.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-115aa5d8.9d416f08.css">
	<script charset="utf-8" src="/js1743475952730/chunk-115aa5d8.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5f936813.7deb1a32.css">
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-2f63d074.281755cb.css">
	<script charset="utf-8" src="/js1743475952730/chunk-2f63d074.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5412a522.b373626a.css">
	<script charset="utf-8" src="/js1743475952730/chunk-5412a522.fe8857a9.1743475952730.js?v=1743475952730"></script>
</head>

<body class="mein_cn">
	<div id="app" class="applang">
		<div data-v-6e2d35de="" data-v-679886a1="" class="page">
			<div data-v-6e2d35de="" class="headers">
				<div data-v-b73557e2="" data-v-679886a1="" class="head" data-v-6e2d35de="">
					<div data-v-b73557e2="" class="safe"></div>
					<div data-v-b73557e2="" class="container flex">
						<div data-v-b73557e2="" class="back"><img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEeSURBVHgB7Ze9DcIwEIWf+W1ZgQ0oWIBJYBMoqekoEUJsQAsFA7ACYgCYAHNWbBGO2ICVEBf3SU9Ozufk6ZzYCSAIQrVorQekMVLEmrvqjLRMMnO6KpMNRGDMUbMn9VhXH3XjqZxhhroRc7GIuVjEXCwpmVM8oP2L8JI0R7a4N1lbFGtG5Lrji1LqYG7a+tLchrQjDUkdUteqE2iL8nif71pb0gHIbXUBcyvS2qTYc1d1nctRuXOeB0++r++FX/ZixY7VhxvowHgeU54xzymmOT9RFUd4r6L5QrmTFqQ2smekbcc6uXhRjOeG5HKP8BF4g6dIBTFZFmKyLMRkWYjJsvinyaj/YrMtUmO2xRvrOiMlWCUnSBFrcgJBEOrhAfmtScdij3WYAAAAAElFTkSuQmCC" alt=""></div><!----><!----><!---->
						<div data-v-b73557e2="" class="name tac"> Deposit </div><!----><!----><!---->
						<div data-v-b73557e2="" class="flex1"></div><!----><!----><!----><!----><!---->
						<div data-v-b73557e2="" class="head_right"><img data-v-679886a1="" data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAOVBMVEUAAAD///////////////////////////////////////////////////////////////////////8KOjVvAAAAEnRSTlMAQCC/34DvYHDPUJ+QMI9fEK+OVn9hAAABIElEQVQ4y9WU23LEIAiGwWM8JLv1/R+2Cxp11bEznfZiv4tMgr8QEIS/R6ctugrTD1Sh3OsiVHDHCZ+F6KgJXs6kZOSFTXeljgCEVc2i7LrgFMG9m1SJo4cDexh6kdojoubTMB4WeJZhTSDQ92ORGfk7oOMgnwJGKI3h2M6XycGArf4Gn3Z2GG5HwXYNpgCeNkOp4WuvaHuewLAZoVZNAkR6FnixuYxg0g0b9EqoKZ3DqcwBtAlnIRfXQE+ahO0nd0LmmIUc2o9CScIxtOuSCd1g66xvtPK0hq7lEbog7spOCDar2qD5OCRMBF40TbhvCi8zXyens24z9fvG5eAptLnlqVkPTRkuRPRluCwsESq94QQsmS+AHRglXSkuIvwf35r0H3Qf5u1wAAAAAElFTkSuQmCC" alt="" class="headRight"></div>
					</div>
					<div data-v-b73557e2=""><!----></div>
				</div>
			</div>
			<div data-v-6e2d35de="" id="scroll" class="content-container">
				<div data-v-6e2d35de="" id="content" class="content-scroll">
					<div data-v-679886a1="" data-v-6e2d35de="" class="container">
						<div data-v-679886a1="" data-v-6e2d35de="" class="item valMob">
							<div data-v-679886a1="" data-v-6e2d35de="" class="cname">Select Currency</div>
							<div data-v-679886a1="" data-v-6e2d35de="" class="inp">
								<div data-v-679886a1="" data-v-6e2d35de="" class="icon"><img data-v-679886a1="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/f710b0ea16ca629941e92e00e453fd1b.png" alt=""></div><input data-v-679886a1="" data-v-6e2d35de="" type="text" readonly="readonly">
								<div data-v-679886a1="" data-v-6e2d35de="" class="arr"><img data-v-679886a1="" data-v-6e2d35de="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACQSURBVHgB7dPBEYMgFIThJRVYAqVQUkpIB0kHKcVSQgexg/U5cnB0RkUUL/vNcPHw+AcBEBGRE5H88rg3StkQz3J+bY/Hjo7OVsRx0TkXUSqdxp/5flunkBsSmC/gbDb0mRHwwlVs+OfWgElIuxLQogbbqOF46eaGbx61cPli6gZMQkIKGVbAXdKvaSAiIhX0NA2573NFoLgAAAAASUVORK5CYII=" alt=""></div>
							</div>
						</div>
						<div data-v-679886a1="" data-v-6e2d35de="" class="item valMob">
							<div data-v-679886a1="" data-v-6e2d35de="" class="cname">Select Network</div>
							<div data-v-679886a1="" data-v-6e2d35de="" class="inp">
								<div data-v-679886a1="" data-v-6e2d35de="" class="icon"><img data-v-679886a1="" data-v-6e2d35de="" src="https://tux-all.s3.ap-southeast-1.amazonaws.com/upload/20240723/bcabd0a39b535b0c04e14dc6b5f16bdd.png" alt=""></div><input data-v-679886a1="" data-v-6e2d35de="" type="text" readonly="readonly">
								<div data-v-679886a1="" data-v-6e2d35de="" class="arr"><img data-v-679886a1="" data-v-6e2d35de="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAgCAYAAACcuBHKAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACQSURBVHgB7dPBEYMgFIThJRVYAqVQUkpIB0kHKcVSQgexg/U5cnB0RkUUL/vNcPHw+AcBEBGRE5H88rg3StkQz3J+bY/Hjo7OVsRx0TkXUSqdxp/5flunkBsSmC/gbDb0mRHwwlVs+OfWgElIuxLQogbbqOF46eaGbx61cPli6gZMQkIKGVbAXdKvaSAiIhX0NA2573NFoLgAAAAASUVORK5CYII=" alt=""></div>
							</div>
						</div>
						<div data-v-679886a1="" data-v-6e2d35de="" class="itemBox">
							<div data-v-679886a1="" data-v-6e2d35de="" class="mbox">
								<div data-v-679886a1="" data-v-6e2d35de="" id="qrcode" title="THvFgAEiAJe5Q3xLoTDPjL2nnCgL2YaVuJ"><canvas width="185" height="185" style="display: none;"></canvas><img alt="Scan me!" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALkAAAC5CAYAAAB0rZ5cAAAAAXNSR0IArs4c6QAADj5JREFUeF7t3WFy3EgOhFH5KuP7H0ln0Ybk2IgdNbl+pQSLbTnn5wRIoBIfUGCRav94e3t7e3mC/37+/PkQxevr68P/m7bTpSd+1Udip1qpj6P7HV2ruqjfK+x+FHKTVZN5ZGceMqtCfq5fIUe2CvmxUKoLynyJWSFHWTWZ7eQvLzrqoPSx2QPkO5KkW6vaHamg16pdrDTcQGOZhmi6gHUdIMmSyZkuhRwfbpfU/qKxwlHIjwUu5C8vL9Md64ssn15WyDNFC3khPyVouvi1WDOkH68u5IW8kP9XAa1qrUK9n9pN+9UXHPpwq/f7E+fqZG135pcePJOE6OLUrpBn59V6eqY517yp3RX5LeQHqt4FgiZ4uqPu2KUK+cK8rCAkohZyf6GjOqvdFfltJ28nP+Sq44qW20KH1u654JpM9bhrOuk6cugokeiXrC2JT/2qVtER4o5gkiQRzSdGhTwbTQp5O/kHA9oktNC1MLX474pP/baTaybbyU+VUtimi1D9FvJC/qGAAqjjhYKl9+vpykKStPqnk74jSQqM1nUSs147bXfF2p76CDFJeiH3ry61a+uzQGJXyC94iNNC0o6VJEljSXwkO2EC7w79vs0RYpIkhSNJpvrQnUbXm3Tj5FqFV+0S/Qq5qneyW+xIUju5J2klHzSTu2uznO6UKwv+HGHSUZNrTaljK12v2t0VS+J3pSEU8oMfNVIBC7k/3KpWCfjRuJI4ToDReTTpWCq+7j663kRTXa/a3RVL4ndF53bydvKINS0kbSZJMO3kJ+qp+O3k888HCdBRJ592rPdLOoICWLtshk70Uw6usPvrfyauxXX8leS0LlfAq/cs5Df9ZPQ0RM9+PwXyCrtCXsgPv3efLpor4NV7FvJC/v0h/+eff57iX5pYeVqWt5b6kKR+tbNpd9H7Tdsdxac+9FrVYJfdj0L+KLUWiL6sUjgSv9Og6tr0CHYX0Ed+CvmBKglsmkyFctouKTi9VjXYZVfICzn/pHUhv6Asky1Tu3Fncn9B9K0hV9hUBAXwmfzq2KAaJMU13U8SnZNYdJ5P46NxJXGicKidiqr3m7Yr5Joh/4WBhL/3aAr58Dl5IS/kHwp0XDkGQXVxjMwy7ZTm5dGq48rCX+Zr91SIEjuNpTP5jeOKVrVW4Ver/KzjK0Q7QE200vimi0H9qp3Gl3Cg154x+TCTJ4nTYNQuiUWTNO1juggVIm06iS6JD815YlfIF35hNwE1uTaBaPpaLQYtwgRevbaQF/L4oT8pJAU1sSvkhfzvhfzt7e23n9pqBSdbV+JD/SYvfu7ycZdffVbRzqvaX3E/+qOJBEAVK/HxTCBoMpP16rysdqqfApg8l6gP1fn9foX89fVBVwVQIVI7TbDeT+0K+cIP5CdiKVjPDoJ2mGS9Cq/aJXnTfKguV9yvnbyd/JArHTOvgFLuuVI09IGWOH23UWE0wOlup+vQ+JLZU9c23Y2n16aaKhuq6cruU8gP1JoGYQeomvTptRXyEwVUaO12mmBNiManXaeQ+y6vmq7kvJ28nTwaM7VxdFxZ+Mb8LlE1SboL6C61YxdI1nZXPpY6ubzxTLYQDSZJugqdAKggqFZ6P9Ul0VljUZ1Vg+mYT79dKeT2MigBQYsrgWMamAToZB26c6ndeyx0Tp4EnYiv12pCFDa1m/Z7l85JAScaaH41H+3kC18hqqhJghWsjiv+uzCFvJB/1OR0ASeFvq2Tf/7Bz6TDfJdrtXuuzIWfE3qXVgrltF2iVVIMHzN5IbcHz1ToQv51nVPtC/mGD7Q0SfrgmewC0x1a79dOfsHHXQkwHVcUXbcr5IX8lJbkQVGL1VH9uuWtkMvLIBVaRdUFq52OA7oOTWWy3sTH9LgyfT9d27Tfs/vRyyCFI0n6M/nQJCXrTXzsguNzjLpeXduudRTygwdPTZImXZOZPEfotbrrJfdT/VSXVOdCXsi3fGq7o7g6rlzwti/tMNLxdIxLOu90R5V1vdtM+2XIVdTETkXQ6k9i0YfbJCHqY8d6Vfvp9arfKxrHw7iyAxhd8I6kK4DTSU+SmeRItZ9er/pNdDnzUcjxjed00pNkFnIfdd7BL+SF/LABThd1O7kqsPC3oMkYop1SH/Y0lh3jmUr9rSFXEdQuAUYhUjiSmNWHjiE77qfr1SJU8NWv2qUM0Tm5BqNQJmIpRHf50PgKuVNVyE+0KuQOUTu5a3VomVbh55tqpyzknrhC7loV8gt+5lqLOknTXwe5dl4V/5kETGJOIEo0Vf00vmSHm37m0nzo88uZBqPn5BqMJl0Tp3Yq6l0gqC66Ds2H6lfIFx4ANZmJ+JqQZwJBdSnkN77xVGA0mYX8OJmFvJCf1obC0XHF20vSsDQf2jx5Jv/O27ymTsVPimEajrseUJN17GKN3njuSLouWJM5DWDaTeS8X2NWsDRvydo0ljsbTCE/UF/hUCiTAk6u1XUU8oUXHEnSp5OZxKJwTPvQ+2n31HUU8kJ+utMqlEkBJ9cW8l/qfXlc0QQnQmuHme5s03O/xqdAqy56vx3r1Zn8CrtCfqDqjqRPN4nkfjvWewW8es9CXsgPfxpix+6jkKZ2hbyQF/J3Bp6pqpOtVZ8PEh/JHKzXdiZf6+30I/wJ5Gvh/NtaoUx8KDCqQRLznzhXJzHvyNvH6Yr8cyqa4OmgE2CSWJJOnsScAJPEfNcOkuRIm1MhP1E5AaaQH4ua6KLFcNYk2smHHzyTZLaTK87HdoV8Qb928uPDhpUR4bNtUvyaulPI5Z9TUSc7FnKX0Aq+avXsdsmuojnSZz3lqpAvfIOTJOnZ4dX4CvmJUlpxKrTaTSekkPufl2nOdSdUO83Rx+lKxxUrpUR88/BcVtONQ/VTu0J+wU6TiP9c+Fo03wpyeRlksvj5qAKTCK0+VjqCnBhozEd+9UFsOh87NNixtjNd6Jx8WlQFUIFRAZP5cQeUuo7pfBTyRNGFj7uSBOu1hXzP+fd0EwsRtG9XEicJgO3kfsqhObqr0JUDXceKXceVA7Wmi0sTsgOEvxLyySPEHcmcTpLO2rq2uwokWcddMWsuk2eG92tHz8kVhKRjqTCauASORPxEg0TnZ4pZc5nEXMhPaNkhfiH3h+BCfgJqO7lDpFpNF+aOZtJO3k7+ocC3h1zeeCYVl241Mn9qh5lex/Takvj0bFr0PANf47uraM7WRkeIurhEQL1WHxSnk67xaYJ1HYnfJG+JfqqBNifVoJCH35Or0JrgQp791Inm42Mm77iyItfvbQv5fTN+O3k7+e8r9H8svtW4MvnGc3oGXMrKJ2Od96btNOZpv9P303Wo3TQbut7xI8TphaiAOt9qd0rsNGZN0l12ug61m2ZDdSnkmz4FfqYiXIFDARa7Qr7wQkIEfbfRZE7bPXt8ul5dh9oV8kL+wUoyJim8aqfwqt1TQa7BaEKOREiuVVHVLolFjwsVLLXT8Uc1SOxUA405ud/ZOh4+tS3k933YVMj9jH2lMAv56+uDXkmhJx2rkBfyleJl244rLNWhYTJeJEW9EnU7eTv5Ci8Ptt8G8mQhun2r0tOxaHzqd1d3+hy3+p22U/00v1ccVFAn1wTrQnTm1QWrX7VTEDTB0/olfnVtaqexqPaa8xWGCvmBqtMJLuQJ4v7+IDpCnE7SShV+Dnw6Fu1E6jcpkAQF9Tttp/ola0sOB979tpO3k0dvWv86yLVLJMJoR1Uf2iUSv9rFduiXzLw7NNC8qabjnXxHkhKhNT61WxFabBO/0yNgEousdcUmWVshDz+KWkmU2CZgJSA8027WTh5+ragQqZ2Au2KT+C3k50qPPnjuSFLHleNkFvL/A/nnv9Zf6TxX205vowrCs/tNHh41Z9pMVFONWeNb8fvwkxTqZIfds8M2DYKuV4FZAeHzPafXpjErVytrK+QHqips0yCoXwVmBYRCruU1bKdJvwu2u/wWcv/Dlo8jxM7kj8g8e3EV8kXIJ39cKGnkydaaJF2Bnvah58HJbjG9tiTm6ZM31eWjkxfy2T9/uyuZ6lebiUKU+J32cdZkC/nwXwZp0pOumFxbyJN5I7xWxVc3ulWrXceVY+W1qNUuKeB28vBXtQr5N4J8uqMmcOi109WfdB3daZKYNb7pXCa7nuZyOubDB88rnMiLBvW742FFIUqALuT5n7Wp/vSBlt5M7ZKOUMizHzPVHO3ovAkHK+so5AdqtZMfIzQN5fT9+MFTx4aVSuq4YmppcSV2FslfCLmOCHfNmUl8GnOyfWt80w1G/SbgT197RQHTuJKIlQSt21kSXyGfxjS7X8JLNK4kECVBF/IMmCRvmeevX53wUsgXdNexYboI1a8upZD/UqrjCp6udCbX0srs2skX9NOu+Ozd7oqkL8j4L9NEK11H8oz0bcYVTVAhV6XcrpCfaKUVrHaakkKuSrldIS/kTsuCpRa/FvWC6wfTQl7IE35Ory3ka3/PeSTkH3e6Mv1gsuMYUH38iSc4GvN03lb8FnL88zfdqqc7rxZIEt/0FnRXLGd+C3khn2b88Ef928kX/jRtWqwdnVJ96Basu8W0VloN7eQX/CZ4crKgACaJUx+FXMvo2C4aVzLXj1cnSZ+OZRqsu7psoqkWsGqvTUf9pvejmVwXp3ZJQtRHYqfxJXbTo4TGokWd6JdC+dl3er9CfpBNBSaxK+THf8ic6NJxZaE1JfB2XPGXNx1XFqCcNi3kmaLpeHH5uJIt7+tXJ8Ik3fPrEWdXJjHrtdOa6oq1Q+toktzv3ccf94OfSZfVJO2wU1ATEAr5L/UK+Q6iD3wU8mPhE13OUlnIC/nha3jdBaaPJAv5BW9Lb2L8JUmmXqug6gioWiUztK5NY+m4sqLUsG2STL22kP9K2n8ATujXoN+N19QAAAAASUVORK5CYII=" style="display: block;"></div>
								<div data-v-679886a1="" data-v-6e2d35de="" class="icon"><img data-v-679886a1="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/f710b0ea16ca629941e92e00e453fd1b.png" alt=""></div>
							</div>
							<div data-v-679886a1="" data-v-6e2d35de="" class="mtext"> This address only supports USDT of recharge TRX </div>
						</div>
						<div data-v-679886a1="" data-v-6e2d35de="" class="valMob">
							<div data-v-679886a1="" data-v-6e2d35de="" class="cname">Deposit Address</div>
							<div data-v-679886a1="" data-v-6e2d35de="" class="inp">
								<div data-v-679886a1="" data-v-6e2d35de="" class="address_text">THvFgAEiAJe5Q3xLoTDPjL2nnCgL2YaVuJ</div>
								<div data-v-679886a1="" data-v-6e2d35de="" class="copy_address"><img data-v-679886a1="" data-v-6e2d35de="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAMFBMVEUAAAAp0ptCRlUo1ZxASFgo0ptDR1Uo0ptCRlZISFgo0ptCRlUqyZc/WF4vr4kwpoUfcbQVAAAACnRSTlMA7+8gIL+/sLAgyb3sXAAAAGxJREFUKM9jAAHmwFVQsNwALGC4Cg6EwQJVCIGlYIFVCLAQXWAVOQKcSbt3owhM2o0m0I0usHswC5xCF3iF4C8HC9xBCmSwwN5fML6oAVAAAUCBRY6ANrpANoK/AyzghBBQAQuwdMP4ag4gPgDsiytjL3zauAAAAABJRU5ErkJggg==" alt=""></div>
							</div>
						</div>
						<div data-v-679886a1="" data-v-6e2d35de="" class="itemBox">
							<div data-v-58b133cc="" data-v-679886a1="" class="tips">
								<div data-v-58b133cc="" class="n">Recharge Precautions</div>
								<div data-v-58b133cc="" class="p">
									<ol>
										<li>After clicking "Recharge," the system will default to displaying the USDT-TRC20 recharge address.<br> <br> <span style="color:#2ecc71"><strong>Select Recharge Method</strong></span><br> Click the "Recharge" button to choose different types of USDT recharge methods (e.g., USDT-ERC20 or USDT-TRC20).<br> <br> <span style="color:#2ecc71"><strong>Copy Address or Save QR Code</strong></span><br> Copy the corresponding recharge address or save the recharge QR code to your device. Please carefully verify the address information before proceeding with the recharge.<br> <br> <span style="color:#2ecc71"><strong>Arrival Time</strong></span><br> The recharge arrival time depends on the blockchain network status. It may be delayed due to network congestion or other factors. Please be patient and monitor the transaction status on the blockchain.<br> &nbsp;</li>
									</ol>
									<p><span style="color:#2ecc71">【Other Notes】</span></p>
									<ol>
										<li>Before recharging, please confirm that your wallet supports the selected recharge method.</li>
										<li>If you encounter any recharge issues, promptly contact the platform's customer service and provide relevant recharge records for verification and assistance.</li>
										<li>Keep your recharge address and QR code information secure.<br> <br> <br> &nbsp;</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<div class="van-overlay" style="z-index: 2003; display: none;"></div>
					<div data-v-28f4094c="" data-v-679886a1="" class="popup van-popup van-popup--round van-popup--bottom" style="z-index: 2004; display: none;">
						<div data-v-28f4094c="" class="popup-head">Select Network</div>
						<div data-v-28f4094c="" class="popup-con">
							<div data-v-28f4094c="" class="coins">
								<div data-v-28f4094c="" class="van-tabs van-tabs--line">
									<div class="van-tabs__wrap">
										<div role="tablist" class="van-tabs__nav van-tabs__nav--line">
											<div role="tab" class="van-tab van-tab--active" aria-selected="true"><span class="van-tab__text van-tab__text--ellipsis"><img data-v-28f4094c="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/f710b0ea16ca629941e92e00e453fd1b.png"> USDT </span></div>
											<div role="tab" class="van-tab"><span class="van-tab__text van-tab__text--ellipsis"><img data-v-28f4094c="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250304/25238895fe72584151601965045fd289.png"> USDC </span></div>
											<div class="van-tabs__line" style="transform: translateX(49px) translateX(-50%); transition-duration: 0.3s;"></div>
										</div>
									</div>
									<div class="van-tabs__content">
										<div data-v-28f4094c="" role="tabpanel" class="van-tab__pane" style="">
											<div data-v-28f4094c="" class="chains">
												<div data-v-28f4094c="" class="item on">
													<div data-v-28f4094c="" class="item-left"><img data-v-28f4094c="" src="https://tux-all.s3.ap-southeast-1.amazonaws.com/upload/20240723/bcabd0a39b535b0c04e14dc6b5f16bdd.png"></div>
													<div data-v-28f4094c="" class="item-right">
														<h2 data-v-28f4094c="">TRON(TRC20)</h2>
														<div data-v-28f4094c="" class="text">
															<p data-v-28f4094c=""> Estimated Arrival Time ≈ 8 minutes </p>
															<p data-v-28f4094c=""> Minimum Deposit≥ 1 USDT </p>
														</div>
													</div>
													<div data-v-28f4094c="" class="check"><img data-v-28f4094c="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAoCAYAAABjPNNTAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOFSURBVHgBzZnPaxNBFMffbFKF0kJoFQoVuxVRPDW29QeCNHvzIhaPXppeKiJtLf4BjX9AKbWI2EvTf0AQr8Ju6cUfJaQg+AOVLXgpKtS2F226z/c22bibX7ub7Cb5QJjZySz73Tczb968FVAnV9Wn8l84HBdCGgLAOALGqFm2ddEFCF0IkUUD17uhS9OUyV2oA+Gnc0Jdje3BfpIefItEJcAnAqS0QFzbVKY1f/d5ZHh9eR4QH1A1Bg1CFtY6MDr5Wrmne+vvwiX1SdwQxipZLg5BI0QqMzb9yLVbrT9H1pdnETEFAVivBvox7FBqWbWqyMLwpqA51BRaUWSTBVpUFVomclh9nKTWVWgNuoFHF7PKnMNVSfYL9n0kcBFahxwRHWXPd4g8FDnuEOYicQXBSI6qywl7W1EkDzO5mXFoAwyBjun235IC5qF9kM21UcAUWTCvDG0Ebb0TVt0UibaGMLnTH4eVodtwd+CKa1+ODay5Gc03GKHPRRY2JV826yOxfhYBK9tva95jgJGgQpMKakNd0XaBFjf7LrjeR2HgGJeSEUbgYKOSQEb79c31XiuooeFG2U9YyfOKrfDp4AcsfN2A/dwf8Cvw5c4HWPiyAR6IxdVFOUomHeD54QUW9/DsdbN+rusEnO86CVNbzysKrSUw9fEVeCUKUZlXt+f5mOg947hmobxau6PHIQyBFpKfzpu/v5e1lQoNWiAT6Zu4oZDj9LR43u/tmNN3NHbK0d57rBOu9QzAYGcPJE+PQJAC6aixFqVn+jrBreh531bqkNmi/AtSIJODnE7DLXTwCQt9tv3GtV+jAhmKLXUpAhEN6sBNaBAC+VTJpfROuZ8Fn0NuUU1oEAIZRGOLy3yAgfgC6qRUaFACGdq701yaWw3v3xRoqtAA1qL5fPATAkLPJGYGuWJaktMe1vjXC4sLUCBv3MWkQdGZC1tjG6BnlJm0dVEUGYQ1A6PEYI5t8Qhzk1DnSg+QtN2KjEMkO056izloHZwcKHt+WYBhvgViK+YnC1RKsxdM9YSVupSi+L1Zx1xLoF7pz6qhWkaZTTVj6GmxZmsJzPdxgcN3SUTY0csQNIhLtKukKg2xHe/p6Hy2jYdfhgZhV8d+2Wvu3Fdin6wakyBCXxzEbB3p6d2CuKXQEvulmNMAIgn+EkGXMpqnTsd5iT+RZCmS2aavDtoR5DS3Ya3GPxj6fpXGuuLNAAAAAElFTkSuQmCC" alt=""></div>
												</div>
											</div><button data-v-28f4094c="" class="btn2"> Confirm </button>
										</div>
										<div data-v-28f4094c="" role="tabpanel" class="van-tab__pane" style="display: none;">
											<div data-v-28f4094c="" class="chains">
												<div data-v-28f4094c="" class="item">
													<div data-v-28f4094c="" class="item-left"><img data-v-28f4094c="" src="https://tux-all.s3.ap-southeast-1.amazonaws.com/upload/20240723/284411f22a828b42a327a5a8586fae88.png"></div>
													<div data-v-28f4094c="" class="item-right">
														<h2 data-v-28f4094c="">BNB SMART CHAIN(BEP20)</h2>
														<div data-v-28f4094c="" class="text">
															<p data-v-28f4094c=""> Estimated Arrival Time ≈ 1 minutes </p>
															<p data-v-28f4094c=""> Minimum Deposit≥ 1 USDC </p>
														</div>
													</div><!---->
												</div>
											</div><button data-v-28f4094c="" class="btn2"> Confirm </button>
										</div>
									</div>
								</div>
							</div>
						</div><i role="button" tabindex="0" class="van-icon van-icon-cross van-popup__close-icon van-popup__close-icon--top-right"><!----></i>
					</div>
				</div>
			</div>
			<div data-v-6e2d35de="" class="footer"></div>
		</div>
		<div data-v-a7d12cfc="" class="global-loading default" style="display: none;">
			<div data-v-a7d12cfc="" class="global-spinner"><img data-v-a7d12cfc="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAArCAYAAAADgWq5AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF6WlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMi0wNC0xMlQxNTo0MTowNiswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NWU0ZGQwNmEtMWExNS1kYjRmLTkyZmQtZjIzNTAwNzJkMGNmIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjlGMTI0NjE1NTQzQzExRThCQzhCQzEyQjVDOUMzOEJGIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OUYxMjQ2MTU1NDNDMTFFOEJDOEJDMTJCNUM5QzM4QkYiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo5RjEyNDYxMjU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5RjEyNDYxMzU0M0MxMUU4QkM4QkMxMkI1QzlDMzhCRiIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1ZTRkZDA2YS0xYTE1LWRiNGYtOTJmZC1mMjM1MDA3MmQwY2YiIHN0RXZ0OndoZW49IjIwMjItMDQtMTJUMTU6NDM6MTQrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+hddYGwAABHhJREFUWIXN2XuoFVUUx/HPXG9WmmIPJQtNwQwqe5paEI1pCBZCRvVXDwlKCsLpIURgIZZG1KEXRVJJWPRnIv3TAw/0UCsrUlBLLQ1T01Ip6eZr+mPPOHOP56jXcz3XHxzu3nv2nv29a/bstdaeyJIXdYOG4bLs77k4AzvQFyvxKw7gJ/xZHpjGSZcmam8Csg/uxU0Yi8HHMGYz1uAtfIh/uzrp8QBPwFO4HgfR1oWx52e/CViX3ef9rkwedWFJXIQncE+da7uwHcuwF1uQClbvi1G4tMF9V+GuNE5+6C7gUzANT2Joqb0Dm/A6XsO+I9yjD/7DaMzArTi1ps/iNE6mNAvcjqfxKE4rtS/BXHxytAnqqBcuwHQ8XnNtP0amcfJLo8FHWn/98QIeK8Fuw3W48ThhCbvFBsxEhMWla+3YEFUrfbsKfDpewcOKR/e5sBssPU7QusqWwTTBurlWN+rfCHg67i7V3xasurFZwHpK42QBxmFP1jQkqlbW1utbD3g0ygt7Fe7T2QLdrjROVmBSqWlkVK28WtuvHvB7pfImXNvNbA2VxsmXeKnU9FBUrVxT7lMLHGNkVt6JO/DPiQKspzROZuC3UtM7UbVyiLMMPBDzSvWFWHFC6RprrLCbwCU4ZOUy8G24OivvxCwneN02UhonWwSD5Xo3L5SBpypii/mCu+1JzRHcOwyPqpVhFMD9MSYr78OnLUWrozRO1gk7FCE8mEwBPE7hzVbiu5bSNdabpfKkqFqJcuCr0Dsrr1ETZPegPiiVJ6dxkubAQwW/TohTTxa1K4x3IKpWLmwToqfhWWMqpDEnhdI42SrENYSYpqNN2O+uyBojfN16tPqKqpV2fJNVD+LK3MJbS/0GtRqskdI42Y+zsmob/moTlkHuVQ7qHKifDCpnJtvbBMg8XmjD2S1HaqCoWhmgCDl3o1e+S3xf6tey6OwY1K4IxrZhcw68rNRpjJNHA4WsG7ancbI7B/5CcagxCv1aTVarLKS8OaumAuMh17xFsVb64YaW0tVXO27PyvuxiAL4oJC35Xq+dVwNdbEiDv5btmzL4eXcUnmEwpn0lGYpwoVFaZykdAbeJZziEB7HG0JY13JF1crlyE+BdmQsODynm60ImkcIS6WliqqVQXhO8MCEg5Yf8+u1wFvxANbjfoUHbImiaqU3XsbErGkf5qRx0pH3qXfcOj/79YSeFXaG3JAz0zjZUO7QzIF2tymLyp7BI4oXbYVg7U7qceCoWhmKBRhfal6NKWmcHPYOdeX0/EQoxkc6wy7FxDROfq83oKcsfIvw+MfXtC8VLLuj0cBmgXsLb/RIfCVkK72FrXGfELjsEXLGFHcK580DdI5zd2F2GieVo03YLPCDwqF3nmr1Ek6N1grfN7Zn/8xenNPgHsuFbxw/H8uEzQLvVLwH+UZ/pnDOQfg0UKsD2biPMS+Nk5VdmbBZ4IVCVjtVyAXPE2LYsjqEtGs9vhWCrM8cp1NqFviA4OdzXz9ESLcGC+Abhe9yy4Vk8o8m5/M/9rYMi48jzWIAAAAASUVORK5CYII=" alt=""></div>
		</div>
	</div>
	<script src="/js1743475952730/core-js.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/vue.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/vant.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/crypto-js.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/axios.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/compressorjs.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/vendors~app.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script src="/js1743475952730/app.fe8857a9.1743475952730.js?v=1743475952730"></script>
	<script>
		window.onload = function() {
			// 禁用双指放大
			document.addEventListener("touchstart", function(event) {
				if (event.touches.length > 1) {
					event.preventDefault();
				}
			});
			// 禁用双击放大
			let lastTouchEnd = 0;
			document.addEventListener(
				"touchend",
				function(event) {
					const now = new Date().getTime();
					if (now - lastTouchEnd <= 300) {
						event.preventDefault();
					}
					lastTouchEnd = now;
				},
				false
			);
			document.addEventListener("gesturestart", function(event) {
				event.preventDefault();
			});
		};
	</script><!---->
</body>

</html>
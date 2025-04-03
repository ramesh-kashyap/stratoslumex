<html class="pc" style="font-size: 50px;">

<head>
  <meta charset="utf-8">
  <title>Strategy</title>
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="expires" content="0">
  <meta name="viewport"
    content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="full-screen" content="true">
  <meta name="x5-fullscreen" content="true">
  <meta name="360-fullscreen" content="true">
  <meta name="renderer" content="webkit">
  <meta name="robots" content="noindex, nofollow">
  <link rel="manifest" href="/manifest.json">
  <script>window.addEventListener("error", function (event) {
      if (event.message.indexOf("Unexpected token '<'") > -1) {
        location.reload();
      }
    });
    if ("standalone" in window.navigator && window.navigator.standalone) {
      var noddy,
        remotes = false;
      document.addEventListener(
        "click",
        function (event) {
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
    }</script>
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
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-6f896b4e.5bb66763.css">
  <script charset="utf-8" src="/js1743475952730/chunk-6f896b4e.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
  <script charset="utf-8" src="/js1743475952730/chunk-5576a184.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60c8a75a.d6f6b692.css">
  <script charset="utf-8" src="/js1743475952730/chunk-60c8a75a.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-a7d8f170.c87a4291.css">
  <script charset="utf-8" src="/js1743475952730/chunk-a7d8f170.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-67912ed2.ae8d438d.css">
  <script charset="utf-8" src="/js1743475952730/chunk-67912ed2.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bcc45786.50818f65.css">
  <script charset="utf-8" src="/js1743475952730/chunk-bcc45786.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-00b1464f.674dbd13.css">
  <script charset="utf-8" src="/js1743475952730/chunk-00b1464f.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-7f362702.6a53b834.css">
  <script charset="utf-8" src="/js1743475952730/chunk-7f362702.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <script charset="utf-8" src="/js1743475952730/echarts.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <script charset="utf-8" src="/js1743475952730/chunk-0119f9da.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-0b116a05.250ed6be.css">
  <script charset="utf-8" src="/js1743475952730/chunk-0b116a05.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-353b28dc.5ad553f6.css">
  <script charset="utf-8" src="/js1743475952730/chunk-353b28dc.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <script charset="utf-8" src="/js1743475952730/chunk-5b5516a4.fe8857a9.1743475952730.js?v=1743475952730"></script>
  <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bb17762c.89cc2aa3.css">
  <script charset="utf-8" src="/js1743475952730/chunk-bb17762c.fe8857a9.1743475952730.js?v=1743475952730"></script>
</head>

<body class="mein_cn">
  <div id="app" class="applang">
    <div data-v-6e2d35de="" data-v-427eef2e="" class="page"><img data-v-427eef2e="" data-v-6e2d35de=""
        src="{{asset('')}}static/img/bg-top.9f7cb278.png" alt="" class="head_bg">
      <div data-v-6e2d35de="" class="headers">
        <div data-v-b73557e2="" data-v-427eef2e="" class="head" data-v-6e2d35de="">
          <div data-v-b73557e2="" class="safe"></div>
          <div data-v-b73557e2="" class="container flex">
            <div data-v-b73557e2="" class="back"><img data-v-b73557e2=""
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEeSURBVHgB7Ze9DcIwEIWf+W1ZgQ0oWIBJYBMoqekoEUJsQAsFA7ACYgCYAHNWbBGO2ICVEBf3SU9Ozufk6ZzYCSAIQrVorQekMVLEmrvqjLRMMnO6KpMNRGDMUbMn9VhXH3XjqZxhhroRc7GIuVjEXCwpmVM8oP2L8JI0R7a4N1lbFGtG5Lrji1LqYG7a+tLchrQjDUkdUteqE2iL8nif71pb0gHIbXUBcyvS2qTYc1d1nctRuXOeB0++r++FX/ZixY7VhxvowHgeU54xzymmOT9RFUd4r6L5QrmTFqQ2smekbcc6uXhRjOeG5HKP8BF4g6dIBTFZFmKyLMRkWYjJsvinyaj/YrMtUmO2xRvrOiMlWCUnSBFrcgJBEOrhAfmtScdij3WYAAAAAElFTkSuQmCC"
                alt=""></div><!----><!----><!---->
            <div data-v-b73557e2="" class="name tac"> Strategic trading </div><!----><!----><!---->
            <div data-v-b73557e2="" class="flex1"></div><!----><!----><!----><!----><!---->
            <div data-v-b73557e2="" class="head_right"><img data-v-427eef2e="" data-v-b73557e2=""
                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAAOVBMVEUAAAD///////////////////////////////////////////////////////////////////////8KOjVvAAAAEnRSTlMA30Ag73AQz59gf7+QUDCwoI/U2H/IAAABWElEQVQ4y7VUQYLDIAhcFcVEk7T+/7ErWhaidnsqJwMDw0wSf74dzkcDpQBe3v0D21JRgdsbmDVlCLOChmerQfSHtdY/etczTMsh5ZNVBI821A04Q0l7T55mQgZKPSaakEmTTtN++0rgTnsqW+pjFsZts39TaFHZqBIbLh14kxuopgeewtUDWXw9s511RmT1zcpsVDVV17goa+TuR4BSLjWyW+TVFuk1PKtcbfLtcFFRtthfuaSE9zpyR5sObvBLGEE75ULHUQMbVh/aQbRIpQD5JWqWQAddugYy9aGBkf1gIFMbFjNYpMSglq/f/D4wXNwBtwmYhFkzulFNkKO8QnntMhGMuzOjfGZ6JN53PKFsw4crXxBVBIl6DS384PFz5Hc/19gScHkrhMjtwwVwzpfRGlmiVbBEmRkZckub6K21h4/QYavlN1PWMcvc8CNSruYLYYX8QvwC0IwcS/jNkO0AAAAASUVORK5CYII="
                alt="" class="headRight"></div>
          </div>
          <div data-v-b73557e2=""><!----></div>
        </div>
      </div>
      <div data-v-6e2d35de="" id="scroll" class="content-container">
        <div data-v-6e2d35de="" id="content" class="content-scroll">
          <div data-v-427eef2e="" data-v-6e2d35de="" class="main">
            <div data-v-427eef2e="" data-v-6e2d35de="" class="container">
              <ul data-v-73226123="" data-v-427eef2e="" class="info-com" data-v-6e2d35de="">
                <li data-v-73226123="">
                  <div data-v-73226123="" class="title">My level</div>
                  <div data-v-73226123="" class="val"><img data-v-73226123="" src="{{asset('')}}static/img/V0_icon.69de7dcc.png"
                      alt="">G0 </div>
                </li>
                <li data-v-73226123="">
                  <div data-v-73226123="" class="title">Wallet balance(USDT)</div>
                  <div data-v-73226123="" class="val">202.43</div>
                </li>
                <li data-v-73226123="">
                  <div data-v-73226123="" class="title">Available funds</div>
                  <div data-v-73226123="" class="val">200</div>
                </li>
                <li data-v-73226123="" class="on">
                  <div data-v-73226123="" class="title">Today's earnings</div>
                  <div data-v-73226123="" class="val">0</div>
                </li>
                <li data-v-73226123="">
                  <div data-v-73226123="" class="title">Cumulative Income</div>
                  <div data-v-73226123="" class="val">2.43</div>
                </li>
                <li data-v-73226123="">
                  <div data-v-73226123="" class="title">Team benefits(USDT)</div>
                  <div data-v-73226123="" class="val">0</div>
                </li>
              </ul>
              <ul data-v-427eef2e="" data-v-6e2d35de="" class="tab flex">
                <li data-v-427eef2e="" data-v-6e2d35de="" class="on"> Strategy </li>
                <li data-v-427eef2e="" data-v-6e2d35de="" class=""> Today </li>
                <li data-v-427eef2e="" data-v-6e2d35de="" class=""> Bill </li>
              </ul>
              <div data-v-427eef2e="" data-v-6e2d35de="" class="select-level-tab">
                <div data-v-427eef2e="" data-v-6e2d35de="" class="ico"><img data-v-427eef2e="" data-v-6e2d35de=""
                    src="{{asset('')}}static/img/V0_icon.69de7dcc.png" alt=""></div>
                <div data-v-427eef2e="" data-v-6e2d35de="" class="flex1">
                  <div data-v-427eef2e="" data-v-6e2d35de="" class="title">G0</div>
                  <div data-v-427eef2e="" data-v-6e2d35de="" class="rate">1.20%-1.50% </div>
                </div>
                <div data-v-427eef2e="" data-v-6e2d35de="" class="val"> 0-200 USDT </div><i data-v-427eef2e=""
                  data-v-6e2d35de="" class="van-icon van-icon-arrow"><!----></i>
              </div>
              <div data-v-427eef2e="" data-v-6e2d35de="" class="btns">
                <div data-v-c95fb5c2="" data-v-427eef2e="" class="btn_box" data-v-6e2d35de="">
                  <div data-v-c95fb5c2="" class="btn submit"> Trading without appointment </div>
                </div>
              </div><!---->
              <div data-v-4dc539c5="" data-v-427eef2e="" class="list" data-v-6e2d35de="">
                <div data-v-4dc539c5=""
                  class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                  <div class="swiper-wrapper" style="height: 236px; transform: translate3d(0px, 0px, 0px);">
                    <div data-v-4dc539c5="" class="swiper-slide swiper-slide-active" style="width: 431px;">
                      <div data-v-4dc539c5="" class="list-item">
                        <div data-v-4dc539c5="" class="cname">
                          <div data-v-4dc539c5="" class="ico"><img data-v-4dc539c5=""
                              src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250314/10fe269767ca7ce52db7e712a2594139.png"
                              alt=""><img data-v-4dc539c5=""
                              src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250314/786be6bda5165fd7d883eb3eefde3a42.png"
                              alt=""></div>
                          <div data-v-4dc539c5="" class="title">ETH-BNB</div>
                        </div><svg data-v-4dc539c5="" width="100%" height="25%" viewBox="0 0 300 75">
                          <defs>
                            <linearGradient id="vue-trend-121" x1="0" y1="1" x2="0" y2="0">
                              <stop offset="0" stop-color="#32C092"></stop>
                              <stop offset="0.5" stop-color="#32C092"></stop>
                              <stop offset="1" stop-color="#32C092"></stop>
                            </linearGradient>
                          </defs>
                          <path
                            d="M8 66.99015994335244L19.314789776136823 37.96983542762018S22.94736842105263 28.65294901699449 29.195767179290016 20.845419769014853L31.646338083867875 17.78337063418391S37.89473684210526 9.975841386204273 44.34797696048551 17.614931120886517L47.23767767466015 21.035644228877324S52.8421052631579 27.669943352215853 60.315789473684205 23.2464178607131L60.315789473684205 23.2464178607131S67.78947368421052 18.822892369210344 74.39055467439005 24.466407516149836L76.13576111508364 25.958450864389796S82.73684210526316 31.60196601132929 90.21052631578948 27.178440519826534L90.21052631578948 27.178440519826534S97.6842105263158 22.75491502832378 102.62212561048946 29.899180426119077L106.94579726508854 36.15474725277092S112.63157894736842 44.381039653448795 119.75065406587764 37.35830731788146L120.45987224991184 36.65868701733991S127.57894736842105 29.635954681772574 134.2457402814155 37.089401686699034L136.89625919060038 40.05267090519525S142.5263157894737 46.347050983005516 150 42.41502832389208L150.00000000000003 42.41502832389208S157.47368421052633 38.483005664778645 163.29128410456818 44.60446703795549L165.5321816117038 46.962409794594365S172.42105263157896 54.21109630123294 179.77778716168362 47.437732509617604L180.01168652252693 47.22238078595069S187.3684210526316 40.44901699433536 194.72515558273625 47.22238078595069L195.92670659354474 48.328651792072364S202.31578947368422 54.21109630123294 209.78947368421052 49.787570809730184L209.78947368421052 49.787570809730184S217.26315789473685 45.36404531822743 223.86423888491626 51.007560465167074L225.60944532560995 52.499603813407205S232.21052631578948 58.14311896034694 239.68421052631578 53.719593468843904L239.68421052631578 53.719593468843904S247.1578947368421 49.29606797734087 253.9753393562886 54.676215030482425L255.92940762618133 56.218314047159794S262.10526315789474 61.09213595468174 269.57894736842104 58.6346217927357L269.57894736842104 58.6346217927357S277.0526315789474 56.17710763078966 279.3843548379625 48.66322726321634L292 8.009840056647551"
                            fill="none" stroke="url(#vue-trend-121)"
                            style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 381.001, 381.001; stroke-dashoffset: 0;">
                          </path>
                        </svg>
                        <ul data-v-4dc539c5="">
                          <li data-v-4dc539c5="" class="flex">
                            <div data-v-4dc539c5="" class="title">Transaction Amount</div>
                            <div data-v-4dc539c5="" class="val">0 USDT</div>
                          </li>
                          <li data-v-4dc539c5="" class="flex">
                            <div data-v-4dc539c5="" class="title">Rate of return</div>
                            <div data-v-4dc539c5="" class="val">1.2%-1.5%</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div data-v-4dc539c5="">
                  <div data-v-4dc539c5="" class="swiper-prev my-button-disabled" tabindex="0" role="button"
                    aria-label="Previous slide" aria-disabled="true" style="display: none;"><img data-v-4dc539c5=""
                      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAMAAACdt4HsAAAAxlBMVEUAAABVVVlTU1dYWFhWVllSUVRSUVRUVFdUU1dVVFdSUlRUU1dQUFBQUFhVVVpSUVRTU1ZWVlpXV1lVVFZQUFBWVlhSUVRTU1ZUVFlUVFonJikrKy8sLDAoJyoqKi7///8pKCtSUVQqKSxVVVlWVllTU1Y2NTkyMTVGRklQUFMwMDNCQkU/PkJNTE85OTzl5eVLS048Oz+VlZdPTlGwsLGIiIpISExHR0ry8vLY2NjKysvx8fG9vb57e33X19eioqR5eHpubnE+vFK4AAAAGnRSTlMA348g7+/fz2Cvf0AQIJ+fv39wUCCAcG9wgNK0k0kAAARfSURBVFjDlVdpY9owDA2BlhRG1667cRyM7ZyQQemx+/j/f2qWXVt2EsqmtkA/vJenJ8nI0bEYJ/HFdMSFEKPpxfXNOPqvmMfnjEkVXNgYXc7/Ff1idsYYO5SbtqjpkpAib5ud5FyMkvG/wSWr9sXHj+lqvQYCHcu8qYSYxCcp3qmnPxYfFTwFgiUllmFJ8x3no+RZ+OKKsRLgEOlaETgFOuoHRTF+9vHbIjVwmwIK0CT7ik9eHcPHjG1WIN4RoAQAU/inLjm/Hsa/lFULwECBIyBAoGPDxeUQfsqqOrXYfgrq10ZR8enA89l26Z5tq4AKQAAogD9SV30NM8CnBq4CPmoPEA9YG7UUccd/Jmv7ePRgtabUJ9BOEJ0F50EtFmesdbgUCWwKyGC92PCJ3w/nrMFHIxMQkNCDpZXRiCvEJ76B7l3hvRRsEeDdGIlJLM5l7uOxlVEBwu2HnE9euA4sERaWEYfBwrEaO37tHCSpRWKEKVg4thNKSFAAEnSrgDhMZieun0pQHCcAvHzE1L0XkosJ4OdsG2SfdhXcZdm9kkB1IwRZSD7XQ7h5wqUWDi+ulW+zLPuCIKJ5TFINj00GaagdFdA1vc9U3FkTqH63QnIxiqLX8mDFh61splEC/lOJuVPfRynG0Q3WoNMI4EH5SeE/A97MgXYBc3ngiZrjvUb0ORRBDniwED3wy0AaNdUXLPfhyAUKvgP+NpwFX8KeX0RTViAmrOfqFvDfAY9DFMgo+FQVYdlXb97utYEtaCWIN3WEHyAYRYwBoguHwlZPBdBhoD0hggMBik59iq9AwIgvoGclR4JeL6dA8FlqdJeBGgYk0K3Y7eXqm04B0GhBJ7gAEwE+ICP9ncEYtNYE14RoZ61MnEriIzEDW8a7wAKoAHVicj6FRsLMDRSH6Q4bKfCOEDNYrWqkmG0C9fBjcoJW/gkMPwY9NPP8JkpYc6SVV2s7TDJ0D7Xs+E20YAdsA4vGcWamFIEL1DHAOKsy1EMlsKfyD0jiK/FmGD/mfKS/FfY9A/FM7B5pQS0bcakP1YNrfwxvwfiVZX+06/jVYrqAVlwvn2dwrPfQ/rHeElc7NNBkADGTZYgd3NL6nUx2IjG7qZaQhpNkPdCjD0F7X461WxFm7LGvIA23NFcG5HmAbwWU0Av0wITF4XmIO+tbuV2HpewTYBmpSaDi3tp8hQOBsdIEJgdzBvpRqhJgvNZLVupP1LACMDNYslwS7FD3TmWFdwTBeU5hzXvfXbQPxCV/asGgyoAPQ6tu6lZVeA0XTd0PuCxfDi3bWwK44TIimtJc4rIdamBtfxodmtgSbmT/+bYjWbN8dskCnoZDBw7HW3Xlye25hMPkb3o5G7zy4M6qRBBcNLubKtzbrp6/+SXncO3zGwkfn+8En7yPTsTr+Iyx7abuNlKuvBOTN7CbnqQAFawq93lBgKAo9s2DFALhp2P+0l2+OVdQ9TeK59F/xeJmpq7/kuvrf3z82v0XzBlpna+fUZ4AAAAASUVORK5CYII="
                      alt=""></div>
                  <div data-v-4dc539c5="" class="swiper-next my-button-disabled" tabindex="0" role="button"
                    aria-label="Next slide" aria-disabled="true" style="display: none;"><img data-v-4dc539c5=""
                      src="data:image/png;base64,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"
                      alt=""></div>
                </div>
              </div><!---->
            </div>
          </div><!---->
          <div data-v-22717aba="" data-v-427eef2e="" data-v-6e2d35de=""></div>
          <div data-v-11b54ad9="" data-v-427eef2e="" info="[object Object]" data-v-6e2d35de=""></div>
          <div data-v-52c6a81e="" data-v-427eef2e="" data-v-6e2d35de=""></div><!---->
        </div>
      </div>

      
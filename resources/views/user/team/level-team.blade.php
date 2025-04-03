<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Team</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-353b28dc.5ad553f6.css">
    <script charset="utf-8" src="/js1743475952730/chunk-353b28dc.fe8857a9.1743475952730.js?v=1743475952730"></script>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bb17762c.89cc2aa3.css">
    <script charset="utf-8" src="/js1743475952730/chunk-bb17762c.fe8857a9.1743475952730.js?v=1743475952730"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-127dfd5e="" class="home">
            <div data-v-6e2d35de="" data-v-127dfd5e="" class="page"><img data-v-127dfd5e="" data-v-6e2d35de=""
                    src="{{asset('')}}static/img/bg-top.9f7cb278.png" alt="" class="head_bg">
                <div data-v-6e2d35de="" class="headers">
                    <div data-v-b73557e2="" data-v-127dfd5e="" class="head" data-v-6e2d35de="">
                        <div data-v-b73557e2="" class="safe"></div>
                        <div data-v-b73557e2="" class="container flex"><!----><!----><!---->
                            <div data-v-b73557e2="" class="myName"><img data-v-b73557e2=""
                                    src="data:image/png;base64,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"
                                    alt=""></div><!----><!----><!----><!---->
                            <div data-v-b73557e2="" class="flex1"></div>
                            <div data-v-b73557e2="" class="clear"><img data-v-b73557e2=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIoSURBVHgB7VfhVcJADA4+B6gb1A3YwNtAnEA2sBuAE4gTlA3UCQoT4AbtBrhBTOwBaXrttfJ69Affe/e4lu8uaZJLLgBnAhENjTcaOZ6wo5HSiOFSIOGRVcwH5kQQEla5HXbHLqiSWLdcTiOx7jZ2nmtLQghwXCnBa5d1rJXXimtgaGAZ/NJyUQs3UpZcwdDAauwlHfiJ/CAYGn1dZmPyCOiJGxg5Rq9gI6xrMhweHNOzvsrNMTyeXbpMGhTk0xZDWPxMJpM7/fJWv8DyZMbi1RMvhmHAOfTjMCfZU1LyG9oU1KAFnzAgsJp5akn/mmbOxVXBczF6Bb2nmE5ZCheES0F91OcQDp3SjLPkBMKLflEpdVi2ifJSyUl6qCpyQEzD2DnLuqfi4JapLgl7DNCJYdkW7IXcpI2cCWKww4HV5iprIuluzUAgoGoLnJ7D0M1NXb5089JFyC/hXiF/1WggvocpE09bNuKgXtgReYT24ZrGEEPVjHs2Wra64p9cy88E/6/JPyRqI3jvnn0exbxPGnrowNmKeVkwHKaNm1Zjz5OOXU5nlR/p/dmCMt42lMWLlj2MmHOTs2nhgv1fVoWZh89c2ZNMdS32uUy6dwvd8CXmXdxcLXOtp0cBq7lqDh2Aqnx6uLUQumU30KSAU6uZ0vMr/RZqPYdCpDY04Ie0SGQ/rHDweP+FeC6OIUSLZjg+zEFZY4njgftGg2UM8M1ij+HBMlNUVewXACe9O4d20nIAAAAASUVORK5CYII=">
                            </div>
                            <div data-v-b73557e2="" class="notice" style="margin-left: 0rem; margin-right: 0.32rem;">
                                <img data-v-b73557e2=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGWSURBVHgB7ZiNTcMwEIVfKgZghGwQNiAjZAO6AWxA2YANChOEDZoNYINkg3SD40ws4bpu6t/IlfJJp7ZpfH6+81knA5EgopJtZOvZHpAbLOqD/tkjEgUCYCH3/FGzPbI1bKX8a2D7ZPth64qiOGJJWFjNdiB7WjEGqRF7y1GYzkHsVaSAHT/LIjAhnn/LSLVSyDgj9BUxEQ4viNrRTOpoirgonj6ZyAvi3mkqEFsfJZ1WeRyR7GBriFoDT6Q/PfVP8EGuutfEBR/AMu2j5tc6G6qjvbbSF0TCkBm3g11Gz9+B3RytNod9FA3RKxEZQxB2LoP7lNFT5lGj2NsO0lfmXbUWczXXMrUxjNMrtUM6Ou13rb9wTeCQshORvgfl0VmhbDDPgPSoAXAWuASzGcpB4CyrwFBWgaGsAkNZBYayCgzlTrbaas9XKd9Fb7hFWtQGoVLmO3K381WIrhanAnOiEwIJGSP24BvyJWdtN4L3DStNt1ql5et/FYmloPOrCxu8rk58D+oa7lRYCppuqHqH6I3keX3yCwvp/H0GI4TUAAAAAElFTkSuQmCC"
                                    alt=""><span data-v-b73557e2=""> 1 </span></div>
                            <div data-v-b73557e2="" class="lang"><img data-v-b73557e2=""
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANtSURBVHgBxVmBcdswDIRzHUCdoOwE9QZlNsgI2iDpBM4GdieQO0GzAd0J5E5AZQJ5A5QIqRqCQFmylcvf4SSLJPAEQRKkV3AlENGGxzrI9/QskhBOQZokf4McVqvVAd4bgVQRZBOkxfnwQaogBpZGIrbF5VAtRjQoesRpHnNBHoLYIPWE+j5ICbcAda+1CoG90navdMAr+rYwFxiH1CnEnlMZN+RHdNTCY0XSIUH1ijkEpYdIuUllpSgzI3qsqFum7waH3nQwBTgcVsd7J8hXE/Q5jQTqo7S9pKwc61X4vRblFi4TtGNtFJJPOUXS7R5FXITfO14OEyH0PosyGdMtavGIcW3iMEodGfQuPT0O0c12J8pdxjl8KdtqFVDrJcYh2uBwKG4BEadYXzM7cnYXOe95jG4vFyaFI2TLZJN78c1Jqy5GwsMkvof0biAPSgZegrxCTAhOSSRMkm9BLJyTCQ1N0tF59RQSjM/aLNPgsR9HLzAT2N9ZpL4c7F3qWQ6HIPehJ19TDzscYT4a/p503gf5NdJmTT37jXpcWF4T+zO4hJnA/hrrRZnJePRF29ZoKArFAA9gCzOBMdNRCbI6e8HFS8P1iAG8kWAv1kfqOVatpRjk3voBH4+f7L24E4XTU573Q2+5uhMfHuHjwbe5kyRIcZJLoRr2fqunB4s6xp2EbK+5TSIo17QSWYKawTUEDTcMfXI2PCiJKEWbVyL4B3RlRLJiM7YR5bcQPHXEMGY3JGulzfETjO8KJUSPNuL7F5iPb+zdYH//z+HQJQstnIftmN7HGpMHDhBvDRoQQ5ZQMD3UoQe4nCyQ2O532g4HuViL53Rryvn2Vjg8p1uefT9P1lTI8czK6ByyW5isw+gUy+xsRB3T8y/2zxst6im/Y3V8+l2jfvPgsX8s6FAremVGP1zqcJjRklJ5aOKhcO2haafY9cKuySl6Ej2Rx06Z3Fq4TE62WYtyJ8rLSwp3kiT2D+4u14GMvorVr9l37eC+gylQGnrMX33YET1G8w7qCWoNU4HDi58OGxzGTPbiB5WLANQvQB3OuTxiBnYKSY9DD1dK20rUyc32acM6QrJLHi7h7RyDMbV3E+oT2SdYAhhjZo/LgUZm+eSYEfU4H/8vQOfYXMGVwDh7SShLMUn43xAklHhQOne89m+If/+wcMgdl847AAAAAElFTkSuQmCC"
                                    alt=""></div><!----><!---->
                            <div data-v-b73557e2="" class="head_right"></div>
                        </div>
                        <div data-v-b73557e2=""><!----></div>
                    </div>
                </div>
                <div data-v-6e2d35de="" id="scroll" class="content-container">
                    <div data-v-6e2d35de="" id="content" class="content-scroll">
                        <div data-v-127dfd5e="" data-v-6e2d35de="" class="container rel">
                            <div data-v-5105ae1a="" data-v-127dfd5e="" class="info" data-v-6e2d35de="">
                                <ul data-v-5105ae1a="" class="flex">
                                    <li data-v-5105ae1a="">
                                        <div data-v-5105ae1a="" class="title">Total Income</div>
                                        <div data-v-5105ae1a="" class="val">2.43</div>
                                    </li>
                                    <li data-v-5105ae1a="">
                                        <div data-v-5105ae1a="" class="title">Today's earnings</div>
                                        <div data-v-5105ae1a="" class="val">0</div>
                                    </li>
                                    <li data-v-5105ae1a="">
                                        <div data-v-5105ae1a="" class="title">Cumulative community income</div>
                                        <div data-v-5105ae1a="" class="val">0</div>
                                    </li>
                                    <li data-v-5105ae1a="">
                                        <div data-v-5105ae1a="" class="title">Today's community income</div>
                                        <div data-v-5105ae1a="" class="val">0</div>
                                    </li>
                                </ul><button data-v-5105ae1a="" class="btn2"> Revenue Record </button>
                            </div>
                            <div data-v-127dfd5e="" data-v-6e2d35de="" class="itemBox">
                                <div data-v-127dfd5e="" data-v-6e2d35de="" class="com-title flex">
                                    <div data-v-127dfd5e="" data-v-6e2d35de="" class="h3">My community</div>
                                    <div data-v-127dfd5e="" data-v-6e2d35de="" class="str"><a href="{{route('user.referral-team')}}">Community List </a><img
                                            data-v-127dfd5e="" data-v-6e2d35de=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAcCAYAAABoMT8aAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAACzSURBVHgB3ZRhDYMwEIWvU1AJlYCESkACEnCwOdicTMLmAAmVAA6OO0ICXPqDV3404SUXSJP3tb3Xlqi2XG6QmaN8vNTfOTcRIjE3vOlHqMTU8VFvQqUzG0iPArxUMpCIMBQSpMYdQP8DwljSMKvQVXkU0htIUTKfGyfzoGs6f0/W2e0WGgQwFDdRYzPmF2J+GvMXMbfGnPjsUc5EpuaAmFO1jrfFHV8BsajjGUjH6ONRRTPkXK97h0/JBwAAAABJRU5ErkJggg=="
                                            alt=""></div>
                                </div>
                                <div data-v-127dfd5e="" data-v-6e2d35de="" class="box">
                                    <div data-v-b96ab108="" data-v-127dfd5e="" data-v-6e2d35de="">
                                        <ul data-v-b96ab108="" class="info">
                                            <li data-v-b96ab108="">
                                                <div data-v-b96ab108="" class="title"><img data-v-b96ab108=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAAwFBMVEUAAAAxzJwxx5cwyZct1p8vzZowz5ou0Z0wyJYwypgv158u0JwwzJkxxJQwyZgvy5kwxZUvy5ku0Jwt1J4wx5Yu054vzJkuz5ot1Z8w0JwxyZcvzJks2KAuz5ovzJks2qExxpUv0Jwq358r2qIyw5Qwx5cr2qIs16Axx5gyw5Mu0ZwvypgywZIt054s2aIuz5syw5Mt1Z0vy5kt1J4uz5svzJku0ZwuzpoxxJQwyJct1p8wypgxxpUs2qIs2KAxwpPdcbCbAAAAMnRSTlMAECDf338gYGBAIN+ff2/+37+QcO/fz6+fQDDv39/fz6+fEO/Pn4+AUEDv7++/r6CQMFPFNDQAAAFzSURBVCjPjZFpc4IwEIaXIGcREKz1bNXed5tDEkD8//+qGzOIPafPF3Z45t3szsJ/sPrL9Grp78vgi4ufpJR1XacEyFBF7rHr73ZaIkMyVZWyrc7do3sj+E0V/vfthJ518mq365uXR0rFQGZUHN4lUqZgCJQaADhCOK28k7Lf1nb1COAWxaGv/0lS7F4UmDdMpbxu103oCGDCu6Q1xA1M6VARAaw497o169reW58K4YLD+QkcsFJVV1EcDygVjjXiOthBbKVUUlHddMr5xoFjyHWl1blOZGeTb2cJfH/628l8J8riyU8qGCTYtCj4YqWvtc4nXWqJRmiHszzkAGPGxmE7akXFLLsLAu91g2Rwy1jZC1s3i8HgrjaYAq9XGovu3IUDOWMsh7DXNPM1OMZ1eNjzHax509xAlVB0x2RlOQYIL7eXQHFMhG80DCmRZwgvttstDFBybiQzsmk8uEX3AiQaLRYnmlOkp7nIAZPzmzX8xQeskjZ/THW1YAAAAABJRU5ErkJggg=="
                                                        alt="">Number of people in the community </div>
                                                <div data-v-b96ab108="" class="val">0</div>
                                                <div data-v-b96ab108="" class="add"> Today's new <span
                                                        data-v-b96ab108="">+0</span></div>
                                            </li>
                                            <li data-v-b96ab108="">
                                                <div data-v-b96ab108="" class="title"><img data-v-b96ab108=""
                                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAMAAABF0y+mAAAARVBMVEUAAAAvy5kvzJowypowz5cwypkvy5kwz58vy5ovy5kvy5kwy5swy5cvy5owypcwy5owzJkwzJowx5cwypowy5kwypUvy5kH521CAAAAFnRSTlMA359gIKCAEM/vsEBAv2C/kFAgMHAwtdP4OwAAANNJREFUKM91kosOwiAMRS0gL2HA5u7/f6pkZcG5ekIgzaEtEB6TlyKErB8SFoxyogt1sdTtza2AP1KeQLoY13QEDAcEr3Uzp+qiE8/6l9Z+REMuYPwIqtkI+cVEhGZ2C+guM8rcPovkow9BSfIJOqUz37iLPNnGDSTpEP/INRMBREqSHoH6oChJhP7ARS7b19yTc2xiTwKTxNO6hGIslCCdtRVkPaogNzDeSGVTavBpF07L1EW6ymRKf8zB3d3KOQmgt/7hTcDGP0rEji9VbiaU1MUHvpkVmo/Der0AAAAASUVORK5CYII="
                                                        alt="">Today's earnings </div>
                                                <div data-v-b96ab108="" class="val">0</div>
                                                <div data-v-b96ab108="" class="add"> Today's new <span
                                                        data-v-b96ab108="">+0</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div data-v-602cab3f="" data-v-127dfd5e="" class="chart_box" data-v-6e2d35de="">
                                        <ul data-v-602cab3f="" class="tab">
                                            <li data-v-602cab3f="" class="on"> Number of people in the community </li>
                                            <li data-v-602cab3f="" class=""> Community income </li>
                                        </ul>
                                        <div data-v-602cab3f="" class="chart-dom">
                                            <div data-v-602cab3f="" id="ChartDom" _echarts_instance_="ec_1743577253040"
                                                style="width: 100%; height: 3rem; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;">
                                                <div
                                                    style="position: relative; width: 365px; height: 150px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                                    <canvas data-zr-dom-id="zr_0" width="410" height="168"
                                                        style="position: absolute; left: 0px; top: 0px; width: 365px; height: 150px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                                </div>
                                                <div class=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-361779d3="" data-v-127dfd5e="" data-v-6e2d35de="">
                                        <div data-v-361779d3="" class="invate-com">
                                            <div data-v-361779d3="" class="com1"> Invite friends </div>
                                            <div data-v-361779d3="" class="com2"> Invite friends and earn coins together
                                            </div>
                                            <div data-v-361779d3="" class="com3"> Go to invite <img data-v-361779d3=""
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAHlBMVEUAAAA0v5MzwJM4v5czwJMywJIzwJMyv5IywJIywJI0qxk+AAAACXRSTlMAIM8Qr9+/MK9o/IQhAAAAdUlEQVQoz63QMQqEQBBE0ZFdjDU0NhAz9QSmHshDGCoozG2FrpIPxlYy8HlM0OmrFbX3hC17s0F+tlssr+A/1gjs17/ClE8FQBcBcIwRAG0RATAoAJICwAGgAHAAKAAcAAoAB0Bs0cXKAEH0NALsfwmwKn28G90HOf4DSvFJAAAAAElFTkSuQmCC"
                                                    alt=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-127dfd5e="" data-v-6e2d35de="" class="itemBox">
                                <div data-v-42e6b7af="" data-v-127dfd5e="" data-v-6e2d35de="">
                                    <ul data-v-42e6b7af="" class="tab flex">
                                        <li data-v-42e6b7af="" class="on">
                                            <div data-v-42e6b7af="" class="name">M1</div><!----><!---->
                                        </li>
                                        <li data-v-42e6b7af="" class=""><!---->
                                            <div data-v-42e6b7af="" class="name">M2</div><!---->
                                        </li>
                                        <li data-v-42e6b7af="" class=""><!----><!---->
                                            <div data-v-42e6b7af="" class="name">M3</div>
                                        </li>
                                    </ul>
                                    <div data-v-42e6b7af="" class="info">
                                        <ul data-v-42e6b7af="">
                                            <li data-v-42e6b7af="">
                                                <div data-v-42e6b7af="" class="title"> Community members</div>
                                                <div data-v-42e6b7af="" class="val">0/0</div>
                                            </li>
                                            <li data-v-42e6b7af="">
                                                <div data-v-42e6b7af="" class="title">Community income</div>
                                                <div data-v-42e6b7af="" class="val">0</div>
                                            </li>
                                            <li data-v-42e6b7af="">
                                                <div data-v-42e6b7af="" class="title">Today's community dynamics</div>
                                                <div data-v-42e6b7af="" class="val">0/0</div>
                                            </li>
                                            <li data-v-42e6b7af="">
                                                <div data-v-42e6b7af="" class="title">Today's community income</div>
                                                <div data-v-42e6b7af="" class="val">0</div>
                                            </li>
                                            <li data-v-42e6b7af="">
                                                <div data-v-42e6b7af="" class="title">Recommendation rewards</div>
                                                <div data-v-42e6b7af="" class="val">0%</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-554f6835="" data-v-127dfd5e="" data-v-6e2d35de=""><!----></div>
                    </div>
                </div>
                
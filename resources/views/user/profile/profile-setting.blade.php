<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Mine</title>
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
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-184f5bd0="" class="page"><img data-v-184f5bd0="" data-v-6e2d35de=""
                src="{{asset('')}}static/img/bg2.png" alt="" class="head_bg">
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-184f5bd0="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex">
                        <div data-v-b73557e2="" class="myName"><img data-v-b73557e2=""
                                src="data:image/png;base64,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"
                                alt=""></div>
                        <div data-v-b73557e2="" class="flex1"></div>
                        <div data-v-b73557e2="" class="clear"><img data-v-b73557e2=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIoSURBVHgB7VfhVcJADA4+B6gb1A3YwNtAnEA2sBuAE4gTlA3UCQoT4AbtBrhBTOwBaXrttfJ69Affe/e4lu8uaZJLLgBnAhENjTcaOZ6wo5HSiOFSIOGRVcwH5kQQEla5HXbHLqiSWLdcTiOx7jZ2nmtLQghwXCnBa5d1rJXXimtgaGAZ/NJyUQs3UpZcwdDAauwlHfiJ/CAYGn1dZmPyCOiJGxg5Rq9gI6xrMhweHNOzvsrNMTyeXbpMGhTk0xZDWPxMJpM7/fJWv8DyZMbi1RMvhmHAOfTjMCfZU1LyG9oU1KAFnzAgsJp5akn/mmbOxVXBczF6Bb2nmE5ZCheES0F91OcQDp3SjLPkBMKLflEpdVi2ifJSyUl6qCpyQEzD2DnLuqfi4JapLgl7DNCJYdkW7IXcpI2cCWKww4HV5iprIuluzUAgoGoLnJ7D0M1NXb5089JFyC/hXiF/1WggvocpE09bNuKgXtgReYT24ZrGEEPVjHs2Wra64p9cy88E/6/JPyRqI3jvnn0exbxPGnrowNmKeVkwHKaNm1Zjz5OOXU5nlR/p/dmCMt42lMWLlj2MmHOTs2nhgv1fVoWZh89c2ZNMdS32uUy6dwvd8CXmXdxcLXOtp0cBq7lqDh2Aqnx6uLUQumU30KSAU6uZ0vMr/RZqPYdCpDY04Ie0SGQ/rHDweP+FeC6OIUSLZjg+zEFZY4njgftGg2UM8M1ij+HBMlNUVewXACe9O4d20nIAAAAASUVORK5CYII=">
                        </div>
                        <div data-v-b73557e2="" class="notice" style="margin-left: 0rem; margin-right: 0.32rem;"><img
                                data-v-b73557e2=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGWSURBVHgB7ZiNTcMwEIVfKgZghGwQNiAjZAO6AWxA2YANChOEDZoNYINkg3SD40ws4bpu6t/IlfJJp7ZpfH6+81knA5EgopJtZOvZHpAbLOqD/tkjEgUCYCH3/FGzPbI1bKX8a2D7ZPth64qiOGJJWFjNdiB7WjEGqRF7y1GYzkHsVaSAHT/LIjAhnn/LSLVSyDgj9BUxEQ4viNrRTOpoirgonj6ZyAvi3mkqEFsfJZ1WeRyR7GBriFoDT6Q/PfVP8EGuutfEBR/AMu2j5tc6G6qjvbbSF0TCkBm3g11Gz9+B3RytNod9FA3RKxEZQxB2LoP7lNFT5lGj2NsO0lfmXbUWczXXMrUxjNMrtUM6Ou13rb9wTeCQshORvgfl0VmhbDDPgPSoAXAWuASzGcpB4CyrwFBWgaGsAkNZBYayCgzlTrbaas9XKd9Fb7hFWtQGoVLmO3K381WIrhanAnOiEwIJGSP24BvyJWdtN4L3DStNt1ql5et/FYmloPOrCxu8rk58D+oa7lRYCppuqHqH6I3keX3yCwvp/H0GI4TUAAAAAElFTkSuQmCC"
                                alt=""><span data-v-b73557e2=""> 1 </span></div>
                        <div data-v-b73557e2="" class="lang"><img data-v-b73557e2=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANtSURBVHgBxVmBcdswDIRzHUCdoOwE9QZlNsgI2iDpBM4GdieQO0GzAd0J5E5AZQJ5A5QIqRqCQFmylcvf4SSLJPAEQRKkV3AlENGGxzrI9/QskhBOQZokf4McVqvVAd4bgVQRZBOkxfnwQaogBpZGIrbF5VAtRjQoesRpHnNBHoLYIPWE+j5ICbcAda+1CoG90navdMAr+rYwFxiH1CnEnlMZN+RHdNTCY0XSIUH1ijkEpYdIuUllpSgzI3qsqFum7waH3nQwBTgcVsd7J8hXE/Q5jQTqo7S9pKwc61X4vRblFi4TtGNtFJJPOUXS7R5FXITfO14OEyH0PosyGdMtavGIcW3iMEodGfQuPT0O0c12J8pdxjl8KdtqFVDrJcYh2uBwKG4BEadYXzM7cnYXOe95jG4vFyaFI2TLZJN78c1Jqy5GwsMkvof0biAPSgZegrxCTAhOSSRMkm9BLJyTCQ1N0tF59RQSjM/aLNPgsR9HLzAT2N9ZpL4c7F3qWQ6HIPehJ19TDzscYT4a/p503gf5NdJmTT37jXpcWF4T+zO4hJnA/hrrRZnJePRF29ZoKArFAA9gCzOBMdNRCbI6e8HFS8P1iAG8kWAv1kfqOVatpRjk3voBH4+f7L24E4XTU573Q2+5uhMfHuHjwbe5kyRIcZJLoRr2fqunB4s6xp2EbK+5TSIo17QSWYKawTUEDTcMfXI2PCiJKEWbVyL4B3RlRLJiM7YR5bcQPHXEMGY3JGulzfETjO8KJUSPNuL7F5iPb+zdYH//z+HQJQstnIftmN7HGpMHDhBvDRoQQ5ZQMD3UoQe4nCyQ2O532g4HuViL53Rryvn2Vjg8p1uefT9P1lTI8czK6ByyW5isw+gUy+xsRB3T8y/2zxst6im/Y3V8+l2jfvPgsX8s6FAremVGP1zqcJjRklJ5aOKhcO2haafY9cKuySl6Ej2Rx06Z3Fq4TE62WYtyJ8rLSwp3kiT2D+4u14GMvorVr9l37eC+gylQGnrMX33YET1G8w7qCWoNU4HDi58OGxzGTPbiB5WLANQvQB3OuTxiBnYKSY9DD1dK20rUyc32acM6QrJLHi7h7RyDMbV3E+oT2SdYAhhjZo/LgUZm+eSYEfU4H/8vQOfYXMGVwDh7SShLMUn43xAklHhQOne89m+If/+wcMgdl847AAAAAElFTkSuQmCC"
                                alt=""></div>
                        <div data-v-b73557e2="" class="notice"><img data-v-b73557e2=""
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJNSURBVHgB7ZnRcYMwDEBFrgNkBHeC0g3SCXqdIGyQdIJ0g9IJ0g3STkA2SDKB6QTNBqoUzJ0RtkkIED767hTuQJaFZLBEImgJIk7pEBt5IFFC5UhyINmS7KMoOsIQkGMzkozkFy9jQ5JAX7BxEo3Xozt1lIwpE7FzJt4ZXX2mvoJrIANz9KcyI1mSxIHxsdHJPDbY9hLaQANXHqPrkFMBe5yJT4/N1aXGVuhOyQyuxDiqWztJigvHYL7zKXQE2yJJHfPMmwby3ck19wY9wbbFXDy3Cg3QYkAKPYP1dZn5FBOhqLtMa8DBqSMwiUtRKikYCCx2p0pwpIKM3hoGxpHqmX1xc6voWT7E6FqLZg3UL9wArO44/ERPJ1CUSzbfcDvsuU/l3B39zITSnDx/puOe5IPquBx6xCynBRSBkm+N2LX+UIR5Dj2B4WKkeFixuZQKv93bO6ewuejNJmIcl+Vbktw6x2FvVxKFWUI1peXcldZAOsi9wxMdH4XiA3SPbTMnuTdz7yHg4AnT4OxhOHJfUzWBkfPv4LU4HcSizFIwHDF6Sjt28CgUeS/mckdZ5w/QPbZNdm5n5q5uvVgvu0f1oi6rmV3AuQR6Aos6NORkGhlFDnFC8myN5xSkAxULvKuUH6CUdfkFxgTesO1oBOv9+OBthxfPA6NgDGDRi2j5cMAYMGmVkdM4QD8ecorTuUT3ByQtUxtBRxjD71DvK0rK7dN3PSd56u21hud9hfWR9p5WDDdfPjJs+OZ4B93xCv70lXBh8gNFtf51zl8Tf7SnafQ0q88oAAAAAElFTkSuQmCC"
                                alt=""></div><!---->
                        <div data-v-b73557e2="" class="head_right"></div>
                    </div>
                    <div data-v-b73557e2=""><!----></div>
                </div>
            </div>
            <div data-v-6e2d35de="" id="scroll" class="content-container">
                <div data-v-6e2d35de="" id="content" class="content-scroll">
                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="profile">
                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="container">
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="top-com" style="    margin-top: 14px;
    border-radius: 12px;">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/6ca664b90f036b7967d5eb1e2ac4ac17.png"
                                            alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="edit"><a href="{{route('user.showinfo')}}"> Edit </a></div>
                                </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="name"> {{Auth::user()->name}} </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="str" style="margin-top: 80px;">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="copy"> UID: <span
                                            data-v-184f5bd0="" data-v-6e2d35de="">{{Auth::user()->username}}</span><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="/static/img/copy1.png">
                                    </div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="copy"> Invitation Code:&nbsp;
                                        <span data-v-184f5bd0="" data-v-6e2d35de="">P5B6W6</span><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="/static/img/copy1.png">
                                    </div>
                                </div>
                            </div>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="level-com" style="    margin-top: 14px;
    border-radius: 12px;">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de="" src="{{asset('')}}static/img/V0_icon.69de7dcc.png"></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"><span data-v-184f5bd0=""
                                            data-v-6e2d35de="">My level</span> G0 </div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="str"><a href="{{route('user.vip')}}">Upgrade</div>
                                </div>
                            </div>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="invate-com" style="    margin-top: 14px;
    border-radius: 12px;">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="com1"> Invite friends </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="com2"> Invite friends and earn coins
                                    together </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="com3"><a href="{{route('user.share')}}" style="color: #020503;"> Go to invite</a> <img
                                        data-v-184f5bd0="" data-v-6e2d35de=""
                                        src="/static/img/invite.png"
                                        alt=""></div>
                            </div>
                        </div>
                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="container">
                            <ul data-v-184f5bd0="" data-v-6e2d35de="" class="nav1">
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="/static/img/income.png"
                                            alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n"><a href="{{route('user.roi-bonus')}}" style="color: #020503;"> My income</a></div>
                                </li>
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="/static/img/read.png"
                                            alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n" style="color: #020503;">LumeX Academy</div>
                                </li>
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de="" src="{{asset('')}}static/img/term.png" alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n"><a href="{{route('user.terms')}}" style="color: #020503;">Terms of Use</a></div>
                                </li>
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de="" src="{{asset('')}}static/img/records.png" alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n"><a href="{{route('user.reward-bonus')}}" style="color: #020503;">Record</a></div>
                                </li>
                            </ul>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="line">
                                <ul data-v-184f5bd0="" data-v-6e2d35de="" class="ul1">
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/address.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.wallets')}}" style="color: #020503;">Withdrawal Address</a>
                                        </div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/verify.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.codeVerify')}}" style="color: #020503;">Verify</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>


                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/read.png"
                                                alt=""></div>

                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.bindMail')}}" style="color: #020503;">Mailbox</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"> <img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""> </div>

                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/key.png"
                                                alt=""></div>

                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.ChangePass')}}" style="color: #020503;">
                                                Login Password</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/transaction.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.change-trx-password')}}" style="color: #020503;"> Transaction Password </a> </a>

                                        </div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt="">
                                        </div>
                                    </li>
                                </ul>
                                <ul data-v-184f5bd0="" data-v-6e2d35de="" class="ul1">
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/feedback.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"><a href="{{route('user.GenerateTicket')}}" style="color: #020503;">Feedback</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/help.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Help Center</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/app.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">APP download</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/help.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.about')}}" style="color: #020503;">About</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/social.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Social Media</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/customer.png"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Online Customer Service
                                        </div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="/static/img/open.png"
                                                alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="btn_list">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="go"><button data-v-184f5bd0=""
                                        data-v-6e2d35de=""><a href="{{route('logout')}}" style="color: #020503;">Sign Out</a> </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
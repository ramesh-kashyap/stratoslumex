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
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-184f5bd0="" class="page"><img data-v-184f5bd0="" data-v-6e2d35de=""
                src="{{asset('')}}static/img/bg-top.9f7cb278.png" alt="" class="head_bg">
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-184f5bd0="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex"><!----><!----><!---->
                        <div data-v-b73557e2="" class="myName"><img data-v-b73557e2=""
                                src="data:image/png;base64,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"
                                alt=""></div><!----><!----><!----><!---->
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
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="top-com">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/6ca664b90f036b7967d5eb1e2ac4ac17.png"
                                            alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="edit"> Edit </div>
                                </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="name"> LUMEX-106965 </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="str">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="copy"> UID: <span
                                            data-v-184f5bd0="" data-v-6e2d35de="">106965</span><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAMFBMVEUAAAAp0ptCRlUo1ZxASFgo0ptDR1Uo0ptCRlZISFgo0ptCRlUqyZc/WF4vr4kwpoUfcbQVAAAACnRSTlMA7+8gIL+/sLAgyb3sXAAAAGxJREFUKM9jAAHmwFVQsNwALGC4Cg6EwQJVCIGlYIFVCLAQXWAVOQKcSbt3owhM2o0m0I0usHswC5xCF3iF4C8HC9xBCmSwwN5fML6oAVAAAUCBRY6ANrpANoK/AyzghBBQAQuwdMP4ag4gPgDsiytjL3zauAAAAABJRU5ErkJggg==">
                                    </div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="copy"> Invitation Code:&nbsp;
                                        <span data-v-184f5bd0="" data-v-6e2d35de="">P5B6W6</span><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAMFBMVEUAAAAp0ptCRlUo1ZxASFgo0ptDR1Uo0ptCRlZISFgo0ptCRlUqyZc/WF4vr4kwpoUfcbQVAAAACnRSTlMA7+8gIL+/sLAgyb3sXAAAAGxJREFUKM9jAAHmwFVQsNwALGC4Cg6EwQJVCIGlYIFVCLAQXWAVOQKcSbt3owhM2o0m0I0usHswC5xCF3iF4C8HC9xBCmSwwN5fML6oAVAAAUCBRY6ANrpANoK/AyzghBBQAQuwdMP4ag4gPgDsiytjL3zauAAAAABJRU5ErkJggg==">
                                    </div>
                                </div>
                            </div>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="level-com">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de="" src="{{asset('')}}static/img/V0_icon.69de7dcc.png"></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"><span data-v-184f5bd0=""
                                            data-v-6e2d35de="">My level</span> G0 </div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="str">Upgrade</div>
                                </div>
                            </div>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="invate-com">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="com1"> Invite friends </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="com2"> Invite friends and earn coins
                                    together </div>
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="com3"> Go to invite <img
                                        data-v-184f5bd0="" data-v-6e2d35de=""
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgBAMAAACBVGfHAAAAHlBMVEUAAAA0v5MzwJM4v5czwJMywJIzwJMyv5IywJIywJI0qxk+AAAACXRSTlMAIM8Qr9+/MK9o/IQhAAAAdUlEQVQoz63QMQqEQBBE0ZFdjDU0NhAz9QSmHshDGCoozG2FrpIPxlYy8HlM0OmrFbX3hC17s0F+tlssr+A/1gjs17/ClE8FQBcBcIwRAG0RATAoAJICwAGgAHAAKAAcAAoAB0Bs0cXKAEH0NALsfwmwKn28G90HOf4DSvFJAAAAAElFTkSuQmCC"
                                        alt=""></div>
                            </div>
                        </div>
                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="container">
                            <ul data-v-184f5bd0="" data-v-6e2d35de="" class="nav1">
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAA1VBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////////////////9r0rEzwJM0wZL///85w5b///////////9Expxy07X///////87w5f///81wZQ+xJn///////+T3sX///////////9Ry6P///////9AxZn///9ezqr///////83wpZKxp9JyZ////////+N3MHi9u////911bb///////8ywJLM7+Tl9/Gy59Z/17to5spVAAAAQXRSTlMACAoODBASBRXCGOGFKhrwMNImLR1MNkg6LPDhpqWUdiBpLiOWlmjMiGVaHqOIeUuzsnhqPOK0tFpZVkAd4bWkZyWvXdcAAAfBSURBVGjerZqHutMwDIWJZTnuHrSUvffee6/3fyQk2Y5iO0BbOLflNtD+RzPJx70n9lRrLHo/Js3H3jkw7Yn/pwaInDTnr/mYnh7/i4tB4XoKGxEBAdA5x8nMycmbf6O3KGwCR7FFkvPjOck1xwfvhA62w9Mjl/dkMTbH4T3hHdFVJd5JHvPN5Y09vDhUZg/WKl/Lo3LcDxxfW6+v4WF8EDzzexY52/W+z9cnZ5v2gLmk8NGKwA72V8COFQ5wc3I5c/vyrafa13w1cAJNCg5+vVxu9uNr+H0HHtUe3+XihK6dOrVs9uuuVSV8XqEhIY7Jwfy1/By+qQygqH8tyerk6VN+D74lBzNgAML/rZC0Pn1q/Ge+A2MYX/U4q89vcqgdaj4akuSQLxlk26vypcX6D1VqQ/wmK0+dAdZw5YvD7zqNfX62xpgZKN97T8+OLwY0rst2mO/RBNl6DUq8GDDd10nMTs2GT84u8csaKT/DJ/VqhaLlcj7QYOKrQd0FXQI1UIvcwS9P4kADbMT3S6T0YOG0A2rhVBh0+eS6rS4v0JikssmY1ajOoL/NKFrP5gMFqltcL5qrHZSPiY9uvW6KCQLlDy0CAl7ePjw/In18sBVe1eMOD4iba5sigaZpTNYEyCxwe37xpdPi/DY0oRrTZAHXLtssAWuIr8q3AGE7+lJo8o7w8dFJUwB/eVwm0GgCxaBurnfY1WiSXp+/Jlm4fg80A5S7GR1RNTDV5eZkYI4enA6LsH0Y/uLFsqiOVojkxl4vYtiwfjNGpyeC36ZF46/tShzeVQ3QGsF4nHbBSgJaIrXo4l88xJ6Y9ox7vujn0E8AJQUXDZwzgk+y/U0T/uQkfaBwWMo/XC75WiP049RiaKKqFCycF36Hf37lUebwUg2UTg+Wj20GNMoX6RTBTeHrjdftrxcIHx24SluHefigt+KxRjyjySHmoOIob6b7FhADPWPc5eZz7HV9RKFGDULC1xlwAve7iO49unHr67nbVxknXF6/NF0DDt43ZGDiEshT2xwsmHASot6c/Rp04aoL1C2nUDQY+jUCbYFYlAnMGABRT792OncvBs0BXC5WDKGTNAFdf4aabFDvSgfCQt87x+gbt+Xb7ViXh/SGZ1gOUNaEFq0aFCdUe5E+P0sFEj4ZcaHORuCS3nBd6ZDhrfW0zI2z5RCJRWrBwkLQFTa4QogL/OJqhC5oFQYM4oecNycMt0AtcocVtcDG97+W9nKtrpISlN4x0fqrwuUEvT1hneklUDhMyCBdFt6fFYfneiMP3GU1IGUOwAYoBnmNGr1wBgPmSwqiW1ymOI6dAchhybfgHU1p05dRdRkki0fn4pBeEThLDAI9C19UG5j46By4wv37iyu3gsWNQAw9GGGPXrh4f8JlGQheV+E+TeGG+ckBzlwQh6fxWn2ZxxSq8lhWNEDXNrm0RuYSff6uZRGa9J4tznKVIusuL5ryVT2DOgOVnCoiP06phVf8KnLO67kqj18NwCm8bvNIaiQWssBcp1udwZbvNhY3fxc+lUAyqAw0C6nRRSu6wdxXj57L91vMIbzo/CYfziKDwiBftvmCADvLOsNDmnRF+aSRVqc0cCcsGbS5Q19TvmSORB++sX78pErxED1g9Oq83PLdVQN1MLwHyOeitpijPp8yKPX90xniTPnlA6JyFUext3kKxoAHMrCKLqo0W30Z1GlrhT8FkpxyI70vIwbmRDNkEPkTwS0mfckdqr0o/BDyY3oZ+Vn89EAyaBFa0pDHhOnTWX6bIVmtAl/EYaxsJVlU5+nuEUHwtcEdjvWU4PsWO4YLX+LdTNQrM2B5zxd9aKou81MSmJmoXgqBfykecoEms5zND/mQRzKQMSKLMg2O9H7C673GbiJ92UXYlA9mg+Fzjy0ZaBNy8fjtjGg+i9pNw1ytZh2fdNP+xsD55gQJpUaVBQ/K2LDeFlOqJZ/qkUmjqbLcAqlRkzLom/C1wIhGOX6Uwtdh7QeuJrxmrAbtUAY0RJMwrtMefXFxJwyen8eRb9JiFUKpUJyjptbbS+O4c3emUXdOx37LGiZ+/FILrVCQgTBHtUx4mgFdWkR+gFuT4xs6djYatACtaMiB31trN5J6fVZqLefaE1HAbU6qTUiZzfwS4WW/TKfayDrs/QwFBN3Hr5+MhrWi2osuzs2wJO3GOWmxtrmInoL8o0a7IbK+0gQ0haiwD08OxCu/ESF3QGXBRDp/scV69Ds9uXhnLrA68sTvd0AHKXcYnqj4Z40N9yL6Xkwd0CLZvEbDFt1e8Av1CM49gTPKrkZV8YOSSAUpZHmqOUs7nBdJl+HPfBZT9TgcqLRA5SRpCoVLLa1KJdQC5UWyyUB7fYzAgVJzB6MOpCP5VvmlkLeh2LgDVDe4bnThcEShrK7wgBq+PquOi18HaMghH9Zemdo94y/5dZXQ5jkckgoglvWpBWAZmrnsmQPq/PzRQVutFvL8s5NB3IcvjUCoHArVNlCcH/7cCOfKJDSFdsjJIgV10I/zS4sm8OWP9FLPWODQHPr7CJWFWqkacYaDwtdOsEWfNmxnGL9n9eudQLTNH+kWneKPsDAI7DFowoNDslqc4zx4PgCsaUiJbBoLIpsFf3weFtJ/KWJ4IB3939/QoXIbjjql0+4L/wW8gh1i6+nR9gAAAABJRU5ErkJggg=="
                                            alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n"><a href="{{route('user.record')}}"> My income</a></div>
                                </li>
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de=""
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAMAAADVRocKAAAApVBMVEUAAAD///////////////////////////////////////////////////////////////////////////////////85w5b///80wJL///////82wJT///////////////////////////82wZX///86w5ZPyKI0wJP///9Axpr///9Ix55Vy6QzwJP///////////////////9o0a6R3cT///8ywJI0KZF2AAAANXRSTlMACQ4RCwUHFBeF4igaw2dNS0crSYctpSbhMSHDNxw68GWleMKUkErSlW9sWjrw09K0l2ssHmCcMKMAAAYPSURBVGjerJZtT9tAEIS53bP3FExDDcGyFYeCBEK06nv7/39a7yXO5M4+x6FMguCDNc/tzK3FxUIViliMMVVVGSNMurx4PykSE1S5T2V/nIRV8R7uHLyFnch+rETMHqL+z73g4E17DQAOFA/htzOUT4YpsndfyDOMfrs9UySekPRd19P54QiiwfGnZbqm6fg8f7L2pCkR51Rd1nVfnJWOsI792ftnGf2mrWWpvzYipPWS4wv+atq2X+bP4o6vFwYESrfdbsol7YqQ908IE66SlN1u25M3thRh0l5JSjySOLEAI5vdVk7VK4N92nFkPfiHXxil2e3MCX/WygOyHQMiEIOwNfP5aH3KH+4MwDFBZvolPWgmoRAL3EcElb2fpDIAyqczJmzbMu+vJs/vvqcAQNTbenJ/RbQCgSJI8p5G/gAw1LbVZMHKAhBQugXjEbIIaTecCUghorkSxv7pq68pRgGRslpWcq5jqKmrdMPYHz8HiNyzHUBy2ahRQFZIKBD6x++rnL5evcYAYYj6po8aZlZB0QD16s+sVi2OL/D3V67rdDSAHgAYAP55QndYgjgjIumq8QBowd+hB2tx/+0qJ0d4ELyzE0JVoQVmOgCQUe+OWOfediLtyvK7yZL9YhoZ/As3wJhwYwGPg31KcIaP9oHd4J8QrEw17AIxTfiTA3wY7zL0ah9YiwReOgGRHEY4bgAt+Alub6yuj7Q+0g834nrdpvEPMib4KwyQRLRQV5sUECBi9D4h/TYA9DPJJxDYMBKCv83obMA9ZvBNRRkVMcB9UPLLjdd13ENUxaeV24d4gj1BjFsFjYTijD7Gtyj733Xn9mFkHzIiX4FKhA4CAIhpvdgHO1QMhV1jLlN7lQLmCbf2wVACHQAooWAanz8FQHMAGgHEFBclAKcn8AYZAEUBoWXFWpXxPVVZAIagFJD4o2XNKgCg8S2CshPg9kQAdoAyBagU8HyX6ulzODIiCvhEFkAAxIQA0GT16++EfjMFAA0TTEjEA6YXAYAvU4BnD0BEEwRNRtwaWEA5OwE9jf3vhks1TADBfwBYpSMAkBMOjA5iWQ8P+Neq2e1GDQNR2PMb2oUbbkCCC6QWUIW45f0fjXhm3dPYzjaN+m2bRO12Pp+xm5VXa+T7LcJmapdpgvizVfChCpxsjACBvkUAtLLUBOTx2LIV6AkBpyCX6WSelSDgp4eHh2/P/JkIPo/9WeFFVoHbbJpJIfj1b8PfGwIMPgVxqwjB2CQIuv+Dr7sCBICARD2gHgj05++v4PfTjgD1kUCLC7sZDKMAYLrnAtU4AlmoWBVkefebAtZrgT0Bxs/PAitF2AyzcFvAMMwFWbpByxIv+u4wDAJSANGGu6sgfgdHrtJSSMg8BeQTAY31W63MlAIdIV54FTizrXgwCmDoJHGI41XA3AvqHK+kIDP0gh+kaFIvCZpgqK5UbxQVFUKEPgEl8/p5nreIKDpUcVFE8D4BoUd7vBS0xLQii5dA2KN+hugEjdcFgILoUKCcPYoQtCvIkd0U5NMoiA4lxmwJFisEQGlueFyf+FGbgSroUMBMV0FKKIJc6u6INrQiGy7363YXSydSRAApDW8RfLOW6lb7/u41HmMDgspDAERwsyxfI3j06CD3F8rBw8AiBbhwE5hjvd4d3aJ9RxMRwErQz8JmtX75dKT844V6MAMwuDU8oKvjUsnjyOf1WzHyYQYACVvQOhWO07BoAf1S9egT0XkDGgRsbNKZEGjQADEbDGZ4nTtRn8oEZjUD5zOwcJnCQi/rQ3Kq/oEMbTURJKcmGNjW4PmgJjhkUREru/hLg3frqd3I/ZaJRbyAmYEMQAFJMDO4o/4+JqzeGSCJKogwaBj92YeZ9wzmfZymyx+ISDkAC9OwmFCe2hlhPFARLocghOhy1EdCzfZ8xSJUDmIsooPAESbAxXX4Vo5DsnQKb6f4ClGe2vC1vAnjBQrgMAVxRYzhvwGv77CTG5iZ3JVl7P7xqRAl28eJmYW9nMVUanyaSkg5RoDmnHZUNG4GVol7Amd1L+9AHWu+tyWbTyiQlffDjKIlLY0fLf4fdx3zxiAONTcAAAAASUVORK5CYII="
                                            alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n">LumeX Academy</div>
                                </li>
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de="" src="{{asset('')}}static/img/my_yhq.4ee028cd.png" alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n"><a href="{{route('user.terms')}}">Terms of Use</div>
                                </li>
                                <li data-v-184f5bd0="" data-v-6e2d35de="">
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                            data-v-6e2d35de="" src="{{asset('')}}static/img/my_order.905fb927.png" alt=""></div>
                                    <div data-v-184f5bd0="" data-v-6e2d35de="" class="n">Record</div>
                                </li>
                            </ul>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="line">
                                <ul data-v-184f5bd0="" data-v-6e2d35de="" class="ul1">
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKRSURBVHgB7ZmNUeswDIDVdwyQEfwmeN3gpRO8vgkIE8AGlAmACdpOAEzQMAFskGxQNhAScakaGsd2bJfj8t3p4vNfLFuW5QRgZGRk5JRMXCoj4pwelyQK4lKTrCeTyQpCQAPPSDaYng2/G4aCpxn8pxKmsfWaEHVQ0GMpskqSNTTLHAOe8WuSqcibkTmV4ENr9l8gEa33PoIv1LgSHc0hEbzy4r1VV71f4MYbpKO2qeSqwLcjmgK07FfajrdaNtohpKW1B3KL+oo3O3bD/SmLfnKbPWA78AN82wl6vZmtAkFNSJuIElklyX+SGTRnx44p1b2CmPisAB767mVPufGExQAmlGupREe8MXNDG0l+pHwuyrcW7+9V4KyrYHd0tyb8tedI53NiF3xlHeVBCe1GX0X6/Ej5eUddb0Ir8CzSbC5LbQqcfqC8QpSvIQXocA5gc28wnQG9Ni36Su9GaX+wjbPbrA3V2HRmEIjgoQQpUZP8puQF7O2cFStJbqCJ7WsIxBlEQt9nVxCZnxuN0saZ6k0r/fnUciPLSPTz4NJ5fFFREBt0DCX0wK9bgzbBdTPD+9NFo9iE0BW6U2HHauDQUMJBUUUPDsyUyGavwwdVCY1LzbTwnfqvqPvRlvoI6pnaA6zETOQ95cwdmk2DV2t1ZCWyVr1hJmSjADZ2LFk49LswtY2ugJ5JuWGXHn3fifZbuQqYIJTI4dDF3oA7C9iH2NxXAY64KqBE+p9Ir3w2oY6dnkRWLtJWH3VtFKhFWsbzSqSfwZ9SpP+I9C0cH8MBNm70HvYzw3bJXxTYXOTH1wwtPrl0kLX6KaCZKCXyh90d8LSf1x9gKPiNf3C4/mIq4OvyxoDvEffe/wRGRkZGkvEOrG3uwHEGIzYAAAAASUVORK5CYII="
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Withdrawal Address
                                        </div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOvSURBVHgB7ZmLUdtAEIb3BIGB2AR3oA5wB9gVQCqIqYBQAXYFQAU2FSSpAFJB6MBOBTbY4MkDbf6VLXNSJFl3JyAz8Tdzo4dX0u499nEmWrHi/0ZRiTDz7t09tZRH+8xUx8v98D7RjVI0oIC+7FRUj0qkNAPu7vkQmnbxxt0logPIdcoyxKMSGD/wGQ6fCigv+JDrjqd8SiXgPALjez7FFGkn3nqN6XKpGL0NWJEPmQam0YeYmKLz6rY6odfibsItTB2O2u0D94cTrmfJD6fsi4z+TDj1Xgt8vB9THgoueybFiOFwyEWmXirWa0B6n+ZeRggUNWtbarDsOZFZC+i9dmvX26QWWWK/iD060K56RZSPqFTUDTzR9eIGU4MssTcAfl47/0rmXEYn8CR7ZImLG/WjE7U28zYmRB4q+S5TSokDr4mLAYPohB/Ne1Biw+IcqQZZYm+A0j7qxQNUwef3tavvZIm1ARxoCxdeZJITwJJMZ/GiFV1jPXyml0aCjwQhLSD1pwUCmcgkAyA5YD0CtZoa0SMdabf8XwFd5RkhoyQypHuwgDrkQOFkDtljA1PlIGA6VA5uL4+wbkB741Fnq2BgXGqAFCmTKZ2iQPlIL4hkqr9/UCcc6Ty5vB9D5R/oCj1TeIGWiYxI8BM5Vo4R63kvCHteU55nZeGFx/Z+Ow8khHWsymN4JV+u0bv19U2Swse8Zph7i6dcf8K9IdunvUUR7ybf0r8drj9T8GA3luu/gPIRoRFazQCDzrNkM92ois/7i5qazUMpIRMVlXXLqovDOY+putBFxVL3pJ7pyAcWQh41q1vqOnm/DHbeqlQdxmNusBfGjFw580CmFyKOoCsuyJF1Q3nCfk5TeoccQX+OwsrMEWMDhGp1Np2eEzEwmquh+87gny1o5nWz5Fq9IL4JUIwsP2zihcrafcvDeAT+2oXLkw2Ky6Y+z3yM9g0ts2B6Vi/k4mWgtIyeBLD6/JjKs3khFy8zV76t3RqRKc65iCWiPMfpo/lkSqLsK60WgDKHaGdpSpWmvCAJlF7vumzAagr6WcqVqrwg8zzhFruuRiQMWCjponxuRXY75nMkcsfarYF4Fm+teEGDbcdRZeNpMUOxNg56fJAFqnfMAK2pVAk1sfS4t0FXyrGkRCpw8m5bLVxhihERAzJQXsiNA5KXS03KgVvWCJe6F79WbRyS2ykDMlQ+fFdRQflnxXuEb4YyJiOCyD3CVkyzlhIT5iMhU1R+OzJVfsWKFUR/ACHdNZpfXXuFAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Verify</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFMSURBVHgB7dmLbYMwEAbgn6oDMIK7QTtBM0o2KZ0gs3QCRqAbkBGywfVONJJLo/gsn3GQ7pNOkZBjc5iXD8A553aBiHqOD46R6pk4jrDGnQaOmbYzy5iafes0jaRD/gnRpvNvWOo5XldjvHVdd0EJmdLVkTmgkhszPaAULeflVUBlcoCi8UaUijqbsJF4FlJtn6B3SQx6Ir0T7jvDinY6KVOir1HTTjzDzifHu7LtF4yYJcC3uwEN5FwDD8kTaM0TaM0TaM0TaM0TaM0TaG33CSSrEppFRU38mn53H3c/AzkLGlkTf2MbUh/qYUG7JraUsyb2u1BrOQkEbMfm/Bf0t5x+QGW01EevyquB3MkQdThTxfooLXXRORrvmPqP5kEm0ylHIkSb5XZaVvb+L2BVwudn2Ass0AN/4MhNRL4VTFTPSMspa3cRO+dcVT+ZdgEcihBMMwAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Mobile phone</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwBAMAAAClLOS0AAAAJ1BMVEUAAAD///////////////////////////////////////////////+uPUo5AAAADHRSTlMAQBCQ33CgzyCAf783kGd6AAAA0klEQVQ4y2MYvEDY5wwSOJ4BE1c+gwaMIOJMNegSxxXAEsxnjgQKIgFRnzMGYImeM0moVqqdOQimc44ooEow+RwG0zVH0V0ZcwRMATWiAZkz5EtoLYILgtgIiTlHBGDijD4nkSXOHFaAOtXmDJIEKLQcIRIiwJBCSED5QABWgZAAmwCyhtEHbCZCAioElUZIQA1xDYEYiJCAWQuyAF0CbA3YAswg4cjeLIAzrIayhA9m8jkOpmwwE9wxiEbMJHoCZ6LGmQ1wZhwoaEPRc8SQYdACABoQvhNkFrmvAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                                <a href="{{route('user.bindMail')}}">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Mailbox</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr">   <a href="{{route('user.bindMail')}}"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""> </a></div>
                                                </a>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAALESURBVHgB7Vn/ldowDBZ9/b+5CeoNjk7QjMAIdILSCUgngE4ATHDdILcBdILQCUgnUOWHcwih/HDA5u5dvvf0Yixb+izLDo4BBgx43xjBnYGICT3mJFNXtWfyl2RHUo5Gox28NhB5Q7LFbsg1G9FmwJKlx3eSf3CMbkmyIDEeZr7ImfgI8fBEMm7Qb0jWro1Nq0c4Do73seX7pBLNQNGQHllDP55iM6n/APFQinIl3ygtsoZ+f1j5USpjDoAT2RDpByfrln57Vn6QyigDcAv4K6sy0B17Vg4/A9rWSNUFnJP2WYh7VjYQGnZBYjMyD1tGLP5Ctom5Bix+tizYF7i0sy8vw6o3EBpiBmwqpU7GHjZk5L1m7iqIAeQ9+scl7xwaV7aRPvQdQBTyjuQKm9+s3s6Dkydj046kK8w8bIcj74zn2B02hVJP+0VI8oVCMrcRJhm7NlbSqu5K+xncAjXGc5/o9rCfwa2Al2mTwY2AkRbs2yTvnHAH24Z2CZ7etEkHu9H2eQ4DOvEcL7GAe5J3jpbMQQ46+QLrkdfY3QYn7xzlzMlM0S8EkYMyCK3fmul/QygIQqmiL5h+7erkIaZQ+s2YfguhICKZCp0R+jHTTbhCsTttGmBf+B5oSvE7qSmXEAnah609nE5BhivoNFVS9Ox5tor8in7/oucnEp732pk3ET7CgAg9saleKvoJtsO02F1BKIjFZhd0orTJaojb9lOlvVw7UwgFPO7zHFlNO0vKbo1bJ0st8q7tvC0oNwWe79mHOmIdbY1FQMKlD3Nq8Px9UPQZBCrfda4Jhq/zmYicl3O8POBbTCAmUF+sq6aB4OnQL5FBALTe0DjHc0Vl9/pnON64WHwmSUH/fvmD3iFLuBfQ/4sET7sUXgPwuCAz7DaQwrUNu11Cz0s+F1X7d6K6x6puW+wlxo7S5RkGDBgQBf8BKM6Apf7DA3kAAAAASUVORK5CYII="
                                                alt=""></div>

                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1"> <a href="{{route('user.ChangePass')}}">
                                        Login Password</a></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJcSURBVHgB7ZnrUcMwDIAVjv90hGxAR0gngA0IEzQbECYoTJBuUJggZQK6QcoEzQZCPjt3TurEj9ihQL47XdzWdiRbkh8FmJn530TgGURc0oNJTXKIougIARltACmcAFf4TjwXnSoHIe8QwCBrAwwU1uHVIK0BjgofRT2TumFmiClOUqEZrN4LSUqykPpYkmQkO5KTYV8FSQxjoA7W6KCwQb+mBlXORrCGis6dFB5pUAkuCEUbWKcJTAS9K+8YYT9YzHKpgwImpjMTqa7+leb3D5ieg03la/AI8lX4CXi6dUV2mw31uabnltLrq1HrjgulYIgISNNU6cKnKiZ0LmTDDuxXZRvYrGbdL724kHCdWPrqGfhq7IMHkkSUz1zTVwy0Rp78NQdP0OCwRyI+3nR/9+lCP4LXLNRAo1aBPwbjKogB0I6HoMwu1MMj+CMBnomUBDGAstAWPCGyUK8Bv96F/qQBtVQesymbBJUBX1L5Fi4clQFvUpkd7BO4YM6yEGWQPSnN3KhZAdn+fj/cTXvjJjZ3NfjB3guQH7RlEoM2Ic8CDeZHXGzfCbFyDHZG+6ZCm6sW5BdbMsoTUadNiuaXYTaUfcpHGoVy4DHQwA7cK4qTWtMuBjNYve5JbgXtmKp17wONMlscM5X9/d7jedxkEAKFESfXl1G7BclG4SY5hATbN3ZOs4E8RlTZKszIKxTIehQohgxBnhDKngGYdruC/PJ3h2oKFGuGcJW0R3EGm9GQ1zBaQ4ZSZoX9C1s5+agPgea5v8RL3lcNGBJU8VB/s8bi437UIjQzM6PlG+jlKhoWlJ4hAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                      <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">  <a href="{{route('user.change-trx-password')}}"> Transaction Password   </a>                                             </a>

                                        </div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt="">
                                                </div>
                                    </li>
                                </ul>
                                <ul data-v-184f5bd0="" data-v-6e2d35de="" class="ul1">
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHpSURBVHgB7ZmNUcJAEIVfHApIB8YKxA5iB1iBUgF2oJZABcQKKIF0oB1AB2AF595kGY/8cZfcXnDIN7MTfo6995LNznEBRkaum8hmkFIqpsOM4p4ihj8+oijaoX3uKR0WFJ80NocrlGBBsVcy7PnkNIpXf3O3jq37cUyxUbJsLcUfqRiYtHh4o0iN9weKb4od/LGs+1AVZbPBabnOqYQOsIESpCXnXxQJAtBw5l9ccugka/MyK5fa64EX8Zxo3ytBB3yKT0pJEgjjTTwnC2rAq3hOGMyAd/GcNIgBEfGcWNyArXhVtPOVkwZpAw7iY+N7+2WEpAHlUDa2Om4QCNW8PMjQgyAGpMRrxA1IiteEuAJrCInXiBrgziEmXiNqgNfvDxQZxaNv8ZoJhOH/vHMIEayNSjEaGJp/b6DTTaxXiXR4hj/ObnA14WyAe/sGfplR3jvrbRODriXkPNG5fF3Ea5yvgJ6IztYT/JbQEh3pdA/wJmuOC2Bso0NzyQbK/4Frb/KKAe7H5uAUwzA1Xrt1KXX6XGCrAm3uGvPHPO+RlWuCIbfXE57PZNo0PmpJlKHa63P4fcBRJkG1ZJdUPq9whS/jWg1Lhr5Qknd1Wo8h0JtfVmfd5TFriqIz3EKOHxRlmnddG42MXBu/p/9dnGpwGg8AAAAASUVORK5CYII="
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Feedback</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHHSURBVHgB7ZmBUYMwFIZ/PAdwBJxARsBJxAm0E9RugBOUDaoTSDfACWQDuwG+dw1n5CQkgYTcNd/dOyghvfy8vPB4ASKRyyaBIV3XfcCOJkmSDRbmGubkCIhRD9CTPtAh+6cphT3tyPWTaHsnL1UwQCWAp0oONTuMDwqi/wPMaMk2JOQNc2AB3TT5xH8UnT1awnVjoCI7ivM97GjIXhXtOf56qyQRR/JECxsGHiik67YemFy96J6M7Fvqc5jqc4WAoKc99FJOIm5UfYISICilcx58qro5OAHkhX5J7fHngSl3u2ARARzMIkg5APdkKTwxV0A/cPmlV5B9sRA63sExNrmQzFbRVsADS8ZATcbZZguPLCGgJrun1YOtJLul34/wJGSOgBq/A6/lBs4oJSE1HGITA/ymLHVyFJEaVyLlyOAAYwE0qGcYIjxUwwEhphJGRAFrEwWsTRSwNlHA2kQBa6ObCz1RQraFP1LdG3UFOMkkl+BiphAzVYl2RQsbBrVR24Kuc3Sn0CcCRTWFeNC5OOdViAuvLdxzEuXFeYhq2xoYbSKOTiHxHbtD4ChjgES84FwaaRAo2vvE3bny7KX6bL2tFImY8wNKh5o7fQfqbQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Help Center</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAH4SURBVHgB7ZfRccIwDIYVru9lg6YbsEHDBh2hnQCYoOkEsAF0g25QNqAbJBu0G6hS8F2FY8ckduLjzt+dLiZYtn7bsWWARCKRMIGIOdmJrOIy3BoU9A7/2cNIzGA85jABYwqYhCQgNklAbJKA2CQBsXEKUDnNnmwFE8F9qT5z8EEFX4mcpujhexiSC3Efws+ZCM46Gsrp8UWWi9e/MC05x9B7Jgwjz5Q92xg0A8q31Pp2zkTQ4H0FgF2EO8M1OJYwAF8Bg2PB8y3Kq2PVziFQO/JiVOn/mz7ihSh/QHfjvNy2ZC/QP7CV8s0dVY+i3FpCd+AHj2yhAnrIsuz9Gieq+0aPUv18JHvuqC53vpYA35NYNl6qwDrRgmfuwQNfARuyWvzuFGEInn1fwQOvJURLpqaglnB54LGIVl1L8EtuA0KibVvFlT6ms+PHUkbscTDhZWrRGpkg2agaRZ6JWryeW8pN3VAjHyydtojQaeqEXDZB7wMOEc1/odd88AuNRUTzLvgHCyPdyISII9knjBQ843sSWxEiRsU0A7UoFxCfXJS/nbW17I/37wVEgvvWzhB3VqucMLYIQ/BoOvwyi/OaHlvxipM2Pe8ZkycyjkEegBv6rnZwLdi+DcWkhCGQ4xrjswYf8Jyo8fXwhNNR4XkzibaBJBKJifgDk+fhPcAwijMAAAAASUVORK5CYII="
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">APP download</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL+SURBVHgB7ZmLcSIxDEBFJgVQgq+C0AGUkKvguAouHbCpAK6C5Sq4EiAVwFWwexUkHSgyiMHIAmytCTMJb0bjHbySP5K9sgG4ceNr04NCIOKIigHJkMs+i+eNpGX5R7Ls9XpLuDbU6T7JhOQV82lIahIHHw13fIrlqK0DyQ4haugXFRXswyNkTfLCZSvqfFg52IeYxL//TKE1h0txZNZ9+FTeKxl2HMmMw0gyhdJwyCy6dlyx69iGZNHFrtbQSjTQYMHFxwNp5CCgBErYLIrOzr6dvjJR3cKJDIwvMivH29MG8QMsKG5tLDPPnXrCbay7xPfDdl8t7XpDtZgJBwaUGX1K0Bl0CiWe/ZAKDJDeI8Y0ibpyd0r3gpj9Bo2LFuM1tAmJRN0+HqYoFaSChzFo3gmUTnhmGfpV7sA3WaVo0EEHcBuOC9yuhcqgGzJKUQpHvYIrg4ebQLQB3Ck6D8HzC1yfsA8jWakNwAXPLXSAQ2DCa6oxbgbr4Pnh7Nti0Y3AAO4POpgdw7Gtx1ML+V7R6ZTncCfrI3beIJ9QJ7J5BwXxs07FX5I/JD9FdUuHlTUURhuAZZZ2+AX3jTpaweFa8iyhO1Hf7o+8tHOVgwzETcNQVD+DjfD42cpKzQPrI8q5uNAmDa4FGy54/i8rtQGE++4QDPB2OTjVcAZhH5ay8qwHjHu39FxaHiPgNCa0lbYJoDUL3OvLNHrBv/s8a5xhpw5sJKXhO8WDLDDXC6jfNPicZp5hQ54I07Ni/pKi1Qu+o8oA5pk25GWCy9H3BmbCCy5Ddy50zx4jhb5Mo2vIBePDSIOJocQd8Af5MeaHn3aZ4MACdyLkGtcqY+iCCKXNIBDLX2xxW7LzFZQA43vRBrHsvT7G1zjp22aCcc21nkkpb+D2LqgR9ldFJ0oJp503piUaQv2S96S3LX9wjKnweb9Tqv2nfgnb/8FasOE9OoX4aPu92HmCZ0r7WF0a20VvwkAa/BiipLD036xe/M2BYym93f6mMMr6qt+48dl5B3u1mFrcbXBOAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">About</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAKhSURBVHgB7ZjhVaQwEMcHn9/dDowV3HUgV8GtFdxeBXoViBWoFSwdnFaw2IFWsFjBagXxPxJ0iIBJFll48ntvFhKyYSaZTMIQTUxMjJqo6YHWeobLAnIImVH3PEEeIFkURTl1CZQ/hWx0P6whZ9QVRvldEGREZCmvcFlBlKniab6hr4Hdci7K/K4juNMThQIDFtaoKPpCuH9ddVXvWdizyj/F/W3ni8vC9H8rqhR5sm+VZbTZUP8c8I8uIuCp0ac1Uu3TMGFXOhflHEZdw4gru6GzAWJUFIWRQ64DF6mCXEIHso3wmQF7VELgqJc4tCuV/EHVSHUOI1I5CHs0QFhBSAI5QfGIihDLlKeDN3xmoByVQwrjUfThDC9ejDpHqj+mSsnnzgaYaUto9xzIwiBdyIexRKFGhhqFnPk+LkQ7ikKfMcYoVGH0LjQZ0AFyY3omT2wD7sX9vI8vMqoe1u7JE3sR8/fvpbnnjWuFl2S43mERp9SuTIzLb/JLwUjlc0hG2wJFrhqyBouG9rEuUiPbctaiUyraLeWzD2sAI80dXdT0c1zTMe/MMosRAofnf3VfWy7U7gN8FmerccvWxvZz47t1zzIqXMGFZ9M23eZ81LiRmXP4o12POj7QJVT1dVbgBP/JqGd8jhIzKM/uElv1GRXKd3rKdMXHgLlVZoUv2Hf5qG3WgyJ3XpO7TdHNBI1y3R1TCNbql6y02CNwn+hw1tqKcPpjhlA7RyGLOrfgUf/VYdZOQZasmBiUuKX9nSxELQ15JDjV+N+8JIf8rVuouvha4/Drc9S2k7sMDxiHU85ElB/xOb1vcJ9uqFSnHBtilOwUXSR317qdJQ0ds4Y2ozWAMbORjtaAEhOB1sKARVv7iAaIiUYxJN/F7j4xMdEjL9MsNKpEU+izAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Social Media</div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                    <li data-v-184f5bd0="" data-v-6e2d35de="">
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="ico"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAxCAYAAABznEEcAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJfSURBVHgB7ZmLUcMwDEBVjgHKBmEC2ICMABOQDSgTwAZ0A2ACYIJ0g8IECRO0Gwipdqjq2nU+dpre5d3pmuZjSZY/sg0wMjIimUAEEDGhn6mWivVkMvmGoUJGT0lmJDnJCg+zJHklSWEIsCHa8LYUJJmOXO/GJzWNL7T4osPvZNAXpOzBYRTfm5Pc2moWVZPjyFXNzsYHxo4KKXixKGaDUmgIqmi+OaKSQAxQdUaz5mfQEe1MYSn7GkJiiUDw2qLynqPpoIKejMJ5iJxCBByOdNOlQx22UL9O05EX6ALujiLhwuvXOzccSaENqCYhSQY9gWo4LoTuHNpgRgF6xlKJaZPvbX0hgyNgRGPe9OP5MaMg7JgJO1ZNP85b10BAdN/wNqkzx/fy5RJVzpNAT2jjecZmKcWjerM4f4xuXmM7g+4Ec6O/biEpHqbAeDP2k0e3dai1NafE+F+SrI3nnRM/E10xGRzWba08V5/4L4TWxZckF3T9Lu6HzTAVKexWIOu9pN9Hca+VE5KFuL6C8EgDufJKqEkTJwbL6MRQaOLEzkYYDIhzz/PNDgWoUeNB3P+F8JTimhNQXgx9kdyI+/UqzzNjV6QQAfTvZdVfV+D+ykryDJFA+86H5LNpgbwoWeJ2Fy/HHvZPcbsftbQ4FDxTiA7u53EJnBo6GhVLODVwP6PN4JQgg+8NB9rtdhwLVIsiSXEyfQHdBzbetN83Y3c1jFMVlxHVmR6n9anlPZ6d7456zqfHe98JkYt8EE0I93fw6hqfQUOiHAEzuinx7oSvTXNz+SFZUNNZwMjIyAjzB2JlUsm70cvHAAAAAElFTkSuQmCC"
                                                alt=""></div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="flex1">Online Customer Service
                                        </div>
                                        <div data-v-184f5bd0="" data-v-6e2d35de="" class="arr"><img data-v-184f5bd0=""
                                                data-v-6e2d35de=""
                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAYBAMAAAABjmA/AAAALVBMVEUAAAD///////////////////////////////////////////////////////+hSKubAAAAD3RSTlMAmROFj0NWTApqYCZzHDD0GuAfAAAAaklEQVQI12NAAkxLoQxOwQQIg0tQFMLgMBTcAGGpCDpBGNyCwg0QVqDgAQiDTVAMasJBwQAIo1lQGmq4owiMIQxhKAvKQhiGggFQ7eIQgULBCWCaD2aFiqARRK+h4AVUh3EKFkCNTWdABgBsQgyySsTPHQAAAABJRU5ErkJggg=="
                                                alt=""></div>
                                    </li>
                                </ul>
                            </div>
                            <div data-v-184f5bd0="" data-v-6e2d35de="" class="btn_list">
                                <div data-v-184f5bd0="" data-v-6e2d35de="" class="go"><button data-v-184f5bd0=""
                                        data-v-6e2d35de="">Sign Out</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
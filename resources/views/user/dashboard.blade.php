<html class="pc" style="font-size: 50px;">

<head>
    <meta charset="utf-8">
    <title>Lume-X Strategy</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-bcc45786.50818f65.css">
    <script charset="utf-8" src="/js1743475952730/chunk-bcc45786.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-5576a184.9f52f39a.css">
    <script charset="utf-8" src="/js1743475952730/chunk-5576a184.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-60c8a75a.d6f6b692.css">
    <script charset="utf-8" src="/js1743475952730/chunk-60c8a75a.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-a7d8f170.c87a4291.css">
    <script charset="utf-8" src="/js1743475952730/chunk-a7d8f170.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-00b1464f.674dbd13.css">
    <script charset="utf-8" src="/js1743475952730/chunk-00b1464f.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-6f896b4e.5bb66763.css">
    <script charset="utf-8" src="/js1743475952730/chunk-6f896b4e.fe8857a9.1743475952730.js?v=1743475952730"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('')}}static/css/chunk-67912ed2.ae8d438d.css">
    <script charset="utf-8" src="/js1743475952730/chunk-67912ed2.fe8857a9.1743475952730.js?v=1743475952730"></script>
</head>

<body class="mein_cn">
    <div id="app" class="applang">
        <div data-v-6e2d35de="" data-v-6b16f068="" class="page">
            <div data-v-6e2d35de="" class="headers">
                <div data-v-b73557e2="" data-v-6b16f068="" class="head" data-v-6e2d35de="">
                    <div data-v-b73557e2="" class="safe"></div>
                    <div data-v-b73557e2="" class="container flex"><!----><!----><!---->
                        <div data-v-b73557e2="" class="myName"><img data-v-b73557e2="" src="data:image/png;base64,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" alt=""></div><!----><!----><!----><!---->
                        <div data-v-b73557e2="" class="flex1"></div>
                        <div data-v-b73557e2="" class="clear"><img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIoSURBVHgB7VfhVcJADA4+B6gb1A3YwNtAnEA2sBuAE4gTlA3UCQoT4AbtBrhBTOwBaXrttfJ69Affe/e4lu8uaZJLLgBnAhENjTcaOZ6wo5HSiOFSIOGRVcwH5kQQEla5HXbHLqiSWLdcTiOx7jZ2nmtLQghwXCnBa5d1rJXXimtgaGAZ/NJyUQs3UpZcwdDAauwlHfiJ/CAYGn1dZmPyCOiJGxg5Rq9gI6xrMhweHNOzvsrNMTyeXbpMGhTk0xZDWPxMJpM7/fJWv8DyZMbi1RMvhmHAOfTjMCfZU1LyG9oU1KAFnzAgsJp5akn/mmbOxVXBczF6Bb2nmE5ZCheES0F91OcQDp3SjLPkBMKLflEpdVi2ifJSyUl6qCpyQEzD2DnLuqfi4JapLgl7DNCJYdkW7IXcpI2cCWKww4HV5iprIuluzUAgoGoLnJ7D0M1NXb5089JFyC/hXiF/1WggvocpE09bNuKgXtgReYT24ZrGEEPVjHs2Wra64p9cy88E/6/JPyRqI3jvnn0exbxPGnrowNmKeVkwHKaNm1Zjz5OOXU5nlR/p/dmCMt42lMWLlj2MmHOTs2nhgv1fVoWZh89c2ZNMdS32uUy6dwvd8CXmXdxcLXOtp0cBq7lqDh2Aqnx6uLUQumU30KSAU6uZ0vMr/RZqPYdCpDY04Ie0SGQ/rHDweP+FeC6OIUSLZjg+zEFZY4njgftGg2UM8M1ij+HBMlNUVewXACe9O4d20nIAAAAASUVORK5CYII="></div>
                        <div data-v-b73557e2="" class="notice" style="margin-left: 0rem; margin-right: 0.32rem;"><img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAGWSURBVHgB7ZiNTcMwEIVfKgZghGwQNiAjZAO6AWxA2YANChOEDZoNYINkg3SD40ws4bpu6t/IlfJJp7ZpfH6+81knA5EgopJtZOvZHpAbLOqD/tkjEgUCYCH3/FGzPbI1bKX8a2D7ZPth64qiOGJJWFjNdiB7WjEGqRF7y1GYzkHsVaSAHT/LIjAhnn/LSLVSyDgj9BUxEQ4viNrRTOpoirgonj6ZyAvi3mkqEFsfJZ1WeRyR7GBriFoDT6Q/PfVP8EGuutfEBR/AMu2j5tc6G6qjvbbSF0TCkBm3g11Gz9+B3RytNod9FA3RKxEZQxB2LoP7lNFT5lGj2NsO0lfmXbUWczXXMrUxjNMrtUM6Ou13rb9wTeCQshORvgfl0VmhbDDPgPSoAXAWuASzGcpB4CyrwFBWgaGsAkNZBYayCgzlTrbaas9XKd9Fb7hFWtQGoVLmO3K381WIrhanAnOiEwIJGSP24BvyJWdtN4L3DStNt1ql5et/FYmloPOrCxu8rk58D+oa7lRYCppuqHqH6I3keX3yCwvp/H0GI4TUAAAAAElFTkSuQmCC" alt=""><span data-v-b73557e2=""> 1 </span></div>
                        <div data-v-b73557e2="" class="lang"><img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAANtSURBVHgBxVmBcdswDIRzHUCdoOwE9QZlNsgI2iDpBM4GdieQO0GzAd0J5E5AZQJ5A5QIqRqCQFmylcvf4SSLJPAEQRKkV3AlENGGxzrI9/QskhBOQZokf4McVqvVAd4bgVQRZBOkxfnwQaogBpZGIrbF5VAtRjQoesRpHnNBHoLYIPWE+j5ICbcAda+1CoG90navdMAr+rYwFxiH1CnEnlMZN+RHdNTCY0XSIUH1ijkEpYdIuUllpSgzI3qsqFum7waH3nQwBTgcVsd7J8hXE/Q5jQTqo7S9pKwc61X4vRblFi4TtGNtFJJPOUXS7R5FXITfO14OEyH0PosyGdMtavGIcW3iMEodGfQuPT0O0c12J8pdxjl8KdtqFVDrJcYh2uBwKG4BEadYXzM7cnYXOe95jG4vFyaFI2TLZJN78c1Jqy5GwsMkvof0biAPSgZegrxCTAhOSSRMkm9BLJyTCQ1N0tF59RQSjM/aLNPgsR9HLzAT2N9ZpL4c7F3qWQ6HIPehJ19TDzscYT4a/p503gf5NdJmTT37jXpcWF4T+zO4hJnA/hrrRZnJePRF29ZoKArFAA9gCzOBMdNRCbI6e8HFS8P1iAG8kWAv1kfqOVatpRjk3voBH4+f7L24E4XTU573Q2+5uhMfHuHjwbe5kyRIcZJLoRr2fqunB4s6xp2EbK+5TSIo17QSWYKawTUEDTcMfXI2PCiJKEWbVyL4B3RlRLJiM7YR5bcQPHXEMGY3JGulzfETjO8KJUSPNuL7F5iPb+zdYH//z+HQJQstnIftmN7HGpMHDhBvDRoQQ5ZQMD3UoQe4nCyQ2O532g4HuViL53Rryvn2Vjg8p1uefT9P1lTI8czK6ByyW5isw+gUy+xsRB3T8y/2zxst6im/Y3V8+l2jfvPgsX8s6FAremVGP1zqcJjRklJ5aOKhcO2haafY9cKuySl6Ej2Rx06Z3Fq4TE62WYtyJ8rLSwp3kiT2D+4u14GMvorVr9l37eC+gylQGnrMX33YET1G8w7qCWoNU4HDi58OGxzGTPbiB5WLANQvQB3OuTxiBnYKSY9DD1dK20rUyc32acM6QrJLHi7h7RyDMbV3E+oT2SdYAhhjZo/LgUZm+eSYEfU4H/8vQOfYXMGVwDh7SShLMUn43xAklHhQOne89m+If/+wcMgdl847AAAAAElFTkSuQmCC" alt=""></div>
                        <div data-v-b73557e2="" class="notice"><img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJNSURBVHgB7ZnRcYMwDEBFrgNkBHeC0g3SCXqdIGyQdIJ0g9IJ0g3STkA2SDKB6QTNBqoUzJ0RtkkIED767hTuQJaFZLBEImgJIk7pEBt5IFFC5UhyINmS7KMoOsIQkGMzkozkFy9jQ5JAX7BxEo3Xozt1lIwpE7FzJt4ZXX2mvoJrIANz9KcyI1mSxIHxsdHJPDbY9hLaQANXHqPrkFMBe5yJT4/N1aXGVuhOyQyuxDiqWztJigvHYL7zKXQE2yJJHfPMmwby3ck19wY9wbbFXDy3Cg3QYkAKPYP1dZn5FBOhqLtMa8DBqSMwiUtRKikYCCx2p0pwpIKM3hoGxpHqmX1xc6voWT7E6FqLZg3UL9wArO44/ERPJ1CUSzbfcDvsuU/l3B39zITSnDx/puOe5IPquBx6xCynBRSBkm+N2LX+UIR5Dj2B4WKkeFixuZQKv93bO6ewuejNJmIcl+Vbktw6x2FvVxKFWUI1peXcldZAOsi9wxMdH4XiA3SPbTMnuTdz7yHg4AnT4OxhOHJfUzWBkfPv4LU4HcSizFIwHDF6Sjt28CgUeS/mckdZ5w/QPbZNdm5n5q5uvVgvu0f1oi6rmV3AuQR6Aos6NORkGhlFDnFC8myN5xSkAxULvKuUH6CUdfkFxgTesO1oBOv9+OBthxfPA6NgDGDRi2j5cMAYMGmVkdM4QD8ecorTuUT3ByQtUxtBRxjD71DvK0rK7dN3PSd56u21hud9hfWR9p5WDDdfPjJs+OZ4B93xCv70lXBh8gNFtf51zl8Tf7SnafQ0q88oAAAAAElFTkSuQmCC" alt=""></div><!---->
                        <div data-v-b73557e2="" class="head_right"></div>
                    </div>
                    <div data-v-b73557e2=""><!----></div>
                </div>
            </div>
            <div data-v-6e2d35de="" id="scroll" class="content-container">
                <div data-v-6e2d35de="" id="content" class="content-scroll"><!---->
                    <div data-v-6b16f068="" data-v-6e2d35de="" class="home" style="">
                        <div data-v-6b16f068="" data-v-6e2d35de="" class="container">
                            <div data-v-cd710fca="" data-v-6b16f068="" class="banner" data-v-6e2d35de="">
                                <div data-v-cd710fca="" class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <div data-v-cd710fca="" class="swiper-slide swiper-slide-active" style="width: 399px;">
                                            <div data-v-cd710fca="" class="item"><img data-v-cd710fca="" src="{{asset('')}}static/img/12.png" alt="" data-src="{{asset('')}}static/img/12.png" lazy="loading"></div>
                                        </div>
                                    </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                            <ul data-v-2b218ac2="" data-v-6b16f068="" class="flex list" data-v-6e2d35de="" style="margin-top:-500">
                                <li data-v-2b218ac2="">
                                    <div data-v-2b218ac2="" class="title">Total Assets <img data-v-2b218ac2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADjSURBVHgB7ZXfDcIgEIcPdABHcAYWUDepA2hHkG7gnwHaTYgLdAc3aKrPnNCk+lITDi4xafieeLjw+wLcAZDJZP6MCC3cmnrVy1cJFh/t7tgAEzK0sIdnAYjaKdfqfjsBE8ECju6zciJcEsECw7EjVtwSwW9gRJmLuwbxDRZCt5tDBZGQBbglogQ4JaIFuCSSBCYlEPaUOUFpwx87SIQEkgSGNvTDacS1KXVKxj/CyfBSE7eJbEOm8CgBznCyAHc4SUCZa+F/Qs5wD6ELcM0d7lmGFlqwZ4kL/yV3LryBTCYzF95dfHtiVPp2SwAAAABJRU5ErkJggg==" alt=""></div>
                                    <div data-v-2b218ac2="" class="val">${{number_format(Auth::user()->available_balance(),2)}}</div>
                                </li>
                                <li data-v-2b218ac2="">
                                    <div data-v-2b218ac2="" class="title">Level <img data-v-2b218ac2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADjSURBVHgB7ZXfDcIgEIcPdABHcAYWUDepA2hHkG7gnwHaTYgLdAc3aKrPnNCk+lITDi4xafieeLjw+wLcAZDJZP6MCC3cmnrVy1cJFh/t7tgAEzK0sIdnAYjaKdfqfjsBE8ECju6zciJcEsECw7EjVtwSwW9gRJmLuwbxDRZCt5tDBZGQBbglogQ4JaIFuCSSBCYlEPaUOUFpwx87SIQEkgSGNvTDacS1KXVKxj/CyfBSE7eJbEOm8CgBznCyAHc4SUCZa+F/Qs5wD6ELcM0d7lmGFlqwZ4kL/yV3LryBTCYzF95dfHtiVPp2SwAAAABJRU5ErkJggg==" alt=""></div>
                                    <div data-v-2b218ac2="" class="val"><img data-v-2b218ac2="" src="{{asset('')}}static/img/V0_icon.69de7dcc.png" alt="">G0 </div>
                                </li>
                            </ul>
                            <div data-v-6b16f068="" data-v-6e2d35de="" class="notice_bar">
                                <div data-v-6b16f068="" role="alert" class="van-notice-bar" data-v-6e2d35de="" style="color: rgb(255, 255, 255); background: none;"><i class="van-icon van-notice-bar__left-icon"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOHSURBVHgB7ZdBaxNBFMffJCtUUEg/gdOD0B5sNp+gKfgB1LskgVq82X6CpJ+g9SBCLaTePGlFPXgygicFTYulFaTZgqV4sq0VY5tkfG8zm7zZbNPsshaE/uEls9mZeb+ZeTPzAnCu/0wCzkBKqdTY5yUbCxKEcDav3anAWQGRc/yytaVrR/t26ds7+/2vXe7WgQvJyc2xggNxAikacdvxBJpXlt77g+YR3Pr6FHaODgNaB0NZMJjjFHOYhu4MpPq1e/D94wkwbq8SjhtlLEwamNAf4h5aVlsoEcj1L0+4oz38LCjVmsc4kuzFJI+pBATDEEgNrRQCBh1CFe0+2uzd7dcVs1OY2xifWoGEKPh+L/JHEQBT1CCnOa+gbWuIisDdwyuMri3igIRsd4o7Kz010n336A2wgdYvW8POSIH6NGMIYfIBMFRxBW0VzdHO96CPrq4v2tDUMCThwnNPj/HHrPd08aCRx68FA0jvmKKvb2wIM6cB+GU1RFbxuRcE0NVQ88JKPekGdNu3EGmvzGMoC2zLopYRJB8WRhNI/lS/ZFX5czVDy6OcTm2l7CCgnNkpzEFEKaE6I6bd5cWHUQcS1W59kQoCslm5J0gjS7lx1yOclX1WSUIAED/kHIhJKuSScyDecBjikwxTmQPxwJvQJ3UkKRhgVgRc6Ra7k8GB3rIywRQhovzxIWvlnsEJFsg8zjgQHUx8ZDP61A4PZM42DB02+IYB+1M5pdhWR6LtHiB93vi3egkb1tAILjvoMqqECQQt8z6sWyYgeq94JePqQKgFTc7PJIk233Gm3AONjJaYHDvYzpyRhlX9k2zsKW/nCjdfYsQiR+vkKdFSlQ4DBAidliBcDHk3PZl7542tLeWx9+7AdJoxuvEQ8yCrxuCMi7dfPnQDv55BRFHKmtt6xX4RTjLZutloibJQ/BBWhc3x6eVBgCS0cyJPNHpaJi9jPDWeCMjMpf1OzNnpC6ShCEjqR1qWEe+y1bEmwcypJW9PWWNu6yXsHAenscmmyqxnpqthgEpgxtICAs32qc//cbiQCGX7oeggVKBm+VKxd32ByAHNEl+eEkKFygQ+/NzN3q69kLifJvDQXP3dspadTCFCWtOGojPIr7KOsdg10P+yE44BL7V9DuYJz1WNluANCKXC64d5RcQPlddXSRiV4V+KYickWD5M/3H8t/csSHTPVeBcMeov73EzyLp14JsAAAAASUVORK5CYII=" class="van-icon__image"><!----></i>
                                    <div role="marquee" class="van-notice-bar__wrap">
                                        <div class="van-notice-bar__content" style="transition-duration: 91.7898s; transform: translateX(-5161.07px);"> 10***66Recharge60 10***13Recharge192.034338 10***59Recharge150.5 10***69Recharge59.24 10***30Recharge48.0883 10***30Recharge13.7642 10***51Recharge99 10***70Recharge60 10***92Recharge60 10***20Recharge60 10***95Recharge60 10***05Recharge60 10***80Recharge60 10***92Recharge9.986 10***92Recharge46.228366 10***89Recharge60 10***45Recharge60 10***11Recharge60 10***07Recharge1000 10***39Recharge100 10***93Recharge60 10***93Recharge60 10***17Recharge30.254 10***77Recharge77.088843 10***85Recharge100 10***72Recharge100 10***11Recharge100 10***54Recharge100 10***57Recharge100 10***94Recharge60 10***66Recharge44.059355 </div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-d59d9098="" data-v-6b16f068="" class="info" data-v-6e2d35de="">
                                <h3 data-v-d59d9098="">Algorithm order</h3>
                                <p data-v-d59d9098="">Standing at the forefront of technology and finance, achieving steady multiplication of assets</p>
                                <div data-v-d59d9098="" class="view">View details <img data-v-d59d9098="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAADjSURBVHgB7ZXfDcIgEIcPdABHcAYWUDepA2hHkG7gnwHaTYgLdAc3aKrPnNCk+lITDi4xafieeLjw+wLcAZDJZP6MCC3cmnrVy1cJFh/t7tgAEzK0sIdnAYjaKdfqfjsBE8ECju6zciJcEsECw7EjVtwSwW9gRJmLuwbxDRZCt5tDBZGQBbglogQ4JaIFuCSSBCYlEPaUOUFpwx87SIQEkgSGNvTDacS1KXVKxj/CyfBSE7eJbEOm8CgBznCyAHc4SUCZa+F/Qs5wD6ELcM0d7lmGFlqwZ4kL/yV3LryBTCYzF95dfHtiVPp2SwAAAABJRU5ErkJggg==" alt=""></div>
                            </div>
                            <div data-v-6b16f068="" data-v-6e2d35de="" class="itemBox">
                                <div data-v-6b16f068="" data-v-6e2d35de="" class="com-title flex">
                                    <div data-v-6b16f068="" data-v-6e2d35de="" class="left">market</div>
                                    <div data-v-6b16f068="" data-v-6e2d35de="" class="right"> More <img data-v-6b16f068="" data-v-6e2d35de="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAM1BMVEUAAAC9vb27u7u7u7u7u7u/v7++vr69vb29vb29vb29vb2/v7+vr6+9vb29vb2/v7+9vb1wSDrWAAAAEHRSTlMA3yBAgBDPkHDvgH8QoGAwgYnI2QAAAGFJREFUKM+l0TkOwCAMRNEAZl8y9z9trJQeGhKXT0Ify9fZjL4YG5AJBUCxGJNqsOor4LzVACBFq0V1UmyexepBTCx2xbZ57qIJOd5quM2X8lvhSP4TuflGvIpwRGfJ9W0eIl8FPPjFWJQAAAAASUVORK5CYII=" alt=""></div>
                                </div>


                                <div data-v-6b16f068="" data-v-6e2d35de="" class="quotes">
                                    <table data-v-6b16f068="" data-v-6e2d35de="">
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <th data-v-6b16f068="" data-v-6e2d35de="">Currency/Name</th>
                                            <th data-v-6b16f068="" data-v-6e2d35de=""></th>
                                            <th data-v-6b16f068="" data-v-6e2d35de="" style="text-align: right;">Last price/24h change</th>
                                        </tr>



                                        @foreach ($coins as $coin)

                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;">
                                                <img data-v-6b16f068="" data-v-6e2d35de="" src="{{ $coin['image'] }}" alt="" style="height: 0.64rem; width: 0.64rem;">
                                                <span data-v-6b16f068="" data-v-6e2d35de="">{{ strtoupper($coin['symbol']) }}</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-36" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 49.819082516894795L14.210049456695522 60.01383070370757S17.79310344827586 65.89596311483224 22.689655172413794 61.05225184954969L22.689655172413794 61.05225184954969S27.586206896551722 56.20854058426715 32.36939069228332 61.16423532716989L33.97717336533601 62.83000450536611S37.37931034482759 66.35484341265352 42.275862068965516 66.2038249952566L47.172413793103445 66.05280657785967L56.9655172413793 66.12929432779323L66.75862068965517 66.3705619011705L76.55172413793103 65.95903514801712L81.44827586206895 65.51849255645368S86.34482758620689 65.07794996489022 89.9736041167886 61.760981853310156L91.24137931034483 60.60214226805629S96.13793103448275 56.12633457122236 100.58847424351106 61.04586081576746L101.0993561519679 61.61057771401446S105.9310344827586 66.95140179708508 110.82758620689654 61.669991134072646L110.89842811149916 61.593581200830855S115.72413793103448 56.38858047106021 120.62068965517241 61.52699355995394L122.11833855729934 63.09861766499925S125.51724137931033 66.66540664884766 130.41379310344826 66.11923335984633L135.3103448275862 65.573060070845L140.20689655172413 65.05993135930657S145.10344827586206 64.54680264776816 149.97809874000575 65.2376736300702L154.8965517241379 65.93475262466653L164.68965517241378 66.48576492605378L174.48275862068965 66.97722952081277L184.2758620689655 66.99999999997345L189.17241379310343 66.85211592111992S194.06896551724137 66.7042318422664 195.39004787178837 61.98694131692867L201.1653135060041 41.364755452568836S203.8620689655172 31.735243004288485 206.7604480406782 41.306000484063475L210.7567933386321 54.502359780175034S213.65517241379308 64.07311725995002 217.0906639147487 54.68177027738879L220.01278436111335 46.69378747230428S223.44827586206895 37.30244048974305 227.2228593128092 46.56270613244456L229.46679585960456 52.067803259020614S233.2413793103448 61.328068901722126 235.04756480400977 51.49253668620505L241.2282972649557 17.835532215543616S243.03448275862067 8.000000000026539 245.5112436653552 17.688428944436026L250.82773881251276 38.48514183120571S252.82758620689654 46.30801214842782 257.7241379310345 52.728329182168466L259.2990903503385 54.79339341811686S262.6206896551724 59.14864621590912 267.51724137931035 61.60323988643633L267.9778259146103 61.83412642634909S272.41379310344826 64.05783355696353 277.31034482758616 63.25380649520872L277.31034482758616 63.25380649520872S282.2068965517241 62.44977943345392 284.072587432587 57.85174987284239L292 38.31449549806068" fill="none" stroke="url(#vue-trend-36)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 435.888, 435.888; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> ${{ number_format($coin['current_price'], 2) }}</div>
                                                <var data-v-6b16f068="" data-v-6e2d35de="" class="">
                                                    <i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i>    {{ round($coin['price_change_percentage_24h'], 2) }}% </var>
                                            </td>
                                        </tr>
                                     
                                        @endforeach

                                    </table>
                                </div>



                            </div>
                            <div data-v-4e3fe4c4="" data-v-6b16f068="" class="teaminfo" data-v-6e2d35de="">
                                <div data-v-4e3fe4c4="" class="cname"> Community Information <img data-v-4e3fe4c4="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAESSURBVHgB7ZbNDYJAEIVnF1oxMSEa6AAr0A6MBykKPVCCdkAHkKgJibXAynIysP/MepF3hIHv2wkkD2DJv4foBtaPSwodpDAzQchuryirwUYgqvK4DUgFWCGwazbn8vsSVc23lBwAM4JNKgX6uyV4Tqi6yde1qvIksNgEo7AnDGLT+VA38E6GD6cGg6yf1yPpmDGchwJSOBw6VoBlUARkcMb0m5stID85O/X/+F33/CwBFbzZZoXJO5wFMODOAlhwJwFMuLUANtxKwAfcWMAX3EjAJ1wr4BuuFPgFXCqABh/1CV7LxiOTSiavYW4n7/tEPPSJXmZcx3gmfUBcw9zXrusTVHClxIKbRNiKdWtbsgQzH3FhqIls8vSZAAAAAElFTkSuQmCC" alt=""></div>
                                <ul data-v-4e3fe4c4="" class="flex">
                                    <li data-v-4e3fe4c4="">
                                        <div data-v-4e3fe4c4="" class="val">0/0</div>
                                        <div data-v-4e3fe4c4="" class="title">M1</div>
                                    </li>
                                    <li data-v-4e3fe4c4="">
                                        <div data-v-4e3fe4c4="" class="val">0/0</div>
                                        <div data-v-4e3fe4c4="" class="title">M2</div>
                                    </li>
                                    <li data-v-4e3fe4c4="">
                                        <div data-v-4e3fe4c4="" class="val">0/0</div>
                                        <div data-v-4e3fe4c4="" class="title">M3</div>
                                    </li>
                                </ul>
                            </div>
                            <div data-v-6b16f068="" data-v-6e2d35de="" class="itemBox">
                                <div data-v-6b16f068="" data-v-6e2d35de="" class="com-title flex">
                                    <div data-v-6b16f068="" data-v-6e2d35de="" class="left">Hot News</div>
                                    <div data-v-6b16f068="" data-v-6e2d35de="" class="right"> More <img data-v-6b16f068="" data-v-6e2d35de="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAMAAABWBG9SAAAAM1BMVEUAAAC9vb27u7u7u7u7u7u/v7++vr69vb29vb29vb29vb2/v7+vr6+9vb29vb2/v7+9vb1wSDrWAAAAEHRSTlMA3yBAgBDPkHDvgH8QoGAwgYnI2QAAAGFJREFUKM+l0TkOwCAMRNEAZl8y9z9trJQeGhKXT0Ify9fZjL4YG5AJBUCxGJNqsOor4LzVACBFq0V1UmyexepBTCx2xbZ57qIJOd5quM2X8lvhSP4TuflGvIpwRGfJ9W0eIl8FPPjFWJQAAAAASUVORK5CYII=" alt=""></div>
                                </div>
                                <div data-v-5adce6a8="" data-v-6b16f068="" class="banner" data-v-6e2d35de="">
                                    <div data-v-5adce6a8="" class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight">
                                        <div class="swiper-wrapper" style="transition-duration: 300ms; transform: translate3d(-762px, 0px, 0px); height: 150px;">
                                            <div data-v-5adce6a8="" class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 366px; margin-right: 15px;">
                                                <div data-v-5adce6a8="" class="item">
                                                    <div data-v-5adce6a8="" class="img"><img data-v-5adce6a8="" src=""></div>
                                                    <div data-v-5adce6a8="" class="flex1">
                                                        <div data-v-5adce6a8="" class="text van-multi-ellipsis--l2"> LumeX: The world's first OTC integrated trading platform based on price algorithm trading innovation and breakthrough </div>
                                                        <div data-v-5adce6a8="" class="time"> 15/07/2024 06:13:26 </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-5adce6a8="" class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 366px; margin-right: 15px;">
                                                <div data-v-5adce6a8="" class="item">
                                                    <div data-v-5adce6a8="" class="img"><img data-v-5adce6a8="" src="data:image/png;base64,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" data-src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250312/93d66e2d52b9bbb9a97f76c77d201d51.jpg" lazy="loading"></div>
                                                    <div data-v-5adce6a8="" class="flex1">
                                                        <div data-v-5adce6a8="" class="text van-multi-ellipsis--l2"> The Price Evolution of Bitcoin Over 15 Years: From Genesis Block to Trillion-Dollar Market Cap in the Global Financial Revolution </div>
                                                        <div data-v-5adce6a8="" class="time"> 06/08/2024 22:48:52 </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-v-5adce6a8="" class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 366px; margin-right: 15px;">
                                                <div data-v-5adce6a8="" class="item">
                                                    <div data-v-5adce6a8="" class="img"><img data-v-5adce6a8="" src="{{asset('')}}static/img/123.png" data-src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250317/378f8db2f538eae53c93cc8d418265f5.png" lazy="loading"></div>
                                                    <div data-v-5adce6a8="" class="flex1">
                                                        <div data-v-5adce6a8="" class="text van-multi-ellipsis--l2"> Quick Overview of LumeX </div>
                                                        <div data-v-5adce6a8="" class="time"> 15/07/2024 10:55:12 </div>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                           
                                        </div> <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <div data-v-5adce6a8="" class="navigation_dot">
                                        <div data-v-5adce6a8="" class="dot"></div>
                                        <div data-v-5adce6a8="" class="dot"></div>
                                        <div data-v-5adce6a8="" class="dot on"></div>
                                        <div data-v-5adce6a8="" class="dot"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-v-d496beb0="" data-v-6b16f068="" data-v-6e2d35de=""></div>
                    </div>
                </div>
            </div>


            
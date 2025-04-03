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
                        <div data-v-b73557e2="" class="myName"><img data-v-b73557e2="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALAAAAAwCAYAAACxB/CGAAAACXBIWXMAABYlAAAWJQFJUiTwAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAA15SURBVHgB7V3fiyRXFf5OVSN5y/ogKATT67OSGYVAnrY3kocQMDtohCi6M2+RPGQXQQki00tAUZSZFTWJQqb3KRAfZuIPBEF38qCRqMyE/AFbPvmYCRIMs111Peeec2/d7unu7R+z2c12fUxPV9+6dW/N1Fenzv3OubcJo/DiQTursFk5dIjoQThHznbxZ8cgAg6phV71zOpV3A68eNBBiU3upy0frf8ChGt4drWHBg0YNFyQv3xwseqX28iy+z1RpYZTApH8poyLK1/MbHZwVHCtR/Gt1QKnhV/+a5fbv2CfnPSqJyr3keNNunHqfTb4SCIb+PTim+3K9XvI3RlQyVwtmSsVs7pyfjtnBvsy5hHzWPY56p8F9XdwSshe/scWUXXBSb/SfsY3S6bb3Dc52c6qNlH/L9g5OIMGS40BAlNOO1CC8IeS5N0F8ihZid+J8lLJxHUoF/tYdvDy3y5gUfz6zY5DdYlvGD6Xyjl/s0hf7MzwZzkfUiJL2Vkcf3AJDZYaNYF3rp9hy3uOSQl5CYmEtKQEIt7HFtmTSF9kRFdycX16EgsiI1wUcjprm28OR+FmCkS2G0zOkXKcQ4OlRivZXHHos0Ul73V6nzcTH5cdBvE6pUw8YvNIpRbvFdfU/GjCoqiysk2+O/lxvkHftzjf0pcOIH1ncm6MNhosNRIC95mwmQ7M4AlLSlglkA7oyMZyzvPVyITA60XB40NutCLfODlTHrRL35/8tvvEn1Z2Kt02+AijNfDJP649M9XqShkFsgijKqVPZqqaUxOsjMfHsTD64opEaxusMNtmCgpE6I/i2TVYZrQGtryfUHlumLVFTaLa+kHZNEQfuh8LwuXV2/zW0ZvFW3xEBVhvrHgqynLWhRssNepBXKsvAyMvU6lUVcZBGsWy+p1skKXKQCmvB7Ewqj1KFBA9B6cvClKa71vOiVUKdw0Nlho1gavjo0jIKJ2pVAZRA1ST9fsclYnUxseIlJazrPXan1awCL7x2D7b++1wk6jqUCK8RFpTOU/6LQt8/Ys9NFhq1AQ+Pi4gKoRZWQkgeOubB6KWQUYDEmvMWi1FeQvlc1gUX3vsMvd31fqgoEOztEZqjX35PuvFj6LB0mPQi/3N76+ziesQ3MBu/ynIZ8EP1TGUDrQ00Ovs1xU89cQVLIpX/9hmq77JbbdRmVxGdMivq3jq8X00aIDhUfxrf1hhi3sg8phKY1WsQqYKpEk9cYBnmQrO5DU2lL2qyq/iq08cokGD24iTMtTu7jqb1Fdsn3I51Dwpump4I6oCFBQu+4h3ucZ7dW9eInuPywqX4XWsrfXQoMECGK2j7u62mZtd5uM5MuaqNMtSmXNnLDvMqO2UrhKYcxq9i6SPUQgXuhrY4DhEr3LZZSbyERo0mAOzBwI8uasO+wmbbFDbIcAQmelbDe5FTH8cdKoHsee+9JU1fMgIMekEZ/kGLTAjuJkuv20mRfvczvkZjl/nt53h47m8w9vXk/JtLr+MOcHtyTl2k6Lz3N7+iP/DvNjg9noj+m1D/4720K6p/p4xx1/jY9dlI8OsWFsrsPblHqqb51mHPVQVQpJuRIJTGc7ryXWyjyYDpfJbSAjyslh5Ab97tYMGt8IlvpgXMQf4OJE3u7gDMKMgN3QxtOuS3VRjMYa8e4G8gtkJHLD2dIG8XGPiHklqZR180JRH0ZRdXeY09TKSV7Vcn2vsib94KuZyYHvWBCarv4s7iAkk7o4jMZdLrvcweUUU2EjrzU9gweNPF0zEq16rFcJmMbAhllU1ZQs8+PzeOghh+0xfznEKUbylgL+odnGnhbgn7Rnqiys1D3qTGp2DxKPIe57bGRgvLUZgQSUmXYINHASJyeY+n9j5yF3ugyFOAxEhWb4OR0s5E7+ZWTE92hj0mcfCiNHBXYJbkDhOTuBt+fvSqK7UXxsmr2BxAmfHRxqVcxKVQySqWVeZweH8LA4NC+u7ktvZZ6LTGkfc0yiS7QvpBR8FGwR2k6J93AWYQOIt8fHtpltPyn39cQPsFhbF4xsF/vyKnpz9ttR3S1+r6ox3mwnqk42JEum4wRQQ30982fC0kgt+KErCcEXze1Mr3cNtTD01l2bSU/QotZ5CRj5GSDzsJvSGjiswgbyCxS3w9Z0zOukz5EeUiZtQIknMgSoVPsPMTxGKqgRKNLglCgwNYBg7YwZ1QvR2ctwsoX3xsW9MeI0acEvZjQmvE4PICZYYyXlPJK9gcQv8sZttmcwBiukSXhIOc+FDPrzl74bQs+b7wmZZZDMNMpYWfDH3mECyDkdImmpDLW3Une0RnPqPG2bxMCXat9h/auOVxBIfjGh3j6bQ5Re3wGW5gsSfjQO13AZ0wRcOcprURT9msJFmvD2Iv/5qsVTMJQFfVPF90xyTDpNgSzYsKNJN9l0Z5WLcZRBte9RNcUudWLCYBT7YOUPv/2/TiZ+rFpgsycdyIkJAuapX9KE4sSKdFSTT256rTj4iG4yGRC5TqyUXW3JO0kCHRPS6mB2THuuCUWF/uaEmuSnFqEILzHQnHNe1xLKxbc9PYCYvPvjvFnJq++ydMNGTbAEfJXLIfCB/HllN4hhutlRMJ//8N39R4JFnZ/HXlhL26JUwbDpQS61VgfmNQTHNo3vofITAM2UemkrSGyqWay/LM6RP44kknp3AB1tMXKzQ8XtbyLKHlHvOCwvx5IIckdXT2JS81eC8upipGdZbo036+8/alSuv4JHLBRqMhQQOLEQ8ahLBxqwk/DBh5z08sBN3R8i6DVUnpiLxIIHf+ul6lmXn+Inf9j5AkkdmxrTtbvJjK5dHl+xJ1IPB9LO6WMips4qJBnc4S44nT95Md7Ibsc62ed29tXVEcleHY7Tquw7lb/Hwt3toIOjy6xwGL/Zd7fcmoe3U770a3B2R27iOuEjDEttIEiuBD7baVJbS6Ir4sxKUCLm9ISnYD/dYB1N5QXLdHYWFT9IGKaGwdRipPZhbScEGhxn8umggBZ+D/0DyF8dX9KtUwOe1rbl//uQi8nwDq6dqpZ90ae7ydChw0ids22BqWpzDnEgudvCH5/V7U8zzfxAcmisxFhOScwaCMhN04hMkVgK7m9ddImXpxKHKhlghI1jQjwMzWYTEe7MxShFP0k93d8ivIL+571afLxCOf+vHKy5n94OyTefKNg36wYkRVyWunqUEu6GczXZyHT7DXd5cxelhG7Ojx6/Xh8ramDLUOwYzkSfxh8WVmNfvTTHP/0EgpBpL4DHkLTDmnKclcQsHP7hEqHyF4MXajCLzbmODtulFBm99/RJQtZery/OwTum+8PzoMOfD3/HOvjv44T77z2zx3YqLkoQtZqLktaz4YOETDZMi0Vfw9o8u4qHvXsOdxT7UCp+WPrqHGWGJND3cpRiTWVZgRHJOimlInFGOb/rEm1w1Wb+gX25T6PMQRSt1ZUrLcfD7dcp9mDnst13u9jGOvCnEKrtqjY85oiysRBmy02zhvpBXbNE8zXirNNMtd2HVzHXcYdgFkCeBEG/emSVy3D7GJIXfAxgmoPy9t4yyCazOGk7+b30WG+GdF+wRDcTVb2jAsOpD2yJnMag2uF6aChHgu+Vz39/HtHjnha4oD9oPoj/tkvNx8XHgJ5iGtayCWPdv99nvnUWDpUXmlzD1C5O4mCWGeuZEtIqUfjYLTHViuljKYiby+t7LvdrC+zYQ1gG2tYF1BR7q+6nOztYkTnItHBosNVp+ug/MmkpJ+OUtoq1Plui36peWfiVLnbypqQ46cJsRmTwWKuurojhcjN2riJEYZzPKvi453L4MqwYfDbS8H2tyrT2skcySj0KYPtbrxYFFA6Z04d450yJ9DgW0KWucgtSgAzvtImoSVA8wGzRoeTcACMsA+0JneQoxmcwQ60STGJIbEoLNgvtwRP2qliGCofXslMhGpQ+GLJxU0ChCsNqh4fFyI0NeWlZY6dzAdJ/SIagByYqUlr9rakFFob6vMyvOdo/CjGXQ0HtcmbLUc8nqxQV9HSrn67PBPYWWn+6jjqX6kz7BUgNkIYwQAxmEWoAIWkXqY8wBL6UR7nd14xp302Q2QvLVBvVX1EWhZF7ZqsE9AnUhnOYzusgab9mMRVoxUbSCK4qgncWPc4AjehLc6ISFfnzjmYbnfIeZKXh+X4ja2a2V0UwZUA3uPbT8Y1m2AlktjQEJeY298p0UytkgFkQOA6D5GOxaNy+jyg7CDQJEo4+wTbkmUrhaI9Hey/4VNFhqZERVEeavUZg14X1c9jvNPw6Rsai9Br+XdP1ejeD1C8yDB7YPua3Lw9PtJdciRgLVLyaKfXG/KDdwdrtAg6VGxiS85pKBmn6RobOJl47i1w3kNsiT8jDIC2s7eC25egPz4oHtbb5rPg8JRVP47rkyrCsRFkfR98y94eh4FZ/e7qHB0oNw49IZuu/4APKl3gjPZhumAVHrDU/14GGEquYY33Cf/PlncBrg88F9/ZPz4/LqCO9/rGCr2wzcGkQoH//zTJudies+YR0xryyO22LtVItFEB54IFVVa/jUSwUaNPiQUZNTSNxyklPaYdehzVZYUuAskQfJrB9fcMQbh1z8Bj7xUhcNGtwh/B89AbiCteIr+gAAAABJRU5ErkJggg==" alt=""></div><!----><!----><!----><!---->
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
                                    <div data-v-2b218ac2="" class="val">$2.43</div>
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
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/26c4dfd2da84165395483789c7b653a8.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">ETH-USDT</span></td>
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
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $1915.95</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 5.13% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/6abf2c2df94aee98514bb73ecee7477c.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">DOT-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-39" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 54.47785428740675L13.687585169144867 61.7068804012155S17.79310344827586 66.92507018966299 22.689655172413794 62.44081258986141L22.95886882969002 62.19426696824361S27.586206896551722 57.95655499005983 32.48275862068965 61.88010460844259L33.55797906302042 62.741666171325285S37.37931034482759 65.80365422682536 42.275862068965516 65.84975010717318L42.275862068965516 65.84975010717318S47.172413793103445 65.89584598752099 52.0470297919576 66.36110127342141L52.068965517241374 66.36319491774965S56.9655172413793 66.83054384797832 61.77102308748489 65.78090230307406L61.923375578206866 65.74762474419626S66.75862068965517 64.6914874068784 71.65517241379311 65.4117669192231L71.65898802422433 65.41232819298789S76.55172413793103 66.13204643156779 81.44827586206895 65.43876277089471L81.44827586206895 65.43876277089471S86.34482758620689 64.74547911022164 90.71277151769314 62.42644335527803L91.24137931034483 62.14579406336188S96.13793103448275 59.54610901650213 100.54934000795664 62.90379452869328L101.03448275862067 63.27305450777122S105.9310344827586 66.99999999904031 108.5959687913288 61.45342748864665L111.44531297074712 55.5230396185265S115.72413793103448 46.6174494037158 120.62068965517241 55.198921382796776L123.01833925539789 59.400932107724245S125.51724137931033 63.78039336187775 130.41379310344826 64.98371123940132L130.41379310344826 64.98371123940132S135.3103448275862 66.18702911692488 140.1701302037492 64.8429015935261L140.21966993886025 64.82919981118171S145.10344827586206 63.47843627476279 150 64.78213646619072L150.1091808614975 64.81120572105694S154.8965517241379 66.08583665761864 159.79310344827584 65.33258702188007L159.79310344827584 65.33258702188007S164.68965517241378 64.57933738614149 169.52912352471316 65.63912503845266L169.6977250297835 65.67604681998466S174.48275862068965 66.72391388850822 179.37931034482756 66.58844037730258L184.2758620689655 66.45296686609693L189.17241379310343 66.00493125149872S194.06896551724137 65.55689563690052 195.6709849350921 60.90818737718623L200.60394970343887 46.59380778354877S203.8620689655172 37.13946175253879 207.13252074528162 46.58954879744138L210.38472063402867 55.986896352370294S213.65517241379308 65.43698339727288 217.89640350149298 56.38093796558871L219.20704477436905 53.58240455244174S223.44827586206895 44.52635912075756 228.20179341034006 53.32431745881979L228.4878617620737 53.85378167449436S233.2413793103448 62.65174001255659 235.00519610647657 52.80852151911231L241.2706659624889 17.843218494403956S243.03448275862067 8.00000000095968 245.34130069026463 17.73029244416229L251.40436287286715 43.304641996752046S252.82758620689654 49.3078809442777 257.7241379310345 53.0613092082061L258.3117201861052 53.51171757062436S262.6206896551724 56.814737472134496 267.51724137931035 54.46932928421347L267.51724137931035 54.46932928421347S272.41379310344826 52.12392109629244 276.3980968717269 55.81207535516039L277.31034482758616 56.65651678814872S282.2068965517241 61.18911248000501 286.2973685654582 55.91761542529177L292 48.568486838085136" fill="none" stroke="url(#vue-trend-39)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 411.551, 411.551; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $4.217</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 4.87% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250401/8d048720552869bb3fa5ed8bb14d9430.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">FIL-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-42" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 54.8871082431712L12.89655172413793 51.44283486584973S17.79310344827586 47.99856148852827 21.280343417022944 52.864606626549126L24.492510213553267 57.346818565747625S27.586206896551722 61.66371899064858 32.48275862068965 63.7205052356793L32.48275862068965 63.7205052356793S37.37931034482759 65.77729148071 40.84262553106389 61.75087416929149L42.275862068965516 60.084606995429105S47.172413793103445 54.391922510148206 52.020033547811266 60.12633251902292L53.7890996335631 62.21901940079497S56.9655172413793 65.97650902339532 61.86206896551724 66.45831634591752L61.86206896551724 66.45831634591752S66.75862068965517 66.94012366843972 70.7625934769716 64.08065536093503L72.56689373855907 62.792100295931775S76.55172413793103 59.94630267366014 81.44827586206895 59.91139377038809L81.44827586206895 59.91139377038809S86.34482758620689 59.876484867116034 91.1781254320464 60.66176784292089L91.24137931034483 60.67204492398763S96.13793103448275 61.46760498085922 97.82561921470631 56.80275308636339L102.52895827253494 43.80249606526977S105.9310344827586 34.398992597953445 109.98276541050551 43.54139252844977L111.67240700328757 47.35393078824097S115.72413793103448 56.4963307187373 119.07153377087536 47.07322395443626L122.16984553946945 38.35130280096428S125.51724137931033 28.928196036663238 129.75555133663434 19.870783122058526L131.0720348702622 17.057412915677013S135.3103448275862 8.000000001072301 137.487488016508 17.76012538627773L143.82321824468315 46.16318208391725S145.10344827586206 51.90244888538095 150 55.158513006978936L150.74223078446371 55.65207483648526S154.8965517241379 58.41457712857693 159.79310344827584 59.37039227622267L159.79310344827584 59.37039227622267S164.68965517241378 60.326207423868404 169.34174654704287 62.12838589053835L169.89056064462952 62.34099154877403S174.48275862068965 64.11996785011564 179.37931034482756 64.64610485214823L179.37931034482756 64.64610485214823S184.2758620689655 65.1722418541808 188.64603901619398 62.90186911342243L189.17241379310343 62.62840948939601S194.06896551724137 60.08457712461123 198.57634512126964 63.267473760142266L199.8408861210654 64.1604323408094S203.8620689655172 66.9999999989277 208.75862068965515 66.49320895087452L208.77039996316742 66.4919898010105S213.65517241379308 65.98641790282133 218.55172413793102 65.6117366363137L218.55172413793102 65.6117366363137S223.44827586206895 65.23705536980606 227.9629083879914 63.304518696282635L228.34482758620686 63.141034104206504S233.2413793103448 61.04501283860695 237.881957835631 58.430714675876445L238.13793103448273 58.28651061601194S243.03448275862067 55.528008393416926 247.28306172847977 59.20702049398019L247.9310344827586 59.76812565896344S252.82758620689654 64.00824292450996 254.35769428391214 57.71431072870458L260.25841053274473 33.44235992031668S262.6206896551724 23.725383160658232 264.95042100389765 33.450214873483226L270.084061754723 54.87920599007384S272.41379310344826 64.60403770289884 275.4059178907947 55.06217262017276L280.5228869766955 38.744193885921305S282.2068965517241 33.37389909377373 287.1034482758621 36.14873883981265L292 38.92357858585157" fill="none" stroke="url(#vue-trend-42)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 441.496, 441.496; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $2.883</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 3.77% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/a8e58ed2bf83dface4ac1ffa9f772e59.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">BTC-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-45" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 48.309570735473116L14.803814602051581 60.21941298689905S17.79310344827586 65.45205977179866 22.689655172413794 61.939194645648364L22.689655172413794 61.939194645648364S27.586206896551722 58.42632951949807 32.36580284326425 62.0967385931369L33.49564564589517 62.96438207614186S37.37931034482759 65.94677605020506 42.275862068965516 65.98292190894706L42.275862068965516 65.98292190894706S47.172413793103445 66.01906776768907 52.061078398906716 65.7389183749917L52.07697729602593 65.73800727416322S56.9655172413793 65.45786502524686 61.86206896551724 65.46701323738421L66.75862068965517 65.47616144952154L76.55172413793103 64.84911251821764L81.44827586206895 64.47791184819953S86.34482758620689 64.10671117818141 90.85358053797955 62.161163557468605L91.24137931034483 61.99382660488753S96.13793103448275 59.88094203159365 100.45156126326923 63.01671853136542L101.03448275862067 63.44047101578946S105.9310344827586 66.99999999998528 109.70465108637562 62.26647244588841L111.02860931112487 60.605733320637356S115.72413793103448 54.715783058576136 120.62068965517241 60.43970516870195L122.11103339902047 62.18187230747581S125.51724137931033 66.16362727882776 130.41379310344826 64.29804247246858L130.62894077040406 64.21607127289609S135.3103448275862 62.43245766610939 140.20689655172413 63.49104288127053L140.30766320314854 63.51282761742544S145.10344827586206 64.54962809643168 150 64.86314190756514L150.009693473905 64.86376255615997S154.8965517241379 65.1766557186986 159.79310344827584 65.23203533475623L159.79310344827584 65.23203533475623S164.68965517241378 65.28741495081385 169.55470535019603 65.84470523127253L169.60427430338436 65.85038334245637S174.48275862068965 66.40921250023571 179.37931034482756 66.0408641941176L184.2758620689655 65.6725158879995L189.17241379310343 65.13925961434782S194.06896551724137 64.60600334069615 195.49216549723027 59.89059425372324L200.97261799230694 41.73251678086555S203.8620689655172 32.15906008678613 206.96482899263194 41.665525266554L210.55241238667836 52.65742806179859S213.65517241379308 62.16389324156646 216.55919204298633 52.594845744910366L220.5442562328757 39.46364369416248S223.44827586206895 29.89459619750638 226.6012649630327 39.384520313599396L230.08839020938106 49.880133495720145S233.2413793103448 59.37005761181316 235.11403758373075 49.546964871178005L241.16182448523472 17.823092740649876S243.03448275862067 8.000000000014722 245.31206514703 17.737177130169414L251.41599840461407 43.832865093952464S252.82758620689654 49.86772053344747 257.7241379310345 53.66717332457371L257.97608808149226 53.862672679285446S262.6206896551724 57.46662611569995 267.51724137931035 60.72002208958901L267.9190732935153 60.987009636235356S272.41379310344826 63.973418063478064 277.31034482758616 61.70517586367839L277.31034482758616 61.70517586367839S282.2068965517241 59.43693366387872 284.0743996823306 54.37397271979815L292 32.88699140816767" fill="none" stroke="url(#vue-trend-45)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 441.118, 441.118; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $85272</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 3.29% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250401/1b1ff1648b8bca68c7b32f5e4b9bd84d.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">SOL-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><!----></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $128.51</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 3.19% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/a2261975079e683e12365e496d8f1cd2.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">XRP-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-49" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 9.205932314520627L16.82166276154028 57.56811773806167S17.79310344827586 62.89375712032199 22.689655172413794 60.585096675265326L23.148813870256504 60.36860932183094S27.586206896551722 58.27643623020866 32.48275862068965 58.5788040988118L32.48275862068965 58.5788040988118S37.37931034482759 58.88117196741495 42.05033760738969 60.38088841645567L42.45983529432198 60.51236493808907S47.172413793103445 62.02542215114879 52.068965517241374 62.74758518676565L52.11953888675164 62.75504394960621S56.9655172413793 63.4697482223825 61.86206896551724 63.33525054996275L66.75862068965517 63.20075287754301L76.55172413793103 63.43877034018958L86.34482758620689 62.981156579716696L91.24137931034483 62.40594897260105S96.13793103448275 61.8307413654854 100.49801933407906 64.13220016332757L101.59730758286064 64.71245598332027S105.9310344827586 66.99999999983454 110.82758620689654 66.80550659832349L110.82758620689654 66.8055065983235S115.72413793103448 66.61101319681245 120.029864730538 64.2711920073993L120.62068965517241 63.950125497082766S125.51724137931033 61.28923779735308 129.95618315510882 57.91991471269618L130.41379310344826 57.572571620449516S135.3103448275862 53.85590544354595 139.42279049540167 58.425108534563336L141.102499339244 60.29137777219938S145.10344827586206 64.73670051318258 150 61.302713344049664L150.2506828100736 61.12690767471068S154.8965517241379 57.86872617491675 159.79310344827584 60.7364126754098L160.458810882079 61.12628708678064S164.68965517241378 63.604099175902846 169.58620689655172 63.35235054949071L169.58620689655172 63.35235054949071S174.48275862068965 63.10060192307857 179.24163690299582 61.92048597443061L179.37931034482756 61.886345444924956S184.2758620689655 60.67208896677134 188.91293685358204 58.68508745097688L189.17241379310343 58.573900744682405S194.06896551724137 56.47571252259346 198.48467939918862 59.45565942065209L199.01751456267036 59.81524351849988S203.8620689655172 63.0845936736946 208.75862068965515 59.89364726044094L208.75862068965515 59.89364726044094S213.65517241379308 56.70270084718729 216.1861215690568 51.43462205384294L219.50935912979293 44.517423704540235S223.44827586206895 36.31871150880265 228.34482758620686 43.98407046355371L228.8164850204604 44.722431608480996S233.2413793103448 51.649429418304756 238.13793103448273 58.25145708764971L239.21088231942215 59.698118834550066S243.03448275862067 64.85348475699467 247.9310344827586 60.70360532190455L247.9310344827586 60.70360532190455S252.82758620689654 56.55372588681442 254.09662667388554 50.26188558320797L260.6435429735254 17.80259613584564S262.6206896551724 8.000000000165443 264.6952991356072 17.78243300549137L271.0966482070924 47.96679735264838S272.41379310344826 54.17754777503992 277.31034482758616 50.13625185664013L277.31034482758616 50.13625185664013S282.2068965517241 46.094955938240346 284.7706558061707 40.286735042606935L292 23.90858723660713" fill="none" stroke="url(#vue-trend-49)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 437.763, 437.763; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $2.1556</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 3.14% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250401/1a66d5365586423c93270c8c31fad078.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">LTC-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-52" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 59.81657518457309L15.631814286132482 25.339767412142166S17.79310344827586 15.57611905931823 20.956724979903235 25.06250397690531L24.90141008602644 36.890973634623265S27.586206896551722 44.94156240307549 32.48275862068965 51.87293273262632L32.48275862068965 51.87293273262632S37.37931034482759 58.80430306217715 41.08740109313265 51.17081261318396L42.93095669380358 47.375661678341814S47.172413793103445 38.64418112541328 52.068965517241374 47.025857102460606L54.48751103754823 51.16580415683801S56.9655172413793 55.40753307950793 61.86206896551724 55.01185617535303L61.86206896551724 55.01185617535303S66.75862068965517 54.61617927119814 71.4884666891922 53.289025994329386L71.65517241379311 53.24224983106772S76.55172413793103 51.86832039093729 80.96013726933565 54.404024347726136L81.44827586206895 54.68479997472841S86.34482758620689 57.501279558519535 89.167470509328 52.60827813182603L91.49534839420086 48.57294312060313S96.13793103448275 40.525108484359606 101.03448275862067 48.420993306025224L102.49171183947804 50.770833281065435S105.9310344827586 56.316878127690835 110.82758620689654 60.630963766410176L111.50217291492213 61.22530545687327S115.72413793103448 64.94504940512951 120.62068965517241 62.172818381079146L120.62068965517241 62.172818381079146S125.51724137931033 59.40058735702878 129.81168260389776 55.76475757465043L130.41379310344826 55.25498897564982S135.3103448275862 51.109390594270856 136.7315976023061 44.85301422474185L142.8882020190173 17.751547776002127S145.10344827586206 8.000000000313626 147.6051195418556 17.682026692948916L153.41291040200727 40.15947482836549S154.8965517241379 45.901498202272094 159.79310344827584 42.55548487114726L160.54379773328498 42.04250487486589S164.68965517241378 39.20947154002242 169.58620689655172 40.322122875686816L169.58620689655172 40.322122875686816S174.48275862068965 41.43477421135122 176.33505277416347 46.10202373874105L182.4625629669246 61.541590395908585S184.2758620689655 66.11058358802383 189.17241379310343 65.67753204848202L194.06896551724137 65.24448050894023L198.9655172413793 64.8266182102123S203.8620689655172 64.40875591148436 208.64764817310999 65.52636914320273L208.88462466360662 65.58171209123398S213.65517241379308 66.69581491074088 218.55172413793102 66.84790745521363L218.55172413793102 66.84790745521363S223.44827586206895 66.99999999968637 228.3270671658837 66.55643901959002L228.36492520309986 66.55299711214892S233.2413793103448 66.10964862099432 238.13793103448273 66.12163851327125L238.13793103448273 66.12163851327125S243.03448275862067 66.13362840554818 247.8800296831064 65.4286195068228L247.98147309275944 65.41385987129826S252.82758620689654 64.70876859410275 257.7241379310345 64.63295806033187L257.7241379310345 64.63295806033187S262.6206896551724 64.557147526561 267.43107625916554 63.63946198983735L267.51724137931035 63.62302412505923S272.41379310344826 62.688900723557474 277.0533093289237 64.51200097037376L277.59561446209324 64.7251000466745S282.2068965517241 66.53710567553381 287.1034482758621 65.7814151820046L292 65.02572468847539" fill="none" stroke="url(#vue-trend-52)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 431.363, 431.363; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $85.49</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 3.02% </var>
                                            </td>
                                        </tr>
                                        <tr data-v-6b16f068="" data-v-6e2d35de="">
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="display: flex; align-items: center;"><img data-v-6b16f068="" data-v-6e2d35de="" src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250303/b81b629f1a3f46a6e5edf0371b3957b8.png" alt="" style="height: 0.64rem; width: 0.64rem;"><span data-v-6b16f068="" data-v-6e2d35de="">BNB-USDT</span></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" style="width: 2rem;"><svg data-v-6b16f068="" width="100%" height="25%" viewBox="0 0 300 75" stroke-width="4" data-v-6e2d35de="">
                                                    <defs>
                                                        <linearGradient id="vue-trend-55" x1="0" y1="1" x2="0" y2="0">
                                                            <stop offset="0" stop-color="#32C092"></stop>
                                                            <stop offset="0.5" stop-color="#32C092"></stop>
                                                            <stop offset="1" stop-color="#32C092"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <path d="M8 8.92168712595021L16.130385877027567 57.139200322329614S17.79310344827586 66.99999999975245 22.054155388838492 57.953263772812505L23.325154955989092 55.25477570250561S27.586206896551722 46.20803947556567 32.256263306363415 55.05058283871502L35.04373427118563 60.32853469132532S37.37931034482759 64.75084373789761 42.275862068965516 63.733241599532235L42.375342508143056 63.712567559241066S47.172413793103445 62.71563946116685 52.068965517241374 62.543768118112595L52.068965517241374 62.543768118112595S56.9655172413793 62.37189677505833 61.502830844053015 64.22082722716125L62.19373494934102 64.50236686748877S66.75862068965517 66.36253281472762 71.65517241379311 65.79492345413499L71.65517241379311 65.79492345413499S76.55172413793103 65.22731409354236 81.03721419333743 63.18310810190629L81.44827586206895 62.9957718876302S86.34482758620689 60.76422968171803 89.7238049718655 56.57632910611536L91.24137931034483 54.69544926577911S96.13793103448275 48.62666884984019 100.00549467655816 55.397803614304586L101.03448275862067 57.199303891862854S105.9310344827586 65.77193893388551 108.71381982705816 56.29974826443504L112.90541434786094 42.03217904951188S115.72413793103448 32.437659918171256 118.79316748662215 41.95506805205568L123.93684069591667 57.90618105162047S125.51724137931033 62.80718250712687 130.41379310344826 61.21304863577576L130.65319618207718 61.13510795873425S135.3103448275862 59.618914764424666 140.20689655172413 59.51094939183304L140.20689655172413 59.51094939183304S145.10344827586206 59.40298401924141 149.8625810790913 58.246035329772326L150 58.212628688893204S154.8965517241379 57.02227335854499 159.5537653978259 55.097818787176834L159.79310344827584 54.99891948008836S164.68965517241378 52.97556560163173 168.8754905743065 56.22348211732071L170.258470424181 57.296578085987186S174.48275862068965 60.5743312901066 179.37931034482756 62.721901556039505L179.7592457686404 62.88853678530356S184.2758620689655 64.86947182197241 189.17241379310343 65.4591392169558L189.17241379310343 65.4591392169558S194.06896551724137 66.0488066119392 195.21126010438002 61.250985283454945L201.54594778399755 34.64427629546374S203.8620689655172 24.916194127198715 206.20205026315122 34.63856459569677L211.31519111615907 55.88311457599755S213.65517241379308 65.60548504449561 217.27416230493915 56.283311898292915L219.82928597092288 49.70155678410064S223.44827586206895 40.379383637897945 227.08967843054683 49.69282485660345L229.5999767418669 56.113294805815315S233.2413793103448 65.42673602452082 234.92243223193694 55.569045571133344L241.35342983702853 17.85769045363502S243.03448275862067 8.000000000247546 245.58734604057426 17.66865497721581L251.14673127771763 38.72414123140207S252.82758620689654 45.09017206879602 257.7241379310345 49.49192207628596L257.7241379310345 49.49192207628596S262.6206896551724 53.893672083775904 266.76797930791787 59.00753661579337L268.71867509717896 61.41286511819362S272.41379310344826 65.96917405633842 277.31034482758616 62.73844202893108L277.31034482758616 62.73844202893109S282.2068965517241 59.507710001523755 284.3652880543709 54.05287780049541L292 34.75792018250835" fill="none" stroke="url(#vue-trend-55)" style="transition: stroke-dashoffset 2000ms; stroke-dasharray: 535.876, 535.876; stroke-dashoffset: 0;"></path>
                                                </svg></td>
                                            <td data-v-6b16f068="" data-v-6e2d35de="" class="text-right">
                                                <div data-v-6b16f068="" data-v-6e2d35de=""> $614.31</div><var data-v-6b16f068="" data-v-6e2d35de="" class=""><i data-v-6b16f068="" data-v-6e2d35de="" class="play van-icon van-icon-play"><!----></i> 1.57% </var>
                                            </td>
                                        </tr>
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
                                                    <div data-v-5adce6a8="" class="img"><img data-v-5adce6a8="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAfsSURBVHgB7d3ZVttIFIXhwmAIkwnQoe+ycpf3f69mHmzmru120YWQtiU5IBn+by1fEIxtcO0aTpWclZ+/fj8HAKUGAUAlAgIYBAQwCAhgEBDAICCAQUAAg4AABgEBDAICGAQEMAgIYBAQwCAggEFAAIOAAAYBAQwCAhgEBDAICGAQEMAgIIBBQACDgAAGAQEMAgIYBAQwCAhgEBDAICCAQUAAg4AABgEBDAICGAQEMAgIYBAQwCAggEFAAIOAAAYBAQwCAhgEBDAICGAQEMAgIIBBQACDgAAGAQEMAgIYBAQwCAhgEBDAICCAQUAAg4AABgEBDAICGAQEMAgIYBAQwCAggEFAAIOAAAYBAQwCAhgEBDAICGAQEMAgIIBBQACDgAAGAQEMAgIYBAQwCAhgEBDAICCAQUAAg4AAxlroia2trbCxsRHWh8M333t4eAiT29twfX0dFpWeZ3V1dfr189NTGE8m4ebmJgBFvQjI9vZ22Im3Kmtra2En3tbX18Pp6WloazQahc1v317/42AQdnd2wtbmZjiJj/0UAwMknU+x1Ju7cOQ0utS9b5GC8SYcGY0oCgmQ6zwgrtGW2Wh4/0RTqzr3GQxYluF/nbeGlYYNciW0o2na3MdeWZnegITuEjC+TEAeHx9r3e/5+TkAydIFRIvpNuuESSzlznN/f08VC68s5QhSZz1RdB33OR5N49fIcX5xEYBc5wF5iL12U9q3aDqKKADaQykbSTRyHJ+c1J6G4etY+fnrd6eTbk2ZDg8OGleP1JhPz85aNWqFK41C+nmCgSqdB0Q24wbdaHc3tKFjKE+FhbUavI6l0PCxqF4cNRmPx+Hu7u6/jbpsJJkuyONt1UynStcjccddG5BXMSR/4vxWlWF8njTyaQp332C6mP9s3VFMR20SdQyyyEhYHEn1O7RZ31U9v96/dOYt0ftc9zVVPe5H6s1hRf0RLi8vS7+n4yXbLY6Y6OfUaOe9KW3txLVQOlyptc15g4DsjUYvjeciFgfGcxqB7rv//fvL1/8cH7/6NzXupuuog/39V69BRYz8OZoo+x1UEfy+t/eqwbtOK/0+6TWpE9A0uktLUcVaZCSoc8TkM9BopMZYt3ihDqfYu/9pCq0OgKbRTqo6O73usnB0XXbvzQgyj0Kixt50Mb/2zo2gT9RTq/FVjcSJpp91Dn02KYJUbbCmkGi0SiNJeu6808vDoZHs7Py8F3tSS7UPcnt7G+DpRLIbNdUId2sWRNL8v87tac4eU9lIsjk7Pa3LEF7WQvFxVI7vS4FlqQJCVapa3nmo8Q1LLjwT9dQahdUQ71vsQbWVQpJv1qpyqWlhOtHdt3DI0kyx4Kl31k1TLAVARYDiBWDaYE3TGF1BOYy9dlWQpvePDbhsZNDz5FdgTtc/FYv7cbzfZBbetFm7r+LAbK2k64Gkj+GQpQpImxLkV7q+Q+u0YSwFq7KmIOzF3jldgalpV5p6TWaXGCtEzkZWVs5p5MkDor/xekXQJoU143SDN76m4uawRsA+zhCWqvW0CYjehPWKN/ozSuVaUaNN1aq0MNb3Lq+uaj2WRgqF4c0tW0u08S1OqYrFFq2d2pTy39vSjCCLlCU1tehDyfAjqBdWSNJ+xrSsmlX/Thtcd69KUp1eXffRvkyZYnVLo1heQVNg03SrrLrVtd6PIIPZhyrsLNC7aOTJN8U+O22M5o0shUMjx3tNY+pUtzRy6L1M9HqOY7Dq7JN0pfMRRNMf/eHKGu/qnGMmTeix/jo8fHN2Sz3cbZyTj2tcL7JM8vWITDr+aCN1UvmaRwFOr6fOPklXOg3IvI/7qUMNPh/G9Ud2m4ll6xgtRtWYLha4HkTVoNGcRW8yGY9ffa0OYjhnnTRoca38dKoVG57UXXfkqqpYZbTIrtqnUud0MHsdchN//6us8ev903Qur271JSSdBaTubm4VLRZ1gVPZlKHNMK3X8xQf66rlG6JGsFlzCncfp0DTuffs/k2LCPpZ/d7zpoypYiRt1l8bDV6X/nZlAUnnq1KnpQ6tbKc/vda+haSzNcgiZ6TUQE5Mzbzt2a2PPLel3r3NRp0aWJORrsvTsMXDh+kISZUUknwzses1SWfXg/x9dBTaUkWqzgndox8/Gp/dUjWGHXskS7eLpvlq3ePrnN3CopYuIHzqCD4SHxwHGAQEMD51QNqcGWKBjtynDog+DKLJR4lOPtluOhbXWUDafgZuk5/Sc9TdQVbt/apHh+TQD53tpKt3b7Mx1/STGNNHCu3NLuss7ouoKqb76PgDFTIUdRYQ9db6z3CaHEZs28trXXGywH/dhq+r0ylW1WflltGm3wmfn4sP1ulpXjV2HTjUOsEdCVGYmP6gC724opDGj75ioxAwCAhgEBDAICCAQUAAg4AABgEBDAICGAQEMAgIYBAQwCAggEFAAIOAAAYBAQwCAhgEBDAICGAQEMAgIIBBQACDgAAGAQEMAgIYBAQwCAhgEBDAICCAQUAAg4AABgEBDAICGAQEMAgIYBAQwCAggEFAAIOAAAYBAQwCAhgEBDAICGAQEMAgIIBBQACDgAAGAQEMAgIYBAQwCAhgEBDAICCAQUAAg4AABgEBDAICGAQEMAgIYBAQwCAggEFAAIOAAAYBAQwCAhgEBDAICGAQEMAgIIBBQACDgAAGAQEMAgIYBAQwCAhgEBDAICCAQUAAg4AABgEBjH8BUtBq9IaLgfAAAAAASUVORK5CYII=" data-src="https://lumex-all.s3.ap-southeast-1.amazonaws.com/upload/20250312/93d66e2d52b9bbb9a97f76c77d201d51.jpg" lazy="loading"></div>
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


            
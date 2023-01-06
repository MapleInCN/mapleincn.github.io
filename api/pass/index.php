

<!DOCTYPE html>

<html lang="zh-CN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
    <title>楼栋验证</title>
    <link href="/pass/layui2.4.5/css/layui.css" rel="stylesheet" />
    <link href="/pass/css/TableAll.css" rel="stylesheet" />
    <script src="/pass/layui2.4.5/layui.js"></script>
    <script src="/pass/js/jquery-3.1.1.min.js"></script>
    <link href="/pass/css/index-student.css" rel="stylesheet" />
    <script src="/pass/js/mobiscroll.custom-2.5.0.min.js"></script>
    <link href="/pass/css/mobiscroll.custom-2.5.0.min.css" rel="stylesheet" />
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <style type="text/css">
        body {
            background: linear-gradient(to top right,#d3959b,#bfe6ba);
            width: 100%;
            height: 100%;
        }

        .main {
            width: 100%;
            height: 100%;
            text-align: center;
        }

        #cr, #sj {
            display: block;
            height: 40px;
            line-height: 40px;
        }

        #cr {
            font-size: 20px;
        }

        h2 {
            font-size: 25px;
            height: 50px;
            line-height: 50px;
            text-align: left;
            font-weight: bold;
            margin-left: 10px;
        }

        .context {
            text-align: center;
            border: 1px solid white;
            margin: 0 auto;
            width: 90%;
            display: inline-block;
            background-color: #f5f5f5;
        }

        .hcy {
            display: block;
            text-align: center;
            font-size: 35px;
            line-height: 50px;
            color: red;
            height: 100px;
        }

        .hcyyh {
            display: block;
            text-align: center;
            font-size: 35px;
            line-height: 70px;
            color: red;
            height: 70px;
        }

        .xm, .zsxx {
            display: block;
            text-align: center;
            font-size: 40px;
            line-height: 60px;
        }

        .tw {
            height: 60px;
            line-height: 60px;
        }

            .tw input {
                width: 30px;
                text-align: center;
                height: 30px;
                font-size: 16px;
                font-weight: bold;
            }

            .tw .button {
                height: 45px;
                line-height: 45px;
                width: 80px;
                background-color: #8acba5;
                border: 1px solid #ccc;
                color: #fff;
                border-radius: 10px;
                font-size: 18px;
            }
    </style>
</head>
<body id="border">
    <input type="hidden" id="istw" name="istw" value="False" />
    <input type="hidden" id="LD" name="LD" value="Y06" />
    <!--内容部分-->
        <section class="main">
            <div id='sj'>您于<span style='color:red;font-size:24px; padding:0 2px;font-weight: bold;'><?php echo date( 'n' ); ?></span> 月 <span style='color:red;font-size:24px; padding:0 2px;font-weight: bold;'><?php echo date( 'j' ); ?></span> 日 <span style='color:red;font-size:24px; padding:0 2px;font-weight: bold;'><?php echo date( 'H' ); ?></span> 时 <span style='color:red;font-size:24px; padding:0 2px;font-weight: bold;'><?php echo date( 'i' ); ?></span> 分 </div>
            <span id='cr'>出入Y<?php echo $_GET["bit"]; ?>栋</span>
                <span class="hcy"> 前湖南院<?php echo $_GET["big"]; ?>栋<br/>请通过!</span>
            <div class="context">
                <h2> 您的楼栋核验信息 </h2>
                <div class="info">
                    <img src="/pass/images/tg.png" width="150" height="150" />
                </div>
                <div class="xm"><?php echo $_GET["name"]; ?>(<?php echo $_GET["id"]; ?>)</div>
                <div class="zsxx">前湖南院<?php echo $_GET["big"]; ?>栋<?php echo $_GET["num"]; ?></div>
                <div class="zsxx" style="color:red;"></div>
            </div>

        </section>
    <audio id="audio" controls="controls" autoplay="autoplay" style="display:none;">
        <source src="http://tts.baidu.com/text2audio?lan=zh&amp;ie=UTF-8&amp;per=4&amp;spd=5&amp;text=&#x524D;&#x6E56;&#x5357;&#x9662;&#x516D;&#x680B; &#x8BF7;&#x901A;&#x8FC7;!" type="audio/mpeg">
    </audio>
    <script src="/ViewJs/ShouJiDuan/LDSM.js"></script>
</body>
</html>

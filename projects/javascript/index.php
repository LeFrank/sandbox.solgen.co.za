<?
require_once("../../init.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Js</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" media="all" href="/css/black_and_yellow.css" />
        <link rel="stylesheet" type="text/css" href="popeye/css/popeye/jquery.popeye.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="popeye/css/popeye/jquery.popeye.style.css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Sarina' rel='stylesheet' type='text/css'>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="popeye/lib/popeye/jquery.popeye-2.1.js"></script>
    </head>
    <body>
        <? include(DOC_ROOT."/header.php"); ?>
        <div class="content_wrap">
            <div class="left_nav">
                <ul>
                    <li><a href='/'>back</a></li>
                    <li><a href='./highlight'>highlight</a></li>
                    <li><a href='./jquery_mobile'>jQuery Mobile</a></li>
                    <li><a href='./osm'>osm</a></li>
                    <li><a href='./popeye'>jQuery popeye</a></li>
                </ul>
            </div>
            <div class="center_content">
                <h3>Javascript Projects</h3>
                Check out the Popeye feature in the spotlight section →→→→→→<br/>

            </div>
            <div class="right_hot_stuff">
                <h3>Spotlight</h3>
                jQuery popeye plugin<br/><br/>
                <div class="ppy" id="ppy1">
                    <ul class="ppy-imglist">
                        <li>
                            <a href="http://farm4.static.flickr.com/3461/3760102198_0e3de1eec3.jpg">
                                <img src="http://farm4.static.flickr.com/3461/3760102198_0e3de1eec3_m.jpg" alt="" />
                            </a>
                            <span class="ppy-extcaption">
                                <strong>Eyes of a Holcocephala fusca Robber Fly</strong><br />shot by flickr member Thomas Shahan<br />
                                <a href="http://www.flickr.com/photos/opoterser/3760102198/">View on flickr.com</a>
                            </span>
                        </li>
                        <li>
                            <a href="http://farm2.static.flickr.com/1317/908814138_9fa713a687.jpg">
                                <img src="http://farm2.static.flickr.com/1317/908814138_9fa713a687_m.jpg" alt="" />
                            </a>
                            <span class="ppy-extcaption">
                                <strong>Crocodile's eye</strong><br />shot by flickr member Tambako the Jaguar<br />
                                <a href="http://www.flickr.com/photos/tambako/908814138/">View on flickr.com</a>
                            </span>
                        </li>
                        <li>
                            <a href="http://farm4.static.flickr.com/3357/3633927491_d8864d5235.jpg">
                                <img src="http://farm4.static.flickr.com/3357/3633927491_d8864d5235_m.jpg" alt="" />
                            </a>
                            <span class="ppy-extcaption">
                                <strong>Daipeem</strong><br />shot by flickr member Furryscaly<br />
                                <a href="http://www.flickr.com/photos/furryscalyman/3633927491">View on flickr.com</a>
                            </span>
                        </li>
                        <li>
                            <a href="http://farm4.static.flickr.com/3335/3198858060_365ce0ba53.jpg">
                                <img src="http://farm4.static.flickr.com/3335/3198858060_365ce0ba53_m.jpg" alt="" />
                            </a>
                            <span class="ppy-extcaption">
                                <strong>basiliscus plumifrons</strong><br />shot by flickr member Joachim S. Müller<br />
                                <a href="http://www.flickr.com/photos/joachim_s_mueller/3198858060/in/set-72157612281941653/">View on flickr.com</a>
                            </span>
                        </li>
                        <li>
                            <a href="http://farm3.static.flickr.com/2597/4162969117_cbbc452a26.jpg">
                                <img src="http://farm3.static.flickr.com/2597/4162969117_cbbc452a26_m.jpg" alt="" />
                            </a>
                            <span class="ppy-extcaption">
                                <strong>Eyes of Jumping spider</strong><br />shot by flickr member Lukjonis<br />
                                <a href="http://www.flickr.com/photos/38628972@N05/4162969117/">View on flickr.com</a>
                            </span>
                        </li>
                    </ul>
                    <div class="ppy-outer">
                        <div class="ppy-stage">
                            <div class="ppy-nav">
                                <a class="ppy-prev" title="Previous image">Previous image</a>
                                <a class="ppy-switch-enlarge" title="Enlarge">Enlarge</a>
                                <a class="ppy-switch-compact" title="Close">Close</a>
                                <a class="ppy-next" title="Next image">Next image</a>
                            </div>
                        </div>
                    </div>
                    <div class="ppy-caption">
                        <div class="ppy-counter">
                            Image <strong class="ppy-current"></strong> of <strong class="ppy-total"></strong>
                        </div>
                        <span class="ppy-text"></span>
                    </div>
                </div>
            </div>
        </div>
    <div class="clearer" />
    <? include(DOC_ROOT."/footer.php")?>
</body>
<script type="text/javascript">
    <!--//<![CDATA[

    $(document).ready(function () {
        var options1 = {
            direction:  'left',
            size: "small"
        }
        var options2 = {
            caption:    false,
            navigation: 'permanent',
            direction:  'left'
        }
        var options3 = {
            caption:    'permanent',
            opacity:    1
        }

        $('#ppy1').popeye(options1);
        $('#ppy2').popeye(options2);
        $('#ppy3').popeye(options3);
    });

    //]]>-->
</script>
</html>
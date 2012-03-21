<?
define(DOC_ROOT,  getenv("DOCUMENT_ROOT"));
$path_to_resources = $_SERVER["SERVER_NAME"] .str_replace("/index.php", "", $_SERVER["PHP_SELF"]);
$cur_folder = explode("/",$path_to_resources);
$cur_folder = $cur_folder[count($cur_folder)-1];

?>
<!doctype html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Solgen Sandbox CSS </title>
        <link rel="stylesheet" type="text/css" media="all" href="/css/layout1.css" />
        <link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet" type="text/css"/>
        <script src="/js/third_party/modernizr-latest.js"></script>
        <script src="/js/third_party/jquery-1.6.4.min.js"></script>
        <script src="/js/default.js"></script>
        <style>
            #fire h1 {
                text-align: center;
                font-size: 50px; text-transform: uppercase;
                color: #fff;
                text-shadow: 0 0 20px #fefcc9, 10px -10px 30px #feec85, -20px -20px 40px #ffae34, 20px -40px 50px #ec760c, -20px -60px 60px #cd4606, 0 -80px 70px #973716, 10px -90px 80px #451b0e;
            }
        </style>
    </head>
    <body class="body">
        <div class="body_content">
                <!--
                    Open content  Do whatever :)
                -->
                <h2>Text on fire</h2>
                <div id="fire">
                    <h1>just look at it, this text is emiting heat and smoke.</h1>
                </div>
                The above was achieved via text-shadow manipulation, shown below.Stolen from <a href="http://www.webhostingsecretrevealed.com/featured-articles/10-must-know-html5-tips-tricks-with-sample-codes/" title="html5 tips and tricks" >the people at webhostingsecretrevealed.com </a><br/>
                <code>
                <? highlight_string("#fire h1 {
             text-align: center;
             font-size: 50px; text-transform: uppercase;
             color: #fff;
             text-shadow: 0 0 20px #fefcc9,
                                10px -10px 30px #feec85,
                                -20px -20px 40px #ffae34,
                                20px -40px 50px #ec760c,
                                -20px -60px 60px #cd4606,
                                0 -80px 70px #973716,
                                10px -90px 80px #451b0e;
             }");?>
                </code>
                <br/><br/>
                <h2>Multi Collum using CSS3 - to split content into multi column format .e.g. newspaper and magazines.</h2>
<pre>
    <code>
        -moz-column-count: 3;
        -moz-column-gap: 1em;
        -moz-column-rule: 1px solid black;
        -webkit-column-count: 3;
        -webkit-column-gap: 1em;
        -webkit-column-rule: 1px solid black;
        -o-column-count: 3;
        -o-column-gap: 1em;
        -o-column-rule: 1px solid black;
        column-count: 3;
        column-gap: 1em;
        column-rule: 1px solid black;
    </code>
</pre>
<br/>
<h4>Effect</h4><br/>
<div style=" -moz-column-count: 3;
        -moz-column-gap: 1em;
        -moz-column-rule: 1px solid black;
        -webkit-column-count: 3;
        -webkit-column-gap: 1em;
        -webkit-column-rule: 1px solid black;
        -o-column-count: 3;
        -o-column-gap: 1em;
        -o-column-rule: 1px solid black;
        column-count: 3;
        column-gap: 1em;
        column-rule: 1px solid black;
        ">
    Durban - Nobel Peace Prize laureate Desmond Tutu on Sunday branded climate change a “huge, huge enemy” that threatened the common home of humanity, imperilling rich and poor alike.

At a rally on the eve of the 12-day United Nations climate talks in Durban, Tutu said that after the battle to crush apartheid, mankind must now unite in the goal of conquering carbon.

One the great figures in the effort to end whites-only rule, the 80-year-old former archbishop thanked other countries that had backed the long campaign, especially those in Africa who had taken in refugees and the children of anti-apartheid fighters.

“Now we are facing another huge, huge enemy. And no one, no country can fight that enemy on his own... An enemy called global warming, climate change,” he said.

“We have only one home. This is the only home we have. And whether you are rich or poor, this is your only home... You are members of one family, the human race.”

He added: “You who are rich, you have to come to our side. And we will be waiting for you, on the other side.”

The rally in Durban's King's Park stadium, staged by religious groups, alternated between speeches and music, with the main theme being of “climate justice”.

But the turnout was sparse, with only a few hundred attending.

A 12-day conference of the 194-nation UN Framework Convention on Climate Change (UNFCCC) opens in the South African port city on Monday.

Forged nearly 20 years ago, the UNFCCC process is in deep trouble, mired by bickering over how to share out the burden of cutting the greenhouse-gas emissions that cause global warming.

Poor tropical countries that are least to blame for causing the fossil-fuel emissions that cause the problem are likely to be hit hardest, according to scientists.

Likely impacts include worsening drought, floods, storms and rising sea levels, with the potential to increase the problems of hunger, homelessness and poverty. - AFP
</div>

<br/>
<a href="http://www.css3.info/preview/multi-column-layout/" target="_blank">Code courtesy of CSS3 info</a>
<br/>
<a href="http://www.iol.co.za/scitech/science/environment/tutu-calls-for-unity-in-climate-battle-1.1187232" target="_blank">Content from IOL</a><br/>

  <!--
                     Close content :)
                -->
        </div>
    </body>
</html>
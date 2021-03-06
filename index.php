<html>
<head>
    <title>Xpath Evaluator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="xpath-evaluator.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <style>
        .footerbox{
            background: #2E0854;
            color: white;
        }

        .bs_input{
            width: 65%;
        }
    </style>

</head>
<div class="row footerbox">
    <div class="col-sm-6 ">
        <h3>&nbsp; xPath Evaluator</h3>
    </div>
    <div class="col-sm-6">
    </div>

</div>
<div id="top" class="container">
    <h3 align="center">All you need is the url and xpath<small> to perform a quick test!</small></h3>
<p>As developers, before setting off to scrape a new website, it's useful to know if a simple xpath will work! Just feed in the URL of the page you want to scrape, and the xpath, and see the output. </p>
<div class="form">
    <div class="row">
        <div class="col-sm-3">
    <span>URL of website:</span></div>
            <div class="col-sm-9">    <input type="text" name="site-url" id="site-url" class="bs_input">

    </div>
        </div>
    <br />
    <div class="row">
        <div class="col-sm-3">
            <span>OR XML:</span></div>
        <div class="col-sm-9">
            <textarea class="form-control bs_input" rows="5" id="xml_input" name="xml_input"></textarea>

        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-sm-3">
    <span>Your xpath: </span></div>
        <div class="col-sm-9">    <input type="text" name="xpath" id="xpath" class="bs_input">
   </div>
        </div>

    <br />
    <div class="row">
        <div class="col-sm-3">
            </div>
        <div class="col-sm-3">
        <input type="submit" id="check-xpath" class="btn btn-primary btn-lg btn-block" value="Check xpath">
            </div>
        <div class="col-sm-6">
        </div>
        </div>
</div>
    <div id="evaluations">

    </div>

</div>

</html>
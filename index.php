<html>
<head>
    <title>Xpath Evaluator</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="xpath-evaluator.js"></script>
    <style>
        #mainBody{
            width: 400px;
            margin: auto;
            font-family: Verdana;
            font-size: 11px;
        }
        #response{
            border-bottom: 1px dotted grey;
            margin-bottom: 5px;
        }
        #check-xpath{
            align:center;
        }

        #warning{
            margin-top: 10px;
            color: lightcoral;
        }
    </style>
</head>
<h1 align="center">Xpath Evaluator - check before you code!</h1>
<div id="mainBody">
<p>As developers, before setting off to scrape a new website, it's useful to know if a simple xpath will work! Just feed in the URL of the page you want to scrape, and the xpath, and see the output. </p>
<div class="form">
    <span>URL of website: <br />
        <input type="text" name="site-url" id="site-url" size="75">
    </span>
    <br />
    <span>Your xpath: <br />
        <input type="text" name="xpath" id="xpath" size="75">
    </span>
    <br />
    <input type="submit" id="check-xpath" value="Check xpath">
</div>
    <div id="evaluations">

    </div>
</div>
</html>

$( document ).ready(function() {
    $("#check-xpath").click(function(){
        var siteURL = $("#site-url").val();
        var siteXpath = $("#xpath").val();
        console.log("Site: "+siteURL+" Xpath: "+siteXpath);
        $("#evaluations").load("query.php?url="+siteURL+"&xpath="+siteXpath);
    });

});



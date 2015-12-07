
$( document ).ready(function() {
    $("#check-xpath").click(function(){
        var siteURL = $("#site-url").val();
        var siteXpath = $("#xpath").val();
        $("#evaluations").load("query.php?url="+siteURL+"&xpath="+siteXpath);
    });

});




$( document ).ready(function() {
    $("#check-xpath").click(function(){
        var siteURL = $("#site-url").val();
        var siteXpath = $("#xpath").val();
        var siteXML = $("#xml_input").val();
        $("#evaluations").load("query.php?url="+siteURL+"&xpath="+siteXpath+"&xml="+siteXML);
    });

});



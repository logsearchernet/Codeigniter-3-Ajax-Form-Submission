<html>
<head>
<title>Upload Form</title>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>



<input type="button" value="upload" id="jsform"/>

<script>
var timeoutSetting = 10000;
$(document).ready(function(){
    var obj = new Object();
    obj.formid = '12345';
    obj.pages = new Array(0);
    var page = new Object();
    page.pagesn = 'pagesn123';
    obj.pages.push(page);
    var url = 'uploadJson/do_upload';
    $(document).on("click", "#jsform" , function(e) {
        callAjax(obj, url, "result");
    });
});
    
function callAjax(obj, url, callbackName) {
	var input = JSON.stringify(obj);
	$.ajax({
        type: "POST",
        url: url,
        data: input,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        timeout: timeoutSetting,
        success: function(data){
        	//callback(callbackName, data);
            alert(JSON.stringify(data));
        },
        failure: function(errMsg) {
            //alert("Falure:"+errMsg);
        },
        error: function (xhr, textStatus, errorThrown){
        	//alert("Error:"+textStatus);
        }
  });
}
</script>
</body>
</html>
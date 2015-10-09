$(function() {

  $('body').keyup(function(e) {
    if (e.which == '9') {
      return false;
    }
  });

});

function loadScript( url, callback ) {
  var script = document.createElement( "script" )
  script.type = "text/javascript";
  if(script.readyState) {  //IE
    script.onreadystatechange = function() {
      if ( script.readyState === "loaded" || script.readyState === "complete" ) {
        script.onreadystatechange = null;
        callback();
      }
    };
  } else {  //Others
    script.onload = function() {
      callback();
    };
  }

  script.src = url;
  document.body.appendChild( script );
}

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
var analyticsUrl = gaJsHost + "google-analytics.com/ga.js";
loadScript(analyticsUrl, function() {
	try {
		var pageTracker = _gat._getTracker("UA-66547978-1");
		pageTracker._trackPageview();
	} catch (err) {}
});
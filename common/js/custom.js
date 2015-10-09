$(function() {

  $('body').keyup(function(e) {
    if (e.which == '9') {
      return false;
    }
  });

});

var gaJsHost = (("https:" == document.location.protocol) ?
"https://ssl." : "http://www."); 
var analytics = document.createElement("script"); 
analytics.src = gaJsHost + "google-analytics.com/ga.js"; 
document.body.appendChild(analytics); var
tracker = document.createElement("script"); 
tracker.innerHTML = "try{var pageTracker=_gat._getTracker('UA-66547978-1');pageTracker._trackPageview();} catch(err) {}"; 
document.body.appendChild(tracker);
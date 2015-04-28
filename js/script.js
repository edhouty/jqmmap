/* Mobile Bookmark Bubble */		
window.addEventListener('load', function() { 
window.setTimeout(function() {
var bb = new google.bookmarkbubble.Bubble(); var parameter = 'bmb=1';
bb.hasHashParameter = function() { return window.location.hash.indexOf(parameter) != -1; };			bb.setHashParameter = function() { if (!this.hasHashParameter()) {window.localStorage += parameter;} };
bb.getViewportHeight = function() { return window.innerHeight; }; bb.getViewportScrollY = function() { return window.pageYOffset; };
bb.showIfAllowed();
}, 1000);
}, false);
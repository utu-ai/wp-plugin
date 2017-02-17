<!-- start uTu -->
<script type="text/javascript">
  !function(){window.utu={init:function(e){var t=this.getBrowserInformation();this.token=e,this.context={platform:"website",platformId:this.getUserId(),values:{browser:t[0],browserVersion:t[1],userAgent:navigator.userAgent}},this.getGeoInfo()},track:function(e,t){var n=this,r=n.merge(n.context,{event:e});r.values=n.merge(r.values,t),this.request("//api.utu.ai/api/v1/event",{data:JSON.stringify(r),callback:function(e){console.log(e)},setHeaders:function(e){e.setRequestHeader("apikey",n.token)}})},user:function(e){this.track("user",e)},getBrowserInformation:function(){var e,t=navigator.appName,n=navigator.userAgent,r=n.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);return r&&null!=(e=n.match(/version\/([\.\d]+)/i))&&(r[2]=e[1]),r=r?[r[1],r[2]]:[t,navigator.appVersion,"-?"]},createUUID:function(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(e){var t=16*Math.random()|0,n="x"==e?t:3&t|8;return n.toString(16)})},getGeoInfo:function(){var e=this;this.request("//ipinfo.io/json",{callback:function(t){if(t)try{e.context.values=e.merge(e.context.values,JSON.parse(t))}catch(n){console.log(n)}}})},getUserId:function(){var e=this.readCookie("utu-uid");return e||(e=this.createUUID()),this.createCookie("utu-uid",e,1825),e},merge:function(){return JSON.parse("{"+[].reduce.call(arguments,function(e,t){var n=JSON.stringify(t);if(!n||"{"!==n.slice(0,1)||"}"!==n.slice(-1))throw new Error("Invalid object: "+n);return(e?e+",":"")+n.slice(1,-1)},null)+"}")},request:function(e,t){try{var n=new(window.XMLHttpRequest||ActiveXObject)("MSXML2.XMLHTTP.3.0");n.open(t.data?"POST":"GET",e,1),n.setRequestHeader("Content-type","application/json"),t.setHeaders&&t.setHeaders(n),n.onreadystatechange=function(){n.readyState>3&&t.callback&&t.callback(n.responseText,n)},n.send(t.data)}catch(r){window.console&&console.log(r)}},createCookie:function(e,t,n){if(n){var r=new Date;r.setTime(r.getTime()+24*n*60*60*1e3);var o="; expires="+r.toGMTString()}else var o="";document.cookie=e+"="+t+o+"; path=/"},readCookie:function(e){for(var t=e+"=",n=document.cookie.split(";"),r=0;r<n.length;r++){for(var o=n[r];" "==o.charAt(0);)o=o.substring(1,o.length);if(0==o.indexOf(t))return o.substring(t.length,o.length)}return null}}}();

	function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}

	utu.init("<?php echo $settings['token_id']; ?>");

	let raf = getParameterByName('raf');
  let ls = getParameterByName('ls');
	utu.user({ leadSource: raf || ls || 'organic' });

</script>
<!--q end uTu -->

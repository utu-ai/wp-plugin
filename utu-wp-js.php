<!-- start uTu -->
<script type="text/javascript">
  !function(){window.utu={queue:[],init:function(e){var t=this.getBrowserInformation();this.token=e,this.context={platform:window.location.host,platformId:null,web:!0,properties:{browser:t[0],browserVersion:t[1],userAgent:navigator.userAgent}},this.setPlatformID(),this.getGeoInfo(),this.queueTracking=setInterval(this.checkQueue.bind(this),1e3)},checkQueue:function(){if(!this.fetchingID&&this.queue.length>0){for(var e=0;e<this.queue.length-1;e++)try{this.queue[e]()}catch(t){this.queue.splice(e,1)}clearInterval(this.queueTracking),this.queue=[]}},track:function(e,t,i){var n=this,r=function(e,t){var r=n.merge(n.context,{event:e});t&&(r.properties=n.merge(r.properties,t)),n.request("https://cucumber.utu.ai/v1/events/track",{data:JSON.stringify(r),callback:i||function(){},setHeaders:function(e){e.setRequestHeader("X-Consumer-Custom-Id","_bitme")}})};n.fetchingID?this.queue.push(function(){r(e,t)}):r(e,t)},identity:function(e,t){if(!e)throw new Error("identity must have properties `utu.identity({ name: 'john doe' })`");var i=this,n=function(e){var n=i.context.platform,r=i.context.platformId,o=i.merge({properties:{}},e);o.properties=i.merge(o.custom,i.context.properties),o.platform=n,o.platformId=r,i.request("https://cucumber.utu.ai/v1/identity",{data:JSON.stringify(o),callback:t||function(){},setHeaders:function(e){e.setRequestHeader("apikey",i.token)}})};i.fetchingID?this.queue.push(function(){n(e)}):n(e)},alias:function(e){if(!e)throw new Error("alias must have id `utu.alias('123')`");var t=this,i=function(e){var i=t.context.platform,n=t.context.platformId;t.request("https://cucumber.utu.ai/v1/identity/"+i+"/"+n+"/alias",{data:JSON.stringify({id:e}),setHeaders:function(e){e.setRequestHeader("apikey",t.token)}})};t.fetchingID?this.queue.push(function(){i(e)}):i(e)},getBrowserInformation:function(){var e,t=navigator.appName,i=navigator.userAgent,n=i.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);return n&&null!=(e=i.match(/version\/([\.\d]+)/i))&&(n[2]=e[1]),n=n?[n[1],n[2]]:[t,navigator.appVersion,"-?"]},createUUID:function(e){var t=this;t.fetchingID=!0,this.request("https://makenu.utu.ai/v1/browser-id",{callback:function(i){var n=JSON.parse(i);n&&n.data&&n.data.id&&(e(n.data.id),t.fetchingID=!1)}})},getGeoInfo:function(){var e=this;this.request("https://ipinfo.io/json",{callback:function(t){if(t)try{e.context.properties=e.merge(e.context.properties,JSON.parse(t))}catch(e){console.log(e)}}})},setPlatformID:function(){var e=this.readCookie("utu-uid"),t=this;e?(this.createCookie("utu-uid",e,1825),this.context.platformId=e):this.createUUID(function(e){t.createCookie("utu-uid",e,1825),t.context.platformId=e})},merge:function(){return JSON.parse("{"+[].reduce.call(arguments,function(e,t){var i=JSON.stringify(t);if(!i||"{"!==i.slice(0,1)||"}"!==i.slice(-1))throw new Error("Invalid object: "+i);return(e?e+",":"")+i.slice(1,-1)},null)+"}")},request:function(e,t){var i=["PhantomJS"],n="";null!==navigator&&void 0!==navigator&&null!==navigator.userAgent&&void 0!==navigator.userAgent&&(n=navigator.userAgent);for(var r=0;i.length>r;r++)if(n.indexOf(i[r])<=-1)return;try{var o=new(window.XMLHttpRequest||ActiveXObject)("MSXML2.XMLHTTP.3.0");o.open(t.data?"POST":"GET",e,1),o.setRequestHeader("Content-type","application/json"),t.setHeaders&&t.setHeaders(o),o.onreadystatechange=function(){o.readyState>3&&t.callback&&t.callback(o.responseText,o)},o.send(t.data)}catch(e){window.console&&console.log(e)}},createCookie:function(e,t,i){if(i){var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),r="; expires="+n.toGMTString()}else var r="";document.cookie=e+"="+t+r+"; domain=."+location.hostname.split(".").reverse()[1]+"."+location.hostname.split(".").reverse()[0]+"; path=/"},readCookie:function(e){for(var t=e+"=",i=document.cookie.split(";"),n=0;n<i.length;n++){for(var r=i[n];" "==r.charAt(0);)r=r.substring(1,r.length);if(0==r.indexOf(t))return r.substring(t.length,r.length)}return null}};}();

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

  let ls = getParameterByName('ls');
  utu.identity({
    properties: {
      leadSource: ls || 'organic'
    }
  });

</script>
<!--q end uTu -->

function submitCNI(){if(0==$("#input_file_cni").val().length)return alert("Vous devez choisir un fichier."),!1;$("#div_submit_cni").addClass("hide");$("#div_loader_ajax").removeClass("hide");$("#form_submit_cni").submit()}
$(document).ready(function(){$(".toggleBox.enabled .header").bind("click.toggleBox",function(){$toggleBox=$(this).closest(".toggleBox");$(".content",$toggleBox).slideToggle(300,function(){var a="../images/moncompte/common/toggle_"+($toggleBox.hasClass("closed")?"hide":"show")+".png";$toggleBox.toggleClass("closed");$(".header .status",$toggleBox).attr("src",a)})})});
(function(a){var b;b=window.location.search.substr(1).split("&");if(""==b)b={};else{for(var c={},d=0;d<b.length;++d){var e=b[d].split("=");2==e.length&&(c[e[0]]=decodeURIComponent(e[1].replace(/\+/g," ")))}b=c}a.QueryString=b})(jQuery);
function getHtmlSound(a,b){var c=navigator.userAgent.toLowerCase();return sHTML=-1!=c.indexOf("msie")&&-1==c.indexOf("opera")?'<bgsound id="'+a+'" src="'+b+'" loop="1" autostart="true"></bgsound>':-1!=c.indexOf("firefox")&&-1==c.indexOf("windows")?'<embed id="'+a+'" name="'+a+'" type="application/x-mplayer2" pluginspage="http://microsoft.com/windows/mediaplayer/en/download/" src="'+b+'" displaysize="4" autosize="-1" bgcolor="darkblue" showcontrols="false" showtracker="-1" showdisplay="0" showstatusbar="-1" videoborder3d="-1" width="0" height="0" autostart="true" designtimesp="5311" loop="false"></embed>':
'<embed id="'+a+'" type="audio/x-wav" src="'+b+'" loop="false" autostart="true" autoPlay="true" width="1" height="1" bgcolor="white" autohref="true" volume="100"></embed>'}function getCookie(a){var b,c,d,e=document.cookie.split(";");for(b=0;b<e.length;b++)if(c=e[b].substr(0,e[b].indexOf("=")),d=e[b].substr(e[b].indexOf("=")+1),c=c.replace(/^\s+|\s+$/g,""),c==a)return unescape(d);return null}
function setCookie(a,b,c){var d=new Date;d.setDate(d.getDate()+c);b=escape(b)+(null==c?"":"; expires="+d.toUTCString());document.cookie=a+"="+b}function getVoiceStatus(){return parseInt(getCookie("useVoice"))}
function toggleVoice(){var a=getVoiceStatus();setCookie("useVoice",a?0:1,365);$("#btAideVocale").attr("src",a?"../images/moncompte/identification/btnAideOff.png":"../images/moncompte/identification/btnAideOn.png").attr("alt",a?"Activer l'aide vocale":"D\u00e9sactiver l'aide vocale").attr("title",a?"Activer l'aide vocale":"D\u00e9sactiver l'aide vocale")}
function playSound(a,b,c){soundManager.getSoundById(a)||soundManager.createSound({id:a,type:c,url:b,autoLoad:!0,autoPlay:!1,volume:100});soundManager.getSoundById(a).play()}function validateEmail(a){return/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(a)?!0:!1}
function formatIBAN(a){var b=a.value.toUpperCase().replace(/([^A-Z0-9])/g,"").replace(/(.{4,4})(?!$)/g,"$1 "),c;document.selection?(c=document.selection.createRange(),c.moveStart("character",-a.value.length),c=c.text.length):c=a.selectionStart;c==a.value.length?c=b.length:c%5||c++;a.value=b;a.selectionStart=a.selectionEnd=c};
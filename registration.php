
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script> 
        <meta name="keywords" content="Stem cell therapy in Diabetes Conference, Young researchers Meetings, physicians Events, Diabetic Disease, blood sugar medicine congress, Journals, Dubai, Abu Dhabi,Turkey, Instanbul, Russia, Moscow, 2018, 2019, scientists, Healthcare socities, Autoimmune"/>
        <meta name="description" content="Meet best and top diabetologists, neurologists and join upcomimg Health care events with Professors, Researchers, Students,Surgeons from Korea, USA, UK, Europe, Osaka, Tokyo, Abu Dhabi, 2018, 2019
"/>
        <title>Registration | Top Researchers | Conference Tickets | Events & Conferences | Upcoming Meetings | Healthcare Registration |Diabetic surgeons | Indonesia | Russia | Europe | Canada | 2018</title>
        <style>
            mark {

                background-color: transparent !important;
            }
            .payment-option{

                margin:20px 0;
                padding:10px 0;

            }
        </style>
        <style>
            .addons-sub{
                border: 2px solid #4C9ED9;

                margin: 20px 0px 20px -15px;
                border-radius: 4px;
                padding: 50px 20px 20px 20px;
                position: relative;


            }
            .addons-sub h4{
                position: absolute;
                top: -20px;
                left: 20px;
                margin: 0px;
                background: #4C9ED9;
                color: white;
                padding: 10px;
                border-radius: 25px;


            }

            .reg-type {
                border: 1px solid tomato;
                border-radius: 4px;
                margin-bottom: 20px;
            }
            .reg-sub-main .reg-sub {
                padding-top: 30px;
                padding-bottom: 10px;
                text-align: center;
                /*                height:125px;*/
            }
            .addon .reg-sub-main .reg-sub{height:auto;}
            .reg-sub-main>div>h4 {
                font-weight: bold;
                /*                padding-top: 20px;*/
                position: relative;
                font-size: 16px;
                margin: 10px 0 5px;
            }
            .reg-sub-main>div>h4:after {
                content: "\f054";
                font-family: FontAwesome;
                font-style: normal;
                font-weight: normal;
                text-decoration: inherit;
                color: #e3e3e3;
                font-size: small;
                padding-left: 0.5em;
            }
            .reg-sub-main:hover>div>h4:after {
                color: tomato;
            }
            .reg-sub-main {
                border-bottom: 1px solid #e3e3e3;
            }
            .reg-sub-main:last-child {
                border-bottom: none;
            }
            .reg-type h3 {
                margin: 0;
                background: tomato;
                color: white;
                padding: 5px 0;
                border-bottom: 0;
            }
            .reg-type label:after{content:none;}
            .reg-type.business {
                border: 1px solid #cc3f45;
            }
            .reg-type.business h3 {
                background: #cc3f45;
            }
            .reg-type.business .reg-sub p span, .reg-type.business .reg-sub-main:hover>div>h4:after {
                color: #cc3f45;
            }
            .reg-type.e-poster {
                border: 1px solid #5858a2;
            }
            .reg-type.e-poster h3 {
                background: #5858a2;
            }

            .reg-type.student {
                border: 1px solid #30AE81;
            }
            .reg-type.student h3 {
                background: #30AE81;
            }

            .reg-type.e-poster .reg-sub p span, .reg-type.e-poster .reg-sub-main:hover>div>h4:after {
                color: #5858a2;
            }
            .reg-sub p span {
                font-size: 24px;
                color: tomato;
            }
            .reg-sub-main input[type=checkbox],.reg-sub-main input[type=radio] {
                position: absolute;
                clip: rect(0,0,0,0);
                pointer-events: none; 

            }
            .reg-sub-main  .btn {
                border-radius: 20px;
                padding: 0px 15px;
                margin-bottom: 5px;
            }
            .reg-type.e-poster .btn {
                margin-bottom: 10px;
            }
            .reg-type.e-poster .btn-danger {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#5858a2+0,3d3da0+100 */
                background: rgb(88,88,162); /* Old browsers */
                background: -moz-linear-gradient(top, rgba(88,88,162,1) 0%, rgba(61,61,160,1) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(88,88,162,1)), color-stop(100%, rgba(61,61,160,1))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, rgba(88,88,162,1) 0%, rgba(61,61,160,1) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, rgba(88,88,162,1) 0%, rgba(61,61,160,1) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, rgba(88,88,162,1) 0%, rgba(61,61,160,1) 100%); /* IE10+ */
                background: linear-gradient(to bottom, rgba(88,88,162,1) 0%, rgba(61,61,160,1) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5858a2', endColorstr='#3d3da0', GradientType=0 ); /* IE6-9 */
                border-color: #7070B0;
            }

            .reg-type.student .btn-danger {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#30ae81+0,13a36c+100 */
                background: #30ae81; /* Old browsers */
                background: -moz-linear-gradient(top,  #30ae81 0%, #13a36c 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top,  #30ae81 0%,#13a36c 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom,  #30ae81 0%,#13a36c 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30ae81', endColorstr='#13a36c',GradientType=0 ); /* IE6-9 */

                border-color: #30ae81;
            }


            .reg-type.addon {
                border: 1px solid #0e304b;
            }
            .reg-type.addon .reg-sub p span {
                color: #0e304b;
            }
            .reg-type.addon h3 {
                background: #0e304b;
                font-size: 18px;
            }
            .reg-type.addon .btn-danger {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#476277+1,163853+100 */
                background: rgb(71,98,119); /* Old browsers */
                background: -moz-linear-gradient(top, rgba(71,98,119,1) 1%, rgba(22,56,83,1) 100%); /* FF3.6+ */
                background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, rgba(71,98,119,1)), color-stop(100%, rgba(22,56,83,1))); /* Chrome,Safari4+ */
                background: -webkit-linear-gradient(top, rgba(71,98,119,1) 1%, rgba(22,56,83,1) 100%); /* Chrome10+,Safari5.1+ */
                background: -o-linear-gradient(top, rgba(71,98,119,1) 1%, rgba(22,56,83,1) 100%); /* Opera 11.10+ */
                background: -ms-linear-gradient(top, rgba(71,98,119,1) 1%, rgba(22,56,83,1) 100%); /* IE10+ */
                background: linear-gradient(to bottom, rgba(71,98,119,1) 1%, rgba(22,56,83,1) 100%); /* W3C */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#476277', endColorstr='#163853', GradientType=0 ); /* IE6-9 */
                border-color: #0e304b;
            }
            .payment-info-main {

                margin-bottom: 20px;
            }
            .payment-info {
                font-size: 24px;
                margin-bottom: 30px;
            }
            .payment-info span {
                font-weight: bold;
                display: inline-block;
                margin-left: 10px;
            }
            .payment-option h3 {
                margin-top: 5px;
            }
            .payment-option .submit-button {
                margin: 20px 0;
                clear: both;
            }
            .payment-option label {
                font-size: 22px;
                cursor: pointer;
            }
            .reg-sub.time-over {
                opacity: 0.5;
            }
            .reg-sub.time-over p span {
                color: gray !important;
            }
            .reg-sub.selected {
                background: #DCF3DC;
            }
            .reg-sub.selected p span {
                color: #489F48 !important;
            }
            .reg-sub.time-over .btn.disabled {
                background: #e3e3e3;
                color: gray;
                text-shadow: none;
                border-color: transparent;
            }
            .reg-sub.time-over p {
                text-decoration: line-through;
            }
            .addons-main {
                opacity: 0.5;
            }
            .addons-main.on {
                opacity: 1;
            }
            @media only screen and (max-width : 768px) {
                .reg-sub-main {
                    text-align: center;
                }
                .reg-sub-main>div>h4 {
                    padding-top: 0;
                }
                .reg-sub-main>div>h4:after {
                    content: "\f063";
                }
                .payment-option h3 {
                    text-align: center;
                    margin-bottom: 20px;
                }
                .payment-option>div.col-xs-6 {
                    text-align: center;
                }
            }
            .time{

                padding:10px;
                border-bottom: 1px solid #e3e3e3;
                font-weight: bold;
                text-align: center;
            }
            #currlabel {
                font-size: 18px;
            }
        </style>
        <meta name="author" content="">
         
<meta charset="utf-8">
<title>Healthcare Events | Diabetes Conferences | Diabetes Events | Healthcare | Europe | Finland | 2018</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Diabetes Conferences, Diabetic Medicine Congress, Healthcare Meetings, Diabetes and Endocrinology Congress, Neuropathy, Journals, Finland, Europe, USA, Canada, Asia Pacific, Middle East, 2018, 2019
" />
<meta name="description" content="Meet best and top Diabetologist, Endocrinologists, Researchers, Scientists, Students at Diabetic Conferences, Healthcare Medicine Events, Diabetes and Healthcare Meetings in 2018, 2019 at Finland, Europe, USA, UK, Asia Pacific, Middle East
">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Michroma" rel="stylesheet">
<link rel="stylesheet" href="https://d2cax41o7ahm5l.cloudfront.net/cs/css/style.min.css" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/favicon.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-57-precomposed.png">
<meta property="og:url" content="https://diabetic.healthconferences.org/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Healthcare Events | Diabetes Conferences | Diabetes Events | Healthcare | Europe | Finland | 2018" />
<meta property="og:description" content="Meet best and top Diabetologist, Endocrinologists, Researchers, Scientists, Students at Diabetic Conferences, Healthcare Medicine Events, Diabetes and Healthcare Meetings in 2018, 2019 at Finland, Europe, USA, UK, Asia Pacific, Middle East
" />
<meta property="og:image:height" content="630" />
<style>

	@-webkit-keyframes glowing {
		  0% { background-color: #004A7F; box-shadow: 0 0 15px red; }
		  50% { background-color: #0094FF; box-shadow: 0 0 15px yellow; }
		  100% { background-color: #004A7F; box-shadow: 0 0 15px red; }
	}

	#chat {
		position: fixed;
		bottom: 100px;
		right: 25px;
		z-index: 9999;
	}
	
	a#chat{
		animation: glowing 1s infinite;
	}
	
  

p#confdatetimer{
	font-size: 25px;
    background-color: #004178;
    font-weight: bold;
    color: white;
}
@media(max-width:767px){
	#chat {
		bottom: 50px;
		right: 10px;

	}

}
</style>

<script>
// Set the date we're counting down to
var countDownDate = new Date("2018-11-26 10:0:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
	if(days < 100 )
	{
		document.getElementById("confdatetimer").innerHTML = days + " Days " + hours + " Hours "
		+ minutes + " Mins " + seconds + " Secs";
		
		// If the count down is over, write some text 
		if (distance < -2) {
			clearInterval(x);
			document.getElementById("confdatetimer").innerHTML = " ";
		}
	}
}, 1000);
</script>
<!-- Google Analytics Code - Starts Here -->
<!-- Google Analytics -->

	
	
</head>

<body>


<!--<div id="fb-root"></div>-->
<!--<script>(function(d, s, id) {-->
<!--  var js, fjs = d.getElementsByTagName(s)[0];-->
<!--  if (d.getElementById(id)) return;-->
<!--  js = d.createElement(s); js.id = id;-->
<!--  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=857170574381006";-->
<!--  fjs.parentNode.insertBefore(js, fjs);-->
<!--}(document, 'script', 'facebook-jssdk'));</script>-->
<!--    <div id="CssFailCheck" class="hidden"></div>-->
<!--    <header>-->
<!--        <nav class="navbar navbar-default navbar-fixed-top">-->

<!--	<div class="navbar-header">-->
<!--		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span>MENU</span> </button>-->
		
<!--		<a href="https://diabetic.healthconferences.org/" title="Home" class="show navbar-brand" ><img src="https://d2cax41o7ahm5l.cloudfront.net/cs/images/logo.png" title="conferenceseries" class="center-block" alt="conferenceseries"></a> 		-->
<!--		</div>-->
	
        <!-- Displaying Conference Details -->
        
 
<!--        <script type='text/javascript'>-->
<!--            function refreshCaptcha()-->
<!--            {-->
<!--                var img = document.images['captchaimg'];-->
<!--                img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;-->
<!--            }-->
<!--        </script> -->
<!--        <script type="text/javascript">-->

<!--            function calculateAmount() {-->
<!--                amount = 0;-->

<!--                var provals = [];-->

<!--                var radios = document.getElementsByTagName('input');-->
<!--                for (i = 0; i < radios.length; i++) {-->
<!--                    if (radios[i].type == 'radio' && radios[i].checked && isNaN(radios[i].value) == false) {-->
<!--                        amount = amount + parseInt(radios[i].value);-->
<!--                        provals.push(parseInt(radios[i].value));-->
<!--                    }-->
<!--                }-->

<!--                var pros = [];-->

<!--                $.each($("input[type=checkbox]:checked"), function () {-->
<!--                    if ($(this).attr('name') != 'checkin')-->
<!--                    {-->
<!--                        pros.push($(this).val());-->
<!--                    }-->
<!--                });-->

<!--                var product = pros.toString();-->
<!--                product = product.replace(/,/g, " + ");-->
<!--                document.form1.products.value = product;-->

<!--                var productvalues = provals.toString();-->
<!--                productvalues = productvalues.replace(/,/g, "+");-->
<!--                document.form1.productvalues.value = productvalues;-->

<!--                document.form1.price.value = amount;-->
<!--            }-->

<!--            function FillBilling(f) {-->
<!--                if (f.checkin.checked == true) {-->

<!--                    f.STitle.value = f.Title.value;-->
<!--                    f.SFName.value = f.FName.value;-->
<!--                    f.SLName.value = f.LName.value;-->

<!--                    f.Scompany.value = f.Company.value;-->
<!--                    f.scity.value = f.city.value;-->
<!--                    f.sstate.value = f.state.value;-->

<!--                    f.Scountry.value = f.Country.value;-->
<!--                    f.SAuthors_Email.value = f.Authors_Email.value;-->
<!--                    f.Sphone.value = f.phone.value;-->
<!--                    f.SFull_Postal_Address.value = f.Full_Postal_Address.value;-->
<!--                }-->

<!--                else {-->
<!--                    f.Sname.value = " ";-->
<!--                    f.Scompany.value = " ";-->
<!--                    f.Scountry.value = " ";-->
<!--                    f.SAuthors_Email.value = " ";-->
<!--                    f.Sphone.value = " ";-->
<!--                    f.SFull_Postal_Address.value = " ";-->
<!--                }-->
<!--            }-->

<!--            function validate()-->
<!--            {-->
<!--                var frm = document.form1;-->

<!--                if (frm.price.value == '0' || frm.price.value == '')-->
<!--                {-->
<!--                    alert("Please select a valid Registration Category");-->
<!--                    return false;-->
<!--                }-->
<!--            }-->
<!--        </script>-->
        <!--Navigation Ends Here-->
        <!--Main Content Starts Here-->
<!--<? include 'header.php'; ?>-->
    <div class="main-content">
    <div class="container">
        <section class="row reg-form">
            <div class="col-md-12">
                <article>
                    <div class=" form-head clearfix">
                        <div class="col-md-6">
                            <h2 class="heading"><i class="fa fa-pencil-square-o"></i> Online registration</h2>
                        </div>
						<div class="clearfix"></div>
																		
                        <div>
                            <div class="well well-sm text-center choose-currency" style="background-color:#e0e0e0">
                              
								
                                <div>
                                    <form name="currform" id="currform" action="registration.php" method="post">
                                        
                                        <div class="clearfix">
                                        	 <div class="col-md-4 col-sm-6 text-center">
                                                    <h3>Choose Payment Method <i class="fa fa-long-arrow-right hidden-xs"></i></h3>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-xs-4">
                                                    <label>
                                                        <input type="radio" name="payment" value="stripe" id="selectedstrip" checked >
                                                        Payment Gateway 
                                                        <!--<img src="images/stripe-logo.png" alt="Stripe" style="background:#0694DC;">--> </label>
                                                </div>
                                                    <div class="col-md-3 col-sm-3 col-xs-4">
                                                        <label>
                                                            <input type="radio" name="payment" value="paypal" id="selectedpaypal"  disabled >
                                                            PayPal </label>

                                                        <div id="showpaypalbox">
                                                            For PayPal payments, 2% processing charges may apply. </div>
                                                    </div>
                                            </div>
                                        <br>
                                       <div class="h3 text-primary" style="margin-top: 0;"><strong>Choose your Currency</strong></div>
                                        <label id="currlabel">
                                            <input type="radio" id="currencyGBP" name="currency" value="GBP"  /> GBP (£)
                                        </label>
                                        <label id="currlabel">
                                            <input type="radio" id="currencyEUR" name="currency" value="EUR" checked /> Euro (€)
                                        </label> 
                                        <label id="currlabel">
                                            <input type="radio" id="currencyUSD" name="currency" value="USD" /> USD ($)
                                        </label> 

                                        <input type="hidden" name="frmAction" value="currForm">
                                        <input type="hidden" name="Title" id="Title" value="">
                                        <input type="hidden" name="FName" id="FName" value="">
                                        <input type="hidden" name="LName" id="LName" value="">
                                        <input type="hidden" name="Company" id="Company" value="">
                                        <input type="hidden" name="city" id="city" value="">
                                        <input type="hidden" name="state" id="state" value="">
                                        <input type="hidden" name="Country" id="Country" value="">
                                        <input type="hidden" name="Authors_Email" id="Authors_Email" value="">
                                        <input type="hidden" name="phone" id="phone" value="">
                                        <input type="hidden" name="Full_Postal_Address" id="Full_Postal_Address" value="">
                                        <input type="hidden" name="Abstact_Category" id="Abstact_Category" value="">
                                        <input type="hidden" name="Conference_Title" id="Conference_Title" value="">
                                        <input type="hidden" name="STitle" id="STitle" value="">
                                        <input type="hidden" name="SFName" id="SFName" value="">
                                        <input type="hidden" name="SLName" id="SLName" value="">
                                        <input type="hidden" name="Scompany" id="Scompany" value="">
                                        <input type="hidden" name="scity" id="scity" value="">
                                        <input type="hidden" name="sstate" id="sstate" value="">
                                        <input type="hidden" name="payment" id="payopt1" value="">
                                        <input type="hidden" name="Scountry" id="Scountry" value="">
                                        <input type="hidden" name="SAuthors_Email" id="SAuthors_Email" value="">
                                        <input type="hidden" name="Sphone" id="Sphone" value="">
                                        <input type="hidden" name="SFull_Postal_Address" id="SFull_Postal_Address" value="">
                                    </form> 
                                </div>
                            </div>
							<!-- test -->
                        </div>


                                            </div>
                    <section class=" well well-sm reg-form-main clearfix">
                                                <!--  <form role="form" id="regformid" method="post" action="checkout.php" name="form1" onSubmit="return validate();" class="form-horizontal clearfix"> -->
                        <form role="form" id="regformid" method="post" action="registration.php" name="form1" onSubmit="return validate();" class="form-horizontal clearfix">
                            <input type="hidden" name="conference" value="Diabetic 2018">
                            <input type="hidden" name="conferenceid" value="3764">
                            <input type="hidden" name="currency" value="EUR">
                            <input type="hidden" name="frmAction" value="regForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="reg-details">
                                        <p>Marked fields are required</p>
                                        <div class="form-group">
                                            <label for="selectTitle" class="col-md-4 control-label">Title</label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="Title" name="Title" required>
                                                    <option>Select Title</option>
                                                    <option value='Mr' >Mr</option><option value='Ms' >Ms</option><option value='Mrs' >Mrs</option><option value='Prof' >Prof</option><option value='Dr' >Dr</option><option value='Assist Prof Dr' >Assist Prof Dr</option><option value='Assoc Prof Dr' >Assoc Prof Dr</option>                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputFirstName" class="col-md-4 control-label">Full Name</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="FName" id="FName" placeholder="First Name" value="" required >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="LName" id="LName" placeholder="Last Name" value="" required>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-md-4 control-label notrequired">Company Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="Company" id="Company" placeholder="Company/University Name" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-md-4 control-label notrequired">City</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="city" id="city" placeholder="City"  value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-md-4 control-label notrequired">State</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="state" id="state" placeholder="State"  value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectCountry"  class="col-md-4 control-label">Country</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="Country" id="Country" required>
                                                    <option value="">Select Country</option>
                                                    <option value='Afghanistan'>Afghanistan</option><option value='Aland Islands'>Aland Islands</option><option value='Albania'>Albania</option><option value='Algeria'>Algeria</option><option value='Amman'>Amman</option><option value='Andorra'>Andorra</option><option value='Angola'>Angola</option><option value='Argentina'>Argentina</option><option value='Armenia'>Armenia</option><option value='Aruba'>Aruba</option><option value='Australia'>Australia</option><option value='Austria'>Austria</option><option value='Azerbaijan'>Azerbaijan</option><option value='Bahamas'>Bahamas</option><option value='Bahrain'>Bahrain</option><option value='Bangladesh'>Bangladesh</option><option value='Barbados'>Barbados</option><option value='Belarus'>Belarus</option><option value='Belgium'>Belgium</option><option value='Belize'>Belize</option><option value='Benin'>Benin</option><option value='Bhutan'>Bhutan</option><option value='Bolivia'>Bolivia</option><option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option><option value='Botswana'>Botswana</option><option value='Brazil'>Brazil</option><option value='Brunei'>Brunei</option><option value='Bulgaria'>Bulgaria</option><option value='Burkina Faso'>Burkina Faso</option><option value='Burundi'>Burundi</option><option value='Cambodia'>Cambodia</option><option value='Cameroon'>Cameroon</option><option value='Canada'>Canada</option><option value='Cango'>Cango</option><option value='Cape Verde'>Cape Verde</option><option value='Cayman Islands'>Cayman Islands</option><option value='Central African Republic'>Central African Republic</option><option value='Chile'>Chile</option><option value='China'>China</option><option value='Colombia'>Colombia</option><option value='Costa Rica'>Costa Rica</option><option value='Cote dIvoire'>Cote dIvoire</option><option value='Croatia'>Croatia</option><option value='Cuba'>Cuba</option><option value='Cyprus'>Cyprus</option><option value='Czech Republic'>Czech Republic</option><option value='Democratic Republic of the Congo'>Democratic Republic of the Congo</option><option value='Denmark'>Denmark</option><option value='Djibouti'>Djibouti</option><option value='Dominican Republic'>Dominican Republic</option><option value='Dublin'>Dublin</option><option value='Ecuador'>Ecuador</option><option value='Egypt'>Egypt</option><option value='El Salvador'>El Salvador</option><option value='England'>England</option><option value='Eritrea'>Eritrea</option><option value='Estonia'>Estonia</option><option value='Ethiopia'>Ethiopia</option><option value='Europe'>Europe</option><option value='Faroe Islands'>Faroe Islands</option><option value='Fiji'>Fiji</option><option value='Finland'>Finland</option><option value='France'>France</option><option value='Gabon'>Gabon</option><option value='Gambia'>Gambia</option><option value='Georgia'>Georgia</option><option value='Germany'>Germany</option><option value='Ghana'>Ghana</option><option value='Gibraltar'>Gibraltar</option><option value='Greece'>Greece</option><option value='Grenada'>Grenada</option><option value='Guam'>Guam</option><option value='Guatemala'>Guatemala</option><option value='Guernsey'>Guernsey</option><option value='Guinea'>Guinea</option><option value='Guinea-Bissau'>Guinea-Bissau</option><option value='Guyana'>Guyana</option><option value='Haiti'>Haiti</option><option value='Honduras'>Honduras</option><option value='Hong Kong'>Hong Kong</option><option value='Hungary'>Hungary</option><option value='Iceland'>Iceland</option><option value='India'>India</option><option value='Indonesia'>Indonesia</option><option value='Iran'>Iran</option><option value='Iraq'>Iraq</option><option value='Ireland'>Ireland</option><option value='Isle of Man'>Isle of Man</option><option value='Israel'>Israel</option><option value='Italy'>Italy</option><option value='Ivory Coast'>Ivory Coast</option><option value='Jamaica'>Jamaica</option><option value='Japan'>Japan</option><option value='Jersey'>Jersey</option><option value='Johor Bahru'>Johor Bahru</option><option value='Jordan'>Jordan</option><option value='Kazakhstan'>Kazakhstan</option><option value='Kenya'>Kenya</option><option value='Kosovo'>Kosovo</option><option value='Kota Kinabalu'>Kota Kinabalu</option><option value='Kuala Lumpur'>Kuala Lumpur</option><option value='Kuantan'>Kuantan</option><option value='Kuching'>Kuching</option><option value='Kuwait'>Kuwait</option><option value='Kyrgyzstan'>Kyrgyzstan</option><option value='Laos'>Laos</option><option value='Latvia'>Latvia</option><option value='Lebanon'>Lebanon</option><option value='Lesotho'>Lesotho</option><option value='Liberia'>Liberia</option><option value='Libya'>Libya</option><option value='Liechtenstein'>Liechtenstein</option><option value='Lithuania'>Lithuania</option><option value='Luxembourg'>Luxembourg</option><option value='Macau (China)'>Macau (China)</option><option value='Macedonia'>Macedonia</option><option value='Madagascar'>Madagascar</option><option value='Malawi'>Malawi</option><option value='Malaysia'>Malaysia</option><option value='Maldives'>Maldives</option><option value='Mali'>Mali</option><option value='Malta'>Malta</option><option value='Maryland'>Maryland</option><option value='Mauritania'>Mauritania</option><option value='Mauritius'>Mauritius</option><option value='Melaka'>Melaka</option><option value='Mexico'>Mexico</option><option value='Mississippi'>Mississippi</option><option value='Moldova'>Moldova</option><option value='Monaco'>Monaco</option><option value='mongolia'>mongolia</option><option value='Montenegro'>Montenegro</option><option value='Morocco'>Morocco</option><option value='Mozambique'>Mozambique</option><option value='Myanmar'>Myanmar</option><option value='Namibia'>Namibia</option><option value='Nepal'>Nepal</option><option value='Netherlands'>Netherlands</option><option value='New Guinea'>New Guinea</option><option value='Newzealand'>Newzealand</option><option value='Nicaragua'>Nicaragua</option><option value='Nigeria'>Nigeria</option><option value='North America'>North America</option><option value='North Korea'>North Korea</option><option value='Norway'>Norway</option><option value='Oceania'>Oceania</option><option value='Oman'>Oman</option><option value='Oregon'>Oregon</option><option value='Pakistan'>Pakistan</option><option value='Palestine'>Palestine</option><option value='Panama'>Panama</option><option value='Paraguay'>Paraguay</option><option value='Penang'>Penang</option><option value='Peru'>Peru</option><option value='Philippines'>Philippines</option><option value='Poland'>Poland</option><option value='Portugal'>Portugal</option><option value='Puerto Rico'>Puerto Rico</option><option value='Qatar'>Qatar</option><option value='Republic of Ireland'>Republic of Ireland</option><option value='Republic of Macedonia'>Republic of Macedonia</option><option value='Republic of Yugoslavia'>Republic of Yugoslavia</option><option value='Romania'>Romania</option><option value='Russia'>Russia</option><option value='Rwanda'>Rwanda</option><option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option><option value='San Marino'>San Marino</option><option value='Saudi Arabia'>Saudi Arabia</option><option value='Scotland'>Scotland</option><option value='Senegal'>Senegal</option><option value='Serbia'>Serbia</option><option value='Shah Alam'>Shah Alam</option><option value='Sierra Leone'>Sierra Leone</option><option value='Singapore'>Singapore</option><option value='Slovakia'>Slovakia</option><option value='Slovenia'>Slovenia</option><option value='Somalia'>Somalia</option><option value='South Africa'>South Africa</option><option value='South Korea'>South Korea</option><option value='Spain'>Spain</option><option value='Sri Lanka'>Sri Lanka</option><option value='Sudan'>Sudan</option><option value='Suriname'>Suriname</option><option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option><option value='Swaziland'>Swaziland</option><option value='Sweden'>Sweden</option><option value='Switzerland'>Switzerland</option><option value='Syria'>Syria</option><option value='Taiwan'>Taiwan</option><option value='Tajikistan'>Tajikistan</option><option value='Tanzania'>Tanzania</option><option value='Thailand'>Thailand</option><option value='Timor Leste'>Timor Leste</option><option value='Togo'>Togo</option><option value='Trinidad and Tobago'>Trinidad and Tobago</option><option value='Tunisia'>Tunisia</option><option value='Turkey'>Turkey</option><option value='Turkmenistan'>Turkmenistan</option><option value='UAE'>UAE</option><option value='Uganda'>Uganda</option><option value='UK'>UK</option><option value='Ukraine'>Ukraine</option><option value='United Arab Emirates'>United Arab Emirates</option><option value='Uruguay'>Uruguay</option><option value='USA'>USA</option><option value='Uzbekistan'>Uzbekistan</option><option value='Vatican'>Vatican</option><option value='Venezuela'>Venezuela</option><option value='Victoria'>Victoria</option><option value='Vietnam'>Vietnam</option><option value='Wales'>Wales</option><option value='West Indies'>West Indies</option><option value='Yemen'>Yemen</option><option value='Zambia'>Zambia</option><option value='Zimbabwe'>Zimbabwe</option>                                               
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" class="form-control" name="Authors_Email" id="Authors_Email" placeholder="Your email"  value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPhoneNumber" class="col-md-4 control-label">Phone Number</label>
                                            <div class="col-md-8">
                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="20" required value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="col-md-4 control-label notrequired">Address</label>
                                            <div class="col-md-8">
                                                <textarea name="Full_Postal_Address" rows="3" class="form-control" id="Full_Postal_Address" maxlength="150"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAbsCategory"  class="col-md-4 control-label notrequired">Abstract Category</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="Abstact_Category" id="Abstact_Category" placeholder="Your Abstract Category" value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="titleSpeech"  class="col-md-4 control-label notrequired">Title of the speech</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="Conference_Title" id="Conference_Title" placeholder="Your title of the proposed talk" value="" >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="reg-details same">
                                        <div class="bill-info">
                                            <h3>Billing Information</h3>
                                            <div class="checkbox">
                                                <label  class="notrequired">
                                                    <input type="checkbox" name="checkin" onclick="FillBilling(this.form)" class="type"   /> If Billing Information same please click here.</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectTitleSame" class="col-md-4 control-label">Title</label>
                                            <div class="col-md-8">
                                                <select class="form-control" id="selectTitleSame" name="STitle" required>
                                                    <option selected="selected">Select Title</option>
                                                    <option value='Mr' >Mr</option><option value='Ms' >Ms</option><option value='Mrs' >Mrs</option><option value='Prof' >Prof</option><option value='Dr' >Dr</option><option value='Assist Prof Dr' >Assist Prof Dr</option><option value='Assoc Prof Dr' >Assoc Prof Dr</option>                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputFirstNameSame" class="col-md-4 control-label">Full Name</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="SFName" id="SFName" placeholder="First Name" required value="" >
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="SLName" id="SLName" placeholder="Last Name" required value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastNameSame" class="col-md-4 control-label notrequired">Company Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="Scompany" id="Scompany" placeholder="Company/University Name" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-md-4 control-label notrequired">City</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="scity" id="scity" placeholder="City" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLastName" class="col-md-4 control-label notrequired">State</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="sstate" id="sstate" placeholder="State" required value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="selectCountrySame"  class="col-md-4 control-label">Country</label>
                                            <div class="col-md-8">
                                                <select class="form-control" name="Scountry" id="Scountry" required>
                                                    <option selected="selected">Select Country</option>
                                                    <option value='Afghanistan' >Afghanistan</option><option value='Aland Islands' >Aland Islands</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='Amman' >Amman</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Aruba' >Aruba</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option><option value='Botswana' >Botswana</option><option value='Brazil' >Brazil</option><option value='Brunei' >Brunei</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cango' >Cango</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Costa Rica' >Costa Rica</option><option value='Cote dIvoire' >Cote dIvoire</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Democratic Republic of the Congo' >Democratic Republic of the Congo</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominican Republic' >Dominican Republic</option><option value='Dublin' >Dublin</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='England' >England</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Europe' >Europe</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Gibraltar' >Gibraltar</option><option value='Greece' >Greece</option><option value='Grenada' >Grenada</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guernsey' >Guernsey</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Isle of Man' >Isle of Man</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Ivory Coast' >Ivory Coast</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jersey' >Jersey</option><option value='Johor Bahru' >Johor Bahru</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kosovo' >Kosovo</option><option value='Kota Kinabalu' >Kota Kinabalu</option><option value='Kuala Lumpur' >Kuala Lumpur</option><option value='Kuantan' >Kuantan</option><option value='Kuching' >Kuching</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macau (China)' >Macau (China)</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Maryland' >Maryland</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Melaka' >Melaka</option><option value='Mexico' >Mexico</option><option value='Mississippi' >Mississippi</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='mongolia' >mongolia</option><option value='Montenegro' >Montenegro</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Guinea' >New Guinea</option><option value='Newzealand' >Newzealand</option><option value='Nicaragua' >Nicaragua</option><option value='Nigeria' >Nigeria</option><option value='North America' >North America</option><option value='North Korea' >North Korea</option><option value='Norway' >Norway</option><option value='Oceania' >Oceania</option><option value='Oman' >Oman</option><option value='Oregon' >Oregon</option><option value='Pakistan' >Pakistan</option><option value='Palestine' >Palestine</option><option value='Panama' >Panama</option><option value='Paraguay' >Paraguay</option><option value='Penang' >Penang</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Republic of Ireland' >Republic of Ireland</option><option value='Republic of Macedonia' >Republic of Macedonia</option><option value='Republic of Yugoslavia' >Republic of Yugoslavia</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='San Marino' >San Marino</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Scotland' >Scotland</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Shah Alam' >Shah Alam</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='South Korea' >South Korea</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard and Jan Mayen' >Svalbard and Jan Mayen</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Timor Leste' >Timor Leste</option><option value='Togo' >Togo</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='UAE' >UAE</option><option value='Uganda' >Uganda</option><option value='UK' >UK</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='Uruguay' >Uruguay</option><option value='USA' >USA</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vatican' >Vatican</option><option value='Venezuela' >Venezuela</option><option value='Victoria' >Victoria</option><option value='Vietnam' >Vietnam</option><option value='Wales' >Wales</option><option value='West Indies' >West Indies</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option> 
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmailSame" class="col-md-4 control-label">Email</label>
                                            <div class="col-md-8">
                                                <input type="email" name="SAuthors_Email" id="SAuthors_Email" class="form-control"  placeholder="Your email" required value="" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPhoneNumberSame" class="col-md-4 control-label">Phone Number</label>
                                            <div class="col-md-8">
                                                <input type="tel" class="form-control" id="Sphone" name="Sphone" placeholder="Phone Number" maxlength="20" required value=""  >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="addressSame" class="col-md-4 control-label notrequired">Address</label>
                                            <div class="col-md-8">
                                                <textarea name="SFull_Postal_Address" id="SFull_Postal_Address" rows="3" class="form-control"  maxlength="150"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                 
                                                                    
                                    <!-- New Code for Registration -->

                                    <div class="clearfix" style="clear:both;">
                                        <div class="clearfix">
                                            <div class="reg-main">
                                                                                                    <div class="col-md-6">
                                                        <div class="reg-type">
                                                            <h3 class="text-center">Academic</h3>
                                                            <div class="time clearfix hidden-xs hidden-xs">
                                                                <div class="col-md-offset-3 col-sm-offset-3 col-sm-offset-3 col-md-3 col-sm-3">
                                                                    On/Before<br>
                                                                    October 08, 2018                                                                </div>
                                                                <div class="col-md-3 col-sm-3">
                                                                    On/Before<br>
                                                                    November 01, 2018                                                                </div>
                                                                <div class="col-md-3 col-sm-3">
                                                                    Final Call<br>
                                                                    November 26,2018                                                                </div>
                                                            </div>
                                                                                                                                                                                    <div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Registration</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Registration"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€520</span> </p></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€680</span> </p><input class="selectedplan" type="radio" data-producttype="regClose" name="reg[]" id="option2" data-priceval ="680" value="40989"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€770</span> </p><input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval ="770" id="option3" value="40989"></div></div></div><div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Package A</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Package A"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€800</span> </p></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€960</span> </p><input class="selectedplan" type="radio" data-producttype="regClose" name="reg[]" id="option2" data-priceval ="960" value="40990"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€1050</span> </p><input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval ="1050" id="option3" value="40990"></div></div></div><div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Package B</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Package B"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€940</span> </p></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€1070</span> </p><input class="selectedplan" type="radio" data-producttype="regClose" name="reg[]" id="option2" data-priceval ="1070" value="40991"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€1159</span> </p><input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval ="1159" id="option3" value="40991"></div></div></div>
                                                        </div>

                                                    </div>
                                                

                                                                                                    <div class="col-md-6">
                                                        <div class="reg-type business">
                                                            <h3 class="text-center">Business</h3>
                                                            <div class="time clearfix hidden-xs hidden-xs">
                                                                <div class="col-md-offset-3 col-sm-offset-3 col-md-3 col-sm-3">
                                                                    On/Before<br>
                                                                    October 08, 2018                                                                </div>
                                                                <div class="col-md-3 col-sm-3">
                                                                    On/Before<br>
                                                                    November 01, 2018                                                                </div>
                                                                <div class="col-md-3 col-sm-3">
                                                                    Final Call<br>
                                                                    November 26,2018                                                                </div>
                                                            </div>
                                                            <div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Registration</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1"  class="btnselectbusn"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€770</span> </p> </div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€870</span> </p><input type="radio" data-producttype="regClose" class="selectedplan" name="reg[]" id="busoption2" data-priceval ="870" value="40992"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€960</span> </p><input type="radio" class="selectedplan" data-producttype="final" data-priceval ="960" name="reg[]" id="busoption3" value="40992"></div></div></div><div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Package A</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1"  class="btnselectbusn"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€960</span> </p> </div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€1049</span> </p><input type="radio" data-producttype="regClose" class="selectedplan" name="reg[]" id="busoption2" data-priceval ="1049" value="40993"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€1139</span> </p><input type="radio" class="selectedplan" data-producttype="final" data-priceval ="1139" name="reg[]" id="busoption3" value="40993"></div></div></div><div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Package B</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1"  class="btnselectbusn"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€1069</span> </p> </div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€1160</span> </p><input type="radio" data-producttype="regClose" class="selectedplan" name="reg[]" id="busoption2" data-priceval ="1160" value="40994"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€1249</span> </p><input type="radio" class="selectedplan" data-producttype="final" data-priceval ="1249" name="reg[]" id="busoption3" value="40994"></div></div></div>                                                        </div>
                                                    </div>
                                                                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                                                                            <div class="col-md-6 col-sm-12">
                                                            <!-- Student Registration -->
                                                            <div class="reg-type student">
                                                                <h3 class="text-center">Student</h3>
                                                                <div class="time clearfix hidden-xs">
                                                                    <div class="col-md-offset-3 col-sm-offset-3 col-md-3 col-sm-3 hidden-xs">
                                                                        On/Before<br>
                                                                        October 08, 2018                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3">
                                                                        On/Before<br>
                                                                        November 01, 2018                                                                    </div>
                                                                    <div class="col-md-3 col-sm-3">
                                                                        Final Call<br>
                                                                        November 26,2018                                                                    </div>
                                                                </div>
                                                                <div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Young Researchers Forum</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1"  class="btnselectbusn"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€330</span> </p> </div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€380</span> </p><input type="radio" data-producttype="regClose" class="selectedplan" name="reg[]" id="busoption2" data-priceval ="380" value="40996"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€420</span> </p><input type="radio" class="selectedplan" data-producttype="final" data-priceval ="420" name="reg[]" id="busoption3" value="40996"></div></div></div><div class="reg-sub-main clearfix"><div class="col-md-3 col-sm-3"><h4>Student Delegate</h4><label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1"  class="btnselectbusn"><span class="regselect">Select</span></label></div><div class="col-md-3 col-sm-3"><div class="reg-sub time-over"><p><mark class="visible-xs">On/Before<br>
                                                                        October 08, 2018 </mark><span>€240</span> </p> </div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">On/Before<br>
                                                                        November 01, 2018 </mark><span>€290</span> </p><input type="radio" data-producttype="regClose" class="selectedplan" name="reg[]" id="busoption2" data-priceval ="290" value="40997"></div></div><div class="col-md-3 col-sm-3"><div class="reg-sub"><p><mark class="visible-xs">Final Call<br>
                                                                        November 26,2018 </mark><span>€330</span> </p><input type="radio" class="selectedplan" data-producttype="final" data-priceval ="330" name="reg[]" id="busoption3" value="40997"></div></div></div>                                                            </div>
                                                            <!-- Student Registration End-->
                                                        </div>
                                                                                                                                                        </div>
                                            </div>
                                                                                            <div class="addons-main col-md-12">

                                                    <div class="col-md-6">
                                                        <div class="addons-sub clearfix">
                                                            <h4>ADD-On Registrations</h4>
                                                            
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="reg-type text-center addon">
                                                                        <h3 class="text-center">Accompanying Person</h3>
                                                                        <div class="reg-sub-main clearfix">
                                                                            <div class="reg-sub addoncls">
                                                                                <p> <mark class="visible-xs">On/Before<br>
                                                                                        October 08, 2018</mark><span>+ €249</span> </p>
                                                                                <div>
                                                                                    <label class="btn btn-danger">
                                                                                        <input type="checkbox" name="reg[]" id="option1" disabled class="btnselect btnaddons" data-priceval ="249" data-producttype="earlybird" value="50498">
                                                                                        Add to Plan</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="reg-type text-center addon">
                                                                        <h3 class="text-center">Poster</h3>
                                                                        <div class="reg-sub-main clearfix">
                                                                            <div class="reg-sub addoncls">
                                                                                <p> <mark class="visible-xs">On/Before<br>
                                                                                        October 08, 2018</mark><span>+ €100</span> </p>
                                                                                <div>
                                                                                    <label class="btn btn-danger">
                                                                                        <input type="checkbox" name="reg[]" id="option1" disabled class="btnselect btnaddons" data-priceval ="100" data-producttype="earlybird" value="50497">
                                                                                        Add to Plan</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                                        </div>
                                                    </div>
                                                </div>
                                                                                    </div>
                                        <div class="payment-info-main">
                                            <p class="payment-info text-center">Your Total Payment €<span id="totamt">0.00</span> <small class="h6"><span class="text-danger">*</span> All prices are in EUR only.</small></p>

                                            <div class="payment-option clearfix">

                                                <div class="col-md-12">
                                                    <div class="text-center"><div class="antispam" style="border:0;">
                                                            <img src="captcha_code_file.php?rand=1357848886" id='captchaimg'>
                                                            <label class="notrequired">Enter the code here :</label>
                                                            <input id="6_letters_code" name="6_letters_code" type="text" required >
                                                            <label><span style="color:#FF0000;"></span></label>
                                                            <br>
                                                            <small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>

                                                        </div></div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <input name="policy" type="checkbox" required value="1">  I have read and agree with the <a href="#" class="" role="button" data-toggle="modal" data-target="#policy">Terms And Conditions (click here)</a>
                                                </div>	
                                                <div class="col-md-12 text-center">
                                                    <span style="font-size: 18px; background-color: #e0e0e0;padding: 3px 16px 3px 10px;">You have choosen currency : <b>EUR</b></span>
                                                </div>
                                                <div class="col-md-12 submit-button text-center">
												<input type="hidden" name="code" value="" >
                  
                                                <input type="hidden" name="payment" id="payopt" value="stripe" >
                                                    <button type="submit" name="submit" id="paybutton" class="btn btn-warning btn-lg">Proceed for Payment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End of the new registration code -->

                                    <!--end:replace-->

                                    <div class="col-md-12">
                                        <b><span style="color:red">Note: </span> If the payment is processed through Credit/Debit Card, The Card statement will be shown on the name of Conferenceseries LLC Ltd or it's subsidiaries iMedPub Ltd or Conferenceseries LLC Ltd, depending on the currency.</b>
                                    </div>

                                    <div class="col-md-12">
                                        <b>Here Conferences and Programs are announced to keep update our clients and to bookmark their dates. However, Registrations are not allowed before 12 months of the conference.</b>
                                    </div>
                                </div>
                                <input name="products" value="" type="hidden">
                                <input name="productvalues" value="" type="hidden">
                                <input name="sno" value="" type="hidden">
                                <input name="pricetype" value="" type="hidden" id="pricetype"/>
                                <input name="MM_insert" value="form1" type="hidden">
                                <input name="affiliationid" type="hidden" value="">
                                                    </form>
                       

                        <div class="show-special">
                            <section class="make-note">
                                <p class="bg-primary"><i class="fa fa-pencil"></i> <strong>Group Discounts</strong>: 3 or more members from the same lab/institute/university (or)
                                    anyone who wish to attend multiple Conferenceseries LLC Ltd Conferences is eligible to get special benefits from Conferenceseries LLC Ltd <a href="mailto:diabetes@mehealthevents.org" style="text-decoration:none;" target="_blank"> Please contact us.</a></p>
                            </section>

                        </div>
						
                    </section>
                    <article>
                        <div class="content-box"><p>
	<strong>Only Registration Includes:</strong></p>
<p>
	1.&nbsp; Access to all Sessions</p>
<p>
	2.&nbsp; Handbook &amp; Conference Kit</p>
<p>
	3.&nbsp; Certificate Accreditation from the Organizing Committee</p>
<p>
	4.&nbsp; Abstracts will be published in the conference souvenir and respective international journal</p>
<p>
	5.&nbsp; Ask the Expert Forums (One to One Pre-Scheduled meeting on interest and availability)</p>
<p>
	6.&nbsp; 10% abatement on the registration fees for the next annual conference</p>
<p>
	7.&nbsp; 10% abatement on the ConferenceSeries Ltd International conferences membership</p>
<p>
	8.&nbsp; 2 Coffee breaks (Refreshments and snacks) during the conference</p>
<p>
	9.&nbsp; Lunch during the conference</p>
<p>
	10.Wi-Fi</p>
<p>
	<strong>Package A:</strong></p>
<p>
	Above 10 features including the following...</p>
<p>
	11. Breakfast during the conference</p>
<p>
	12. 2 Nights&rsquo; accommodation (i.e. November 25<sup>th </sup>and&nbsp;November 26<sup>th</sup>) in deluxe single/double room at Helsinki, Finland.</p>
<p>
	<strong>Package B:</strong></p>
<p>
	Above 12 features including the following...</p>
<p>
	13. 1 Night extra accommodation i.e. November 27<sup><sub>th</sub></sup>(total 3 Nights)</p>
<p>
	<strong>For Student Delegates</strong></p>
<ol>
	<li style="text-align: justify;">
		Access to All Sessions</li>
	<li style="text-align: justify;">
		Coffee break during the conference</li>
	<li style="text-align: justify;">
		Conference Kit</li>
</ol>
<p>
	<strong>For Accompanying Person:</strong></p>
<ol>
	<li style="text-align: justify;">
		Entry passes for opening ceremony</li>
	<li style="text-align: justify;">
		Reception banquet</li>
	<li style="text-align: justify;">
		Coffee break during the conference</li>
</ol>
</div>                    </article>
                </article>
            </div>
        </section>
        </div>
    </div>

    <div class="modal fade" id="policy" tabindex="-1" role="dialog" aria-labelledby="cancellation_policy" aria-hidden="true" aria-describedby="about cancellation_policy">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="OCM_01_Research">Cancellation Policy</h4>
                </div>
                <div class="modal-body">
                    <div class="content-box">
                        <h4>Cancellation, Postponement and Transfer of Registration</h4>
                        <p>All cancellations or modifications of registration must be made in writing to <a href="mailto:finance@conferenceseries.com">finance@conferenceseries.com</a></p>
                        <h4>Cancellation Policy</h4>
                        <p>If ConferenceSeries cancels this event for any reason, you will receive a credit for 100% of the registration fee paid. You may use this credit for another <em>Conference Series</em> event which must occur within one year from the date of cancellation.</p>
                        <h4>Postponement</h4>
                        <p>If Conference Series postpones an event for any reason and you are unable or unwilling to attend on rescheduled dates, you will receive a credit for 100% of the registration fee paid. You may use this credit for another <em>Conference Series</em> event which must occur within one year from the date of postponement.</p>
                        <h4>Transfer of registration</h4>
                        <p>
                            All fully paid registrations are transferable to other persons from the same organization, if registered person is unable to attend the event. Transfers must be made by the registered person in writing to <a href="mailto: finance@conferenceseries.com">finance@conferenceseries.com</a> . Details must be included the full name of replacement person, their title, contact phone number and email address. All other registration details will be assigned to the new person unless otherwise specified.</p>
                        <p>
                            Registration can be transferred to one conference to another conference of <em>Conference Series</em> if the person is unable to attend one of conferences.</p>

                        <h5>However, Registration cannot be transferred if it is intimated within 14 days of respective conference.</h5>
                        <h5>The transferred registrations will not be eligible for Refund.</h5>
                        <h4>Visa Information</h4>
                        <p>Keeping in view of increased security measures, we would like to request all the participants to apply for Visa as soon as possible.</p>
                        <p> 
                            <em>Conference Series</em> will not directly contact embassies and consulates on behalf of visa applicants. All delegates or invitees should apply for Business Visa only.</p>
                        <p>
                            Important note for failed visa applications: Visa issues cannot come under the consideration of cancellation policy of <em>Conference Series </em>, including the inability to obtain a visa.</p>
                        <h4>Refund Policy:</h4>
                        <p>
                            If the registrant is unable to attend, and is not in a position to transfer his/her participation to another person or event, then the following refund arrangements apply:</p>
                        <h5>Keeping in view of advance payments towards Venue, Printing, Shipping, Hotels and other overheads, we had to keep Refund Policy is as following slabs-</h5>
                        <ul>
                            <li>Before 60 days of the conference: Eligible for Full Refund less $100 service Fee</li>
                            <li>Within 60-30 days of Conference: Eligible for 50% of payment Refund</li>
                            <li>Within 30 days of Conference: Not eligible for Refund</li>
                            <li>E-Poster Payments will not be refunded.</li>
                        </ul>
                        <h4>Accommodation Cancellation Policy:</h4>
                        <p>Accommodation Providers (Hotels) have their own cancellation policies, and they generally apply when cancellations are made less than 30 days prior to arrival. Please contact us as soon as possible, if you wish to cancel or amend your accommodation. Conference Series will advise the cancellation policy of your accommodation provider, prior to cancelling or amending your booking, to ensure you are fully aware of any non-refundable deposits.</p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> 

    <!--Main Content Ends Here-->
    <footer>

    <div class="container">
        <div class="conference-category-contact-main">
		            <div class="conference-category">
                <div class="conference-country padding-lg">
                    <h4 class="text-center padding-sm bg-success-gradient">Conferences By <strong>Continents</strong></h4>
                    <h3 class="text-success">USA &amp; Americas</h3>
                    <ul class="list-inline clearfix">
                        <li class="sprite USA"><a href="https://www.conferenceseries.com/usa-meetings/" target="_blank" title="USA">USA</a></li>
                        <li class="sprite Canada"><a href="https://www.conferenceseries.com/canada-meetings/" target="_blank" title="Canada">Canada</a></li>
                        <li class="sprite Brazil"><a href="https://www.conferenceseries.com/brazil-meetings/" target="_blank" title="Brazil">Brazil</a></li>
                        <li class="sprite Mexico"><a href="https://www.conferenceseries.com/mexico-meetings/" target="_blank" title="Mexico">Mexico</a></li>
                    </ul>
                    <h3 class="text-success">Asia-Pacific &amp; Middle East</h3>
                    <ul class="list-inline clearfix">
                        <li class="sprite Australia"><a href="https://www.conferenceseries.com/australia-meetings/" target="_blank" title="Australia">Australia</a></li>
                        <li class="sprite China"><a href="https://www.conferenceseries.com/china-meetings/" target="_blank" title="China">China</a></li>
                        <li class="sprite HongKong"><a href="https://www.conferenceseries.com/hong-kong-meetings/" title="Click for Hong Kong Conferences">Hong Kong</a></li>
                        <li class="sprite India"><a href="https://www.conferenceseries.com/india-meetings/" target="_blank" title="India">India</a></li>
                        <li class="sprite Indonesia"><a href="https://www.conferenceseries.com/indonesia-meetings/" title="Click for Indonesia Conferences">Indonesia</a></li>
                        <li class="sprite japan"><a href="https://www.conferenceseries.com/japan-meetings/" target="_blank" title="Japan">Japan</a></li>
                        <li class="sprite Malaysia"><a href="https://www.conferenceseries.com/malaysia-meetings/" target="_blank" title="Malaysia">Malaysia</a></li>
                        <li class="sprite NewZealand"><a href="https://www.conferenceseries.com/newzealand-meetings/" target="_blank" title="New Zealand">New Zealand</a></li>
                        <li class="sprite Philippines"><a href="https://www.conferenceseries.com/philippines-meetings/" target="_blank" title="Philippines">Philippines</a></li>
                        <li class="sprite Singapore"><a href="https://www.conferenceseries.com/singapore-meetings/" target="_blank" title="Singapore">Singapore</a></li>
                        <li class="sprite SouthKorea"><a href="https://www.conferenceseries.com/south-korea-meetings/" target="_blank" title="South Korea">South Korea</a></li>
                        <li class="sprite Taiwan"><a href="https://www.conferenceseries.com/taiwan-meetings/" title="Click for Taiwan Conferences">Taiwan</a></li>
                        <li class="sprite Thailand"><a href="https://www.conferenceseries.com/thailand-meetings/" target="_blank" title="Click for Thailand Conferences">Thailand</a></li>
                        <li class="sprite UAE"><a href="https://www.conferenceseries.com/uae-meetings/" target="_blank" title="UAE">UAE</a></li>
                    </ul>
                    <h3 class="text-success">Europe &amp; UK</h3>
                    <ul class="list-inline clearfix">
                        <li class="sprite Austria"><a href="https://www.conferenceseries.com/austria-meetings/" target="_blank" title="Austria">Austria</a></li>
                        <li class="sprite Denmark"><a href="https://www.conferenceseries.com/denmark-meetings/" target="_blank" title="Denmark">Denmark</a></li>
                        <li class="sprite Finland"><a href="https://www.conferenceseries.com/finland-meetings/" target="_blank" title="Finland">Finland</a></li>
                        <li class="sprite France"><a href="https://www.conferenceseries.com/france-meetings/" target="_blank" title="France">France</a></li>
                        <li class="sprite Germany"><a href="https://www.conferenceseries.com/germany-meetings/" target="_blank" title="Germany">Germany</a></li>
                        <li class="sprite Italy"><a href="https://www.conferenceseries.com/italy-meetings/" target="_blank" title="Italy">Italy</a></li>							
                        <li class="sprite Luxembourg"><a href="https://www.conferenceseries.com/luxembourg-meetings/" target="_blank" title="Luxembourg">Luxembourg</a></li>
                        <li class="sprite Netherlands"><a href="https://www.conferenceseries.com/netherlands-meetings/" target="_blank" title="Netherlands">Netherlands</a></li>
                        <li class="sprite Norway"><a href="https://www.conferenceseries.com/norway-meetings/" target="_blank" title="Norway">Norway</a></li>
                        <li class="sprite Poland"><a href="https://www.conferenceseries.com/poland-meetings/" target="_blank" title="Poland">Poland</a></li>
                        <li class="sprite SouthAfrica"><a href="https://www.conferenceseries.com/south-africa-meetings" target="_blank" title="South Africa">South Africa</a></li>
                        <li class="sprite Spain"><a href="https://www.conferenceseries.com/spain-meetings/" target="_blank" title="Spain">Spain</a></li>
                        <li class="sprite Switzerland"><a href="https://www.conferenceseries.com/switzerland-meetings/" target="_blank" title="Switzerland">Switzerland</a></li>
                        <li class="sprite Turkey"><a href="https://www.conferenceseries.com/turkey-meetings/" target="_blank" title="Turkey">Turkey</a></li>
                        <li class="sprite UK"><a href="https://www.conferenceseries.com/uk-meetings/" target="_blank" title="UK">UK</a></li>
                        <li class="sprite Ukraine"><a href="https://www.conferenceseries.com/ukraine-meetings/" target="_blank" title="Ukraine">Ukraine</a></li>
                    </ul>
                </div>
                <div class="conference-place padding-lg">
                    <h4 class="text-center padding-sm bg-success-gradient"><strong>Medical &amp; Clinical</strong> Conferences</h4>
                    <ul class="list-inline clearfix">
                        <li><a href="https://www.conferenceseries.com/alternative-healthcare-meetings" target="_blank" title="Alternative Healthcare">Alternative Healthcare</a></li>
                        <li><a href="https://www.conferenceseries.com/cardiology-meetings" target="_blank" title="Cardiology">Cardiology</a></li>
                        <li><a href="https://www.conferenceseries.com/dentistry-meetings" target="_blank" title="Dentistry">Dentistry</a></li>
                        <li><a href="https://www.conferenceseries.com/dermatology-meetings" target="_blank" title="Dermatology">Dermatology</a></li>
                        <li><a href="https://www.conferenceseries.com/diabetes-endocrinology-meetings" target="_blank" title="Diabetes &amp; Endocrinology">Diabetes &amp; Endocrinology</a></li>
                        <li><a href="https://www.conferenceseries.com/gastroenterology-meetings" target="_blank" title="Gastroenterology">Gastroenterology</a></li>
                        <li><a href="https://www.conferenceseries.com/healthcare-management-meetings" target="_blank" title="Healthcare Management">Healthcare Management</a></li>
                        <li><a href="https://www.conferenceseries.com/immunology-meetings" target="_blank" title="Immunology">Immunology</a></li>
                        <li><a href="https://www.conferenceseries.com/infectious-diseases-meetings" target="_blank" title="Infectious Diseases">Infectious Diseases</a></li>
                        <li><a href="https://www.conferenceseries.com/medical-meetings" target="_blank" title="Medical">Medical</a></li>
                        <li><a href="https://www.conferenceseries.com/medical-ethics-health-policies-meetings" target="_blank" title="Medical Ethics &amp; Health Policies">Medical Ethics &amp; Health Policies</a></li>
                        <li><a href="https://www.conferenceseries.com/microbiology-meetings" target="_blank" title="Microbiology">Microbiology</a></li>
                        <li><a href="https://www.conferenceseries.com/neuroscience-meetings" target="_blank" title="Neuroscience">Neuroscience</a></li>
                        <li><a href="https://www.conferenceseries.com/nursing-meetings" target="_blank" title="Nursing">Nursing</a></li>
                        <li><a href="https://www.conferenceseries.com/obesity-meetings" target="_blank" title="Obesity">Obesity</a></li>
                        <li><a href="https://www.conferenceseries.com/oncology-cancer-meetings" target="_blank" title="Oncology &amp; Cancer">Oncology &amp; Cancer</a></li>
                        <li><a href="https://www.conferenceseries.com/ophthalmology-meetings" target="_blank" title="Ophthalmology">Ophthalmology</a></li>
                        <li><a href="https://www.conferenceseries.com/palliativecare-meetings" target="_blank" title="Palliativecare">Palliativecare</a></li>
                        <li><a href="https://www.conferenceseries.com/pathology-meetings" target="_blank" title="Pathology">Pathology</a></li>
                        <li><a href="https://www.conferenceseries.com/pediatrics-meetings" target="_blank" title="Pediatrics">Pediatrics</a></li>
                        <li><a href="https://www.conferenceseries.com/physical-therapy-rehabilitation-meetings" target="_blank" title="Physical Therapy Rehabilitation">Physical Therapy Rehabilitation</a></li>
                        <li><a href="https://www.conferenceseries.com/psychiatry-meetings" target="_blank" title="Psychiatry">Psychiatry</a></li>
                        <li><a href="https://www.conferenceseries.com/radiology-meetings" target="_blank" title="Radiology">Radiology</a></li>
                        <li><a href="https://www.conferenceseries.com/reproductive-medicine-women-healthcare-meetings" target="_blank" title="Reproductive Medicine &amp; Women Healthcare">Reproductive Medicine &amp; Women Healthcare</a></li>
                        <li><a href="https://www.conferenceseries.com/surgery-meetings" target="_blank" title="Surgery">Surgery</a></li>
                        <li><a href="https://www.conferenceseries.com/vaccines-meetings" target="_blank" title="Vaccines">Vaccines</a></li>
                    </ul>
                </div>
                <div class="conference-subjects padding-lg">
                    <h4 class="text-center padding-sm bg-success-gradient">Conferences By <strong>Subject</strong></h4>
                    <ul class="list-inline clearfix">
                        <li><a href="https://www.conferenceseries.com/agri-food-aqua-meetings" target="_blank" title="Agri, Food &amp; Aqua">Agri, Food &amp; Aqua</a></li>
                        <li><a href="https://www.conferenceseries.com/biochemistry-meetings" target="_blank" title="Biochemistry">Biochemistry</a></li>
                        <li><a href="https://www.conferenceseries.com/business-management-meetings" target="_blank" title="Business &amp; Management">Business &amp; Management</a></li>
                        <li><a href="https://www.conferenceseries.com/chemical-engineering-meetings" target="_blank" title="Chemical Engineering">Chemical Engineering</a></li>
                        <li><a href="https://www.conferenceseries.com/chemistry-meetings" target="_blank" title="Chemistry">Chemistry</a></li>
                        <li><a href="https://www.conferenceseries.com/eee-engineering-meetings" target="_blank" title="EEE &amp; Engineering">EEE &amp; Engineering</a></li>
                        <li><a href="https://www.conferenceseries.com/environmental-sciences-meetings" target="_blank" title="Environmental Sciences">Environmental Sciences</a></li>
                        <li><a href="https://www.conferenceseries.com/genetics-molecular-biology-meetings" target="_blank" title="Genetics &amp; Molecular Biology">Genetics &amp; Molecular Biology</a></li>
                        <li><a href="https://www.conferenceseries.com/geology-earth-science-meetings" target="_blank" title="Geology &amp; Earth science">Geology &amp; Earth science</a></li>
                        <li><a href="https://www.conferenceseries.com/hematology-meetings" target="_blank" title="Hematology">Hematology</a></li>
                        <li><a href="https://www.conferenceseries.com/materials-science-meetings" target="_blank" title="Materials Science">Materials Science</a></li>
                        <li><a href="https://www.conferenceseries.com/nanotechnology-meetings" target="_blank" title="Nanotechnology">Nanotechnology</a></li>
                        <li><a href="https://www.conferenceseries.com/nephrology-meetings" target="_blank" title="Nephrology">Nephrology</a></li>
                        <li><a href="https://www.conferenceseries.com/nutrition-meetings" target="_blank" title="Nutrition">Nutrition</a></li>
                        <li><a href="https://www.conferenceseries.com/petroleum-meetings" target="_blank" title="Petroleum">Petroleum</a></li>
                        <li><a href="https://www.conferenceseries.com/pharma-marketing-industry-meetings" target="_blank" title="Pharma Marketing &amp; Industry">Pharma Marketing &amp; Industry</a></li>
                        <li><a href="https://www.conferenceseries.com/pharmaceutical-sciences-meetings" target="_blank" title="Pharmaceutical Sciences">Pharmaceutical Sciences</a></li>
                        <li><a href="https://www.conferenceseries.com/physics-meetings" target="_blank" title="Physics">Physics</a></li>
                        <li><a href="https://www.conferenceseries.com/pulmonology-meetings" target="_blank" title="Pulmonology">Pulmonology</a></li>
                        <li><a href="https://www.conferenceseries.com/veterinary-meetings" target="_blank" title="Veterinary">Veterinary</a></li>
                    </ul>
                </div>
            </div>
			                            <div class="row conference-contact-proceedings">
                    <div class="proceedings">
                        <h4 class="h3 text-center">View <strong>Proceedings of Previous Conferences</strong></h4>
                        <div class="proceedings-sub">
                                                            <div class="col-md-offset-1 col-md-2 col-xs-6">
                                    <a href="https://www.omicsonline.org/ArchivePDT/diabetes-meeting-2017-proceedings.php" target="_blank" title="Diabetes-meeting-2017"><img src="https://d2cax41o7ahm5l.cloudfront.net/cs/proceeding/proceeding-3764-7811.jpg" alt="Diabetes-meeting-2017" class="thumbnail img-responsive center-block"></a>
                                </div>
                                                            <div class="col-md-offset-1 col-md-2 col-xs-6">
                                    <a href="https://www.omicsonline.org/ArchiveJDM/diabetes-palliative-care-2016-proceedings.php" target="_blank" title="Diabetes-palliative-care-2016"><img src="https://d2cax41o7ahm5l.cloudfront.net/cs/proceeding/proceeding-3764-16973.jpg" alt="Diabetes-palliative-care-2016" class="thumbnail img-responsive center-block"></a>
                                </div>
                                                            <div class="col-md-offset-1 col-md-2 col-xs-6">
                                    <a href="https://www.omicsonline.org/ArchiveJDM/global-diabetes-2016-proceedings.php" target="_blank" title="Global-diabetes-2016"><img src="https://d2cax41o7ahm5l.cloudfront.net/cs/proceeding/proceeding-3764-73657.jpg" alt="Global-diabetes-2016" class="thumbnail img-responsive center-block"></a>
                                </div>
                                                            <div class="col-md-offset-1 col-md-2 col-xs-6">
                                    <a href="https://www.omicsonline.org/ArchiveJDM/euro-global-diabetes-summit-2015-proceedings.php" target="_blank" title="Euro-global-diabetes-summit-2015"><img src="https://d2cax41o7ahm5l.cloudfront.net/cs/proceeding/proceeding-3764-54641.jpg" alt="Euro-global-diabetes-summit-2015" class="thumbnail img-responsive center-block"></a>
                                </div>
                                                    </div>
                    </div>
                </div>
                        <!-- View Proceedings - Ends Here mailto:contactus@conferenceseries.com -->
							<div class="row conference-contact-past-reports">
                <div class="col-sm-4  mail-us">
                    <h4><strong>Mail us</strong> at</h4>
                    <dl>
                        <dt>Drop us an email for Program enquiry.</dt>
                        <dd>
                            <a href="mailto:diabetes@mehealthevents.org" title="diabetes@mehealthevents.org" class="wrap-link">
                                diabetes@mehealthevents.org                            </a>
                                                    </dd>
                        <dt>Sponsors / Exhibiting / Advertising.</dt>
                        <dd>
                            <a href="mailto:diabetes@mehealthevents.org" title="diabetes@mehealthevents.org">
                                diabetes@mehealthevents.org                            </a>
                            <br/>                          
                            <a href="mailto:sponsorships@conferenceseries.com" title="sponsorships@conferenceseries.com">sponsorships@conferenceseries.com</a>

                        </dd>
                        <dt>General Queries.</dt>
                        <dd>
                            <a href="mailto:diabetes@mehealthevents.org" title="diabetes@mehealthevents.org">
                                diabetes@mehealthevents.org                            </a>
                        </dd>
                    </dl>
                </div>
                
                <div class="col-sm-4 ">
                    <h4><strong>Contact us</strong> at</h4>
					                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                    <script>window.jQuery || document.write('<script src="https://d2cax41o7ahm5l.cloudfront.net/cs/js/jquery-1.11.3.min.js"><\/script>');</script>
                    <div class="modal fade" id="contactUs" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title text-center">
					26th International Diabetes and Healthcare Conference				</h3>
				<div id="contact_msg" class="span12 text-center"></div>
			</div>
			<div class="modal-body" id="contact_form">
				<p class="text-center text-success"><strong>Please leave a message, we will get back you shortly.</strong></p>
				<form class="form-horizontal" id="enquiry_form">
					<input type="hidden" name="conference_url" id="conference_url" value="diabetic.healthconferences.org">
					<input type="hidden" name="conference_country" id="conference_country" value="Finland">
					<input type="hidden" name="conference_name" id="conference_name" value="26th International Diabetes and Healthcare Conference" />
					<input type="hidden" name="conference_email" id="conference_email" value="diabetes@mehealthevents.org" />
					<input type="hidden" name="confId" id="confId" value="3764" />
					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" name="inputName" id="inputName" placeholder="Enter Your Name Here" name="name" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter Your Email Address Here" name="email" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputMobile" id="inputMobile" placeholder="Enter Your Mobile Number Here" name="mobile" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<select class="form-control" name="Country" id="Country" required="">
								<option value="">Select country</option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="Brunei Darussalam">Brunei Darussalam</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
								<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="France, Metropolitan">France, Metropolitan</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Territories">French Southern Territories</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guinea-Bissau">Guinea-Bissau</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea (North)">Korea (North)</option>
								<option value="Korea (South)">Korea (South)</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malawi">Malawi</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta<">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Micronesia">Micronesia</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Netherlands Antilles">Netherlands Antilles</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palestine">Palestine</option>
								<option value="Palau">Palau</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russian Federation">Russian Federation</option>
								<option value="Rwanda">Rwanda</option>
								<option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
								<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								<option value="Saint Lucia">Saint Lucia</option>
								<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome and Principe">Sao Tome and Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovak Republic">Slovak Republic</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="St. Helena">St. Helena</option>
								<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Viet Nam">Viet Nam</option>
								<option value="Virgin Islands (British)">Virgin Islands (British)</option>
								<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Yugoslavia">Yugoslavia</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputSubject" class="col-sm-2 control-label">Research Interest</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputSubject" id="inputSubject" placeholder="Enter Your Research Here" name="mobile">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="inputMessage" id="inputMessage" name="message" Placeholder="Enter Your Message Here"></textarea>
						</div>
					</div>
					<div class="form-group">
						<p class="text-center"><button type="button" id="submitbtn" class="btn btn-success">Submit</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	
	var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	$('#submitbtn').click(function(event){
		event.preventDefault();
		var postData = {
			'conference_name' 	: $("#conference_name").val(),
			'conference_url' 	: $("#conference_url").val(),
			'conference_email' 	: $("#conference_email").val(),
			'inputName' 		: $("#inputName").val(),
			'inputEmail' 		: $("#inputEmail").val(),
			'inputMobile' 		: $("#inputMobile").val(),
			'inputCountry' 		: $("#Country").val(),
			'inputSubject' 		: $("#inputSubject").val(),
			'inputMessage' 		: $("#inputMessage").val(),
			'confId'			: $("#confId").val(),
			'country'			: $("#conference_country").val()
			}
			
		if (postData.inputName=='')
		{
			$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Name Required!</font>');
		}
		else if (postData.inputEmail=='')
		{
			$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Email Required!</font>');
		}
		else if (!Emailfilter.test(postData.inputEmail))
		{
			$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Invalid Email!</font>');
		}
		else if (postData.inputMobile=='')
		{
			$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Mobile Number Required!</font>');
		}
		else if (postData.inputCountry=='')
		{
			$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Country Required!</font>');
		}
		else if (postData.inputSubject=='')
		{
			$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Research Required!</font>');
		}
		else
		{
			$('#contact_msg').html("");
			$.ajax({
				url:'https://diabetic.healthconferences.org/enquiry.php',
				type:'post',
				data:postData,
				success: function(response){
					if(response==1){
						$('#contact_form').html('<p style="color:green;font-weight:bold; font-size:20px; text-align:center;">Thanks for contacting us,<br/> we will get back to you soon from </p><a id="contact_mail" href="mailto:' + postData.conference_email + '">' + postData.conference_email + '</a>');
					}else{
						$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
					}
				},
				error:function(response){
					$('#contact_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
				}
			});
		}
	});
});
</script>                    <div class="modal fade" id="purchaseToday" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title text-center">Purchase Our Past Conferences Materials</h3>
				<div id="materials_msg" class="span12 text-center"></div>
			</div>
			<div class="modal-body" id="contact_form">
				<p class="text-center text-success"><strong>Please fill the form. we will get back you soon.</strong></p>
				<form class="form-horizontal" id="purchase_form">
					<input type="hidden" name="conference_url" id="conference_url" value="diabetic.healthconferences.org">
					<input type="hidden" name="conference_country" id="conference_country" value="Finland">
					<input type="hidden" name="conference_name" id="conference_name" value="26th International Diabetes and Healthcare Conference" />
					<input type="hidden" name="conference_email" id="conference_email" value="diabetes@mehealthevents.org" />
					<input type="hidden" name="confId" id="confId" value="3764" />
					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" name="inputName" id="inputName" placeholder="Enter Your Name Here" name="name" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter Your Email Address Here" name="email" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputMobile" id="inputMobile" placeholder="Enter Your Mobile Number Here" name="mobile" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<select class="form-control" name="Country" id="Country" required="">
								<option value="">Select country</option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="Brunei Darussalam">Brunei Darussalam</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
								<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="France, Metropolitan">France, Metropolitan</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Territories">French Southern Territories</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guinea-Bissau">Guinea-Bissau</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea (North)">Korea (North)</option>
								<option value="Korea (South)">Korea (South)</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malawi">Malawi</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta<">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Micronesia">Micronesia</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Netherlands Antilles">Netherlands Antilles</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palestine">Palestine</option>
								<option value="Palau">Palau</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russian Federation">Russian Federation</option>
								<option value="Rwanda">Rwanda</option>
								<option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
								<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								<option value="Saint Lucia">Saint Lucia</option>
								<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome and Principe">Sao Tome and Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovak Republic">Slovak Republic</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="St. Helena">St. Helena</option>
								<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Viet Nam">Viet Nam</option>
								<option value="Virgin Islands (British)">Virgin Islands (British)</option>
								<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Yugoslavia">Yugoslavia</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputSubject" class="col-sm-2 control-label">Material Type</label>
						<div class="col-sm-10">
							<select class="form-control" name="MaterialType" id="MaterialType" required="">
								<option value="">Select Material Type</option>
								<option value="Proceedings (Souvenir) - Hard Copy">Proceedings (Souvenir) - Hard Copy</option>
								<option value="Proceedings (Souvenir) - Soft Copy">Proceedings (Souvenir) - Soft Copy</option>
								<option value="Attendees List & Contacts">Attendees List & Contacts</option>
								<option value="Post Conference Networking">Post Conference Networking</option>
								<option value="Conference Photos Gallery">Conference Photos Gallery</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="inputMessage" id="inputMessage" name="message" Placeholder="Enter Your Message Here"></textarea>
						</div>
					</div>
					<div class="form-group">
						<p class="text-center"><button type="button" id="purchaseTodayBtn" class="btn btn-success">Submit</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	
	var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	$('#purchaseTodayBtn').click(function(event){
		event.preventDefault();
		var postData = {
			'conference_name' 	: $('#purchaseToday input[id=conference_name]').val(),
			'conference_url' 	: $('#purchaseToday input[id=conference_url]').val(),
			'conference_email' 	: $('#purchaseToday input[id=conference_email]').val(),
			'inputName' 		: $('#purchaseToday input[id=inputName]').val(),
			'inputEmail' 		: $('#purchaseToday input[id=inputEmail]').val(),
			'inputMobile' 		: $('#purchaseToday input[id=inputMobile]').val(),
			'inputCountry' 		: $('#purchaseToday select[id=Country]').val(),
			'materialType' 		: $('#purchaseToday select[id=MaterialType]').val(),
			'inputMessage' 		: $('#purchaseToday textarea[id=inputMessage]').val(),
			'confId'			: $('#purchaseToday input[id=confId]').val(),
			'country'			: $('#purchaseToday input[id=conference_country]').val()
			}
			
		if (postData.inputName=='')
		{
			$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Name Required.</font>');
		}
		else if (postData.inputEmail=='')
		{
			$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Email Required.</font>');
		}
		else if (!Emailfilter.test(postData.inputEmail))
		{
			$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Invalid Email.</font>');
		}
		else if (postData.inputMobile=='')
		{
			$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Mobile Number Required.</font>');
		}
		else if (postData.inputCountry=='')
		{
			$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Country Required.</font>');
		}
		else if (postData.materialType=='')
		{
			$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Material Type Required.</font>');
		}
		else
		{
			$('#materials_msg').html("");
			$.ajax({
				url:'https://diabetic.healthconferences.org/purchase_materials.php',
				type:'post',
				data:postData,
				success: function(response){
					if(response==1){
						$('#purchase_form').html('<p style="color:green;font-weight:bold; font-size:20px; text-align:center;">Thanks for contacting us for purchasing,<br/> we will get back to you soon from </p><a id="contact_mail" href="mailto:' + postData.conference_email + '">' + postData.conference_email + '</a>');
					}else{
						$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
					}
				},
				error:function(response){
					$('#materials_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
				}
			});
		}
	});
});
</script>                    <div class="modal fade" id="customisedSponsorship" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title text-center">Customised Sponsorship</h3>
				<div id="sponsorship_msg" class="span12 text-center"></div>
			</div>
			<div class="modal-body" id="contact_form">
				<p class="text-center text-success"><strong>Please fill the form. we will get back you soon.</strong></p>
				<form class="form-horizontal" id="sponsorship_form">
					<input type="hidden" name="conference_url" id="conference_url" value="diabetic.healthconferences.org">
					<input type="hidden" name="conference_country" id="conference_country" value="Finland">
					<input type="hidden" name="conference_name" id="conference_name" value="26th International Diabetes and Healthcare Conference" />
					<input type="hidden" name="conference_email" id="conference_email" value="diabetes@mehealthevents.org" />
					<input type="hidden" name="confId" id="confId" value="3764" />
					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" name="inputName" id="inputName" placeholder="Enter Your Name Here" name="name" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter Your Email Address Here" name="email" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputMobile" id="inputMobile" placeholder="Enter Your Mobile Number Here" name="mobile" required="required">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<select class="form-control" name="Country" id="Country" required="">
								<option value="">Select country</option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="Brunei Darussalam">Brunei Darussalam</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
								<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="France, Metropolitan">France, Metropolitan</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Territories">French Southern Territories</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guinea-Bissau">Guinea-Bissau</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea (North)">Korea (North)</option>
								<option value="Korea (South)">Korea (South)</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malawi">Malawi</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta<">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Micronesia">Micronesia</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Netherlands Antilles">Netherlands Antilles</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palestine">Palestine</option>
								<option value="Palau">Palau</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russian Federation">Russian Federation</option>
								<option value="Rwanda">Rwanda</option>
								<option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
								<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								<option value="Saint Lucia">Saint Lucia</option>
								<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome and Principe">Sao Tome and Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovak Republic">Slovak Republic</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="St. Helena">St. Helena</option>
								<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Viet Nam">Viet Nam</option>
								<option value="Virgin Islands (British)">Virgin Islands (British)</option>
								<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Yugoslavia">Yugoslavia</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputSubject" class="col-sm-2 control-label">Category Type</label>
						<div class="col-sm-10">
							<select class="form-control" name="SponsorType" id="SponsorType" required="">
								<option value="">Select Your Category</option>
								<option value="Young Researcher Awards Sponsor">Young Researcher Awards Sponsor</option>
								<option value="Best Poster Award Sponsor">Best Poster Award Sponsor</option>
								<option value="Keynote Forum Sponsor">Keynote Forum Sponsor</option>
								<option value="Speaker Forum">Speaker Forum</option>
								<option value="Program Sponsor">Program Sponsor</option>
								<option value="Coffee Break Sponsor">Coffee Break Sponsor</option>
								<option value="Luncheon Sponsor">Luncheon Sponsor</option>
								<option value="Pre Conference Dinner Sponsor ">Pre Conference Dinner Sponsor </option>
								<option value="Backdrop Sponsor">Backdrop Sponsor</option>
								<option value="Souvenir Sponsor">Souvenir Sponsor</option>
								<option value="Conference Kit Sponsor">Conference Kit Sponsor</option>
								<option value="Podium Sponsor">Podium Sponsor</option>
								<option value="Lanyard Sponsor">Lanyard Sponsor</option>
								<option value="Add Sponsor (In Souvenir)">Add Sponsor (In Souvenir)</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="inputMessage" id="inputMessage" name="message" Placeholder="Enter Your Message Here"></textarea>
						</div>
					</div>
					<div class="form-group">
						<p class="text-center"><button type="button" id="sponsorshipBtn" class="btn btn-success">Submit</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	
	var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	$('#sponsorshipBtn').click(function(event){
	event.preventDefault();
	var postData = {
		'conference_name' 	: $('#customisedSponsorship input[id=conference_name]').val(),
		'conference_url' 	: $('#customisedSponsorship input[id=conference_url]').val(),
		'conference_email' 	: $('#customisedSponsorship input[id=conference_email]').val(),
		'inputName' 		: $('#customisedSponsorship input[id=inputName]').val(),
		'inputEmail' 		: $('#customisedSponsorship input[id=inputEmail]').val(),
		'inputMobile' 		: $('#customisedSponsorship input[id=inputMobile]').val(),
		'inputCountry' 		: $('#customisedSponsorship select[id=Country]').val(),
		'sponsorType' 		: $('#customisedSponsorship select[id=SponsorType]').val(),
		'inputMessage' 		: $('#customisedSponsorship textarea[id=inputMessage]').val(),
		'confId'			: $('#customisedSponsorship input[id=confId]').val(),
		'country'			: $('#customisedSponsorship input[id=conference_country]').val()
		}
		
	if (postData.inputName=='')
	{
		$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Name Required.</font>');
	}
	else if (postData.inputEmail=='')
	{
		$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Email Required.</font>');
	}
	else if (!Emailfilter.test(postData.inputEmail))
	{
		$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Invalid Email.</font>');
	}
	else if (postData.inputMobile=='')
	{
		$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Mobile Number Required.</font>');
	}
	else if (postData.inputCountry=='')
	{
		$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Country Required.</font>');
	}
	else if (postData.SponsorType=='')
	{
		$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Sponsor Type Required.</font>');
	}
	else
	{
		$('#sponsorship_msg').html("");
		$.ajax({
			url:'https://diabetic.healthconferences.org/customised_sponsorship.php',
			type:'post',
			data:postData,
			success: function(response){
				if(response==1){
					$('#sponsorship_form').html('<p style="color:green;font-weight:bold; font-size:20px; text-align:center;">Thanks for contacting us for customied sporsorship,<br/> we will get back to you soon from </p><a id="contact_mail" href="mailto:' + postData.conference_email + '">' + postData.conference_email + '</a>');
				}else{
					$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
				}
			},
			error:function(response){
				$('#sponsorship_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
			}
		});
	}
});
});
</script>                    <div class="modal fade" id="callForWebinars" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title text-center">Download Call for Webinars</h3>
				<div id="webinar_msg" class="span12 text-center"></div>
			</div>
			<div class="modal-body" id="call_for_webinar_form">
				<p class="text-center text-success"><strong>Please fill the form to download Call for Webinars.</strong></p>
				<form class="form-horizontal" id="enquiry_form">
					<input type="hidden" name="conference_url" id="conference_url" value="diabetic.healthconferences.org">
					<input type="hidden" name="conference_country" id="conference_country" value="Finland">
					<input type="hidden" name="conference_name" id="conference_name" value="26th International Diabetes and Healthcare Conference" />
					<input type="hidden" name="conference_email" id="conference_email" value="diabetes@mehealthevents.org" />
					<input type="hidden" name="confId" id="confId" value="3764" />
					<div class="form-group">
						<label for="inputName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="name" class="form-control" name="inputName" id="inputName" placeholder="Enter Your Name Here" name="name" required="required"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="form-group">
						<label for="inputEmail" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter Your Email Address Here" name="email" required="required"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Mobile Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputMobile" id="inputMobile" placeholder="Enter Your Mobile Number Here" name="mobile" required="required"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="form-group">
						<label for="inputMobile" class="col-sm-2 control-label">Country</label>
						<div class="col-sm-10">
							<select class="form-control" name="WebinarCountry" id="WebinarCountry" required="">
								<option value="">Select country</option>
								<option value="United States">United States</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antarctica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="Brunei Darussalam">Brunei Darussalam</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Canadian Nunavut Territory">Canadian Nunavut Territory</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos (Keeling Islands)">Cocos (Keeling Islands)</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cote D'Ivoire (Ivory Coast)">Cote D'Ivoire (Ivory Coast)</option>
								<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="France, Metropolitan">France, Metropolitan</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Territories">French Southern Territories</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guinea-Bissau">Guinea-Bissau</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea (North)">Korea (North)</option>
								<option value="Korea (South)">Korea (South)</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Laos">Laos</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon">Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libya">Libya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Macedonia">Macedonia</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malawi">Malawi</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta<">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Micronesia">Micronesia</option>
								<option value="Moldova">Moldova</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Netherlands Antilles">Netherlands Antilles</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palestine">Palestine</option>
								<option value="Palau">Palau</option>
								<option value="Palestine">Palestine</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russian Federation">Russian Federation</option>
								<option value="Rwanda">Rwanda</option>
								<option value="S. Georgia and S. Sandwich Isls.">S. Georgia and S. Sandwich Isls.</option>
								<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
								<option value="Saint Lucia">Saint Lucia</option>
								<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Sao Tome and Principe">Sao Tome and Principe</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Serbia">Serbia</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra Leone">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovak Republic">Slovak Republic</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Spain">Spain</option>
								<option value="Sri Lanka">Sri Lanka</option>
								<option value="St. Helena">St. Helena</option>
								<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syria</option>
								<option value="Taiwan">Taiwan</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Viet Nam">Viet Nam</option>
								<option value="Virgin Islands (British)">Virgin Islands (British)</option>
								<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Yugoslavia">Yugoslavia</option>
								<option value="Zaire">Zaire</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					<div class="form-group">
						<label for="inputSubject" class="col-sm-2 control-label">Research Interest</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="inputSubject" id="inputSubject" placeholder="Enter Your Research Here" name="mobile"/>
						</div>
						<div class="clear"></div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="3" name="inputMessage" id="inputMessage" name="message" Placeholder="Enter Your Message Here"></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<div class="form-group">
						<p class="text-center"><button type="button" id="submitbtn" class="btn btn-success">Submit</button><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	
	var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	$('#callForWebinars #submitbtn').click(function(event){
		
		//var webnorSubmitUrl = "https://www.conferenceseries.com/usa-meetings/webinarsFormSubmission";
		var webnorDownloadUrl = "https://www.conferenceseries.com/vaccines-meetings/america/call-for-webinars";
		
		event.preventDefault();
		
		var postData = {
		'form' 				: "webinars_download_form",
		'conference_name' 	: $('#callForWebinars input[id=conference_name]').val(),
		'conference_url' 	: $('#callForWebinars input[id=conference_url]').val(),
		'conference_email' 	: $('#callForWebinars input[id=conference_email]').val(),
		'confId'			: $('#callForWebinars input[id=confId]').val(),
		'name' 				: $("#callForWebinars input[id=inputName]").val(),
		'email' 			: $("#callForWebinars input[id=inputEmail]").val(),
		'mobile' 			: $("#callForWebinars input[id=inputMobile]").val(),
		'country' 			: $("#callForWebinars select[id=WebinarCountry]").val(),
		'subject' 			: $("#callForWebinars input[id=inputSubject]").val(),
		'message' 			: $("#callForWebinars textarea[id=inputMessage]").val()
		}
			
		if (postData.name=='')
		{
			$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Name Required.</font>');
		}
		else if (postData.email=='')
		{
			$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Email Required.</font>');
		}
		else if (!Emailfilter.test(postData.email))
		{
			$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Invalid Email.</font>');
		}
		else if (postData.mobile=='')
		{
			$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Mobile Number Required.</font>');
		}
		else if (postData.country=='')
		{
			$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Country Required.</font>');
		}
		else if (postData.subject=='')
		{
			$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Research Interest Required.</font>');
		}
		else
		{
			$('#webinar_msg').html("");
			$.ajax({
				url:'https://diabetic.healthconferences.org/webinars_download_formsubmission.php',
				type:'post',
				data:postData,
				success: function(response){
					console.log(response);
					if(response==1){
						$('#call_for_webinar_form').html('<p style="color:green;font-weight:bold; font-size:20px; text-align:center;">Thanks for submitting your details.<br/> Please click on the below link to get call for webinars <br/><a id="contact_mail" target="_blank" href="'+ webnorDownloadUrl + '">Call For Webinars</a></p>');
					}else{
						$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
					}
				},
				error:function(response){
					$('#webinar_msg').html('<font style="color:red;font-weight:bolder;">Sorry! Something went wrong! Try again!</font>');
				}
			});
		}
	
	});
});
</script>
                    

                                            <style>
                            footer a[href^=tel]:before {
                                content: "\f095";
                                display: inline-block;
                                font-family: FontAwesome;
                                font-size: 12px;
                                padding: 1px;
                                height: 15px;
                                width: 15px;
                                line-height: 15px;
                                text-align: center;
                                color: #666;
                                border-radius: 50%;
                                margin-right: 4px;
                            }

                            footer .contact-num .list-unstyled>li>strong {
                                float: left;
                                /*                    width: 50%;*/
                            }

                            footer .contact-num .list-unstyled>li {
                                margin-bottom: 5px;
                            }

                            .textcolor {
                                color: #0773ba;
                            }
                        </style>
                        <div class="row">
                            <div class="col-md-12 contact-num">
                                <ul class="list-unstyled">
                                    <li><strong>Australia</strong>&nbsp;&nbsp;- Toll Free Numbers - <a href="tel:+1-800-651-097">1-800-651-097</a></li>
                                    <li><strong>France</strong>&nbsp; - Toll Free Numbers - <a href="tel:+0805-080048">0805-080048</a></li>													
                                    <li><strong>UK</strong>&nbsp; - <a href="tel:+0-800-014-8923">0-800-014-8923</a> </li>
                                    <li><strong>America</strong><div style="display:inline-block;">&nbsp; - <a href="tel:+1-213-233-9462">1-213-233-9462</a><br/>
                                            &nbsp; - <a href="tel:+1-888-843-8169">1-888-843-8169</a></div> </li>
                                </ul>
                            </div>
                        </div>
                    
                </div>
                <div class="col-sm-4 support-us">
					                    <h4>Be a member and <strong>support us</strong></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://diabetic.healthconferences.org/join_our_mailing_list.php" title="Join Our Mailing List">Join Our Mailing List</a></li>
                        <li><a href="https://diabetic.healthconferences.org/suggest_speaker.php" title="Suggest A Speaker">Suggest A Speaker</a></li>
                        <li><a href="https://diabetic.healthconferences.org/suggestions.php" title="Suggestions">Suggestions</a></li>
                        <li><a href="https://diabetic.healthconferences.org/invite_proposals.php" title="Invite Proposals">Invite Proposals</a></li>
                    </ul>
					                </div>
            </div>
						
			            
        </div>

        <div class="social-presence text-center">
            <h3 class="text-center">Follow us</h3>
            <ul class="social-icons icon-rotate icon-circle list-inline">
                <li> <a href="" target="_blank"><i class="fa fa-rss"></i></a></li>
                <li> <a href="https://www.facebook.com/Diabetes-and-Healthcare-1611659582220549/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="https://twitter.com/diabetic2k18" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="https://www.linkedin.com/in/tiffany-hales-844560159/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li> <a href="" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li> <a href="https://plus.google.com/u/0/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                <li> <a href="https://diabeticandhealthcare.blogspot.in/" target="_blank"><i class="fa blog em">B</i></a></li>
                <li> <a href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                <li> <a href="" target="_blank"><i class="fa fa-flickr"></i></a></li>
            </ul>
        </div>
        <div class="tiny-content">
            <h6 class="margin-zero">Authorization Policy</h6>
            <p><small>By registering for the conference you grant permission to Conference Series LLC Ltd to photograph, film or record and use your name, likeness, image, voice and comments and to publish, reproduce, exhibit, distribute, broadcast, edit and/or digitize the resulting images and materials in publications, advertising materials, or in any other form worldwide without compensation. Taking of photographs and/or videotaping during any session is prohibited. Contact us for any queries.</small></p>
        </div>
    </div>
    <div class="footer-bottom clearfix">

	
        <p class="copy-right text-center">&copy; 2013-2018 <a href="https://www.conferenceseries.com/" title="Click for more Information" target="_blank">Conference Series LLC Ltd</a> All Rights Reserved.</p>
	    </div>
</footer>
<p>
    <!-- Bootstrap JS CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS local fallback -->
    <script>
	if (typeof ($.fn.modal) === 'undefined') {
		document.write('<script src="https://d2cax41o7ahm5l.cloudfront.net/cs/js/bootstrap.min.js"><\/script>')
	}

	// use local CSS file as fallback if Bootstrap CDN fails
	$(function () {
		if ($('#CssFailCheck').is(':visible') === true) {
			$('<link rel="stylesheet" type="text/css" href="https://d2cax41o7ahm5l.cloudfront.net/cs/css/bootstrap.min.css">').appendTo('head');
		}
	});
	// use local font-awesome file as fallback if font-awesome CDN fails
	(function ($) {
		var $span = $('<span class="fa" style="display:none"></span>').appendTo('body');
		if ($span.css('fontFamily') !== 'FontAwesome') {
			// Fallback Link
			$('head').append('<link href="https://d2cax41o7ahm5l.cloudfront.net/cs/css/font-awesome.min.css" rel="stylesheet">');
		}
		$span.remove();
	})(jQuery);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/confassets/cs/js/countrypicker.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/confassets/cs/js/jquery.captcha.basic.min.js"></script>
    <script type='text/javascript'>
        function refreshCaptcha()
        {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }
    </script>
<style>
    #contact_mail {
        background: green;
        color: white;
        padding: 10px;
        border-radius: 10px;
    }
    #contact_form.modal-body{
        text-align:center;
    }
</style>
<script type="text/javascript" src="https://d2cax41o7ahm5l.cloudfront.net/cs/js/scripts.min.js"></script>
</p>
<!-- R -->

<script>
$(document).ready(function(){
	$('#e2contact').captcha();
});
</script>	
<style>
#e2contact input[type="submit"] {
    background-color: #efefef;
    color: #3a3a3a;
    cursor: pointer;
    float: right;
    padding: 0 2rem;
    height: 2em;
    border: solid 4px #1bbd4f;

    -webkit-transition: all 100ms linear;
    -moz-transition: all 100ms linear;
    -o-transition: all 100ms linear;
    -ms-transition: all 100ms linear;
    transition: all 100ms linear;
}
#e2contact input[type="submit"]:hover {
    background-color: #1bbd4f;
    color: #fff;
}
#e2contact input[type="submit"]:disabled {
    border: solid 4px #ccc;
    color: #999;
}
#e2contact input[type="submit"]:disabled:hover {
    background-color: #efefef;
}


/* ==================
 *  CAPTCHA ELEMENTS
 * ================== */
#captchaInput {
    width: 2.5em;
    margin-left: .5em;
}
</style>
<script type="application/ld+json">
	[
	{
		"@context" : "https://schema.org",
		"@type": "Event",
		"@id" : "https://diabetic.healthconferences.org/",
		"url" : "https://diabetic.healthconferences.org/",
		"name" : "Diabetic 2018",
		"image": "",
	    "offers":"Special Discounts for Groups and Early Birds",
		"description" : "Acquainting New Insights of Diabetes and Healthcare",
		"location": {
		"@type": "Place",
		"name": "Finland",
		"address": {
		"@type": "PostalAddress",
		"streetAddress": "Helsinki",
		"addressCountry": "Finland"
		}
		},
		"startDate" : "2018-11-26",
		"endDate" : "2018-11-28"
		},

	]
</script>
                                    
<script type='application/ld+json'> 
	{ 
	"@context": "https://schema.org/", 

	"@type": "Product", 
	"name": "Diabetic 2018", 
	"aggregateRating": { 
	"@type": "AggregateRating", 
	"ratingValue": "4.9", 
	"ratingCount": "4798", 
	"reviewCount": "47" 
	} 
	} 
</script>   
    <script>
                                                        $(document).ready(function () {


                                                            $('input:radio[name=currency]').change(function () {

                                                                var form1 = document.currform;
                                                                var form2 = document.form1;

                                                                form1.Title.value = form2.Title.value;
                                                                form1.FName.value = form2.FName.value;
                                                                form1.LName.value = form2.LName.value;
                                                                form1.Company.value = form2.Company.value;
                                                                form1.city.value = form2.city.value;
                                                                form1.state.value = form2.state.value;
                                                                form1.Country.value = form2.Country.value;
                                                                form1.Authors_Email.value = form2.Authors_Email.value;
                                                                form1.phone.value = form2.phone.value;
                                                                form1.Full_Postal_Address.value = form2.Full_Postal_Address.value;
                                                                form1.Abstact_Category.value = form2.Abstact_Category.value;
                                                                form1.Conference_Title.value = form2.Conference_Title.value;

                                                                form1.STitle.value = form2.STitle.value;
                                                                form1.SFName.value = form2.SFName.value;
                                                                form1.SLName.value = form2.SLName.value;
                                                                form1.Scompany.value = form2.Scompany.value;
                                                                form1.scity.value = form2.scity.value;
                                                                form1.sstate.value = form2.sstate.value;
                                                                form1.Scountry.value = form2.Scountry.value;
                                                                form1.SAuthors_Email.value = form2.SAuthors_Email.value;
                                                                form1.Sphone.value = form2.Sphone.value;
                                                                form1.SFull_Postal_Address.value = form2.SFull_Postal_Address.value;
																//form1.payment.value = form2.payment.value;
																
                                                                $('#currform').submit();
                                                            });

                                                            $('#showpaypalbox').hide();
                                                            $("#selectedpaypal,#selectedstrip").change(function () {

                                                                if ($('#selectedpaypal').is(":checked")) {
                                                                    $('#showpaypalbox').show();
                                                                    $('#palpaypolicy').attr('disabled', false);
																	
																	$('#currencyEUR').attr('disabled', true);
																	//$('#currencyUSD').attr('disabled', true);
																	$('#payopt').val('paypal');
																	$('#payopt1').val('paypal');
																	console.log($('#payopt').val());
																	//console.write();
                                                                }
                                                                if ($('#selectedstrip').is(":checked")) {
                                                                    $('#showpaypalbox').hide();
                                                                    $('#palpaypolicy').attr('disabled', true);
																	$('#currencyEUR').attr('disabled', false);
																	//$('#currencyUSD').attr('disabled', false);
																	$('#payopt').val('stripe');
																	$('#payopt1').val('stripe');
																	console.log($('#payopt').val());
                                                                }
                                                            })
                                                        });
                                                        $(document).ready(function () {
                                                            $('.addons-main').find('.btn').addClass('disabled');

// disable all elements
                                                            $('.selectedplan').attr('disabled', true);
                                                            $('.submit-button button[type="submit"]').addClass('disabled');

                                                            /* Validation for Academic */
                                                            $('.btnselectacm, .btnselectbusn,.btnselectestnd').on('click', function (event) {
                                                                $('.selectedplan').attr('disabled', false);
// if ($(this).is(':checked')) {
//   alert('checked');
                                                                var epostclschk = $('.epostercls').is(":checked");
                                                                $('.btnselectepst').attr("checked", false); // disabling the all eposter elements
                                                                $('span.regselect').html('Select');
                                                                if ($(this).is(":checked")) {
                                                                    var clsnm = $('.btnaddons').is(":checked");

                                                                    //$(this).closest('.reg-sub-main').find('span.regselect').addClass('btn-info');
                                                                    $(this).closest('.reg-sub-main').find('span.regselect').html('Selected');

//console.log($(this).closest('.reg-main').find('.reg-sub-main').prev().find('div.reg-sub').not(".time-over"));
                                                                    $(".reg-sub").removeClass("selected");
                                                                    $('label.btn').closest('.reg-sub-main').find('.btn').removeClass('btn-success').addClass('btn-danger').closest('.reg-sub').removeClass('selected'); // removing the green color, when you uncheck the product

                                                                    // Addon enables
                                                                    if (clsnm === true) {
                                                                        addonEnabled();
                                                                    }

                                                                    $(this).closest('.btn').addClass('btn-success').removeClass('btn-danger').closest('.reg-sub').addClass('selected'); // adding the green color, when you selected the product


// removing the green background of the div
                                                                    $(this).closest('.reg-sub-main').siblings('div').find('div.reg-sub').removeClass('selected');

// adding the green background of the div and checked is true
                                                                    $(this).closest('div').nextAll('div').find('div.reg-sub').not(".time-over").first().addClass('selected').find('input:radio').prop('checked', true);



                                                                    $('.addons-main').addClass('on').find('.btn').removeClass('disabled');
                                                                    $('.btnaddons').prop("disabled", false);

// Submit button enable
                                                                    submitDisabled();
                                                                } else {
// removing the green background of the div
                                                                    $('label.btn').closest('.reg-sub-main').find('.btn').removeClass('btn-success').addClass('btn-danger').closest('.reg-sub').removeClass('selected');
// removing the green background of the div and checked is false
                                                                    $(this).closest('div').nextAll('div').find('div.reg-sub').not(".time-over").first().removeClass('selected').find('input:radio').prop('checked', false);

                                                                    $(this).closest('.reg-sub-main').find('span.regselect').html('Select');
// Addon Enabled



                                                                    // Disabling the addons

                                                                    $('.btnaddons').attr("checked", false);
                                                                    $('.btnaddons').prop("disabled", true);
                                                                    $('.addons-main').removeClass('on').find('.btn').addClass('disabled');

                                                                    submitDisabled();
                                                                }

                                                                if (epostclschk === true) {
                                                                    $('.e-poster').find('label.eposterbtn').addClass('btn-success').removeClass('btn-danger').addClass('selected').find('input:checkbox').prop('checked', true)
                                                                    $('.e-poster').find('div.reg-sub').not(".time-over").first().addClass('selected');
                                                                    submitDisabled();
                                                                }

// only one checkbox will be selected
                                                                $('input.btnselectacm').not(this).prop('checked', false);
                                                                $('input.btnselectbusn').not(this).prop('checked', false);
                                                                $('input.btnselectestnd').not(this).prop('checked', false);
                                                            });
                                                            /* validation for Eposter */
                                                            $('.btnselectepst').on('click', function (event) {

                                                                $('.selectedplan').attr('disabled', false);

                                                                $('span.eposterselect').html('Select');

                                                                $(this).closest('.btn').addClass('btn-success').removeClass('btn-danger').closest('.reg-sub').addClass('selected');

                                                                var clsnm = $('.selectedplan').is(":checked");

                                                                if ($(this).is(":checked")) {
                                                                    //alert('test');
                                                                    $(this).closest('div.reg-sub-main').find('.reg-sub').not(".time-over").first().addClass('selected').find('input:checkbox').prop('checked', true);

                                                                    $(this).closest('.reg-sub-main').find('span.eposterselect').html('Selected');
                                                                    $(this).closest('div').nextAll('div').find('.reg-sub').not(".time-over").first().addClass('selected').find('input:checkbox').prop('checked', true);
                                                                    submitDisabled();

                                                                } else {
                                                                    $(this).closest('.eposterbtn').find('span.eposterselect').html('Select');
                                                                    $(this).closest('label.btn').removeClass('btn-success').addClass('btn-danger').removeClass('selected');

                                                                    $(this).closest('div').nextAll('div').find('div.reg-sub').not(".time-over").first().removeClass('selected').find('input:checkbox').prop('checked', false);
                                                                    submitDisabled();

                                                                }

                                                                if (clsnm === true) {
                                                                    addonEnabled();
                                                                    submitDisabled();
                                                                }
                                                                else {
                                                                    //$(".reg-sub").removeClass("selected");
                                                                }

                                                            });
// Addons                                                    
                                                            $('.addon input[type=checkbox]').on('click', function (event) {
                                                                if ($(this).is(':checked')) {
                                                                    $(this).closest('.btn').removeClass('btn-danger').addClass('btn-success').closest('.reg-sub').addClass('selected');
                                                                } else {
                                                                    $(this).closest('.btn').addClass('btn-danger').removeClass('btn-success').closest('.reg-sub').removeClass('selected');
                                                                }
                                                            });
// End of the Addons
                                                            function submitDisabled() {

                                                                $('.submit-button button[type="submit"]').addClass('disabled');

                                                                $('.selectedplan:checked, .btnaddons:checked').each(function (i) {
                                                                    var chksbt = $(this).is(':checked');

                                                                    var chksmtbtnstatus = false;
                                                                    if (chksbt === true) {
                                                                        chksmtbtnstatus = true;
                                                                    }

                                                                    if (chksmtbtnstatus === true) {
                                                                        $('.submit-button button[type="submit"]').removeClass('disabled');
                                                                    }
                                                                });
                                                            }

                                                            function addonEnabled() {

                                                                var somethingChecked = false;
                                                                $('.btnaddons:checked').each(function (i) {
                                                                    if ($(this).is(':checked')) {
                                                                        $(this).parent().closest('.addon').find('.addoncls').addClass('selected');
                                                                        $(this).parent().closest('.addon').find('.addoncls').find('.btn').removeClass('btn-danger').addClass('btn-success').addClass('selected');
                                                                        somethingChecked = true;
                                                                    }
                                                                    return  somethingChecked;
                                                                });

                                                                if (somethingChecked == false) {

                                                                    $('.addons-main').find('div.addoncls').removeClass('selected');
                                                                }
                                                            }



                                                            $('.btnselectacm, .btnselectbusn,.btnselectestnd, .btnselectepst,.btnaddons').on('click', function (event) {

                                                                $('#pricetype').val('');
                                                                if ($('.selectedplan').is(":checked")) {
                                                                    var priceplanslect = $('.selectedplan').data('producttype');
                                                                    $('#pricetype').val(priceplanslect);
                                                                }

                                                                /* Total Amonut */
                                                                var totalAmt = 0;
                                                                $(".selectedplan,.btnaddons").each(function () {
                                                                    if ($(this).prop('checked')) {
                                                                        totalAmt += parseInt($(this).data('priceval'));
                                                                    }
                                                                })
                                                                $('#totamt').html(totalAmt);
                                                                $('#paybutton').val(totalAmt);
                                                                /* Total End Amonut */

                                                            });


                                                        });
    </script>
    <!--    <script src="js/registrationjs.js"></script>-->

      
      <div id="paypal-button"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
      sandbox: 'demo_sandbox_client_id',
      production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
      size: 'small',
      color: 'gold',
      shape: 'pill',
    },
    // Set up a payment
    payment: function(data, actions) {
      return actions.payment.create({
        transactions: [{
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }]
      });
    },
    // Execute the payment
    onAuthorize: function(data, actions) {
      return actions.payment.execute().then(function() {
        // Show a confirmation message to the buyer
        window.alert('Thank you for your purchase!');
      });
    }
  }, '#paypal-button');
  // Set up a payment
payment: function(data, actions) {
  return actions.payment.create({
    transactions: [{
      amount: {
        total: '0.01',
        currency: 'USD'
      }
    }]
  });
}
// Execute the payment
onAuthorize: function(data, actions)
{
  return actions.payment.execute().then(function()
  {
    // Show a confirmation message to the buyer
    window.alert('Thank you for your purchase!');
  });
}

</script>
<div id="paypal-button-container"></div>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
// Render the PayPal button
paypal.Button.render({
// Set your environment
env: 'sandbox', // sandbox | production

// Specify the style of the button
style: {
  layout: 'vertical',  // horizontal | vertical
  size:   'medium',    // medium | large | responsive
  shape:  'rect',      // pill | rect
  color:  'gold'       // gold | blue | silver | white | black
},

// Specify allowed and disallowed funding sources
//
// Options:
// - paypal.FUNDING.CARD
// - paypal.FUNDING.CREDIT
// - paypal.FUNDING.ELV
funding: {
  allowed: [
    paypal.FUNDING.CARD,
    paypal.FUNDING.CREDIT
  ],
  disallowed: []
},

// PayPal Client IDs - replace with your own
// Create a PayPal app: https://developer.paypal.com/developer/applications/create
client: {
  sandbox: 'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
  production: '<insert production client id>'
},

payment: function (data, actions) {
  return actions.payment.create({
    payment: {
      transactions: [
        {
          amount: {
            total: '0.01',
            currency: 'USD'
          }
        }
      ]
    }
  });
},

onAuthorize: function (data, actions) {
  return actions.payment.execute()
    .then(function () {
      window.alert('Payment Complete!');
    });
}
}, '#paypal-button-container');
</script>
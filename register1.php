<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <script type="1cdb2fa11e58a029a568a4ce-text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
      <meta name="keywords" content="Registration, Early Bird, Online registration, offline registration, on spot registration, Disease Diagnosis and drug delivery, Biosensors and Bio-nanoparticles, Nano-medicine, Nanofabricated Devices, DNA Nano biotechnology, Lipid Nanotechnology, Future p" />
      <meta name="description" content="Synthetic biology, Synthetic biology applications, Gene editing tools, Genetic engineering, Human embryonic stem cells, Genetic modofication,  Immune cells control HIV long term, Genetically modified T cells, Cancer therapy " />
      <title>List of Biotechnology conferences 2018|Boston | USA | October </title>
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
      <title>Biotechnology Conferences 2018 | Bioinformatics Meetings | Biotechnology Symposiums: Blue | Green | Red</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="keywords" content="" />
      <meta name="description" content="Riconferences.com organizing Biotechnology Conferences in 2018 in USA, Europe, Australia, Middle East and Other Prominent locations across the globe. We organize Biotechnology Meetings in the fields related to Biotechnology like Pharmaceutical, Nano, Medical and Agricultural.">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Michroma" rel="stylesheet">
      <link rel="stylesheet" href="https://d2cax41o7ahm5l.cloudfront.net/cs/css/style.min.css" type="text/css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <link rel="shortcut icon" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/favicon.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="57x57" href="https://d2cax41o7ahm5l.cloudfront.net/cs/images/ico/apple-touch-icon-57-precomposed.png">
      <meta property="og:url" content="https://www.biotechnologycongress.com/america/" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Biotechnology Conferences 2018 | Bioinformatics Meetings | Biotechnology Symposiums: Blue | Green | Red" />
      <meta property="og:description" content="Riconferences.com organizing Biotechnology Conferences in 2018 in USA, Europe, Australia, Middle East and Other Prominent locations across the globe. We organize Biotechnology Meetings in the fields related to Biotechnology like Pharmaceutical, Nano, Medical and Agricultural." />
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
      <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
         // Set the date we're counting down to
         var countDownDate = new Date("2018-10-24 10:0:25").getTime();
         
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
     
  
      <script type='application/ld+json'>
         {
             "@context": "https://schema.org/",
             "@type": "Event",
             "name": "Biotechnology Conferences 2018 | Bioinformatics Meetings | Biotechnology Symposiums: Blue | Green | Red",
             "url": "https://biotechnologycongress.com/america",
             "description": "Riconferences.com organizing Biotechnology Conferences in 2018 in USA, Europe, Australia, Middle East and Other Prominent locations across the globe. We organize Biotechnology Meetings in the fields related to Biotechnology like Pharmaceutical, Nano, Medical and Agricultural.",
             "startDate": "2018-10-24",
            "image": "",
            "offers":"Special Discounts for Groups and Early Birds",
             "endDate": "2018-10-26",
             "location": {
                 "@type": "Place",
                 /*"name": "",*/
                 "address": {
                     "@type": "PostalAddress",
                     /*"streetAddress": "",*/
                    /* "addressLocality": "",*/
                     "addressRegion": "Boston",
                     /*"postalCode": "",*/
                     "addressCountry": "USA"
                 }
             }
         }
      </script>
      <script type='application/ld+json'>
         {
            "@context": "https://schema.org/",
            "@type": "Organization",
            "name": "Bio America 2018",
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "ratingCount": "1400",
                "reviewCount": "60"
            }
         }
      </script>
   </head>
   <body>
      <div id="fb-root"></div>
      <script type="1cdb2fa11e58a029a568a4ce-text/javascript">(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=857170574381006";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
      </script>
      <div id="CssFailCheck" class="hidden"></div>

      
      <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
         function calculateAmount() {
             amount = 0;
         
             var provals = [];
         
             var radios = document.getElementsByTagName('input');
             for (i = 0; i < radios.length; i++) {
                 if (radios[i].type == 'radio' && radios[i].checked && isNaN(radios[i].value) == false) {
                     amount = amount + parseInt(radios[i].value);
                     provals.push(parseInt(radios[i].value));
                 }
             }
         
             var pros = [];
         
             $.each($("input[type=checkbox]:checked"), function () {
                 if ($(this).attr('name') != 'checkin')
                 {
                     pros.push($(this).val());
                 }
             });
         
             var product = pros.toString();
             product = product.replace(/,/g, " + ");
             document.form1.products.value = product;
         
             var productvalues = provals.toString();
             productvalues = productvalues.replace(/,/g, "+");
             document.form1.productvalues.value = productvalues;
         
             document.form1.price.value = amount;
         }
         
         function FillBilling(f) {
             if (f.checkin.checked == true) {
         
                 f.STitle.value = f.Title.value;
                 f.SFName.value = f.FName.value;
                 f.SLName.value = f.LName.value;
         
                 f.Scompany.value = f.Company.value;
                 f.scity.value = f.city.value;
                 f.sstate.value = f.state.value;
         
                 f.Scountry.value = f.Country.value;
                 f.SAuthors_Email.value = f.Authors_Email.value;
                 f.Sphone.value = f.phone.value;
                 f.SFull_Postal_Address.value = f.Full_Postal_Address.value;
             }
         
             else {
                 f.Sname.value = " ";
                 f.Scompany.value = " ";
                 f.Scountry.value = " ";
                 f.SAuthors_Email.value = " ";
                 f.Sphone.value = " ";
                 f.SFull_Postal_Address.value = " ";
             }
         }
         
         function validate()
         {
             var frm = document.form1;
         
             if (frm.price.value == '0' || frm.price.value == '')
             {
                 alert("Please select a valid Registration Category");
                 return false;
             }
         }
      </script>
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
                           <p style="font-size: 17px;background: #e0e0e0;padding: 10px;">We strongly recommend you to view the feedback given by our previous attendees @ <a href="https://Riconferences.com/usa-meetings/reviews" target="_blank" class="blink" style="color:#25408f">https://Riconferences.com/usa-meetings/reviews</a></p>
                        </div>
                        <div>
                           <div class="well well-sm text-center choose-currency" style="background-color:#e0e0e0">
                              <div>
                                 <form name="currform" id="currform" action="register.php" method="post">
                                    <div class="clearfix">
                                       <div class="col-md-4 col-sm-6 text-center">
                                          <h3>Choose Payment Method <i class="fa fa-long-arrow-right hidden-xs"></i></h3>
                                       </div>
                                       <!--<div class="col-md-3 col-sm-3 col-xs-4">-->
                                       <!--   <label>-->
                                       <!--   <input type="radio" name="payment" value="stripe" id="selectedstrip" checked>-->
                                       <!--   Payment Gateway-->
                                       <!--   </label>-->
                                       <!--</div>-->
                                       <div class="col-md-3 col-sm-3 col-xs-4">
                                          <label>
                                          <input type="radio" name="payment" value="paypal" id="selectedpaypal">
                                          PayPal </label>
                                          <div id="showpaypalbox">
                                             For PayPal payments, 2% processing charges may apply. 
                                          </div>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="h3 text-primary" style="margin-top: 0;"><strong>Choose your Currency</strong></div>
                                    <label id="currlabel">
                                    <input type="radio" id="currencyGBP" name="currency" value="GBP" checked /> GBP (£)
                                    </label>
                                    <label id="currlabel">
                                    <input type="radio" id="currencyEUR" name="currency" value="EUR" /> Euro (€)
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
                        </div>
                     </div>
                     <section class=" well well-sm reg-form-main clearfix">
                        <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="1cdb2fa11e58a029a568a4ce-"></script>
                        <form role="form" id="regformid" method="post" action="register.php" name="form1" onSubmit="return validate();" class="form-horizontal clearfix">
                           <input type="hidden" name="conference" value="Bio America 2018">
                           <input type="hidden" name="conferenceid" value="3634">
                           <input type="hidden" name="currency" value="GBP">
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
                                             <option value='Mr'>Mr</option>
                                             <option value='Ms'>Ms</option>
                                             <option value='Mrs'>Mrs</option>
                                             <option value='Prof'>Prof</option>
                                             <option value='Dr'>Dr</option>
                                             <option value='Assist Prof Dr'>Assist Prof Dr</option>
                                             <option value='Assoc Prof Dr'>Assoc Prof Dr</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputFirstName" class="col-md-4 control-label">Full Name</label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="FName" id="FName" placeholder="First Name" value="" required>
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
                                          <input type="text" class="form-control" name="city" id="city" placeholder="City" value="" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputLastName" class="col-md-4 control-label notrequired">State</label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="state" id="state" placeholder="State" value="" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="selectCountry" class="col-md-4 control-label">Country</label>
                                       <div class="col-md-8">
                                          <select class="form-control" name="Country" id="Country" required>
                                             <option value="">Select Country</option>
                                             <option value='Afghanistan'>Afghanistan</option>
                                             <option value='Aland Islands'>Aland Islands</option>
                                             <option value='Albania'>Albania</option>
                                             <option value='Algeria'>Algeria</option>
                                             <option value='Amman'>Amman</option>
                                             <option value='Andorra'>Andorra</option>
                                             <option value='Angola'>Angola</option>
                                             <option value='Argentina'>Argentina</option>
                                             <option value='Armenia'>Armenia</option>
                                             <option value='Aruba'>Aruba</option>
                                             <option value='Australia'>Australia</option>
                                             <option value='Austria'>Austria</option>
                                             <option value='Azerbaijan'>Azerbaijan</option>
                                             <option value='Bahamas'>Bahamas</option>
                                             <option value='Bahrain'>Bahrain</option>
                                             <option value='Bangladesh'>Bangladesh</option>
                                             <option value='Barbados'>Barbados</option>
                                             <option value='Belarus'>Belarus</option>
                                             <option value='Belgium'>Belgium</option>
                                             <option value='Belize'>Belize</option>
                                             <option value='Benin'>Benin</option>
                                             <option value='Bhutan'>Bhutan</option>
                                             <option value='Bolivia'>Bolivia</option>
                                             <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
                                             <option value='Botswana'>Botswana</option>
                                             <option value='Brazil'>Brazil</option>
                                             <option value='Brunei'>Brunei</option>
                                             <option value='Bulgaria'>Bulgaria</option>
                                             <option value='Burkina Faso'>Burkina Faso</option>
                                             <option value='Burundi'>Burundi</option>
                                             <option value='Cambodia'>Cambodia</option>
                                             <option value='Cameroon'>Cameroon</option>
                                             <option value='Canada'>Canada</option>
                                             <option value='Cango'>Cango</option>
                                             <option value='Cape Verde'>Cape Verde</option>
                                             <option value='Cayman Islands'>Cayman Islands</option>
                                             <option value='Central African Republic'>Central African Republic</option>
                                             <option value='Chile'>Chile</option>
                                             <option value='China'>China</option>
                                             <option value='Colombia'>Colombia</option>
                                             <option value='Costa Rica'>Costa Rica</option>
                                             <option value='Cote dIvoire'>Cote dIvoire</option>
                                             <option value='Croatia'>Croatia</option>
                                             <option value='Cuba'>Cuba</option>
                                             <option value='Cyprus'>Cyprus</option>
                                             <option value='Czech Republic'>Czech Republic</option>
                                             <option value='Democratic Republic of the Congo'>Democratic Republic of the Congo</option>
                                             <option value='Denmark'>Denmark</option>
                                             <option value='Djibouti'>Djibouti</option>
                                             <option value='Dominican Republic'>Dominican Republic</option>
                                             <option value='Dublin'>Dublin</option>
                                             <option value='Ecuador'>Ecuador</option>
                                             <option value='Egypt'>Egypt</option>
                                             <option value='El Salvador'>El Salvador</option>
                                             <option value='England'>England</option>
                                             <option value='Eritrea'>Eritrea</option>
                                             <option value='Estonia'>Estonia</option>
                                             <option value='Ethiopia'>Ethiopia</option>
                                             <option value='Europe'>Europe</option>
                                             <option value='Faroe Islands'>Faroe Islands</option>
                                             <option value='Fiji'>Fiji</option>
                                             <option value='Finland'>Finland</option>
                                             <option value='France'>France</option>
                                             <option value='Gabon'>Gabon</option>
                                             <option value='Gambia'>Gambia</option>
                                             <option value='Georgia'>Georgia</option>
                                             <option value='Germany'>Germany</option>
                                             <option value='Ghana'>Ghana</option>
                                             <option value='Gibraltar'>Gibraltar</option>
                                             <option value='Greece'>Greece</option>
                                             <option value='Grenada'>Grenada</option>
                                             <option value='Guam'>Guam</option>
                                             <option value='Guatemala'>Guatemala</option>
                                             <option value='Guernsey'>Guernsey</option>
                                             <option value='Guinea'>Guinea</option>
                                             <option value='Guinea-Bissau'>Guinea-Bissau</option>
                                             <option value='Guyana'>Guyana</option>
                                             <option value='Haiti'>Haiti</option>
                                             <option value='Honduras'>Honduras</option>
                                             <option value='Hong Kong'>Hong Kong</option>
                                             <option value='Hungary'>Hungary</option>
                                             <option value='Iceland'>Iceland</option>
                                             <option value='India'>India</option>
                                             <option value='Indonesia'>Indonesia</option>
                                             <option value='Iran'>Iran</option>
                                             <option value='Iraq'>Iraq</option>
                                             <option value='Ireland'>Ireland</option>
                                             <option value='Isle of Man'>Isle of Man</option>
                                             <option value='Israel'>Israel</option>
                                             <option value='Italy'>Italy</option>
                                             <option value='Ivory Coast'>Ivory Coast</option>
                                             <option value='Jamaica'>Jamaica</option>
                                             <option value='Japan'>Japan</option>
                                             <option value='Jersey'>Jersey</option>
                                             <option value='Johor Bahru'>Johor Bahru</option>
                                             <option value='Jordan'>Jordan</option>
                                             <option value='Kazakhstan'>Kazakhstan</option>
                                             <option value='Kenya'>Kenya</option>
                                             <option value='Kosovo'>Kosovo</option>
                                             <option value='Kota Kinabalu'>Kota Kinabalu</option>
                                             <option value='Kuala Lumpur'>Kuala Lumpur</option>
                                             <option value='Kuantan'>Kuantan</option>
                                             <option value='Kuching'>Kuching</option>
                                             <option value='Kuwait'>Kuwait</option>
                                             <option value='Kyrgyzstan'>Kyrgyzstan</option>
                                             <option value='Laos'>Laos</option>
                                             <option value='Latvia'>Latvia</option>
                                             <option value='Lebanon'>Lebanon</option>
                                             <option value='Lesotho'>Lesotho</option>
                                             <option value='Liberia'>Liberia</option>
                                             <option value='Libya'>Libya</option>
                                             <option value='Liechtenstein'>Liechtenstein</option>
                                             <option value='Lithuania'>Lithuania</option>
                                             <option value='Luxembourg'>Luxembourg</option>
                                             <option value='Macau (China)'>Macau (China)</option>
                                             <option value='Macedonia'>Macedonia</option>
                                             <option value='Madagascar'>Madagascar</option>
                                             <option value='Malawi'>Malawi</option>
                                             <option value='Malaysia'>Malaysia</option>
                                             <option value='Maldives'>Maldives</option>
                                             <option value='Mali'>Mali</option>
                                             <option value='Malta'>Malta</option>
                                             <option value='Maryland'>Maryland</option>
                                             <option value='Mauritania'>Mauritania</option>
                                             <option value='Mauritius'>Mauritius</option>
                                             <option value='Melaka'>Melaka</option>
                                             <option value='Mexico'>Mexico</option>
                                             <option value='Mississippi'>Mississippi</option>
                                             <option value='Moldova'>Moldova</option>
                                             <option value='Monaco'>Monaco</option>
                                             <option value='mongolia'>mongolia</option>
                                             <option value='Montenegro'>Montenegro</option>
                                             <option value='Morocco'>Morocco</option>
                                             <option value='Mozambique'>Mozambique</option>
                                             <option value='Myanmar'>Myanmar</option>
                                             <option value='Namibia'>Namibia</option>
                                             <option value='Nepal'>Nepal</option>
                                             <option value='Netherlands'>Netherlands</option>
                                             <option value='New Guinea'>New Guinea</option>
                                             <option value='Newzealand'>Newzealand</option>
                                             <option value='Nicaragua'>Nicaragua</option>
                                             <option value='Nigeria'>Nigeria</option>
                                             <option value='North America'>North America</option>
                                             <option value='North Korea'>North Korea</option>
                                             <option value='Norway'>Norway</option>
                                             <option value='Oceania'>Oceania</option>
                                             <option value='Oman'>Oman</option>
                                             <option value='Oregon'>Oregon</option>
                                             <option value='Pakistan'>Pakistan</option>
                                             <option value='Palestine'>Palestine</option>
                                             <option value='Panama'>Panama</option>
                                             <option value='Paraguay'>Paraguay</option>
                                             <option value='Penang'>Penang</option>
                                             <option value='Peru'>Peru</option>
                                             <option value='Philippines'>Philippines</option>
                                             <option value='Poland'>Poland</option>
                                             <option value='Portugal'>Portugal</option>
                                             <option value='Puerto Rico'>Puerto Rico</option>
                                             <option value='Qatar'>Qatar</option>
                                             <option value='Republic of Ireland'>Republic of Ireland</option>
                                             <option value='Republic of Macedonia'>Republic of Macedonia</option>
                                             <option value='Republic of Yugoslavia'>Republic of Yugoslavia</option>
                                             <option value='Romania'>Romania</option>
                                             <option value='Russia'>Russia</option>
                                             <option value='Rwanda'>Rwanda</option>
                                             <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
                                             <option value='San Marino'>San Marino</option>
                                             <option value='Saudi Arabia'>Saudi Arabia</option>
                                             <option value='Scotland'>Scotland</option>
                                             <option value='Senegal'>Senegal</option>
                                             <option value='Serbia'>Serbia</option>
                                             <option value='Shah Alam'>Shah Alam</option>
                                             <option value='Sierra Leone'>Sierra Leone</option>
                                             <option value='Singapore'>Singapore</option>
                                             <option value='Slovakia'>Slovakia</option>
                                             <option value='Slovenia'>Slovenia</option>
                                             <option value='Somalia'>Somalia</option>
                                             <option value='South Africa'>South Africa</option>
                                             <option value='South Korea'>South Korea</option>
                                             <option value='Spain'>Spain</option>
                                             <option value='Sri Lanka'>Sri Lanka</option>
                                             <option value='Sudan'>Sudan</option>
                                             <option value='Suriname'>Suriname</option>
                                             <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option>
                                             <option value='Swaziland'>Swaziland</option>
                                             <option value='Sweden'>Sweden</option>
                                             <option value='Switzerland'>Switzerland</option>
                                             <option value='Syria'>Syria</option>
                                             <option value='Taiwan'>Taiwan</option>
                                             <option value='Tajikistan'>Tajikistan</option>
                                             <option value='Tanzania'>Tanzania</option>
                                             <option value='Thailand'>Thailand</option>
                                             <option value='Timor Leste'>Timor Leste</option>
                                             <option value='Togo'>Togo</option>
                                             <option value='Trinidad and Tobago'>Trinidad and Tobago</option>
                                             <option value='Tunisia'>Tunisia</option>
                                             <option value='Turkey'>Turkey</option>
                                             <option value='Turkmenistan'>Turkmenistan</option>
                                             <option value='UAE'>UAE</option>
                                             <option value='Uganda'>Uganda</option>
                                             <option value='UK'>UK</option>
                                             <option value='Ukraine'>Ukraine</option>
                                             <option value='United Arab Emirates'>United Arab Emirates</option>
                                             <option value='Uruguay'>Uruguay</option>
                                             <option value='USA'>USA</option>
                                             <option value='Uzbekistan'>Uzbekistan</option>
                                             <option value='Vatican'>Vatican</option>
                                             <option value='Venezuela'>Venezuela</option>
                                             <option value='Victoria'>Victoria</option>
                                             <option value='Vietnam'>Vietnam</option>
                                             <option value='Wales'>Wales</option>
                                             <option value='West Indies'>West Indies</option>
                                             <option value='Yemen'>Yemen</option>
                                             <option value='Zambia'>Zambia</option>
                                             <option value='Zimbabwe'>Zimbabwe</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputEmail" class="col-md-4 control-label">Email</label>
                                       <div class="col-md-8">
                                          <input type="email" class="form-control" name="Authors_Email" id="Authors_Email" placeholder="Your email" value="" required>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputPhoneNumber" class="col-md-4 control-label">Phone Number</label>
                                       <div class="col-md-8">
                                          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" maxlength="20" required value="">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="address" class="col-md-4 control-label notrequired">Address</label>
                                       <div class="col-md-8">
                                          <textarea name="Full_Postal_Address" rows="3" class="form-control" id="Full_Postal_Address" maxlength="150"></textarea>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputAbsCategory" class="col-md-4 control-label notrequired">Abstract Category</label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="Abstact_Category" id="Abstact_Category" placeholder="Your Abstract Category" value="">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="titleSpeech" class="col-md-4 control-label notrequired">Title of the speech</label>
                                       <div class="col-md-8">
                                          <input type="text" class="form-control" name="Conference_Title" id="Conference_Title" placeholder="Your title of the proposed talk" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="reg-details same">
                                    <div class="bill-info">
                                       <h3>Billing Information</h3>
                                       <div class="checkbox">
                                          <label class="notrequired">
                                          <input type="checkbox" name="checkin" onclick="FillBilling(this.form)" class="type" /> If Billing Information same please click here.</label>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="selectTitleSame" class="col-md-4 control-label">Title</label>
                                       <div class="col-md-8">
                                          <select class="form-control" id="selectTitleSame" name="STitle" required>
                                             <option selected="selected">Select Title</option>
                                             <option value='Mr'>Mr</option>
                                             <option value='Ms'>Ms</option>
                                             <option value='Mrs'>Mrs</option>
                                             <option value='Prof'>Prof</option>
                                             <option value='Dr'>Dr</option>
                                             <option value='Assist Prof Dr'>Assist Prof Dr</option>
                                             <option value='Assoc Prof Dr'>Assoc Prof Dr</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputFirstNameSame" class="col-md-4 control-label">Full Name</label>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="SFName" id="SFName" placeholder="First Name" required value="">
                                       </div>
                                       <div class="col-md-4">
                                          <input type="text" class="form-control" name="SLName" id="SLName" placeholder="Last Name" required value="">
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
                                          <input type="text" class="form-control" name="sstate" id="sstate" placeholder="State" required value="">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="selectCountrySame" class="col-md-4 control-label">Country</label>
                                       <div class="col-md-8">
                                          <select class="form-control" name="Scountry" id="Scountry" required>
                                             <option selected="selected">Select Country</option>
                                             <option value='Afghanistan'>Afghanistan</option>
                                             <option value='Aland Islands'>Aland Islands</option>
                                             <option value='Albania'>Albania</option>
                                             <option value='Algeria'>Algeria</option>
                                             <option value='Amman'>Amman</option>
                                             <option value='Andorra'>Andorra</option>
                                             <option value='Angola'>Angola</option>
                                             <option value='Argentina'>Argentina</option>
                                             <option value='Armenia'>Armenia</option>
                                             <option value='Aruba'>Aruba</option>
                                             <option value='Australia'>Australia</option>
                                             <option value='Austria'>Austria</option>
                                             <option value='Azerbaijan'>Azerbaijan</option>
                                             <option value='Bahamas'>Bahamas</option>
                                             <option value='Bahrain'>Bahrain</option>
                                             <option value='Bangladesh'>Bangladesh</option>
                                             <option value='Barbados'>Barbados</option>
                                             <option value='Belarus'>Belarus</option>
                                             <option value='Belgium'>Belgium</option>
                                             <option value='Belize'>Belize</option>
                                             <option value='Benin'>Benin</option>
                                             <option value='Bhutan'>Bhutan</option>
                                             <option value='Bolivia'>Bolivia</option>
                                             <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
                                             <option value='Botswana'>Botswana</option>
                                             <option value='Brazil'>Brazil</option>
                                             <option value='Brunei'>Brunei</option>
                                             <option value='Bulgaria'>Bulgaria</option>
                                             <option value='Burkina Faso'>Burkina Faso</option>
                                             <option value='Burundi'>Burundi</option>
                                             <option value='Cambodia'>Cambodia</option>
                                             <option value='Cameroon'>Cameroon</option>
                                             <option value='Canada'>Canada</option>
                                             <option value='Cango'>Cango</option>
                                             <option value='Cape Verde'>Cape Verde</option>
                                             <option value='Cayman Islands'>Cayman Islands</option>
                                             <option value='Central African Republic'>Central African Republic</option>
                                             <option value='Chile'>Chile</option>
                                             <option value='China'>China</option>
                                             <option value='Colombia'>Colombia</option>
                                             <option value='Costa Rica'>Costa Rica</option>
                                             <option value='Cote dIvoire'>Cote dIvoire</option>
                                             <option value='Croatia'>Croatia</option>
                                             <option value='Cuba'>Cuba</option>
                                             <option value='Cyprus'>Cyprus</option>
                                             <option value='Czech Republic'>Czech Republic</option>
                                             <option value='Democratic Republic of the Congo'>Democratic Republic of the Congo</option>
                                             <option value='Denmark'>Denmark</option>
                                             <option value='Djibouti'>Djibouti</option>
                                             <option value='Dominican Republic'>Dominican Republic</option>
                                             <option value='Dublin'>Dublin</option>
                                             <option value='Ecuador'>Ecuador</option>
                                             <option value='Egypt'>Egypt</option>
                                             <option value='El Salvador'>El Salvador</option>
                                             <option value='England'>England</option>
                                             <option value='Eritrea'>Eritrea</option>
                                             <option value='Estonia'>Estonia</option>
                                             <option value='Ethiopia'>Ethiopia</option>
                                             <option value='Europe'>Europe</option>
                                             <option value='Faroe Islands'>Faroe Islands</option>
                                             <option value='Fiji'>Fiji</option>
                                             <option value='Finland'>Finland</option>
                                             <option value='France'>France</option>
                                             <option value='Gabon'>Gabon</option>
                                             <option value='Gambia'>Gambia</option>
                                             <option value='Georgia'>Georgia</option>
                                             <option value='Germany'>Germany</option>
                                             <option value='Ghana'>Ghana</option>
                                             <option value='Gibraltar'>Gibraltar</option>
                                             <option value='Greece'>Greece</option>
                                             <option value='Grenada'>Grenada</option>
                                             <option value='Guam'>Guam</option>
                                             <option value='Guatemala'>Guatemala</option>
                                             <option value='Guernsey'>Guernsey</option>
                                             <option value='Guinea'>Guinea</option>
                                             <option value='Guinea-Bissau'>Guinea-Bissau</option>
                                             <option value='Guyana'>Guyana</option>
                                             <option value='Haiti'>Haiti</option>
                                             <option value='Honduras'>Honduras</option>
                                             <option value='Hong Kong'>Hong Kong</option>
                                             <option value='Hungary'>Hungary</option>
                                             <option value='Iceland'>Iceland</option>
                                             <option value='India'>India</option>
                                             <option value='Indonesia'>Indonesia</option>
                                             <option value='Iran'>Iran</option>
                                             <option value='Iraq'>Iraq</option>
                                             <option value='Ireland'>Ireland</option>
                                             <option value='Isle of Man'>Isle of Man</option>
                                             <option value='Israel'>Israel</option>
                                             <option value='Italy'>Italy</option>
                                             <option value='Ivory Coast'>Ivory Coast</option>
                                             <option value='Jamaica'>Jamaica</option>
                                             <option value='Japan'>Japan</option>
                                             <option value='Jersey'>Jersey</option>
                                             <option value='Johor Bahru'>Johor Bahru</option>
                                             <option value='Jordan'>Jordan</option>
                                             <option value='Kazakhstan'>Kazakhstan</option>
                                             <option value='Kenya'>Kenya</option>
                                             <option value='Kosovo'>Kosovo</option>
                                             <option value='Kota Kinabalu'>Kota Kinabalu</option>
                                             <option value='Kuala Lumpur'>Kuala Lumpur</option>
                                             <option value='Kuantan'>Kuantan</option>
                                             <option value='Kuching'>Kuching</option>
                                             <option value='Kuwait'>Kuwait</option>
                                             <option value='Kyrgyzstan'>Kyrgyzstan</option>
                                             <option value='Laos'>Laos</option>
                                             <option value='Latvia'>Latvia</option>
                                             <option value='Lebanon'>Lebanon</option>
                                             <option value='Lesotho'>Lesotho</option>
                                             <option value='Liberia'>Liberia</option>
                                             <option value='Libya'>Libya</option>
                                             <option value='Liechtenstein'>Liechtenstein</option>
                                             <option value='Lithuania'>Lithuania</option>
                                             <option value='Luxembourg'>Luxembourg</option>
                                             <option value='Macau (China)'>Macau (China)</option>
                                             <option value='Macedonia'>Macedonia</option>
                                             <option value='Madagascar'>Madagascar</option>
                                             <option value='Malawi'>Malawi</option>
                                             <option value='Malaysia'>Malaysia</option>
                                             <option value='Maldives'>Maldives</option>
                                             <option value='Mali'>Mali</option>
                                             <option value='Malta'>Malta</option>
                                             <option value='Maryland'>Maryland</option>
                                             <option value='Mauritania'>Mauritania</option>
                                             <option value='Mauritius'>Mauritius</option>
                                             <option value='Melaka'>Melaka</option>
                                             <option value='Mexico'>Mexico</option>
                                             <option value='Mississippi'>Mississippi</option>
                                             <option value='Moldova'>Moldova</option>
                                             <option value='Monaco'>Monaco</option>
                                             <option value='mongolia'>mongolia</option>
                                             <option value='Montenegro'>Montenegro</option>
                                             <option value='Morocco'>Morocco</option>
                                             <option value='Mozambique'>Mozambique</option>
                                             <option value='Myanmar'>Myanmar</option>
                                             <option value='Namibia'>Namibia</option>
                                             <option value='Nepal'>Nepal</option>
                                             <option value='Netherlands'>Netherlands</option>
                                             <option value='New Guinea'>New Guinea</option>
                                             <option value='Newzealand'>Newzealand</option>
                                             <option value='Nicaragua'>Nicaragua</option>
                                             <option value='Nigeria'>Nigeria</option>
                                             <option value='North America'>North America</option>
                                             <option value='North Korea'>North Korea</option>
                                             <option value='Norway'>Norway</option>
                                             <option value='Oceania'>Oceania</option>
                                             <option value='Oman'>Oman</option>
                                             <option value='Oregon'>Oregon</option>
                                             <option value='Pakistan'>Pakistan</option>
                                             <option value='Palestine'>Palestine</option>
                                             <option value='Panama'>Panama</option>
                                             <option value='Paraguay'>Paraguay</option>
                                             <option value='Penang'>Penang</option>
                                             <option value='Peru'>Peru</option>
                                             <option value='Philippines'>Philippines</option>
                                             <option value='Poland'>Poland</option>
                                             <option value='Portugal'>Portugal</option>
                                             <option value='Puerto Rico'>Puerto Rico</option>
                                             <option value='Qatar'>Qatar</option>
                                             <option value='Republic of Ireland'>Republic of Ireland</option>
                                             <option value='Republic of Macedonia'>Republic of Macedonia</option>
                                             <option value='Republic of Yugoslavia'>Republic of Yugoslavia</option>
                                             <option value='Romania'>Romania</option>
                                             <option value='Russia'>Russia</option>
                                             <option value='Rwanda'>Rwanda</option>
                                             <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis</option>
                                             <option value='San Marino'>San Marino</option>
                                             <option value='Saudi Arabia'>Saudi Arabia</option>
                                             <option value='Scotland'>Scotland</option>
                                             <option value='Senegal'>Senegal</option>
                                             <option value='Serbia'>Serbia</option>
                                             <option value='Shah Alam'>Shah Alam</option>
                                             <option value='Sierra Leone'>Sierra Leone</option>
                                             <option value='Singapore'>Singapore</option>
                                             <option value='Slovakia'>Slovakia</option>
                                             <option value='Slovenia'>Slovenia</option>
                                             <option value='Somalia'>Somalia</option>
                                             <option value='South Africa'>South Africa</option>
                                             <option value='South Korea'>South Korea</option>
                                             <option value='Spain'>Spain</option>
                                             <option value='Sri Lanka'>Sri Lanka</option>
                                             <option value='Sudan'>Sudan</option>
                                             <option value='Suriname'>Suriname</option>
                                             <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen</option>
                                             <option value='Swaziland'>Swaziland</option>
                                             <option value='Sweden'>Sweden</option>
                                             <option value='Switzerland'>Switzerland</option>
                                             <option value='Syria'>Syria</option>
                                             <option value='Taiwan'>Taiwan</option>
                                             <option value='Tajikistan'>Tajikistan</option>
                                             <option value='Tanzania'>Tanzania</option>
                                             <option value='Thailand'>Thailand</option>
                                             <option value='Timor Leste'>Timor Leste</option>
                                             <option value='Togo'>Togo</option>
                                             <option value='Trinidad and Tobago'>Trinidad and Tobago</option>
                                             <option value='Tunisia'>Tunisia</option>
                                             <option value='Turkey'>Turkey</option>
                                             <option value='Turkmenistan'>Turkmenistan</option>
                                             <option value='UAE'>UAE</option>
                                             <option value='Uganda'>Uganda</option>
                                             <option value='UK'>UK</option>
                                             <option value='Ukraine'>Ukraine</option>
                                             <option value='United Arab Emirates'>United Arab Emirates</option>
                                             <option value='Uruguay'>Uruguay</option>
                                             <option value='USA'>USA</option>
                                             <option value='Uzbekistan'>Uzbekistan</option>
                                             <option value='Vatican'>Vatican</option>
                                             <option value='Venezuela'>Venezuela</option>
                                             <option value='Victoria'>Victoria</option>
                                             <option value='Vietnam'>Vietnam</option>
                                             <option value='Wales'>Wales</option>
                                             <option value='West Indies'>West Indies</option>
                                             <option value='Yemen'>Yemen</option>
                                             <option value='Zambia'>Zambia</option>
                                             <option value='Zimbabwe'>Zimbabwe</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputEmailSame" class="col-md-4 control-label">Email</label>
                                       <div class="col-md-8">
                                          <input type="email" name="SAuthors_Email" id="SAuthors_Email" class="form-control" placeholder="Your email" required value="">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="inputPhoneNumberSame" class="col-md-4 control-label">Phone Number</label>
                                       <div class="col-md-8">
                                          <input type="tel" class="form-control" id="Sphone" name="Sphone" placeholder="Phone Number" maxlength="20" required value="">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <label for="addressSame" class="col-md-4 control-label notrequired">Address</label>
                                       <div class="col-md-8">
                                          <textarea name="SFull_Postal_Address" id="SFull_Postal_Address" rows="3" class="form-control" maxlength="150"></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix" style="clear:both;">
                                 <div class="clearfix">
                                    <div class="reg-main">
                                       <div class="col-md-6">
                                          <div class="reg-type">
                                             <h3 class="text-center">Academic</h3>
                                             <div class="time clearfix hidden-xs hidden-xs">
                                                <div class="col-md-offset-3 col-sm-offset-3 col-sm-offset-3 col-md-3 col-sm-3">
                                                   On/Before<br>
                                                   Sep 20, 2018 
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   On/Before<br>
                                                   October 14, 2018 
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   Final Call<br>
                                                   October 23, 2018 
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Registration</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Registration"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£540</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£690</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£730</span> 
                                                      </p>
                                                      <input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval="730" id="option3" value="33825">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Package A (2 nights accommodation)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Package A (2 nights accommodation)"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£1000</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£1080</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£1160</span> 
                                                      </p>
                                                      <input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval="1160" id="option3" value="33827">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Package-B (3 nights accommodation)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Package-B (3 nights accommodation)"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£1080</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£1160</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£1240</span> 
                                                      </p>
                                                      <input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval="1240" id="option3" value="33828">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Delegate (Only Registration)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Delegate (Only Registration)"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£390</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£460</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£540</span> 
                                                      </p>
                                                      <input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval="540" id="option3" value="33829">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>A4 Advertisement (in Souvenir)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="A4 Advertisement (in Souvenir)"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£310</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£390</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£460</span> 
                                                      </p>
                                                      <input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval="460" id="option3" value="33831">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Webinar Presentation</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="option1" class="btnselectacm" value="Webinar Presentation"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£180</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£220</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£260</span> 
                                                      </p>
                                                      <input class="selectedplan" type="radio" name="reg[]" data-producttype="final" data-priceval="260" id="option3" value="42401">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="reg-type business">
                                             <h3 class="text-center">Business</h3>
                                             <div class="time clearfix hidden-xs hidden-xs">
                                                <div class="col-md-offset-3 col-sm-offset-3 col-md-3 col-sm-3">
                                                   On/Before<br>
                                                   Sep 20, 2018 
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   On/Before<br>
                                                   October 14, 2018 
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   Final Call<br>
                                                   October 23, 2018 
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Registration</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£690</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£730</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£830</span> 
                                                      </p>
                                                      <input type="radio" class="selectedplan" data-producttype="final" data-priceval="830" name="reg[]" id="busoption3" value="33833">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Package-A (2 nights accommodation)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£1080</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£1160</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£1240</span> 
                                                      </p>
                                                      <input type="radio" class="selectedplan" data-producttype="final" data-priceval="1240" name="reg[]" id="busoption3" value="33834">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Package B(3 nights accommodation)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£1160</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£1240</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£1330</span> 
                                                      </p>
                                                      <input type="radio" class="selectedplan" data-producttype="final" data-priceval="1330" name="reg[]" id="busoption3" value="33835">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Delegate (Only Registration)</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£460</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£540</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£690</span> 
                                                      </p>
                                                      <input type="radio" class="selectedplan" data-producttype="final" data-priceval="690" name="reg[]" id="busoption3" value="33836">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="reg-sub-main clearfix">
                                                <div class="col-md-3 col-sm-3">
                                                   <h4>Exhibitor</h4>
                                                   <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         Sep 20, 2018 </mark><span>£1330</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub time-over">
                                                      <p><mark class="visible-xs">On/Before<br>
                                                         October 14, 2018 </mark><span>£1410</span> 
                                                      </p>
                                                   </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3">
                                                   <div class="reg-sub">
                                                      <p><mark class="visible-xs">Final Call<br>
                                                         October 23, 2018 </mark><span>£1490</span> 
                                                      </p>
                                                      <input type="radio" class="selectedplan" data-producttype="final" data-priceval="1490" name="reg[]" id="busoption3" value="33837">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="row">
                                          <div class="col-md-6 col-sm-12">
                                             <div class="reg-type student">
                                                <h3 class="text-center">Student</h3>
                                                <div class="time clearfix hidden-xs">
                                                   <div class="col-md-offset-3 col-sm-offset-3 col-md-3 col-sm-3 hidden-xs">
                                                      On/Before<br>
                                                      Sep 20, 2018 
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      On/Before<br>
                                                      October 14, 2018 
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      Final Call<br>
                                                      October 23, 2018 
                                                   </div>
                                                </div>
                                                <div class="reg-sub-main clearfix">
                                                   <div class="col-md-3 col-sm-3">
                                                      <h4>Young Researchers Forum</h4>
                                                      <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            Sep 20, 2018 </mark><span>£390</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            October 14, 2018 </mark><span>£460</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub">
                                                         <p><mark class="visible-xs">Final Call<br>
                                                            October 23, 2018 </mark><span>£590</span> 
                                                         </p>
                                                         <input type="radio" class="selectedplan" data-producttype="final" data-priceval="590" name="reg[]" id="busoption3" value="33838">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reg-sub-main clearfix">
                                                   <div class="col-md-3 col-sm-3">
                                                      <h4>Student (Poster Presentation)</h4>
                                                      <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            Sep 20, 2018 </mark><span>£300</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            October 14, 2018 </mark><span>£340</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub">
                                                         <p><mark class="visible-xs">Final Call<br>
                                                            October 23, 2018 </mark><span>£380</span> 
                                                         </p>
                                                         <input type="radio" class="selectedplan" data-producttype="final" data-priceval="380" name="reg[]" id="busoption3" value="33839">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reg-sub-main clearfix">
                                                   <div class="col-md-3 col-sm-3">
                                                      <h4>Student Delegate</h4>
                                                      <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            Sep 20, 2018 </mark><span>£160</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            October 14, 2018 </mark><span>£160</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub">
                                                         <p><mark class="visible-xs">Final Call<br>
                                                            October 23, 2018 </mark><span>£160</span> 
                                                         </p>
                                                         <input type="radio" class="selectedplan" data-producttype="final" data-priceval="160" name="reg[]" id="busoption3" value="33840">
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="reg-sub-main clearfix">
                                                   <div class="col-md-3 col-sm-3">
                                                      <h4>Student Delegate (Without food)</h4>
                                                      <label class="btn btn-danger"><input type="checkbox" name="reg[]" id="busmoption1" class="btnselectbusn"><span class="regselect">Select</span></label>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            Sep 20, 2018 </mark><span>£100</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            October 14, 2018 </mark><span>£100</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub">
                                                         <p><mark class="visible-xs">Final Call<br>
                                                            October 23, 2018 </mark><span>£100</span> 
                                                         </p>
                                                         <input type="radio" class="selectedplan" data-producttype="final" data-priceval="100" name="reg[]" id="busoption3" value="33841">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <div class="reg-type e-poster">
                                                <h3 class="text-center">E-Poster</h3>
                                                <div class="time clearfix hidden-xs hidden-xs">
                                                   <div class="col-md-offset-3 col-sm-offset-3 col-md-3 col-sm-3">
                                                      On/Before<br>
                                                      Sep 20, 2018 
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      On/Before<br>
                                                      October 14, 2018 
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      Final Call<br>
                                                      October 23, 2018 
                                                   </div>
                                                </div>
                                                <div class="reg-sub-main clearfix">
                                                   <div class="col-md-3 col-sm-3">
                                                      <h4>E Poster</h4>
                                                      <label class="btn btn-danger eposterbtn"><input type="checkbox" name="reg[]" id="epoption1" class="btnselectepst"><span class="eposterselect">Select</span></label>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            Sep 20, 2018 </mark><span>£99</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub time-over">
                                                         <p><mark class="visible-xs">On/Before<br>
                                                            October 14, 2018 </mark><span>£99</span> 
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="col-md-3 col-sm-3">
                                                      <div class="reg-sub epostercls">
                                                         <p><mark class="visible-xs">Final Call<br>
                                                            October 23, 2018 </mark><span>£99</span> 
                                                         </p>
                                                         <input type="checkbox" data-priceval="99" data-producttype="final" class="selectedplan" name="reg[]" id="e-option3" value="33843">
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
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
                                                            Sep 20, 2018 </mark><span>+ £200</span> 
                                                         </p>
                                                         <div>
                                                            <label class="btn btn-danger">
                                                            <input type="checkbox" name="reg[]" id="option1" disabled class="btnselect btnaddons" data-priceval="200" data-producttype="earlybird" value="33844">
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
                                    <p class="payment-info text-center">Your Total Payment £<span id="totamt">0.00</span> <small class="h6"><span class="text-danger">*</span> All prices are in GBP only.</small></p>
                                    <div class="payment-option clearfix">
                                       <div class="col-md-12">
                                         
                                       </div>
                                       <div class="col-md-12 text-center">
                                          <input name="policy" type="checkbox" required value="1"> I have read and agree with the <a href="#" class="" role="button" data-toggle="modal" data-target="#policy">Terms And Conditions (click here)</a>
                                       </div>
                                       <div class="col-md-12 text-center">
                                          <!--<span style="font-size: 18px; background-color: #e0e0e0;padding: 3px 16px 3px 10px;">You have choosen currency : <b>GBP</b></span>-->
                                       </div>
                                       <div class="col-md-12 submit-button text-center">
                                          <div id="paypal-button-container"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <b><span style="color:red">Note: </span> If the payment is processed through Credit/Debit Card, The Card statement will be shown on the name of Riconferences LLC Ltd or it's subsidiaries iMedPub Ltd or Riconferences LLC Ltd, depending on the currency.</b>
                              </div>
                              <div class="col-md-12">
                                 <b>Here Conferences and Programs are announced to keep update our clients and to bookmark their dates. However, Registrations are not allowed before 12 months of the conference.</b>
                              </div>
                           </div>
                           <input name="products" value="" type="hidden">
                           <input name="productvalues" value="" type="hidden">
                           <input name="sno" value="" type="hidden">
                           <input name="pricetype" value="" type="hidden" id="pricetype" />
                           <input name="MM_insert" value="form1" type="hidden">
                           <input name="affiliationid" type="hidden" value="">
                        </form>
                        <div class="show-special">
                           <section class="make-note">
                              <p class="bg-primary"><i class="fa fa-pencil"></i> <strong>Group Discounts</strong>: 3 or more members from the same lab/institute/university (or)
                                 anyone who wish to attend multiple Riconferences LLC Ltd Conferences is eligible to get special benefits from Riconferences LLC Ltd <a href="/cdn-cgi/l/email-protection#ceaca7a1afa3abbca7adaf8eafa3abbca7adafa3ababbaa7a0a9bde0a0abba" style="text-decoration:none;" target="_blank"> Please contact us.</a>
                              </p>
                           </section>
                        </div>
                     </section>
                     
                  </article>
               </div>
            </section>
         </div>
      </div>
     
      <footer>
         <style>
            #feedback {
            height: 0;
            position: fixed;
            top: 358px;
            z-index: 99999;
            }
            #feedback div {
            display: inline-block;
            background: #2158b3;
            padding-top: 10px;
            text-align: center;
            color: #fff;
            font-size: 17px;
            font-weight: bold;
            text-decoration: none;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            font-family: arial;
            font-weight: 500;
            padding-left: 12px;
            padding-right: 12px;
            }
            .phonering-alo-phone.phonering-alo-static {
            opacity:.6
            }
            .phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {
            opacity:1
            }
            .phonering-alo-ph-circle {
            width: 320px;
            height: 64px;
            top: -14px;
            left: -34px;
            position: absolute;
            /* background-color: transparent; */
            /* border: 2px solid rgba(0,0,0,1); */
            border: 2px solid #bfebfc 9;
            /* opacity: .1; */
            -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
            animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
            transition: all .5s;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: -1;
            }
            .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
            border-color: #00aff2;
            border-color: #069cd6;
            /* opacity: 6; */
            }
            .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {
            -webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;
            animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important
            }
            .phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {
            border-color:#00aff2;
            opacity:.5
            }
            .phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
            border-color:#75eb50 ;
            border-color:#baf5a7;
            opacity:.5
            }
            .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {
            border-color:#00aff2 ;
            border-color:#bfebfc;
            opacity:.5
            }
            .phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {
            border-color:#ccc;
            opacity:.5
            }
            .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {
            border-color:#75eb50 ;
            opacity:.5
            }
            @-webkit-keyframes phonering-alo-circle-anim {
            0% {
            -webkit-transform:rotate(0) scale(.5) skew(1deg);
            -webkit-opacity:.1
            }
            30% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            -webkit-opacity:.5
            }
            100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            -webkit-opacity:.1
            }
            }
            @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
            }
            50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            opacity:.2
            }
            100% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
            }
            }
            @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
            -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
            10% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
            }
            20% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg)
            }
            30% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
            }
            40% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg)
            }
            50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
            100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
            }
            @-webkit-keyframes fadeInRight {
            0% {
            opacity:0;
            -webkit-transform:translate3d(100%,0,0);
            transform:translate3d(100%,0,0)
            }
            100% {
            opacity:1;
            -webkit-transform:none;
            transform:none
            }
            }
            @keyframes fadeInRight {
            0% {
            opacity:0;
            -webkit-transform:translate3d(100%,0,0);
            transform:translate3d(100%,0,0)
            }
            100% {
            opacity:1;
            -webkit-transform:none;
            transform:none
            }
            }
            @-webkit-keyframes fadeOutRight {
            0% {
            opacity:1
            }
            100% {
            opacity:0;
            -webkit-transform:translate3d(100%,0,0);
            transform:translate3d(100%,0,0)
            }
            }
            @keyframes fadeOutRight {
            0% {
            opacity:1
            }
            100% {
            opacity:0;
            -webkit-transform:translate3d(100%,0,0);
            transform:translate3d(100%,0,0)
            }
            }
            @-webkit-keyframes phonering-alo-circle-anim {
            0% {
            -webkit-transform:rotate(0) scale(.5) skew(1deg);
            transform:rotate(0) scale(.5) skew(1deg);
            opacity:.1
            }
            30% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            transform:rotate(0) scale(.7) skew(1deg);
            opacity:.5
            }
            100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg);
            opacity:.1
            }
            }
            @keyframes phonering-alo-circle-anim {
            0% {
            -webkit-transform:rotate(0) scale(.5) skew(1deg);
            transform:rotate(0) scale(.5) skew(1deg);
            opacity:.1
            }
            30% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            transform:rotate(0) scale(.7) skew(1deg);
            opacity:.5
            }
            100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg);
            opacity:.1
            }
            }
            @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
            }
            50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg);
            opacity:.2
            }
            100% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
            }
            }
            @keyframes phonering-alo-circle-fill-anim {
            0% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
            }
            50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg);
            opacity:.2
            }
            100% {
            -webkit-transform:rotate(0) scale(.7) skew(1deg);
            transform:rotate(0) scale(.7) skew(1deg);
            opacity:.2
            }
            }
            @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg)
            }
            10% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
            transform:rotate(-25deg) scale(1) skew(1deg)
            }
            20% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
            transform:rotate(25deg) scale(1) skew(1deg)
            }
            30% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
            transform:rotate(-25deg) scale(1) skew(1deg)
            }
            40% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
            transform:rotate(25deg) scale(1) skew(1deg)
            }
            50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg)
            }
            100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg)
            }
            }
            @keyframes phonering-alo-circle-img-anim {
            0% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg)
            }
            10% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
            transform:rotate(-25deg) scale(1) skew(1deg)
            }
            20% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
            transform:rotate(25deg) scale(1) skew(1deg)
            }
            30% {
            -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
            transform:rotate(-25deg) scale(1) skew(1deg)
            }
            40% {
            -webkit-transform:rotate(25deg) scale(1) skew(1deg);
            transform:rotate(25deg) scale(1) skew(1deg)
            }
            50% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg)
            }
            100% {
            -webkit-transform:rotate(0) scale(1) skew(1deg);
            transform:rotate(0) scale(1) skew(1deg)
            }
            }
         </style>
         <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="feedback">
            <div class="phonering-alo-ph-circle"></div>
            <div>
               Reach Us 
               <span>
                  <svg xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 485.213 485.212" style="enable-background:new 0 0 485.213 485.212;" xml:space="preserve">
                     <g>
                        <path d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606   c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429   c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657   c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363   c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972   c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806   c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z" fill="#FFFFFF" />
                     </g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                  </svg>
               </span>
               <span>
                  <svg version="1.1" id="Layer_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                     <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
                        S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z" />
                     <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
                        c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
                        c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z" />
                     <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
                        c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
                        c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
                        c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
                        c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
                        l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945" />
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                     <g></g>
                  </svg>
               </span>
               &nbsp;&nbsp;7026023884
            </div>
         </div>
         </div>
                                            
                     <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
                        $(document).ready(function(){
                            
                            var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            
                            $('#submitbtn').click(function(event){
                                event.preventDefault();
                                var postData = {
                                    'conference_name'   : $("#conference_name").val(),
                                    'conference_url'    : $("#conference_url").val(),
                                    'conference_email'  : $("#conference_email").val(),
                                    'inputName'         : $("#inputName").val(),
                                    'inputEmail'        : $("#inputEmail").val(),
                                    'inputMobile'       : $("#inputMobile").val(),
                                    'inputCountry'      : $("#Country").val(),
                                    'inputSubject'      : $("#inputSubject").val(),
                                    'inputMessage'      : $("#inputMessage").val(),
                                    'confId'            : $("#confId").val(),
                                    'country'           : $("#conference_country").val()
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
                                        url:'https://www.biotechnologycongress.com/america/enquiry.php',
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
                     </script> 
                    


                 
                     <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
                        $(document).ready(function(){
                            
                            var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            
                            $('#purchaseTodayBtn').click(function(event){
                                event.preventDefault();
                                var postData = {
                                    'conference_name'   : $('#purchaseToday input[id=conference_name]').val(),
                                    'conference_url'    : $('#purchaseToday input[id=conference_url]').val(),
                                    'conference_email'  : $('#purchaseToday input[id=conference_email]').val(),
                                    'inputName'         : $('#purchaseToday input[id=inputName]').val(),
                                    'inputEmail'        : $('#purchaseToday input[id=inputEmail]').val(),
                                    'inputMobile'       : $('#purchaseToday input[id=inputMobile]').val(),
                                    'inputCountry'      : $('#purchaseToday select[id=Country]').val(),
                                    'materialType'      : $('#purchaseToday select[id=MaterialType]').val(),
                                    'inputMessage'      : $('#purchaseToday textarea[id=inputMessage]').val(),
                                    'confId'            : $('#purchaseToday input[id=confId]').val(),
                                    'country'           : $('#purchaseToday input[id=conference_country]').val()
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
                                        url:'https://www.biotechnologycongress.com/america/purchase_materials.php',
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
                     </script> 
                     
                     <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
                        $(document).ready(function(){
                            
                            var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            
                            $('#sponsorshipBtn').click(function(event){
                            event.preventDefault();
                            var postData = {
                                'conference_name'   : $('#customisedSponsorship input[id=conference_name]').val(),
                                'conference_url'    : $('#customisedSponsorship input[id=conference_url]').val(),
                                'conference_email'  : $('#customisedSponsorship input[id=conference_email]').val(),
                                'inputName'         : $('#customisedSponsorship input[id=inputName]').val(),
                                'inputEmail'        : $('#customisedSponsorship input[id=inputEmail]').val(),
                                'inputMobile'       : $('#customisedSponsorship input[id=inputMobile]').val(),
                                'inputCountry'      : $('#customisedSponsorship select[id=Country]').val(),
                                'sponsorType'       : $('#customisedSponsorship select[id=SponsorType]').val(),
                                'inputMessage'      : $('#customisedSponsorship textarea[id=inputMessage]').val(),
                                'confId'            : $('#customisedSponsorship input[id=confId]').val(),
                                'country'           : $('#customisedSponsorship input[id=conference_country]').val()
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
                                    url:'https://www.biotechnologycongress.com/america/customised_sponsorship.php',
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
                     </script> 
                    
                     <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
                        $(document).ready(function(){
                            
                            var Emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                            
                            $('#callForWebinars #submitbtn').click(function(event){
                                
                                //var webnorSubmitUrl = "https://www.Riconferences.com/usa-meetings/webinarsFormSubmission";
                                var webnorDownloadUrl = "https://www.Riconferences.com/vaccines-meetings/america/call-for-webinars";
                                
                                event.preventDefault();
                                
                                var postData = {
                                'form'              : "webinars_download_form",
                                'conference_name'   : $('#callForWebinars input[id=conference_name]').val(),
                                'conference_url'    : $('#callForWebinars input[id=conference_url]').val(),
                                'conference_email'  : $('#callForWebinars input[id=conference_email]').val(),
                                'confId'            : $('#callForWebinars input[id=confId]').val(),
                                'name'              : $("#callForWebinars input[id=inputName]").val(),
                                'email'             : $("#callForWebinars input[id=inputEmail]").val(),
                                'mobile'            : $("#callForWebinars input[id=inputMobile]").val(),
                                'country'           : $("#callForWebinars select[id=WebinarCountry]").val(),
                                'subject'           : $("#callForWebinars input[id=inputSubject]").val(),
                                'message'           : $("#callForWebinars textarea[id=inputMessage]").val()
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
                                        url:'https://www.biotechnologycongress.com/america/webinars_download_formsubmission.php',
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
      </footer>
      <p>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" type="1cdb2fa11e58a029a568a4ce-text/javascript"></script>
         <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
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
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js" type="1cdb2fa11e58a029a568a4ce-text/javascript"></script>
         <script src="https://s3-ap-southeast-1.amazonaws.com/confassets/cs/js/countrypicker.js" type="1cdb2fa11e58a029a568a4ce-text/javascript"></script>

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
         <script type="1cdb2fa11e58a029a568a4ce-text/javascript" src="https://d2cax41o7ahm5l.cloudfront.net/cs/js/scripts.min.js"></script>
      </p>
      <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
         (function () {
             var options = {
                 whatsapp: "7026023884", // WhatsApp number
                 call: "7026023884", // Call phone number
                 call_to_action: "whatsapp or Call Us", // Call to action
                 button_color: "#129BF4", // Color of button
                 position: "left", // Position may be 'right' or 'left'
                 order: "whatsapp,call", // Order of buttons
             };
             var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
             var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
             s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
             var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
         })();
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
         
      </style>
      <script type="1cdb2fa11e58a029a568a4ce-text/javascript">
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
      <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/2448a7bd/cloudflare-static/rocket-loader.min.js" data-cf-nonce="1cdb2fa11e58a029a568a4ce-" defer=""></script>
      
      
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

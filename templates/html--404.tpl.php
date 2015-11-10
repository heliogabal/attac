<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Seite nicht gefunden - 404</title>
  <style>
    body { text-align: center;}
    h1 { font-size: 50px; text-align: center }
    body { font: 20px Ubuntu, Arial, sans-serif; color: #999; text-shadow: 2px 2px 2px rgba(200, 200, 200, 0.5); }
    article {display:block; text-align: left; width: 640px; margin: 0 auto; }
    a { color: rgb(36, 109, 56); text-decoration:none; }
    a:hover { color: rgb(96, 73, 141) ; text-shadow: 2px 2px 2px rgba(36, 109, 56, 0.5); }
  </style>
</head>
<body>
    <div class="logo">
       <a href="/" title="Startseite" rel="home">
         <img src="http://attacberlin.de/sites/all/themes/attac/img/attacberlin_logo.png" class="logo-img" alt="Startseite">
       </a>
    </div>
<article>

   <h1>Ups, Seite nicht gefunden - 404</h1>

    <h2>
      Das tut uns leid.
    </h2>

    <p>Wir konnten die gewünschte Seite leider nicht finden</p>

<script type="text/javaScript">

<!--

// let's see what they were searching for ...

var strReferrer=document.referrer.toLowerCase();

if (location.href.indexOf("noreferrer=true")>=0) strReferrer="";



if (strReferrer.length==0)

	{

	//not referred from anything at all, apparently!

	var str='';

	str+='Vielleicht können wir aber dennoch weiter helfen:</p>';

	str+='<p><a href="/" title="Zur Homepage von Attac Berlin">Home Page<\/a>  ';

	str+='<a href="/sitemap.xml" title="Komplette Sitemap von Attac Berlin ansehen">Site Map<\/a><\/p>';

	str+='<hr \/>';

	str+='<p><strong>Es kann unterschiedliche Gründe haben, warum die Seite nicht gefunden werden konnte:<\/strong><\/p>';

	str+='<ol type="a">';

	str+='  <li>Ein <strong>veraltetes Lesezeichen<\/strong><\/li>';

	str+='  <li>Eine Suchmaschine hat einen <strong>veralteten Eintrag von unserer Seite</strong><\/li>';

	str+='  <li>Ein <strong>Tippfehler</strong><\/li>';

	str+='<\/ol>';

	document.write(str);

}

var blnSearchReferral = false;

var blnInsiteReferral = false;

var strSite = "";

if (strReferrer.length!=0)

//we have been referred to this page some another web page ...

	{

	if (

		(strReferrer.indexOf(".looksmart.co")>0)||

		(strReferrer.indexOf(".ifind.freeserve")>0)||

		(strReferrer.indexOf(".ask.co")>0)||

		(strReferrer.indexOf("google.co")>0)||

		(strReferrer.indexOf("altavista.co")>0)||

		(strReferrer.indexOf("msn.co")>0)||

		(strReferrer.indexOf("yahoo.co")>0)

		)

		{

		//we have been referred to from a known search engine

		

		blnSearchReferral=true;

		var arrSite=strReferrer.split("/");

		var arrParams=strReferrer.split("?");

		var strSearchTerms = arrParams[1];

		arrParams=strSearchTerms.split("&");

		

		strSite=arrSite[2];

		var sQryStr="";

		

		//define what search terms are in use

		var arrQueryStrings = new Array();

		arrQueryStrings[0]="q=";	//google, altavista, msn

		arrQueryStrings[1]="p=";	//yahoo

		arrQueryStrings[2]="ask=";	//ask jeeves

		arrQueryStrings[3]="key=";	//looksmart

		

		for (i=0;i<arrParams.length;i++)

		//loop through all the parameters in the referring page's URL

			{

			for (q=0;q<arrQueryStrings.length;q++)

				{

				sQryStr = arrQueryStrings[q];

				if (arrParams[i].indexOf(sQryStr)==0)

					{//we've found a search term!

					strSearchTerms = arrParams[i];

					strSearchTerms = strSearchTerms.split(sQryStr);

					strSearchTerms = strSearchTerms[1];

					strSearchTerms = strSearchTerms.replace("+", " ");

					}

				}

			}

		document.write ("<p>Sie haben nach <strong><a href='" + strReferrer + "' target='_blank'>" + strSite + "</a></strong> for \"<strong>" + strSearchTerms + "</strong>\" gesucht. Allerdings scheint der Suchindex veraltet zu sein.</p><h2>Aber noch ist nicht alles verloren!</h2><p>Wir hoffen, folgende Seiten können Ihnen weiter helfen:</p>");

		//--------------------------------------------------------------

		// edit and repeat for all pages you want to match to the search phrases found

		if (

		(strSearchTerms.indexOf("ag")>=0)||
		(strSearchTerms.indexOf("büro")>=0)

		)

			{

			document.write("<a href='http://attacberlin.de/node/84'>Arbeitsgruppen von Attac Berlin</a><br />");

			document.write("<a href='http://attacberlin.de/node/92'>Büro von Attac Berlin</a><br />");

			}

		//--------------------------------------------------------------

		}//end of section dealing with referral from known search engine





	}

//-->

</script>

Sie können unsere Suchfunktion nutzen, um das gewünschte vielleicht doch noch zu finden: 

<a href="http://attacberlin.de/suche" title="Attac Berlin durchsuchen">Suchen</a>

<noscript>

<p><strong>Es kann unterschiedliche Gründe haben, warum die Seite nicht gefunden werden konnte:<\/strong><\/p>

<ol type="a">

  <li>Ein <strong>veraltetes Lesezeichen<\/strong></li>

  <li>Eine Suchmaschine hat einen <strong>veralteten Eintrag von unserer Seite</strong></li>

  <li>Ein <strong>Tippfehler</strong></li>

</ol>

<p><strong>Please try one of the following pages:</strong></p>

<p>

<ul>
<li><a href="/" title="Go to the home page of widgets.com">Home Page</a></li>

<li><a href="/site-map.php" title="View the complete site map for widgets.com">Site Map</a></li>
</ul>
</p>

</noscript>

</body>

</html>

</article>
</body>
</html>

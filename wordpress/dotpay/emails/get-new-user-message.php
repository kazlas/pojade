<?php


function get_new_user_message ($login, $password) {
	$message = "
<html>

<head>
<meta http-equiv=Content-Type content='text/html; charset=UTF-8'>
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:'Microsoft Tai Le';
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:'Calibri','sans-serif';}
h1
	{mso-style-link:'Heading 1 Char';
	margin-top:24.0pt;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	page-break-after:avoid;
	font-size:14.0pt;
	font-family:'Cambria','serif';
	color:#365F91;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-link:'Body Text Char';
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	line-height:115%;
	font-size:11.0pt;
	font-family:'Calibri','sans-serif';}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
span.Heading1Char
	{mso-style-name:'Heading 1 Char';
	mso-style-link:'Heading 1';
	font-family:'Cambria','serif';
	color:#365F91;
	font-weight:bold;}
span.BodyTextChar
	{mso-style-name:'Body Text Char';
	mso-style-link:'Body Text';}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:70.85pt 70.85pt 2.0cm 70.85pt;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=DE link=blue vlink=purple>

<div class=WordSection1>

<p class=MsoNormal style='background:#365F91'><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>Serdecznie witamy w gronie Czytelników <a
href='http://pojade.com.pl/'>pojade.com.pl</a>!</span></p>

<p class=MsoNormal><span lang=PL>Z radością informujemy, że odnotowaliśmy właśnie Twoją pierwszą wpłatę za opis podróży na portalu pojade.com.pl.</span></p>

<p class=MsoNormal><span lang=PL>System utworzył właśnie Twoje konto i wygenerował hasło. </span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>Aby zalogować się i czytać pełne wersje zakupionych opowiadań - wprowadź:</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:white;border-collapse:collapse;border:none'>
 <tr>
  <td width=310 valign=top style='width:186.0pt;border:solid windowtext 1.0pt;
  background:#1F497D;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=PL style='color:white'>Nazwa użytownika: </span></b></p>
  </td>
  <td width=486 valign=top style='width:291.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=PL>" 

. $login .

"</span></p>
  </td>
 </tr>
 <tr>
  <td width=310 valign=top style='width:186.0pt;border:solid windowtext 1.0pt;
  border-top:none;background:#1F497D;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=PL style='color:white'>Hasło: </span></b></p>
  </td>
  <td width=486 valign=top style='width:291.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span lang=PL>"

 . $password . 

"</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>Hasło możesz zmienić w Ustawieniach.</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>Ufamy, że czytelnicza podróż, w którą właśnie wyruszasz, dostarczy Ci nowej wiedzy, dobrej dawki emocji i świeżej energii do planowania własnych podróży. </span></p>

<p class=MsoNormal><span lang=PL>Mamy nadzieję, że zostaniesz z nami na dłużej – Twoje konto i hasło umożliwi Ci dostęp do kolejnego
<a href='http://pojade.com.pl/jak-czytac-dalej/#lista'>opowiadania naszej listy</a>,
jeśli zdecydujesz się na jego zakup.</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>W przypadku jakichkolwiek pytań napisz do nas na adres <a href='mailto:redakcja@pojade.com.pl'>redakcja@pojade.com.pl</a></span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>Z poważaniem,</span></p>

<p class=MsoNormal><span lang=PL>Redakcja Portalu pojade.com.pl</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal style='background:#365F91'><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

<p class=MsoNormal><span lang=PL>&nbsp;</span></p>

</div>

</body>

</html>
";

return $message;

}

?>
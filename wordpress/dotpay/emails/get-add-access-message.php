<?php

  function get_add_access_message ($addedAccessName) {

$message = "
<html>
<head>
<style>
<!-- /* Font Definitions */
@font-face {
	font-family: Cambria;
	panose-1: 2 4 5 3 5 4 6 3 2 4;
	mso-font-charset: 0;
	mso-generic-font-family: roman;
	mso-font-pitch: variable;
	mso-font-signature: -536870145 1073743103 0 0 415 0;
}

@font-face {
	font-family: Calibri;
	panose-1: 2 15 5 2 2 2 4 3 2 4;
	mso-font-charset: 0;
	mso-generic-font-family: swiss;
	mso-font-pitch: variable;
	mso-font-signature: -536870145 1073786111 1 0 415 0;
}
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal {
	mso-style-unhide: no;
	mso-style-qformat: yes;
	mso-style-parent: '';
	margin-top: 0cm;
	margin-right: 0cm;
	margin-bottom: 10.0pt;
	margin-left: 0cm;
	line-height: 115%;
	mso-pagination: widow-orphan;
	font-size: 11.0pt;
	font-family: 'Calibri', 'sans-serif';
	mso-fareast-font-family: 'Times New Roman';
	mso-fareast-theme-font: minor-fareast;
	mso-bidi-font-family: 'Times New Roman';
}

h1 {
	mso-style-priority: 9;
	mso-style-unhide: no;
	mso-style-qformat: yes;
	mso-style-link: 'Heading 1 Char';
	margin-top: 24.0pt;
	margin-right: 0cm;
	margin-bottom: 0cm;
	margin-left: 0cm;
	margin-bottom: .0001pt;
	line-height: 115%;
	mso-pagination: widow-orphan;
	page-break-after: avoid;
	mso-outline-level: 1;
	font-size: 14.0pt;
	font-family: 'Cambria', 'serif';
	mso-fareast-font-family: 'Times New Roman';
	mso-fareast-theme-font: minor-fareast;
	color: #365F91;
}

p.MsoBodyText, li.MsoBodyText, div.MsoBodyText {
	mso-style-noshow: yes;
	mso-style-priority: 99;
	mso-style-link: 'Body Text Char';
	margin-top: 0cm;
	margin-right: 0cm;
	margin-bottom: 6.0pt;
	margin-left: 0cm;
	line-height: 115%;
	mso-pagination: widow-orphan;
	font-size: 11.0pt;
	font-family: 'Calibri', 'sans-serif';
	mso-fareast-font-family: 'Times New Roman';
	mso-fareast-theme-font: minor-fareast;
	mso-bidi-font-family: 'Times New Roman';
}

a:link, span.MsoHyperlink {
	mso-style-noshow: yes;
	mso-style-priority: 99;
	color: blue;
	text-decoration: underline;
	text-underline: single;
}

a:visited, span.MsoHyperlinkFollowed {
	mso-style-noshow: yes;
	mso-style-priority: 99;
	color: purple;
	text-decoration: underline;
	text-underline: single;
}

span.Heading1Char {
	mso-style-name: 'Heading 1 Char';
	mso-style-priority: 9;
	mso-style-unhide: no;
	mso-style-locked: yes;
	mso-style-link: 'Heading 1';
	font-family: 'Cambria', 'serif';
	mso-ascii-font-family: Cambria;
	mso-hansi-font-family: Cambria;
	color: #365F91;
	font-weight: bold;
}

span.BodyTextChar {
	mso-style-name: 'Body Text Char';
	mso-style-noshow: yes;
	mso-style-priority: 99;
	mso-style-unhide: no;
	mso-style-locked: yes;
	mso-style-link: 'Body Text';
}

p.msopapdefault, li.msopapdefault, div.msopapdefault {
	mso-style-name: msopapdefault;
	mso-style-unhide: no;
	mso-margin-top-alt: auto;
	margin-right: 0cm;
	margin-bottom: 10.0pt;
	margin-left: 0cm;
	line-height: 115%;
	mso-pagination: widow-orphan;
	font-size: 12.0pt;
	font-family: 'Times New Roman', 'serif';
	mso-fareast-font-family: 'Times New Roman';
	mso-fareast-theme-font: minor-fareast;
}

span.apple-converted-space {
	mso-style-name: apple-converted-space;
	mso-style-unhide: no;
}

.MsoChpDefault {
	mso-style-type: export-only;
	mso-default-props: yes;
	font-size: 10.0pt;
	mso-ansi-font-size: 10.0pt;
	mso-bidi-font-size: 10.0pt;
}

.MsoPapDefault {
	mso-style-type: export-only;
	margin-bottom: 10.0pt;
	line-height: 115%;
}

@page WordSection1 {
	size: 612.0pt 792.0pt;
	margin: 70.85pt 70.85pt 2.0cm 70.85pt;
	mso-header-margin: 35.4pt;
	mso-footer-margin: 35.4pt;
	mso-paper-source: 0;
}

div.WordSection1 {
	page: WordSection1;
}
-->
</style>
</head>

<body lang=DE link=blue vlink=purple style='tab-interval: 35.4pt'>

	<div class=WordSection1>

		<p class=MsoNormal style='background: #365F91'>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>Serdecznie dziękujemy za zakup opisu podróży na <a
				href='http://pojade.com.pl/'>pojade.com.pl</a>!<o:p></o:p>
			</span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>Z radością informujemy, że odnotowaliśmy właśnie Twoją wpłatę za opis podróży na portalu pojade.com.pl.<o:p></o:p>
			</span>
		</p>

		<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
		 style='background:white;border-collapse:collapse;border:none'>
		 <tr>
		  <td width=310 valign=top style='width:186.0pt;border:solid windowtext 1.0pt;
		  background:#1F497D;padding:0cm 5.4pt 0cm 5.4pt'>
		  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		  normal'><b><span lang=PL style='color:white'>Opowiadanie: </span></b></p>
		  </td>
		  <td width=486 valign=top style='width:291.3pt;border:solid windowtext 1.0pt;
		  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
		  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
		  normal'><span lang=PL>" 

. $addedAccessName . 

"</span></p>
		  </td>
		 </tr>
		 </table>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'><o:p>&nbsp;</o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>Aby zalogować się i czytać pełne wersje zakupionych opowiadań użyj swojego konta, do którego hasło przesłaliśmy osobną wiadomością e-mail.<o:p></o:p>
			</span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'><o:p>&nbsp;</o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>Pozostałe opowiadania znajdziesz na portalu - zerknij tam czasem, bo planujemy dodać kolejne <span style='color: black'><span
					class=apple-converted-space>&nbsp;</span></span>
			</span></span><a href='http://pojade.com.pl/jak-czytac-dalej/#lista'
				style='font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; word-spacing: 0px'><span
				lang=PL style='mso-ansi-language: PL'>opowiadania do naszej
					listy</span></a><span class=apple-converted-space><span lang=PL
				style='color: black; mso-ansi-language: PL'><span
					style='font-variant-ligatures: normal; font-variant-caps: normal; orphans: 2; text-align: start; widows: 2; -webkit-text-stroke-width: 0px; float: none; word-spacing: 0px'>.</span></span><span
				lang=PL style='mso-ansi-language: PL'><o:p></o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'><o:p>&nbsp;</o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>W przypadku jakichkolwiek pytań napisz do nas na adres <a
				href='mailto:redakcja@pojade.com.pl'>redakcja@pojade.com.pl</a>
			<o:p></o:p>
			</span>
		</p>
		
		<p class=MsoNormal><span lang=PL>&nbsp;</span></p>
		
		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;Z
				poważaniem,<o:p></o:p>
			</span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>Redakcja Portalu
				pojade.com.pl<o:p></o:p>
			</span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

		<p class=MsoNormal style='background: #365F91'>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

		<p class=MsoNormal>
			<span lang=PL style='mso-ansi-language: PL'>&nbsp;<o:p></o:p></span>
		</p>

	</div>

</body>

</html>
";
return $message;

}

?>
<html><!-- #BeginTemplate "/Templates/SFQ_Page_template.dwt" --><!-- DW6 -->
<head>
<!-- #BeginEditable "doctitle" --> 
<title>SFQ Cardwell, Missouri Cemetery Web Project</title>
<!-- #EndEditable --> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="keywords"
content="Summitt, Summit, Sammet, Summet, Spotswood, Frie, Family History, Genealogy, Summitt Family Quarterly, Summitt New Media, Paul M. Summitt, Mary J. Summitt">
</head>

<body bgcolor="#FFFFFF" background="../_themes/tmres/researchbg.gif" onLoad="">
<p align="center"><a href="../index.php"><img src="../_themes/tmres/researchbanner.gif" width="600" height="60" name="sfqbanner" alt="The Summitt Family Quarterly" border="0"></a></p>
<table width="100%" border="0" cellpadding="5" cellspacing="5">
  <tr> 
    <td width="15%" rowspan="3" valign="top" align="center"><table width="94%"  border="2" cellspacing="2" cellpadding="2">
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../index.htm">HOME</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="http://www.summittfamilyquarterly.com" target="_blank">Previous Issues</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="http://www.summittfamilyonline.com" target="_blank">Summitt Family Online</a> </font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../genlinks.php">Links &amp; Resources</a> </font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../SpecialPages.php">Special Pages</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../obitlist.php">Obituaries</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../VirtualCemetery2.php">Virtual Cemetery</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="Cemetery1.php">Cardwell Cemetary Project</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../bdcalc.php">Birthday Calculator</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../blog/blog.htm" target="_blank">Paul's Blog</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif"><a href="../privacy.php">Privacy Policy</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="Arial, Helvetica, sans-serif">Join the <a target="_blank" href="http://communities.msn.com/SummittResearch/"> Summitt Research Community</a></font></strong></h5>
          </div></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF"><div align="center">
            <h5><strong><font face="century gothic, Arial, Helvetica"> 
        <script language="Javascript" src="http://map.geoup.com/geoup?template=welcome"></script>
        </font></strong></h5>
            </div></td>
        </tr>
      </table>
    </td>
    <td width="70%" height="42"><!-- #BeginEditable "pagetitle" -->
      <h1>SFQ Cardwell Missouri Cemetery Web Project</h1>
      <!-- #EndEditable --></td>
    <td width="15%" rowspan="3" align="center" valign="top"><A href="http://go.footnote.com/freetrial-family-history.php?xid=19&kbid=1333&img=120x600_Download1.gif">
<img src="http://www.footnote.com/i/affimg/120x600_Download1.gif" border=0></a>
  </tr>
  <tr> 
    <td width="70%" height="89"><!-- #BeginEditable "content" -->
      <h2>This page returns all entries in this database.</h2>
      <!-- #EndEditable --></td>
  </tr>
  <tr>
    <td width="70%"><!-- #BeginEditable "content2" -->
	<?php
	// set the variables for the database access
	$Host = "mysql5-24.wc1";
	$user = "358271_SFQStoreU";
	$password = "Buymenow";
	$DBName = "358271_SFQStore";
	$TableName = "cardwell_mo_cemetary";

	$Link = mysql_connect($Host, $user, $password);
	mysql_select_db($DBName);

	$Query = "SELECT * from $TableName";
	#$Result = mysql_db_query ($DBName, $Query, $Link);
	$Result = mysql_query($Query);
	// Create a table
	print ("<TABLE BORDER=1 WIDTH=\"100%\" CELLSPACING=2 CELLPADDING=2 ALIGN=CENTER>\n");
	print ("<TR ALIGN=CENTER VALIGN=TOP>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Section</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Row</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Plot</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Prefix</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>First Name</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Middle Name</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Last Name</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Suffix</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>DOB</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>DOD</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Comment</TD>\n");
	print ("<TD ALIGN=CENTER VALIGN=TOP>Picture</TD>\n");
	print ("</TR>\n");

	// fetch the results from the database

	while ($Row = mysql_fetch_array($Result)) {
	
		print ("<TR ALIGN=CENTER VALIGN=TOP>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Section]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Row]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Plot]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Prefix]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[First_Name]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Middle_Name]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Last_Name]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Suffix]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[DOB]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[DOD]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Comment]</TD>\n");
		print ("<TD ALIGN=CENTER VALIGN=TOP>$Row[Picture]</TD>\n");
		print ("<TR>\n");

	}

	mysql_close ($Link);
	print ("</TABLE>\n");
	?>

	<!-- #EndEditable --></td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td> 
      <hr>      <h5 align="center">For more information, contact <a href="mailto:psummitt@summittnewmedia.com">Webmaster</a>.<br>
        � 1995-2008 Summitt New Media. All rights reserved. </h5>
      <p align="center">&nbsp;</p></td>
  </tr>
  <!--msnavigation-->
</table>
</body>
<!-- #EndTemplate --></html>

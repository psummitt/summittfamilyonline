<?
Print("Does my host have PHP, and if so, what version?<BR>");
printf("Your host is running PHP version %s" , phpversion(), "<BR>");
?>
<? 	$txtURL = "http://www.summittnewmedia.com/Paul/<BR><BR>";
	$txtName = "Paul M. Summitt<BR>";
	Print("<BR>This site belongs to ");
	Print($txtName);
	Print("<BR>His personal Web site is located at ");
	Print($txtURL)
?>
<? phpinfo(); ?>
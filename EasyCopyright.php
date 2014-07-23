<?php
/*
#EasyCopyright#

##About##


* By Cameron Gilroy
* EasyCopyright
* Version: 1.1.1
* Based in part on Copyright by AMDbuilder
* Creator: Cameron Gilroy http://www.camerongilroy.com
* Support URL: http://www.camerongilroy.com/
* GitHub: http://github.com/camgill/EasyCopyright

EasyCopyright is a simple snippet for ModX Revolution that inserts the the current year and the site name. Check the example below.

*© +CameronGilroy.com+ 2009-2011 - Powered by +MODx+*

###Thanks###

A big thank you goes to the creators of MODx Revolution!  
[dflock](https://github.com/dflock/ "dflock"): Thanks for the new features added to 1.1!

###Usage###

<code>[[!EasyCopyright]]</code> - Outputs *© [[Your Site name here]] 2011 - Powered by MODx*  
<code>[[!EasyCopyright? &StartYear=`2009`]]</code> - Outputs *© [[Your Site name here]] 2009-2011 - Powered by MODx*


##Configuration##

The variables that are available are listed below with a description.
You can also call the contents of a chunk into any of these fields like this <code>[[!EasyCopyright? &Powered=`[[$Your_Chunk_Name]]`]]</code>

* Name - Your site name
* Start Year - What ever you put in!
* Powered - is the link to the ModX site
* YearSeparator - is the separator that goes between the Start Year and the current year
* PoweredBySeparator - is the separator that goes between the current Year and Powered by

###Defaults###

* Name - Your site name
* Start Year - No Default must be called in the snippet
* Powered - is the link to the ModX site
* YearSeparator - "-"
* PoweredBySeparator - "-"
*/

$Name = isset($Name)? $Name : $modx->getOption('name',$scriptProperties,'[[++site_name]]');

$PoweredBySeparator = isset($PoweredBySeparator)? $PoweredBySeparator : "-";
$Powered = isset($Powered)? $Powered : "Powered by <a href='http://www.modxcms.com'>MODx</a>";

if ($PoweredBy != 'false') {

	$PoweredBy = " ".$PoweredBySeparator." ".$Powered;

} else {
	$PoweredBy = "";
}

$YearSeparator = isset($YearSeparator)? $YearSeparator : "-";
$cYear = date("Y");
$StartYear = isset($StartYear)? $StartYear : $cYear;
$years = ($cYear > $StartYear) ? $StartYear.$YearSeparator.$cYear : $cYear;

return "&copy; $Name $years$PoweredBy";
?>

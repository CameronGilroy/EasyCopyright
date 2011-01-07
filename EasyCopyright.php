<?php
/*
  h1. EasyCopyright
  
  h3. About
  
  * By Cameron Gilroy
  * EasyCopyright
  * Version: 1.1
  * Based in part on Copyright by AMDbuilder
  * Creator: Cameron Gilroy http://www.camerongilroy.com
  * Support URL: http://www.camerongilroy.com/
  * GitHub: http://github.com/camgill/EasyCopyright
  
  EasyCopyright is a simple snippet for ModX Revolution that inserts the the current year and the site name. Check the example below.
  
  ??© +CameronGilroy.com+ 2009-2010 - Powered by +MODx+??
  
  h3. Usage
  
  @[[EasyCopyright]]@ - Outputs ??© +[[Your Site name here]]+ 2010 - Powered by +MODx+??
  @[[EasyCopyright? &StartYear=`2009`]]@ - Outputs ??© +[[Your Site name here]]+ 2009-2010 - Powered by +MODx+??
  
  
  h2. Configuration
  
  The variables that are available are listed below with a description.
  You can also call the contents of a chunk into any of these fields like this @[[EasyCopyright? &Powered=`[[$Your_Chunk_Name]]`]]@
  
  * Name - Your site name
  * Start Year - What ever you put in!
  * Powered - is the link to the ModX site
  * YearSeparator - is the separator that goes between the Start Year and the current year
  * PoweredBySeparator - is the separator that goes between the current Year and Powered by
  
  h3. Defaults
  
  * Name - Your site name
  * Start Year - No Default must be called in the snippet
  * Powered - is the link to the ModX site
  * YearSeparator - "-"
  * PoweredBySeparator - "-"

*/

$Name = isset($Name)? $Name : "[[++site_name]]";
$Powered = isset($Powered)? $Powered : "Powered by <a href='http://www.modxcms.com'>MODx</a>";
$YearSeparator = isset($YearSeparator)? $YearSeparator : "-";
$PoweredBySeparator = isset($PoweredBySeparator)? $PoweredBySeparator : "-";
$cYear = date("Y");
$StartYear = isset($StartYear)? $StartYear : $cYear;
$years = ($cYear > $StartYear) ? $StartYear.$YearSeparator.$cYear : $cYear;

echo "&copy; $Name $years &nbsp;$PoweredBySeparator&nbsp; $Powered";
?>

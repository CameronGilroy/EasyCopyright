<?php
/*
  Easy Copyright
  Version: 1.0
  Based in part on Copyright by AMDbuilder
  Creator: Cameron Gilroy http://www.camerongilroy.com
  Support URL: http://www.camerongilroy.com/

  Version History:
  1.0 - 30 July 2010 - Cameron Gilroy

  Usage:
  [[EasyCopyright]] - Outputs "© [[Your Site name here]] 2010 - Powered by MODx"
  [[EasyCopyright?StartYear=`2009`]] - Outputs "© [[Your Site name here]] 2009-2010 - Powered by MODx"

  If the start year and current year are the same the output will be current year only.

*/

$Name = isset($Name)? $Name : "[[++site_name]]";
$Powered = isset($Powered)? $Powered : "Powered by <a href='http://www.modxcms.com'>MODx</a>";
$Separator = isset($Separator)? $Separator : "-";
$cYear = date("Y");
$StartYear = isset($StartYear)? $StartYear : $cYear;
$years = ($cYear > $StartYear) ? $StartYear.$Separator.$cYear : $cYear;

echo "&copy; $Name $years &nbsp;$Separator&nbsp; $Powered";
?>
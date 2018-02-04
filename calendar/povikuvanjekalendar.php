<?php

$myCalendar = new tc_calendar("date2");
$myCalendar->setIcon("calendar/images/iconCalendar.gif");
$myCalendar->setDate(date('d'), date('m'), 2040); //date('Y')
$myCalendar->setPath("calendar/");
$myCalendar->setYearInterval(2013, 2015); //$myCalendar->setYearInterval(1970, 2020);
$myCalendar->dateAllow('2008-05-13', '2015-03-01', false);
$myCalendar->startMonday(true);
// $myCalendar->autoSubmit(true, "", "test.php");
// $myCalendar->autoSubmit(true, "form1");
// $myCalendar->disabledDay("Sat");
//  $myCalendar->disabledDay("sun");
$myCalendar->showWeeks(true);
// $myCalendar->rtl = true;
$myCalendar->writeScript();
?>
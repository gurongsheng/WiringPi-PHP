<?php

require_once 'pcd8544.class.php';

// check wiringPi setup
if (wiringPiSetup() == -1)
{
        printf("wiringPi-Error\n");
            exit(1);
}

// pin setup
$_din = 12;
$_sclk = 14;
$_dc = 4;
$_rst = 5;
$_cs = 10;

// lcd contrast 
$contrast = 50;

$lcd = new pcd8544;

$lcd->LCDNew($pcd);

// init and clear lcd
$lcd->LCDInit($pcd, $_sclk, $_din, $_dc, $_cs, $_rst, $contrast);
$lcd->LCDclear($pcd);

// show logo
$lcd->LCDshowLogo($pcd);

delay(2000);

$lcd->LCDclear($pcd);
$lcd->LCDdrawchar($pcd,0, 0, "0");
$lcd->LCDdrawstring($pcd,0, 0, "hello eYou");
$lcd->LCDdrawline($pcd, 0, 10, 83, 10, BLACK);
$lcd->LCDdisplay($pcd);

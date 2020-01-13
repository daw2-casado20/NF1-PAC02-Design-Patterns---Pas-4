<?php
require_once("observable.php");
require_once("abstract_widget.php");

$dat = new DataSource();
$widgetA = new BasicWidget();
$widgetB = new FancyWidget();

$dat->addObserver($widgetA);
$dat->addObserver($widgetB);

$dat->addRecord("drum", "$12.95", 1955, "red", "spain");
$dat->addRecord("guitar", "$13.95", 2003, "red", "spain");
$dat->addRecord("banjo", "$100.95", 1945, "red", "spain");
$dat->addRecord("piano", "$120.95", 1999, "red", "spain");

$widgetA->draw();
$widgetB->draw();

//

$dat2 = new DataSource();
$widgetC = new AdriWidget();
$widgetE = new AdriWidget2();

$dat2->addObserver($widgetC);
$dat2->addObserver($widgetE);

$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);
$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);
$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);
$dat2->addRecord("Antonio", "Pedrosa", "España", "Badalona", 15);

$widgetC->draw();
$widgetE->draw();
?>

<?php

require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('1001')
        ->addColumn('Asfak')
        ->addColumn('asfak@gmail.com')
    ->addRow()
        ->addColumn('1002')
        ->addColumn('Abulkaish')
        ->addColumn('ansari@gmail.com')
    ->addRow()
        ->addColumn('1003')
        ->addColumn('Zaiba')
        ->addColumn('zaiba@gmail.com')
		
    ->display()
;

?>
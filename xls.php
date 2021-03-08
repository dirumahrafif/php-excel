<?php 
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

$sheet->setCellValue('A1', 'Nomor');
$sheet->setCellValue('B1', 'Nama Propinsi');

$url = "https://dev.farizdotid.com/api/daerahindonesia/provinsi";
$data = file_get_contents($url);
$array = json_decode($data,true)['provinsi'];

$nomor = 1;
$i = 2;
foreach($array as $k => $v){
    $sheet->setCellValue('A'.$i, $nomor++);
    $sheet->setCellValue('B'.$i, $v['nama']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$sheet->getStyle('A1:B'.$i)->applyFromArray($styleArray);
$sheet->getColumnDimension('B')->setWidth(100);
$sheet->getStyle("A1:B1")->getFont()->setBold( true );

$writer = new Xlsx($spreadsheet);
$filename = 'Data Provinsi XLS';
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'. $filename .'.xls"'); 
header('Cache-Control: max-age=0');
$writer->save('php://output');

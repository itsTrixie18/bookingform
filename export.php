<?php
error_reporting(0); // suppress warnings
require 'vendor/autoload.php';
include 'database/connection.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Column headers
$sheet->setCellValue('A1', 'ID')
      ->setCellValue('B1', 'Full Name')
      ->setCellValue('C1', 'Email')
      ->setCellValue('D1', 'Contact Number')
      ->setCellValue('E1', 'Address')
      ->setCellValue('F1', 'Date');

// Fetch data
$sql = "SELECT * FROM booking_form";
$result = $con->query($sql); // $con matches connection.php

$rowCount = 2;
if($result){
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A'.$rowCount, $row['user_id'])
              ->setCellValue('B'.$rowCount, $row['fullname'])
              ->setCellValue('C'.$rowCount, $row['email'])
              ->setCellValue('D'.$rowCount, $row['contact_no'])
              ->setCellValue('E'.$rowCount, $row['address'])
              ->setCellValue('F'.$rowCount, $row['date']);
        $rowCount++;
    }
}

// Send headers
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="BookingForm.xlsx"');
header('Cache-Control: max-age=0');

// Write Excel
$writer = new Xlsx($spreadsheet);
$writer->save('php://output');
exit;
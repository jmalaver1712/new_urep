<?php

/* INCLUDE CONEXION */
require_once("../php/conexion.php");
require_once("../php/clases.php");

$inscribir = new inscribir();
$data = $inscribir->reporte();

// print_r($data); 

// exit();

/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('America/Bogota');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/../php_excel/PHPExcel.php';



// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Corporacion Universitaria Republicana")
							 ->setLastModifiedBy("Corporacion Universitaria Republicana")
							 ->setTitle("Office 2007 XLSX")
							 ->setSubject("Office 2007 XLSX")
							 ->setDescription("Reporte Usuarios")
							 ->setKeywords("office 2007 openxml")
							 ->setCategory("Test result file");



$x = 1;

$objPHPExcel->setActiveSheetIndex(0)->setCellValue("A".$x,"Nombres");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("B".$x,"Apellidos");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("C".$x,"Email");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("D".$x,"Numero Identidad");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("E".$x,"Celular");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("F".$x,"Programa");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("G".$x,"Desea Informacion");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue("H".$x,"Fecha");

foreach ($data as $registro) {
	$y = 0;
	$x++;
	foreach ($registro as $row) {
		$dato = $row;
		$objPHPExcel->setActiveSheetIndex(0)->setCellValue($letras[$y].$x, $dato);
		$y++;
	}
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Registros_Matricula');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Registros_Matricula.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;

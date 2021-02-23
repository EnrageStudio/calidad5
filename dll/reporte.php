<?php
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
	    $conexion = new mysqli('localhost','admin','*$1r&0Wdb@2oL%*','cread_calidad5db',3306);
		if (mysqli_connect_errno()) {
	    	printf("La conexión con el servidor de base de datos falló: %s\n", mysqli_connect_error());
	    	exit();
		}
		$consulta = "SELECT * FROM wp_comunicaciones;";
		$resultado = $conexion->query($consulta);
		if($resultado->num_rows > 0 ){
			/** Error reporting */
			error_reporting(E_ALL);
			ini_set('display_errors', TRUE);
			ini_set('display_startup_errors', TRUE);
			date_default_timezone_set('Europe/London');

			if (PHP_SAPI == 'cli')
				die('This example should only be run from a Web Browser');

			/** Include PHPExcel */
			require_once dirname(__FILE__) . '/lib/PHPExcel/PHPExcel.php';


			// Create new PHPExcel object
			$objPHPExcel = new PHPExcel();
			$estiloTitulos = array(
			    'font' => array(
			        'bold' => true
			    )
			);

			// Set document properties
			$objPHPExcel->getProperties()->setCreator("UTPL")
										 ->setLastModifiedBy("UTPL")
										 ->setTitle("Reporte de comunicaciones")
										 ->setSubject("Reporte de comunicaciones")
										 ->setDescription("Reporte de comunicaciones")
										 ->setKeywords("Reporte, comunicaciones")
										 ->setCategory("Reporte de comunicaciones");


			$objPHPExcel->setActiveSheetIndex(0)
	        		    ->mergeCells('A1:H1');
			// Add some data
			$objPHPExcel->setActiveSheetIndex(0)
			            ->setCellValue('A1', 'REPORTE DE COMUNICACIONES')
			            ->setCellValue('A2', 'ÁREA TEMÁTICA')
			            ->setCellValue('B2', 'TÍTULO')
			            ->setCellValue('C2', 'AUTOR/ES')
			            ->setCellValue('D2', 'INSTITUCION')
			            ->setCellValue('E2', 'DIRECCIÓN POSTAL')
			            ->setCellValue('F2', 'EMAIL')
			            ->setCellValue('G2', 'RESUMEN')
			            ->setCellValue('H2', 'CURRICULUM');

			// Miscellaneous glyphs, UTF-8
			$i = 3;
			while ($fila = $resultado->fetch_array()) {
				$objPHPExcel->setActiveSheetIndex(0)
	        		    ->setCellValue('A'.$i,$fila['ar_tema'])
	        		    ->setCellValue('B'.$i,$fila['titulo'])
	        		    ->setCellValue('C'.$i,$fila['autor'])
	        		    ->setCellValue('D'.$i,$fila['institucion'])
	        		    ->setCellValue('E'.$i,$fila['direc_postal'])
	        		    ->setCellValue('F'.$i,$fila['email'])
	        		    ->setCellValue('G'.$i,$fila['resumen'])
	        		    ->setCellValue('H'.$i,$fila['curriculum']);
			           $objPHPExcel->getActiveSheet()->getStyle('G'.$i)->getAlignment()->setWrapText(true);
						$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->getAlignment()->setWrapText(true);
						$i++;
			}
			$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(70);
			$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(70);
			for($i = 'A'; $i <= 'F'; $i++){
				$objPHPExcel->setActiveSheetIndex(0)			
					->getColumnDimension($i)->setAutoSize(TRUE);
			}
			
			$objPHPExcel->getActiveSheet()->getStyle('A1')->applyFromArray($estiloTitulos);
			$objPHPExcel->getActiveSheet()->getStyle('A2:H2')->applyFromArray($estiloTitulos);
			// Rename worksheet
			$objPHPExcel->getActiveSheet()->setTitle('Reporte de comunicaciones');


			// Set active sheet index to the first sheet, so Excel opens this as the first sheet
			$objPHPExcel->setActiveSheetIndex(0);


			// Redirect output to a client’s web browser (Excel5)
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="Reporte de comunicaciones.xls"');
			header('Cache-Control: max-age=0');
			// If you're serving to IE 9, then the following may be needed
			header('Cache-Control: max-age=1');

			// If you're serving to IE over SSL, then the following may be needed
			header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
			header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
			header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
			header ('Pragma: public'); // HTTP/1.0

			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
			$objWriter->save('php://output');
			exit;
		}else{
			print_r('No hay resultados para mostrar');
		}

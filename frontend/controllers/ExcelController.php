<?php
namespace frontend\controllers;
use common\components\AppController;
//use PHPExcel;


class ExcelController extends AppController {
    //put your code here
    public function actionTest1(){
        $filePath = "./excel/template.xls";//ระบุไฟล์excel
        $objReader = \PHPExcel_IOFactory::createReader('Excel5');//อ่านไฟล์ 
        $excel = $objReader->load($filePath);
        
        //$excel->getActiveSheet()->setCellValue('B2', 'ข้อมูล');//ตรงนี้ใส่ข้อมูลเป็นdynamic
        $date = date('Y-d-m H:i:s');
        $excel->getActiveSheet()->setCellValue('B2', $date);
        $hosp = 'รพ...';
        $excel->getActiveSheet()->setCellValue('C1', $hosp);
        $excel->getActiveSheet()->setCellValue('D1', '=SUM(C7:C10)');//ใส่สูตรexcel
        //$excel->getActiveSheet()->setCellValue('A'.$i, $hosp); // ลูปค่า $i ได้หากต้องการ 
        
        
        $objWriter = \PHPExcel_IOFactory::createWriter($excel, 'Excel5');//
        $objWriter->save($filePath);
        \Yii::$app->response->sendFile($filePath, "data.xls");//dialog save as เพื่อโหลดไฟล์
        
    }
}

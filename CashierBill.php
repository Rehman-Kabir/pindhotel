<?php

require('fpdf181/fpdf.php');
$mysqli = new mysqli('localhost', 'ahad', '', 'restaurant') or die(mysqli_error($mysqli));


$pdf = new FPDF('P','mm','A5');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 30);
$pdf->cell(128,12, 'PIND HOTEL', 0, 1 ,'C');
$pdf->SetFont('Arial', '', 12);
$pdf->cell(128,4, 'Al Mohsin Group', 0, 1 ,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->cell(128,4, '5Km, Chunian, Illabad Road, District Kasur', 0, 1 ,'C');
$pdf->cell(128,4, '', 0, 1 ,'C');
$pdf->cell(128,4, '', 0, 1 ,'C');
$pdf->cell(50,5,'', 0, 1,'C'); 

$pdf->SetFont('Arial', '', 9);

date_default_timezone_set('Asia/Karachi');
$date = date('d/m/Y', time());
$date2 = date('h:i:s a', time());
$pdf->cell(10,5,'Date : ' , 0, 0,'L'); 
$pdf->cell(37,5,$date , 0, 0,'L'); 
$pdf->cell(10,5,'Time : ' , 0, 0,'L'); 
$pdf->cell(37,5,$date2 , 0, 0,'L');
$inID = $mysqli->query("SELECT * FROM cashierinvoice ORDER BY id DESC LIMIT 1") or die($mysqli->error);
$rowinID = $inID->fetch_array();
$pdf->cell(20,5,'Invoice ID : ' , 0, 0,'L'); 
$pdf->cell(30,5,$rowinID['id'], 0, 1,'L');
$pdf->cell(128,5,'------------------------------------------------------------------------------------------------------------------------', 0, 1,'C');
$id = $rowinID['id'];
$result = $mysqli->query("SELECT * FROM cashierinvoiceitem WHERE invoiceID='$id'") or die($mysqli->error);
$pdf->SetFont('Arial', '', 10);

		    
                    $pdf->cell(8,6, 'Qty', 0, 0 ,'L');
                    $pdf->cell(17,6, 'Item', 0, 0 ,'L');
                    $pdf->cell(25,6, 'Description', 0, 0 ,'L');
                    $pdf->cell(68,6, 'Category', 0, 0,'L');
                    $pdf->cell(12,6, 'Price', 0, 1,'L');               
$c = 1;
		while($row = $result->fetch_assoc()){
            
            $ItemID=$row['ItemID'];
            $itemd = $mysqli->query("SELECT * FROM stockitem WHERE ItemID='$ItemID'") or die($mysqli->error);
                    $item = $itemd->fetch_array(); 
                    $pdf->cell(2,4, '', 0, 1 ,'L');
                    $pdf->cell(3,4, $c, 0, 0 ,'L');
                    $pdf->cell(2,4, '.', 0, 0 ,'L');
                    $pdf->cell(20,4, $item['ItemName'], 0, 0 ,'L');
                    $pdf->cell(30,4, $item['Description'], 0, 0 ,'L');
                    $pdf->cell(20,4, $item['Category'], 0, 1 ,'L');
                    $pdf->cell(50,5, '' , 0, 0 ,'L');
                    $pdf->cell(2,5, '(', 0, 0 ,'L');
                    $pdf->cell(15,5, $row['ItemQuantity'], 0, 0 ,'C');
                    $pdf->cell(2,5, 'x', 0, 0 ,'L');
                    $pdf->cell(15,5, $item['Price'], 0, 0 ,'C');
                    $pdf->cell(2,5, ')', 0, 0 ,'L');
                    $pdf->cell(42,5, $row['Total'], 0, 1 ,'R');
                    $c++;
        }
        $subTot = $mysqli->query("SELECT * FROM cashierinvoice WHERE id='$id'") or die($mysqli->error);
        $subTota = $subTot->fetch_array();
        $pdf->SetFont('Arial', '', 9);
        $pdf->cell(2,4, '', 0, 1 ,'L');
        $pdf->cell(128,5,'------------------------------------------------------------------------------------------------------------------------', 0, 1,'C');
        
        $pdf->SetFont('Arial', '', 15);
        $pdf->cell(75,5, 'Sub Total : ', 0, 0 ,'R');
        $pdf->cell(53,5, $subTota['subTotal'], 0, 1 ,'R');

        $pdf->SetFont('Arial', '', 12);
        
        $pdf->cell(75,4, 'Discount :  ', 0, 0 ,'R');
        $pdf->cell(49,4, $subTota['discount'], 0, 0 ,'R');
        $pdf->cell(4,4, '', 0, 1 ,'R');
        $pdf->SetFont('Arial', '', 9);
        $pdf->cell(128,5,'------------------------------------------------------------------------------------------------------------------------', 0, 1,'C');
        $pdf->SetFont('Arial', '', 20);
        
        $pdf->cell(75,7, 'Net Total : ', 0, 0 ,'R');
        $pdf->cell(53,7, $subTota['netTotal'], 0, 1 ,'R');
        $pdf->SetFont('Arial', '', 11);
        $pdf->cell(75,5, 'Cash :  ', 0, 0 ,'R');
        $pdf->cell(53,5, $subTota['CashAmt'], 0, 1 ,'R');
        $pdf->SetFont('Arial', '', 9);
        $pdf->cell(128,5,'------------------------------------------------------------------------------------------------------------------------', 0, 1,'C');

        $pdf->SetFont('Arial', '', 11);
        $pdf->cell(75,4, 'Balance :   ', 0, 0 ,'R');
        $pdf->cell(53,4, $subTota['ChangeAmt'], 0, 1 ,'R');
        $pdf->cell(75,4, 'No of Items  :   ', 0, 0 ,'R');
        $pdf->cell(53,4, $c-1, 0, 1 ,'R');
        $pdf->SetFont('Arial', '', 11);
        $pdf->SetFont('Arial', '', 9);
        $pdf->cell(128,5,'------------------------------------------------------------------------------------------------------------------------', 0, 1,'C');
        $pdf->cell(128,15, 'Thank You !', 0, 1 ,'C');
$pdf->output();
?>
<?php
// Include the main TCPDF library (search for installation path).
include('../../../conn.php');
require_once('../TCPDF-main/tcpdf.php');

date_default_timezone_set("Asia/Manila");
$date = date("D M d, Y h:i: A");


$male = "SELECT count(reg_id) AS total FROM regist_db WHERE reg_atm='without ATM'";
$rows_results = mysqli_query($db, $male);
$values = mysqli_fetch_assoc($rows_results);
$num_male = $values['total'];




class PDF extends TCPDF
{
  // PAGE FOOTER

}



// create new PDF document
$pdf = new PDF('p', 'mm', 'A4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Professor');
$pdf->SetTitle('BUPC TES Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'BUPC TES GRANTEES AY 2020-2021', 'Printed by: BUPC TES Admin');
$pdf->setFooterData($date);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
  require_once(dirname(__FILE__) . '/lang/eng.php');
  $pdf->setLanguageArray($l);
}


// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 14, '', true);



// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();


$html = '<!DOCTYPE html>
<html lang="en">

<body style="font-size: 12px;">
    <div>';

    $html .= '

<h1 style="text-align:center;margin-top:-50px;">List of TES Grantees without ATM</h1>

<b><h6>Total: ' .$num_male. ' Students </h6></b>';

$html .= '



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 10px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}

</style>
  
        <table>
            <tr>
                <th align="center"><b>Surname</b></th>
                <th align="center"><b>Firstname</b></th>
                <th align="center"><b>Middlename</b></th>
                <th align="center"><b>Course</b></th>
                <th align="center" ><b>Year Level</b></th>
                <th align="center"><b>ATM Status</b></th>
            </tr>';
$getStudent = mysqli_query($db, "SELECT * FROM regist_db WHERE reg_atm='without ATM'");
while ($row = mysqli_fetch_array($getStudent)) {
  $reg_user = $row['reg_user'];
  $reg_given = $row['reg_given'];
  $reg_middle = $row['reg_middle'];
  $reg_course = $row['reg_course'];
  $reg_year = $row['reg_year'];
  $reg_atm = $row['reg_atm'];
  $html .= '<tr>
                <td align="center">' . $reg_user . '</td>
                <td align="center">' . $reg_given . '</td>
                <td align="center">' . $reg_middle . '</td>
                <td align="center">' . $reg_course . '</td>
                <td align="center" >' . $reg_year . '</td>
                <td align="center">' . $reg_atm . '</td>
            </tr>';
}
$html .= '
        </table>
</body>
</html>';

$pdf->writeHTML($html, true, false, true, false, '');
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('BUPC-TES.pdf', 'I');

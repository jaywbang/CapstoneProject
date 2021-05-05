<?php
require_once __DIR__ . '/vendor/autoload.php';
$name = $_POST['fullname'];
$studentid = $_POST['studentid'];
$major = $_POST['major'];
$grade = $_POST['grade'];

$mpdf = new \Mpdf\Mpdf();

$data = '';
$data .= '<h1><img src = "logo.jpeg" alt = "saints" width = "25%" height = "90"></h1>';
$data .= '<strong>Name</strong> ' . $name . '<br />';
$data .= '<strong>Student ID</strong> ' . $studentid . '<br />';
$data .= '<strong>Major</strong> ' . $major . '<br />';
$data .= '<strong>Grade</strong> ' . $grade . '<br />';

$mpdf->WriteHTML($data);

$mpdf->Output('lastname.pdf', 'D');

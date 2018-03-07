<style>
    .name, .age, .phone {
        font-size: 2em;
    }

    .name {
        color: blue;
    }

    .age {
        color: red;
    }

    .phone {
        color: yellow;
    }
</style>

<?php

require_once 'class_lib.php';
require_once 'students_lib.php';
require_once 'teacher_lib.php';

$arrInfo = [
    'name' => 'Hoàng Bảo Vũ',
    'age' => 18,
    'phone' => '01206066260',
];

$student = new Student($arrInfo);

echo $student->showInfo();

$arrInfoTeacher = [
    'name' => 'Nguyễn Anh Thảo',
    'age' => 36,
    'phone' => '01208232550',
];

$teacher = new Teacher($arrInfoTeacher);

echo $teacher->showInfo();

echo "<br>";

$DienTichHV = new Hinh();
echo $DienTichHV->dienTich(10);

$DienTichHCN = new HinhCN();
echo $DienTichHCN->dienTich(10, 2);

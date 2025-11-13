<?php
<?php
// Sonning tub yoki tub emasligini tekshiruvchi funksiya
function tubmi($n) {
    if ($n < 2) return false;
    if ($n % 2 == 0 && $n != 2) return false;

    for ($i = 3; $i <= sqrt($n); $i += 2) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// 15 xonali tasodifiy tub son generatsiya qiluvchi funksiya
function tasodifiyTub15() {
    do {
        // 15 xonali tasodifiy son yaratamiz (10^14 dan 10^15 - 1 gacha)
        $son = random_int(100000000000000, 999999999999999);
    } while (!tubmi($son)); // Tub bo‘lmaguncha qayta urinadi

    return $son;
}

// Funksiyani chaqirish
$tubSon = tasodifiyTub15();
echo "Tasodifiy 15 xonali tub son: $tubSon";
?>

?>

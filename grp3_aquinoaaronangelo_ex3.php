<?php
$url = 'http://aquinoaaronangelo.com';
$file = 'aaron.txt';

$content = file_get_contents($url);
if ($content !== false) {
    echo "Content from URL:\n";
    echo htmlspecialchars($content) . "<br><br>";
} else {
    echo "Failed to fetch content from URL.<br><br>";
}

$data = 'Aaron Angelo Aquino';
file_put_contents($file, $data);

if (file_exists($file)) {
    echo "File exists.<br><br>";
} else {
    echo "File does not exist.<br><br>";
}

$lines = file($file);
echo "File contents:\n";
foreach ($lines as $line) {
    echo htmlspecialchars($line) . "<br>";
}
?>


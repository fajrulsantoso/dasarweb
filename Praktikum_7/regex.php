<?php 

// First Block: Check for lowercase letters
$text = 'This is a Sample Text.';
$pattern = '/[a-z]/'; // Regular expression to check for lowercase letters
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan !";
} else {
    echo "Tidak ada huruf kecil";
}

echo "<br>";

// Second Block: Check for numbers
$text = 'There are 123 apples.';
$pattern = '/[0-9]+/'; // Regular expression pattern to match numbers
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok";
}

echo "<br>";

// Third Block: Replace 'apple' with 'banana'
$pattern = '/apple/i';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;  // Output:  "I like banana pie."

echo "<br>";

// Fourth Block: Check for the pattern 'go*d'
$pattern = '/go*d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>

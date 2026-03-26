
<?php
function sortArray($arr) {
    sort($arr); // built-in PHP sort function
    return $arr;
}

$numbers = array(8, 3, 5, 1, 9);

$sortedArray = sortArray($numbers);

echo "Sorted Array: ";
print_r($sortedArray);
echo "<br />";
?>

<!-- Check if String is All Lowercase -->

<?php
function isLowercase($string) {
    if ($string === strtolower($string)) {
        return "The string is all lowercase.";
    } else {
        return "The string is NOT all lowercase.";
    }
}

$text = "HELLO";

echo isLowercase($text);
?>
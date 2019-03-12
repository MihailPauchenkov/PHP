<?php
function isCorrect($str) {
    $pattern = '/^(?P<brackets>(?:\\[ (?P>brackets)? \\]|\\{ (?P>brackets)? \\}|\\( (?P>brackets)? \\)|[^ \\[ \\] {} () ]++)++)?$/x';
    return (bool) preg_match($pattern,$str);
}

$string = $_POST['str_brackets'];

if (isCorrect($string)) {
    echo 'Строка: ', $string, ' - корректна'; 
} else {
    echo 'Строка: ', $string, ' - не корректна';
}

?>
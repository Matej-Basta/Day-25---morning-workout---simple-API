<?php

$data = [
    [
        "text" => "On the ground, a group of geese is a gaggle, in the sky it is a skein.",
        "permalink" => '"https://uselessfacts.jsph.pl/a1644cb4-6da1-4cc4-8818-6ac27ed57c59"',
    ],
    [
        "text" => "The world record for spitting a watermelon seed is 65 feet 4 inches.",
        "permalink" => '"https://uselessfacts.jsph.pl/a1644cb4-6da1-4cc4-8818-6ac27ed57c59"',
    ],
    [
        "text" => 'The word "samba" means "to rub navels together."',
        "permalink" => '"https://uselessfacts.jsph.pl/a1644cb4-6da1-4cc4-8818-6ac27ed57c59"'
    ],
];



echo json_encode($data[array_rand($data, 1)]);
?>
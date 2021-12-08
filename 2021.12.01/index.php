<?php

// Sukurti masyvą, kuris aprašytų knygos duomenis: title, author, year, genre
// Sukurti masyvą, kurio elementai būtų masyvai aprašantys knygas. Minimum 3.
// Išvesti visus knygų masyvo elementus su var_dump;
// Išvesti visų visų knygų metų vidurkį;


$book = [
    'title' => 'Da Vinci Code<br>',
    'author' => 'Brown Dan<br>',
    'year' => '2003<br>',
    'genre' => 'romance<br><br>'
];

$books = [
    $bookOne = [
        'title' => 'Angels and Demons<br>',
        'author' => 'Brown Dan<br>',
        'year' => '2000<br>',
        'genre' => 'romance<br><br>'
    ],

    $bookTwo = [
        'title' => 'Gruffalos Child<br>',
        'author' => 'Donaldson Julia<br>',
        'year' => '2004<br>',
        'genre' => 'drama<br><br>'
    ],

    $bookThree = [
        'title' => 'New Moon<br>',
        'author' => 'Meyer Stephenie<br>',
        'year' => '2006<br>',
        'genre' => 'romance<br>'
    ],

];


var_dump($book);

var_dump($books);

echo '<br>';

$count = 0;
$numOfBooks = count($books);
foreach ($books as $key => $value) {
    $count += (int) ($value['year']);

};

echo 'Avarage release date of books: ' . $count / $numOfBooks;
<?php

// Sukurkite dvimatį masyvą. Pirmieji du raktai yra lt ir en.
// Raktai turi savaitės dienų vardų masyvus lietuviškai ir angliškai.
// Naudodamiesi šiuo masyvu, pirmadienį parodykite lietuvių kalba, o trečiadienį - anglų kalba.
// Sukurkite kintamuosius lang (reikšmės lt arba en) ir parodykite dieną

$weekDays = [
    $lt = [
        'Pirmadienis',
        'Antradienis',
        'Trečiadienis',
        'Ketvirtadienis',
        'Penktadienis',
        'Sestadienis',
        'Sekmadienis'
    ],
    $en = [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ]
    ];

var_dump($weekDays[0][0], $weekDays[1][2]);

$lang = 'lt';

function weekdayToday($lang, $arr) {
    $today = date('l');
    if($lang == 'en') {
        echo "Today is $today";
    } elseif($lang == 'lt') {
        $todaysKey = array_search($today, $arr[1]);
        echo 'Siandien yra ' . $arr[0][$todaysKey];
    } else {
        echo 'Sorry, I dont know this language';
    }
  };

  weekdayToday($lang, $weekDays);
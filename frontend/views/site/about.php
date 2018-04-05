<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use phpnt\yandexMap\YandexMaps;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>This is the About page. You may modify the following file to customize its content:</p>

    <b><code><?= __FILE__ ?></code></b><br/>
    <b><code><?= __DIR__ ?> </code></b>
<?php
use phpnt\yandexMap\YandexMaps;

// Массив меток
$items = [
    [
        'latitude' => 52.906386,
        'longitude' => 59.954092,
        'options' => [
            [
                'hintContent' => 'Подсказка при наведении на маркет',
                'balloonContentHeader' => 'Заголовок после нажатия на маркер',
                'balloonContentBody' => 'Контент после нажатия на маркер',
                'balloonContentFooter' => 'Футер после нажатия на маркер',
            ],
            [
                'preset' => 'islands#icon',
                'iconColor' => '#19a111'
            ]
        ]
    ],
    [
        'latitude' => 55.751812,
        'longitude' => 37.599292,
        'options' => [
            [
                'hintContent' => 'Подсказка при наведении на маркет',
                'balloonContentHeader' => 'Заголовок после нажатия на маркер',
                'balloonContentBody' => 'Контент после нажатия на маркер',
                'balloonContentFooter' => 'Футер после нажатия на маркер',
            ],
            [
                'preset' => 'islands#circleIcon',
                'iconColor' => '#19aa8d',
                'draggable' => true
            ]
        ]
    ],
    [
        'latitude' => 47.250534,
        'longitude' => 39.682889,
        'options' => [
            [
                'hintContent' => 'Подсказка при наведении на маркет',
                'balloonContentHeader' => 'Заголовок после нажатия на маркер',
                'balloonContentBody' => 'Контент после нажатия на маркер',
                'balloonContentFooter' => 'Футер после нажатия на маркер',
            ],
            [
                'preset' => 'islands#blueCircleDotIconWithCaption',
                'iconColor' => '#19aa8d'
            ]
        ]
    ],
    [
        'latitude' => 58.091523,
        'longitude' => 57.805861,
        'options' => [
            [
                'hintContent' => 'Подсказка при наведении на маркет',
                'balloonContentHeader' => 'Заголовок после нажатия на маркер',
                'balloonContentBody' => 'Контент после нажатия на маркер',
                'balloonContentFooter' => 'Футер после нажатия на маркер',
            ],
            [
                'preset' => 'islands#redSportIcon',
                'iconColor' => '#19aa8d'
            ]
        ]
    ],
    [
        'latitude' => 60.091523,
        'longitude' => 75.805861,
        'options' => [
            [
                'hintContent' => 'Подсказка при наведении на маркет',
                'balloonContentHeader' => 'Заголовок после нажатия на маркер',
                'balloonContentBody' => 'Контент после нажатия на маркер',
                'balloonContentFooter' => 'Футер после нажатия на маркер',
            ],
            [
                'preset' => 'islands#governmentCircleIcon',
                'iconColor' => '#3b5998'
            ]
        ]
    ],
];
// вывод карты
echo YandexMaps::widget([
    'myPlacemarks'          => $items,
    'mapOptions'            => [
        'center'            => [52, 59],                                                // центр карты
        'zoom'              => 3,                                                       // показывать в масштабе
        'controls'          => ['zoomControl',  'fullscreenControl', 'searchControl'],  // использовать эл. управления
        'control'           => [
            'zoomControl'   => [                                                        // расположение кнопок управлением масштабом
                'top'       => 75,
                'left'      => 5
            ],
        ],
    ],
    'disableScroll'         => true,                                                    // отключить скролл колесиком мыши (по умолчанию true)
    'windowWidth'           => '100%',                                                  // длинна карты (по умолчанию 100%)
    'windowHeight'          => '400px',                                                 // высота карты (по умолчанию 400px)
]);
</div>

<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App ('Lol');
$app->initLayout('Centered');

$tabs = $app->add('Tabs');
$clothes = $tabs->addTab('Clothes');
$electronics = $tabs ->addTab('Electronics');
$memes = $tabs ->addTab('Memes');

$colc = $clothes ->add('Columns');
$col1 = $colc->addColumn(5);
$col2 = $colc->addColumn(5);
$col3 = $colc ->addColumn(5);
$image1 = $col1 -> add(['Image','https://media.titus.de/media/image/47/ec/96/Thrasher-Hoodies-Flame-black-Vorderansicht_600x600.jpg']);
$image2 = $col2 -> add(['Image','https://eaglexshirt.com/wp-content/uploads/2018/01/Deadpool-Gucci-Hoodie.jpg']);

$cole = $electronics ->add('Columns');
$col4 = $cole->addColumn(5);
$col5 = $cole->addColumn(5);
$col6 = $cole ->addColumn(5);
$image3 = $col4 -> add(['Image','https://images-na.ssl-images-amazon.com/images/I/51pYrErjXJL._SY355_.jpg']);

$colm = $memes -> add('Columns');
$col7 = $colm->addColumn(5);
$col8 = $colm->addColumn(5);
$col9 = $colm ->addColumn(5);
$image6 = $col7 -> add(['Image','http://memesmix.net/media/created/rk1lfk.jpg']);
$image7 = $col7 -> add(['Image','http://memesmix.net/media/created/agi2pb.jpg']);
$image8 = $col9 -> add(['Image','https://img-fotki.yandex.ru/get/65759/22638743.21d/0_1624fd_459374b1_XL.jpg']);

$header = $app->add(['Header','Contacts','aligned'=>'left','icon'=>'moon','subHeader'=>'88005555535']);
$label = $app->add(['Label','@@@@','big red']);
$app->add(['ui'=>'hidden divider']);
$text = $app->add(['Text',"Наш президент умеет находить нужные слова.
Простая замена словосочетания ‘воровство и коррупция’ на ’ухудшение демографической ситуации’ и всем гражданам стала понятна необходимость еще лет пять поработать.
"]);
$button = $app->add(['Button','Our adress','Massive purple',]);
$button ->link('https://www.google.com/maps/place/Dubai+Bar/@56.954847,24.1313082,17z/data=!3m1!4b1!4m5!3m4!1s0x46eece337723a833:0x6647cebe9c8eb936!8m2!3d56.9548441!4d24.1335022');

<?php

// 都道府県
define('PREFECTURE', [
    '' => '都道府県を選択',
    '1' => '北海道',
    '2' => '青森県',
    '3' => '岩手県',
    '4' => '宮城県',
    '5' => '秋田県',
    '6' => '山形県',
    '7' => '福島県',
    '8' => '茨城県',
    '9' => '栃木県',
    '10' => '群馬県',
    '11' => '埼玉県',
    '12' => '千葉県',
    '13' => '東京都',
    '14' => '神奈川県',
    '15' => '新潟県',
    '16' => '富山県',
    '17' => '石川県',
    '18' => '福井県',
    '19' => '山梨県',
    '20' => '長野県',
    '21' => '岐阜県',
    '22' => '静岡県',
    '23' => '愛知県',
    '24' => '三重県',
    '25' => '滋賀県',
    '26' => '京都府',
    '27' => '大阪府',
    '28' => '兵庫県',
    '29' => '奈良県',
    '30' => '和歌山県',
    '31' => '鳥取県',
    '32' => '島根県',
    '33' => '岡山県',
    '34' => '広島県',
    '35' => '山口県',
    '36' => '徳島県',
    '37' => '香川県',
    '38' => '愛媛県',
    '39' => '高知県',
    '40' => '福岡県',
    '41' => '佐賀県',
    '42' => '長崎県',
    '43' => '熊本県',
    '44' => '大分県',
    '45' => '宮崎県',
    '46' => '鹿児島県',
    '47' => '沖縄県',
    '48' => '日本国外',
    ]
);

// メルマガ
define('MAGAZINE',[
  '' => '---' ,
  '0' => '不要',
  '1' => '購読',
]);

// 購読タイプ
define('MAGAZINE_TYPE',[
  '' => '---',
  '0' => 'PC向け',
  '1' => 'モバイル向け',
]);

// 転送済み
define('TRANSFER',[
  '0' => '未転送',
  '1' => '転送済み',
]);

// 生年月日設定
$thisYear = intval(date('Y'));
$years = array();
$years[''] = '---';

for($i=$thisYear; $i>=1950; --$i){
  $years[$i] = $i;
}

define('YEARS',$years);

$months = array();
$months[''] = '---';

for($i=1; $i<=12; $i++){
  $months[$i] = $i;
}

define('MONTHS',$months);

$dates = array();
$dates[''] = '---';

for($i=1; $i<=31; $i++){
  $dates[$i] = $i;
}

define('DATES',$dates);

// 登録日設定
$hours = array();

for($i=1; $i<=23; $i++){
  $hours[$i] = $i;
}

define('HOURS',$hours);

$minutes = array();

for($i=1; $i<=59; $i++){
  $minutes[$i] = $i;
}

define('MINUTES',$minutes);

$seconds = array();

for($i=1; $i<=59; $i++){
  $seconds[$i] = $i;
}

define('SECONDS',$seconds);

// ログインステータス
define('STATUS',[
  '0' => '無効',
  '1' => '有効',
]);

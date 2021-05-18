<?php

class Validation_MyValidation
{

  // マガジン購入する場合のマガジンタイプチェック
  public static function _validation_magazine_type($val){

    $input = Validation::active()->input();
    $magazine =$input['entry_magazine'];
    $magazine_type = $input['entry_magazine_type'];

    if($magazine == 1 && $magazine_type !==''){
      return true;

    } elseif($magazine == 1 && $magazine_type =='') {
      return false;
    }
  }

  // 文字列がすべてひらがな
  public static function _validation_kana($val){

    $input = Validation::active()->input();
    $ruby =$input['entry_ruby'];

    if(preg_match('/^[ぁ-ん]+$/u', $ruby)){
      return true;
    } else {
      return false;
    }
  }

  // 登録日時チェック
  public static function _validation_register_time($val)
  {
    $input = Validation::active()->input();
    $year =$input['reg_year'];
    $month =$input['reg_month'];
    $date =$input['reg_date'];

    if(empty($year) || empty($month) || empty($date)){
      return false;
    }

    if(checkdate($month, $date, $year) === true){
      return true;
    }else{
      return false;
    }
  }
}
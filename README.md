## 考察

## 開発環境

- MacOS 10.13.6
- PHP: 7.4.8
- FuelPHP: 1.8.2
- Apache 2.4.6
- MySQL 8.0.23
- MAMP 5.7

## 実装に費やした時間

作業後に更新する。

- 事前学習 15h
- エントリーページ実装 15h
- 管理ページ
  - トップページ 7h
  - エントリー一覧 5h
  - 管理者ページ 3h

## 実装中に問題となったこと・工夫したところ

- 誕生日を日付から bouble 型に変換する方法を調査中。
- 一般ページの確認画面にて、戻るボタンを押した際に都道府県と生年月日が初期状態になってします。<br>(おそらく Javascript で制御しているから？)
- 都道府県とメルマガの値と名前を結びつけるように SQL を組むようにする。

## 改善点

更新中

## どのような動作テストを行ったか

更新中

## 参考資料又は参考サイト

- [FuelPHP 公式ドキュメント](http://fuelphp.jp/docs/1.9/);
- 初めてのフレームワークとしての FuelPHP 改訂版
- [CodeIgniter3 を使ってる環境を PHP7.4 にしたらエラーが出た](https://lightwill.hatenablog.com/entry/2020/09/11/151914)
- [FuelPHP の認証機能「Auth パッケージ」を利用してみる](https://helog.jp/framework/fuelphp-auth/)
- [jQuery を使用して 閏年判定付き 生年月日フォーム をつくってみた](https://qiita.com/Haruka-Ogawa/items/ee6571a1331f9ea00688)

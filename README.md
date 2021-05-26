## 考察

## 開発環境

- MacOS 10.13.6
- PHP: 7.4.8
- FuelPHP: 1.8.2
- Apache 2.4.6
- MySQL 8.0.23
- MAMP 5.7

## 実装に費やした時間

- 事前学習 15h
- エントリーページ 30h
- 管理ページ
  - エントリー 20h
  - 管理者ページ 30h

## 実装中に問題となったこと・工夫したところ

- 認証機能に Simpleauth を使用し、マイグレーションを実行する際に任意のカラムを指定することが出来ず、データベースに直接追加するように対応した。
- 誕生日と登録日時については、データベースには UNIX 時間で登録されているため、入力された値を日付表記から UNIX 時間に変換するメソッドを実装し、工数を削減することが出来た。
- メルマガ購読のバリデーションについて、メルマガを購読するかどうかによって、メルマガのタイプの入力が必須かどうかを判定する独自のバリデーションルールを実装することが出来た。

## 改善点

- メソッドと URL が連動している関係で、確認画面にて戻るボタンを押下すると再度確認画面に遷移してしまう状態になっているので、正しく入力画面に遷移するよう改善したい。

## どのような動作テストを行ったか

- エントリー、管理者ともに正しいデータがテーブルに登録または削除されているかの確認。
- バリデーションルールに基づき、異常値の場合はエラーが表示され、次の画面に遷移しない。
- 意図した画面が正しく表示されている。

## 参考資料又は参考サイト

- [FuelPHP 公式ドキュメント](http://fuelphp.jp/docs/1.9/);
- 初めてのフレームワークとしての FuelPHP 改訂版
- [CodeIgniter3 を使ってる環境を PHP7.4 にしたらエラーが出た](https://lightwill.hatenablog.com/entry/2020/09/11/151914)
- [FuelPHP の認証機能「Auth パッケージ」を利用してみる](https://helog.jp/framework/fuelphp-auth/)
- [jQuery を使用して 閏年判定付き 生年月日フォーム をつくってみた](https://qiita.com/Haruka-Ogawa/items/ee6571a1331f9ea00688)

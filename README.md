# WordPress講座 基礎編
このリポジトリは「WordPress講座 基礎編」で使用するファイルや事前説明の為のものです。  
今回は[こちらのサイト](https://leekfoo.github.io/wp-html/)をワードプレスのオリジナルテーマに落とし込んでいきます。  
本サイトにアップしているファイルが講座で使用するファイルになります。
ダウンロード方法はこちらのサイトを参考にしてください。  

https://qiita.com/okamot_dmc/items/c6cd951a75449c201d9a

## WordPressへの組み込み例（完成見本）
実際にオリジナルテーマとしてWordPressに組み込んだサイトはこちらです。  
http://love-negi.daa.jp/wordpress/

## 講座にて使用したスライド
今回の講座に使用したスライドは下記URLになります。  
https://docs.google.com/presentation/d/16WSNdu8P2MhyhmxCqlJfCsk6cAmzr7cI45GDgW6b58U

## 開発環境の構築について

XAMPP(MAMP)、もしくはLOCALを使用して自分のPCでWordPressが動くようにしておいてください。  
WordPressの開発環境の構築のみであれば、LOCALを使用してもらうのが一番簡単かと思います。  
俺はそんなもの使わずとも、バリバリできるぜー!!!という方は上記ソフトを使わない方法でも大丈夫です（笑）  
下記サイト様を参考にインストールを行っていけば、大丈夫かと思います。  
が、ローカル環境での開発環境の構築が難しそうであれば、ロリポップのサーバー（ライトプラン以上）を借りておいてくださりますと幸いです。

### XAMPP
https://bazubu.com/xampp-wordpress-23795.html

### MAMPP
https://bazubu.com/how-to-insall-wp-in-mamp-23798.html

### LOCAL
https://souken-blog.com/2017/11/06/wordpress-local/

## プラグインについて
今回のサイトを作るにあたり、下記のプラグインを使用しますので事前にインストールをしておいてくださりますと幸いです。
* Contact Form 7
  * お問い合わせフォームを簡単に作れるプラグイン
* Breadcrumb NavXT
  * パンくずリストを勝手に作ってくれるプラグイン

## ファイルについて
このリポジトリには2つのフォルダがあります。  
それぞれ、下記のようなファイル構成になっています。  
* html
   * 今回オリジナルテーマに落とし込んでいくサイトのHTMLファイル
* original-theme
   * オリジナルテーマ作成用のPHPファイル  
* original-theme完成版
   * オリジナルテーマの完成ファイル  
   
「original-theme」フォルダはWordPressの環境構築が完了している場合、フォルダごと各テーマを格納しているフォルダ(themesフォルダ)にコピペしてもらったら、テーマとして読み込まれるようになっています。  
(ただ、必要なファイルを用意しているだけなのでテーマに設定してもフッターが表示されるだけですが)  
  
今回の講座ではhtmlフォルダに入っているサイトをオリジナルテーマとして落とし込んでいく際に「original-theme」フォルダのPHPファイルを変更していく予定です。

## テキストエディターについて
テキストエディターはご自身の使いやすいものであれば、なんでも使用してもらって構いません。  
が、一応オススメのエディターを下記に挙げておきます。
* Brackets
    * Bracketsのプラグインはこちらのサイトに記載されているものを導入しておくと幸せになれるかもしれません
        * https://sole-color-blog.com/blog/1170/
    * 上記のサイトに記載されているプラグインを全て導入しなくても大丈夫ですが、少なくとも下記のものは入れておいた方が良いと思います
        * Beautify…コードをキレイにしてくれる奴
        * PHP SmartHints…PHP用のコードヒント
        * Brackets WordPress Hint…WordPress専用の関数に特化したコードヒント
* VSCode
    * VSCodeのプラグイン（拡張機能）についてはこちら
        * https://haniwaman.com/vscode-wordpress/
* Atom
    * Atomに関してはこちらのページの「4.~中略~オススメのパッケージ」を導入すれば幸せになれ略
    * https://plusers.net/wordpress_theme_atom

（私はVSCodeを以前から使っていたので、講座の際にはこちらで説明します）


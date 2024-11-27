################################################################################
# VeriTrans4G
# Sample Program for MDK_PHP8
# Version 2.0.0
# Copyright(c) 2024 DG Financial Technology, Inc.
# README.txt
################################################################################

このサンプルプログラムは、以下の環境で動作可能なパッケージとなっております。
・PHP 7.4以上、またはPHP 8.1以上

================================================================================
 改版履歴
================================================================================

2024/03 Sample Program for MDK_PHP8 ver 2.0.0 リリース

    接続先ドメインを新環境(api3.veritrans.co.jp)に変更
      
2023/11 Sample Program for MDK_PHP8 ver 1.0.9 リリース

    クレジットカード決済／本人認証サービス：
      ・認可、再取引時に認証開始URLを用いて画面遷移するように変更
    会員管理機能
      ・3Dセキュア 2.0 に対応
      ・カード決済-3D認証有り時に認証開始URLを用いて画面遷移するように変更
    楽天ペイ：
      ・随時決済に対応
      
2023/05 Sample Program for MDK_PHP8 ver 1.0.8 リリース

    PHP8版のMDK(1.3.0～)に対応：
      ・Laravelのバージョンを10.0に更新

2022/06 Sample Program for MDK_PHP8 ver 1.0.7 リリース

    PHP8版のMDK(1.1.8～)に対応：
      ・Laravelのバージョンを9.2に更新

2021/11 Sample Program for MDK_PHP8 ver 1.0.6 リリース

    楽天ID決済：
      ・オンライン決済（V2）に対応

2021/09 Sample Program for MDK_PHP8 ver 1.0.5 リリース

    PHP8版のMDK(1.1.5～)に対応：
    本人認証サービス：
      ・3Dセキュア 2.0 に対応

2020/12 Sample Program for MDK_PHP8 ver 1.0.4 リリース

    PHP8版のMDK(1.1.3～)に対応：
      ・PHP8版のMDKを使うよう修正
      ・Laravelのバージョンを6.20に更新

2019/09 Sample Program for MDK_PHP7 ver 1.0.3 リリース

    PHP7版のMDKに対応：
      ・command版サンプルをPHP7版のMDKを使うよう修正
      ・web版サンプルをLaravelを使ったアプリケーションに変更

================================================================================
 動作環境について
================================================================================
弊社ホームページ、又はダウンロードサイトの動作確認済み環境を参照してください。


================================================================================
 MDKのファイル構成および使用方法について
================================================================================
別途提供している4G開発ガイド、インストールガイドを参照してください。


================================================================================
 依存Composerパッケージ一覧
================================================================================
guzzlehttp/guzzle        version:7.2          license:MIT
laravel/framework        version:10.0         license:MIT
laravel/sanctum          version:3.2          license:MIT
laravel/tinker           version:2.8          license:MIT
fakerphp/faker           version:1.9.1        license:MIT
laravel/pint             version:1.0          license:MIT
laravel/sail             version:1.18         license:MIT
mockery/mockery          version:1.4.4        license:New BSD
nunomaduro/collision     version:7.0          license:MIT
phpunit/phpunit          version:10.0         license:BSD 3 Clause
spatie/laravel-ignition  version:2.0          license:MIT

================================================================================
 依存npmパッケージ一覧
================================================================================
axios                version:1.1.2            license:MIT
laravel-vite-plugin  version:0.7.2            license:MIT
sass                 version:1.61.0           license:MIT
vite                 version:4.0.0            license:MIT
@popperjs/core       version:2.11.7           license:MIT
bootstrap            version:5.2.3            license:MIT
bootstrap-icons      version:1.10.4           license:MIT

================================================================================
 MDKの導入サポートについて
================================================================================
MDKの導入および動作についてサポートを受ける場合は、
以下のメールアドレスにお問い合わせください。

 Mail : tech-support@veritrans.jp

但し、弊社動作確認済み環境以外の環境への導入、環境環境に依存する問題については、
サポートの対象外とさせていただく場合がありますのでご了承ください。
また、緊急時以外の電話対応は受け付けておりません。


・Copyright 2024 DG Financial Technology, Inc.


その他 MDK 内で使用されている名称や商品の名称はそれぞれ各社が
登録商標あるいは商標として使用している場合があります。



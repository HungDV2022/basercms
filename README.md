# Project to migrate baserCMS to CakePHP4

[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/baserproject/ucmitz)

baserCMSをCakePHP3化するためのブランチです。  
BaserApp を親パッケージとして、BaserCore、BcAdminThirdは、子パッケージとしてモノレポで管理します。
- [BaserApp ソースコード / baserproject/basercms:dev-5-cake3](https://github.com/baserproject/ucmitz/tree/dev)  
baserCMSのアプリケーションフレームを提供
- [BaserCore ソースコード / baserproject/baser-core:dev-5-cake3](https://github.com/baserproject/baser-core/tree/dev-5-cake3)  
baserCMSの本体、主にURLに紐づくルーティングと、ビジネスロジックを提供
- [BcAdminThird ソースコード / baserproject/bc-admin-third:dev-5-cake3](https://github.com/baserproject/bc-admin-third/tree/dev-5-cake3)  
baserCMSの画面表示をテーマとして提供

## ドキュメント
- [開発方針](https://docs.google.com/document/d/1QAmScc65CwMyn8QuwWKE9q_8HnSKcW9oefI9RrHoUYY/edit)
- [ucmitz（github.io）](https://baserproject.github.io/ucmitz/)
- [開発への貢献方法](https://github.com/baserproject/ucmitz/blob/dev/CONTRIBUTING.md) 
- [開発状況](https://github.com/baserproject/ucmitz/blob/dev/DEVELOPMENTAL_STATUS.md)
- [プラグインの呼び出し](https://github.com/baserproject/ucmitz/blob/dev/docs/call-plugin.md)
- [BcAdminThirdの開発](https://github.com/baserproject/ucmitz/blob/dev/plugins/bc-admin-third/README.md)
- [モノレポによるパッケージ管理](https://github.com/baserproject/ucmitz/blob/dev/docs/monorepo.md)
- [Cloud9 上で Docker を動作させる](https://github.com/baserproject/ucmitz/blob/dev/docs/cloud9.md)

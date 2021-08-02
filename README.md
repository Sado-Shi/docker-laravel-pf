# 顧客情報をスマートにスタッフ間で共有・管理できるwebアプリ『Smart-管理』

# 概要
業種は特に問わず、お店に来店した顧客の情報をスタッフ間で共有・管理することができるアプリケーション。</br>
現場で働いており、**普段PCやスマートフォンに触り慣れていないような人たちでも、スタッフ間で簡単に共有して記録が残せるようなシンプルなサービスをコンセプト**としました。</br>

# 制作背景
個人店などでは顧客管理を手帳で行っていたり、独自にスタッフがそれぞれメモツールを使って
口頭で都度共有していたり、顧客情報の検索にとても時間と手間が掛かっているという課題が見つかりました。</br>
さらに、他の課題では顧客管理するためだけに、月額料金の高い集客媒体と契約していたりなどの声も上がっており、毎月の掛かるコスト的な課題も見つかりました。</br>

課題まとめ</br>
①顧客管理のためだけに、月額数万円以上の費用を掛けてしまっている。</br>
②手帳やメモツールでそれぞれで管理していて、スタッフ間で共有するのに手間がかかっている。</br>
③顧客管理のための、入力や保存に時間が掛かってしまっている。</br>

上記の課題を自分の手で解決したいと考え、このサービスの開発を行いました。</br>

### アプリURL: https://smart-kanri.com
### サンプルユーザー
### メールアドレス:
### パスワード:
</br>

# 使用技術

**バックエンド**<br>
PHP 7.4.21 / Laravel 6.20.27

**フロントエンド**<br>
HTML / CSS / javascript / Bootstrap

**インフラ**<br>
mysql 8.0.25</br>
AWS(EC2, S3, RDS, Route 53, ELB, ACM)</br>
Docker 20.10.6(ローカル環境にて使用) / Docker compose(ローカル環境にて使用)


**その他の使用技術**<br>
git(gitHub) / Visual Studio Code / SendGrid(メール)<br>
Adobe XD(画面遷移図) / lucidchart(ER図) / TablePlus(SQLクライアントツール)

# DB設計
### ・ ER図
![画像](/readmeFolder/ERtables.png)

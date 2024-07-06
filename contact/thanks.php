<?php 
$userName = htmlspecialchars($_POST['userName']);
$userKana = htmlspecialchars($_POST['userKana']);
$jyu_sho = htmlspecialchars($_POST['jyu_sho']);
$pref = htmlspecialchars($_POST['pref']);
$address = htmlspecialchars($_POST['address']);
$userEmail = htmlspecialchars($_POST['userEmail']);
$userTel = htmlspecialchars($_POST['userTel']);
$naiyou = htmlspecialchars($_POST['naiyou']);

// mb_send_mail(宛先,メールのタイトル,メールの本文,誰からのメールなのか)

$email_title = '【Sunday flower】お問い合わせありがとうございます';

$email_body = <<<email
{$userName}様

この度はお問い合わせありがとうございます。
以下の内容で承りました。

お名前
{$userName}様

ご住所
{$jyu_sho}
{$pref}{$address}

メールアドレス
{$userEmail}

電話番号
{$userTel}

お問い合わせ内容
{$naiyou}

追って担当者よりご連絡いたします。
今しばらくお待ち頂きますようお願い申し上げます。
==============
Sunday flower
email;

$email_from = 'From:info@sunday_flower.net';

mb_internal_encoding("UTF-8");
mb_language("japanese");
mb_send_mail($userEmail,$email_title,$email_body,$email_from);

//担当者へのメールを送る
$tanto_email = 'miboti740@macr2.com';
$tanto_title = 'HPよりお問い合わせがありました';
$tanto_body = <<<tanto
HPよりお問い合わせがありました

以下の内容です
確認次第、ご対応お願いいたします。

お名前
{$userName}様

ふりがな
{$userKana}

ご住所
{$jyu_sho}
{$pref}{$address}

メールアドレス
{$userEmail}

電話番号
{$userTel}

お問い合わせ内容
{$naiyou}

tanto;

$tanto_from = 'From:info@sunday_flower.net';

mb_internal_encoding("UTF-8");
mb_language("japanese");
mb_send_mail($tanto_email,$tanto_title,$tanto_body,$tanto_from);

header('Location:https://intp.site/2028/sunday_flower/contact/thanks.html')
?>
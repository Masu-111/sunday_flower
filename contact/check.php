<?php 
$userName = htmlspecialchars($_POST['userName']);
$userKana = htmlspecialchars($_POST['userKana']);
$userEmail = htmlspecialchars($_POST['userEmail']);
$naiyou = htmlspecialchars($_POST['naiyou']);

if(!empty($_POST['jyu_sho'])){
    $jyu_sho = htmlspecialchars($_POST['jyu_sho']);
}else{
    $jyu_sho = '';
};

if(!empty($_POST['pref'])){
    $pref = htmlspecialchars($_POST['pref']);
}else{
    $pref = '';
};

if(!empty($_POST['pref'])){
    $address = htmlspecialchars($_POST['address']);
}else{
    $address = '';
};

if(!empty($_POST['pref'])){
    $userTel = htmlspecialchars($_POST['userTel']);
}else{
    $userTel = '';
};

$flg = false;
$userName_note = '';
$userKana_note = '';
$userEmail_note = '';
$naiyou_note = ''; 

if($userName == ''){
    $flg = true;
    $userName_note = '<span class="alert"> お名前/会社名を入力してください</span>';
}

if($userKana == ''){
    $flg = true;
    $userKana_note = '<span class="alert"> ふりがなを入力してください</span>';
}

if($userEmail == ''){
    $flg = true;
    $userEmail_note= '<span class="alert"> メールアドレスを入力してください</span>';
}

if($naiyou == ''){
    $flg = true;
    $naiyou_note = '<span class="alert"> お問い合わせ内容を入力してください</span>';
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="icon" href="../img/favicon.ico" />
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png" sizes="180x180" />
    <link rel="stylesheet" href="../css/common/reset.css" />
    <link rel="stylesheet" href="../css/common/style.css" />
    <link rel="stylesheet" href="../css/common/under.css" />
    <link rel="stylesheet" href="../css/page/contact.css" />
</head>

<body>
    <header>
        <div class="header_inner">
            <h1 class="header_logo">
                <div class="header_logo_inner">
                    <a class="header_logo_cover" href="../index.html">
                        <img src="../img/sf_logo3.svg" alt="sunday flowerのロゴマーク" />
                    </a>
                </div>
            </h1>
            <div class="hum_menu">
                <div class="hum_lines">
                    <span class="hum_line1"></span>
                    <span class="hum_line2"></span>
                    <span class="hum_line3"></span>
                </div>
                <div class="hum_text">menu</div>
            </div>
            <nav class="nav_list">
                <ul class="nav_list_inner">
                    <li><a href="../about/index.html">About</a></li>
                    <li><a href="../flower/index.html">Flower</a></li>
                    <li><a href="../access/index.html">Access</a></li>
                    <li><a href="./index.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="under_img_box" id="about">
        <div class="under_img_cover contact_img"></div>
        <span class="scroll_down"></span>
        <span class="scroll_text">SCROOL</span>
    </div>

    <main>
        <section class="under">
            <div class="under_inner">
                <div class="section_title">
                    <h3>Contact</h3>
                    <span class="section_title_line"></span>
                    <h4>お問い合わせ</h4>
                </div>

                <div class="contact_form h-adr">
                    <div class="contact_form_inner start">
                        <dl class="form_item">
                            <dt>お名前/会社名</dt>
                            <dd>
                                <?= $userName; ?>
                                <?= $userName_note; ?>
                            </dd>
                        </dl>
                        <dl class="form_item">
                            <dt>ふりがな</dt>
                            <dd>
                                <?= $userKana; ?>
                                <?= $userKana_note; ?>
                            </dd>
                        </dl>
                        <dl class="form_item">
                            <span class="p-country-name" style="display: none">Japan</span>
                            <dt>住所</dt>
                            <dd>
                                〒<?= $jyu_sho; ?> <br>
                                <?= $pref; ?>
                                <?= $address; ?>
                            </dd>
                        </dl>
                        <dl class="form_item">
                            <dt>メールアドレス</dt>
                            <dd>
                                <?= $userEmail; ?>
                                <?= $userEmail_note; ?>
                            </dd>
                        </dl>
                        <dl class="form_item">
                            <dt>電話番号</dt>
                            <dd><?= $userTel; ?></dd>
                        </dl>
                        <dl class="form_item">
                            <dt>お問い合わせ内容</dt>
                            <dd>
                                <?= $naiyou; ?>
                                <?= $naiyou_note; ?>
                            </dd>
                        </dl>
                    </div>
                </div>

                <?php if($flg): ?>
                <button type="button" onClick="history.back();" class="back">戻る</button>
                <?php else: ?>
                <form action="thanks.php" method="post">
                    <input type="hidden" name="userName" value="<?= $userName; ?>" />
                    <input type="hidden" name="userKana" value="<?= $userKana; ?>" />
                    <input type="hidden" name="jyu_sho" value="<?= $jyu_sho; ?>" />
                    <input type="hidden" name="pref" value="<?= $pref; ?>" />
                    <input type="hidden" name="address" value="<?= $address; ?>" />
                    <input type="hidden" name="userEmail" value="<?= $userEmail; ?>" />
                    <input type="hidden" name="userTel" value="<?= $userTel; ?>" />
                    <input type="hidden" name="naiyou" value="<?= $naiyou; ?>" />
                    <button class="thanks_btn" type="submit">この内容で送信</button>
                    <button type="button" onClick="history.back();" class="back">戻る</button>
                </form>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer_inner">
            <div class="footer_logo">
                <a href="../index.html"><img src="../img/sf_logo3_white.svg" alt="" /></a>
            </div>
            <address>
                〒160-0005<br />
                東京都新宿区愛住町22 第三山田ビル1F<br />
                TEL:03-1234-5678<br />
                営業時間:10:00~20:00<br />
                定休日:年中無休（年始を除く）<br />
            </address>
            <small>&copy;株式会社日本生花</small>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>
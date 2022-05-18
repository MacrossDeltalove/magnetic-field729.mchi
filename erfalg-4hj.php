<?php 
header('X-FRAME-OPTIONS:DENY');


function h($str){
 return  htmlspecialchars($str, ENT_QUOTES,'UTF-8'); 
}

$page_flag = 0;

if (!empty($_POST['btn_confirm'])){
   $page_flag = 1;

} elseif (!empty($_POST['btn_submit'])){
   $page_flag = 2;

} else {
    $page_flag = 0;   
}

?>

<!DOCTYPE html>
<html lang="ja"> 
<head>
    <meta charset="utf-8">
    <title>PRISM</title>
    <link rel="stylesheet" href="stylesheet.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <?php if($page === 0): ?>
   <header>
       <div class="hamburger-menu">
              <input type="checkbox" id="menu-btn-check">
              <label for="menu-btn-check" class="menu-btn"><span></span></label>
              <div class="menu-content">
                <ul>
                    <li><a href="/magnetic-field729.mchi/top.html">Top</a></li>
                     <li><a href="/magnetic-field729.mchi/profile.html">Profile</a></li>
                 
                     <li><a href="/magnetic-field729.mchi/session-menu.html">Session Menu</a>
                          <ul class="sub">
                              <li class="access"><a href="/magnetic-field729.mchi/access-consciousness.html">アクセスバーズ＆ボディプロセス</a></li>
                              <li><a href="/magnetic-field729.mchi/thetahealing.html">シータヒーリング</a></li>
                          </ul>
                     </li>
                     <li><a href="/magnetic-field729.mchi/clearing.mp3.html">MP3 for clearing</a>
                          <ul class="sub">
                              <li class="access"><a href="/magnetic-field729.mchi/distractor-implant.html">ディストラクターインプラント</a></li>
                              <li><a href="/magnetic-field729.mchi/abuse.html">あらゆる虐待の解放</a></li>
                              <li><a href="/magnetic-field729.mchi/demonclearing.html">デーモンクリアリング</a></li>
                              <li><a href="/magnetic-field729.mchi/being-you-sex-money.html">お金・パートナー・性とのリレーションシップ</a></li>
                          </ul>
                     </li>
                     <li><a href="/magnetic-field729.mchi/art-works.html">Art Works</a></li>
                     <li><a href="/magnetic-field729.mchi/entertainment.html">Entertainment</a></li>
                     <li><a href="/magnetic-field729.mchi/virtue-law.list.html">Virtue & Law</a></li>
                     <li><a href="/magnetic-field729.mchi/blog-top.html">Blog</a></li>
                        
                     <li><a href="/magnetic-field729.mchi/inquiry.html">Contact</a></li>
                 </ul>
              </div>
          </div>
             <ul class="header-right">
                 <li><a href="/magnetic-field729.mchi/top.html">Top</a></li>
                 <li><a href="/magnetic-field729.mchi/profile.html">Profile</a></li>
                 
                 <li><a href="/magnetic-field729.mchi/session-menu.html">Session Menu</a>
                     <ul class="sub">
                         <li class="access"><a href="/magnetic-field729.mchi/access-consciousness.html">アクセスバーズ＆ボディ</a></li>
                         <li><a href="/magnetic-field729.mchi/thetahealing.html">シータヒーリング</a></li>
                     </ul>
                 </li>
                 <li><a href="/magnetic-field729.mchi/clearing.mp3.html">MP3 for clearing</a>
                          <ul class="sub">
                              <li class="access"><a href="/magnetic-field729.mchi/distractor-implant.html">ディストラクターインプラント</a></li>
                              <li><a href="/magnetic-field729.mchi/abuse.html">あらゆる虐待の解放</a></li>
                              <li><a href="/magnetic-field729.mchi/demonclearing.html">デーモンクリアリング</a></li>
                              <li><a href="/magnetic-field729.mchi/being-you-sex-money.html">お金・パートナー・性とのリレーションシップ</a></li>    
                          </ul>
                 </li>
                 <li><a href="/magnetic-field729.mchi/art-works.html">Art Works</a></li>
                 <li><a href="/magnetic-field729.mchi/entertainment.html">Entertainment</a></li>
                 <li><a href="/magnetic-field729.mchi/virtue-law.list.html">Virute & Law</a></li>
                 <li><a href="/magnetic-field729.mchi/blog-top.html">Blog</a></li>
                 <li><a href="/magnetic-field729.mchi/inquiry.html">Contact</a></li>
             </ul>    
    </header>
<div class="article">
   <div class="container">
          
     <div class="contents-wrapper">    
          
          <div class="confirm">
           <?php if($page_flag === 1): ?>
              <h3>お問い合わせ内容のご確認</h3>
              
              
              <form method="post" action="erfalg-4hj.php">
                  <p>御氏名</p>
                  <p><?php echo $_POST['name1']; ?></p>
                  <p>フリガナ</p>
                  <p><?php echo $_POST['name2']; ?></p>
                  <p>性別</p>
                  <p><?php echo $_POST['sex']; ?></p>  
                  <p>メールアドレス</p>
                  <p><?php echo $_POST['e-mail']; ?></p>
                  <p>お問い合わせ内容</p>      
                  <p><?php echo $_POST['remarks']; ?></p>
                  
                  <button type="submit" name="btn_back" class="submit-button">修正する</button>
                  <button type="submit" name="btn_submit" class="submit-button">送信する</button>
                  <input type="hidden" name="name1" value="<?php echo $_POST['name1']; ?>">
                  <input type="hidden" name="name2" value="<?php echo $_POST['name2']; ?>">
                  <input type="hidden" name="sex" value="<?php echo $_POST['sex']; ?>">
                  <input type="hidden" name="e-mail" value="<?php echo $_POST['email']; ?>">
                  <input type="hidden" name="remarks" value="<?php echo $_POST['remarks']; ?>">
              </form>
              
              <?php elseif($page_flag === 2): ?>
              <p>送信が完了しました。</p>
              <p>自動返信メールが送信されました。</P>
              <p>メールボックスをご確認ください。</p>

              $header = null;
              $auto_reply_subject =null;
              $auto_reply_text = null;
              date_default_timezone_set('Asia/Tokyo');

              $admin_reply_subject = null;
              $admin_reply_text =null;

              $admin_reply_subject = "お問い合わせがありました。";

              $admin_reply_text = "下記の内容でお問い合わせがありました。";
              $admin_reply_text = "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
              $admin_reply_text = "御氏名：" . $_POST['name1'] . "\n";
              $admin_reply_text = "フリガナ：" . $_POST['name2'] . "\n";
              $admin_reply_text = "性別：" . $_POST['sex'] . "\n";
              $admin_reply_text = "メールアドレス：" . $_POST['email'] . "\n\n";
              $admin_reply_text = "お問い合わせ内容：" . $_POST['remarks'] . "\n\n";

              mb_send_mail( 'holyknightstemplars@yahoo.co.jp', $admin_reply_subject, $admin_reply_text, $header);

              $header ="MINE-Version: 1.0\n";
              $header .= "From: PRISM <reply@prism.co.jp>\n";
              $header .= "Reply-To: PRISM <reply@prism.co.jp>\n";

              $atuo_reply_subject ='お問い合わせありがとうございます。';

              $auto_reply_text ='$POST_[name1] 様';
              $auto_reply_text ='この度はお問い合わせいただき誠にありがとうございます。
              下記の内容でお問い合わせを受け付けました。\n\n';
              $auto_reply_text = "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
              $auto_reply_text = "御氏名：" . $POST_['name1'] . "\n";
              $auto_reply_text = "フリガナ：" . $POST_['name2'] . "\n";
              $auto_reply_text = "性別" . $POST_['sex'] . "\n";
              $auto_reply_text = "メールアドレス" . $POST_['email'] . "\n\n";
              $auto_reply_text = "お問い合わせ内容" . $POST_['reamrks'] . "\n\n";
              $auto_reply_tesxt = "PRISM";
              $auto_reply_text ="原田　亜矢加";

              mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text, $header);
              <?php else: ?>
           </div>
              
           
      </div>   
   </div>   
</div>
    
<footer>
      <div class="container">
         
         <div class="footer-list">
             <p>©△PRISM▽ All Rights Reserved.</p>
             <a href="https://www.beiz.jp/">Designed and destributed by BEIZ images</a>
                
         </div>
      </div>
</footer>

</body>
</html>

<
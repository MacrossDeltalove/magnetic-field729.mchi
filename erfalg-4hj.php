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
          
          <div class="article-list">
              <form method="post" action="erfalg-4hj.php">
                  <h3>お問い合わせ</h3>
                  <p>お名前</p>
                  <input type="text" name="name1" value="<?php if(!empty($_POST['name1'])) {echo $_POST['name1'];} ?>">
                  <p>フリガナ</p>
                  <input type="text" name="name2" value="<?php if(!empty($_POST['name2'])) {echo $_POST['name2'];} ?>">
                  <p>性別</p>
                   <select name="sex" value="<?php if(!empty($_POST['sex'])) {echo $_POST['sex'];} ?>">
                      <option value="contents1">男性</option>
                      <option value="contents2">女性</option>
                      <option value="contents3">他</option>
                   </select>
                  <p>メールアドレス</p>
                  <input type="text"　name="email" value="<?php if(!empty($_POST['email'])) {echo $_POST['email'];} ?>">
                  <p>お問い合わせ</p>
                  <textarea name="remarks" placeholder="セッションご希望の方はご希望の日時(第三希望まで)の記載をお願い致します。
                                                         (例　アクセスバーズ90分を希望しております。第一希望〇月〇日10：00～)"><?php if(!empty($_POST['remarks'])) {echo $_POST['remarks'];} ?></textarea>
                  
                  <button type="submit" name="btn_confirm" class="submit-button">入力内容を確認する</button>
              </form>
           </div>
              
            <div class="advertising">
             <h3>「寝ながら」聞くだけで簡単に解放する</h3>
             <h4>気づきを妨げるディストラクターインプラント<br>(怒り・罪悪感・自己/他者への<br>ジャッジメントなど)を解放</h4>
             <a href="https://www.accessconsciousness.com/en/shop-catalog/all/distractor-implants-feb-12-teleseries/?a_aid=mochiten107&amp;a_bid=11110160" target=""><img src="https://s3.amazonaws.com/accessconsciousness/1-access-shop/small_product_pictures/MP3+Download/40.3_mp3_distractorimplants_teleseries.jpg" alt="Distractor Implants Feb-12 Teleseries" title="Distractor Implants Feb-12 Teleseries" width="275" height="395" /></a>
             <h4>あらゆる虐待の記憶を解放</h4>
             <a href="https://www.accessconsciousness.com/en/shop-catalog/all/the-original-clearing-the-issues-of-abuse/?a_aid=mochiten107&amp;a_bid=11110450" target=""><img src="https://s3.amazonaws.com/accessconsciousness/1-access-shop/product_pictures/MP3+Download/40.17_mp3_the_original_clearing_the_issues_of_abuse.jpg" alt="The Original Clearing the Issues of Abuse" title="The Original Clearing the Issues of Abuse" width="265" height="375" /></a>
             <h4>契約や呪いを愛に変え、穏やかに解放する！</h4>
             <a href="https://www.talktotheentities.com/product/ttte-clearing-audio-demon-clearing/#a_aid=mochiten107&amp;a_bid=5b008a74" target="_top"><img src="//shannon-ohara.postaffiliatepro.com/accounts/default1/8bo4zndva83/5b008a74.png" alt="English: Demon Clearing Loop" title="English: Demon Clearing Loop" width="504" height="504" class="demon" /></a>
             <h4>お金、パートナーなどあらゆるものとの<br>リレーションシップを構築する</h4>
             <a href="https://www.accessconsciousness.com/en/shop-catalog/all/being-you-creating-money-and-sex-with-ease/?a_aid=mochiten107&amp;a_bid=11110070" target=""><img src="https://s3.amazonaws.com/accessconsciousness/1-access-shop/product_pictures/MP3+Download/40.6_mp3_beingyou_creatingmoneyandsex.png" alt="Being You, Creating Money and Sex With Ease" title="Being You, Creating Money and Sex With Ease" width="335" height="503" class="being-you-money-sex" /></a>
          </div>
      </div>   
   </div>   
</div>
 
<div class="article">
   <div class="container">
          
     <div class="contents-wrapper">    
          
          <div class="article-list">
              <form method="post" action="erfalg-4hj.php">
                  <h3>お問い合わせ</h3>
                  <p>お名前</p>
                  <input type="text" name="name1" value="<?php if(!empty($_POST['name1'])) {echo $_POST['name1'];} ?>">
                  <p>フリガナ</p>
                  <input type="text" name="name2" value="<?php if(!empty($_POST['name2'])) {echo $_POST['name2'];} ?>">
                  <p>性別</p>
                   <select name="sex" value="<?php if(!empty($_POST['sex'])) {echo $_POST['sex'];} ?>">
                      <option value="contents1">男性</option>
                      <option value="contents2">女性</option>
                      <option value="contents3">他</option>
                   </select>
                  <p>メールアドレス</p>
                  <input type="text"　name="email" value="<?php if(!empty($_POST['email'])) {echo $_POST['email'];} ?>">
                  <p>お問い合わせ</p>
                  <textarea name="remarks" placeholder="セッションご希望の方はご希望の日時(第三希望まで)の記載をお願い致します。
                                                         (例　アクセスバーズ90分を希望しております。第一希望〇月〇日10：00～)"><?php if(!empty($_POST['remarks'])) {echo $_POST['remarks'];} ?></textarea>
                  
                  <button type="submit" name="btn_confirm" class="submit-button">入力内容を確認する</button>
              </form>
           </div>       
     
          
          
           <?php if($page_flag === 1): ?>
             <div class="confirm"> 
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
           <?php endif;?>
              
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

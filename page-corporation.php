<?php
get_header();
?>

<main>
<!-- kv -->

<section class="contact-step-sec">
<div class="contact-step-cnt inner-900">
  <div class="contact-txt">
  <p class="font-wb">お問い合わせをご希望の場合はこちらから</p>
  </div>
<div class="inner-800">
  <div class="contact-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/contact_step1.png" alt=""></div>
<p>以下のフォームに必要事項をご記入の上、「入力内容を確認する」を押してください</p>

<form action="#" method="post">
  <table class="table-contact">
    <tr>
      <th><span>必須</span></th>
      <th class="required">お名前</th>
      <td><input type="text" name="name" required></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">フリガナ</th>
      <td><input type="text" name="furigana" required></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th>生年月日</th>
      <td><input type="date" name="birthday"></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">性別</th>
      <td>
        <label><input type="radio" name="gender" value="male" required> 男性</label>
        <label><input type="radio" name="gender" value="female"> 女性</label>
      </td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">メールアドレス</th>
      <td><input type="email" name="email" required></td>
    </tr>
    <tr>
     <th></th>
      <th>郵便番号</th>
      <td class="post-number">
        〒 &emsp;<input type="text" name="zip1" size="3" maxlength="3">&emsp; -&emsp; <input type="text" name="zip2" size="4" maxlength="4">
      </td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">住所</th>
      <td><input type="text" name="address" required></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">電話番号</th>
      <td><input type="tel" name="phone" required></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">最終学校名</th>
      <td><input type="text" name="school" required></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">卒業（予定）年月日</th>
      <td><input type="month" name="grad_date" required></td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">説明会案内のメール</th>
      <td>
        <label><input type="radio" name="mail_info" value="yes" required> 希望する</label>
        <label><input type="radio" name="mail_info" value="no"> 希望しない</label>
      </td>
    </tr>
    <tr>
      <th><span>必須</span></th>
      <th class="required">お問い合わせ内容</th>
      <td><textarea name="inquiry" rows="5" required></textarea></td>
    </tr>
  </table>
 
<div class="privacy-cnt">
  <p>
    プライバシーポリシー（個人情報保護方針）のページを確認いただき、<br>
    同意をいただける場合は以下にチェックを入れてください。
  </p>
  <div class="privacy-check inner-500">
    <label>
      <input type="checkbox" name="agree" id="agree-check" required>
      プライバシーポリシーに同意する
    </label>
 
  <div class="submit-row">
   <button id="submit-btn" class="inactive" type="button">入力内容を送信する</button>
  </div>
   </div>
</div>

  
</form>

 </div>
  </div>

</section>
</main>
<!--main end-->

<?php
get_footer();
?>
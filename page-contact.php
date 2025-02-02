<!-- page-contact -->
<?php

/**
 * Template Name: page-contact
 * Description: This is the template
 */

get_header('contact');
?>
<main>
  <section style="height:40vh; display:flex; flex-direction:row; margin:0 auto; justify-content:center; align-items:center;">
  <p>お問い合わせフォーム構築は、<br><a href="https://atrail.co.jp/contact" target="_blank" rel="noopener noreferrer" style="color:blue;">こちら(前回ゼロイチ)</a>をご参考ください。<br>遷移先で<span style="color:red;">お伝え済みのパス</span>の入力が必要です
  </p></section>

  <section style="background-color:#f5f5f5;">
  <div style="padding-right:20%; padding-left:20%;"><p>下記のようなフォームも可能です<br>（下記は動的未処理、ご参考まで）</p>
  <form>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label-sm">メール</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label-sm">パスワード</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3">
      </div>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">メール</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">パスワード</label>
    </div>

    <fieldset class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">ご質問内容</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
          <label class="form-check-label" for="gridRadios1">
            資料請求
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            お問い合わせ
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled="">
          <label class="form-check-label" for="gridRadios3">
            サイトに関してのご質問
          </label>
        </div>
      </div>
    </fieldset>
    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck1">
          <label class="form-check-label" for="gridCheck1">
            至急対応希望
          </label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
  </form>

  
  
</div></section>

</main>
<?php
    get_footer(); 
?>
<!-- page-contact -->
<?php

/**
 * Template Name: page-contact
 * Description: This is the template
 */

get_header('contact');
?>
<main>
<form>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label-sm">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3">
      </div>
    </div>
    <fieldset class="row mb-3">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="">
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled="">
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </fieldset>
    <div class="row mb-3">
      <div class="col-sm-10 offset-sm-2">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck1">
          <label class="form-check-label" for="gridCheck1">
            Example checkbox
          </label>
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>

  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div>

</main>
<?php
    get_footer(); 
?>
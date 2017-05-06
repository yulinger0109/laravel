@extends('Home.base.parentlog')
@section('content')

<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>Login</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <button class="btn_login" onClick="cambiar_login()">LOGIN</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>Register</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
            <button class="btn_sign_up" onClick="cambiar_sign_up()">SIGN UP</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="po.jpg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
        <div class="cont_img_back_"> <img src="po.jpg" alt="" /> </div>
        <div class="cont_form_login"> <a href="#" onClick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
          <h2>LOGIN</h2>
          <form action="/login" method="post">
          {{ csrf_field() }}
            <input type="text" placeholder="username" name="User_username"><br>
            <input type="password" placeholder="password" name="User_pass"/><br>
            <input type="submit" class="btn_login" value="Login">
          </form>
        </div>
        <div class="cont_form_sign_up"> <a href="#" onClick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
          <h2>SIGN UP</h2>
          <form action="/login/1" method="post">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
            <input type="text" placeholder="username" name="User_username" /><br>
            <input type="password" placeholder="password" name="User_pass" /><br>
            <input type="password" placeholder="again" name="User_pass2" /><br>
            <button class="btn_sign_up" onClick="cambiar_sign_up()">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

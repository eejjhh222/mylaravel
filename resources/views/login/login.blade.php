<?php
/**
 * Created by PhpStorm.
 * User: eejjh
 * Date: 2018-08-12
 * Time: 오후 4:21
 */
?>
<meta name="csrf-token" content="{{ csrf_token() }}">

<form name="postForm" method="post" action="loginact">
    login form<br>
    @csrf
    EMAIL : <input placeholder="이메일" name="email" type="email" autofocus><br/>
    PW : <input type='password' name="pw" id="pw"><br/>
    <input type="submit" value="로그인">
    <input type="button" value="회원가입" onclick="location.href='join'">
</form>

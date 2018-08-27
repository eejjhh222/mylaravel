<?php
/**
 * Created by PhpStorm.
 * User: eejjh
 * Date: 2018-08-12
 * Time: 오후 4:21
 */
?>
<meta name="csrf-token" content="{{ csrf_token() }}">

login test<br><br>

<form name="postForm" method="post" action="loginact">
    port form<br>
    @csrf
    <!-- ID : <input type='text' name="id" id="id"><br/> -->
    EMAIL : <input placeholder="이메일" name="email" type="email" autofocus><br/>
    PW : <input type='password' name="pw" id="pw"><br/>
    <input type="submit" value="submit">
</form>

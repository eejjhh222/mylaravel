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

<form name="postForm" method="post" action="joinact">
    join form<br>
    @csrf
    <!-- ID : <input type='text' name="id" id="id"><br/> -->
    ID : <input placeholder="ID" name="id" type="id" autofocus><br/>
    EMAIL : <input placeholder="이메일" name="email" type="email"><br/>
    NAME : <input placeholder="이름" name="name" type="name"><br/>
    PW : <input type='password' name="pw" id="pw"><br/>
    <input type="submit" value="submit">
</form>

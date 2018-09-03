<?php
/**
 * Created by PhpStorm.
 * User: eejjh
 * Date: 2018-08-12
 * Time: 오후 4:38
 */
?>

<meta name="csrf-token" content="{{ csrf_token() }}">
login success!<br>
session email : {{ $session_email }}<br>
session id : {{ $id }}<br>

<form name="imgForm" action="faceup" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $id }}">
    <input type="file" id="faceImg" name="faceImg"><br>
    <input type="submit" value="upload">
</form>
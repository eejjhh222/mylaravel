<?php
/**
 * Created by PhpStorm.
 * User: eejjh
 * Date: 2018-08-12
 * Time: 오후 4:21
 */
?>
<meta name="csrf-token" content="{{ csrf_token() }}">

file upload test<br><br>

<form name="fileForm" method="post" action="fileup" enctype="multipart/form-data">
    file form<br>
    @csrf
    단일 파일첨부<br>
    <input type="file" name="imgFile"><br><br>

    다중 파일첨부<br>
    <input type="file" name="imgFiles[]"><br>
    <input type="file" name="imgFiles[]"><br>
    <input type="file" name="imgFiles[]"><br>
    <input type="submit" value="파일업로드">
</form>

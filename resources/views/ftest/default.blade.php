<?php
/**
 * Created by PhpStorm.
 * User: eejjh
 * Date: 2018-08-12
 * Time: 오후 4:21
 */
?>
form test</br>

<form name="getForm" method="get" action="getftest">

    zip : <input type='text' name="zip" id="zip"><br/>
    addr : <input type='text' name="addr1" id="addr1">
    <input type="submit" value="submit">
</form>
<br>
<br>
<br>
<form name="postForm" method="post" action="postftest">
    @csrf
    zip : <input type='text' name="zip" id="zip"><br/>
    addr : <input type='text' name="addr1" id="addr1">
    <input type="submit" value="submit">
</form>

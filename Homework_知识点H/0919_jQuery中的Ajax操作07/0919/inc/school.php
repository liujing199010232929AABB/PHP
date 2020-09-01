<?php
$schools = ['丐帮','古墓派','峨眉派'];
//如果使用$.getJSON()获取上面的$school内容,应该用php中的json_encode($school)转换为json返回
$option = '<option value="">请选择</option>';
foreach ($schools as $key => $value) {
    $option .= "<option value='{$key}'>{$value}</option>";
}
echo $option;




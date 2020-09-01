<?php
$schools = ['丐帮', '古墓派', '峨眉派'];
//echo json_encode($schools);die;
$option = '<option value="">请选择</option>';
foreach ($schools as $key => $value) {
    $option .= "<option value='{$key}'>{$value}</option>";
}
echo $option;

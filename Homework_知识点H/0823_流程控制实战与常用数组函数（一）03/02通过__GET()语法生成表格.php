<?php
//判断是否是GET提交?
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //判断是否存在并不能为空
    if (!empty($_GET['rows']) && !empty($_GET['cols'])) {
        $rows = $_GET['rows'];
        $cols = $_GET['cols'];

        //生成表格的基本结构
        $table = '<table border="1" cellspacing="0" cellpadding="3" width="80%">';
        //生成表头
        $table .= '<tr align="center" bgcolor="#90ee90">';
        for ($i=0; $i<$cols; $i++) {
            $table .= '<th>X</th>';
        }
        //生成表格内容区
        for ($r=0; $r<$rows; $r++) {
            $table .= '<tr>';
            //输出每个单元格
            for ($c=0; $c<$cols; $c++) {
                //设置一下单元格的数据
                $data = $r * $cols + $c;
                $table .= '<td align="center">'.++$data.'</td>';
            }
            $table .= '</tr>';
        }

        $table .= '</table>';


        echo $table;
        exit();
    }
} else {
    exit ('<span style="color:red">请求类型错误</span>');
}

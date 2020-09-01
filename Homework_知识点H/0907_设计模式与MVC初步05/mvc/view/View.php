<?php
/**
 *视图类
 */

namespace mvc\view;


class View
{
    public $data = [];
    //模板赋值
    public function __construct($data)
    {
        $this->data = $data;
    }

    //获取数据
    public function getData()
    {
        return $this->data;
    }

    //渲染模板
    public function display($data)
    {
        $table = '<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table,th,td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;  /*折叠表格线*/
            width: 600px;
            margin: 30px auto;
            text-align: center;
            padding: 5px;
        }

        table tr:first-child {
            background-color: lightgreen;
        }
        table caption {
            font-size: 1.5em;
            margin-bottom: 15px;
        }
    </style>
    <title>MVC简介</title>
</head>
<body>
    <table>
        <caption>员工信息表</caption>
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>年龄</th>
            <th>工资</th>
        </tr>';

        foreach ($data as $staff) {
            $table .= '<tr>';
            $table .= '<td>'.$staff['id'].'</td>';
            $table .= '<td>'.$staff['name'].'</td>';
            $table .= '<td>'.$staff['age'].'</td>';
            $table .= '<td>'.$staff['salary'].'</td>';
            $table .= '</tr>';
        }
        $table .= '</table></body></html>';
        echo $table;
    }
}
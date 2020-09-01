<?php
/**
 * 分页查询的原理
 */

/**
 * 分析分页的原理:
 * 1. LIMIT 参数的作用: 偏移量与显示数量
 * 2. 如果控制每页显示的数量
 * 3. 接收GET参数,用p表示当前页数,每页显示3条
 * 4. 需要的参数:
 * (1).totalPage 总页数
 * (2).totalNumber 一共有多少条数据
 * (3).pageSize 每页显示多少条数据
 * (4)currentPage 当前第几页
 * (5)*.rangeStart 起始页
 * (6)*.rangeEnd 末页
 * 5. 当前偏移量的计算公式: (页数-1)*每页显示的数量
 *    offset = (page-1)*num
 */

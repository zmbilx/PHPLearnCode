<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:31
 */
echo "DATE_ATOM =".date(DATE_ATOM);                 // 输出ATOM格式的日期
echo '<p>DATE_COOKIE = '.date(DATE_COOKIE);         // 输出HTTP cookies格式日期
echo '<p>DATE_ISO8601 = '.date(DATE_ISO8601);       // 输出ISO8601格式日期
echo '<p>DATE_RFC822 = '.date(DATE_RFC822);         // 输出RFC822格式日期
echo '<p>DATE_RFC850 = '.date(DATE_RFC850);         // 输出RFC850格式日期
echo '<p>DATE_RES = '.date(DATE_RFC850);         // 输出RES格式日期
echo '<p>DATE_W3C = '.date(DATE_RFC850);         // 输出W3C格式日期


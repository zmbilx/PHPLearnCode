<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/11/26
 * Time: 10:28
 */

$nextWeek = time()+(7*24*60*60);
echo 'Now:'.date('Y-m-d',time()).'<p>';
echo 'NextWeek:'.date('Y-m-d',$nextWeek).'<p>';
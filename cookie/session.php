<?php
session_start();//给当前用户找属于他的箱子


$_SESSION['name']='hcy2019';

unset($_SESSION['name']);
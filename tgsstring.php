<?php
    //strlen
    echo strlen("http ://www.kodekreasi.com") ."<br>";
    echo strlen("ab cd ef") ."<br>";
    echo strlen("hello") ."<br>";
    echo strlen(" welcome ") . "<br>";
    echo strlen("") . "<br>";

    echo "<br>";

    //str_word_count
    echo str_word_count("Selamat Datang di rumah!") ."<br>";
    echo str_word_count("Demo text") ."<br>";
    echo str_word_count("beautiful") ."<br>";
    echo str_word_count("This is a simple string") ."<br>";
    echo str_word_count("Welcome to linux") ."<br>";

    echo "<br>";

    //strrev
    echo strrev("geeks") ."<br>";
    echo strrev("1098765") ."<br>";
    echo strrev("Potato!") ."<br>";
    echo strrev("www.kitabisa.com") ."<br>";
    echo strrev("Jack") ."<br>";

    echo "<br>";

    //strpos
    echo strpos("abcdef!","a") ."<br>";
    echo strpos("I love php","php") ."<br>";
    echo strpos("to do or not to do","not") ."<br>";
    echo strpos("PHP is amazing","is") ."<br>";
    echo strpos("Hello php","php") ."<br>";

    echo "<br>";

    //str_replace
    echo str_replace("body","black","body car") ."<br>";
    echo str_replace("internet","media net","saya akan membeli aplikasi php di internet") ."<br>"; 
    echo str_replace("you","him","It was nice meeting you. May you shine bright") ."<br>";
    echo str_replace("buah","apel","kamu makan buah") ."<br>";
    echo str_replace("hello","hi","hello there") ."<br>";
?>

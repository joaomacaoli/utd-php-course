<?php

    class Html{

        public static function openTag($tag){
            return "<$tag>";
        }

        public static function closeTag($tag){
            return "</$tag>";
        }

        public static function write($text){
            return $text;
        }

    }
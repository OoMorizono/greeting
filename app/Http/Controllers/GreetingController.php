<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function comments($time)
    {
        if ($time == 'morning') {
            $result = '朝の挨拶';
            $result2 = 'おはようございます';
        } elseif ($time == 'afternoon') {
            $result = '昼の挨拶';
            $result2 = 'こんにちは';
        } elseif ($time == 'evening') {
            $result = '夕方の挨拶';
            $result = 'こんばんは';
        } elseif ($time == 'night') {
            $result = '夜の挨拶';
            $result2 = 'おやすみ';
        }
        return view(
            'message.comments',
            [
                'result' => $result,
                'result2' => $result2,
            ]
        );
    }
    public function freeword($free)
    {
        return view(
            'message.freeword',
            [
                'free' => $free
            ]
        );
    }
    public function random()
    {
        $ary = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $result = $ary[array_rand($ary)];
        return view(
            'message.random',
            [
                'result' => $result,
            ]
        );
    }
}

<?php

namespace App\Controllers;

class Vistas extends BaseController
{
    public function v_contactanos(): string
    {
        return view('v_header').view('v_contactanos').view('v_footer');
    }
    public function v_inicio(): string
    {
        return view('v_header').view('v_inicio').view('v_footer');
    }
    public function v_noticias(): string
    {
        return view('v_header').view('v_noticias').view('v_footer');
    }
    public function v_productos(): string
    {
        return view('v_header').view('v_productos').view('v_footer');
    }
    public function v_quienes_somos(): string
    {
        return view('v_header').view('v_quienes_somos').view('v_footer');
    }
    public function v_unete(): string
    {
        return view('v_header').view('v_unete').view('v_footer');
    }
}

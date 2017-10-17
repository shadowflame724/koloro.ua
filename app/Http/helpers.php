<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 13.05.2017
 * Time: 23:30
 */
function setActive($path)
{
    return Request::is($path . '*') ? ' class=active' :  '';
}

function localeActive($locale)
{
    return Request::is(App::getLocale() == $locale) ? ' class=active' : '';
}
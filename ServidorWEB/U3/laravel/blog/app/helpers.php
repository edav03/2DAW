<?php

function setActivo($rutaName){
    $date = date('d/m/y');
    return request()->routeIs($rutaName) ? $date : '';
}
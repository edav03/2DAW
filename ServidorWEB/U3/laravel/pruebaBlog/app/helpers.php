<?php

function setActivo($ruta){
    return request()->routeIs($ruta)? date('d/m/y'): "No va";
}
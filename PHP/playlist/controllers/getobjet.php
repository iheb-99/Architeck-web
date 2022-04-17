<?php

function chargerClasse($classe)
{
  require './models/' . $classe . '.php';
}

spl_autoload_register('chargerClasse');

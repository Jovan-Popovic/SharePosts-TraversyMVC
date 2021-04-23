<?php

function redirect($page)
{
    return header('location: ' . URLROOT . '/' . $page);
}

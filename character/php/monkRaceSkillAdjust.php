<?php

function adjustPickLocks ($race)
{
    $adjust = 0;
    
    if($race === "Dwarf")
    {
        $adjust = 7;
    }
    else if($race === "Elf")
    {
        $adjust = -5;
    }
    else if($race === "Gnome")
    {
        $adjust = 5;
    }
    else if($race === "Halfling")
    {
        $adjust = 5;
    }
    else if($race === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($race === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustFindRemoveTraps ($race)
{
    $adjust = 0;
    
    if($race === "Dwarf")
    {
        $adjust = 10;
    }
    else if($race === "Elf")
    {
        $adjust = 0;
    }
    else if($race === "Gnome")
    {
        $adjust = 7;
    }
    else if($race === "Halfling")
    {
        $adjust = 5;
    }
    else if($race === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($race === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}



function adjustPickPockets ($race)
{
    $adjust = 0;
    
    if($race === "Dwarf")
    {
        $adjust = 0;
    }
    else if($race === "Elf")
    {
        $adjust = 5;
    }
    else if($race === "Gnome")
    {
        $adjust = 0;
    }
    else if($race === "Halfling")
    {
        $adjust = 5;
    }
    else if($race === "Half-Elf")
    {
        $adjust = 10;
    }
    else if($race === "Half-Orc")
    {
        $adjust = -5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustMoveSilently ($race)
{
    $adjust = 0;
    
    if($race === "Dwarf")
    {
        $adjust = 0;
    }
    else if($race === "Elf")
    {
        $adjust = 7;
    }
    else if($race === "Gnome")
    {
        $adjust = 5;
    }
    else if($race === "Halfling")
    {
        $adjust = 10;
    }
    else if($race === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($race === "Half-Orc")
    {
        $adjust = 0;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustClimbWalls ($race)
{
    $adjust = 0;
    
    if($race === "Dwarf")
    {
        $adjust = -10;
    }
    else if($race === "Elf")
    {
        $adjust = 0;
    }
    else if($race === "Gnome")
    {
        $adjust = -15;
    }
    else if($race === "Halfling")
    {
        $adjust = -15;
    }
    else if($race === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($race === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}



function adjustHideShadow ($race)
{
    $adjust = 0;
    
    if($race === "Dwarf")
    {
        $adjust = 0;
    }
    else if($race === "Elf")
    {
        $adjust = 10;
    }
    else if($race === "Gnome")
    {
        $adjust = 5;
    }
    else if($race === "Halfling")
    {
        $adjust = 10;
    }
    else if($race === "Half-Elf")
    {
        $adjust = 5;
    }
    else if($race === "Half-Orc")
    {
        $adjust = 0;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function hearNoiseAdjust ($race, $level)
{
    
    $adjust = 0;
    
    if($race === "Elf" && $level <= 9)
    {
        $adjust = 1;
    }
    
    return $adjust;
    
}






?>
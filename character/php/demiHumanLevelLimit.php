<?php
/*Thief Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Gnome")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Halfling")
    {
        if($level <= 14)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 14;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Half-Orc")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>
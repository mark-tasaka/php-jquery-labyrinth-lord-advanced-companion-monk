<?php

function turnMovement($input, $level)
{
    $turnMove = "-";
    
    if($level >= 1 && $level <= 2)
    {
        if($input <= 40)
        {
            $turnMove = "120'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "90'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "60'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "30'";
        }
        
    }
    else if($level >= 3 && $level <= 4)
    {
        if($input <= 40)
        {
            $turnMove = "150'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "120'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "90'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "60'";
        }
    }
    
    else if($level >= 5 && $level <= 6)
    {
        if($input <= 40)
        {
            $turnMove = "180'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "150'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "120'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "90'";
        }
        
    }
    
    else if($level >= 7 && $level <= 8)
    {
        if($input <= 40)
        {
            $turnMove = "210'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "180'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "150'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "120'";
        }
        
    }
    
    else if($level >= 9 && $level <= 10)
    {
        if($input <= 40)
        {
            $turnMove = "240'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "210'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "180'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "150'";
        }
        
    }
    
    else if($level >= 11 && $level <= 12)
    {
        if($input <= 40)
        {
            $turnMove = "270'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "240'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "210'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "180'";
        }
        
    }
    
    else if($level >= 13 && $level <= 14)
    {
        if($input <= 40)
        {
            $turnMove = "300'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "270'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "240'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "210'";
        }
        
    }
    
    else if($level >= 15 && $level <= 16)
    {
        if($input <= 40)
        {
            $turnMove = "330'";
        }
        else if($input > 40 && $input <= 60)
        {
            $turnMove = "300'";
        }
        else if($input > 60 && $input <= 80)
        {
            $turnMove = "270'";
        }
        else if($input > 80 && $input <= 160)
        {
            $turnMove = "240'";
        }
        
    }
    
    
    
    
    return $turnMove;
}

function encounterMovement($input)
{
    $turnMove = "-";
    
    if($input == "330'")
    {
        $turnMove = "110'/round";
    }
    else if($input == "300'")
    {
        $turnMove = "100'/round";
    }
    else if($input == "270'")
    {
        $turnMove = "90'/round";
    }
    else if($input == "240'")
    {
        $turnMove = "80'/round";
    }
    else if($input == "210'")
    {
        $turnMove = "70'/round";
    }
    else if($input == "180'")
    {
        $turnMove = "60'/round";
    }
    else if($input == "150'")
    {
        $turnMove = "50'/round";
    }
    else if($input == "120'")
    {
        $turnMove = "40'/round";
    }
    else if($input == "90'")
    {
        $turnMove = "30'/round";
    }
    else if($input == "60'")
    {
        $turnMove = "20'/round";
    }
    else if($input == "30'")
    {
        $turnMove = "10'/round";
    }
    else
    {
        
        $turnMove = "xxx";
    }
    
    return $turnMove;
}


function runningMovement($input)
{
    $turnMove = "-";
    
    if($input <= 40)
    {
        $turnMove = "120'/round";
    }
    else if($input > 40 && $input <= 60)
    {
        $turnMove = "90'/round";
    }
    else if($input > 60 && $input <= 80)
    {
        $turnMove = "60'/round";
    }
    else if($input > 80 && $input <= 160)
    {
        $turnMove = "30'/round";
    }
    
    return $turnMove;
}



?>
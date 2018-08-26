<?php

function espLevelAdj($level)
{
    $value = $level - 6;
    $adjust = 0;
    
    if($value <= 0)
    {
        $adjust = 0;
    }
    else
    {
        $adjust = $value;
    }
    
    return $adjust;
}


function monkAbility ($level)
{
    $message = "";
    $espVal = espLevelAdj($level);
    
    if($level <= 3)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC that the opponent is <br/>killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.";
    }
    else if($level == 4)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC that the opponent is <br/>killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants.";
    }
    else if($level == 5)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC that the opponent is <br/>killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants.<br/>
                    *Feign Death for 1d6x" . $level . " turns.<br/>
                    *Able to fall 20’ without suffering damage (must be 1’ from a wall).";
    }
    else if($level == 6)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC that the opponent is <br/>killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants.<br/>
                    *Feign Death for 1d6x" . $level . " turns.<br/>
                    *Able to fall 30’ without suffering damage (must be 4’ from a wall).<br/>
                    *ESP will only work on the Monk " . (10 - $espVal) . "% of the time.<br/>";
    }
    else if($level == 7)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC that the opponent is <br/>killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants.<br/>
                    *Feign Death for 1d6x" . $level . " turns.<br/>
                    *Able to fall 30’ without suffering damage (must be 4’ from a wall).<br/>
                    *ESP will only work on the Monk " . (10 - $espVal) . "% of the time.<br/>
                    *Can heal 1d6+" . ($level - 6) . " hit points once per day by meditating for 1 round.";
    }
    else if($level >= 8 && $level <= 9)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC+"
                    . ($level - 7) . " that the opponent<br/> is killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants and animals.<br/>
                    *Feign Death for 1d6x" . $level . " turns.<br/>
                    *Able to fall 30’ without suffering damage (must be 4’ from a wall).<br/>
                    *ESP will only work on the Monk " . (10 - $espVal) . "% of the time.<br/>
                    *Can heal 1d6+" . ($level - 6) . " hit points once per day by meditating for 1 round.<br/>
                    *Immune to hypnotizing effects and suggestion; 50% immune to charm effects.<br/>
                    *Can attract 1st level Monk followers.";
    }
    else if($level >= 10 && $level <= 12)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC+"
                    . ($level - 7) . " that the opponent<br/> is killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants and animals.<br/>
                    *Feign Death for 1d6x" . $level . " turns.<br/>
                    *Able to fall 30’ without suffering damage (must be 4’ from a wall).<br/>
                    *ESP will only work on the Monk " . (10 - $espVal) . "% of the time.<br/>
                    *Can heal 1d6+" . ($level - 6) . " hit points once per day by meditating for 1 round.<br/>
                    *Immune to hypnotizing effects and suggestion; 50% immune to charm effects.<br/>
                    *Can attract 1st level Monk followers.<br/>
                    *Immune to the effects of Geas, Quest, and all poisons.";
    }
    else if($level >= 13)
    {
        $message = "*Do not gain bonuses to hit/damage from STR or to AC from DEX.<br/>
                    *When fighting with bare hands, if an attack succeeds by 5 more than what is<br/> required to hit on a d20, the opponent is stunned for d6 rounds; plus, there is<br/> a base probability (d100) equal to the opponent’s AC+"
                    . ($level - 7) . " that the opponent<br/> is killed instantly.<br/>
                    *Can only be surprised with 1 on a d6.<br/>
                    *Able to speak with plants and animals.<br/>
                    *Feign Death for 1d6x" . $level . " turns.<br/>
                    *Able to fall 30’ without suffering damage (must be 4’ from a wall).<br/>
                    *ESP will only work on the Monk " . (10 - $espVal) . "% of the time.<br/>
                    *Can heal 1d6+" . ($level - 6) . " hit points once per day by meditating for 1 round.<br/>
                    *Immune to hypnotizing effects and suggestion; 50% immune to charm effects.<br/>
                    *Can attract 1st level Monk followers.<br/>
                    *Immune to the effects of Geas, Quest, and all poisons.<br/>
                    *Gains the 'Quivering Palm' attack";
    }
    
    return $message;
    
}


function weaponDamageBonus ($level)
{
    
    $bonusDamage = 0;
    
    if($level >= 2 && $level <= 3)
    {
        $bonusDamage = 1;
    }
    else if($level >= 4 && $level <= 5)
    {
        $bonusDamage = 2;
    }
    else if($level >= 6 && $level <= 7)
    {
        $bonusDamage = 3;
    }
    else if($level >= 8 && $level <= 9)
    {
        $bonusDamage = 4;
    }
    else if($level >= 10 && $level <= 11)
    {
        $bonusDamage = 5;
    }
    else if($level >= 12 && $level <= 13)
    {
        $bonusDamage = 6;
    }
    else if($level >= 14 && $level <= 15)
    {
        $bonusDamage = 7;
    }
    else if($level == 16)
    {
        $bonusDamage = 8;
    }
    else
    {
        $bonusDamage = 0;
    }
    
    $message = "*Weapon damage bonus: +" . $bonusDamage . " damage";
    
    return $message;
}


function pickLocks ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 17;
            break;
            
        case 2:
            $skill = 23;
            break;
            
        case 3:
            $skill = 27;
            break;
            
        case 4:
            $skill = 31;
            break;
            
        case 5:
            $skill = 35;
            break;
            
        case 6:
            $skill = 45;
            break;
            
        case 7:
            $skill = 55;
            break;
            
        case 8:
            $skill = 65;
            break;
            
        case 9:
            $skill = 75;
            break;
            
        case 10:
            $skill = 85;
            break;
            
        case 11:
            $skill = 95;
            break;
            
        case 12:
            $skill = 97;
            break;
            
        case 13:
            $skill = 99;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        case 16:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function findRemoveTraps ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 14;
            break;
            
        case 2:
            $skill = 17;
            break;
            
        case 3:
            $skill = 20;
            break;
            
        case 4:
            $skill = 23;
            break;
            
        case 5:
            $skill = 33;
            break;
            
        case 6:
            $skill = 43;
            break;
            
        case 7:
            $skill = 53;
            break;
            
        case 8:
            $skill = 63;
            break;
            
        case 9:
            $skill = 73;
            break;
            
        case 10:
            $skill = 83;
            break;
            
        case 11:
            $skill = 93;
            break;
            
        case 12:
            $skill = 95;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        case 16:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}



function pickPockets ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 23;
            break;
            
        case 2:
            $skill = 27;
            break;
            
        case 3:
            $skill = 30;
            break;
            
        case 4:
            $skill = 37;
            break;
            
        case 5:
            $skill = 40;
            break;
            
        case 6:
            $skill = 43;
            break;
            
        case 7:
            $skill = 53;
            break;
            
        case 8:
            $skill = 63;
            break;
            
        case 9:
            $skill = 73;
            break;
            
        case 10:
            $skill = 83;
            break;
            
        case 11:
            $skill = 93;
            break;
            
        case 12:
            $skill = 105;
            break;
            
        case 13:
            $skill = 115;
            break;
            
        case 14:
            $skill = 125;
            break;
            
        case 15:
            $skill = 125;
            break;
            
        case 16:
            $skill = 125;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function moveSilently ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 23;
            break;
            
        case 2:
            $skill = 27;
            break;
            
        case 3:
            $skill = 30;
            break;
            
        case 4:
            $skill = 37;
            break;
            
        case 5:
            $skill = 40;
            break;
            
        case 6:
            $skill = 43;
            break;
            
        case 7:
            $skill = 53;
            break;
            
        case 8:
            $skill = 63;
            break;
            
        case 9:
            $skill = 73;
            break;
            
        case 10:
            $skill = 83;
            break;
            
        case 11:
            $skill = 93;
            break;
            
        case 12:
            $skill = 95;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        case 16:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function climbWalls ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 87;
            break;
            
        case 2:
            $skill = 88;
            break;
            
        case 3:
            $skill = 89;
            break;
            
        case 4:
            $skill = 90;
            break;
            
        case 5:
            $skill = 91;
            break;
            
        case 6:
            $skill = 92;
            break;
            
        case 7:
            $skill = 93;
            break;
            
        case 8:
            $skill = 94;
            break;
            
        case 9:
            $skill = 95;
            break;
            
        case 10:
            $skill = 96;
            break;
            
        case 11:
            $skill = 97;
            break;
            
        case 12:
            $skill = 98;
            break;
            
        case 13:
            $skill = 99;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        case 16:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}



function hideInShadows ($level)
{
    $skill = 0;
    
    switch($level)
    {
        case 1:
            $skill = 13;
            break;
            
        case 2:
            $skill = 17;
            break;
            
        case 3:
            $skill = 20;
            break;
            
        case 4:
            $skill = 27;
            break;
            
        case 5:
            $skill = 30;
            break;
            
        case 6:
            $skill = 37;
            break;
            
        case 7:
            $skill = 47;
            break;
            
        case 8:
            $skill = 57;
            break;
            
        case 9:
            $skill = 67;
            break;
            
        case 10:
            $skill = 77;
            break;
            
        case 11:
            $skill = 87;
            break;
            
        case 12:
            $skill = 90;
            break;
            
        case 13:
            $skill = 97;
            break;
            
        case 14:
            $skill = 99;
            break;
            
        case 15:
            $skill = 99;
            break;
            
        case 16:
            $skill = 99;
            break;
            
        default:
            $skill = 9999;
            break;
            
    }
    
    return $skill;
}


function hearNoise ($level)
{
    $message = 2;
    
    if($level >= 3 && $level <=5)
    {
        $message = 3;
    }
    else if($level >= 6 && $level <=9)
    {
        $message = 4;
    }
    else if($level >= 10)
    {
        $message = 5;
    }
    else
    {
        $message = 2;
    }
    
    return $message;
    
    
}




function monkAcBonus ($level)
{
    $monkSpecial = 0;
    
    switch($level)
    {
        case 1:
            $monkSpecial = 0;
            break;
            
        case 2:
            $monkSpecial = 1;
            break;
            
        case 3:
            $monkSpecial = 2;
            break;
            
        case 4:
            $monkSpecial = 3;
            break;
            
        case 5:
            $monkSpecial = 4;
            break;
            
        case 6:
            $monkSpecial = 5;
            break;
            
        case 7:
            $monkSpecial = 6;
            break;
            
        case 8:
            $monkSpecial = 7;
            break;
            
        case 9:
            $monkSpecial = 7;
            break;
            
        case 10:
            $monkSpecial = 8;
            break;
            
        case 11:
            $monkSpecial = 8;
            break;
            
        case 12:
            $monkSpecial = 9;
            break;
            
        case 13:
            $monkSpecial = 9;
            break;
            
        case 14:
            $monkSpecial = 10;
            break;
            
        case 15:
            $monkSpecial = 11;
            break;
            
        case 16:
            $monkSpecial = 12;
            break;
            
        default:
            $monkSpecial = 0;
            break;
            
    }
    
    return $monkSpecial;
}


function monkUnarmedDamage ($level)
{
    $monkSpecial = "";
    
    switch($level)
    {
        case 1:
            $monkSpecial = "1d4";
            break;
            
        case 2:
            $monkSpecial = "1d4+1";
            break;
            
        case 3:
            $monkSpecial = "1d6";
            break;
            
        case 4:
            $monkSpecial = "1d8";
            break;
            
        case 5:
            $monkSpecial = "1d10";
            break;
            
        case 6:
            $monkSpecial = "1d12";
            break;
            
        case 7:
            $monkSpecial = "2d8";
            break;
            
        case 8:
            $monkSpecial = "3d6";
            break;
            
        case 9:
            $monkSpecial = "2d10";
            break;
            
        case 10:
            $monkSpecial = "2d12";
            break;
            
        case 11:
            $monkSpecial = "3d8";
            break;
            
        case 12:
            $monkSpecial = "3d10";
            break;
            
        case 13:
            $monkSpecial = "5d6";
            break;
            
        case 14:
            $monkSpecial = "4d8";
            break;
            
        case 15:
            $monkSpecial = "3d12";
            break;
            
        case 16:
            $monkSpecial = "4d10";
            break;
            
        default:
            $monkSpecial = "";
            break;
            
    }
    
    return $monkSpecial;
}



function monkUnarmedAttacks ($level)
{
    $monkSpecial = "";
    
    switch($level)
    {
        case 1:
            $monkSpecial = "1/1";
            break;
            
        case 2:
            $monkSpecial = "1/1";
            break;
            
        case 3:
            $monkSpecial = "1/1";
            break;
            
        case 4:
            $monkSpecial = "4/3";
            break;
            
        case 5:
            $monkSpecial = "4/3";
            break;
            
        case 6:
            $monkSpecial = "3/2";
            break;
            
        case 7:
            $monkSpecial = "3/2";
            break;
            
        case 8:
            $monkSpecial = "3/2";
            break;
            
        case 9:
            $monkSpecial = "2/1";
            break;
            
        case 10:
            $monkSpecial = "2/1";
            break;
            
        case 11:
            $monkSpecial = "5/2";
            break;
            
        case 12:
            $monkSpecial = "5/2";
            break;
            
        case 13:
            $monkSpecial = "3/1";
            break;
            
        case 14:
            $monkSpecial = "3/1";
            break;
            
        case 15:
            $monkSpecial = "4/1";
            break;
            
        case 16:
            $monkSpecial = "4/1";
            break;
            
        default:
            $monkSpecial = "";
            break;
            
    }
    
    return $monkSpecial;
}


function monkMovement ($level)
{
    $monkSpecial = "";
    
    switch($level)
    {
        case 1:
            $monkSpecial = "120' (40')";
            break;
            
        case 2:
            $monkSpecial = "120' (40')";
            break;
            
        case 3:
            $monkSpecial = "150' (50')";
            break;
            
        case 4:
            $monkSpecial = "150' (50')";
            break;
            
        case 5:
            $monkSpecial = "180' (60')";
            break;
            
        case 6:
            $monkSpecial = "180' (60')";
            break;
            
        case 7:
            $monkSpecial = "210' (70')";
            break;
            
        case 8:
            $monkSpecial = "210' (70')";
            break;
            
        case 9:
            $monkSpecial = "240' (80')";
            break;
            
        case 10:
            $monkSpecial = "240' (80')";
            break;
            
        case 11:
            $monkSpecial = "270' (90')";
            break;
            
        case 12:
            $monkSpecial = "270' (90')";
            break;
            
        case 13:
            $monkSpecial = "300' (100')";
            break;
            
        case 14:
            $monkSpecial = "300' (100')";
            break;
            
        case 15:
            $monkSpecial = "330' (110')";
            break;
            
        case 16:
            $monkSpecial = "330' (110')";
            break;
            
        default:
            $monkSpecial = "";
            break;
            
    }
    
    return $monkSpecial;
}



?>
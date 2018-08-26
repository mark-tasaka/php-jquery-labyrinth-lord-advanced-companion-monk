

function demiHumanStrength (race, abilityScore)
{
    let ability = 0;
    
    if(race === "Dwarf")
    {
        if(abilityScore <= 8)
        {
            ability = 8;
        }
        else
        {
            ability = abilityScore;
        }
            
    }
    else if(race === "Elf")
    {
        ability = abilityScore;
    }
    else if(race === "Gnome")
    {
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Halfling")
    {
        abilityScore -= 1;
        
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Elf")
    {
        ability = abilityScore;
    }
    else if(race === "Half-Orc")
    {
        abilityScore += 1;
        
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
    }
    else
    {
        ability = abilityScore;
    }
    
    return ability;
}


function demiHumanDexterity (race, abilityScore)
{
    let ability = 0;
    
    if(race === "Dwarf")
    {
        abilityScore -= 1;
        
        if(abilityScore <= 3)
        {
            ability = 3;
        }
        else
        {
            ability = abilityScore;
        }
            
    }
    else if(race === "Elf")
    {
        abilityScore += 1;
        
        if(abilityScore <= 7)
        {
            ability = 7;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Gnome")
    {        if(abilityScore <= 8)
        {
            ability = 8;
        }
        else
        {
            ability = abilityScore;
        }
    }
    else if(race === "Halfling")
    {
        abilityScore += 1;
        
        if(abilityScore <= 9)
        {
            ability = 9;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Elf")
    {
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Orc")
    {
        if(abilityScore >= 17)
        {
            ability = 17;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else
    {
        ability = abilityScore;
    }
    
    return ability;
}


function demiHumanConstitution (race, abilityScore)
{
    let ability = 0;
    
    if(race === "Dwarf")
    {
        abilityScore += 1;
        
        if(abilityScore <= 12)
        {
            ability = 12;
        }
        else
        {
            ability = abilityScore;
        }
            
    }
    else if(race === "Elf")
    {
        abilityScore -= 1;
        
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Gnome")
    {        
        if(abilityScore <= 9)
        {
            ability = 9;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Halfling")
    {       
        if(abilityScore <= 9)
        {
            ability = 9;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Elf")
    {
               
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
    }
    else if(race === "Half-Orc")
    {
        
        abilityScore += 1;
        
        if(abilityScore <= 13)
        {
            ability = 13;
        }
        else
        {
            ability = abilityScore;
        }
    }
    else
    {
        ability = abilityScore;
    }
    
    return ability;
}


function demiHumanIntelligence (race, abilityScore)
{
    let ability = 0;
    
    if(race === "Dwarf")
    {
        ability = abilityScore;
            
    }
    else if(race === "Elf")
    {     
        if(abilityScore <= 9)
        {
            ability = 9;
        }
        else
        {
            ability = abilityScore;
        }
    }
    else if(race === "Gnome")
    {     
        if(abilityScore <= 7)
        {
            ability = 7;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Halfling")
    {     
        if(abilityScore <= 6)
        {
            ability = 6;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Elf")
    {     
        if(abilityScore <= 4)
        {
            ability = 4;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Orc")
    { 
        if(abilityScore >= 17)
        {
            ability = 17;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else
    {
        ability = abilityScore;
    }
    
    return ability;
}


function demiHumanWisdom (race, abilityScore)
{
    let ability = 0;
    
    if(race === "Dwarf")
    {
        ability = abilityScore;
            
    }
    else if(race === "Elf")
    {
        ability = abilityScore;
        
    }
    else if(race === "Gnome")
    {
        
        ability = abilityScore;
    }
    else if(race === "Halfling")
    {
        if(abilityScore >= 17)
        {
            ability = 17;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else if(race === "Half-Elf")
    {
        ability = abilityScore;
        
    }
    else if(race === "Half-Orc")
    {
        if(abilityScore >= 14)
        {
            ability = 14;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else
    {
        ability = abilityScore;
    }
    
    return ability;
}



function demiHumanCharisma (race, abilityScore)
{
    let ability = 0;
    
    if(race === "Dwarf")
    {
        if(abilityScore >= 16)
        {
            ability = 16;
        }
        else
        {
            ability = abilityScore;
        }
            
    }
    else if(race === "Elf")
    {
        ability = abilityScore;
        
    }
    else if(race === "Gnome")
    {
         
        if(abilityScore <= 8)
        {
            ability = 8;
        }
        else
        {
            ability = abilityScore;
        }
    }
    else if(race === "Halfling")
    {
        ability = abilityScore;
        
    }
    else if(race === "Half-Elf")
    {
        ability = abilityScore;
        
    }
    else if(race === "Half-Orc")
    {
        if(abilityScore >= 12)
        {
            ability = 12;
        }
        else
        {
            ability = abilityScore;
        }
        
    }
    else
    {
        ability = abilityScore;
    }
    
    return ability;
}


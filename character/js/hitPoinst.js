/*HitPoints randomly generate hit points*/
/*Monk 2d4 at first level; 1d4 each level after*/

function hitPoints (level, constitutionModifier)
{
    let hitPoints = Math.floor((Math.random() * 4) + 1);
    let hitDice = level;
    
  for(let counter = 0; counter < hitDice; counter++)
    {
        let points = 0;

        points = Math.floor((Math.random() * 4) + 1) + constitutionModifier;

        if(points < 2)
            {
                points = 2;
            }

        hitPoints += points;
    }
    
    return hitPoints;
}

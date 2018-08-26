<!DOCTYPE html>
<html>
<head>
<title>Labyrinth Lord Monk Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Labyrinth Lord Monk Character Generator. Goblinoid Games.">
	<meta name="keywords" content="Labyrinth Lord, Goblinoid Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/ll_monk.css">
	<link rel="stylesheet" type="text/css" href="css/ll_monk_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/modifiers.js"></script>
    <script type="text/javascript" src="./js/hitPoinst.js"></script>
    <script type="text/javascript" src="./js/primeReq.js"></script>
    <script type="text/javascript" src="./js/abilityScoreAddition.js"></script>
    <script type="text/javascript" src="./js/demiHumanAbilityScoreRange.js"></script>
    
    
    
</head>
<body>
    
    <!--PHP-->
    <?php
    
    include 'php/checks.php';
    include 'php/weapons.php';
    include 'php/gear.php';
    include 'php/coins.php';
    include 'php/encumbrance.php';
    include 'php/classDetails.php';
    include 'php/clothing.php';
    include 'php/characterRace.php';
    include 'php/demiHumanLevelLimit.php';
    include 'php/demiHumanSaveModifier.php';
    include 'php/monkAbilities.php';
    include 'php/monkRaceSkillAdjust.php';
    
    
        if(isset($_POST["theCharacterName"]))
        {
            $characterName = $_POST["theCharacterName"];
    
        }
    
        if(isset($_POST["thePlayerName"]))
        {
            $playerName = $_POST["thePlayerName"];
        
        }    
    
        if(isset($_POST["theAlignment"]))
        {
            $alignment = $_POST["theAlignment"];
        }
        
    
    $characterRace = "Human";
    
        if(isset($_POST["theLevel"]))
        {
            $level = $_POST["theLevel"];
        
        } 
    
    $level = levelLimit ($characterRace, $level);
    
    $exNext = experienceNextLevel($level);
    
    $thacoAdvancement = thacoAdjust ($level);
    

        if(isset($_POST["theGold"]))
        {
            $coins = $_POST["theGold"];
        }
    
        $coinQuantity = getCoins($coins)[0];
        $coinType = getCoins($coins)[1];
    
    
         
        $weaponArray = array();
        $weaponNames = array();
        $weaponDamage = array();
        $weaponWeight = array();
    
    
        if(isset($_POST["theWeapons"]))
        {
            foreach($_POST["theWeapons"] as $weapon)
            {
                array_push($weaponArray, $weapon);
            }
        }
    
    foreach($weaponArray as $select)
    {
        array_push($weaponNames, getWeapon($select)[0]);
    }
        
    foreach($weaponArray as $select)
    {
        array_push($weaponDamage, getWeapon($select)[1]);
    }
        
    $totalWeaponWeight = 0;
    
    foreach($weaponArray as $select)
    {
        array_push($weaponWeight, getWeapon($select)[2]);
        $totalWeaponWeight += getWeapon($select)[2];
    }
    
    

        $gearArray = array();
        $gearNames = array();
        $gearWeight = array();
    
    
        if(isset($_POST["theGear"]))
        {
            foreach($_POST["theGear"] as $weapon)
            {
                array_push($gearArray, $weapon);
            }
        }
    
        foreach($gearArray as $select)
        {
            array_push($gearNames, getGear($select)[0]);
        }
        
        $totalGearWeightOnly = 0;
    
        foreach($gearArray as $select)
        {
            array_push($gearWeight, getGear($select)[1]);
            $totalGearWeightOnly += getGear($select)[1];
        }
    
        $clothingArray = array();
        $clothingNames = array();
        $clothingWeight = array();
    
    
        if(isset($_POST["theClothing"]))
        {
            foreach($_POST["theClothing"] as $clothing)
            {
                array_push($clothingArray, $clothing);
            }
        }
    
        foreach($clothingArray as $select)
        {
            array_push($clothingNames, getClothing($select)[0]);
        }
        
        $totalClothingWeight = 0;
    
        foreach($clothingArray as $select)
        {
            array_push($clothingWeight, getClothing($select)[1]);
            $totalClothingWeight += getClothing($select)[1];
        }
    
    $totalGearWeight = $totalGearWeightOnly + $totalClothingWeight;
    
    
    $totalWeightCarried = $totalWeaponWeight + $totalGearWeight + $coinQuantity;
    
    $movementTurn = turnMovement($totalWeightCarried, $level);
    
    $movementEncounter = encounterMovement($movementTurn);
    
   // $movementRunning = runningMovement($totalWeightCarried);
    
    $demiHumanBreathSave = demiHumanBreathMod ($characterRace);
    $demiHumanPoisonSave = demiHumanPoisonMod($characterRace);
    $demiHumanPetrifySave = demiHumanPetrifyMod($characterRace);
    $demiHumanWandSave = demiHumanWandMod($characterRace);
    $demiHumanSpellSave = demiHumanSpellMod($characterRace);
    
    $vsBreathAttacks = saveBreathAttacks($level) - $demiHumanBreathSave;
    $vsPoisonDeath = savePoisonDeath ($level) - $demiHumanPoisonSave;
    $vsPetrify = savePetrify ($level) - $demiHumanPetrifySave;
    $vsWand = saveWand ($level);
    $vsSpell = saveSpell ($level);
    
    $characterRaceTraits = demiHumanTraits ($characterRace);
    $characterRaceTitle = demiHumanTitle($characterRace);
    
    $monkMessage = monkAbility ($level);
    $monkWeaponDamageBonus = weaponDamageBonus ($level);
    
    $monkPickLocks = pickLocks ($level);
    $monkFindRemoveTraps = findRemoveTraps ($level);
    $monkMoveSilent = moveSilently ($level);
    $monkClimbWalls = climbWalls ($level);
    $monkHideInShadows = hideInShadows ($level);
    $monkHearNoise = hearNoise ($level);
    
    $acBonus = monkAcBonus ($level);
    $unarmedDamage = monkUnarmedDamage ($level);
    $unarmedAttacks = monkUnarmedAttacks ($level);
    $monkSpeed = monkMovement ($level);

    
    ?>

    
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
           
		<span id="strength"></span>
		<span id="dexterity"></span> 
		<span id="constitution"></span> 
		<span id="intelligence"></span>
		<span id="wisdom"></span>
       <span id="charisma"></span>
		  
       
		<span id="strengthModDesc"></span>
		<span id="dexterityModDesc"></span> 
		<span id="constitutionModDesc"></span> 
		<span id="intelligenceModDesc"></span>
		<span id="wisdomModDesc"></span>
       <span id="charismaModDesc"></span>
       
       <span id="race">
           <?php
           echo $characterRace;
           ?>
       </span>
       
       <span id="saveBreathAttack"></span>
       
       
       <span id="savePoisonDeath"></span>
       <span id="savePetrify"></span>
       <span id="saveWands"></span>
       <span id="saveSpell"></span>
       
       <span id="dieRollMethod"></span>
       
       <span id="class">Monk</span>
       
       
       <span id="exNextLevel">
           <?php
           echo $exNext;
           ?>
       
       </span>
       
       
       <span id="meleeAc0"></span>
       <span id="meleeAc1"></span>
       <span id="meleeAc2"></span>
       <span id="meleeAc3"></span>
       <span id="meleeAc4"></span>
       <span id="meleeAc5"></span>
       <span id="meleeAc6"></span>
       <span id="meleeAc7"></span>
       <span id="meleeAc8"></span>
       <span id="meleeAc9"></span>
       
       <span id="missileAc0"></span>
       <span id="missileAc1"></span>
       <span id="missileAc2"></span>
       <span id="missileAc3"></span>
       <span id="missileAc4"></span>
       <span id="missileAc5"></span>
       <span id="missileAc6"></span>
       <span id="missileAc7"></span>
       <span id="missileAc8"></span>
       <span id="missileAc9"></span>

       <span id="baseAc"></span>
       <span id="modifiedAc"></span>
       <span id="hitPoints"></span>
       
       
       <span id="conMessage"></span>
       <span id="wisdomTable"></span>
       <span id="addAttack"></span>
       
       
       <span id="level">
           <?php
                echo $level;
           ?>
        </span>
       
       <span id="characterName">
           <?php
                echo $characterName;
           ?>
        </span>
       
              
       <span id="playerName">
           <?php
                echo $playerName;
           ?>
        </span>
	                 
       <span id="alignment">
           <?php
                echo $alignment;
           ?>
        </span>
              

       
       <span id="weaponsList">
           <?php
           $val1 = 0;
           $val2 = 0;
           $val3 = 0;
           
           foreach($weaponNames as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
               $val1 = isWeaponTwoHanded($theWeapon, $val1);
               $val2 = isWeaponBastardSword($theWeapon, $val2);
           }
           
           $val3 = $val1 + $val2;
           
           $weaponNotes = weaponNotes($val3);
           
           ?>  
        </span>
       
       <span id="weaponNotes">
           <?php
                echo $weaponNotes;
           ?>
        </span>
            
       <span id="weaponsList2">
           <?php
           foreach($weaponDamage as $theWeaponDam)
           {
               echo $theWeaponDam;
               echo "<br/>";
           }
           ?>        
        </span>
       

            
       <span id="weaponsList3">
           <?php
           foreach($weaponWeight as $theWeapon)
           {
               echo $theWeapon;
               echo "<br/>";
           }
           ?>        
        </span>
       
       <span id="totalWeaponWeight">
           <?php
           echo $totalWeaponWeight;
           ?>
       </span>

              
       <span id="gearList">
           <?php
           
           foreach($gearNames as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>
       </span>
           
              
       <span id="gearList2">
           <?php
           
           foreach($gearWeight as $theGear)
           {
               echo $theGear;
               echo "<br/>";
           }
           ?>  
        </span>
	   	   
       
       <span id="totalGearWeight">
           <?php
           echo $totalGearWeight;
           ?>
       </span>
       
       
              
       <span id="clothingList">
           <?php
           
           foreach($clothingNames as $theClothing)
           {
               echo $theClothing;
               echo "<br/>";
           }
           ?>
       </span>
           
              
       <span id="clothingList2">
           <?php
           
           foreach($clothingWeight as $theClothing)
           {
               echo $theClothing;
               echo "<br/>";
           }
           ?>  
        </span>
	   	   
       
       <span id="totalGearWeight">
           <?php
           echo $totalGearWeight;
           ?>
       </span>
       
       
       
       <span id="totalWeightCarried">
           <?php
           echo $totalWeightCarried . " lbs";
           ?>
       </span>
              
       
       <span id="wealth">
           <?php
           echo ($coinQuantity * 10) . $coinType;
           ?>
       </span>
       
       <span id="coinWeight">
           <?php
           echo $coinQuantity . " lbs";
           ?>
       </span>
       
              
       <span id="turnMove">
           <?php
           echo $movementTurn;
           ?>
       </span>
       
       
       <span id="encounterMove">
           <?php
           echo $movementEncounter;
           ?>
       </span>
       
       <span id="runningMove">
           <?php
           echo $movementTurn . "/round";
           ?>
       </span>
       
       <span id="characterRaceTrait">
           <?php
           echo $characterRaceTraits;
           ?>
       </span>
       
       
       <span id="characterRaceTitle">
           <?php
           echo $characterRaceTitle;
           ?>
       </span>
       
       
       <span id="monkMessage">
           <?php
           echo $monkMessage;
           ?>
       </span>
       
       
       <span id="monkDamBonus">
           <?php
           echo $monkWeaponDamageBonus;
           ?>
       </span>
       
       <span id="pickLocks">
           <?php
           echo $monkPickLocks + 5 . "%";
           ?>
       </span>
   
       
       <span id="findTraps">
           <?php
           echo $monkFindRemoveTraps + 10 . "%";
           ?>
       </span>
       

       
       <span id="moveSilently">
           <?php
           echo $monkMoveSilent + 10 . "%";
           ?>
       </span>
       
       
       <span id="climbWalls">
           <?php
           echo $monkClimbWalls . "%";
           ?>
       </span>
       
       
       
       <span id="hideInShadows">
           <?php
           echo $monkHideInShadows + 10 . "%";
           ?>
       </span>
       
       <span id="hearNoise">
           <?php
           
           echo "1-" . ($monkHearNoise);
           ?>
       </span>
       
       <span id="acBonusMonk">
           <?php
           
           echo "-" . ($acBonus);
           ?>
       </span>
       
       
       <span id="unarmedDamageMonk">
           <?php
           
           echo $unarmedDamage;
           ?>
       </span>
       
       
       <span id="unarmedAttacksMonk">
           <?php
           
           echo $unarmedAttacks;
           ?>
       </span>
       
       
       <span id="speedMonk">
           <?php
           
           echo $monkSpeed;
           ?>
       </span>
       
       
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Monk Character Constructor
	*/
	function Character() {

        let strength = <?php echo rand(12, 18) ?>;
        let dexterity = <?php echo rand(15, 18) ?>;
        let constitution = rollDice(6, 4, 1, 0);
        let	intelligence = rollDice(6, 4, 1, 0);
        let	wisdom = <?php echo rand(15, 18) ?>;
        let	charisma =  rollDice(6, 4, 1, 0);
        let wisdomMod = abilityScoreModifier(wisdom);
        let strengthMod = abilityScoreModifier(strength);
        let dexterityMod = abilityScoreModifier(dexterity);
        let constitutionMod = abilityScoreModifier(constitution);
		
		let monkCharacter = {
			"strength": strength,
			"dexterity": dexterity,
			"constitution": constitution,
			"intelligence": intelligence,
			"wisdom": wisdom,
			"charisma": charisma,
            "strengthMod": abilityScoreModifier(strength),
           /* "strengthModifyDes": strengthModifierDescription(strength),*/
            "dexterityMod": abilityScoreModifier(dexterity),
            "dexterityModifyDes": dexterityModifierDescription(dexterity),
            "constitutionMod": abilityScoreModifier(constitution),
            "constitutionModifyDes": constitutionModifierDescription(constitution),
            "intelligenceMod": abilityScoreModifier(intelligence),
            "intelligenceModifyDes": intelligenceModifierDescription(intelligence),
            "wisdomModifyDes": wisdomModifierDescription(wisdom),
            "charismaMod": abilityScoreModifier(charisma),
            "charismaModifyDes": charismaModifierDescription(charisma),
            "breathAttack": '<?php echo $vsBreathAttacks ?>',
            "poisonDeath": '<?php echo $vsPoisonDeath  ?>',
            "petrify": '<?php echo $vsPetrify  ?>',
            "wandsSave": <?php echo $vsWand ?> - <?php echo $demiHumanWandSave ?> - wisdomMod,
            "spellSave": <?php echo $vsSpell ?> - <?php echo $demiHumanSpellSave ?>  - wisdomMod,
            "meleeHitAC0": 20 - '<?php echo $thacoAdvancement ?>',
            "meleeHitAC1": 20 - <?php echo $thacoAdvancement ?>  - 1,
            "meleeHitAC2": 20 - <?php echo $thacoAdvancement ?>  - 2,
            "meleeHitAC3": 20 - <?php echo $thacoAdvancement ?>  - 3,
            "meleeHitAC4": 20 - <?php echo $thacoAdvancement ?>  - 4,
            "meleeHitAC5": 20 - <?php echo $thacoAdvancement ?>  - 5,
            "meleeHitAC6": 20 - <?php echo $thacoAdvancement ?>  - 6,
            "meleeHitAC7": 20 - <?php echo $thacoAdvancement ?>  - 7,
            "meleeHitAC8": 20 - <?php echo $thacoAdvancement ?>  - 8,
            "meleeHitAC9": 20 - <?php echo $thacoAdvancement ?>  - 9,
            "missileHitAC0": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod),
            "missileHitAC1": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 1,
            "missileHitAC2": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 2,
            "missileHitAC3": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 3,
            "missileHitAC4": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 4,
            "missileHitAC5": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 5,
            "missileHitAC6": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 6,
            "missileHitAC7": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 7,
            "missileHitAC8": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 8,
            "missileHitAC9": 20 - <?php echo $thacoAdvancement ?> - (dexterityMod) - 9,
            "acBase": 9 - '<?php echo $acBonus;  ?>',
            "acModified": 9 - '<?php echo $acBonus;  ?>',
            "hp": hitPoints(<?php echo $level ?>, constitutionMod),
            "survivalRes": "Survive Resurrection " + survivalResurrection(constitution) + "%; Survive Transformative Shock " + survivalShock (constitution) + "%",
			"dieRollMethod": "Ability Score Generation: 4d6, drop the lowest"
			
		
			

		};
	    if(monkCharacter.hitPoints <= 0 ){
			monkCharacter.hitPoints = 1;
		}
		return monkCharacter;
	  
	  }
	  


  
       let imgData = "images/monk_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      $("#strength").html(data.strength);
      
      $("#dexterity").html(data.dexterity);
      
      $("#constitution").html(data.constitution);
      
      $("#intelligence").html(data.intelligence);
      
      $("#wisdom").html(data.wisdom);
      
      $("#charisma").html(data.charisma);
      
     // $("#strengthModDesc").html(data.strengthModifyDes);
      $("#dexterityModDesc").html(data.dexterityModifyDes);
      $("#constitutionModDesc").html(data.constitutionModifyDes);
      $("#intelligenceModDesc").html(data.intelligenceModifyDes);
      $("#wisdomModDesc").html(data.wisdomModifyDes);
      $("#charismaModDesc").html(data.charismaModifyDes);
      
      
      $("#dieRollMethod").html(data.dieRollMethod);
      
      $("#saveBreathAttack").html(data.breathAttack);
      $("#savePoisonDeath").html(data.poisonDeath);
      $("#savePetrify").html(data.petrify);
      $("#saveWands").html(data.wandsSave);
      $("#saveSpell").html(data.spellSave);
      
      
      $("#meleeAc0").html(data.meleeHitAC0);
      $("#meleeAc1").html(data.meleeHitAC1);
      $("#meleeAc2").html(data.meleeHitAC2);
      $("#meleeAc3").html(data.meleeHitAC3);
      $("#meleeAc4").html(data.meleeHitAC4);
      $("#meleeAc5").html(data.meleeHitAC5);
      $("#meleeAc6").html(data.meleeHitAC6);
      $("#meleeAc7").html(data.meleeHitAC7);
      $("#meleeAc8").html(data.meleeHitAC8);
      $("#meleeAc9").html(data.meleeHitAC9);
      
      $("#missileAc0").html(data.missileHitAC0);
      $("#missileAc1").html(data.missileHitAC1);
      $("#missileAc2").html(data.missileHitAC2);
      $("#missileAc3").html(data.missileHitAC3);
      $("#missileAc4").html(data.missileHitAC4);
      $("#missileAc5").html(data.missileHitAC5);
      $("#missileAc6").html(data.missileHitAC6);
      $("#missileAc7").html(data.missileHitAC7);
      $("#missileAc8").html(data.missileHitAC8);
      $("#missileAc9").html(data.missileHitAC9);
      
      
      $("#baseAc").html(data.acBase);
      $("#hitPoints").html(data.hp);
      $("#modifiedAc").html(data.acModified);
      
      $("#conMessage").html(data.survivalRes);

	 
  </script>
		
	
    
</body>
</html>
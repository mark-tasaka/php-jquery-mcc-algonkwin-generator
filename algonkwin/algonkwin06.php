<!DOCTYPE html>
<html>
<head>
<title>Iconic NPC Algonkwin Character Generator</title>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Mutant Crawl Classics Iconic NPC Character Generator. Goodman Games.">
	<meta name="keywords" content="Mutant Crawl Classics, Jim Wampler, Goodman Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2018">
		

	<link rel="stylesheet" type="text/css" href="css/mcc_algonkwin.css">
	<link rel="stylesheet" type="text/css" href="css/mcc_algonkwin_post.css">
    
    
    <script type="text/javascript" src="./js/dieRoll.js"></script>
    <script type="text/javascript" src="./js/abilityScoreMod.js"></script>
    <script type="text/javascript" src="./js/profession.js"></script>
    <script type="text/javascript" src="./js/birthAugur.js"></script>
    <script type="text/javascript" src="./js/adjustments.js"></script>
    <script type="text/javascript" src="./js/hitpoints.js"></script>
    <script type="text/javascript" src="./js/sentinelEquipment.js"></script>
    
    
    
</head>
<body>
        <?php
    
    include 'php/artifacts.php';
    include 'php/adjustments.php';
    include 'php/weaponsArmour.php';

    
        if(isset($_POST["theArchaicAlignment"]))
        {
            $archaicAlignment = $_POST["theArchaicAlignment"];
        }
    
        if(isset($_POST["theArtifact1"]))
        {
            $artifact1 = $_POST["theArtifact1"];
        }
    
    
        /*Bonus to AC value*/
        $acBonusFromArtifact = 0;
            
        /*Bonus to Strength value*/
        $strengthBonusFromArtifact = 0;
    
    

        $artifactName1 = getArtifact1($artifact1)[0];
        $artifactCheck1 = getArtifact1($artifact1)[1];
        $artifactEffect1 = getArtifact1($artifact1)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact1 = artifactAcBonus ($artifactName1, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact1 = artifactStrengthBonus ($artifactName1, $strengthBonusFromArtifact);
    
    
        if(isset($_POST["theArtifact2"]))
        {
            $artifact2 = $_POST["theArtifact2"];
        }

        $artifactName2 = getArtifact1($artifact2)[0];
        $artifactCheck2 = getArtifact1($artifact2)[1];
        $artifactEffect2 = getArtifact1($artifact2)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact2 = artifactAcBonus ($artifactName2, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact2 = artifactStrengthBonus ($artifactName2, $strengthBonusFromArtifact);
    
    
        if(isset($_POST["theArtifact3"]))
        {
            $artifact3 = $_POST["theArtifact3"];
        }

        $artifactName3 = getArtifact1($artifact3)[0];
        $artifactCheck3 = getArtifact1($artifact3)[1];
        $artifactEffect3 = getArtifact1($artifact3)[2];
    
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact3 = artifactAcBonus ($artifactName3, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact3 = artifactStrengthBonus ($artifactName3, $strengthBonusFromArtifact);
    
    
        if(isset($_POST["theArtifact4"]))
        {
            $artifact4 = $_POST["theArtifact4"];
        }

        $artifactName4 = getArtifact1($artifact4)[0];
        $artifactCheck4 = getArtifact1($artifact4)[1];
        $artifactEffect4 = getArtifact1($artifact4)[2];
        
        /*Determines whether Artifact grants AC bonus*/
        $acBonusFromArtifact4 = artifactAcBonus ($artifactName4, $acBonusFromArtifact);
    
        /*Determines whether Artifact grants strength bonus*/
        $strengthBonusFromArtifact4 = artifactStrengthBonus ($artifactName4, $strengthBonusFromArtifact);
    
    
        $totalArtifactAC = $acBonusFromArtifact1 +$acBonusFromArtifact2 + $acBonusFromArtifact3 + $acBonusFromArtifact4;
    
        $totalArtifactStrength = $strengthBonusFromArtifact1 +$strengthBonusFromArtifact2 + $strengthBonusFromArtifact3 + $strengthBonusFromArtifact4;
    
          
        if(isset($_POST["theIconicArmour"]))
        {
            $npcArmour = $_POST["theIconicArmour"];
        }
    
        $armourName = getArmour($npcArmour)[0];
        $armourAC = getArmour($npcArmour)[1];
        $armourCheckPen = getArmour($npcArmour)[2];
        $armourSpeedPen = getArmour($npcArmour)[3];
        $armourFumble = getArmour($npcArmour)[4];
    
    
        $speedReduction = speedReductionArmour($armourName);
        $armourBonusToArmourClass = acBonusForArmour($armourName);
    
        $fumbieDieArmour = armourFumbleDie($armourName);
      
    
            
        if(isset($_POST["theiconicWeapon1"]))
        {
            $npcWeapon1 = $_POST["theiconicWeapon1"];
        }
    
        $npcWeaponName1 = getWeapon($npcWeapon1)[0];
        $npcWeaponDamage1 = getWeapon($npcWeapon1)[1];
    
    
        if(isset($_POST["theiconicWeapon2"]))
        {
            $npcWeapon2 = $_POST["theiconicWeapon2"];
        }
    
        $npcWeaponName2 = getWeapon($npcWeapon2)[0];
        $npcWeaponDamage2 = getWeapon($npcWeapon2)[1];
                
        
    
        if(isset($_POST["theiconicWeapon3"]))
        {
            $npcWeapon3 = $_POST["theiconicWeapon3"];
        }
    
        $npcWeaponName3 = getWeapon($npcWeapon3)[0];
        $npcWeaponDamage3 = getWeapon($npcWeapon3)[1];

    
        if(isset($_POST["theiconicWeapon4"]))
        {
            $npcWeapon4 = $_POST["theiconicWeapon4"];
        }
    
        $npcWeaponName4 = getWeapon($npcWeapon4)[0];
        $npcWeaponDamage4 = getWeapon($npcWeapon4)[1];
               


    
    ?>
	
<!-- JQuery -->
  <img id="character_sheet"/>
   <section>
    	<span id="name"></span>
           
		<span id="profession"></span>
		<span id="strength"></span> <span id="strengthMod"></span>
		<span id="agility"></span>  <span id="agilityMod"></span>
           
		<span id="stamina"></span>  <span id="staminaMod"></span>
		<span id="personality"></span> <span id="personalityMod"></span>
		<span id="intelligence"></span> <span id="intelligenceMod"></span>
		<span id="luck"></span> <span id="luckMod"></span>
		  
    
		   
		<p id="birthAugur"><span id="luckySign"></span>: <span id="luckyRoll"></span> (<span id="LuckySignBonus"></span>)</p>
           
        <span id="baseAC"></span>
        <span id="level"></span>
        <span id="title"></span>
       
      
           
		<span id="hitPoints"></span> 
        
        
        <span id="ref"></span>
        <span id="fort"></span>
        <span id="will"></span>
		
       
        <span id="init"></span>
		<span id="melee"></span>
        <span id="range"></span>
		<span id="meleeDamage"></span>
        <span id="rangeDamage"></span>
           

        <span id="fumbleDie"></span>
           <span id="speed"></span>
           
		<span id="critDie"></span>
		<span id="critTable"></span>
           

        <span id="actionDice"></span>
           
           <span id="artifactCheck"></span>
           <span id="maxTech"></span>
       
        <span id="artifactBonusDie"></span>
       
       <div id="languageGroup">
       <span id="languages"></span>
    <span id="additionalLanguages"></span>
           </div>
       
       
       <span id="modifiedFumble"></span>
       
       <span id="modifiedSpeed"></span>
       
       <span id="modifiedArmourClass"></span>
       
       <span id="equipmentGear"></span>

	                 
       <span id="arcAlignment">
           <?php
                echo $archaicAlignment;
           ?>
        </span>
	   
       	                 
       <span id="artifactName1">
           <?php
                echo $artifactName1;
           ?>
        </span>
              
       <span id="artifactCheck1">
           <?php
                echo $artifactCheck1;
           ?>
        </span>
              
       <span id="artifactEffect1">
           <?php
                echo $artifactEffect1;
           ?>
        </span>
      
              	                 
       <span id="artifactName2">
           <?php
                echo $artifactName2;
           ?>
        </span>
              
       <span id="artifactCheck2">
           <?php
                echo $artifactCheck2;
           ?>
        </span>
              
       <span id="artifactEffect2">
           <?php
                echo $artifactEffect2;
           ?>
        </span>
      
                     	                 
       <span id="artifactName3">
           <?php
                echo $artifactName3;
           ?>
        </span>
              
       <span id="artifactCheck3">
           <?php
                echo $artifactCheck3;
           ?>
        </span>
              
       <span id="artifactEffect3">
           <?php
                echo $artifactEffect3;
           ?>
        </span>
                            	                 
       <span id="artifactName4">
           <?php
                echo $artifactName4;
           ?>
        </span>
              
       <span id="artifactCheck4">
           <?php
                echo $artifactCheck4;
           ?>
        </span>
              
       <span id="artifactEffect4">
           <?php
                echo $artifactEffect4;
           ?>
        </span>
       
                     
       <span id="armourDescription">
           <?php
                echo $armourName;
           ?>
        </span>       
                     
       <span id="armourBonus">
           <?php
                echo $armourAC;
           ?>
        </span>     
                     
       <span id="armourPenalityCheck">
           <?php
                echo $armourCheckPen;
           ?>
        </span>     
                     
       <span id="armourSpeedPen">
           <?php
                echo $armourSpeedPen;
           ?>
        </span>     
                     
       <span id="fumbleArmourValue">
           <?php
                echo $armourFumble;
           ?>
        </span>
       
                     
       <span id="weaponDescription1">
           <?php
                echo $npcWeaponName1;
           ?>
        </span>
                     
       <span id="weaponDamage1">
           <?php
                echo $npcWeaponDamage1;
           ?>
        </span>
       
                           
       <span id="weaponDescription2">
           <?php
                echo $npcWeaponName2;
           ?>
        </span>
                     
       <span id="weaponDamage2">
           <?php
                echo $npcWeaponDamage2;
           ?>
        </span> 
       
                     
       <span id="weaponDescription3">
           <?php
                echo $npcWeaponName3;
           ?>
        </span>
                     
       <span id="weaponDamage3">
           <?php
                echo $npcWeaponDamage3;
           ?>
        </span>
       
                     
       <span id="weaponDescription4">
           <?php
                echo $npcWeaponName4;
           ?>
        </span>
                     
       <span id="weaponDamage4">
           <?php
                echo $npcWeaponDamage4;
           ?>
        </span>

       
       

	   	   
	</section>
	

		
  <script>
      

	  
	/*
	 Character() - Algonkwin Character Constructor
	*/
	function Character() {
	
    let strength = <?php echo $totalArtifactStrength ?> + rollDice(6, 4, 1, 0);
    let agility = rollDice(6, 4, 1, 0);
    let stamina = rollDice(6, 4, 1, 0);
    let	personality = rollDice(6, 4, 1, 0);
    let	intelligence = rollDice(6, 4, 1, 0);
    let	luck = rollDice(6, 4, 1, 0);
	let	profession = getProfession();
	let birthAugur = getLuckySign();
	let strengthModifier = getStrengthModifier(strength);
	let staminaModifier = getStaminaModifier(stamina);
	let agilityModifier = getAgilityModifier(agility);
	let personalityModifier = getPersonalityModifier(personality);
	let intelligenceModifier = getIntelligenceModifier(intelligence);
	let luckModifier = getLuckModifier(luck);
    let maxTechLevel = getMaxTechLevel(intelligence);
    let bonusLanguages = fnAddLanguages(intelligenceModifier, birthAugur, luckModifier);
	let baseAC = getBaseArmourClass(agilityModifier, birthAugur, luckModifier);
    let sentinel = getAlgonkwin();
		
		let sentinelCharacter = {
			"name": "Algonkwin",
			"strength": strength,
			"agility": agility,
			"stamina": stamina,
			"personality": personality,
			"intelligence": intelligence,
			"luck": luck,
			"strengthModifier": strengthModifier,
			"agilityModifier": agilityModifier,
			"staminaModifier": staminaModifier,
			"personalityModifier": personalityModifier,
			"intelligenceModifier": intelligenceModifier,
			"luckModifier":  luckModifier,
			"profession":  profession.role,
			"luckySign": birthAugur.luckySign,
			"luckyRoll": birthAugur.luckyRoll,
			"luckySignBonus": getLuckModifier(luck),
            "level": sentinel.level,
            "title": sentinel.title,
			"hitPoints": hitPoints (sentinel, staminaModifier, hitPointAdjustPerLevel(luckySign, luckModifier)),
			"ref": sentinel.ref + agilityModifier + adjustRef(birthAugur, luckModifier),
			"fort": sentinel.fort + staminaModifier + adjustFort(birthAugur,luckModifier),
			"will": sentinel.will + personalityModifier + adjustWill(birthAugur, luckModifier),
			"init": agilityModifier + adjustInit(birthAugur, luckModifier),
			"melee": sentinel.attackBonus + strengthModifier + meleeAdjust(birthAugur, getLuckModifier(luck)),
            "meleeDamageBonus": strengthModifier + adjustMeleeDamage(birthAugur, getLuckModifier(luck)),
			"range": sentinel.attackBonus + agilityModifier + rangeAdjust(birthAugur, getLuckModifier(luck)),
            "rangeDamageBonus": 0 + adjustRangeDamage(birthAugur, getLuckModifier(luck)),
			"speed": 30 + addLuckToSpeed(birthAugur, getLuckModifier(luck)) + "'",
			"modifiedSpeed": 30 - <?php echo $speedReduction ?> + addLuckToSpeed(birthAugur, getLuckModifier(luck)) + "'",
            "fumbleDie": "d4" + addSign(adjustFumble (birthAugur, getLuckModifier(luck))),
            "modifiedFumbleDie": "<?php echo $fumbieDieArmour ?>" + addSign(adjustFumble (birthAugur, getLuckModifier(luck))),
			"critDie": sentinel.critDie + "" + addSign(adjustCrit(birthAugur, getLuckModifier(luck))),
			"critTable": sentinel.critTable,
            "actionDice": sentinel.actionDice,
            "artifactCheck": "1d20" + "" + addSign(intelligenceModifier + sentinel.artifactCheckBonus),
            "techLevel": maxTechLevel,
            "artifactBonusDie": sentinel.artifactBonus,
            "languages": "Nu-Speak", 
            "gear": getEquipment().gear,
            "addLanguages": bonusLanguages,
            "acNoArmoured": baseArmourClass,
            "modifiedArmourClass": <?php echo $armourBonusToArmourClass ?> + <?php echo $totalArtifactAC ?> + baseArmourClass
			
		
			

		};
	    if(sentinelCharacter.hitPoints <= 0 ){
			sentinelCharacter.hitPoints = 1;
		}
		return sentinelCharacter;
	  
	  }
	  

     /*getAlgonkwin() return the statistics for the sentinel per level*/  
    function getAlgonkwin() {
	let sentinel = [
        
		{"level": 1,
		 "title": "Sentinel, Recruit",
		 "actionDice": "1d20",
		 "attackBonus": 1,
		 "critDie": "1d12",
		 "critTable": "III",
		 "hd": 1,
		 "ref": 1,
		 "fort": 1,
		 "will": 1,
		 "artifactCheckBonus": 2,
         "artifactBonus": "1d2"
        },
        
		{"level": 2,
		 "title": "Sentinel, Trooper",
		 "actionDice": "1d20",
		 "attackBonus": 2,
		 "critDie": "1d14",
		 "critTable": "III",
		 "hd": 2,
		 "ref": 1,
		 "fort": 2,
		 "will": 1,
		 "artifactCheckBonus": 3,
         "artifactBonus": "1d3"
        },
        
		{"level": 3,
		 "title": "Sentinel, Specialist",
		 "actionDice": "1d20",
		 "attackBonus": 3,
		 "critDie": "1d16",
		 "critTable": "IV",
		 "hd": 3,
		 "ref": 1,
		 "fort": 3,
		 "will": 2,
		 "artifactCheckBonus": 4,
         "artifactBonus": "1d4"
        },
        
		{"level": 4,
		 "title": "Sentinel, Commander",
		 "actionDice": "1d20",
		 "attackBonus": 4,
		 "critDie": "1d20",
		 "critTable": "IV",
		 "hd": 4,
		 "ref": 2,
		 "fort": 4,
		 "will": 2,
		 "artifactCheckBonus": 5,
         "artifactBonus": "1d5"
        },
                
		{"level": 5,
		 "title": "Sentinel",
		 "actionDice": "1d20+1d14",
		 "attackBonus": 5,
		 "critDie": "1d24",
		 "critTable": "V",
		 "hd": 5,
		 "ref": 2,
		 "fort": 5,
		 "will": 3,
		 "artifactCheckBonus": 5,
         "artifactBonus": "1d6"
        },
               
		{"level": 6,
		 "title": "Sentinel Supreme",
		 "actionDice": "1d20+1d16",
		 "attackBonus": 6,
		 "critDie": "1d30",
		 "critTable": "V",
		 "hd": 6,
		 "ref": 2,
		 "fort": 6,
		 "will": 3,
		 "artifactCheckBonus": 6,
         "artifactBonus": "1d7"
        },
        		
        {"level": 7,
		 "title": "Sentinel Supreme",
		 "actionDice": "1d20+1d20",
		 "attackBonus": 7,
		 "critDie": "1d30",
		 "critTable": "V",
		 "hd": 7,
		 "ref": 3,
		 "fort": 7,
		 "will": 4,
		 "artifactCheckBonus": 7,
         "artifactBonus": "1d8"
        },
                		
        {"level": 8,
		 "title": "Sentinel Supreme",
		 "actionDice": "1d20+1d20",
		 "attackBonus": 8,
		 "critDie": "2d20",
		 "critTable": "V",
		 "hd": 8,
		 "ref": 3,
		 "fort": 8,
		 "will": 4,
		 "artifactCheckBonus": 8,
         "artifactBonus": "1d10"
        },
                        		
        {"level": 9,
		 "title": "Sentinel Supreme",
		 "actionDice": "1d20+1d20",
		 "attackBonus": 9,
		 "critDie": "2d20",
		 "critTable": "V",
		 "hd": 9,
		 "ref": 3,
		 "fort": 9,
		 "will": 4,
		 "artifactCheckBonus": 9,
         "artifactBonus": "1d12"
        },
                
        {"level": 10,
		 "title": "Sentinel Supreme",
		 "actionDice": "1d20+1d20",
		 "attackBonus": 10,
		 "critDie": "2d20",
		 "critTable": "V",
		 "hd": 10,
		 "ref": 4,
		 "fort": 10,
		 "will": 5,
		 "artifactCheckBonus": 10,
         "artifactBonus": "1d14"
        }
		
	];
	
	
	return sentinel[5]; 
}

       let imgData = "images/algonkwin_character_sheet.png";
      
        $("#character_sheet").attr("src", imgData);
      

	  let data = Character();
		 
      
          $("#name").html(data.name);
          
          $("#profession").html(data.profession);
          
      $("#strength").html(data.strength);
      $("#strengthMod").html(addModifierSign(data.strengthModifier));
      
      $("#agility").html(data.agility);
      $("#agilityMod").html(addModifierSign(data.agilityModifier));
      
      $("#stamina").html(data.stamina);
      $("#staminaMod").html(addModifierSign(data.staminaModifier));
      
      $("#personality").html(data.personality);
      $("#personalityMod").html(addModifierSign(data.personalityModifier));
      
      $("#intelligence").html(data.intelligence);
      $("#intelligenceMod").html(addModifierSign(data.intelligenceModifier));
      
      $("#luck").html(data.luck);
      $("#luckMod").html(addModifierSign(data.luckModifier));
      
      $("#luckySign").html(data.luckySign);
      $("#luckyRoll").html(data.luckyRoll);
      $("#LuckySignBonus").html(addModifierSign(data.luckySignBonus));
      
      $("#baseAC").html(data.acNoArmoured);
      $("#level").html(data.level);
      $("#title").html(data.title);
      $("#hitPoints").html(data.hitPoints);
      
      $("#ref").html(addModifierSign(data.ref));
      $("#fort").html(addModifierSign(data.fort));
      $("#will").html(addModifierSign(data.will));
      
      $("#init").html(addModifierSign(data.init));
      $("#melee").html(addModifierSign(data.melee));
      $("#range").html(addModifierSign(data.range));
      
      $("#meleeDamage").html(addModifierSign(data.meleeDamageBonus));
      $("#rangeDamage").html(addModifierSign(data.rangeDamageBonus));
      
      $("#fumbleDie").html(data.fumbleDie);
      $("#speed").html(data.speed);
      $("#critDie").html(data.critDie);
      $("#critTable").html(data.critTable);
      $("#actionDice").html(data.actionDice);
      
      $("#artifactCheck").html(data.artifactCheck);
      $("#maxTech").html(data.techLevel);
      $("#artifactBonusDie").html(data.artifactBonusDie);
      
      $("#languages").html(data.languages);
      $("#additionalLanguages").html(data.addLanguages);
      
      
      $("#modifiedFumble").html(data.modifiedFumbleDie);
      $("#modifiedSpeed").html(data.modifiedSpeed);
    
      
      $("#modifiedArmourClass").html(data.modifiedArmourClass);
      
      $("#equipmentGear").html(data.gear);
      
      

	 
  </script>
		
	
    
</body>
</html>
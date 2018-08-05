<?php
    
    function getWeapon($inputA)
    {
        $a01 = array("", "", "");
        $a02 = array("Axe, stone axe head", "d7", "");
        $a03 = array("Axe, bone axe head", "d6", "");        
        $a04 = array("Club, wood", "d5", "");        
        $a05 = array("Club, bone", "d6", "");
        $a06 = array("Club, spiked", "d7", "");
        $a07 = array("Spear, stone spearhead", "d6", "");
        $a08 = array("Spear, flint spearhead", "d8", "");
        $a09 = array("Dagger (10/20/30), sharpened bone", "d3", "+Melee and missile attacks. Range / / for missile attack.");
        $a10 = array("Dagger (10/20/30), flint", "d4", "+Melee and missile attacks. Range / / for missile attack.");
        $a11 = array("Javelin (30/60/90), sharpened bone-tipped", "d5", "++Missile attacks only.");
        $a12 = array("Javelin (30/60/90), sharpened flint-tipped", "d6", "++Missile attacks only.");
        $a13 = array("Blowgun (20/40/60), 12 darts ", "d3", "++Missile attacks only.");
        $a14 = array("Bow (50/100/150), 12 arrows", "d6", "++Missile attacks only.");
        $a15 = array("Leather sling (40/80/160), 12 sling stones", "d4", "++Missile attacks only.");
        $a16 = array("Great club, bone*", "d10", "*Two-handed weapon; d16 for initiative.");
        $a17 = array("Great axe, flint axe head*", "d12", "*Two-handed weapon; d16 for initiative.");
        $a18 = array("Bang rod (70/140/210), 6 rounds**", "2d6", "**Missile attacks only.  Uses rare ammunition.");
        $a19 = array("Boom rod (40/80/120), /6 rounds***", "3d4", "***Missile attacks only.  3d6 damage at short range. Uses rare ammunition.");

        $arr= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19);
        
        return $arr[$inputA];
        
    }


    function getArmour($inputA)
    {
        $a01 = array("", "", "", "", "");
        $a02 = array("Leather shield", "+1", "- 1", "-", "d8");
        $a03 = array("Fur cloak", "+2", "- 2", "-", "d8");
        $a04 = array("Fur cloak  & shield", "+3", "- 3", "-", "d8");
        $a05 = array("Hide armour", "+3", "- 3", "-", "d12");
        $a06 = array("Hide armour & shield", "+4", "- 4", "-", "d12");
        $a07 = array("Giant lizard scale armour", "+5", "- 5", "- 5", "d16");
        $a08 = array("Giant lizard scale armour & shield", "+6", "- 6", "- 5", "d16");

        $arr= array($a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08);
        
        return $arr[$inputA];
        
    }

    function speedReductionArmour($input)
    {
        $minusSpeed = 0;
        
        if($input === "Giant lizard scale armour")
        {
            $minusSpeed = 5;
        }
        else if($input === "Giant lizard scale armour & shield")
        {
            $minusSpeed = 5;
        }
        
        return $minusSpeed;
    }

    function acBonusForArmour($input)
    {
        $acBonus = 0;
        
        if($input === "Leather shield")
        {
            $acBonus = 1;
        }
        else if($input === "Fur cloak")
        {
            $acBonus = 2;
        }
        else if($input === "Fur cloak  & shield" || $input === "Hide armour")
        {
            $acBonus = 3;
        }
        else if($input === "Hide armour & shield")
        {
            $acBonus = 4;
        }
        else if($input === "Giant lizard scale armour")
        {
            $acBonus = 5;
        }
        else if($input === "Giant lizard scale armour & shield")
        {
            $acBonus = 6;
        }
        
        return $acBonus;
    }

    function armourFumbleDie($input)
    {
        $fumble = "d4";
        
        if($input === "Leather shield")
        {
            $fumble = "d8";
        }
        else if($input === "Fur cloak")
        {
            $fumble = "d8";
        }
        else if($input === "Fur cloak  & shield")
        {
            $fumble = "d8";
        }
        else if($input === "Hide armour")
        {
            $fumble = "d12";
        }
        else if($input === "Hide armour & shield")
        {
            $fumble = "d12";
        }
        else if($input === "Giant lizard scale armour")
        {
            $fumble = "d16";
        }
        else if($input === "Giant lizard scale armour & shield")
        {
            $fumble = "d16";
        }
        
        return $fumble;
    }






?>
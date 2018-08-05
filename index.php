<!DOCTYPE html>
<html>
<head>
<title>Launch Page: Algonkwin Character Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2018">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/iconic_npc.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="Iconic NPC Character Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The Mutant Crawl Classics Iconic Non-Player Character Generator is designed primarily with PHP and jQuery.  The Launch Page has a series of drop-down menus, where the user selects weapons, armour, artifacts, character level, etc. for the Iconic NPC.  When the user generates the iconic NPC, the information (variable) the user selects is collected through POST methods and added to the iconic character sheet.  Several of the variables POSTED modify the values on the character sheet; therefore, jQuery or PHP functions have been created to make these adjustments possible.</p>

        <p>Several of the jQuery/JavaScript functions are stored in external files, as a means of creating greater design efficiency, with the goal of writing a program with high cohesion and low coupling.  In this way, this program simulates Object-Oriented design.  JSON is used to store multi-column variables, with jQuery functions used to retrieve these variables.</p>    

        <br/>
        <br/>
            
            
            <div class="content_iconic">

            
            <br/>    
		<form action="" id ="algonkwinForm"  target="_blank" method="post">
            
          
            <span class="formIputDescriptionIconic">Archaic Alignment:</span>	
			  <select id="archaicAlignment" name="theArchaicAlignment" class="alignmentBoxIconic">			
                <option value="The Clan of the Cog" selected>The Clan of the Cog</option>
				<option value="The Curators">The Curators</option>
			  </select>
            
            <br/>
            <br/>
            
                        
            <span class="formIputDescription8Iconic">Artifact #1:</span>	
			  <select id="artifact1" name="theArtifact1" class="arifactBoxIconic">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="21">Plasteel Mesh</option>
				<option value="22">Power Armour, Scout</option>
				<option value="23">Power Armour, Attack</option>
				<option value="24">Power Armour, Assault</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>
                
                <br/>
                            
            <span class="formIputDescription8Iconic">Artifact #2:</span>	
			  <select id="artifact2" name="theArtifact2" class="arifactBoxIconic">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="21">Plasteel Mesh</option>
				<option value="22">Power Armour, Scout</option>
				<option value="23">Power Armour, Attack</option>
				<option value="24">Power Armour, Assault</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>
            
                                
                <br/>
                            
            <span class="formIputDescription8Iconic">Artifact #3:</span>	
			  <select id="artifact3" name="theArtifact3" class="arifactBoxIconic">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="21">Plasteel Mesh</option>
				<option value="22">Power Armour, Scout</option>
				<option value="23">Power Armour, Attack</option>
				<option value="24">Power Armour, Assault</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>
                
                                <br/>
                            
            <span class="formIputDescription8Iconic">Artifact #4:</span>	
			  <select id="artifact4"  name="theArtifact4" class="arifactBoxIconic">			
                <option value="0" selected></option>
				<option value="1">Dazer Pistol</option>
				<option value="2">Fazer Pistol</option>
				<option value="3">Gauzer Pistol</option>
				<option value="4">Lazer Pistol</option>
				<option value="5">Mazer Pistol</option>
				<option value="6">Fazer Rifle</option>
				<option value="7">Gauzer Rifle</option>
				<option value="8">Lazer Rifle</option>
				<option value="9">Mazer Rifle</option>
				<option value="10">Neutron Rifle</option>
				<option value="11">EMP Grenade</option>
				<option value="12">Photon Grenade</option>
				<option value="13">Stun Grenade</option>
				<option value="14">Quantum Grenade</option>
				<option value="15">Force Baton</option>
				<option value="16">Plasma Sword</option>
				<option value="17">Zapper Glove</option>
				<option value="18">Bubble Helmet</option>
				<option value="19">Enviro Belt</option>
				<option value="20">Force Field Belt</option>
				<option value="21">Plasteel Mesh</option>
				<option value="22">Power Armour, Scout</option>
				<option value="23">Power Armour, Attack</option>
				<option value="24">Power Armour, Assault</option>
				<option value="25">Accelershot</option>
				<option value="26">Cureshot</option>
				<option value="27">Cybernetic Implant</option>
				<option value="28">Medipac</option>
				<option value="29">Medishot</option>
				<option value="30">Neuroshot</option>
				<option value="31">Radshot</option>
				<option value="32">Stimshot</option>
				<option value="33">Carbon Nano-Cord</option>
				<option value="34">Com-Badge</option>
				<option value="35">Fusion Torch</option>
				<option value="36">Energy Cloak</option>
				<option value="37">Grav Clamp</option>
				<option value="38">Holo Cloak</option>
				<option value="39">Multitool</option>
				<option value="40">Rejuv Chamber</option>
				<option value="41">Sensor Pad</option>
				<option value="42">Sonic Spanner</option>
				<option value="43">C-Cell</option>
				<option value="44">F-Cell</option>
				<option value="45">F-Pack</option>
				<option value="46">Q-Cell</option>
				<option value="47">Solar Cell</option>
				<option value="48">Solar Recharger</option>
				<option value="49">Q-Pack</option>
				<option value="50">Bubble Car</option>
				<option value="51">Grav Ped</option>
				<option value="52">Grav Sled</option>
				<option value="53">Cortexin Cylinder</option>
				<option value="54">Force Field Projector</option>
				<option value="55">Gene Resequencer</option>
				<option value="56">Stasis Booth</option>
			  </select>
            <br/>
            <br/>
            
                                
                                                                            
            <span class="formIputDescription5Iconic">Armour:</span>
            <select type="text" id="armour" name="theIconicArmour" value="" class="iconicArmourBox">
                
                <option value="0" selected></option>
				<option value="1">Leather shield (+1 AC)</option>
				<option value="2">Fur cloak (+2 AC)</option>
				<option value="3">Fur cloak and shield (+3 AC)</option>
				<option value="4">Hide armour (+3 AC)</option>
				<option value="5">Hide armour and shield (+4 AC)</option>
				<option value="6">Giant lizard scale armour (+5 AC)</option>
				<option value="7">Giant lizard scale armour and shield (+6 AC)</option>
			  </select>
                <br/>
                <br/>

                
            
                
            <span class="formIputDescription2Iconic">Weapon #1:</span>
            <select type="text" id="iconicWeapon1" name="theiconicWeapon1" value="" class="iconicWeaponBox">
                
                <option value="0" selected></option>
				<option value="1">Axe, stone axe head (melee, d7)</option>
				<option value="2">Axe, bone axe head (melee, d6)</option>
				<option value="3">Club, wood (melee, d5)</option>
				<option value="4">Club, bone (melee, d6)</option>
				<option value="5">Club, spiked (melee, d7)</option>
				<option value="6">Spear, stone spearhead (melee, d6)</option>
				<option value="7">Spear, flint spearhead (melee, d8)</option>
				<option value="8">Dagger (10/20/30), sharpened bone (melee/missile, d3)</option>
				<option value="9">Dagger (10/20/30), flint (melee/missile, d4)</option>
				<option value="10">Javelin (30/60/90), sharpened bone-tipped (missile, d5)</option>
				<option value="11">Javelin (30/60/90), sharpened flint-tipped (missile, d6)</option>
				<option value="12">Blowgun (20/40/60), 12 darts (missile, d3)</option>
				<option value="13">Bow (50/100/150), 12 arrows (missile, d6)</option>
				<option value="14">Leather sling (40/80/160), 12 sling stones (missile, d4)</option>
				<option value="15">Great club, bone* (melee, d10)</option>
				<option value="16">Great axe, flint axe head* (melee, d12)</option>
				<option value="17">Bang rod (70/140/210), 6 rounds** (missile, 2d6)</option>
				<option value="18">Boom rod (40/80/120), /6 rounds*** (missile, 3d4)</option>
			  </select>

                
            <br/>
                
                            
                
            <span class="formIputDescription2Iconic">Weapon #2:</span>
            <select type="text" id="iconicWeapon2" name="theiconicWeapon2" value="" class="iconicWeaponBox">
                
                <option value="0" selected></option>
				<option value="1">Axe, stone axe head (melee, d7)</option>
				<option value="2">Axe, bone axe head (melee, d6)</option>
				<option value="3">Club, wood (melee, d5)</option>
				<option value="4">Club, bone (melee, d6)</option>
				<option value="5">Club, spiked (melee, d7)</option>
				<option value="6">Spear, stone spearhead (melee, d6)</option>
				<option value="7">Spear, flint spearhead (melee, d8)</option>
				<option value="8">Dagger (10/20/30), sharpened bone (melee/missile, d3)</option>
				<option value="9">Dagger (10/20/30), flint (melee/missile, d4)</option>
				<option value="10">Javelin (30/60/90), sharpened bone-tipped (missile, d5)</option>
				<option value="11">Javelin (30/60/90), sharpened flint-tipped (missile, d6)</option>
				<option value="12">Blowgun (20/40/60), 12 darts (missile, d3)</option>
				<option value="13">Bow (50/100/150), 12 arrows (missile, d6)</option>
				<option value="14">Leather sling (40/80/160), 12 sling stones (missile, d4)</option>
				<option value="15">Great club, bone* (melee, d10)</option>
				<option value="16">Great axe, flint axe head* (melee, d12)</option>
				<option value="17">Bang rod (70/140/210), 6 rounds** (missile, 2d6)</option>
				<option value="18">Boom rod (40/80/120), /6 rounds*** (missile, 3d4)</option>
			  </select>

                
            <br/>
                                            
                
            <span class="formIputDescription2Iconic">Weapon #3:</span>
            <select type="text" id="iconicWeapon3" name="theiconicWeapon3" value="" class="iconicWeaponBox">
                
                <option value="0" selected></option>
				<option value="1">Axe, stone axe head (melee, d7)</option>
				<option value="2">Axe, bone axe head (melee, d6)</option>
				<option value="3">Club, wood (melee, d5)</option>
				<option value="4">Club, bone (melee, d6)</option>
				<option value="5">Club, spiked (melee, d7)</option>
				<option value="6">Spear, stone spearhead (melee, d6)</option>
				<option value="7">Spear, flint spearhead (melee, d8)</option>
				<option value="8">Dagger (10/20/30), sharpened bone (melee/missile, d3)</option>
				<option value="9">Dagger (10/20/30), flint (melee/missile, d4)</option>
				<option value="10">Javelin (30/60/90), sharpened bone-tipped (missile, d5)</option>
				<option value="11">Javelin (30/60/90), sharpened flint-tipped (missile, d6)</option>
				<option value="12">Blowgun (20/40/60), 12 darts (missile, d3)</option>
				<option value="13">Bow (50/100/150), 12 arrows (missile, d6)</option>
				<option value="14">Leather sling (40/80/160), 12 sling stones (missile, d4)</option>
				<option value="15">Great club, bone* (melee, d10)</option>
				<option value="16">Great axe, flint axe head* (melee, d12)</option>
				<option value="17">Bang rod (70/140/210), 6 rounds** (missile, 2d6)</option>
				<option value="18">Boom rod (40/80/120), /6 rounds*** (missile, 3d4)</option>
			  </select>

                
            <br/>
                                                            
                
            <span class="formIputDescription2Iconic">Weapon #4:</span>
            <select type="text" id="iconicWeapon4" name="theiconicWeapon4" value="" class="iconicWeaponBox">
                
                <option value="0" selected></option>
				<option value="1">Axe, stone axe head (melee, d7)</option>
				<option value="2">Axe, bone axe head (melee, d6)</option>
				<option value="3">Club, wood (melee, d5)</option>
				<option value="4">Club, bone (melee, d6)</option>
				<option value="5">Club, spiked (melee, d7)</option>
				<option value="6">Spear, stone spearhead (melee, d6)</option>
				<option value="7">Spear, flint spearhead (melee, d8)</option>
				<option value="8">Dagger (10/20/30), sharpened bone (melee/missile, d3)</option>
				<option value="9">Dagger (10/20/30), flint (melee/missile, d4)</option>
				<option value="10">Javelin (30/60/90), sharpened bone-tipped (missile, d5)</option>
				<option value="11">Javelin (30/60/90), sharpened flint-tipped (missile, d6)</option>
				<option value="12">Blowgun (20/40/60), 12 darts (missile, d3)</option>
				<option value="13">Bow (50/100/150), 12 arrows (missile, d6)</option>
				<option value="14">Leather sling (40/80/160), 12 sling stones (missile, d4)</option>
				<option value="15">Great club, bone* (melee, d10)</option>
				<option value="16">Great axe, flint axe head* (melee, d12)</option>
				<option value="17">Bang rod (70/140/210), 6 rounds** (missile, 2d6)</option>
				<option value="18">Boom rod (40/80/120), /6 rounds*** (missile, 3d4)</option>
			  </select>

                
            <br/>
            <br/>
            <div class="footnote2">
                <span class="">&#42;Two-handed weapon; d16 for initiative.</span>
                <br/>
                <span class="">&#42;&#42;Uses rare ammunition.</span>
                <br/>
                <span class="">&#42;&#42;&#42;3d6 damage at short range. Uses rare ammunition.</span>
                </div>
            <br/>
                

            
            
            <br/>
            
            
            
		<div class="content8">
            
 
			
			  <select id="level" class="dropdownmenu2Iconic">
				<option value="01" selected>Algonkwin, Level 1</option>
				<option value="02">Algonkwin, Level 2</option>
				<option value="03">Algonkwin, Level 3</option>
				<option value="04">Algonkwin, Level 4</option>
				<option value="05">Algonkwin, Level 5</option>
				<option value="06">Algonkwin, Level 6</option>
				<option value="07">Algonkwin, Level 7</option>
				<option value="08">Algonkwin, Level 8</option>
				<option value="09">Algonkwin, Level 9</option>
				<option value="10">Algonkwin, Level 10</option>
			  </select>
            			  
			<div class="generatorButtonA2Iconic">
			
			     <span class="generatorbuttons">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttons">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            
            </div>
            
				
            </div>
            
            </form>
            
		</div>
            
                
        
                <br/>
                <br/>
                
                
            
    </section>
    
    	<script>
        
        $("#generate_characters2").click(function()
        {
            $("#algonkwinForm").attr('action', "algonkwin/algonkwin"+ $("#level").val() +  ".php");
        });
        
		
        
            
        
    </script>
            
	


</body>
</html>
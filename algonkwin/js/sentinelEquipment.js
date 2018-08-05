
function getEquipment(){
	let equipment = [
        
        {"gear": "Backpack, waterskin, flint fire starter, torches (x5), hemp rope (50 feet), dried meat (4 days ration), sharpening stone, bone knife, bone fishing hooks"},
        {"gear": "Backpack, waterskin, flint fire starter, hemp rope (50 feet), dried meat (5 days ration), sharpening stone, bone fishing hooks"},
        {"gear": "Backpack, waterskin, flint fire starter, hemp rope (50 feet), preserved fish (5 days ration), sharpening stone, bone fishing hooks, torches (x6)"},
        {"gear": "Large sack, waterskin, flint fire starter, dried meat (5 days ration), torches (x3), stone cutting tool, hemp rope (50 feet), stone cutting tool"},
        {"gear": "Large sack, waterskin, flint fire starter, hemp rope (50 feet), preserved fish (3 days ration), stone cutting tool, torches (x7)"}
        
		];
	
		return equipment[Math.floor(Math.random() * equipment.length)]; 
		
}
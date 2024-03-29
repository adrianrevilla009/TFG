<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$groups = array(
	0  => array(
		'name'        => 'Gone in 60 Seconds',
		'description' => 'A retired master car thief must come back to the industry and steal 50 cars with his crew in one night to save his brother\'s life.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	1  => array(
		'name'        => 'Next',
		'description' => 'A Las Vegas magician who can see into the future is pursued by FBI agents seeking to use his abilities to prevent a nuclear terrorist attack.',
		'status'      => 'hidden',
		'enable_forum' => 1,
	),
	2  => array(
		'name'        => 'RocknRolla',
		'description' => 'In London, a real-estate scam puts millions of pounds up for grabs, attracting some of the city\'s scrappiest tough guys and its more established underworld types, all of whom are looking to get rich quick. While the city\'s seasoned criminals vie for the cash, an unexpected player -- a drugged out rock \'n\' roller presumed to be dead but very much alive...',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	3  => array(
		'name'        => 'Sherlock Holmes',
		'description' => 'Detective Sherlock Holmes and his stalwart partner Watson engage in a battle of wits and brawn with a nemesis whose plot is a threat to all of England.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	4  => array(
		'name'        => 'Snatch',
		'description' => 'Unscrupulous boxing promoters, violent bookmakers, a Russian gangster, incompetent amateur robbers, and supposedly Jewish jewelers fight to track down a priceless stolen diamond.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	5  => array(
		'name'        => 'Lock, Stock and Two Smoking Barrels',
		'description' => 'Four London working class stiffs pool their money to put one in a high stakes card game, but things go wrong and they end up owing half a million pounds and having one week to come up with the cash.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	6  => array(
		'name'        => 'Inglourious Basterds',
		'description' => 'In Nazi-occupied France during World War II, a group of Jewish-American soldiers known as "The Basterds" are chosen specifically to spread fear throughout the Third Reich by scalping and brutally killing Nazis.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	7  => array(
		'name'        => 'Kill Bill',
		'description' => 'The Bride wakes up after a long coma. The baby that she carried before entering the coma is gone. The only thing on her mind is to have revenge on the assassination team that betrayed her - a team she was once part of.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	8  => array(
		'name'        => 'Pulp Fiction',
		'description' => 'The lives of two mob hit men, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
		'status'      => 'hidden',
		'enable_forum' => 1,
	),
	9  => array(
		'name'        => 'The Godfather',
		'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	10 => array(
		'name'        => 'The Shawshank Redemption',
		'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	11 => array(
		'name'        => 'Schindler\'s List',
		'description' => 'In Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
		'status'      => 'private',
		'enable_forum' => 1,
	),
	12 => array(
		'name'        => 'Men in Black',
		'description' => 'Two men who keep an eye on aliens in New York City must try to save the world after the aliens threaten to blow it up.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	13 => array(
		'name'        => 'Transformers',
		'description' => 'An ancient struggle re-erupts on Earth between two extraterrestrial clans, the heroic Autobots and the evil Decepticons, with a clue to the ultimate power held by a young teenager.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	14 => array(
		'name'        => 'The Legend of Zorro',
		'description' => 'Despite trying to keep his swashbuckling to a minimum, a threat to California\'s pending statehood causes the adventure-loving Alejandro de la Vega (Banderas) -- and his wife, Elena (Zeta-Jones) -- to take action.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	15 => array(
		'name'        => 'Star Wars',
		'description' => 'Luke Skywalker leaves his home planet, teams up with other rebels, and tries to save Princess Leia from the evil clutches of Darth Vader.',
		'status'      => 'hidden',
		'enable_forum' => 1,
	),
	16 => array(
		'name'        => 'Fight Club',
		'description' => 'An office employee and a soap salesman build a global organization to help vent male aggression.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	17 => array(
		'name'        => 'The Matrix',
		'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	18 => array(
		'name'        => 'The Lord of the Rings',
		'description' => 'In a small village in the Shire a young Hobbit named Frodo has been entrusted with an ancient Ring. Now he must embark on an Epic quest to the Cracks of Doom in order to destroy it.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	19 => array(
		'name'        => 'Forrest Gump',
		'description' => 'Forrest Gump, while not intelligent, has accidentally been present at many historic moments, but his true love, Jenny, eludes him.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	20 => array(
		'name'        => 'Leon',
		'description' => 'Professional assassin Leon reluctantly takes care of 12-year-old Mathilda, a neighbor whose parents are killed, and teaches her his trade.',
		'status'      => 'private',
		'enable_forum' => 1,
	),
	21 => array(
		'name'        => 'Terminator',
		'description' => 'A human-looking, apparently unstoppable cyborg is sent from the future to kill Sarah Connor; Kyle Reese is sent to stop it.',
		'status'      => 'public',
		'enable_forum' => 0,
	),
	22 => array(
		'name'        => 'WALL-E',
		'description' => 'In the distant future, a small waste collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	23 => array(
		'name'        => 'Back to the Future',
		'description' => 'In 1985, Doc Brown invents time travel; in 1955, Marty McFly accidentally prevents his parents from meeting, putting his own existence at stake.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	24 => array(
		'name'        => 'Braveheart',
		'description' => 'William Wallace, a commoner, unites the 13th Century Scots in their battle to overthrow English rule.',
		'status'      => 'hidden',
		'enable_forum' => 1,
	),
	25 => array(
		'name'        => 'Gladiator',
		'description' => 'When a Roman general is betrayed and his family murdered by a corrupt prince, he comes to Rome as a gladiator to seek revenge.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	26 => array(
		'name'        => 'Harry Potter',
		'description' => 'Harry Potter is a series of seven fantasy novels written by the British author J. K. Rowling. The books chronicle the adventures of the adolescent wizard Harry Potter and his best friends Ron Weasley and Hermione Granger, all of whom are students at Hogwarts School of Witchcraft and Wizardry.',
		'status'      => 'public',
		'enable_forum' => 0,
	),
	27 => array(
		'name'        => 'Blade Runner',
		'description' => 'Deckard, a blade runner, has to track down and terminate 4 replicants who hijacked a ship in space and have returned to earth seeking their maker.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	28 => array(
		'name'        => 'The Bourne Ultimatum',
		'description' => 'Jason Bourne dodges a ruthless CIA official and his agents from a new assassination program while searching for the origins of his life as a trained killer.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	29 => array(
		'name'        => 'The Wrestler',
		'description' => 'A faded professional wrestler must retire, but finds his quest for a new life outside the ring a dispiriting struggle.',
		'status'      => 'private',
		'enable_forum' => 0,
	),
	30 => array(
		'name'        => 'The Social Network',
		'description' => 'A chronicle of the founding of Facebook, the social-networking Web site.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	31 => array(
		'name'        => 'Monsters, Inc.',
		'description' => 'Monsters generate their city\'s power by scaring children, but they are terribly afraid themselves of being contaminated by children, so when one enters Monstropolis, top scarer Sulley finds his world disrupted.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	32 => array(
		'name'        => 'Rocky',
		'description' => 'A small time boxer gets a once in a lifetime chance to fight the heavyweight champ in a bout in which he strives to go the distance for his self-respect.',
		'status'      => 'hidden',
		'enable_forum' => 1,
	),
	33 => array(
		'name'        => 'Game of Thrones',
		'description' => 'Kings, queens, knights and renegades use schemes and swords to battle for the throne.',
		'status'      => 'public',
		'enable_forum' => 0,
	),
	34 => array(
		'name'        => 'Source Code',
		'description' => 'An action thriller centered on a soldier who wakes up in the body of an unknown man and discovers he\'s part of a mission to find the bomber of a Chicago commuter train.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	35 => array(
		'name'        => 'Inception',
		'description' => 'In a world where technology exists to enter the human mind through dream invasion, a highly skilled thief is given a final chance at redemption which involves executing his toughest job to date: Inception.',
		'status'      => 'private',
		'enable_forum' => 1,
	),
	36 => array(
		'name'        => 'The Tourist',
		'description' => 'Revolves around Frank, an American tourist visiting Italy to mend a broken heart. Elise is an extraordinary woman who deliberately crosses his path.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	37 => array(
		'name'        => 'Season of the Witch',
		'description' => '14th-century knights transport a suspected witch to a monastery, where monks deduce her powers could be the source of the Black Plague.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	38 => array(
		'name'        => 'Black Swan',
		'description' => 'A ballet dancer wins the lead in "Swan Lake" and is perfect for the role of the delicate White Swan - Princess Odette - but slowly loses her mind as she becomes more and more like Odile, the Black Swan.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	39 => array(
		'name'        => 'Robin Hood',
		'description' => 'In 13th century England, Robin and his band of marauders confront corruption in a local village and lead an uprising against the crown that will forever alter the balance of world power.',
		'status'      => 'public',
		'enable_forum' => 1,
	),
	40 => array(
		'name'        => 'The Town',
		'description' => 'As he plans his next job, a longtime thief tries to balance his feelings for a bank manager connected to one of his earlier heists, as well as the FBI agent looking to bring him and his crew down.',
		'status'      => 'hidden',
		'enable_forum' => 0,
	),
	41 => array(
		'name'        => 'TRON: Legacy',
		'description' => 'The son of a virtual world designer goes looking for his father and ends up inside the digital world that his father designed. He meets his father\'s creation turned bad and a unique ally who was born inside the digital domain of The Grid.',
		'status'      => 'public',
		'enable_forum' => 0,
	),
	42 => array(
		'name'        => 'Unstoppable',
		'description' => 'With an unmanned, half-mile-long freight train barreling toward a city, a veteran engineer and a young conductor race against the clock to prevent a catastrophe.',
		'status'      => 'public',
		'enable_forum' => 0,
	),
	43 => array(
		'name'        => 'Pirates of the Caribbean',
		'description' => 'Blacksmith Will Turner teams up with eccentric pirate "Captain" Jack Sparrow to save his love, the governor\'s daughter, from Jack\'s former pirate allies, who are now undead.',
		'status'      => 'private',
		'enable_forum' => 1,
	),
	44 => array(
		'name'        => '127 Hours',
		'description' => 'A mountain climber becomes trapped under a boulder while canyoneering alone near Moab, Utah and resorts to desperate measures in order to survive.',
		'status'      => 'hidden',
		'enable_forum' => 1,
	),
);

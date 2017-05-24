<?php 
	// nav menu items
	$navItems = array(
								array(
									slug 	=> "index.php",
									title => "Home"
								),
								array(
									slug 	=> "team.php",
									title => "Team"
								),
								array(
									slug 	=> "menu.php",
									title => "Menu"
								),
								array(
									slug 	=> "contact.php",
									title => "contact"
								)
							);

	$teamMembers = array(
									array (
										name 			=> "Frankie III",
										position 	=> "Owner",
										bio 			=> "Frankie is the great-grandson of the original Franklin. He is the owner of Franklin's Fine Dining. He cooks a mean fritatta!",
										img 			=> "frankie"
										),
									array (
										name 			=> "Francis",
										position 	=> "General Manager",
										bio 			=> "Francis knows her stuff. The big sister of Frankie himself, she runs the show. Don't miss her Margherita Mondays!",
										img 			=> "francis"
										),
									array (
										name 			=> "Carlos",
										position 	=> "Head Chef",
										bio 			=> "Carlos is the epitome of the phrase &ldquo;Don't judge a book by it's cover&rdquo; &mdash; You simply cannot find a better chef.",
										img 			=> "carlos"
										)
									);

	$menuItems = array(
								"club-sandwich" => array (
									title => "Club Sandwich",
									price => 11,
									blurb => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, eum facilis atque consequatur, quasi et fugiat temporibus ex expedita explicabo officia praesentium in necessitatibus, placeat fugit voluptate at omnis reiciendis.",
									drink => "Club Soda"
								),
								"dill-salmon" => array (
									title => "Lemon &amp; Dill Salmon",
									price => 18,
									blurb => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro placeat, velit itaque impedit eaque consequatur error, laboriosam laudantium sit quos! Expedita repudiandae voluptas cumque nemo obcaecati, maxime recusandae architecto quae.",
									drink => "Fancy Wine"
								),
								"super-salad" => array (
									title => "The Super Salad<sup>&reg;</sup>",
									price => 34,
									blurb => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ipsum fuga minima consequatur vero inventore quaerat, recusandae tempore perferendis at, corrupti culpa atque suscipit architecto nostrum amet quas ratione dignissimos..",
									drink => "Jug o' Water"
								),
								"mexican-barbacoa" => array (
									title => "Mexican Barbacoa",
									price => 23,
									blurb => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis laborum ex cum beatae assumenda, iure autem, ullam possimus tempora reiciendis vel inventore quisquam labore neque obcaecati, excepturi dolores debitis hic!.",
									drink => "Beer with a lime"
								)
							);
?>
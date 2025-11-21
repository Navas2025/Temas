<?php $comments_list_defaults = array(
	'oxy_comments' => array(
    	
    	array(
	        "name" => oxygen_translate("Default","oxygen"),
	        "slug" => "default",
	        "options" => array(
	        	"original" => array(
	                "code-php" => file_get_contents(OXYGEN_VSB_COMMENTS_LIST_TEMPLATES_PATH."default.php"),
	                "code-css" => file_get_contents(OXYGEN_VSB_COMMENTS_LIST_TEMPLATES_PATH."default.css"),
	            )
	        )
	    ),

		array(
	        "name" => oxygen_translate("Grey Highlight","oxygen"),
	        "slug" => "grey-highlight",
	        "options" => array(
	        	"original" => array(
	                "code-php" => file_get_contents(OXYGEN_VSB_COMMENTS_LIST_TEMPLATES_PATH."default.php"),
	                "code-css" => file_get_contents(OXYGEN_VSB_COMMENTS_LIST_TEMPLATES_PATH."grey-highlight.css"),
	            )
	        )
	    ),

		array(
	        "name" => oxygen_translate("White Blocks","oxygen"),
	        "slug" => "white-blocks",
	        "options" => array(
	        	"original" => array(
	                "code-php" => file_get_contents(OXYGEN_VSB_COMMENTS_LIST_TEMPLATES_PATH."default.php"),
	                "code-css" => file_get_contents(OXYGEN_VSB_COMMENTS_LIST_TEMPLATES_PATH."white-blocks.css"),
	            )
	        )
	    )

    )
);
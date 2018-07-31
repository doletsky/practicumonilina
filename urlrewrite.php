<?
$arUrlRewrite = array(
    array(
        "CONDITION"	=>	"#^/lk/course/([0-9a-zA-Z_-]+)/([0-9a-zA-Z_-]+)/.*#",
        "RULE"	=>	"course=$1&id=$2",
        "ID"	=>	"",
        "PATH"	=>	"/lk/index.php",
    ),
    array(
        "CONDITION"	=>	"#^/lk/course/([0-9a-zA-Z_-]+)/.*#",
        "RULE"	=>	"course=$1",
        "ID"	=>	"",
        "PATH"	=>	"/lk/index.php",
    ),
	array(
		"CONDITION"	=>	"#^/lk/profile/([0-9a-zA-Z_-]+)/.*#",
		"RULE"	=>	"tab=$1",
		"ID"	=>	"",
		"PATH"	=>	"/lk/profile/index.php",
	),
    array(
        "CONDITION"	=>	"#^/student/course/([0-9a-zA-Z_-]+)/([0-9a-zA-Z_-]+)/.*#",
        "RULE"	=>	"course=$1&id=$2",
        "ID"	=>	"",
        "PATH"	=>	"/student/index.php",
    ),
    array(
        "CONDITION"	=>	"#^/student/course/([0-9a-zA-Z_-]+)/.*#",
        "RULE"	=>	"course=$1",
        "ID"	=>	"",
        "PATH"	=>	"/student/index.php",
    ),
    array(
        "CONDITION"	=>	"#^/student/profile/([0-9a-zA-Z_-]+)/.*#",
        "RULE"	=>	"tab=$1",
        "ID"	=>	"",
        "PATH"	=>	"/student/profile/index.php",
    )
);

?>
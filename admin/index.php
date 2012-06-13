<?php
/***************************************
** (c) Fred Bradley                   **
** http://www.fredbradley.me          **
****************************************
** Site using Smarty                  **
** Fred Bradley +44 (0) 7867 953 849  **
** fred@fredbradley.co.uk             **
***************************************/

	/* Page Setup */
		session_start();

	/* LOAD CONFIG (each file) */
		require_once '../inc/config/siteconfigs.php';
		require_once '../inc/config/login.php';

	/* LOAD VARIABLES */
		$user = $_SESSION['user'];
		$page = $_GET['page'];
		$systemMsg = "I still have to code this bit! Was going to be a databse of messages key'd on a single word, then a function to pick each message out based on keyword";
	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");

	/* SMARTY ASSIGNS */
		$smarty->assign('user', $user);
		$smarty->assign('page', $page);
		$smarty->assign('action', $_GET['action']);
		if ($_GET['message'])
			$smarty->assign('message', $systemMsg);

        /* DISPLAY PAGE */
                if (isset($_SESSION['user']['username'])) {
			switch ($page) {
				case "users": 
					include_once 'inc/users.php';
					$smarty->assign('users', $users);
					$smarty->display('admin_users.tpl');
					break;
				case "sites":
					include_once 'inc/sites.php';
					$smarty->assign('sites', $sites);
					$smarty->display('admin_sites.tpl');
					break;
				default:
					$smarty->display('admin.tpl');
					break;
			}
                } else {
                        if ($_POST) {
                                $smarty->assign('error', "Looks like we had a problem logging you in! Give it another go...");
                        }
                        $smarty->display('admin_login.tpl');
                }

?>

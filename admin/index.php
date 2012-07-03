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
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}
	if (isset($_GET['message'])) {
		$systemMsg = systemMsg($_GET['message']);
	}
	if (isset($_POST) && $_POST['dbaction']=="backup") {
		$dobackup = $db->databaseBackup();
		$smarty->assign('message', "I created a backup of the database!");
	}
		$stats = $db->usefulStats();
	/* LOAD FUNCTIONS */
		require_once($SITE_PATH."inc/functions/common.php");
	/* SMARTY ASSIGNS */
		$smarty->assign('stats', $stats);
		$smarty->assign('user', $user);
	if (isset($page)) {
		$smarty->assign('page', $page);
	}
	if (isset($_GET['action'])) {
		$smarty->assign('action', $_GET['action']);
	}
		if (isset($_GET['message']))
			$smarty->assign('message', $systemMsg);
		if (isset($_GET['emailSent']))
			$smarty->assign('message', "Thankyou, your email was sent!");
		if (isset($_GET['error']))
			$smarty->assign('message', "There was some kind of error, we're not 100% sure what happened, sorry!");

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
//					$smarty->display('admin_sites.tpl');
			//		if ($_POST['returnmeto'])
			//			header("Location:".$_POST['returnmeto']."?returnmeto=edited");
				$smarty->display('admin_sites.tpl');
					break;
				case "guessattempts":
					include_once 'inc/guessattempts.php';
					$smarty->assign('atts', $guessatts);
					$smarty->display('admin_guessattempts.tpl');
					break;
				default:
					include_once 'inc/answers.php';
					$answers = $db->getConfig();
					$smarty->assign('answers', $answers);
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

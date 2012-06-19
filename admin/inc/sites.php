<?php
if ($_POST['searchfield']) {
	$sites = $db->getSites($_GET['sort'], $_GET['order'], $_POST['searchfield']);
} else {
	$sites = $db->getSites($_GET['sort'], $_GET['order'], "", $_GET['listpage']);
}
/***
 * Add New Site
 **/
if ($_POST) {
        if ($_GET['action']=="add") {
                $add = $db->addGuess($_POST);
                if ($add != 1) {
                        $error = $db->error("Error in your code matey!");
                        $smarty->assign('dbresult', $error);
                } else {
                        $success = successMsg("Another wrong answer added to the list!");
                        $smarty->assign('dbresult', $success);
                }
        }
        if (isset($_GET['id']) && $_GET['action']=="edit") {
                $update = $db->updateGuess($_GET['id']);
                if ($update !=1) {
                        $error = $db->error("Couldn't Update!");
                        $smarty->assign('dbresult', $error);
                } else {
                        $success = successMsg("Now, I've moved some things around and that's all good! I'll take you back to the list in 5 seconds!");
                        $smarty->assign('dbresult', $success);
                }
        }
}
        if ($_GET['action']=="delete") {
                if ($_GET['id']=="") {
                        $smarty->assign('dbresult', $db->error("Hey! I can't perform miracles, you haven't told me what site to delete!"));
                } else {
                        $edit = $db->editSite($_GET['id']);
                        $smarty->assign('edit', $edit);
        /* FRED NOTE: SO, need to create two more pages to work the below functions. One confirm page, which posts a form to the confirmed page, where the delete takes place! */
                        if ($_POST['confirm-delete']=="Confirm") {
                                $delete = $db->deleteSite($_POST['id']);
                                echo "I am being deleted!";
                                $smarty->assign('dbresult', $delete);
                        } else {
                        //      $delete = $db->deleteSiteConfirm($_GET['id']);
                //              $smarty->assign('dbresult', $delete);
                        }
                }
        }



/***
 * Edit Site
 **/
        if ($_GET['action']=="edit") {
                if ($_GET['id']=="") {
                        $smarty->assign('dbresult', $db->error("Hang on, what am I editing? Go back and try again!"));
                } else {
                        $edit = $db->editSite($_GET['id']);
//              var_dump($edit);
                        if ($edit == "") {
                                $error = $db->error("There's no guess with that ID!");
                                $smarty->assign('dbresult', $error);
                        } else {
                                $smarty->assign('edit', $edit);
                        }
                }
        }

function successMsg($message) {
        $output = "<div class=\"notification success png_bg\">";
        $output .= "<a href=\"#\" class=\"close\"><img src=\"resources/images/icons/cross_grey_small.png\" title=\"Close this notification\" alt=\"close\" /></a>";
        $output .= "<div>".$message."</div>";
        $output .= "</div>";
return $output;
}
?>

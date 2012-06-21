<?php
if ($_POST) {
	if ($_POST['addanswer'] == 1) {
                $add = $db->addAnswer($_POST['answer'], $_POST['listener'], $_POST['newslink'], $_POST['word'], $_POST['prize']);
                if ($add != 1) {
                        $error = $db->error("Error in your code matey!");
                        $smarty->assign('dbresult', $error);
                } else {
                        $success = successMsg("Yay! Another correct answer! Well done ".$_POST['listener']."!");
                        $smarty->assign('dbresult', $success);
                }
        }
	if ($_POST['deleteanswer'] == 1) {
		$del = $db->delAnswer($_POST['celebrity']);
		if ($del != 1) {
			$error = $db->error("Error: ");
			$smarty->assign('dbresult', $error);
		} else {
			$success = successMsg("That answer has been deleted!");
			$smarty->assign('dbresult', $success);
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

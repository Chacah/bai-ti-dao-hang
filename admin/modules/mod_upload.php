<?php
! defined ( 'PATH_ADMIN' ) && exit ( 'Forbidden' );
class mod_upload {
	function mod_up() {
		if ($_FILES ["file"] ["error"] > 0) {
			echo "����:" . $_FILES ["file"] ["error"] . "<br />";
		} else {
			echo "�ļ���: " . $_FILES ["file"] ["name"] . "<br />";
			echo "����: " . $_FILES ["file"] ["type"] . "<br />";
			echo "��С: " . ($_FILES ["file"] ["size"] / 1024) . " Kb<br />";
		}
		if (file_exists ( "upload/" . $_FILES ["file"] ["name"] )) {
			echo $_FILES ["file"] ["name"] . " �ļ��Ѿ�����. ";
		} else {
			move_uploaded_file ( $_FILES ["file"] ["tmp_name"], "d://upload/" . $_FILES ["file"] ["name"] );
			echo "�ļ��Ѿ����洢��: " . "d://upload/" . $_FILES ["file"] ["name"];
		}
	}
}
?>
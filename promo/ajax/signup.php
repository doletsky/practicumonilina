<?php
//����������� ���� � �������
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
        //�������� ������ ���� � �����
        //�������� id ������ ����, �������� � ����
        $rsLids = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => 'lids'));
        $arLids=$rsLids->Fetch();
        $rsStud = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => 'students'));
        $arStud=$rsStud->Fetch();
        $rsCourse = CGroup::GetList ($by = "c_sort", $order = "asc", Array ("STRING_ID" => $_REQUEST['COURSE']));
        $arCourse=$rsCourse->Fetch();
        //���������, ���� �� ����� ������������ � �������
        global $USER;
        $filter = Array("EMAIL" => $_REQUEST['EMAIL']);
        $rsUsers = CUser::GetList(($by = "NAME"), ($order = "desc"), $filter);
        if($arUser = $rsUsers->Fetch()) {
            //���� �����, ��������� ������
            $arGroups = CUser::GetUserGroup($arUser["ID"]);
            if(in_array($arStud["ID"],$arGroups)){
                //��� ���������
                if(in_array($arCourse["ID"],$arGroups)){
                    //��� ������� ���� ����
                    //������ � ������������ � ������� � ��,
                    //����� ������������ � ������� �� �������������� ������
                }
            }

        }else{
            //������� $checkword
            echo "<br>ch: "; echo $checkword = randString(8);
            echo "<br>sl: "; echo$salt = randString(8);
            //������� ����
            $user = new CUser;
            $arFields = Array(
                "EMAIL"             => $_REQUEST['EMAIL'],
                "LOGIN"             => $_REQUEST['EMAIL'],
                "LID"               => "s1",
                "ACTIVE"            => "Y",
                "GROUP_ID"          => array($arLids["ID"]),
                "CHECKWORD"         => $salt.md5($salt.$checkword),
                "PASSWORD"          => "!Aa123456",
                "CONFIRM_PASSWORD"  => "!Aa123456"
            );

            echo "<br>md: "; echo $arFields["CHECKWORD"];echo "<br>";
            $ID = $user->Add($arFields);
            if (intval($ID) > 0)
            {
                echo "������������ ������� ��������.";
                //������� CHECKWORD
                $strSql = "UPDATE b_user SET ".
                    "	CHECKWORD = '".$salt.md5($salt.$checkword)."', ".
                    "	CHECKWORD_TIME = ".$DB->CurrentTimeFunction().", ".
                    "	LID = '".$DB->ForSql('s1', 2)."' ".
                    "WHERE ID = '".$ID."'".
                    "	AND (EXTERNAL_AUTH_ID IS NULL OR EXTERNAL_AUTH_ID='') ";

                $DB->Query($strSql, false, "FILE: ".__FILE__."<br> LINE: ".__LINE__);
                //������ � ������������ � ������ �������
                //����� ������������ � ������������ �������� ���� $arCourse["ID"]
                //��������� � ������ $checkword
                $event = new CEvent;
                $arPFields = Array(
                    "COURSE_NAME" => $arCourse["NAME"],
                    "USER_CHECKWORD" => $checkword,
                    "USER_LOGIN"=>$_REQUEST['EMAIL'],
                    "USER_EMAIL"=>$_REQUEST['EMAIL']
                );
                $event->Send("COURSE_SUBSCRIBE", "s1", $arPFields);
            }
            else
            {
                echo $user->LAST_ERROR;
            }

        }


?><pre><?print_r($arResult)?></pre>
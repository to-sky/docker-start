<?php
	// system msg
	const ERROR_LOGIN = 0;
	const SUCCESS_LOGIN = 1;
	const SUCCESS_LOGOUT = 6;
	const SUCCESS_QUERY = 7;
	const NOT_LOGIN = 2;
	const ERROR_REGISTERED = 3;
	const ERROR_QUERY = 4;
	const ERROR_INVALID_FIELD = 5;
	const LOGINED = 8;
	const API_DEFAULT = 9;
	const SUCCESS_REGISTERED = 10;
	const ERROR_FIELD_EXIST = 11;
	const ERROR_PASSWORD_NOT_MATCH = 12;
	const ERROR_RECORD_NOT_EXIST = 13;
	const ERROR_CHANGE_PASSWORD = 14;
	const SUCCESS_CHANGE_PASSWORD = 15;
	const SUCCESS_REGISTERED_PLEASE_CONFIRM_YOUR_EMAIL = 16;
	const SUCCESS_CONFIRM = 17;
	const ERROR_CHANGE_EMAIL = 18;
	const COMMENT_NOT_FIND = 19;
	const ACCESS_DENIED = 20;
	const ERROR_FIELD_NOT_SET = 21;
	const ERROR_DONT_SUPPORT = 22;
	const ERROR_CUSTOM = 23;
	const SUCCESS_CUSTOM = 24;
	const NOTICE_CUSTOM = 25;
	const ERROR_SEND_MAIL = 26;
	const FAILED_QUERY = 27;
    const ERROR_SHOW_MESSAGE = 28;

	// user invited status
	const USER_REGISTERED = 201;
	const USER_UNREGISTERED = 202;
	const USER_INVITED_IN_SYSTEM = 203;
	const USER_INVITED_IN_FRIEND = 204;
	const USER_ALREADY_FRIEND = 205;

	// friends status
	const FRIEND_ACCEPT = 301;
	const FRIEND_INVITED = 302;
	const FRIEND_DECLINE = 303;
	const FRIEND_IGNORE = 304;
	const FRIEND_DISABLE_FRIEND = 305;

	// type notification
	const NOTIFICATION_NEW_COMMENT = 401;
	const NOTIFICATION_INVITE_IN_FRIEND = 402;
	const NOTIFICATION_ACCEPT_FRIEND = 403;
	const NOTIFICATION_REGISTERED_FRIEND = 404;
	const NOTIFICATION_REMOVED_FRIEND = 405;
	const NOTIFICATION_DECLINE_FRIEND = 406;
	const NOTIFICATION_FRIEND_ADDED_NEW_PHOTO = 407;
	const NOTIFICATION_FRIEND_ADDED_NEW_VIDEO = 408;
	const NOTIFICATION_FRIEND_COMMENTED_YOUR_PHOTO = 409;
	const NOTIFICATION_FRIEND_COMMENTED_YOUR_VIDEO = 410;
	const NOTIFICATION_FRIEND_LIKE_YOUR_PHOTO = 411;
	const NOTIFICATION_FRIEND_LIKE_YOUR_VIDEO = 412;
	const NOTIFICATION_SETTINGS_ENABLE = 413;
	const NOTIFICATION_SETTINGS_DISABLE = 414;

	// role
	const NOT_CONFIRM_USER = 501;
	const CONFIRM_USER = 502;

	// media
	const ERROR_MEDIA_TYPE_FILE = 601;
	const SUCCESS_UPLOADED = 602;
	const MEDIA_NOT_FOUND = 603;
	const MEDIA_NOT_EMPTY = 604;

    // defect
    const ERROR_DEFECT_DOUBLE_NAME = 701;
	const ERROR_DEFECT_CREATE = 702;

    // project
    const ERROR_PROJECT_ARCHIVED = 801;

	// hse
	const HSE_MODEL_ERROR = 901;

	// messages
	const ERROR_TASK_NOT_EXISTS = 1001;
	const ERROR_PROJECT_NOT_EXISTS = 1002;
	const ERROR_AREA_NOT_EXISTS = 1003;

// change the following paths if necessary
require(dirname(__FILE__).'/protected/vendor/autoload.php');
$yii=dirname(__FILE__).'/protected/vendor/yiisoft/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
//date_default_timezone_set("Australia/Sydney");//or change to whatever timezone you want
Yii::createWebApplication($config)->run();
//Yii::app()->setTimezone('Europe/London');

/*if (date_default_timezone_get()) {
    echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
}*/
# create not exist folders
System::initFolders();
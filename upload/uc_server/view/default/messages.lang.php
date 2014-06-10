<?php

$lang = array(
	'please_login' => 'กรุณาเข้าสู่ระบบ',
	'receiver_no_exists' => 'คุณยังไม่ได้ระบุชื่อผู้รับหรือชื่อผู้รับไม่ถูกต้อง กรุณากรอกอีกครั้ง',
	'pm_save_succeed' => 'ข้อความร่างถูกบันทึกไว้ที่กล่องข้อความร่างเรียบร้อย',
	'pm_send_succeed' => 'ข้อความทั้งหมดถูกส่งเรียบร้อย',
	'pm_send_announce_succeed' => 'ส่งข้อความประกาศข่าวสารเรียบร้อย',
	'pm_send_ignore' => 'ไม่สามารถส่งข้อความส่วนตัวได้',
	'pm_delete_succeed' => 'ลบข้อความส่วนตัวเรียบร้อย',
	'pm_delete_invalid' => 'ผิดพลาด!! ไม่สามารถลบข้อความส่วนตัวได้',
	'pm_unread' => 'ทำเป็นหัวข้อนี้ยังไม่ได้อ่าน',
	'blackls_updated' => 'อัพเดทรายชื่อที่ไม่ต้องการติดต่อ',
	'pm_kickmember_succeed' => 'การเตะสมาชิกออกจากกลุ่มแชทสำเร็จ ',
	'pm_appendmember_succeed' => 'การเพิ่มสมาชิกเข้ามาในกลุ่มแชทประสบความสำเร็จ ',
	'pm_appendmember_invalid' => 'การเพิ่มสมาชิกล้มเหลว',
	'pm_send_chatpmmemberlimit_error' => 'เกินจำนวนสูงสุดของกลุ่มแชทที่จะรับได้',
	'pm_send_pmfloodctrl_error' => 'คุณได้ส่งข้อความเกินกว่ากำหนดในช่วงเวลาสั้นๆ, โปรดส่งในภายหลัง',
	'pm_send_privatepmthreadlimit_error' => 'การส่งข้อความากกว่าที่กำหนดในเวลา 24 ชั่วโมง',
	'pm_send_chatpmthreadlimit_error' => 'การใช้กลุ่มแชทเกินกว่ากำหนดใน 24 ชั่วโมง',
	'pm_clear_processing' => 'เริ่มต้นการดำเนินงานจาก current ไป next',
	'pm_clear_succeed' => 'การดำเนินงานจะประสบความสำเร็จ ',
	'pm_delete_noselect' => 'Please select the message processing',

	'db_export_filename_invalid' => 'คุณไม่ได้ใส่ชื่อไฟล์สำรองข้อมูลหรือนามสกุลไฟล์，กรุณากลับไปแก้ไข.',
	'db_export_file_invalid' => 'ไม่สามารถบันทึกไฟล์ข้อมูลไปยังเซิร์ฟเวอร์，โปรดตรวจสอบคุณสมบัติไดเรกทอรี.',
	'db_export_multivol_redirect' => 'ปริมาตรการสำรอง: ไฟล์ข้อมูล #$volume สร้างสมบูรณ์，โปรแกรมจะดำเนินต่อไปโดยอัตโนมัติ.',
	'db_export_multivol_succeed' => 'ขอแสดงความยินดี，ไฟล์สำรองทั้งหมดถูกสร้างสำเร็จ，การสำรองข้อมูลเสร็จสมบูรณ์.',
	'db_import_multivol_succeed' => 'การแยกข้อมูล/นำเข้าฐานข้อมูลสำเร็จ',
	'db_import_file_illegal' => 'ไม่พบไฟล์ข้อมูล : เซิร์ฟเวอร์อาจไม่อนุญาตให้อัปโหลดไฟล์หรือขนาดเกินขีดจำกัด.',
	'db_import_multivol_redirect' => 'ระดับของข้อมูล #$volume นำเข้าในฐานข้อมูลสำเร็จ，โปรแกรมจะนำเข้าโดยอัตโนมัติ เพิ่มเติมการสำรอง.',
	'db_back_api_url_invalid' => 'ไม่สามารถให้ทางเข้าถึงอินเตอร์เฟซของโปรแกรมการสำรอง，กรุณาคัดลอกไดเรกทอรี api/dbbak.php ไปยังไดเรกทอรีของ API นี้',
	'delete_dumpfile_success' => 'ลบไฟล์สำรองข้อมูลได้สำเร็จ',
	'delete_dumpfile_redirect' => '#$appname การลบไฟล์สำรองภายใต้ชื่อเดียวกันประสบความสำเร็จ，โปรแกรมจะลบโปรแกรมอื่นๆโดยอัตโนมัติ.',
	'dbback_error_code_1' => 'ไม่สามารถสร้างไดเรคทอรี่',
	'dbback_error_code_2' => 'การเขียนไฟล์สำรองล้มเหลว',
	'dbback_error_code_3' => 'เกิดข้อผิดพลาดในการเรียก SQL',
	'dbback_error_code_4' => 'ไดเรคทอรี่ว่างเปล่าหรือไม่พบไดเรคทอรี่',
	'dbback_error_code_5' => 'ไม่พบไดเรกทอรีที่เลือกกรุณาตรวจสอบสิทธิ์ในไฟล์สำรอง',
	'dbback_error_code_6' => 'ไฟล์ที่สำรองไว้หายไป',
	'dbback_error_code_7' => 'ไม่พบไดเรคทอรี่ที่เลือกในการสำรอง',
	'dbback_error_code_8' => 'เกิดข้อผิดพลาดในการลบไฟล์สำรองฐานข้อมูลที่เลือก',
	'dbback_error_code_9' => 'โปรแกรมไม่ที่สนับสนุนประเภทของการสำรองโดยสคริปส่วนติดต่อการสำรอง',
	'undefine_error' => 'เกิดข้อผิดพลาดที่ไม่สามารถระบบสาเหตุได้',

	'app_add_url_invalid' => 'ที่อยู่ URL ของโปรแกรมไม่สมบูรณ์',
	'app_add_ip_invalid' => 'ที่อยู่ IP ไม่สมบูรณ์',
	'app_add_name_invalid' => 'ชื่อการสมัครนั้นไม่ถูกต้องหรือไปซ้ำกับโปรแกรมอื่น, โปรดกลับไปแก้ไข',
	'read_plugin_invalid' => 'ปลั๊กอิน(ตัวเสริม)ไม่สมบูรณ์',

	'syncappcredits_updated' => 'การตั้งค่าการรวมแอพลิเคชันการซิงโครไนส์สำเร็จ',

	'note_succeed' => 'สำเร็จ',
	'note_false' => 'ล้มเหลว',
	'no_permission_for_this_module' => 'ไม่ได้รับอนุญาตให้จัดการโมดูล',
	'admin_user_exists' => 'ชื่อผู้ใช้มีอยู่แล้ว，กรุณากลับไปลองใช้ชื่อผู้ใช้อื่น.',

	'mail_succeed' => 'ข้อความถูกส่งเรียบร้อยแล้ว',
	'mail_false' => 'ส่งข้อความล้มเหลว',
	
	'user_edit_noperm' => 'คุณไม่ได้รับอนุญาตให้แก้ไขผู้ใช้นี้',

	'appid_invalid' => 'ID ไม่ถูกต้อง',
	'app_apifile_not_exists' => 'ไฟล์ #$apifile ไม่มีอยู่，กรุณากลับไปตรวจสอบที่อยู่ของโปรแกรมให้ถูกต้อง...',
	'app_apifile_too_low' => 'ส่วนติดต่อไฟล์ #$apifile เวอร์ชันต่ำเกินไป',
	'app_path_not_exists' => 'ไม่พบที่อยู่，โปรดกลับไปตรวจสอบ',
	'pm_send_seccode_error' => 'รหัสยืนยันเกิดข้อผิดพลาด',
	'pm_send_regdays_error' => 'ไม่อนุญาตให้ส่งข้อความใน #$pmsendregdays หลังจากวันลงทะเบียน',
	'pm_send_limit1day_error' => 'ขออภัย，การส่งข้อความของคุณเกินกว่าที่ระบบกำหนดไว้，กรุณาย้อนกลับ.',
	'pm_send_floodctrl_error' => 'ขออภัย，ระยะเวลาในการส่งข้อความครั้งต่อไป ของคุณเร็วเกินไป，กรุณารอซักครู่ แล้วลองใหม่ภายหลัง',
	
	'file_check_failed' => 'ไม่พบไฟล์ ไม่สามารถตรวจสอบได้',
);
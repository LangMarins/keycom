<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_threadlist.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'threadlist_fids' => 'เลือกบอร์ด',
	'threadlist_fids_comment' => 'กำหนดบอร์ดที่ต้องการให้แสดงข้อมูล, สามารถกดปุ่ม CTRL ที่คีบอร์ดค้างไว้เพื่อเลือกหลายบอร์ด, หากต้องการให้แสดงทุกบอร์ด ไม่ต้องเลือกบอร์ดใดๆ',
	'threadlist_uids' => 'UID เจ้าของ',
	'threadlist_uids_comment' => 'กำหนด  UID เจ้าของ, หากมีมากกว่าหนึ่ง UID กรุณาใช้เครื่องหมายคอมม่า “,” เพื่อเป็นตัวคั่นหรือแยกแต่ละ UID',
	'threadlist_startrow' => 'จำนวนแถวเริ่มต้นของข้อมูล',
	'threadlist_startrow_comment' => 'ถ้าจำเป็นต้องตั้งค่าจำนวนแถวของข้อมูลเริ่มต้น, กรุณาใส่ค่าที่ต้องการ, 0 คือจะการเริ่มการทำงานจากแถวแรก, เป็นต้น',
	'threadlist_items' => 'จำนวนข้อมูลที่จะแสดง',
	'threadlist_items_comment' => 'กำหนดจำนวนข้อมูลที่จะแสดง, กรุณากำหนดเป็นจำนวนเต็มที่มากกว่า 0',
	'threadlist_titlelength' => 'จำนวนไบต์สูงสุดของชื่อกระทู้',
	'threadlist_titlelength_comment' => 'กำหนดความยาวของชื่อกระทู้, หากกำหนดจำนวนไบต์เกินจะไม่ลดโดยอัตโนมัติ, 0 คือจะลดโดยอัตโนมัติ',
	'threadlist_fnamelength' => 'จำนวนไบต์สูงสุดของชื่อบอร์ด',
	'threadlist_fnamelength_comment' => 'กำหนดความยาวของชื่อบอร์ด และความยาวของชื่อกระทู้จะถูกนับเข้าด้วยกัน',
	'threadlist_summarylength' => 'จำนวนไบต์สูงสุดของเนื้อหา',
	'threadlist_summarylength_comment' => 'กำหนดจำนวนไบต์สูงสุดของเนื้อหา, 0 คือค่าเริ่มต้น สามารถกำหนดได้สูงสุดถึง 255',
	'threadlist_tids' => 'กำหนดหัวข้อ',
	'threadlist_tids_comment' => 'กำหนด tid ของหัวข้อที่ต้องการ, หากมีมากกว่าหนึ่ง tid กรุณาใช้เครื่องหมายคอมม่า “,” เพื่อเป็นตัวคั่นหรือแยกแต่ละ tid หมายเหตุ: ปล่อยให้ว่างไว้หากไม่มีตัวกรองใดๆ',
	'threadlist_keyword' => 'แท็กของหัวข้อ',
	'threadlist_keyword_comment' => 'ตั้งค่าแท็กของกระทู้ หมายเหตุ: ปล่อยว่างไว้หากไม่มีแท็กใดๆ สามารถใช้สัญลักษณ์ * แทนแท็กหลัก ค้นหาโดยแท็กหลักเพิ่มเติม, สามารถใช้ช่องว่างระหว่างคำ หรือ AND ในการเชื่อมต่อ เช่น win32 AND unix เพื่อให้ตรงกับแท็กหลักที่มากกว่าหนึ่งคำ, สามารถใช้ | หรือ OR ในการเชื่อมต่อ เช่น win32 OR unix',
	'threadlist_tagkeyword' => 'TAG',
	'threadlist_tagkeyword_comment' => 'Choose Tags (keywords). Note: Leave blank for no filtering; keywords can use wildcards *; For match one or more keywords use | or "OR" separator, i.e. "win32 OR unix"',
	'threadlist_typeids' => 'หมวดหมู่หัวข้อ',
	'threadlist_typeids_comment' => 'กำหนดหมวดหมู่หัวข้อ หมายเหตุ: เลือกทั้งหมดหรือเลือกที่จะไม่มีตัวกรองใดๆ',
	'threadlist_typeids_all' => 'หมวดหมู่หัวข้อทั้งหมด',
	'threadlist_sortids' => 'หมวดหมู่ข้อมูล',
	'threadlist_sortids_comment' => 'กำหนดหมวดหมู่ข้อมูล หมายเหตุ: เลือกทั้งหมดหรือเลือกที่จะไม่มีตัวกรองใดๆ',
	'threadlist_sortids_all' => 'หมวดหมู่ข้อมูลทั้งหมด',
	'threadlist_digest' => 'กรองกระทู้สำคัญ',
	'threadlist_digest_comment' => 'ตั้งค่าให้กรองเฉพาะกระทู้สำคัญ หมายเหตุ: เลือกทั้งหมดหรือเลือกที่จะไม่มีตัวกรองใดๆ',
	'threadlist_digest_0' => 'กระทู้ทั่วไป',
	'threadlist_digest_1' => 'กระทู้สำคัญ I',
	'threadlist_digest_2' => 'กระทู้สำคัญ II',
	'threadlist_digest_3' => 'กระทู้สำคัญ III',
	'threadlist_stick' => 'กรองกระทู้ปักหมุด',
	'threadlist_stick_comment' => 'ตั้งค่าให้กรองเฉพาะกระทู้ปักหมุด หมายเหตุ: เลือกทั้งหมดหรือเลือกที่จะไม่มีตัวกรองใดๆ',
	'threadlist_stick_0' => 'กระทู้ทั่วไป',
	'threadlist_stick_1' => 'ปักหมุด I',
	'threadlist_stick_2' => 'ปักหมุด II',
	'threadlist_stick_3' => 'ปักหมุด III',
	'threadlist_special' => 'กรองกระทู้พิเศษ',
	'threadlist_special_comment' => 'ตั้งค่าให้กรองเฉพาะกระทู้พิเศษ หมายเหตุ: เลือกทั้งหมดหรือเลือกที่จะไม่มีตัวกรองใดๆ',
	'threadlist_special_1' => 'กระทู้โพล',
	'threadlist_special_2' => 'กระทู้ขายสินค้า',
	'threadlist_special_3' => 'กระทู้รางวัล',
	'threadlist_special_4' => 'กระทู้กิจกรรม',
	'threadlist_special_5' => 'กระทู้โต้วาที',
	'threadlist_special_0' => 'กระทู้ทั่วไป',
	'threadlist_special_reward' => 'กรองกระทู้รางวัล',
	'threadlist_special_reward_comment' => 'กำหนดว่าจะแสดงเฉพาะกระทู้รางวัลหรือไม่',
	'threadlist_special_reward_0' => 'ทั้งหมด',
	'threadlist_special_reward_1' => 'ได้รับการแก้ไข',
	'threadlist_special_reward_2' => 'ไม่แน่นอน',
	'threadlist_recommend' => 'กรองกระทู้แนะนำ',
	'threadlist_viewmod' => 'แสดงกระทู้ในรูปแบบบทความ',
	'threadlist_recommend_comment' => 'กำหนดว่าจะแสดงเฉพาะกระทู้แนะนำหรือไม่',
	'threadlist_picrequired' => 'จะต้องมีไฟล์แบบรูปภาพ',
	'threadlist_picrequired_comment' => 'กำหนดให้แสดงเฉพาะที่มีไฟล์แบบรูปภาพ',
	'threadlist_orderby' => 'การจัดเรียงลำดับกระทู้',
	'threadlist_orderby_comment' => 'ตั้งค่าการจัดเรียงลำดับของกระทู้',
	'threadlist_orderby_lastpost' => 'จัดเรียงตามกระทู้ที่มีการตอบกลับล่าสุด',
	'threadlist_orderby_dateline' => 'จัดเรียงตามวันที่ตั้งกระทู้',
	'threadlist_orderby_replies' => 'จัดเรียงตามจำนวนข้อความตอบกลับ',
	'threadlist_orderby_views' => 'จัดเรียงตามจำนวนการเข้าชม/ดู',
	'threadlist_orderby_heats' => 'จัดเรียงตามความนิยม',
	'threadlist_orderby_recommends' => 'จัดเรียงตามกระทู้แนะนำ',
	'threadlist_orderby_hourviews' => 'จัดเรียงตามการเข้าชมต่อชั่วโมง',
	'threadlist_orderby_todayviews' => 'จัดเรียงตามการเข้าชมต่อวัน',
	'threadlist_orderby_weekviews' => 'จัดเรียงตามการเข้าชมต่อสัปดาห์',
	'threadlist_orderby_monthviews' => 'จัดเรียงตามการเข้าชมต่อเดือน',
	'threadlist_orderby_hours' => 'กำหนดเวลา (ชั่วโมง)',
	'threadlist_orderby_hours_comment' => 'กำหนดเวลาในการจัดเรียงลำดับกระทู้',
	'threadlist_orderby_todayhots' => 'จัดเรียงตามความนิยมต่อวัน',
	'threadlist_orderby_weekhots' => 'จัดเรียงตามความนิยมต่อสัปดาห์',
	'threadlist_orderby_monthhots' => 'จัดเรียงตามความนิยมต่อเดือน',
	'threadlist_lastpost' => 'อัปเดตล่าสุด',
	'threadlist_postdateline' => 'หัวข้อ โพสต์เมื่อ',
	'threadlist_postdateline_nolimit' => 'ไม่จำกัด',
	'threadlist_postdateline_hour' => 'ไม่จำกัด',
	'threadlist_postdateline_day' => '24 ชั่วโมง',
	'threadlist_postdateline_week' => '7 วัน',
	'threadlist_postdateline_month' => '1 เดือน',
	'threadlist_lastpost_nolimit' => 'ไม่จำกัด',
	'threadlist_lastpost_hour' => '1 ชั่วโมง',
	'threadlist_lastpost_day' => '24 ชั่วโมง',
	'threadlist_lastpost_week' => '7 วัน',
	'threadlist_lastpost_month' => '1 เดือน',
	'threadlist_price_add' => ' เพิ่มเติม ',
	'threadlist_place' => 'สถานที่จัดกิจกรรม',
	'threadlist_class' => 'ประเภทกิจกรรม',
	'threadlist_gender' => 'ผู้ที่สามารถเข้าร่วม',
	'threadlist_gender_0' => 'ไม่จำกัด',
	'threadlist_gender_1' => 'ผู้ชายเท่านั้น',
	'threadlist_gender_2' => 'ผู้หญิงเท่านั้น',
	'threadlist_orderby_weekstart' => 'จัดเรียงตามสัปดาห์ที่เริ่มต้น',
	'threadlist_orderby_monthstart' => 'จัดเรียงตามเดือนที่เริ่มต้น',
	'threadlist_orderby_weekexp' => 'จัดเรียงตามสัปดาห์ที่สิ้นสุด',
	'threadlist_orderby_monthexp' => 'จัดเรียงตามเดือนที่สิ้นสุด',
	'threadlist_highlight' => 'เน้นสี',
);

?>
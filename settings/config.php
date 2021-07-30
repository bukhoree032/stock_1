<?php
/* config.php */
return array (
  'version' => '4.0.2',
  'web_title' => 'LPDC - พัสดุ',
  'web_description' => 'ระบบ ยืม-คืน พัสดุ ออนไลน์',
  'timezone' => 'Asia/Bangkok',
  'member_status' => 
  array (
    0 => 'สมาชิก',
    1 => 'ผู้ดูแลระบบ',
    2 => 'ช่างซ่อม',
    3 => 'ผู้รับผิดชอบ',
  ),
  'color_status' => 
  array (
    0 => '#259B24',
    1 => '#FF0000',
    2 => '#0E0EDA',
    3 => '#827717',
  ),
  'default_icon' => 'icon-exchange',
  'inventory_w' => 600,
  'borrow_no' => 'B%Y%M%D-%04d',
  'password_key' => '6103755b04f2c',
  'user_forgot' => 1,
  'user_register' => 1,
  'welcome_email' => 0,
  'member_only' => 1,
  'demo_mode' => 0,
  'login_fields' => 
  array (
    0 => 'username',
    1 => 'phone',
  ),
  'facebook_appId' => '',
  'google_client_id' => '',
  'bg_color' => '#3498DB',
  'color' => '#FFFFFF',
  'line_api_key' => '',
);
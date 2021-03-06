<?php 
return [
  'backend' => [
    'access' => [
      'users' => 
      [
        'delete_user_confirm' => 'کیا آپ واقعی اس صارف کو مستقل طور پر حذف کرنا چاہتے ہیں؟ کسی بھی درخواست میں جو کہیں بھی اس صارف کے آئی ڈی کا حوالہ دیتا ہے وہ غلطی کا سبب بنتا ہے۔ اپنے ہی خطرہ پر آگے بڑھیں۔ یہ کام نہیں کیا جاسکتا۔',
        'if_confirmed_off' => '(اگر تصدیق شدہ آف ہے)',
        'restore_user_confirm' => 'اس صارف کو اس کی اصل حالت میں بحال کریں؟',
      ],
    ],
    'dashboard' => [
      'title' => 'سپر ایڈمن ایڈمنسٹریشنل ڈیش بورڈ',
      'welcome' => 'خوش آمدید',
    ],
    'general' => [
      'all_rights_reserved' => 'جملہ حقوق محفوظ ہیں.',
      'are_you_sure' => 'کیا آپ واقعی یہ کرنا چاہتے ہیں؟',
      'boilerplate_link' => 'روز بلنگ',
      'continue' => 'جاری رہے',
      'member_since' => 'چونکہ اراکین',
      'minutes' => 'منٹ',
      'search_placeholder' => 'تلاش کریں ...',
      'timeout' => 'آپ سیکیورٹی وجوہات کی بناء پر خود بخود لاگ آؤٹ ہوگئے تھے کیوں کہ آپ میں کوئی سرگرمی نہیں تھی',
      'see_all' => 
      [
        'messages' => 'تمام پیغامات دیکھیں',
        'notifications' => 'سب دیکھیں',
        'tasks' => 'تمام کاموں کو دیکھیں',
      ],
      'status' => 
      [
        'online' => 'آن لائن',
        'offline' => 'آف لائن',
      ],
      'you_have' => 
      [
        'messages' => '{0} آپ کے پاس پیغامات نہیں ہیں۔ {1} آپ کے پاس 1 پیغام ہے۔ [2، Inf] آپ کے پاس ہے: نمبر پیغامات',
        'notifications' => '{0} آپ کے پاس اطلاعات نہیں ہیں۔ don 1} آپ کے پاس 1 اطلاع ہے۔ [2 ، انف] آپ کے پاس ہے: نمبر کی اطلاعات',
        'tasks' => '{0} آپ کے پاس ٹاسک نہیں ہوتے ہیں۔ {1} آپ کے پاس 1 ٹاسک ہے | [2، Inf] آپ کے پاس: نمبر کام',
      ],
    ],
    'search' => [
      'empty' => 'برائے مہربانی تلاش کی اصطلاح درج کریں۔',
      'incomplete' => 'اس نظام کے ل You آپ کو اپنی تلاش کی لاجک ضرور لکھنی ہوگی۔',
      'title' => 'تلاش کے نتائج',
      'results' => 'کے لئے تلاش کے نتائج: استفسار',
    ],
    'welcome' => 'خوش آمدید',
  ],
  'emails' => [
    'auth' => [
      'error' => 'افوہ!',
      'greeting' => 'ہیلو!',
      'regards' => 'حوالے،',
      'trouble_clicking_button' => 'اگر آپ کو ": action_text" بٹن پر کلک کرنے میں پریشانی ہو رہی ہے تو ، نیچے URL کو اپنے ویب براؤزر میں کاپی اور پیسٹ کریں:',
      'thank_you_for_using_app' => 'ہماری درخواست استعمال کرنے کے لئے آپ کا شکریہ!',
      'password_reset_subject' => 'پاس ورڈ ری سیٹ',
      'password_cause_of_email' => 'آپ کو یہ ای میل موصول ہورہا ہے کیونکہ ہمیں آپ کے اکاؤنٹ کیلئے پاس ورڈ دوبارہ ترتیب دینے کی درخواست موصول ہوئی ہے۔',
      'password_if_not_requested' => 'اگر آپ نے پاس ورڈ دوبارہ ترتیب دینے کی درخواست نہیں کی ہے تو ، مزید کارروائی کی ضرورت نہیں ہے۔',
      'reset_password' => 'اپنا پاس ورڈ دوبارہ ترتیب دینے کے لئے یہاں کلک کریں',
      'click_to_confirm' => 'اپنے اکاؤنٹ کی تصدیق کے لئے یہاں کلک کریں:',
    ],
  ],
  'frontend' => [
    'test' => 'پرکھ',
    'tests' => [
      'based_on' => 
      [
        'permission' => 'اجازت کی بنیاد پر -',
        'role' => 'کردار پر مبنی -',
      ],
      'js_injected_from_controller' => 'جاوا اسکرپٹ ایک کنٹرولر سے انجکشن ہے',
      'using_blade_extensions' => 'بلیڈ ایکسٹینشن کا استعمال کرتے ہوئے',
      'using_access_helper' => 
      [
        'array_permissions' => 'اجازت ناموں یا IDs کی صف کے ساتھ رسائی ہیلپر کا استعمال کرنا جہاں صارف کے پاس سبھی چیزیں رکھنی ہوتی ہیں۔',
        'array_permissions_not' => 'اجازت ناموں یا IDs کی صف کے ساتھ رسائی ہیلپر کا استعمال کرنا جہاں صارف کو سب کچھ حاصل کرنے کی ضرورت نہیں ہے۔',
        'array_roles' => 'کردار کے ناموں یا ID "کے ارے کے ساتھ رسائی ہیلپر کا استعمال کرنا جہاں صارف کو سب کچھ حاصل کرنا پڑتا ہے۔',
        'array_roles_not' => 'کردار کے ناموں یا شناختی اشارے کے ساتھ رسائی ہیلپر کا استعمال کرتے ہوئے جہاں صارف کو سب کچھ حاصل کرنے کی ضرورت نہیں ہے۔',
        'permission_id' => 'اجازت ID کے ساتھ رسائی ہیلپر کا استعمال کرنا',
        'permission_name' => 'اجازت نام کے ساتھ رسائی ہیلپر کا استعمال کرنا',
        'role_id' => 'رول ID کے ساتھ رسائی ہیلپر کا استعمال کرنا',
        'role_name' => 'رول نام کے ساتھ رسائی ہیلپر کا استعمال کرنا',
      ],
      'view_console_it_works' => 'کنسول دیکھیں ، آپ کو "یہ کام کرتا ہے!" دیکھنا چاہئے۔ جو فرنٹ اینڈ کنٹرولر @ انڈیکس سے آرہا ہے',
      'you_can_see_because' => 'آپ اسے دیکھ سکتے ہیں کیونکہ آپ کا کردار ": भूमिका" ہے!',
      'you_can_see_because_permission' => 'آپ اسے دیکھ سکتے ہیں کیونکہ آپ کے پاس ": اجازت" کی اجازت ہے!',
    ],
    'user' => [
      'change_email_notice' => 'اگر آپ اپنا ای میل تبدیل کرتے ہیں تو آپ اس وقت تک لاگ آؤٹ ہوجائیں گے جب تک آپ اپنے نئے ای میل پتے کی تصدیق نہیں کرتے ہیں۔',
      'email_changed_notice' => 'دوبارہ لاگ ان کرنے سے پہلے آپ کو اپنے نئے ای میل پتے کی تصدیق کرنی ہوگی۔',
      'profile_updated' => 'پروفائل کامیابی کے ساتھ اپ ڈیٹ ہوگیا۔',
      'password_updated' => 'پاس ورڈ کامیابی کے ساتھ اپ ڈیٹ ہوگیا۔',
    ],
    'welcome_to' => 'خوش آمدید: جگہ',
  ],
];
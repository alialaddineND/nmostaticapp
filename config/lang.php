<?php
$req_uri = $_SERVER['REQUEST_URI'];
$_req_uri_arr = explode('/' , $req_uri);
//print_r($_req_uri_arr);
unset($_req_uri_arr[0]);
//print_r($_req_uri_arr);

if(isset($lang)){
  unset($_req_uri_arr[1]);
  $new_url_parts = implode('/', $_req_uri_arr);
  $_lang = $lang;
  $_url_lang = '/en/';
  $_lang_redirect = '/'.$new_url_parts;
} else {
  $new_url_parts = implode('/', $_req_uri_arr);
  $_lang = 'ar';
  $_url_lang = '/';
  $_lang_redirect = '/en/'.$new_url_parts;
}

$_strings = array(
  'gen_sett' => array(
    'en' => array(
      'learn_btn' => 'Learn More',
      'view_news' => 'View all News',
      'view_initiatives' => 'View all Initiatives',
      'foot_contact' => 'Contact Us',
      'disclaimer' => 'Disclaimer',
      'privacy' => 'Privacy Policy',
      'terms' => 'Terms & Conditions',
      'cright' => date('Y').' All Rights Reserved.',
      'share_cta' => 'Share',
      'logo' => '/assets/images/logo.svg',
      'meta_title' => 'The National Media Office',
      'meta_desc' => 'The office aims to develop the media sector in the UAE in a way that serves the national interest and strengthens the country’s media position at the regional and international levels',
      'meta_img' => '/assets/images/shareimg.jpg'
    ),
    'ar' => array(
      'learn_btn' => 'اقرأ المزيد',
      'view_news' => 'استعرض الكل',
      'view_initiatives' => 'استعرض الكل',
      'foot_contact' => 'اتصل بنا',
      'disclaimer' => 'إخلاء المسؤولية',
      'privacy' => 'سياسة الخصوصية',
      'terms' => 'الشروط والأحكام',
      'cright' => date('Y').' جميع الحقوق محفوظة.',
      'share_cta' => 'شارك',
      'logo' => '/assets/images/logoar.svg',
      'meta_title' => 'المكتب الوطني للإعلام',
      'meta_desc' => 'يهدف المكتب إلى تطوير منظومة الإعلام في الدولة بما يخدم المصلحة الوطنية ويعزز موقع الدولة الإعلامي على المستوى الإقليمي والدولي',
      'meta_img' => '/assets/images/shareimg.jpg'
    )
  ),
  'legal' => array(
    'disclaimer' => array(
      'en' => array(
        'title' => 'Disclaimer',
        'content' => '<p>The user acknowledges that, as per the general rules of tort or contractual liability, The National Media Office bears no responsibility for any damage, whether direct or indirect and regardless of its source, and whether arising from the use of the site or from the inability to use it.</p>'
      ),
      'ar' => array(
        'title' => 'إخلاء المسؤولية',
        'content' => '<p>يقرّ المستخدم بعلمه بأن المكتب الوطني للإعلام لا يتحمّل أي مسؤولية ناتجة عن أي ضرر مباشر أو غير مباشر ومهما كان مصدره، وفق قواعد المسؤولية التعاقدية أو التقصيرية، وسواء كان الضرر ناشئا عن استخدام الموقع أو عدم القدرة على استخدامه.</p>'
      )
    ),
    'terms' => array(
      'en' => array(
        'title' => 'Terms and Conditions',
        'content' => '<h3>ACCEPTANCE OF TERMS THROUGH USE</h3>
        <p>Using this website shall be deemed as an acceptance of the terms and conditions stated therein. The National Media Office reserves the right to review the Terms of Use mentioned therein at any time and to announce any change or modification of the same at any time on the website thereof.</p>
        <p>The user shall be deemed responsible for checking regularly whether any changes or modifications are announced.</p>
        <p>The continued use of this website, in light of any changes or modifications to the terms and conditions thereof, shall be deemed as an implicit acceptance by the user of such terms and conditions.</p>
        <h3>COPYRIGHTS</h3>
        <p>All rights, including copyright and data base rights of The National Media Office website and content, shall be deemed as owned or licensed to The National Media Office, as permitted by the prevalent laws.</p>
        <h3>INTELLECTUAL PROPERTY RIGHTS (IPR):</h3>
        <p>The user acknowledges and agrees that all content and material included on this website shall be protected by the laws regulating copyright, rights of trademark, service and other IPR rights.</p>
        <p>The user pledges and commits not to broadcast, display, implement, publish, modify, edit or create any derivative work from the content of this website unless he previously obtain an express written approval from The National Media Office. As an exception to this, the user &nbsp;may print or have one copy of partial material and content of this website, on any personal PC, for personal or non-commercial use, provided that the user shall keep all copyrights, and IPR unchanged.</p>
        <p>The user acknowledge that data or any other content shall not be retrieved in an organised way from this website to establish or gather a database or evidence without a prior written and explicit approval from The National Media Office. The user also acknowledges that the content or material included on this website shall not be used for any purpose unless mentioned explicitly in these terms and conditions of use.</p>
        <h3>LIABILITY LIMITATION</h3>
        <p>In no circumstances shall The National Media Office be liable for any direct or indirect, incidental, consequential, special or exceptional damage arising out of the use or inability to use this website. This term shall apply whether such liability is contractual, tortuous or arising out of negligence or any other form of legal liability.</p>
        <p>In case of service disruption for whatever reason, The National Media Office shall assume no liability for such failure or the damages related thereto.</p>
        <h3>SEVERABILITY</h3>
        <p>In case any part of the terms of use becomes ineffective or inapplicable, such part shall be interpreted in a manner that agrees with the applicable law to reflect as much as possible the original intentions of such terms. The other remaining parts shall remain of full legal power and valid.</p>
        <p>In case of any difference between these Terms &amp; Conditions and/ or any special or certain conditions that are found in any other section on this website, with respect to certain material or matters, such special or certain conditions shall prevail.</p>
        <h3>APPLICABLE LAW</h3>
        <p>The National Media Office has defined the previously-mentioned terms and conditions for visiting the website according to the provisions and rules mentioned in the UAE laws. In the event that a user breaches these terms and conditions, The National Media Office has the right to resort to law to protect the infrastructure and information thereof. The Abu Dhabi courts shall have jurisdiction over any dispute that might arise.</p>'
      ),
      'ar' => array(
        'title' => 'الشروط والأحكام',
        'content' => '<h3>قبول الشروط من خلال الاستخدام</h3>
        <p>استخدام هذا الموقع يعدّ قبولاً للشروط والأحكام الواردة فيه، ويحتفظ المكتب الوطني للإعلام بالحقّ في التعديل على شروط الاستخدام المذكورة في أي وقت، والإعلان عن أي تعديل على تلك الشروط على موقعه.</p>
        <p>تقع مسؤولية معرفة التعديلات الواردة على الشروط والأحكام الخاصة بالموقع على عاتق المستخدم.</p>
        <p>استخدام الموقع في ضوء أي تعديلات ترد على الشروط والأحكام، يعدّ قبولا ضمنياً بتلك التعديلات.</p>
        <h3>حقوق الطبع</h3>
        <p>تعتبر جميع الحقوق، بما فيها حقوق الطبع والنشر والحقوق المرتبطة بقواعد البيانات، الواردة على موقع المكتب الوطني للإعلام مملوكة أو مرخصة للمكتب الوطني للإعلام على النحو الذي تسمح به القوانين السائدة.</p>
        <h3>حقوق الملكية الفكرية</h3>
        <p>يقرّ المستخدم بعلمه بأن محتويات الموقع كافة تخضع للحماية القانونية وفق تشريعات الملكية الفكرية السارية في هذا الشأن، بما في ذلك حقوق الطبع والنشر والعلامة التجارية وعلامات الخدمة وحقوق الملكية الفكرية الأخرى.</p>
        <p>يتعهد المستخدم ويلتزم بألاّ يبثّ أو يعرض أو ينفّذ أو ينشر أو يعدّل أو يحرّر أو يُنشأ أي أعمال مشتقة من محتويات الموقع، ما لم يستحصل مسبقاً على موافقة خطية وصريحة بذلك من المكتب الوطني للإعلام. واستثناءً من ذلك، للمستخدم أن يطبع أو يحمّل نسخة واحدة من اجزاء من محتويات الموقع في حاسبه الشخصي، وذلك لاستخدامه الشخصي غير التجاري، شرط المحافظة على حقوق الملكية الفكرية دون تعديل وبمراعاة التشريعات النافذة في شأن حقوق الملكية الفكرية.</p>
        <p>يقرّ المستخدم بعلمه بحظر استرجاع أي محتويات من الموقع، بطريقة منظّمة لإنشاء قاعدة بيانات أو دليل أو جمعهما من دون إذن خطي سابق وصريح من المكتب الوطني للإعلام، كما يقرّ بعلمه بحظر استخدام محتويات الموقع لأي غرض، لا يكون مسموحا به صراحة.</p>
        <h3>تحديد المسؤولية</h3>
        <p>المكتب الوطني للإعلام غير مسؤول بأي حال من الأحوال عن أي ضرر مباشر أو غير مباشر أو عرضي أو تبعي أو خاص أو استثنائي ينشأ عن استخدام أو عدم القدرة على استخدام هذا الموقع.</p>
        <p>ينطبق هذا البند سواء كانت هذه المسؤولية تعاقدية أو تقصيرية أو ناشئة عن الإهمال أو أي شكل آخر من أشكال المسؤولية القانونية.</p>
        <p>في حالة انقطاع الخدمة لأي سبب من الأسباب، لا يتحمل المكتب الوطني للإعلام أي مسؤولية عن هذا الفشل أو الأضرار المتعلقة به أو المرتبطة به.</p>
        <h3>استقلالية النصوص</h3>
        <p>يقرّ المستخدم بعلمه بأنه في حال أُبطل أي شرط أو جزء من شروط استخدام الموقع لأي سبب أو أصبح غير فعال أو غير قابل للتطبيق، فإنه يقتضي اعتماد تفسير لهذا الجزء أو الشرط بشكل يتوافق مع القوانين المعمول بها وبشكل يسمح باعتماد الغاية الأساسية من وجوده. تبقى سائر الشروط والأجزاء سارية ومنتجة لكامل مفاعيلها القانونية تجاه المستخدم. يقرّ المستخدم بعلمه بأنه عند اختلاف النصوص العامة مع النصوص الخاصة الواردة في الموقع، فإن النصوص الخاصة تكون هي واجبة التطبيق.</p>
        <h3>القانون المطبق والمحكمة المختصة</h3>
        <p>وضع المكتب الوطني للإعلام الشروط والأحكام السابقة لزيارة الموقع وفقا للأحكام والقواعد الواردة في قوانين دولة الإمارات العربية المتحدة، وفي حال قيام أحد بخرق هذه الشروط والأحكام، فإن للمكتب الوطني للإعلام الحقّ في اللجوء إلى القانون لحماية بنيته التحتية والمعلومات، وتختصّ محاكم أبوظبي بتسوية أي نزاع قد ينشأ.</p>'
      )
    ),
    'privacy' => array(
      'en' => array(
        'title' => 'Privacy Policy',
        'content' => '<h3>CONSENT TO USE INFORMATION</h3>
        <p>By using The National Media Office website, each user (surfer) consents to this Privacy Policy and the Terms and Conditions applied once he accesses the website, and each user also agrees to the collection and use and dispose of all information that is provided to The National Media Office.</p>
        <h3>POLICIES REGARDING THE COLLECTION AND DISCLOSURE OF INFORMATION</h3>
        <p>The National Media Office collects personal information such as name, address and e-mail address, only when a user knowingly provides it to The National Media Office. In addition, The National Media Office may collect other information provided by users such as address, date of birth and other personally identifiable information, when user sets up an online account or order service online.</p>
        <p>The National Media Office&rsquo;s web servers automatically collect statistical information about users\' visits, such as pages visited and which browsers are used to visit the website. None of these information is associated with the user as an individual (see information, below, about cookies &ndash; files of the pages visited by users).</p>
        <h3>POLICIES REGARDING THE USE AND DISCLOSURE OF INFORMATION</h3>
        <p>The National Media Office may use and share the user\'s information and other personally identifiable information that it collects among various departments within The National Media Office and its subsidiaries that perform functions such as servicing users\' accounts, preparing reports and other user activities.</p>
        <h3>COOKIES</h3>
        <p>A cookie is a small data string our server writes to the user\'s hard drive. This technology allows The National Media Office to customise the user\'s experience when the user visits The National Media Office website.</p>
        <h3>LINKS</h3>
        <p>This website contains links to other websites. The National Media Office is not responsible for the privacy practices of any other website. We encourage our users to read the privacy statements of each website that collects personally-identifiable information.</p>
        <p>This Privacy Statement applies solely to information collected by this Website.</p>
        <p>The National Media Office is not responsible for any damages that may be caused to users as a result of using any link to any other website.</p>
        <h3>SURVEYS</h3>
        <p>From time-to-time, our website requests information from users via surveys. Participation in these surveys is entirely voluntary and the user therefore has a choice whether or not to disclose any information. The information requested may include contact information that will be used for notification of results. Other information will be used for purposes of monitoring or improving the use of this website and satisfying the user\'s needs.</p>
        <h3>SECURITY</h3>
        <p>This website takes necessary precautions to protect information gathered. When users submit information via the website, this information is protected both online and off-line. In certain cases, we use encryption to protect sensitive information online; we also do our best to protect user-information off-line. All of our users\' information is restricted. Only employees who require such information to perform a specific job are granted access to users\' personally identifiable information. The National Media Office is not responsible for any damages whatsoever that may be caused to users as a result of hacking users\' information.</p>
        <h3>NOTIFICATION OF CHANGES</h3>
        <p>If The National Media Office decides to change the Privacy Policy, those changes shall be posted on its homepage so that the users are always aware of what information is collected, how it is used and under what circumstances.</p>
        <h3>UPDATES TO THE PRIVACY POLICY</h3>
        <p>If The National Media Office updates its Privacy Policy, those updates will be posted on The National Media Office homepage so that it will be accessible to users.</p>'
      ),
      'ar' => array(
        'title' => 'سياسة الخصوصية',
        'content' => '<h3>الموافقة على استخدام المعلومات</h3>
        <p>باستخدام موقع المكتب الوطني للإعلام، يوافق كل مستخدم (متصفّح) على سياسة الخصوصية هذه وكافة الشروط والأحكام المعتمدة، عند قيامه بدخول الموقع، كما يوافق على قيام المكتب الوطني للإعلام بجمع المعلومات التي تتوفر لديه، واستخدامها، أو التصرّف فيها.</p>
        <h3>السياسات المرتبطة بجمع المعلومات والكشف عنها</h3>
        <p>يجمع المكتب الوطني للإعلام المعلومات الشخصية &ndash; مثل: الاسم والعنوان والبريد الإلكتروني &ndash; عندما يوفرها المستخدم بإرادة منه، كما يجوز للمكتب الوطني للإعلام أن يجمع معلومات أخرى يقدّمها المستخدمون، مثل: العنوان وتاريخ الميلاد، وغيرها من المعلومات الشخصية، التي تمكنه من تحديد الهوية عندما ينشئ المستخدم حسابا أو يطلب الخدمة على الإنترنت.</p>
        <p>وتجمع كذلك برامج "مزوّد الويب" الخاصة بالمكتب الوطني للإعلام على نحو تلقائي المعلومات الإحصائية حول زيارات المستخدمين، مثل: الصفحات التي يزورونها، وبرامج المستعرض المستخدمة لزيارة الموقع، ولا يرتبط أي من هذه المعلومات بالمستخدم باعتباره فردا (راجع المعلومات حول "الكوكيز" &ndash; ملف الصفحات التي زارها المستخدم).</p>
        <h3>السياسات المتعلقة باستخدام المعلومات والكشف عنها</h3>
        <p>يحقّ للمكتب الوطني للإعلام أن يستخدم معلومات المستخدمين أو يكشف عنها، وعن غيرها من المعلومات الشخصية التي جمعها من الإدارات داخل المكتب الوطني للإعلام والجهات التابعة له، التي تؤدي وظائف، مثل: خدمة حسابات المستخدمين، وتحضير التقارير، وغير ذلك من أنشطة المستخدمين.</p>
        <h3>الكوكيز</h3>
        <p>سلسلة صغيرة من البيانات، يكتبها المزوّد الخاص بالمكتب الوطني للإعلام على محرّك القرص الثابت الخاص بالمستخدم، وتسمح هذه التكنولوجيا للمكتب الوطني للإعلام بتحسين تجربة المستخدم عند زيارته لموقع المكتب الوطني للإعلام.</p>
        <h3>الروابط</h3>
        <p>يتضمّن هذا الموقع الإلكتروني روابط لمواقع أخرى، ولا يعدّ المكتب الوطني للإعلام مسؤولاً عن سياسات الخصوصية لتلك الروابط كما ينصح المكتب الوطني للإعلام المستخدمين، بالاطّلاع على سياسات الخصوصية لكل موقع يقوم بجمع بيانات التعريف الشخصية.</p>
        <p>تطبق سياسة الخصوصية هذه على المعلومات التي يجمعها هذا الموقع فقط.</p>
        <p>لا يتحمّل المكتب الوطني للإعلام أية مسؤولية عن أية أضرار قد تلحق بالمستخدمين نتيجة استعمال أي رابط لأي موقع آخر.</p>
        <h3>الدراسات الاستقصائية</h3>
        <p>يحصل المكتب الوطني للإعلام &ndash; بين الحين والآخر &ndash; على معلومات من المستخدمين عبر دراسات استقصائية يقوم بها، وتكون المشاركة في هذه الدراسات طوعية، ولهذا فإن للمستخدم الخيار في الكشف أو عدم الكشف عن هذه المعلومات، ويجوز أن تشمل المعلومات المطلوبة معلومات الاتصال التي تستخدم في الإخطار عن النتائج، وقد تستخدم بعض المعلومات لأغراض المراقبة أو تحسين استخدام الموقع ورفع رضى المستخدم.</p>
        <h3>الأمن</h3>
        <p>يتخذ المكتب الوطني للإعلام الاحتياطات اللازمة لحماية المعلومات المُقدّمة من المستخدمين، التي جُمعت من الموقع الإلكتروني، وهذه المعلومات محمية سواء عند الاتصال بالإنترنت أو دون اتصال بالإنترنت. في عدد من الحالات، يستخدم المكتب الوطني للإعلام نظام "التكويد" لحماية أي معلومات حسّاسة على الإنترنت، كما يبذل العناية اللازمة لحماية معلومات المستخدم في حالة عدم الاتصال بالإنترنت. جميع معلومات المستخدم تُحفظ بسرّية، ولا يُمنح حقّ الاطّلاع على المعلومات الخاصة المتضمنة تعريف شخصي، لأي موظف إلاّ في إطار أداء المهام الوظيفية. لا يتحمل المكتب الوطني للإعلام أية مسؤولية عن أية أضرار مهما كان نوعها أو مصدرها والتي يمكن أن تنتج عن اختراق تلك البيانات أو المعلومات.</p>
        <h3>الإخطار عن التغييرات</h3>
        <p>إذا قرّر المكتب الوطني للإعلام تغيير سياسة الخصوصية الخاصة به، فسوف يتمّ نشر تلك التغييرات على الصفحة الرئيسية للموقع، وبهذا يكون المستخدمون على وعي دائم بماهية المعلومات التي يتم جمعها، وكيفية استخدامها، وتحت أي ظروف.</p>
        <h3>التحديثات على سياسة الخصوصية</h3>
        <p>في حال حدّث المكتب الوطني للإعلام سياسة الخصوصية، فسوف يتمّ نشر تلك التحديثات عبر صفحة المكتب الوطني للإعلام الرئيسية، بحيث تكون تلك التحديثات في متناول المستخدمين.</p>'
      )
    )
  ),
  'menu' => array(
    'en' => array(
      'about' => 'About the Office',
      'the_uae' => 'The UAE',
      'media_center' => 'Media Center',
      'contact' => 'Contact Us',
      'initiatives' => 'Initiatives',
      'news' => 'News'
    ),
    'ar' => array(
      'about' => 'عن المكتب',
      'the_uae' => 'دولة الإمارات',
      'media_center' => 'المركز الإعلامي',
      'contact' => 'اتصل بنا',
      'initiatives' => 'المبادرات',
      'news' => 'الأخبار الصحفية'
    ),
  ),
  'news' => array(
    'news_hero' => '/assets/images/news_hero_v3.jpg',
    'common' => array(
      'en' => array(
        'fnews_title' => 'Featured News',
        'page_title' => 'News'
      ),
      'ar' => array(
        'fnews_title' => 'أهم الأخبار',
        'page_title' => 'الأخبار الصحفية'
      )
    ),
    'articles' => array(
      array(
        'slug' => 'article1',
        'home_hero_feature' => 1,
        'home_feature' => 0,
        'main_img' => '/assets/images/article1_v3.jpg',
        'thumb_img' => '/assets/images/article1_v3.jpg',
        'feature_img' => '/assets/images/article1_v3.jpg',
        'en' => array(
          'date' => 'Wednesday, September 20, 2023',
          'title' => 'Zayed bin Hamdan bin Zayed in a comprehensive dialogue with Al-Etihad: Our national media is responsible',
          'title_feature' => 'Zayed bin Hamdan bin Zayed in a comprehensive dialogue with Al-Etihad: Our national media is responsible',
          'title_hfeature' => 'Zayed bin Hamdan bin Zayed in a comprehensive dialogue with Al-Etihad: Our national media is responsible',
          'summary' => 'His Highness Sheikh Zayed bin Hamdan bin Zayed Al Nahyan, Chairman of the National Media Office, confirmed that the strategic determinants for the future of media in the country will emerge from the historical legacy that the national media journey has reached',
          'bodytxt' => '<p>His Highness Sheikh Zayed bin Hamdan bin Zayed Al Nahyan, Chairman of the National Media Office, confirmed that the strategic determinants for the future of media in the country will emerge from the historical legacy that the national media journey has reached, describing it as a &ldquo;rich and profound&rdquo; journey, explaining that it will be built upon and developed. In a way that serves the supreme national interest of the state.</p>
          <p>His Highness Sheikh Zayed bin Hamdan bin Zayed Al Nahyan said, in a comprehensive dialogue with Al-Etihad: &ldquo;Today we are required to convey our image to the world, and tell our identity, our success story, our civilizational messages, our development goals, and our aspirations for the future.&rdquo; His Highness stressed the importance of &ldquo;everyone&rsquo;s contribution to shaping the future of the Emirati media, developing its tools, qualifying its cadres, and enhancing its efficiency is a basic requirement in the next stage&hellip; and the basic foundation that will help us achieve our goals.</p>
          <p>&rdquo;His Highness continued, saying: &ldquo;Our content must reflect our ambition, our achievements, our identity and our culture, and our goal is to be influential, inspiring and effective in shaping our future,&rdquo; stressing that &ldquo;the content in our media institutions is responsible content, and our goal is to protect our society from any external influences that affect our societal and national constants.&rdquo; He said. His Highness: &ldquo;We look forward to strengthening and developing an integrated media system that serves the interests of the state. &rdquo;His Highness said: &ldquo;Our media is required to give greater attention to economic journalism in analysis and information, as our country is witnessing great prosperity, and our economy is a fundamental pillar of our government&rsquo;s vision for the next fifty years, and therefore we need economically specialized citizen media professionals who can keep pace with this prosperity and this vision,&rdquo; calling on local media institutions. All this requires qualifying specialized cadres who have the necessary skills and tools to achieve this.</p>
          <p>His Highness said: &ldquo;Our media is required to give greater attention to economic journalism in analysis and information, as our country is witnessing great prosperity, and our economy is a fundamental pillar of our government&rsquo;s vision for the next fifty years, and therefore we need economically specialized citizen media professionals who can keep pace with this prosperity and this vision,&rdquo; calling on local media institutions. All this requires qualifying specialized cadres who have the necessary skills and tools to achieve this.</p>
          <p>Regarding the UAE&rsquo;s hosting of the Conference of the Parties &ldquo;COP 28&rdquo; next November, and the role of the Emirati media in highlighting this important event, His Highness described &ldquo;COP 28&rdquo; as a historic event that culminates the country&rsquo;s journey in environmental sustainability, expressing his confidence that our Emirati media will be an effective partner in Conveying the country&rsquo;s success in holding this global event with all professionalism and professionalism.</p>
          <p>In response to a question about the importance of qualifying citizen media cadres, His Highness Sheikh Zayed bin Hamdan bin Zayed Al Nahyan said: &ldquo;Our media cadres are our true wealth and a major focus of our strategy,&rdquo; stressing the importance of stimulating their successes and developing their skills during the next stage, in accordance with the best international media practices.</p>
          <p>Regarding the media&rsquo;s contribution to promoting the spirit of tolerance and peaceful coexistence, His Highness said: The media has a vital and very important role in promoting coexistence and tolerance among societies, by spreading common human values among peoples, and directing individuals towards positive values, pointing to the importance of focusing on positive stories of tolerance from Different societies have a great impact on consolidating these values among the recipients.</p>
          <p>His Highness sent a message to Emirati influencers on social media, stating that &ldquo;credibility and specialization&rdquo; are their path to being real, successful and effective influencers in serving their community, their country and its issues.</p>
          <p><strong>The following is the text of the dialogue with His Highness Sheikh Zayed bin Hamdan bin Zayed Al Nahyan, Chairman of the National Media Office:</strong></p>
          <p><strong>Certainly, Your Highness&rsquo;s assumption of the media file in the UAE is a new step in the media procession. What are the determinants of the media strategy to push this process forward?</strong></p>
          <p>At the outset, I extend my sincere thanks and gratitude to our wise leadership that has entrusted us with this task and responsibility, and we ask God Almighty to live up to their good expectations, and to grant us success in serving our nation and making the utmost effort possible to empower the media sector in the country and enhance its regional and global presence&hellip; and this will be achieved, God willing, with cooperation and partnership. And support all media outlets in the country.</p>
          <p>On this occasion, I would like to extend to you at Abu Dhabi Media my congratulations on your new launch, wishing all the employees of this ancient institution further progress, development and success in a way that enriches the media work environment locally and keeps pace with the strategic goals of the country&rsquo;s media landscape. I must point out here that the new launch of the Abu Dhabi Media Network is an important and essential part of the media development system in the country, and this network has a long and influential history in launching the Union&rsquo;s journey and contributing with other media institutions in the country in strengthening its pillars and achieving its goals.</p>
          <p>As for your question about the determinants of the media strategy for the future of media in the country, it will certainly emanate from the historical legacy that the national media journey has reached, which is undoubtedly a rich, deep, experienced and developmental journey that has accompanied the path of goodness and giving, and it will be built on and developed in a way that serves the national interest. It strengthens the country&rsquo;s media position at the regional and international levels.</p>
          <p>As well as the most important determinants of the strategy, the national identity and the authentic values that we inherited from the founding leaders and their approach to leadership, construction and development&hellip; Our responsibility today is to convey this image to the world and tell our identity, our success story, our civilizational messages, our development goals, and our aspirations for the future. Therefore, everyone&rsquo;s contribution to shaping the future of the Emirati media, developing its tools, qualifying its cadres, and enhancing its efficiency is a basic requirement in the next stage&hellip; and the basic foundation that will help us achieve our goals.</p>
          <p><strong>In your opinion, what are the most prominent challenges facing the Emirati media, and how can they be overcome? Do you think, Your Highness, that the national media content keeps pace with the UAE&rsquo;s position globally?</strong></p>
          <p>As I said before, thank God, the national media, a responsible media, has achieved many achievements during its previous career. In recent years, there have been major changes in media technologies in the world and modern methods and new concepts have been introduced, especially artificial intelligence. The challenge now is how to keep up with this. The big shift, and how do we keep pace with rapid developments? This challenge is not in the Emirates. I believe that most countries in the world face such challenges. Indeed, methods have changed and the media industry has developed, but the most important thing is purposeful media content, content that reflects your ambition and achievements, content that reflects your identity and culture&hellip; The content in our media institutions is responsible content, and our next goal is how to continue within this system and build on it, to be influential, inspiring and effective, and in On the other hand, how do we protect our society from any external influences that would affect our societal and national principles?</p>
          <p>Today, through the National Media Office, we look forward to strengthening and developing an integrated media system to serve the interests of the state, support the mechanism of coordination and cooperation, and unify efforts among the various media agencies in the Emirates to overcome all obstacles and confront challenges in the spirit of one team work.</p>
          <p><strong>In economics, the UAE has become a country with a strong global influence, and it partners with major countries in drawing up plans and strategies that affect the world economy as a whole. How do you see the role of the media in the UAE in keeping up with this influence? Do you think that we now need specialized economic media more than before?</strong></p>
          <p>Certainly, our country is witnessing great prosperity that has placed it among the top ranks in most economic indicators, and the economy is also a fundamental pillar of the UAE government&rsquo;s vision for the next fifty years. Accordingly, our media is required to give greater attention to economic journalism, analysis, information, and data, in a way that supports our economic policy and programs. We need To economically specialized citizen media professionals who are keeping pace with this prosperity and this vision. Here I call on all local media institutions to qualify specialized cadres who have the necessary skills and tools to achieve this. We at the National Media Office are pleased to provide all aspects of support to our institutions and citizens in order to achieve this goal.</p>
          <p><strong>Your Highness, the eyes of the world will turn to the UAE as it hosts the Conference of the Parties (COP 28) next November. Here, what is the civilized message that the Emirati national media should convey to the world? What is your message to our media institutions that are eager to cover this event?</strong></p>
          <p>The holding of the Conference of the Parties &ldquo;COP 28&rdquo; in the UAE is a historic event that culminates the country&rsquo;s journey in environmental sustainability, which is an important part of our civilizational message to the world. Here, we must praise the efforts of all entities and sectors in the country, including the media sector, which worked hard. Since the announcement of hosting until today, I am confident that our Emirati media will be an effective partner in conveying the country&rsquo;s success in holding this global event with all professionalism and professionalism.</p>
          <p><strong>Your Highness, you always focus on the importance of training Emirati media cadres. How do you work to prepare creative youth competencies to participate in formulating and creating local media content that keeps pace with the renaissance of our country in various fields?</strong></p>
          <p>Our media cadres are our true wealth in the national media scene, and they have a clear and effective role in our various media outlets, whether traditional or digital. They are a main focus of our new media strategy, and it is our responsibility to stimulate their successes and develop their skills.We work closely in cooperation with local governments, media outlets and relevant academic institutions to develop programs and initiatives concerned with preparing and qualifying national cadres during the next stage, in accordance with the best international media practices.</p>
          <p><strong>How do you see the contributions of Emirati influencers on social media, and what message would you like to send to them so that they can be successful influencers in the media scene?</strong></p>
          <p>Today, influencers have become major players in the media scene at the global level. In the UAE, there are influencers who have positive, qualitative, and purposeful content. We believe that analyzing the media scene for influencers has become an urgent matter in order to identify the most important topics that can harness the popularity of influencers and enhance their presence and ability to provide positive messages. It benefits members of society and the nation, and my message to them is that &ldquo;credibility and specialization&rdquo; are their true path to being truly influential, successful, and effective in serving their society, their nation, and its issues.</p>
          <p><strong>How can the media contribute to enhancing the spirit of tolerance and peaceful coexistence in societies? How can it influence the dissemination of values in society, and enhance cultural awareness and national identity?</strong></p>
          <p>As you know, the media has a vital and very important role in promoting coexistence and tolerance between societies, by spreading common human values among peoples and directing individuals towards positive values and mutual understanding that will build bridges of understanding and coexistence, and here it is necessary to focus on positive stories of tolerance from different peoples. Communities because of their great impact in consolidating these values among the recipients, with the necessity of promoting the principles of tolerance, peaceful coexistence, mutual respect, acceptance and understanding of others, preserving human dignity, and achieving friendship between people regardless of their different religions, beliefs, cultures, and languages.</p>'
        ),
        'ar' => array(
          'date' => 'الأربعاء، 20 سبتمبر 2023',
          'title' => 'زايد بن حمدان بن زايد في حوار شامل مع «الاتحاد»: إعلامنا الوطني مسؤول',
          'title_feature' => 'زايد بن حمدان بن زايد في حوار شامل مع «الاتحاد»: إعلامنا الوطني مسؤول',
          'title_hfeature' => 'زايد بن حمدان بن زايد في حوار شامل مع «الاتحاد»: إعلامنا الوطني مسؤول',
          'summary' => 'أكد سمو الشيخ زايد بن حمدان بن زايد آل نهيان، رئيس المكتب الوطني للإعلام، أن المحددات الاستراتيجية لمستقبل الإعلام في الدولة، ستكون منبثقة من الإرث التاريخي الذي وصلت إليه المسيرة الإعلامية الوطنية',
          'bodytxt' => '<p>أكد سمو الشيخ زايد بن حمدان بن زايد آل نهيان، رئيس المكتب الوطني للإعلام، أن المحددات الاستراتيجية لمستقبل الإعلام في الدولة، ستكون منبثقة من الإرث التاريخي الذي وصلت إليه المسيرة الإعلامية الوطنية، واصفاً إياها بالمسيرة &laquo;الثرية والعميقة&raquo;، موضحاً أنه سيتم البناء عليها وتطويرها، بما يخدم المصلحة الوطنية العليا للدولة. وقال سمو الشيخ زايد بن حمدان بن زايد آل نهيان، في حوار شامل مع &laquo;الاتحاد&raquo;: &laquo;نحن اليوم مطالبون بنقل صورتنا إلى العالم، وسرد هويتنا وقصة نجاحنا ورسائلنا الحضارية وأهدافنا التنموية، وتطلعاتنا نحو المستقبل&raquo;.</p>
          <p>وشدد سموه على أهمية &laquo;مساهمة الجميع في صناعة مستقبل الإعلام الإماراتي، وتطوير أدواته وتأهيل كوادره، وتعزيز كفاءته مطلب أساسي في المرحلة المقبلة.. والركيزة الأساسية التي ستساعدنا في بلوغ أهدافنا&raquo;. وتابع سموه قائلاً: &laquo;محتوانا يجب أن يعكس طموحنا وإنجازاتنا وهويتنا وثقافتنا، وهدفنا أن نكون مؤثرين وملهمين وفاعلين لصناعة مستقبلنا&raquo;، مؤكداً سموه أن &laquo;المحتوى في مؤسساتنا الإعلامية محتوى مسؤول، وهدفنا حماية مجتمعنا من أي تأثيرات خارجية تمسّ ثوابتنا المجتمعية والوطنية&raquo;..</p>
          <p>وقال سموه: &laquo;نتطلع إلى تعزيز وتطوير منظومة إعلامية متكاملة تخدم مصالح الدولة&raquo;. وقال سموه: &laquo;إن إعلامنا مطالب بإعطاء اهتمام أكبر للصحافة الاقتصادية تحليلاً ومعلومة، فدولتنا تشهد ازدهاراً كبيراً، واقتصادنا ركيزة أساسية لرؤية حكومتنا للخمسين سنة المقبلة، وعليه نحن بحاجة إلى إﻋﻼﻣيين مواطنين متخصصين اقتصادياً، يواكبون هذا الازدهار وهذه الرؤية&raquo;، داعياً سموه المؤسسات الإعلامية المحلية كافة إلى تأهيل كوادر متخصصة، لديها المهارات والأدوات اللازمة لتحقيق ذلك.</p>
          <p>وفيما يتعلق باستضافة الإمارات مؤتمر الأطراف &laquo;COP 28&raquo; نوفمبر المقبل، ودور الإعلام الإماراتي في إبراز هذا الحدث المهم، وصف سموه &laquo;COP 28&raquo;.. بالحدث التاريخي الذي يتوج مسيرة الدولة في الاستدامة البيئية، معرباً عن ثقته بأن إعلامنا الإماراتي سيكون شريكاً فعالاً في نقل نجاح الدولة في إقامة هذا الحدث العالمي بكل احترافية ومهنية.ورداً على سؤال حول أهمية تأهيل الكوادر الإعلامية المواطنة، قال سمو الشيخ زايد بن حمدان بن زايد آل نهيان: &laquo;إن كوادرنا الإعلامية ثروتنا الحقيقية ومحور رئيس في استراتيجيتنا&raquo;، مؤكداً أهمية تحفيز نجاحاتهم وتنمية مهاراتهم خلال المرحلة المقبلة، وفق أفضل الممارسات الإعلامية العالمية.</p>
          <p>وحول مساهمة الإعلام في تعزيز روح التسامح والتعايش السلمي، قال سموه: إن للإعلام دوراً حيوياً ومهماً جداً في تعزيز التعايش والتسامح بين المجتمعات، من خلال نشر القيم الإنسانية المشتركة بين الشعوب، وتوجيه الأفراد نحو القيم الإيجابية، لافتاً إلى أهمية التركيز على القصص الإيجابية للتسامح من مختلف المجتمعات لما لها من أثر كبير في ترسيخ هذه القيم عند المتلقين.ووجَّه سموه رسالة إلى المؤثرين الإماراتيين على وسائل التواصل الاجتماعي، مفادها أن &laquo;المصداقية والتخصص&raquo; هما طريقهم ليكونوا مؤثرين حقيقيين وناجحين وفاعلين في خدمة مجتمعهم ووطنهم وقضاياه.</p>
          <p><strong>وفيما يلي نص الحوار مع سمو الشيخ زايد بن حمدان بن زايد آل نهيان، رئيس المكتب الوطني للإعلام:</strong></p>
          <p><strong>بالتأكيد.. تسلم سموكم لملف الإعلام في دولة الإمارات خطوة جديدة في مسيرة الإعلام.. ما محددات الاستراتيجية الإعلامية لدفع هذه المسيرة إلى الأمام؟</strong></p>
          <p>في البداية أتقدم بجزيل الشكر والامتنان لقيادتنا الرشيدة التي أولتنا هذه المهمة والمسؤولية، ونسأل الله العلي القدير أن نكون عند حسن ظنهم، وأن يوفقنا في خدمة وطننا وبذل أقصى جهد ممكن لتمكين قطاع الإعلام في الدولة، وتعزيز حضوره الإقليمي والعالمي &hellip; وهذا سيتحقق بإذن الله بتعاون وشراكة ومساندة جميع الجهات الإعلامية في الدولة.وبهذه المناسبة أود أن أتقدم إليكم في &laquo;أبوظبي للإعلام&raquo; بالتهنئة لانطلاقتكم الجديدة، متمنياً للعاملين كافة في هذه المؤسسة العريقة مزيداً من التقدم والتطور والنجاح بما يثري بيئة العمل الإعلامي محلياً، ويواكب الغايات الاستراتيجية للمشهد الإعلامي للدولة. ولا بد أن أشير هنا إلى أن الانطلاقة الجديدة لشبكة &laquo;أبوظبي للإعلام&raquo; هي جزء مهم وأساسي في منظومة تطوير الإعلام في الدولة، وهذه الشبكة لديها تاريخ طويل ومؤثر في انطلاقة مسيرة الاتحاد، والمساهمة مع المؤسسات الإعلامية الأخرى في الدولة في تعزيز أركانه وتحقيق أهدافه.</p>
          <p>أما فيما يتعلق بسؤالكم حول محددات الاستراتيجية الإعلامية لمستقبل الإعلام في الدولة، فبالتأكيد ستكون منبثقة من الإرث التاريخي الذي وصلت إليه المسيرة الإعلامية الوطنية، وهي مسيرة بلا شك ثرية وعميقة وذات خبرة وبعد تنموي رافق مسيرة الخير والعطاء، وسيتم البناء عليها وتطويرها، بما يخدم المصلحة الوطنية، ويُعزز موقع الدولة الإعلامي على المستويين الإقليمي والدولي.</p>
          <p>وكذلك من أهم محددات الاستراتيجية، الهوية الوطنية والقيم الأصيلة التي ورثناها عن القادة المؤسسين ومنهجهم في القيادة والبناء والتنمية... مسؤوليتنا اليوم نقل هذه الصورة للعالم وسرد هويتنا وقصة نجاحنا ورسائلنا الحضارية وأهدافنا التنموية وتطلعاتنا نحو المستقبل؛ لذلك فإن مساهمة الجميع في صناعة مستقبل الإعلام الإماراتي وتطوير أدواته وتأهيل كوادره وتعزيز كفاءته، مطلب أساسي في المرحلة المقبلة.. والركيزة الأساسية التي ستساعدنا في بلوغ أهدافنا.</p>
          <p><strong>برأيكم، ما أبرز التحديات التي تواجه الإعلام الإماراتي، وكيف يمكن تجاوزها؟ وهل ترون سموكم أن المحتوى الإعلامي الوطني يواكب مكانة الإمارات عالمياً؟</strong></p>
          <p>كما قلت سابقاً، الحمد لله الإعلام الوطني، إعلام مسؤول، حقق الكثير من الإنجازات خلال مسيرته السابقة.. خلال السنوات الأخيرة حدثت تغيرات كبيرة في تقنيات الإعلام في العالم ودخلت أساليب حديثة ومفاهيم جديدة، وبشكل خاص الذكاء الاصطناعي.. فالتحدي الآن هو كيف نواكب هذه النقلة الكبيرة، وكيف نساير التطورات السريعة، وهذا التحدي ليس في الإمارات، أعتقد أن معظم دول العالم تواجه مثل هذه التحديات.</p>
          <p>فعلاً، تغيرت الأساليب وتطورت صناعة الإعلام لكن الأهم هو المحتوى الإعلامي الهادف، المحتوى الذي يعكس طموحك وإنجازاتك، المحتوى الذي يعكس هويتك وثقافتك.. والمحتوى في مؤسساتنا الإعلامية محتوى مسؤول، وهدفنا التالي كيف نستمر ضمن هذه المنظومة ونبني عليها، لنكون مؤثرين وملهمين وفاعلين، وفي المقابل كيف نحمي مجتمعنا من أي تأثيرات خارجية من شأنها المساس بثوابتنا المجتمعية والوطنية.</p>
          <p>ونتطلع اليوم من خلال المكتب الوطني للإعلام إلى تعزيز وتطوير منظومة إعلامية متكاملة، لخدمة مصالح الدولة، ودعم آلية التنسيق والتعاون، وتوحيد الجهود بين مختلف الجهات الإعلامية في الإمارات لتذليل العقبات كافة ومواجهة التحديات بروح عمل الفريق الواحد.في الاقتصاد، الإمارات أصبحت دولة ذات تأثير قوي عالمياً، وتتشارك مع الدول الكبرى في رسم الخطط والاستراتيجيات التي تؤثر في اقتصاد العالم ككل..</p>
          <p><strong>كيف ترون دور الإعلام في الإمارات في مواكبة هذا التأثير؟ وهل تعتقدون أننا الآن بحاجة إلى إعلام اقتصادي متخصص أكثر من ذي قبل؟</strong></p>
          <p>بالتأكيد، دولتنا تشهد ازدهاراً كبيراً جعلها ضمن المراتب الأولى في أغلب المؤشرات الاقتصادية، والاقتصاد أيضاً، ركيزة أساسية لرؤية حكومة الإمارات للخمسين سنة المقبلة، وعليه فإن إعلامنا مطالب بإعطاء اهتمام أكبر للصحافة الاقتصادية، تحليلاً ومعلومة، وبيانات، بما يدعم سياستنا وبرامجنا الاقتصادية، نحن بحاجة إلى إﻋﻼﻣيين مواطنين متخصصين اقتصادياً، يواكبون هذا الازدهار وهذه الرؤية، وهنا أدعو المؤسسات الإعلامية المحلية كافة إلى تأهيل كوادر متخصصة، لديها المهارات والأدوات اللازمة، لتحقيق ذلك، ويسعدنا في المكتب الوطني للإعلام تقديم أوجه الدعم كافة لمؤسساتنا ومواطنينا في سبيل تحقيق هذه الغاية.</p>
          <p><strong>سموكم، أنظار العالم ستتجه إلى دولة الإمارات مع استضافتها مؤتمر الأطراف &laquo;COP 28&raquo; نوفمبر المقبل، وهنا ما الرسالة الحضارية التي ينبغي على الإعلام الوطني الإماراتي نقلها للعالم؟ وما رسالتكم لمؤسساتنا الإعلامية التي تتحفز لتغطية هذا الحدث؟</strong></p>
          <p>إن انعقاد مؤتمر الأطراف &laquo;COP 28&raquo; في دولة الإمارات حدث تاريخي يتوِّج مسيرة الدولة في الاستدامة البيئية، والتي تُعد جزءاً مهماً من رسالتنا الحضارية إلى العالم، وهنا لا بد من الإشادة بجهود الجهات والقطاعات كافة في الدولة، بما فيها القطاع الإعلامي، والتي عملت بجد منذ إعلان الاستضافة حتى يومنا هذا، وأنا واثق بأن إعلامنا الإماراتي سيكون شريكاً فعالاً في نقل نجاح الدولة في إقامة هذا الحدث العالمي بكل احترافية ومهنية.</p>
          <p><strong>دائماً ما تركزون سموكم على أهمية تأهيل الكوادر الإعلامية الإماراتية، كيف تعملون على إعداد الكفاءات الشبابية المبدعة للمشاركة في صياغة وصناعة محتوى إعلامي محلي، يواكب نهضة دولتنا في مختلف المجالات؟</strong></p>
          <p>كوادرنا الإعلامية هي ثروتنا الحقيقية في المشهد الإعلامي الوطني، ولها دور واضح وفاعل في مختلف وسائلنا الإعلامية، سواء كانت التقليدية أو الرقمية، وهي محور رئيس في استراتيجيتنا الإعلامية الجديدة، ومسؤوليتنا تحفيز نجاحاتهم وتنمية مهاراتهم.ونعمل بشكل وثيق بالتعاون مع الحكومات المحلية والجهات الإعلامية والمؤسسات الأكاديمية ذات الصلة لتطوير البرامج والمبادرات التي تعنى بإعداد وتأهيل الكوادر الوطنية خلال المرحلة المقبلة، وفق أفضل الممارسات الإعلامية العالمية.</p>
          <p><strong>كيف ترى سموكم إسهامات المؤثرين الإماراتيين على وسائل التواصل الاجتماعي، وما الرسالة التي ترغبون بتوجيهها لهم ليكونوا مؤثرين ناجحين في المشهد الإعلامي؟</strong></p>
          <p>المؤثرون أصبحوا اليوم لاعبين أساسيين في المشهد الإعلامي على المستوى العالمي، في دولة الإمارات هناك مؤثرون لديهم محتوى إيجابي ونوعي وهادف، ونعتقد أن تحليل المشهد الإعلامي للمؤثرين أصبح أمراً مُلحّاً للوقوف على أهم المحاور التي يمكن أن توظف شعبية المؤثرين، وتعزز حضورهم وقدرتهم على تقديم رسائل إيجابية تنفع أفراد المجتمع والوطن، ورسالتي لهم أن &laquo;المصداقية والتخصص&raquo; هما طريقهم الحقيقي ليكونوا مؤثرين حقيقيين وناجحين وفاعلين في خدمة مجتمعهم ووطنهم وقضاياه.</p>
          <p><strong>كيف يمكن للإعلام أن يسهم في تعزيز روح التسامح والتعايش السلمي في المجتمعات؟ وكيف يمكن له أن يؤثر في نشر القيم عند المجتمع، وتعزيز الوعي الثقافي والهوية الوطنية؟</strong></p>
          <p>كما تعلمون، فإن للإعلام دوراً حيوياً ومهماً جداً في تعزيز التعايش والتسامح بين المجتمعات، من خلال نشر القيم الإنسانية المشتركة بين الشعوب وتوجيه الأفراد نحو القيم الإيجابية والتفاهم المتبادل والتي من شأنها بناء جسور التفاهم والتعايش، وهنا لا بد من التركيز على القصص الإيجابية للتسامح من مختلف المجتمعات لما لها من أثر كبير في ترسيخ هذه القيم عند المتلقين، مع ضرورة تعزيز مبادئ التسامح والتعايش السلمي والاحترام المتبادل وتقبّل الآخر وتفهّمه وحفظ الكرامة الإنسانية، وتحقيق الصداقة بين البشر على تنوع واختلاف أديانهم ومعتقداتهم وثقافاتهم ولغاتهم.</p>'
        )
      ),
      array(
        'slug' => 'article2',
        'home_hero_feature' => 0,
        'home_feature' => 1,
        'main_img' => '/assets/images/article2.jpg',
        'thumb_img' => '/assets/images/article2.jpg',
        'feature_img' => '/assets/images/article2.jpg',
        'en' => array(
          'date' => 'Wednesday, September 13, 2023',
          'title' => 'Zayed bin Hamdan commends the IGCF for attracting best international media and communication practices',
          'title_feature' => 'Zayed bin Hamdan commends the IGCF for attracting best international media and communication practices',
          'title_hfeature' => 'Zayed bin Hamdan commends the IGCF for attracting best international media and communication practices',
          'summary' => 'H.H. Sheikh Zayed bin Hamdan bin Zayed Al Nahyan, Chairman of the National Media Office, commended the International Government Communication Forum (IGCF) for attracting best international practices in media and communication sector',
          'bodytxt' => '<p>H.H. Sheikh Zayed bin Hamdan bin Zayed Al Nahyan, Chairman of the National Media Office, commended the International Government Communication Forum (IGCF) for attracting best international practices in media and communication sector. This came during H.H.&rsquo;s attendance today at the launch of the forum&rsquo;s activities, which is being held by Sharjah Government Media Bureau (SGMB) under the patronage of H.H. Sheikh Dr. Sultan bin Muhammad Al Qasimi, Member of the Supreme Council and Ruler of Sharjah, under the theme &ldquo;Today&rsquo;s Resources.. Tomorrow&rsquo;s Wealth&rdquo;.</p>
          <p>Sheikh Zayed bin Hamdan stressed the importance of such forums in strengthening cooperation and sharing experiences with the world to keep pace with the latest media trends at technical and technological domains. H.H. also praised the good organisation, agenda and programmes of the 12th edition of the IGCF, noting to the successful experiences and experiments in many vital sectors presented by prominent speakers from around the world and their review of the most important ideas and practical experiences that serve humanity.</p>
          <p>Sheikh Zayed bin Hamdan treasured the efforts made to organise the forum and the role of national competencies in presenting creative ideas that meet the requirements of this stage, serve the needs of countries and societies, and support building relationships and connecting nations.</p>'
        ),
        'ar' => array(
          'date' => 'الأربعاء، 13  سبتمبر  2023',
          'title' => 'زايد بن حمدان يشيد بدور المنتدى الدولي للاتصال الحكومي في استقطاب أفضل الممارسات الدولية بقطاع الإعلام والاتصال',
          'title_feature' => 'زايد بن حمدان يشيد بدور المنتدى الدولي للاتصال الحكومي في استقطاب أفضل الممارسات الدولية بقطاع الإعلام والاتصال',
          'title_hfeature' => 'زايد بن حمدان يشيد بدور المنتدى الدولي للاتصال الحكومي في استقطاب أفضل الممارسات الدولية بقطاع الإعلام والاتصال',
          'summary' => 'أشاد سمو الشيخ زايد بن حمدان بن زايد آل نهيان رئيس المكتب الوطني للإعلام بدور المنتدى الدولي للاتصال الحكومي في استقطاب أفضل الممارسات الدولية في قطاع الإعلام والاتصال',
          'bodytxt' => '<p>أشاد سمو الشيخ زايد بن حمدان بن زايد آل نهيان رئيس المكتب الوطني للإعلام بدور المنتدى الدولي للاتصال الحكومي في استقطاب أفضل الممارسات الدولية في قطاع الإعلام والاتصال.جاء ذلك خلال حضور سموه اليوم انطلاق فعاليات المنتدى الذي يقام تحت رعاية صاحب السمو الشيخ الدكتور سلطان بن محمد القاسمي عضو المجلس الأعلى حاكم الشارقة.</p>
          <p>وأشار سموه إلى أهمية مثل هذه المنتديات في توثيق التعاون وتبادل الخبرات مع العالم بما يواكب أهم التطورات الإعلامية على الصعيدين المهني والتقني.كما أشاد سموه بمستوى التنظيم ومحتوى الجلسات والبرامج التي تضمنتها فعاليات الدورة الـ 12 مشيرا إلى الخبرات والتجارب الناجحة في العديد من القطاعات الحيوية التي قدمها كبار المتحدثين من مختلف دول العالم واستعراضهم لأهم الأفكار والتجارب العملية التي تخدم البشرية.</p>
          <p>وثمن سمو الشيخ زايد بن حمدان بن زايد آل نهيان الجهود القائمة على تنظيم المنتدى الدولي للاتصال الحكومي ودور الكفاءات الوطنية في طرح الافكار المبدعة التي تلامس متطلبات هذه المرحلة وتخدم متطلبات الدول والمجتمعات وتدعم بناء العلاقات وربط الأمم.يذكر أن المنتدى الدولي للاتصال الحكومي الذي ينظمه المكتب الإعلامي لحكومة الشارقة في مركز إكسبو الشارقة تقام فعالياته تحت شعار "موارد اليوم.. ثروات الغد".</p>'
        )
      ),
      array(
        'slug' => 'article3',
        'home_hero_feature' => 0,
        'home_feature' => 1,
        'main_img' => '/assets/images/article3.jpg',
        'thumb_img' => '/assets/images/article3.jpg',
        'feature_img' => '/assets/images/article3.jpg',
        'en' => array(
          'date' => 'Sunday, August 13, 2023',
          'title' => 'National Media Office holds a media briefing to introduce the latest preparations for COP28 news coverage',
          'title_feature' => 'National Media Office holds a media briefing to introduce the latest preparations for COP28 news coverage',
          'title_hfeature' => 'National Media Office holds a media briefing to introduce the latest preparations for COP28 news coverage',
          'summary' => 'The National Media Office (NMO) held a media briefing in Abu Dhabi for local, regional and international media on the latest preparations and requirements for the news coverage of the UN Climate Conference',
          'bodytxt' => '<p>The National Media Office (NMO) held a media briefing in Abu Dhabi for local, regional and international media on the latest preparations and requirements for the news coverage of the UN Climate Conference, the 28th Session of the Conference of the Parties (COP28), in Dubai.</p>
          <p>The briefing introduced the media to the services and facilities provided by Expo City Dubai, the venue of the conference, and informed them of the procedures required to be completed from their side, in addition to identifying their needs for better coverage of the global event.</p>
          <p>Ahmed Al Hosani, Acting Executive Director of the National Media Office, said the briefing is in line with NMO&rsquo;s commitment in communicating directly with various media outlets to meet their needs for the best media coverage of this outstanding event.</p>
          <p>The officials detailed the logistical services provided to the media in the blue and green zones of Expo City Dubai, the facilities made available in the media Centre, and the mechanism for applying to obtain accreditation for the coverage.</p>
          <p>Moreover, the registration for remote coverage is also available for those who wish to participate virtually and watch the broadcast of plenary sessions and open events on the United Nations website.</p>
          <p>The participating media outlets emphasized the importance of such meetings in staying updated on the latest developments, which supports their pre-planned process of providing quality news coverage.</p>
          <p>The UAE will host COP28 from 30th November to 12th December, 2023 at Expo City Dubai. The conference is expected to convene over 70,000 participants, including heads of state, government officials, industry leaders, academics, and representatives from civil society organizations.</p>'
        ),
        'ar' => array(
          'date' => 'الأحد، 13 أغسطس 2023 ',
          'title' => '"المكتب الوطني للإعلام" يعقد إحاطة إعلامية للتعريف بآخر تحضيرات التغطية الإخبارية لمؤتمر COP28',
          'title_feature' => '"المكتب الوطني للإعلام" يعقد إحاطة إعلامية للتعريف بآخر تحضيرات التغطية الإخبارية لمؤتمر COP28',
          'title_hfeature' => '"المكتب الوطني للإعلام" يعقد إحاطة إعلامية للتعريف بآخر تحضيرات التغطية الإخبارية لمؤتمر COP28',
          'summary' => 'عقد المكتب الوطني للإعلام، إحاطة إعلامية في أبوظبي، بمشاركة وسائل الإعلام المحلية والإقليمية والدولية، للتعريف بآخر التحضيرات والمتطلبات المرتبطة بتغطية استضافة دولة الإمارات الدورة الثامنة والعشرين من مؤتمر الأطراف في اتفاقية الأمم المتحدة الإطارية بشأن تغير المناخ (COP28)',
          'bodytxt' => '<p>عقد المكتب الوطني للإعلام، إحاطة إعلامية في أبوظبي، بمشاركة وسائل الإعلام المحلية والإقليمية والدولية، للتعريف بآخر التحضيرات والمتطلبات المرتبطة بتغطية استضافة دولة الإمارات الدورة الثامنة والعشرين من مؤتمر الأطراف في اتفاقية الأمم المتحدة الإطارية بشأن تغير المناخ (COP28). يأتي تنظيم الإحاطة الإعلامية، بهدف تعريف وسائل الإعلام بالخدمات والتسهيلات المقدمة في مدينة إكسبو دبي مكان انعقاد المؤتمر، واطلاعهم على الإجراءات المطلوب إنجازها من قبلهم، علاوة على الوقوف على احتياجاتهم في سبيل تقدم تغطية إخبارية تواكب هذا الحدث العالمي.</p>
          <p>وقال أحمد الحوسني، مدير تنفيذي بالإنابة في المكتب الوطني للإعلام، إن هذه الإحاطة تأتي انطلاقاً من حرص المكتب على التواصل المباشر مع مختلف وسائل الإعلام، وذلك بهدف تهيئة الظروف المناسبة لهم للقيام بعملهم على الوجه الأمثل. واستعرضت الإحاطة، الخدمات اللوجستية المقدمة لوسائل الإعلام في المنطقتين الزرقاء والخضراء في مدينة إكسبو دبي، والتسهيلات المقدمة في المركز الإعلامي، وآلية التقديم للحصول على تصاريح تغطية المؤتمر.</p>
          <p>كما تتوفر خاصية التسجيل والمشاركة في تغطية فعاليات المؤتمر عن بُعد للراغبين بالمشاركة الافتراضية، وذلك عبر استخدام المنصة الرقمية للتواصل ومشاهدة بث الجلسات العامة والفعاليات المفتوحة على الموقع التابع للأمم المتحدة وأكدت وسائل الإعلام المشاركة في الإحاطة، على أهمية مثل هذه الملتقيات للوقوف على مستجدات بما يدعم عملية تخطيطها المسبق لتقديم تغطية إخبارية نوعية. جدير بالذكر أن مؤتمر الأطراف (COP28) سينعقد في الفترة من 30 نوفمبر إلى 12 ديسمبر المقبلين بمدينة إكسبو دبي، ومن المتوقع أن يشهد حضور نحو 70,000 مشارك منهم رؤساء دول، ومسؤولون حكوميون، وقادة للقطاعات الصناعية العالمية، وممثلون للقطاع الخاص، والشباب، والمجتمع المدني، وأكاديميون، وخبراء في مجال المناخ.</p>'
        )
      ),
      array(
        'slug' => 'article4',
        'home_hero_feature' => 0,
        'home_feature' => 1,
        'main_img' => '/assets/images/article4.jpg',
        'thumb_img' => '/assets/images/article4.jpg',
        'feature_img' => '/assets/images/article4.jpg',
        'en' => array(
          'date' => 'Wednesday, May 31, 2023',
          'title' => 'National Media Office presents UAE’s role in tackling climate change, hosting COP28',
          'title_feature' => 'National Media Office presents UAE’s role in tackling climate change, hosting COP28',
          'title_hfeature' => 'National Media Office presents UAE’s role in tackling climate change, hosting COP28',
          'summary' => 'The National Media Office (NMO) held an introductory meeting in Abu Dhabi to inform digital news platforms, content makers and influencers about the UAE&rsquo;s role in tackling climate change and hosting COP28',
          'bodytxt' => '<p>The National Media Office (NMO) held an introductory meeting in Abu Dhabi to inform digital news platforms, content makers and influencers about the UAE&rsquo;s role in tackling climate change and hosting COP28.</p>
          <p>An implementation of the directives of H.H. Sheikh Zayed bin Hamdan bin Zayed Al Nahyan, Chairman of the NMO, the meeting aimed to harness resources and efforts to raise public awareness about the significance of climate action and the country&rsquo;s related contributions.<br />Ahmed Al Hosani, Executive Director of the NMO, said that the meeting aimed to establish partnerships and direct and ongoing communication with the media sector, which plays a critical national role in spreading the country&rsquo;s messages and highlighting its achievements.</p>
          <p>He also stressed the importance of influencers on social media platforms and new media in raising awareness about environmental and sustainability issues, encouraging community engagement, and supporting relevant national strategies.</p>
          <p>During the meeting, the COP28 Presidency office explained why hosting the conference is vital for the UAE. COP28 is a crucial milestone for global climate action, as it will review the global efforts to achieve the goals of the Paris Agreement signed in 2015. The world&rsquo;s reaction to this review will be a significant topic at COP28 and attract considerable media attention.</p>
          <p>Hosting the event reflects the country&rsquo;s vision and its objectives as part of the &lsquo;Principles of the 50&rsquo;, which mainly focus on fostering sustainable economic development, especially as climate action has become a key pillar in attracting investment, building strategic alliances and diversifying the economy. For its part, the Ministry of Climate Change and Environment showcased the UAE&rsquo;s achievements in climate action and its Nationally Determined Contributions (NDCs) and talked about its strategic plan to achieve climate neutrality by 2050, stressing that the UAE has the largest source of carbon-free electricity in the Arab world.<br />The ministry also highlighted its efforts to educate the public on three main issues: how to adopt sustainable habits, how to utilise digital platforms to engage through climate action narratives, and how to ensure better understanding of climate action concepts and issues through providing simple narratives and explanations.</p>
          <p>Such gatherings raise awareness about national priorities, according to the content creators and social media influencers who attend them.<br />COP28 will take place at Expo City Dubai from 30th November to 12th December, and see the attendance of 70,000 individuals, including heads of state, government officials, global industry leaders, private sector representatives, youth, civil society personalities, academics and climate experts.</p>'
        ),
        'ar' => array(
          'date' => 'الأربعاء، 31 مايو 2023',
          'title' => 'خلال لقاء مع المؤثرين وصناع المحتوى.. " المكتب الوطني للإعلام " يستعرض جهود الدولة في العمل المناخي و استضافة (COP28)',
          'title_feature' => 'خلال لقاء مع المؤثرين وصناع المحتوى.. " المكتب الوطني للإعلام " يستعرض جهود الدولة في العمل المناخي و استضافة (COP28)',
          'title_hfeature' => 'خلال لقاء مع المؤثرين وصناع المحتوى.. " المكتب الوطني للإعلام " يستعرض جهود الدولة في العمل المناخي و استضافة (COP28)',
          'summary' => 'نظم “ المكتب الوطني للإعلام ” في العاصمة أبوظبي لقاء تعريفياً مع المنصات الإخبارية الرقمية، وصناع المحتوى والمؤثرين لإطلاعهم على جهود دولة الإمارات في مجال العمل المناخي',
          'bodytxt' => '<p>نظم &ldquo; المكتب الوطني للإعلام &rdquo; في العاصمة أبوظبي لقاء تعريفياً مع المنصات الإخبارية الرقمية، وصناع المحتوى والمؤثرين لإطلاعهم على جهود دولة الإمارات في مجال العمل المناخي، واستضافتها الدورة الثامنة والعشرين من مؤتمر الأطراف في اتفاقية الأمم المتحدة الإطارية بشأن تغير المناخ (COP28).<br />يأتي تنظيم اللقاء بتوجيهات سمو الشيخ زايد بن حمدان بن زايد آل نهيان رئيس المكتب الوطني للإعلام بهدف حشد الجهود والإمكانيات لتعزيز الوعي العام بأهمية العمل المناخي والجهود التي تبذلها الدولة في هذا المجال.</p>
          <p>وقال أحمد الحوسني، مدير تنفيذي في المكتب الوطني للإعلام إن هذا اللقاء يأتي في إطار بناء علاقات شراكة وتواصل مباشرة ومستمرة مع قطاع الإعلام لما له من دور وطني مؤثر في نشر رسائل الدولة والترويج لإنجازاتها.و أشار الحوسني إلى المسؤولية الكبيرة التي تقع على عاتق مؤثري منصات التواصل لاجتماعي والإعلام الجديد للتوعية بقضايا الاستدامة البيئية وتشجيع المشاركة المجتمعية ودعم الاستراتيجيات الوطنية في هذا المجال.</p>
          <p>وقدم مكتب مؤتمر الأطراف (COP28) خلال اللقاء عرضاً حول أهمية استضافة دولة الإمارات الدورة الثامنة والعشرين من مؤتمر الأطراف في اتفاقية الأمم المتحدة الإطارية بشأن تغير المناخ (COP28) والتي تمثل محطة مهمة وبارزة في العمل المناخي العالمي حيث تشهد أول حصيلة عالمية لتقييم التقدم المحرز في تنفيذ أهداف اتفاق باريس التاريخي الذي تم التوصل إليه عام 2015، ومن المقرر أن تكون الاستجابة العالمية لنتائج تلك الحصيلة خلال مؤتمر COP28 الذي سيحظى بتغطية إعلامية واسعة.</p>
          <p>وتأتي الاستضافة أيضا تماشياً مع توجهات الدولة ومبادئ الخمسين التي تركز بشكل رئيسي على النمو الاقتصادي المستدام و يعتبر العمل المناخي حالياً عاملاً مؤثراً في توجيه الاستثمارات واستحداث الشراكات الاستراتيجية، وتحقيق التنوع الاقتصادي.</p>
          <p>وسلطت وزارة التغير المناخي والبيئة من جانبها الضوء على جهود دولة الإمارات في العمل المناخي واستعرضت المساهمات المحددة وطنياً في هذا المجال، والمبادرة الاستراتيجية لتحقيق الحياد المناخي 2050، وأكدت أن الإمارات تعتبر موطناً لأكبر مصدر للكهرباء الخالية من الكربون في العالم العربي.</p>
          <p>ونوهت وزارة التغير المناخي والبيئة إلى أنها تعمل على توعية المجتمع عبر ثلاث ركائز رئيسية وهي التغيير على السلوك المستدام، والمشاركة والتفاعل مع السرد المناخي عبر المنصات الرقمية، وزيادة الوعي عبر تبسيط المفاهيم والقضايا في مجال العمل المناخي.</p>
          <p>من جانبهم أكد الحضور من صناع محتوى ومؤثري تواصل اجتماعي أهمية هذه الملتقيات في تعزيز الوعي بالأولويات الوطنية.جدير بالذكر أن مؤتمر الأطراف (COP28) سينعقد في الفترة من 30 نوفمبر إلى 12 ديسمبر المقبلين بمدينة إكسبو دبي، ومن المتوقع أن يشهد حضور نحو 70,000 مشارك منهم رؤساء دول، ومسؤولون حكوميون، وقادة للقطاعات الصناعية العالمية، وممثلون للقطاع الخاص، والشباب، والمجتمع المدني، وأكاديميون، وخبراء في مجال المناخ.</p>'
        )
      ),
      array(
        'slug' => 'article5',
        'home_hero_feature' => 0,
        'home_feature' => 0,
        'main_img' => '/assets/images/article5-v2.jpg',
        'thumb_img' => '/assets/images/article5-v2-thumb.jpg',
        'feature_img' => '/assets/images/article5-v2.jpg',
        'en' => array(
          'date' => 'Tuesday, January 17, 2023',
          'title' => 'Sheikh Zayed bin Hamdan bin Zayed Al Nahyan as head of the National Media Bureau',
          'title_feature' => 'Sheikh Zayed bin Hamdan bin Zayed Al Nahyan as head of the National Media Bureau',
          'title_hfeature' => 'Sheikh Zayed bin Hamdan bin Zayed Al Nahyan as head of the National Media Bureau',
          'summary' => 'President His Highness Sheikh Mohamed bin Zayed Al Nahyan has issued a Federal Decree appointing H.H. Sheikh Zayed bin Hamdan bin Zayed Al Nahyan as Chairman of the National Media Office, with the rank of Minister',
          'bodytxt' => '<p>President His Highness Sheikh Mohamed bin Zayed Al Nahyan has issued a Federal Decree appointing H.H. Sheikh Zayed bin Hamdan bin Zayed Al Nahyan as Chairman of the National Media Office, with the rank of Minister.</p>
          <p>The Decree shall be published in the Official Gazette and is effective from the date of issuance.</p>'
        ),
        'ar' => array(
          'date' => 'الثلاثاء، 17 يناير 2023',
          'title' => 'رئيس الدولة يصدر مرسوماً اتحادياً بتعيين الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام',
          'title_feature' => 'رئيس الدولة يصدر مرسوماً اتحادياً بتعيين الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام',
          'title_hfeature' => 'رئيس الدولة يصدر مرسوماً اتحادياً بتعيين الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام',
          'summary' => 'أصدر صاحب السمو الشيخ محمد بن زايد آل نهيان رئيس الدولة "حفظه الله" مرسوماً اتحادياً بشأن تعيين سمو الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام بدرجة وزير',
          'bodytxt' => '<p>أصدر صاحب السمو الشيخ محمد بن زايد آل نهيان رئيس الدولة "حفظه الله" مرسوماً اتحادياً بشأن تعيين سمو الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام بدرجة وزير.وينشر المرسوم في الجريدة الرسمية ويعمل به اعتباراً من تاريخ صدوره.</p>'
        )
      ),
      array(
        'slug' => 'article6',
        'home_hero_feature' => 0,
        'home_feature' => 0,
        'main_img' => '/assets/images/article6-v2.jpg',
        'thumb_img' => '/assets/images/article6-v2-thumb.jpg',
        'feature_img' => '/assets/images/article6-v2.jpg',
        'en' => array(
          'date' => 'Tuesday, January  17, 2023',
          'title' => 'UAE President issues Federal Law to establish National Media Office',
          'title_feature' => 'UAE President issues Federal Law to establish National Media Office',
          'title_hfeature' => 'UAE President issues Federal Law to establish National Media Office',
          'summary' => 'His Highness Sheikh Mohamed bin Zayed Al Nahyan, President of the UAE, has issued a federal law establishing the National Media Office',
          'bodytxt' => '<p>His Highness Sheikh Mohamed bin Zayed Al Nahyan, President of the UAE, has issued a federal law establishing the National Media Office. The law states that the National Media Office will report to the Minister of the Presidential Court and will be financially and administratively independent in fulfilling its duties and mandate.</p>
          <p>The new entity aims to further grow the UAE&rsquo;s media ecosystem to serve the nation&rsquo;s interests and to strengthen the position of its media sector regionally and internationally. It will also enhance cooperation and consolidate efforts among media stakeholders, in addition to empowering a skilled generation to lead the country&rsquo;s media industry. The new entity will undertake various roles and responsibilities, including developing and implementing national media policies, directives and strategies; proposing, developing and reviewing all national media laws and regulations; and coordinating with relevant media stakeholders to align the country&rsquo;s media vision and message, locally and internationally.</p>
          <p>The National Media Office will also be responsible for preparing, evaluating and reviewing the UAE&rsquo;s media narrative at home and abroad; preserving and enhancing the UAE&rsquo;s reputation; representing the UAE in the regional and international media; and participating in media conferences and events in the UAE and abroad, in coordination with relevant stakeholders.</p>'
        ),
        'ar' => array(
          'date' => 'الثلاثاء، 17 يناير 2023',
          'title' => 'رئيس الدولة يصدر مرسوماً اتحادياً بتعيين الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام',
          'title_feature' => 'رئيس الدولة يصدر مرسوماً اتحادياً بتعيين الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام',
          'title_hfeature' => 'رئيس الدولة يصدر مرسوماً اتحادياً بتعيين الشيخ زايد بن حمدان بن زايد آل نهيان رئيساً للمكتب الوطني للإعلام',
          'summary' => 'أصدر صاحب السمو الشيخ محمد بن زايد آل نهيان رئيس الدولة "حفظه الله" مرسوماً بقانون اتحادي بإنشاء "المكتب الوطني للإعلام".',
          'bodytxt' => '<p>أصدر صاحب السمو الشيخ محمد بن زايد آل نهيان رئيس الدولة "حفظه الله" مرسوماً بقانون اتحادي بإنشاء "المكتب الوطني للإعلام".</p>
          <p>ونص المرسوم بقانون اتحادي على أن يتمتع المكتب بالاستقلال المالي والإداري اللازمين لتحقيق أهدافه ومباشرة اختصاصاته، ويتبع وزير ديوان الرئاسة. ويهدف المكتب إلى تطوير منظومة الإعلام في الدولة بما يخدم المصلحة الوطنية ويعزز موقع الدولة الإعلامي على المستوى الإقليمي والدولي، إضافة إلى دعم آلية التنسيق والتعاون وتوحيد الجهود بين مختلف الجهات الإعلامية في الدولة بجانب إعداد قيادات وكوادر إعلامية وطنية.</p>
          <p>ويتولى المكتب عدة اختصاصات لتحقيق أهدافه، منها اقتراح وإعداد السياسات والتوجهات والاستراتيجيات الإعلامية العامة للدولة، والإشراف على تنفيذها، واقتراح وإعداد ومراجعة كافة التشريعات واللوائح والقرارات المعنية بقطاع الإعلام الوطني والتنسيق مع الجهات الإعلامية في الدولة، لتوحيد الرؤية الإعلامية والخطاب الإعلامي للدولة محلياً ودولياً. كما يختص المكتب بإعداد السرد الإعلامي للدولة وتقييمه ومتابعته داخل الدولة وخارجها، والقيام بكل ما له علاقة بالحفاظ على اسم الدولة وسمعتها وتعزيزهما، بجانب تمثيل الدولة إعلامياً على كافة الأصعدة الخارجية والإقليمية وفي المؤتمرات والفعاليات الإعلامية داخل الدولة وخارجها وذلك بالتنسيق مع الجهات المعنية.</p>'
        )
      ),
      array(
        'slug' => 'article7',
        'home_hero_feature' => 0,
        'home_feature' => 0,
        'main_img' => '/assets/images/article7-v2.jpg',
        'thumb_img' => '/assets/images/article7-v2-thumb.jpg',
        'feature_img' => '/assets/images/article7-v2.jpg',
        'en' => array(
          'date' => 'Tuesday, June 07, 2023',
          'title' => 'Mansour bin Zayed issues a decision establishing the National Media Office',
          'title_feature' => 'Mansour bin Zayed issues a decision establishing the National Media Office',
          'title_hfeature' => 'Mansour bin Zayed issues a decision establishing the National Media Office',
          'summary' => 'His Highness Sheikh Mansour bin Zayed Al Nahyan, Deputy Prime Minister of the UAE and Minister of Presidential Affairs, has issued a resolution establishing the National Media Office',
          'bodytxt' => '<p>His Highness Sheikh Mansour bin Zayed Al Nahyan, Deputy Prime Minister of the UAE and Minister of Presidential Affairs, has issued a resolution establishing the National Media Office (NMO) as a unit affiliated with the Minister of Presidential Affairs. NMO will operate with financial and administrative independence, and with a focused remit that will enable the office to deliver on its goals and carry out its responsibilities efficiently. To be headquartered in Abu Dhabi, the NMO is to have offices in the UAE and internationally, as directed by the Minister.</p>
          <p>The resolution stipulates that the Emirates News Agency (WAM) will operate as a unit reporting to the NMO Head, with the Agency to continue to be governed by its financial and administrative regulatory framework.</p>
          <p>The NMO is mandated to operate in coordination and cooperation with the relevant authorities, and aims to streamline efforts to develop the national media sector in line with the UAE&rsquo;s interests. It will also enhance the UAE&rsquo;s status regionally and internationally as a key media hub; support and enhance cooperation between the UAE&rsquo;s various media offices; and ensure high-level Emiratis in the media industry are equipped with media leadership skills.</p>
          <p>To achieve its objectives, the NMO will carry out a number of duties, foremost of which are proposing and developing strategic media plans, legislation, regulations and decisions on media development, while monitoring their implementation in coordination with the relevant authorities.</p>
          <p>In addition, the NMO will train and upskill Emirati talent in news media; develop and organise the roles of official spokespeople; represent the UAE at media conferences and events in the UAE and abroad; and conduct research within the media sector. The NMO will also work together with official and private media departments on national affairs and on developing strategic relations with Arab, regional and international media outlets in order to exchange best practices.</p>'
        ),
        'ar' => array(
          'date' => 'الثلاثاء، 7 يونيو 2022',
          'title' => 'منصور بن زايد يُصدر قراراً بإنشاء المكتب الوطني للإعلام',
          'title_feature' => 'منصور بن زايد يُصدر قراراً بإنشاء المكتب الوطني للإعلام',
          'title_hfeature' => 'منصور بن زايد يُصدر قراراً بإنشاء المكتب الوطني للإعلام',
          'summary' => 'أصدر سمو الشيخ منصور بن زايد آل نهيان نائب رئيس مجلس الوزراء وزير شؤون الرئاسة قراراً بإنشاء المكتب الوطني للإعلام، بهدف تطوير منظومة الإعلام في الدولة بما يخدم المصلحة الوطنية',
          'bodytxt' => '<p>أصدر سمو الشيخ منصور بن زايد آل نهيان نائب رئيس مجلس الوزراء وزير شؤون الرئاسة قراراً بإنشاء المكتب الوطني للإعلام، بهدف تطوير منظومة الإعلام في الدولة بما يخدم المصلحة الوطنية، ويعزز موقع الدولة الإعلامي على المستوى العالمي، ويطور آليات التنسيق والتعاون بين مختلف الجهات الإعلامية في الدولة، إضافة إلى إعداد قيادات إعلامية وطنية مؤثرة. ونص القرار على إلحاق وكالة أنباء الإمارات /وام/ كوحدة تابعة لرئيس المكتب، على أن يستمر العمل بالأنظمة واللوائح الإدارية والمالية الخاصة بالوكالة. وذكر القرار أن المكتب الوطني الإعلامي سيكون وحدةً تابعةً لوزير شؤون الرئاسة، تتمتع بالاستقلال المالي والإداري اللازمين لتحقيق أهدافها ومباشرة اختصاصاتها، على أن يكون مقره الرئيسي في مدينة أبوظبي، ويجوز إنشاء فروع أو مكاتب له داخل أو خارج الدولة بقرار من الوزير.</p>
          <p>وأكد سمو الشيخ منصور بن زايد آل نهيان أن إنشاء المكتب الوطني للإعلام يُجسد رؤية القيادة الرشيدة وعلى رأسها صاحب السمو الشيخ محمد بن زايد آل نهيان رئيس الدولة "حفظه الله"، لتطوير قطاع الإعلام في الدولة وتعزيز مساهمته في تنمية الوطن ودعم استقراره وترسيخ ريادته ونهضته الشاملة.</p>
          <p>وقال سموه إن المكتب سيواكب التطورات العالمية في مجال صناعة الإعلام وصياغة التأثير الإعلامي، كما سيؤدي دوراً مهماً في تأهيل القيادات الإعلامية الوطنية، وتنسيق جهود الجهات المعنية داخل الدولة لتحسين جودة المنتج الإعلامي الإماراتي وتعزيز القدرات في مجال رصد ومواجهة مختلف التحديات والأزمات الإعلامية، إضافة إلى تبادل أفضل الممارسات والخبرات مع الجهات الدولية. ولتحقيق أهدافه، يقوم المكتب بعدد من المهام والاختصاصات أهمها اقتراح ووضع الخطط الاستراتيجية الإعلامية والتشريعات واللوائح والقرارات المعنية بتطوير الإعلام ومراقبة تنفيذها بالتنسيق مع الجهات المعنية، وتدريب وتأهيل الكوادر الوطنية الإعلامية وتطوير وتنظيم عمل المتحدثين الرسميين وتمثيل الدولة في المؤتمرات والفعاليات الإعلامية داخل الدولة وخارجها وإعداد البحوث والدراسات في المجال الاعلامي بالإضافة إلى التنسيق مع كافة الجهات الإعلامية الرسمية والخاصة بشأن القضايا الوطنية وتطوير علاقات استراتيجية مع وسائل الإعلام العربية والإقليمية والدولية بهدف تبادل أفضل الممارسات.</p>'
        )
      )
    )
  ),
  'about' => array(
    'hero_img' => '/assets/images/abt-hero.jpg',
    'abt_img' => '/assets/images/abt-inf.jpg',
    'ch_thumb' => '/assets/images/chm-thumb-v3.jpg',
    'roles_thumb' => '/assets/images/roles-thumb.jpg',
    'en' => array(
      'meta_title' => 'About the National Media Office',
      'meta_desc' => 'The office aims to develop the media sector in the UAE in a way that serves the national interest and strengthens the country’s media position at the regional and international levels',
      'title' => 'About the<br>National Media Office',
      'short_title' => 'About the Office',
      'feature_title' => 'The National Media Office oversees a foundational role in the national media ecosystem, enhancing the UAE’s position and promoting its leading developmental model regionally and globally.',
      'summary' => '',
      'abt_sec_title' => 'About Us',
      'ch_cta' => 'The Chairman’s Message',
      'ch_cta_temp' => 'Chairman of the <br>National Media Office',
      'roles_cta' => 'The Office’s Roles',
      'abt_inf' => '<p>His Highness Sheikh Mohamed bin Zayed Al Nahyan, President of the UAE, on 17 January 2023 issued a federal law to establish the National Media Office, an affiliate of the Presidential Court.</p>
      <p>The National Media Office aims to develop the media ecosystem in the UAE in a way that ensures serving the national interest, enhances the UAE&rsquo;s media position at the regional and international level, unifies efforts of several media entities across the UAE, and prepares future national media cadres and leaders.</p>
      <p>The National Media Office will endeavour to contribute to developing the national media ecosystem in line with the UAE&rsquo;s vision, and elevate the UAE&rsquo;s position in regional and international arenas in a way that achieves the goals of the National Media Office.</p>
      <p>The National Media Office will contribute to preserving and celebrating the values and culture of the UAE, and inform the public on the UAE&rsquo;s position on regional and international matters by cementing the concept of collaboration and cooperation across all media entities in the UAE, ensuring the elevation and enhancement of the UAE&rsquo;s media status.</p>'
    ),
    'ar' => array(
      'meta_title' => 'نبذة عن المكتب الوطني للإعلام',
      'meta_desc' => 'يهدف المكتب إلى تطوير منظومة الإعلام في الدولة بما يخدم المصلحة الوطنية ويعزز موقع الدولة الإعلامي على المستوى الإقليمي والدولي',
      'title' => 'نبذة عن المكتب الوطني للإعلام',
      'short_title' => 'عن المكتب',
      'feature_title' => 'يقوم المكتب بدور أساسي في منظومة الإعلام الوطني لتعزيز مكانة دولة الإمارات ونموذجها التنموي الرائد إقليمياً وعالمياً.',
      'summary' => '',
      'abt_sec_title' => 'عن المكتب',
      'ch_cta' => 'رسالة سمو رئيس المكتب',
      'ch_cta_temp' => ' سمو رئيس المكتب ',
      'roles_cta' => 'مهام المكتب الوطني للإعلام',
      'abt_inf' => '<p>أصدر صاحب السمو الشيخ محمد بن زايد آل نهيان رئيس الدولة، حفظه الله، بتاريخ 17 يناير 2023، مرسوماً بقانون اتحادي يقضي بإنشاء &laquo;المكتب الوطني للإعلام&raquo; ويتبع رئيس ديوان الرئاسة.&nbsp;</p>
      <p>يهدف المكتب إلى تطوير منظومة الإعلام في الدولة بما يخدم المصلحة الوطنية، ويعزِّز موقع الدولة الإعلامي على المستوى الإقليمي والدولي، إضافةً إلى دعم آلية التنسيق والتعاون وتوحيد الجهود بين مختلف الجهات الإعلامية في الدولة، بجانب إعداد قيادات وكوادر إعلامية وطنية.</p>
      <p>ويعمل المكتب على المساهمة في تطوير منظومة الإعلام الوطني بما يتلاءم مع رؤية الإمارات، ومواكبة مكانتها على الساحتين الإقليمية والدولية، وبما يحقِّق أهدافه. ويسهم المكتب في الحفاظ على قيم وثقافة وتراث دولة الإمارات والاحتفاء بها، وإطلاع الجمهور على مواقف الدولة تجاه التطورات والقضايا الإقليمية والدولية، من خلال ترسيخ مفهوم الشراكة والتعاون وتكامل الجهود بين مختلف الجهات الإعلامية في الدولة، لضمان الارتقاء بواقع الإعلام الإماراتي والنهوض به.</p>'
    )
  ),
  'initiatives' => array(
    'common' => array(
      'en' => array(
        'breadcrumb' => 'Our Initiatives',
        'fini_title' => 'Our Initiatives'
      ),
      'ar' => array(
        'breadcrumb' => 'المبادرات',
        'fini_title' => 'مبادرات المكتب'
      )
    ),
    'list' => array(
      array(
        'image' => '/assets/images/ca_hr_02.jpg',
        'thumb' => '/assets/images/ca_hr_01.jpg',
        'feature_thumb' => '/assets/images/ca_hr_01.jpg',
        'en' => array(
          'title' => 'Climate Action Ambassadors',
          'summary' => 'The Climate Action Ambassadors Programme aims to work with social media content makers and influencers to highlight national efforts and international initiatives to tackle climate change challenges, promoting the UAE’s vision and strategy to achieve net zero emission by 2050.',
          'fsummary' => 'The Climate Action Ambassadors Programme aims to work with social media content makers and influencers to highlight national efforts and international initiatives to tackle climate change challenges, promoting the UAE’s vision and strategy to achieve net zero emission by 2050.',
          'ibody' => '<p>The Climate Action Ambassadors Programme aims to work with social media content makers and influencers to highlight national efforts and international initiatives to tackle climate change challenges,  promoting the UAE’s vision and strategy to achieve net zero emission by 2050,  to continuously work to increase community awareness about the importance of selecting the UAE to host COP28, while encouraging individuals to adopt positive behaviours to help protect against various impacts of climate change to ensure the preservation of a sustainable environment for the good of coming generations.</p>'
        ),
        'ar' => array(
          'title' => 'سفراء العمل المناخي',
          'summary' => 'يهدف برنامج سفراء العمل المناخي إلى العمل مع صنّاع المحتوى ومؤثّري مواقع التواصل الاجتماعي، لإبراز الجهود الوطنية والمبادرات العالمية لدولة الإمارات في مواجهة تحديات تغيُّر المناخ، والتعريف برؤية الدولة واستراتيجيتها لتحقيق الحياد المناخي بحلول عام 2050.',
          'fsummary' => 'يهدف برنامج سفراء العمل المناخي إلى العمل مع صنّاع المحتوى ومؤثّري مواقع التواصل الاجتماعي، لإبراز الجهود الوطنية والمبادرات العالمية لدولة الإمارات في مواجهة تحديات تغيُّر المناخ، والتعريف برؤية الدولة واستراتيجيتها لتحقيق الحياد المناخي بحلول عام 2050.',
          'ibody' => '<p>يهدف برنامج سفراء العمل المناخي إلى العمل مع صنّاع المحتوى ومؤثّري مواقع التواصل الاجتماعي، لإبراز الجهود الوطنية والمبادرات العالمية لدولة الإمارات في مواجهة تحديات تغيُّر المناخ، والتعريف برؤية الدولة واستراتيجيتها لتحقيق الحياد المناخي بحلول عام 2050، والعمل باستمرار لنشر الوعي المجتمعي حول أهمية اختيار دولة الإمارات لاستضافة مؤتمر الأطراف COP28، فضلاً عن تشجيع الأفراد لاتخاذ سلوكيات إيجابية إزاء آثار تغيُّرات المناخ المتعددة، بهدف استدامة الحفاظ على البيئة لضمان مستقبلٍ أفضلَ للأجيال المقبلة.</p>'
        )
      ),
    )
  ),
  'roles' => array(
    'en' => array(
      'meta_title' => 'The National Media Office Roles',
      'meta_desc' => 'The office undertakes a number of roles to achieve its objectives',
      'title' => 'Roles',
      'intro' => 'The National Media Office will oversee a number of specialties including:',
      'roles_list' => array(
        'Proposing, developing and implementing media policies and directives, as well as general media strategies of the UAE',
        'Proposing, developing and reviewing all legislations, regulations and decisions pertaining to the national media sector',
        'Coordinating with national media entities on a unified vision for the UAE’s key media messages and rhetoric at local, regional and international levels',
        'Preparing and evaluating the UAE’s media messaging to maintain and enhance the UAE’s reputation'
      )
    ),
    'ar' => array(
      'meta_title' => 'مهام المكتب الوطني للإعلام',
      'meta_desc' => 'يتولى المكتب عدد من الاختصاصات لتحقيق أهدافه',
      'title' => 'المهام',
      'intro' => 'يتولى المكتب عدداً من الاختصاصات لتحقيق أهدافه؛ منها:',
      'roles_list' => array(
        'اقتراح وإعداد وتنفيذ السياسات والتوجهات والاستراتيجيات الإعلامية العامة في الدولة.',
        'اقتراح وإعداد ومراجعة كافة التشريعات واللوائح والقرارات المعنية بقطاع الإعلام الوطني.',
        'التنسيق مع الجهات الإعلامية الوطنية لتوحيد الرؤية الإعلامية والخطاب الإعلامي لدولة الإمارات محلياً ودولياً.',
        'إعداد وتقييم ومتابعة الخطاب الإعلامي لدولة الإمارات، والحفاظ على سمعة الدولة وتعزيزها.'
      )
    )
  ),
  'chairman' => array(
    'chm_img' => '/assets/images/chm-v2.jpg',
    'en' => array(
      'title' => 'Chairman’s Message',
      'title_temp' => 'H.H. Sheikh Zayed bin Hamdan bin Zayed Al Nahyan',
      'meta_desc' => 'The media represents a reflection of reality, and a mirror for the development of countries and governments. The UAE has a clear strategy that focuses on shaping the future and continuous development in all sectors, and the media is a major pillar in achieving this strategy.',
      'desc' => '<p>The media represents a reflection of reality, and a mirror for the development of countries and governments. The UAE has a clear strategy that focuses on shaping the future and continuous development in all sectors, and the media is a major pillar in achieving this strategy.</p>
      <p>The national media in the UAE is considered a major and genuine partner in the comprehensive development process in the country and plays a key role in enhancing the reputation of the country and devoting its values based on tolerance, coexistence and human fraternity, and consolidating its position as an attractive destination for development and innovation in various fields.</p>
      <p>The office plays an essential pivotal role in the media scene of the UAE, as it works to coordinate and cooperate with the concerned authorities to develop the media system in the UAE in a way that serves the UAE\'s national interests and strengthens its media position at the regional and international levels. It addition to that, the Office will support and develop the coordination and cooperation mechanism, unify the efforts between the various national media entities, and will prepare influential national media leaders and cadres.</p>',
      'sign' => 'Zayed Bin Hamdan Bin Zayed Al Nahyan',
      'sign_temp' => 'Chairman of the National Media Office'
    ),
    'ar' => array(
      'title' => 'رسالة سمو رئيس المكتب الوطني للإعلام',
      'title_temp' => 'سمو الشيخ زايد بن حمدان بن زايد آل نهيان',
      'meta_desc' => 'يمثل الإعلام انعكاساً للواقع، ومرآة لتطور الدول والحكومات. تمتلك دولة الإمارات استراتيجية واضحة تركز على صناعة المستقبل والتطوير المستمر في كافة القطاعات، ويعتبر الإعلام ركيزة أساسية في تحقيق هذه الاستراتيجية.',
      'desc' => '<p>يمثل الإعلام انعكاساً للواقع، ومرآة لتطور الدول والحكومات. تمتلك دولة الإمارات استراتيجية واضحة تركز على صناعة المستقبل والتطوير المستمر في كافة القطاعات، ويعتبر الإعلام ركيزة أساسية في تحقيق هذه الاستراتيجية.</p>
      <p>يعتبر الإعلام الوطني في دولة الإمارات شريكاً رئيسياً وحقيقياً في عملية التنمية الشاملة في الدولة، ويلعب دوراً أساسياً في تعزيز سمعة الدولة وتكريس قيمها القائمة على التسامح والتعايش والأخوة الإنسانية، وترسيخ مكانتها. كوجهة جاذبة للتطوير والابتكار في مختلف المجالات.</p>
      <p>ويلعب المكتب دوراً محورياً أساسياً في المشهد الإعلامي لدولة الإمارات، حيث يعمل على التنسيق والتعاون مع الجهات المعنية لتطوير المنظومة الإعلامية في دولة الإمارات بما يخدم المصالح الوطنية لدولة الإمارات ويعزز مكانتها الإعلامية على مستوى الدولة. المستويين الإقليمي والدولي. بالإضافة إلى ذلك، سيقوم المكتب بدعم وتطوير آلية التنسيق والتعاون، وتوحيد الجهود بين مختلف الجهات الإعلامية الوطنية، وإعداد قيادات وكوادر إعلامية وطنية مؤثرة.</p>',
      'sign' => 'زايد بن حمدان بن زايد آل نهيان',
      'sign_temp' => 'رئيس المكتب الوطني للإعلام'
    )
  ),
  'the_uae' => array(
    'hero_img' => '/assets/images/uae_hero_v2.jpg',
    'inf_img' => '/assets/images/uae_inf_v2.jpg',
    'en' => array(
      'breadcrumb' => 'The UAE',
      'title' => 'The United<br>Arab Emirates',
      'summary' => '<p>The United Arab Emirates consists of seven Emirates: Abu Dhabi, Dubai, Sharjah, Umm al-Quwain, Fujairah, Ajman and Ra’s al-Khaimah. In 1971, the UAE\'s founding father, the late Sheikh Zayed bin Sultan Al Nahyan unified the seven Emirates into a federation—the only one in the Arab world. With his visionary leadership, the UAE has developed to become one of the world’s most open and successful economies.</p>
      <p>The UAE has become an important player in regional and international affairs. Strategically located in the Arabian Gulf, and within an eight-hour flight of two-thirds of the world’s population, the UAE is a modern crossroads, connecting East and West. As such, the UAE have also emerged as regional centers for business, education, culture and tourism.</p>',
      'desc' => '<p>The UAE was established on 2 December 1971 to become an independent federal state with full sovereignty and its own constitution. The UAE is composed of the seven emirates of: Abu Dhabi, Dubai, Sharjah, Ajman, Um Al Quwain, Ras Al Khaimah and Fujairah.</p>
      <p>Abu Dhabi City is the capital of the UAE and centre of the federal government. The seven emirates of the UAE are jointly linked with religion, culture and history, norms and traditions, and all has resulted in having an integrated, secure and thriving country.</p>
      <p>The UAE enjoys political stability and economic prosperity, and has strong and active regional and international relations that are based on mutual respect and joint work with the aim to achieve community best interests across various fields and sectors.</p>
      <p>The UAE is home to people of more than 200 nationalities who enjoy living in an environment of tolerance, harmony and coexistence, and jointly promote the values of human fraternity and noble principles, working in various fields that contribute to enhancing the UAE&rsquo;s comprehensive development in an ideal setting that guarantees their wellbeing and dignity, and offers abundant job opportunities, allows business practicing, all while providing world-class education and health services.</p>
      <p>The UAE tops the ranks of numerous global developmental and economical indexes. The UAE&rsquo;s vision is based on advancing its developmental process to unprecedented horizons entering the era of the coming fifty years, as it seeks to be among the best countries in the world.</p>',
      'read_more' => 'Read more',
      'read_less' => 'Read less',
      'exlink' => 'https://u.ae/en/about-the-uae',
      'meta_title' => 'The United Arab Emirates',
      'meta_desc' => 'The UAE enjoys political stability, economic stability and economic prosperity, and strong and active regional and international relations based on the principles of wisdom, moderation, balance and advocacy of truth and justice.'
    ),
    'ar' => array(
      'breadcrumb' => 'دولة الإمارات',
      'title' => 'عن دولة الإمارات العربية المتحدة',
      'summary' => '<p>تتكون دولة الإمارات العربية المتحدة من سبع إمارات هي: أبو ظبي، دبي، الشارقة، أم القيوين، الفجيرة، عجمان ورأس الخيمة. وفي عام 1971، قام المؤسس المغفور له الشيخ زايد بن سلطان آل نهيان بتوحيد الإمارات السبع في اتحاد، وهو الوحيد في العالم العربي. وبفضل قيادته الحكيمة، تطورت دولة الإمارات العربية المتحدة لتصبح واحدة من أكثر الاقتصادات انفتاحاً ونجاحاً في العالم.</p>
      <p>أصبحت دولة الإمارات لاعباً مهماً في الشؤون الإقليمية والدولية. وتتمتع دولة الإمارات العربية المتحدة بموقع استراتيجي في الخليج العربي، وعلى بعد ثماني ساعات طيران من ثلثي سكان العالم، وهي بمثابة مفترق طرق حديث يربط بين الشرق والغرب. وعلى هذا النحو، برزت دولة الإمارات العربية المتحدة أيضًا كمراكز إقليمية للأعمال والتعليم والثقافة والسياحة.</p>',
      'desc' => '<p>أُسِّسَت دولة الإمارات العربية المتحدة في 2 ديسمبر 1971، بصفتها دولةً اتحاديةً مستقلةً ذات دستور وسيادة كاملة، وتتألف من سبع إمارات هي: أبوظبي، دبي، الشارقة، عجمان، أم القيوين، رأس الخيمة، والفجيرة.</p>
      <p>ومدينة أبوظبي هي عاصمة الدولة ومركزها الحكومي الاتحادي. ويجمع الإماراتِ السبعَ الدينُ والثقافة والتاريخ والعادات والتقاليد، ما نتج عن ذلك تكامل تام وراسخ في ظل دولة آمنة ومزدهرة.</p>
      <p><span style="font-weight: 400;">تتمتَّع دولة الإمارات باستقرار سياسي ورخاء اقتصادي، وعلاقات إقليمية ودولية متينة ونشطة قائمة على مبادئ الاحترام المتبادَل، والعمل المشترَك، وتحقيق مصالح المجتمعات في شتى المجالات والقطاعات.</span></p>
      <p>وتحتضن الدولة أكثر من 200 جنسية يعيشون في كنفٍ من التسامح والانسجام والتعايش والوئام، ويتشاركون في إعلاء قيم الأُخوَّة الإنسانية والمبادئ النبيلة، ويعملون معاً في شتى مجالات التنمية الشاملة التي تشهدها الدولة، في بيئة مثالية تضمن رفاهية الحياة الكريمة، ووفرة فرص العمل ومزاولة الأعمال التجارية، علاوةً على تقديم خدمات تعليمية وصحية بمقاييس عالمية.</p>
      <p>وتتصدَّر دولة الإمارات العديد من المؤشرات التنموية والاقتصادية العالمية، وتقوم رؤيتها على الانتقال بمسيرتها التنموية إلى آفاق غير مسبوقة، مع دخول دولة الإمارات حقبة الخمسين عاماً المقبلة، في إطار مئوية الإمارات &laquo;رؤية 2071&raquo; الساعية إلى أن تكون دولة الإمارات من أفضل دول العالم.</p>',
      'read_more' => 'اقرأ المزيد',
      'read_less' => 'اقرأ أقل',
      'exlink' => 'https://u.ae/ar-AE/about-the-uae',
      'meta_title' => 'عن دولة الإمارات العربية المتحدة',
      'meta_desc' => 'تتمتع دولة الإمارات باستقرار سياسي واقتصاد ورخاء اقتصادي، وعلاقات إقليمية ودولية متينة ونشطة قائمة على مبادئ الحكمة، والاعتدال، والتوازن ومناصرة الحق، والعدل.'
    )
  ),
  'news_slugs' => array(
    'article1',
    'article2',
    'article3',
    'article4',
    'article5',
    'article6',
    'article7'
  ),
  'contact' => array(
    'en' => array(
      'breadcrumb' => 'Contact Us',
      'page_title' => 'Get in Touch',
      'page_intro' => 'For enquires or to contact the National Media Office, please fill out the contact form, or reach us via the below contact details:',
      'contact_info' => array(
        array(
          'title' => 'Media Enquiries:',
          'subtitle' => 'Media Relations team',
          'email' => 'media.relations@nmo.ae'
        )
      ),
      'fname' => 'Full Name',
      'phone' => 'Phone No.',
      'email' => 'Email Address',
      'req_type' => 'Request Type',
      'req_type_list' => array(
        'General', 'Training & Recruitment', 'Other'
      ),
      'msg' => 'Message',
      'terms' => 'I accept the <a href="'.$_url_lang.'terms">Terms & Conditions</a>',
      'submit' => 'Submit',
      'fname_err' => 'Please enter your name',
      'phone_err' => 'Please enter a valid phone number',
      'email_err' => 'Please enter a correct email address',
      'req_err' => 'Please select your request',
      'terms_err' => 'Please accept terms & conditions',
      'captcha_err' => 'Please confirm you are not a robot',
      'generic_err' => 'Something went wrong',
      'msg_err' => 'Please type a correct format',
      'success_send' => '<Span>Thank you</span><br>Your message was sent successfully',
      'success_resend' => 'Another Message'
    ),
    'ar' => array(
      'breadcrumb' => 'اتصل بنا',
      'page_title' => 'اتصل بنا',
      'page_intro' => ' نرحِّب بتواصلك مع المكتب الوطني للإعلام من خلال تعبئة نموذج التواصل، أو عبر عنوان البريد الإلكتروني المحدَّد أدناه.',
      'contact_info' => array(
        array(
          'title' => 'الاستفسارات الإعلامية:',
          'subtitle' => 'فريق العلاقات الإعلامية',
          'email' => 'media.relations@nmo.ae'
        )
      ),
      'fname' => 'الاسم الكامل',
      'phone' => 'رقم الهاتف المتحرك',
      'email' => 'عنوان البريد الإلكتروني',
      'req_type' => 'نوع الرسالة',
      'req_type_list' => array(
        'طلب عام', 'التدريب والتوظيف', 'أخرى'
      ),
      'msg' => 'الرسالة',
      'terms' => 'أوافق على <a href="'.$_url_lang.'terms">الشروط والأحكام</a>',
      'submit' => 'إرسال',
      'fname_err' => 'الرجاء إدخال الإسم',
      'phone_err' => 'الرجاء إدخال رقم جوال صحيح',
      'email_err' => 'الرجاء إدخال بريد إلكتروني صحيح',
      'req_err' => 'الرجاء اختيار نوع الرسالة',
      'terms_err' => 'الرجاء قبول الشروط والأحكام',
      'captcha_err' => 'الرجاء التاكيد أنك لست روبوت',
      'generic_err' => 'حدث خطأ ما',
      'msg_err' => 'الرجاء كتابة النص الصحيح',
      'success_send' => '<span>شكرًا لك</span><br>تم إرسال رسالتك بنجاح',
      'success_resend' => 'رسالة أخرى'
    )
  )
);


function siteURL()
{
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    return $protocol.$domainName;
}
?>
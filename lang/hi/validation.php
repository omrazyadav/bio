<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'accepted_if' => ':attribute को स्वीकार किया जाना चाहिए जब :other :value हो।',
    'active_url' => ':attribute एक मान्य URL नहीं है।',
    'after' => ':attribute की तारीख :date के बाद की होनी चाहिए।',
    'after_or_equal' => ':attribute की तारीख :date के बाद या बराबर होनी चाहिए।',
    'alpha' => ':attribute में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute में केवल अक्षर, अंक, डैश और अंडरस्कोर होने चाहिए।',
    'alpha_num' => ':attribute में केवल अक्षर और अंक होने चाहिए।',
    'array' => ':attribute एक एरे होना चाहिए।',
    'before' => ':attribute की तारीख :date से पहले की होनी चाहिए।',
    'before_or_equal' => ':attribute की तारीख :date से पहले या बराबर होनी चाहिए。',
    'between' => [
        'array' => ':attribute में :min और :max आइटम के बीच होना चाहिए।',
        'file' => ':attribute :min और :max किलोबाइट के बीच होना चाहिए।',
        'numeric' => ':attribute :min और :max के बीच होना चाहिए।',
        'string' => ':attribute :min और :max अक्षरों के बीच होना चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड को सही या गलत होना चाहिए।',
    'confirmed' => ':attribute की पुष्टि मेल नहीं खाती।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute एक मान्य तारीख नहीं है।',
    'date_equals' => ':attribute को :date के बराबर की तारीख होनी चाहिए।',
    'date_format' => ':attribute :format प्रारूप से मेल नहीं खाता।',
    'declined' => ':attribute को अस्वीकार किया जाना चाहिए।',
    'declined_if' => ':attribute को अस्वीकार किया जाना चाहिए जब :other :value हो।',
    'different' => ':attribute और :other अलग-अलग होना चाहिए।',
    'digits' => ':attribute :digits अंकों का होना चाहिए।',
    'digits_between' => ':attribute :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute की छवि के आयाम अमान्य हैं।',
    'distinct' => ':attribute फ़ील्ड में एक डुप्लिकेट मान है।',
    'doesnt_end_with' => ':attribute में निम्न में से कोई एक के साथ समाप्त नहीं हो सकता: :values。',
    'doesnt_start_with' => ':attribute में निम्न में से कोई एक के साथ शुरू नहीं हो सकता: :values。',
    'email' => ':attribute एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute में निम्न में से एक के साथ समाप्त होना चाहिए: :values。',
    'enum' => 'चुना गया :attribute अमान्य है।',
    'exists' => 'चुना गया :attribute अमान्य है।',
    'file' => ':attribute एक फ़ाइल होना चाहिए।',
    'filled' => ':attribute फ़ील्ड में एक मान होना चाहिए।',
    'gt' => [
        'array' => ':attribute में :value से अधिक आइटम होने चाहिए।',
        'file' => ':attribute का आकार :value किलोबाइट्स से अधिक होना चाहिए।',
        'numeric' => ':attribute :value से अधिक होना चाहिए।',
        'string' => ':attribute की लंबाई :value अक्षरों से अधिक होनी चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute में :value आइटम या अधिक होने चाहिए।',
        'file' => ':attribute का आकार :value किलोबाइट्स से अधिक या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute :value से अधिक या उसके बराबर होना चाहिए।',
        'string' => ':attribute की लंबाई :value अक्षरों से अधिक या उसके बराबर होनी चाहिए।',
    ],
    'image' => ':attribute एक छवि होना चाहिए।',
    'in' => 'चुना गया :attribute अमान्य है।',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद नहीं है।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute एक वैध IP पता होना चाहिए।',
    'ipv4' => ':attribute एक वैध IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक वैध IPv6 पता होना चाहिए।',
    'json' => ':attribute एक वैध JSON स्ट्रिंग होना चाहिए।',
    'lt' => [
        'array' => ':attribute में :value से कम आइटम होने चाहिए।',
        'file' => ':attribute का आकार :value किलोबाइट्स से कम होना चाहिए।',
        'numeric' => ':attribute :value से कम होना चाहिए।',
        'string' => ':attribute की लंबाई :value अक्षरों से कम होनी चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute में :value से अधिक आइटम नहीं होने चाहिए।',
        'file' => ':attribute का आकार :value किलोबाइट्स से कम या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute :value से कम या उसके बराबर होना चाहिए।',
        'string' => ':attribute की लंबाई :value अक्षरों से कम या उसके बराबर होनी चाहिए।',
    ],
    'mac_address' => ':attribute एक वैध MAC पता होना चाहिए।',
    'max' => [
        'array' => ':attribute में :max से अधिक आइटम नहीं होने चाहिए।',
        'file' => ':attribute का आकार :max किलोबाइट्स से अधिक नहीं होना चाहिए।',
        'numeric' => ':attribute :max से अधिक नहीं होना चाहिए।',
        'string' => ':attribute की लंबाई :max अक्षरों से अधिक नहीं होनी चाहिए।',
    ],
    'max_digits' => ':attribute में :max से अधिक अंक नहीं होने चाहिए।',
    'mimes' => ':attribute प्रकार की फ़ाइल होनी चाहिए: :values।',
    'mimetypes' => ':attribute प्रकार की फ़ाइल होनी चाहिए: :values।',
    'min' => [
        'array' => ':attribute में कम से कम :min आइटम होने चाहिए।',
        'file' => ':attribute का आकार कम से कम :min किलोबाइट्स होना चाहिए।',
        'numeric' => ':attribute कम से कम :min होना चाहिए।',
        'string' => ':attribute की लंबाई कम से कम :min अक्षर होनी चाहिए।',
    ],
    'min_digits' => ' :attribute में कम से कम :min अंक होने चाहिए।',
    'multiple_of' => ' :attribute को :value का गुणक होना चाहिए।',
    'not_in' => 'चुना गया :attribute अमान्य है।',
    'not_regex' => ' :attribute स्वरूप अमान्य है।',
    'numeric' => ' :attribute एक संख्या होनी चाहिए।',
    'password' => [
        'letters' => ' :attribute में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ' :attribute में कम से कम एक अपरकेस और एक लोअरकेस अक्षर होना चाहिए।',
        'numbers' => ' :attribute में कम से कम एक संख्या होना चाहिए।',
        'symbols' => ' :attribute में कम से कम एक चिन्ह होना चाहिए।',
        'uncompromised' => 'दिया गया :attribute एक डेटा लीक में पाया गया है। कृपया एक अलग :attribute चुनें।',
    ],
    'present' => 'फ़ील्ड :attribute मौजूद होना चाहिए।',
    'prohibited' => 'फ़ील्ड :attribute की अनुमति नहीं है।',
    'prohibited_if' => 'फ़ील्ड :attribute की अनुमति नहीं है जब :other :value हो।',
    'prohibited_unless' => 'फ़ील्ड :attribute की अनुमति नहीं है जब तक :other :values में न हो।',
    'prohibits' => 'फ़ील्ड :attribute :other को मौजूद होने से रोकता है।',
    'regex' => 'फ़ील्ड :attribute का प्रारूप अमान्य है।',
    'required' => 'फ़ील्ड :attribute आवश्यक है।',
    'required_array_keys' => 'फ़ील्ड :attribute में निम्नलिखित प्रविष्टियाँ होनी चाहिए: :values।',
    'required_if' => 'फ़ील्ड :attribute आवश्यक है जब :other :value हो।',
    'required_if_accepted' => 'फ़ील्ड :attribute आवश्यक है जब :other स्वीकार किया गया हो।',
    'required_unless' => 'फ़ील्ड :attribute आवश्यक है जब तक :other :values में न हो।',
    'required_with' => 'फ़ील्ड :attribute आवश्यक है जब :values मौजूद हो।',
    'required_with_all' => 'फ़ील्ड :attribute आवश्यक है जब :values मौजूद हों।',
    'required_without' => 'फ़ील्ड :attribute आवश्यक है जब :values मौजूद न हो।',
    'required_without_all' => 'फ़ील्ड :attribute आवश्यक है जब :values में से कोई भी मौजूद न हो।',
    'same' => ':attribute और :other मेल खाना चाहिए।',
    'size' => [
        'array' => ':attribute में :size आइटम होने चाहिए।',
        'file' => ':attribute :size किलोबाइट का होना चाहिए।',
        'numeric' => ':attribute :size होना चाहिए।',
        'string' => ':attribute :size अक्षरों का होना चाहिए।',
    ],
    'starts_with' => ':attribute को निम्नलिखित में से किसी एक के साथ शुरू होना चाहिए: :values।',
    'string' => ':attribute एक स्ट्रिंग होना चाहिए।',
    'timezone' => ':attribute एक वैध समय क्षेत्र होना चाहिए।',
    'unique' => ':attribute पहले से ही लिया जा चुका है।',
    'uploaded' => ':attribute अपलोड करने में विफल रहा।',
    'url' => ':attribute एक वैध यूआरएल होना चाहिए।',
    'uuid' => ':attribute एक वैध यूयूआईडी होना चाहिए।',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'कस्टम-मैसेज',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'location_url' => 'स्थान यूआरएल',
        'service_url' => 'सेवा यूआरएल',
        'name' => 'नाम',
        'email' => 'ईमेल',
        'phone' => 'फोन',
        'message' => 'संदेश',
        'Password' => 'पासवर्ड',
        'expire_at' => 'समाप्ति समय',
        'current_password' => 'वर्तमान पासवर्ड',
        'new_password' => 'नया पासवर्ड',
        'confirm_password' => 'पासवर्ड की पुष्टि',
        'password' => 'पासवर्ड',
        'password_confirmation' => 'पासवर्ड की पुष्टि',
        'video_file' => 'वीडियो फाइल',
        'audio_file' => 'ऑडियो फ़ाइल',
        'gallery_upload_file' => 'गैलरी अपलोड फ़ाइल',
        'image' => 'छवि',
        'link' => 'लिंक',
        'amount' => 'राशि',
        'placed' => 'भेजा गया',
        'short_code' => 'शॉर्ट कोड',
        'occupation' => 'व्यवसाय',
        'ecard-logo' => 'ईकार्ड लोगो',
    ],

    'coupon_code' => [
        'not_found' => 'कूपन कोड नहीं मिला',
        'expired' => 'यह कूपन कोड समाप्त हो चुका है',
    ],

];

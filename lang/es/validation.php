<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted' => ':attribute අවබෝධ කර ගැනීම අවශ්‍යයි.',
    'active_url' => ':attribute වලංගු URL එකක් නොවේ.',
    'after' => ':attribute :date තාරික් හෝ ඊට පසු දිනයක් විය යුතුයි.',
    'after_or_equal' => ':attribute :date තාරික් හෝ ඊට සමාන දිනයක් විය යුතුයි.',
    'alpha' => ':attribute හි සියලුම අකුරු පමණක් අඩංගු විය යුතුයි.',
    'alpha_dash' => ':attribute හි අකුරු, සංඛ්‍යා හා හයිෆන් පමණක් අඩංගු විය යුතුයි.',
    'alpha_num' => ':attribute හි අකුරු හා සංඛ්‍යා පමණක් අඩංගු විය යුතුයි.',
    'array' => ':attribute එකක් පටිගත කිරීම විය යුතුයි.',
    'before' => ':attribute :date තාරික් හෝ ඊට පෙර දිනයක් විය යුතුයි.',
    'before_or_equal' => ':attribute :date තාරික් හෝ ඊට සමාන දිනයක් විය යුතුයි.',
    'between' => [
        'numeric' => ':attribute :min - :max අතර අගයක් විය යුතුයි.',
        'file' => ':attribute ගමන් :min - :max කිලොබයිට් අතර පරිමාණයක් විය යුතුයි.',
        'string' => ':attribute :min - :max අකුරු අතර විය යුතුයි.',
        'array' => ':attribute :min - :max අයිතම අඩංගු විය යුතුයි.',
    ],
    'boolean' => ':attribute ක්ෂේමය සත්‍ය හෝ අසත්‍ය විය යුතුයි.',
    'confirmed' => ':attribute හි තහවුරු කිරීම නොගැලපේ.',
    'date' => ':attribute වලංගු දිනයක් නොවේ.',
    'date_format' => ':attribute :format ආකෘතියට නොගැලපේ.',
    'different' => ':attribute සහ :other වෙනස් විය යුතුයි.',
    'digits' => ':attribute :digits අංක ගණනක් විය යුතුයි.',
    'digits_between' => ':attribute :min සහ :max අතර අංක ගණනක් විය යුතුයි.',
    'dimensions' => ':attribute රූපයේ ප්‍රමාණ වලංගු නොවේ.',
    'distinct' => ':attribute ක්ෂේමය අනුකූල අගයක් පවා අඩංගු වේ.',
    'email' => ':attribute වලංගු ඊමේල් ලිපිනයක් නොවේ.',
    'exists' => ':attribute වලංගු නොවේ.',
    'file' => ':attribute ක්ෂේමය ගොනුවක් විය යුතුයි.',
    'filled' => ':attribute ක්ෂේමය අනිවාර්ය වේ.',
    'image' => ':attribute රූපයක් විය යුතුයි.',
    'in' => ':attribute වලංගු නොවේ.',
    'in_array' => ':attribute ක්ෂේමය :other හි අඩංගු නොවේ.',
    'integer' => ':attribute ගණනක් පූර්ණ සංඛ්‍යා විය යුතුයි.',
    'ip' => ':attribute වලංගු IP ලිපිනයක් විය යුතුයි.',
    'ipv4' => ':attribute වලංගු IPv4 ලිපිනයක් විය යුතුයි.',
    'ipv6' => ':attribute වලංගු IPv6 ලිපිනයක් විය යුතුයි.',
    'json' => ':attribute ක්ෂේමය වලංගු JSON ස්ට‍්‍රිං එකක් විය යුතුයි.',
    'max' => [
        'numeric' => ':attribute :max ට වඩා වඩා අගයක් විය යුතුයි.',
        'file' => ':attribute :max කිලොබයිට් ට වඩා බරක් නොවිය යුතුයි.',
        'string' => ':attribute :max අකුරු ට වඩා දිග නොවිය යුතුයි.',
        'array' => ':attribute :max අයිතම ගණනක් නොවිය යුතුයි.',
    ],
    'mimes' => ':attribute ගොනුව :values ආකෘතියෙන් විය යුතුයි.',
    'mimetypes' => ':attribute ගොනුව :values ආකෘතියෙන් විය යුතුයි.',
    'min' => [
        'numeric' => ':attribute ප්‍රමාණය වඩාත්ම :min විය යුතුයි.',
        'file' => ':attribute ගොනුවේ ප්‍රමාණය :min කිලොබයිට් ට අඩු නොවිය යුතුයි.',
        'string' => ':attribute හි :min අකුරු තිබිය යුතුයි.',
        'array' => ':attribute හි :min අයිතම තිබිය යුතුයි.',
    ],
    'not_in' => ':attribute වලංගු නොවේ.',
    'numeric' => ':attribute සංඛ්‍යා ගණනක් විය යුතුයි.',
    'present' => ':attribute ක්ෂේමය පවතිනවාය.',
    'regex' => ':attribute ආකෘතිය වලංගු නොවේ.',
    'required' => ':attribute ක්ෂේමය අනිවාර්යයි.',
    'required_if' => ':attribute ක්ෂේමය අවශ්‍යයි, :other :value වන විට.',
    'required_unless' => ':attribute ක්ෂේමය අනිවාර්යයි, :other :values හි අඩංගු නොවන විට.',
    'required_with' => ':attribute ක්ෂේමය :values පවතින විට අනිවාර්යයි.',
    'required_with_all' => ':attribute ක්ෂේමය :values පවතින විට අනිවාර්යයි.',
    'required_without' => ':attribute ක්ෂේමය :values නොපවතින විට අනිවාර්යයි.',
    'required_without_all' => ':attribute ක්ෂේමය :values හි කිසිවක් නොපවතින විට අනිවාර්යයි.',
    'same' => ':attribute සහ :other එකට ගැලපිය යුතුයි.',
    'size' => [
        'numeric' => ':attribute ප්‍රමාණය :size විය යුතුයි.',
        'file' => ':attribute ගොනුවේ ප්‍රමාණය :size කිලොබයිට් විය යුතුයි.',
        'string' => ':attribute හි :size අකුරු තිබිය යුතුයි.',
        'array' => ':attribute හි :size අයිතම තිබිය යුතුයි.',
    ],
    'string' => ':attribute ක්ෂේමය ස්ට‍්‍රිං එකක් විය යුතුයි.',
    'timezone' => ':attribute වලංගු කාල කලාපයක් විය යුතුයි.',
    'unique' => ':attribute පූර්ව අයදුම් කර ඇත.',
    'uploaded' => ':attribute ලබා දීම අසාර්ථකයි.',
    'url' => ':attribute ආකෘතිය වලංගු නොවේ.',

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
        'password' => [
            'min' => ' :attribute :min අකුරු ගණනක් විය යුතුයි.',
        ],
        'email' => [
            'unique' => ':attribute පෙර ලියාපදිංචි කර ඇත.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'name' => 'නම',
        'username' => 'පරිශීලක නාමය',
        'email' => 'ඊ-තැපැල් ලිපිනය',
        'first_name' => 'මුල් නම',
        'last_name' => 'අවසන් නම',
        'password' => 'මුරපදය',
        'password_confirmation' => 'මුරපද තහවුරු කිරීම',
        'city' => 'නගරය',
        'country' => 'රට',
        'address' => 'ලිපිනය',
        'phone' => 'දුරකථන අංකය',
        'mobile' => 'ජංගම දුරකථනය',
        'age' => 'වයස',
        'sex' => 'ස්ත්‍රී/පුරෂ',
        'gender' => 'ලින්ග',
        'year' => 'වසර',
        'month' => 'මාසය',
        'day' => 'දිනය',
        'hour' => 'පැය',
        'minute' => 'මිනිට්',
        'second' => 'තත්පරය',
        'title' => 'ශීර්ෂය',
        'content' => 'අන්තර්ගතය',
        'body' => 'ශාරීරික වශයෙන්',
        'description' => 'විස්තරය',
        'excerpt' => 'ආශ්‍රිතය',
        'date' => 'දිනය',
        'time' => 'වේලාව',
        'subject' => 'විෂය',
        'message' => 'පණිවුඩය',
    ],

];


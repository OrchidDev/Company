<?php

function translate_section_type($word)
{
    switch ($word) {
        case 'slider': return 'اسلایدر'; break;
        case 'features': return 'ویژگی ها'; break;
        case 'service': return 'خدمات ما'; break;
        case 'pricing': return 'تعرفه ها'; break;
        case 'team': return 'تیم ما'; break;
        case 'faq': return 'پرسش و پاسخ'; break;
        case 'blog': return 'وبلاگ'; break;
        default: return $word; break;
    }
}

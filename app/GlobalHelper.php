<?php


function convertLanguageToEnglish ($object){

         return  is_array(Json_decode($object, true)) && Json_decode($object, true)['en'] ? Json_decode($object, true)['en'] : '';
 }


function convertLanguageToArabic ($object){

         return  is_array(Json_decode($object, true)) && Json_decode($object, true)['ar'] ? Json_decode($object, true)['ar'] : '';
 }

function convertLanguageToLocale ($object){
    if(is_array(Json_decode($object, true))){
     if (app()->getLocale() === 'en' && $object) {
         return Json_decode($object, true)['en'];
     }elseif($object){
         return Json_decode($object, true)['ar'];
     }
}




 }

function productClassifications(){
    return \App\Models\ProductClassification::latest()->get();
}

function constructionsClassifications(){
    return \App\Models\ConstructionClassification::latest()->get();
}


function mainPage(){
    return \App\Models\MainPage::latest()->first();
}

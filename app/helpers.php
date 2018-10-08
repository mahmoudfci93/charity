<?php
function contact()
{
    return
        [
            '1' => 'Like',
            '2' => 'Suggestion',
            '3' => 'Problem',
            '4' => 'Inquiry'
        ];
}
function unreadMessages()
{
    return \App\Contact::where('view',0)->get();
}
function countUnreadMessages()
{
    return \App\Contact::where('view',0)->count();
}
function setActive($array,$class="active")
{
    if (!empty($array)){
        $seg_array = [];
        foreach ($array as $key=>$url){
            if (Request::segment($key+1) == $url){
                $seg_array[] = $url;
            }
        }
        if (count($seg_array) == count(Request::segments())){
            if (isset($seg_array[0])){
                return $class;
            }

        }
    }
}
function places()
{
    return[

      "c-1"=>   "Al-Abwa",
      "c-2"=>       "Al Artaweeiyah",
      "c-3"=>         "Badr",
      "c-4"=>    "Baljurashi",
      "c-5"=>      "Bisha"    ,
      "c-6"=>       "Bareg"   ,
      "c-7"=>        "Buraydah",
      "c-8"=>         "Al Bahah",
      "c-9"=>          "Buq a",
      "c-10"=>          "Dammam",
      "c-12"=>          "Dhahran",
      "c-13"=>          "Dhurma",
      "c-14"=>          "Dahaban",
      "c-15"=>          "Diriyah",
      "c-16"=>          "Duba",
      "c-17"=>          "Dumat Al-Jandal",
      "c-18"=>          "Dawadmi",
      "c-19"=>          "Farasan city",
      "c-20"=>          "Gatgat",
      "c-21"=>          "Gerrha",
      "c-22"=>          "Gurayat",
      "c-23"=>          "Al-Gweiiyyah",
      "c-24"=>          "Hautat Sudair",
      "c-25"=>          "Habala",
      "c-26"=>          "Hajrah",
      "c-27"=>          "Haql",
      "c-28"=>          "Al-Hareeq",
      "c-29"=>          "Harmah",
      "c-30"=>         "Ha'il",
      "c-31"=>          "Hotat Bani Tamim",
      "c-32"=>          "Hofuf",
      "c-33"=>          "Huraymila",
      "c-34"=>          "Hafr Al-Batin",
       "c-35"=>         "Jabal Umm al Ru-us",
       "c-36"=>         "Jalajil",
       "c-37"=>         "Al Jawf",
       "c-38"=>         "Jeddah",
       "c-39"=>          "Jizan",
       "c-40"=>         "Jizan Economic City",
        "c-41"=>        "Jubail",
        "c-42"=>        "Al Jafer",
        "c-43"=>        "Khafji",
        "c-44"=>        "Khaybar",
        "c-45"=>        "King Abdullah Economic City",
        "c-46"=>        "hamis Mushayt",
        "c-47"=>        "Al Kharj",
        "c-48"=>        "Knowledge Economic City , Medina",
         "c-49"=>       "Khobar",
         "c-50"=>       "Al-Khutt",

];
 }
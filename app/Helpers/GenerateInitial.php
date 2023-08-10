<?php

namespace App\Helpers;

class GenerateInitial
{
   /**
    * Generate initals
    */
   public static function generate(array $arrays): array
   {
      $initials = [];

      foreach ($arrays as $array) {
         $words = explode(' ', $array);
         $initial = '';

         foreach ($words as $word) {
            $initial .= strtoupper($word[0]);
         }

         $initials[] = $initial;
      }

      return $initials;
   }
}

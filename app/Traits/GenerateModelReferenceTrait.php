<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait GenerateModelReferenceTrait
{
    public static function generateReference()
    {
        $reference = Str::uuid();
        $exising_reference = self::where('reference', $reference);

        if ($exising_reference) {
            return self::generateReference();
        }
        return $reference;
    }
}

<?php
namespace App\Utilities;

use App\Models\Invite;

class SharingTypes
{

    private static $values = [
        "INVITED_USER" => [
            "class" => Invite::class,
            "component" => "sharings.invited-user",
            "label" => "Invited User"
        ]
    ];

    public static function getValues() {

        return self::$values;
    }


    public static function getSectedSharingType($selectedSharing) {

        $foundedSharingType = null;

        foreach (self::$values as $sharingType => $sharing) {

            if ($selectedSharing->sharing_type_type === $sharing["class"]) {
                $foundedSharingType = $sharingType;
            }

        }

        return $foundedSharingType;

    }

}


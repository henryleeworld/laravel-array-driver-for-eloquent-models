<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class User extends Model
{
    use Sushi;

    public $incrementing = false;

    protected $keyType = "string";

    public function getRows()
    {
        return [
            [
                "name" => __("Suletta Mercury"),
                "cv" => __("Kana Ichinose"),
                "affiliation" => __("Earth House"),
                "mobile_suit" => __("GUNDAM AERIAL"),
                "data" => __(
                    "A second-year student in the piloting department, who transferred to the school from Mercury. Suletta is timid and somewhat lacks communication skills. She is the pilot of the Gundam Aerial developed on Mercury."
                ),
            ],
            [
                "name" => __("Miorine Rembran"),
                "cv" => __("Lynn"),
                "affiliation" => null,
                "mobile_suit" => null,
                "data" => __(
                    'An attractive and academically distinguished second-year student in the management strategy department. Miorine is the only daughter of Delling Rembran, the president of the Benerit Group and chairman of the school\'s board. She has a strong rebellious feeling towards her father.'
                ),
            ],
            [
                "name" => __("Guel Jeturk"),
                "cv" => __("Yohei Azakami"),
                "affiliation" => __("Jeturk House"),
                "mobile_suit" => __('GUEL\'S DILANZA'),
                "data" => __(
                    'An heir to Jeturk Heavy Machinery, one of the group\'s three branches, and a third-year student in the piloting department. Guel has a rough temperament and is quick to anger. As the ace pilot of Jeturk House, he has absolute confidence in his own skills.'
                ),
            ],
            [
                "name" => __("Elan Ceres"),
                "cv" => __("Natsuki Hanae"),
                "affiliation" => __("Peil House"),
                "mobile_suit" => __("GUNDAM PHARACT"),
                "data" => __(
                    'The top pilot backed by Peil Technologies, one of the group\'s three branches. A third-year student in the piloting department. Elan is a taciturn and solitary person, who doesn\'t open his heart to anyone in school. He has an interest to Suletta'
                ),
            ],
            [
                "name" => __("Shaddiq Zenelli"),
                "cv" => __("Makoto Furukawa"),
                "affiliation" => __("Grassley House"),
                "mobile_suit" => __("MICHAELIS"),
                "data" => __(
                    'An adopted child of the CEO of Grassley Defense Systems, one of the group\'s three branches. A third-year student in the piloting department who leads Grassley House. Shaddiq is a smooth-talking ladies\' man with a carefree manner. Although still a student Shaddiq has shown his skill in business too, he is a candidate for next generation executive.'
                ),
            ],
        ];
    }
}

<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Response::class, function (Faker $faker) {

  //Dummy Question (Structure from TypeForm)
  $questions = array (
    'definition' =>
    array (
      'id' => 'Q5X9QV',
      'title' => 'Are your hotel F&B operations as slick as your guest services?',
      'fields' =>
      array (
        0 =>
        array (
          'id' => 'OuNSOZSCnkij',
          'title' => 'Can you control F&B product price changes across your estate with a single click from head office?',
          'type' => 'yes_no',
          'ref' => '51d8cbce-782e-40fc-a04e-20edd4bf0979',
          'properties' =>
          array (
          ),
        ),
      ),
    ),
  );

  //Dummy Answer (Structure from TypeForm)
  $answers = array (
    'answers' =>
    array (
      0 =>
      array (
        'type' => 'boolean',
        'boolean' => true,
        'field' =>
        array (
          'id' => 'OuNSOZSCnkij',
          'type' => 'yes_no',
          'ref' => '51d8cbce-782e-40fc-a04e-20edd4bf0979',
        ),
      ),
    ),
  );

    return [
      'questions' => json_encode($questions["definition"]["fields"]),
      'answers' => json_encode($answers["answers"]),
      'typeform_id' => '51d8cbce',
      'response_id' => $faker->regexify('[A-Za-z0-9]{8}')
    ];

});

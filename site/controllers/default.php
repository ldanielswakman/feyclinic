<?php
use Uniform\Form;

return function ($kirby) {

  $form = new Form([
    'name' => [
        'rules' => ['required', 'min' => 3, 'max' => 200],
        'message' => 'Vul een geldige naam in (minimaal 3 karakters)',
    ],
    'email' => [
        'rules' => ['required', 'email'],
        'message' => 'Vul een geldig e-mailadres in',
    ],
    'text' => [
        'rules' => ['required', 'min' => 3, 'max' => 3000],
        'message' => 'Minimaal 3 en maximaal 3000 karakters toegestaan',
    ],
  ]);

  if ($kirby->request()->is('POST')) {
      $form->emailAction([
          'to' => 'info@feyclinic.nl',
          'from' => 'feyclinic-contact@feyclinic.nl',
      ])
      ->logAction([
          'file' => kirby()->roots()->site().'/messages.log'
      ]);;
  }

  return compact('form');

};

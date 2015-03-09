<?php

return function($site, $pages, $page) {

  $alert = null;

  if(get('submit')) {

    $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'text'  => get('text')
    );

    $rules = array(
      'name'  => array('required', 'min' => 3),
      'email' => array('required', 'email'),
      'text'  => array('required', 'min' => 3, 'max' => 3000)
    );

    $messages = array(
      'name'  => 'Vul een geldige naam in (minimaal 3 karakters)',
      'email' => 'Vul een geldig e-mailadres in',
      'text'  => 'Minimaal 3 en maximaal 3000 karakters toegestaan'
    );

    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {

      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);

      // build the email
      $email = email(array(
        'to'      => 'info@feyclinic.nl',
        'from'    => 'Feyclinic-Contact@feyclinic.nl',
        'subject' => 'Informatieverzoek van ' . $data['name'],
        'replyTo' => $data['email'],
        'body'    => $body
      ));

      // try to send it and redirect to the
      // 'sent' status if it worked
      if($email->send()) {
        go('/contact/status:sent#contact');
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }

    }

  }

  return compact('alert');

};
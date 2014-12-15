<?php

use Nette\Forms\Form;

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../src/setup.php';

$form = new Form;

$firstName = $form->addText('firstName', 'Firstname');
$firstName->setRequired();
$firstName->addRule(Form::MIN_LENGTH, null, 4);

$lastName = $form->addText('lastName', 'Lastname');
$lastName->setRequired();
$lastName->addRule(Form::MIN_LENGTH, null, 4);

$gender = $form->addSelect('gender', 'Gender', [
    'm' => 'Male',
    'f' => 'Female',
]);
$gender->setRequired();

$form->addCheckbox('newsletter', 'Newsletter');

$form->addSubmit('send');

if ($form->isSubmitted() && $form->isValid()) {
    var_dump('VALID', $form->getValues(true));
    die;
}

echo $twig->render('index.html.twig', array(
    'form' => $form,
));

<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cabag_loginas".
 *
 * Auto generated 14-11-2022 12:21
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['cabag_loginas'] = [
  'title' => 'CAB Login As',
  'description' => 'Within the backend you have a button in the fe_user table and in the upper right corner to quickly login as this fe user in frontend.',
  'category' => 'be',
  'version' => '5.0.2',
  'state' => 'stable',
  'uploadfolder' => true,
  'clearcacheonload' => true,
  'author' => 'Dimitri Koenig, Tizian Schmidlin, Lorenz Ulrich, Thomas Löffler',
  'author_email' => 'dk@cabag.ch, st@cabag.ch, info@visol.ch, loeffler@spooner-web.de',
  'author_company' => '',
  'constraints' =>
  [
    'depends' => [
      'typo3' => '11.5.17-11.5.99',
    ],
    'conflicts' => [],
    'suggests' => [],
  ],
];

<?php
$listarray = array ( array ( 'label' => 'Datenbank',
                             'name' => 'dbase',
                             'width' => 20, 
                             'type' => 'selectid',
                             'dbtable' => 'tbldatabase',
                             'seldbfield' => 'fldbemerk',
                             'seldbindex' => 'fldindex',
                             'dbfield' => 'fldid_database' ),
                     array ( 'label' => 'Bezeichnung',
                             'name' => 'bez', 
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldbez' ),
                     array ( 'label' => 'Typ',
                             'name' => 'typ', 
                             'width' => 100, 
                             'type' => 'text',
                             'dbfield' => 'fldtyp' ));

$pararray = array ( 'headline' => 'Tables',
                    'dbtable' => 'tbltable',
                    'orderby' => '',
                    'strwhere' => '',
                    'fldindex' => 'fldindex');
?>
<?php
//setting up a test connection to make sure it can work.

$ldapConn = ldap_connect('dc-1-dc1.example.ca');//need our ad server path

// Set some ldap options for talking to AD
ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldapConn, LDAP_OPT_REFERRALS, 0);

//this is the LDAP admin account with access
$adminUsername = 'ldapAdmin@example.ca';
$adminPassword = 'strongpass';


// Bind as a domain admin if they've set it up
$ldap_bind = ldap_bind($ldapConn, $adminUsername, $adminPassword);

//example path for searching
$search = ldap_search($ldapConn, "cn=Example Staff,ou=Groups,ou=Staff,ou=Domain Objects,dc=example,dc=ca", "(cn=*)");

//example get command
$info = ldap_get_entries($ldapConn, $search);

echo 'ldap conn';
var_dump($ldapConn);

echo 'ldap bind';
var_dump($ldap_bind);

echo 'seach var';
var_dump($search);

echo 'search info';
var_dump($info);

ldap_unbind($ldapConn);
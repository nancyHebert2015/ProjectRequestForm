<?php

return array(
    'account_suffix'        =>  "uottawa.ca",
    //"@domain.local",
    'domain_controllers'    =>  array("127.0.0.1"), // Load balancing domain controllers
    'base_dn'               =>  'DC=uottawa,DC=local',
    'admin_username'        =>  'nancyhebert',    // Just needs to be an valid account to query other users if they exists
    'admin_password'        =>  'uoccc'
);
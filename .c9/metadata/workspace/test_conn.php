{"filter":false,"title":"test_conn.php","tooltip":"/test_conn.php","undoManager":{"mark":82,"position":82,"stack":[[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":34,"column":23},"action":"insert","lines":["<?php","","$ldapConn = ldap_connect('dc-1-dc1.example.ca');","","// Set some ldap options for talking to AD","ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);","ldap_set_option($ldapConn, LDAP_OPT_REFERRALS, 0);","","//this is the LDAP admin account with access","$adminUsername = 'ldapAdmin@example.ca';","$adminPassword = 'strongpass';","","","// Bind as a domain admin if they've set it up","$ldap_bind = ldap_bind($ldapConn, $adminUsername, $adminPassword);","","//example path for searching","$search = ldap_search($ldapConn, \"cn=Example Staff,ou=Groups,ou=Staff,ou=Domain Objects,dc=example,dc=ca\", \"(cn=*)\");","","//example get command","$info = ldap_get_entries($ldapConn, $search);","","echo 'ldap conn';","var_dump($ldapConn);","","echo 'ldap bind';","var_dump($ldap_bind);","","echo 'seach var';","var_dump($search);","","echo 'search info';","var_dump($info);","","ldap_unbind($ldapConn);"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":48},"end":{"row":2,"column":49},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":49},"end":{"row":2,"column":50},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":50},"end":{"row":2,"column":51},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":51},"end":{"row":2,"column":52},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":52},"end":{"row":2,"column":53},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":53},"end":{"row":2,"column":54},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":54},"end":{"row":2,"column":55},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":55},"end":{"row":2,"column":56},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":56},"end":{"row":2,"column":57},"action":"insert","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":57},"end":{"row":2,"column":58},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":58},"end":{"row":2,"column":59},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":59},"end":{"row":2,"column":60},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":60},"end":{"row":2,"column":61},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":61},"end":{"row":2,"column":62},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":62},"end":{"row":2,"column":63},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":63},"end":{"row":2,"column":64},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":64},"end":{"row":2,"column":65},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":65},"end":{"row":2,"column":66},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":66},"end":{"row":2,"column":67},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":67},"end":{"row":2,"column":68},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":68},"end":{"row":2,"column":69},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":69},"end":{"row":2,"column":70},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":70},"end":{"row":2,"column":71},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":71},"end":{"row":2,"column":72},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":72},"end":{"row":2,"column":73},"action":"insert","lines":["h"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["/"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":8},"end":{"row":1,"column":9},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":9},"end":{"row":1,"column":10},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":10},"end":{"row":1,"column":11},"action":"insert","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":11},"end":{"row":1,"column":12},"action":"insert","lines":["p"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":12},"end":{"row":1,"column":13},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":13},"end":{"row":1,"column":14},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":14},"end":{"row":1,"column":15},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":15},"end":{"row":1,"column":16},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":16},"end":{"row":1,"column":17},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":17},"end":{"row":1,"column":18},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":18},"end":{"row":1,"column":19},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":19},"end":{"row":1,"column":20},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":20},"end":{"row":1,"column":21},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":21},"end":{"row":1,"column":22},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":22},"end":{"row":1,"column":23},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":23},"end":{"row":1,"column":24},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":24},"end":{"row":1,"column":25},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":25},"end":{"row":1,"column":26},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":26},"end":{"row":1,"column":27},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":27},"end":{"row":1,"column":28},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":28},"end":{"row":1,"column":29},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":29},"end":{"row":1,"column":30},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":30},"end":{"row":1,"column":31},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":31},"end":{"row":1,"column":32},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":32},"end":{"row":1,"column":33},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":33},"end":{"row":1,"column":34},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":34},"end":{"row":1,"column":35},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":35},"end":{"row":1,"column":36},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":36},"end":{"row":1,"column":37},"action":"insert","lines":["k"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":37},"end":{"row":1,"column":38},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":38},"end":{"row":1,"column":39},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":39},"end":{"row":1,"column":40},"action":"insert","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":40},"end":{"row":1,"column":41},"action":"insert","lines":["u"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":41},"end":{"row":1,"column":42},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":42},"end":{"row":1,"column":43},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":43},"end":{"row":1,"column":44},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":44},"end":{"row":1,"column":45},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":45},"end":{"row":1,"column":46},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":46},"end":{"row":1,"column":47},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":47},"end":{"row":1,"column":48},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":48},"end":{"row":1,"column":49},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":49},"end":{"row":1,"column":50},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":50},"end":{"row":1,"column":51},"action":"insert","lines":[" "]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":51},"end":{"row":1,"column":52},"action":"insert","lines":["w"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":52},"end":{"row":1,"column":53},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":53},"end":{"row":1,"column":54},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":54},"end":{"row":1,"column":55},"action":"insert","lines":["k"]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":55},"end":{"row":1,"column":56},"action":"insert","lines":["."]}]}],[{"group":"doc","deltas":[{"start":{"row":1,"column":56},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":4,"column":0},"end":{"row":4,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1420563495931,"hash":"ac14ba2d86a03ab3e587186e985389b1dc105093"}
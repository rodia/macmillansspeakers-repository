	��Q<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:403:"SELECT m.field_name, c.type, w.meta_value, m.group_count, m.field_count, c.options FROM rscvd7e_mf_post_meta m JOIN rscvd7e_mf_custom_fields c ON m.field_name = c.name JOIN rscvd7e_mf_custom_groups g ON c.custom_group_id = g.id  JOIN rscvd7e_postmeta w ON w.meta_id = m.meta_id WHERE m.post_id = 982 AND g.name = 'reviews' AND w.meta_value <> '' ORDER BY m.group_count,c.display_order, m.field_count ASC";s:11:"last_result";a:0:{}s:8:"col_info";a:6:{i:0;O:8:"stdClass":13:{s:4:"name";s:10:"field_name";s:5:"table";s:1:"m";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:1;O:8:"stdClass":13:{s:4:"name";s:4:"type";s:5:"table";s:1:"c";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:0;s:4:"type";s:6:"string";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:2;O:8:"stdClass":13:{s:4:"name";s:10:"meta_value";s:5:"table";s:1:"w";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:3;O:8:"stdClass":13:{s:4:"name";s:11:"group_count";s:5:"table";s:1:"m";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:4;O:8:"stdClass":13:{s:4:"name";s:11:"field_count";s:5:"table";s:1:"m";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:1;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:1;s:4:"blob";i:0;s:4:"type";s:3:"int";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}i:5;O:8:"stdClass":13:{s:4:"name";s:7:"options";s:5:"table";s:1:"c";s:3:"def";s:0:"";s:10:"max_length";i:0;s:8:"not_null";i:0;s:11:"primary_key";i:0;s:12:"multiple_key";i:0;s:10:"unique_key";i:0;s:7:"numeric";i:0;s:4:"blob";i:1;s:4:"type";s:4:"blob";s:8:"unsigned";i:0;s:8:"zerofill";i:0;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}
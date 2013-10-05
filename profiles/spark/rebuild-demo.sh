#!/bin/bash
VERSION="8.x"
drush() {
  /home/sparkdrupal/drush/drush "$@"
}

# Re-install.
cd ~/spark.webchick.net/$VERSION
drush si spark --account-name=sparks --account-pass="[REDACTED]" -y
drush cset system.site name "Spark $VERSION Demo" -y

# Create author role + permissions.
drush eval "
\$author_role = new stdClass();
\$author_role->rid = 'author';
\$author_role->name = 'Author';
\$author_role->weight = 1;
user_role_save(\$author_role);
"
drush eval "
user_role_grant_permissions('author', array(
  'administer layouts', 'access content overview', 'edit any article content', 'access administration pages', 'access toolbar'
));
"

# Create demo user.
drush user-create sparkles --password=sparkItUp
drush user-add-role author sparkles

# Create a custom block with user info in it.
drush eval "
\$bid = db_insert('block_custom')
  ->fields(array(
    'body' => 'Demo user: sparkles, password: sparkItUp',
    'info' => 'Demo user',
    'format' => 'filtered_html',
  ))
  ->execute();

db_insert('block')
  ->fields(array(
    'module' => 'block',
    'delta' => \$bid,
    'theme' => 'bartik',
    'status' => 1,
    'weight' => 0,
    'region' => 'featured',
    'pages' => '',
    'cache' => DRUPAL_CACHE_GLOBAL,
  ))
  ->execute();
"

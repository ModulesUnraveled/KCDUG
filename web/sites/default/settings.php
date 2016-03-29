<?php

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'DHPR_FiQLA_wnjmbt01xPOhvLMEEFaW8irBrDma0bKc3CeCeCl5HuozTnV9dBwgu1xdRjyOvJQ';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Install profile
 */
$settings['install_profile'] = 'standard';

/**
 * Location of the site configuration files.
 */
$config_directories['sync'] = '../configs';

/**
 * Load local development override configuration, if available.
 *
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}

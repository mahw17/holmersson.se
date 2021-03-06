<?php

namespace Anax\Cache;

/**
 * File based cache.
 *
 */
class CFileCache
{
    use \Anax\TConfigure;



    /**
     * Create a key to use for the cache.
     *
     * @param string $class name of the class, including
     *                      namespace.
     * @param string $id    unique id for item in each class.
     *
     * @return string the filename.
     */
    public function createKey($class, $id)
    {
        return str_replace('\\', '-', $class) . '#' . $id;
    }



    /**
     * Generate a filename for the cached object.
     *
     * @param string $key to the cached object.
     *
     * @return string the filename.
     */
    public function filename($key)
    {
        return $this->config['basepath'] . '/' . $key;
    }



    /**
     * Get an item from the cache if available.
     *
     * @param string  $key to the cached object.
     * @param boolean $age check the age or not, defaults to
     *                     false.
     *
     * @return mixed the cached object or false if it has aged
     *               or null if it does not exists.
     */
    public function get($key, $age = false)
    {
        $file = $this->filename($key);

        if (is_file($file)) {
            if ($age) {
                $age = filemtime($file) + $this->config['age'] > time();
            }

            if (!$age) {
                // json
                // text
                return unserialize(file_get_contents($file));
            }
            return false;
        }
        return null;
    }



    /**
     * Put an item to the cache.
     *
     * @param string $key  to the cached object.
     * @param mixed  $item the object to be cached.
     *
     * @throws Exception if failing to write to cache.
     *
     * @return void
     */
    public function put($key, $item)
    {
        $file = $this->filename($key);

                // json
        // text
        if (!file_put_contents($file, serialize($item))) {
            throw new \Exception(
                t("Failed writing cache object '!key'.", [
                    '!key' => $key
                ])
            );
        }
    }



    /**
     * Prune a item from cache.
     *
     * @param string $key to the cached object.
     *
     * @return void
     */
    public function prune($key)
    {
        @unlink($this->filename($key));
    }



    /**
     * Prune all items from cache.
     *
     * @return int number of items removed.
     */
    public function pruneAll()
    {
        $files = glob($this->config['basepath'] . '/*');
        $items = count($files);
        array_map('unlink', $files);
        return $items;
    }
}

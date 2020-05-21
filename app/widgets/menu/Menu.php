<?php


namespace app\widgets\menu;


use myframework\App;
use myframework\Cache;

class Menu {
    protected $data;
    protected $tree;
    protected $menuHtml;
    protected $tpl;
    protected $container = 'ul';
    protected $class = '';
    protected $table = 'category';
    protected $cache = '3600';
    protected $cacheKey = 'myframework_menu';
    protected $attrs = [];
    protected $prepend = '';

    public function __construct($options = []) {
        $this->tpl = __DIR__ . '/menu_tpl/menu.php';
        $this->getOptions($options);
        $this->run();
    }

    protected function getOptions($options) {
        foreach ($options as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }

    protected function run() {
        $cache = Cache::instance();
        $this->menuHtml = $cache->get($this->cacheKey);

        if (!$this->menuHtml) {
            $this->data = App::$app->getProperty('cats');
            if (!$this->data) {
                $this->data = $cats = \R::getAssoc("SELECT * FROM category");
            }
            $this->tree = $this->getTree();
            $this->menuHtml = $this->getMenuHtml($this->tree);
            if ($this->cache) {
                $cache->set($this->cacheKey, $this->menuHtml, $this->cache);
            }
        }
        $this->output();
    }
    protected function output() {
        echo "<{$this->container} class={$this->class}>";
            echo $this->menuHtml;
        echo "</{$this->container}>";
    }

    protected function getTree() {
        $tree = [];
        $data = $this->data;

        foreach ($data as $id => &$node) {
            if (!$node['parent_id']) {
                $tree[$id] = &$node;
            }  else {
                $data[$node['parent_id']]['childs'][$id] = &$node;
            }
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '', $isChild = false ) {
        $str = '';
        foreach ($tree as $id => $category) {
            $str .= $this->catToTemplate($category, $tab, $id, $isChild);

        }
        return $str;
    }

    protected function catToTemplate($category, $tab, $id, $isChild) {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }


}
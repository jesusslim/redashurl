<?php
/**
 * Created by PhpStorm.
 * User: jesusslim
 * Date: 2018/7/18
 * Time: 下午2:14
 */

namespace redashurl;

class RedashUrl{

    protected $columns;
    protected $rows;

    /**
     * RedashUrl constructor.
     */
    public function __construct()
    {
        $this->columns = [];
        $this->rows = [];
    }

    /**
     * @param $name
     * @param $type
     * @param null $friendly_name
     * @return $this
     */
    public function column($name,$type,$friendly_name = null){
        if (is_null($friendly_name)) $friendly_name = $name;
        $this->columns[] = compact('name','type','friendly_name');
        return $this;
    }

    /**
     * @param $rows
     * @return $this
     */
    public function rows($rows){
        $this->rows = $rows;
        return $this;
    }

    /**
     * @return array
     */
    public function getData(){
        return [
            'columns' => $this->columns,
            'rows' => $this->rows
        ];
    }
}
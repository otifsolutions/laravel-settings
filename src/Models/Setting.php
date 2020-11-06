<?php

namespace OTIFSolutions\Laravel\Settings\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get a value parsed in the type for a given key. Null if not exists
     *
     * @param $key
     * @return mixed|null
     */
    public static function get($key){
        $item = self::where('key',$key)->first();
        if ($item)
            return self::cast($item['value'],$item['type']);
        else
            return null;
    }

    /**
     * Set a value in the settings table.
     * Type can be : 'STRING','BOOL','INT','JSON','DOUBLE'
     * Default Type : 'STRING'
     *
     * @param $key
     * @param $value
     * @param string $type
     *
     */
    public static function set($key, $value, $type = 'STRING'){
        self::updateOrCreate(['key' => $key],['value' => $value,'type' => $type]);
    }
    
    /**
     * Delete Setting from database by key. 
     *
     * @param $key
     * @return bool|null
     */
    public static function delete($key){
        return self::where('key',$key)->delete()
    }

    /**
     * Internal Function to cast a particular type
     *
     * @param $val
     * @param $type
     * @return bool|float|int|mixed
     */
    private static function cast($val, $type){
        switch ($type){
            case 'INT':
                return intval($val);
            case 'BOOL':
                return boolval($val);
            case 'JSON':
                return json_decode($val);
            case 'DOUBLE':
                return floatval($val);
            case 'STRING':
            default:
                return $val;
        }
    }
}

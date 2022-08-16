<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;
    public $table = "systems";

    static function gets()
    {
        $data = self::get();
        $result = array();

        foreach($data as $v)
            $result[$v->conf_field] = $v->conf_val;

        return (object) $result;
    }

    // static function update_multi($newData) {
    //     $data = array();

    //     foreach($newData as $k => $v) {
    //         $data[] = array(
    //             'conf_field' => $k,
    //             'conf_val' => $v
    //         );
    //     }

    //     try {
    //         self::beginTransaction();
            
    //         self::update(['conf_field' => 'desc', 'conf_val' => 'mô tả']);
        
    //         self::commit();
        
    //     } catch (Exception $e) {
    //         self::rollback();
    //     }
    //     // $this->db->trans_start();
    //     // $this->db->update_batch($this->_TABLE, $data, 'conf_field');
    //     // $this->db->trans_complete();

    //     // if($this->db->trans_status())
    //     //     return true;

    //     return false;
    // }
	
}

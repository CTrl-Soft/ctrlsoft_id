<?php

namespace App\Models;

use CodeIgniter\Model;

class MailModel extends Model
{
    protected $table      = 'tmail';
    
    public function getMail($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['id' => $id]);
        }
    }
 
    public function insertMail($data)
    {
        return $this->db->table($this->table)->insert($data);
    }

    public function updateMail($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function deleteMail($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}
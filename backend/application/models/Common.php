<?php if (!defined('BASEPATH')) exit ('No direct script  allow');

class Common extends CI_Model
{

    public function selectData($select = '*', $table, $where = '', $orderBy = '', $groupBy = '')
    {
        try {
            if (empty($table)) {
                return [];
            }

            $this->db->select($select);
            $this->db->from($table);

            if (!empty($where)) $this->db->where($where);
            if (!empty($orderBy)) $this->db->order_by($orderBy);
            if (!empty($groupBy)) $this->db->group_by($groupBy);

            return $this->db->get();
        } catch (\Exception $e) {
            return [];
        }
    }


    function select_where_in($select, $table, $where_in, $in_fld)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where_in($in_fld, $where_in);
        $this->db->group_by($select);
        return $this->db->get();
    }

    public function selectSingleRowWhere($select, $table, $where)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $qry = $this->db->get();
        if ($qry->num_rows() > 0) {
            $rr = @$qry->row_array();
            return @$rr[$select];
        } else {
            return [];
        }
    }

    //---- Function for join Records ---//
    public function get_joined_records($pTable, $columns, $joins, $where = '', $limit, $start, $keyword, $order_by, $group_by = '')
    {
        $this->db->limit(($limit - 1) * $start, $limit);
        if ($keyword) {
            $this->db->like($keyword, $keyword);
            $this->db->or_like($keyword, $keyword);
        }

        if ($order_by != '') {
            $this->db->order_by($order_by);
        }

        if ($group_by != '') {
            $this->db->group_by($group_by);
        }

        $this->db->select($columns);

        if ($joins != '') {
            foreach ($joins as $join) {
                $this->db->join($join['table'], $join['condition'], $join['joinType']);
            }
        }

        if ($where != '') {
            $this->db->where($where);
        }
        $query = $this->db->get($pTable)->result();

        return $query;
    }

    public function insertData($table, $data)
    {
        try {
            $this->db->insert($table, $data);
            return $this->db->insert_id();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function insertBatch($table, $data)
    {
        try {
            $this->db->insert_batch($table, $data);
            return $this->db->insert_id();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function updateData($table, $data, $where)
    {
        try {
            $this->db->where($where);
            $this->db->update($table, $data);
            $this->db->trans_complete();
            $this->db->affected_rows();
            if ($this->db->affected_rows() >= 0) {
                return true;
            }

            return false;
            //return $this->db->last_query();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function deleteData($tbl_name, $where)
    {
        try {
            $this->db->where($where);
            $this->db->delete($tbl_name);
            $this->db->trans_complete();
            $this->db->affected_rows();
            if ($this->db->affected_rows() == '1') {
                return TRUE;
            }

            return false;
        } catch (\Exception $e) {
            return false;
        }
    }
}

?>

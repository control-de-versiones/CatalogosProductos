<?php
Class Data extends CI_Model
{
 function get_products()
 {
     $this->db->select('*');
     $this->db->from('product');

     $query = $this->db->get();

     return $query->result();

  }

  function get_inf_product($pid){

    $this->db->select('*');
    $this->db->from('product');
    $this->db->where('pid', $pid);

    $query = $this->db->get();

    if($query -> num_rows() == 1)
    {

      return $query->result();

    } else {

      return false;

    }


  }

  function insert()
 {
     $data=array(
    'name'=>$this->input->post('name'),
    'desc'=>$this->input->post('desc'),
    'stock'=>$this->input->post('stock'),
    'price'=>$this->input->post('price'),
    'img'=>$this->input->post('img')
    );

    $this->db->insert('product',$data);

  }

  function update($pid)
 {
     $data = array(
    'name'=>$this->input->post('name'),
    'desc'=>$this->input->post('desc'),
    'stock'=>$this->input->post('stock'),
    'price'=>$this->input->post('price'),
    'img'=>$this->input->post('img')
            );

    $this->db->where('pid', $pid);
    $this->db->update('product', $data); 

  }

  function delete($pid)
 {
    
    $this->db->select('*');
    $this->db->from('product');
    $this->db->where('pid', $pid);

    $query = $this->db->get();

    if($query -> num_rows() == 1)
    {

      $this->db->where('pid', $pid);
      $this->db->delete('product'); 

      redirect('home', 'refresh');

    }
    else
    {

      redirect('home', 'refresh');

    }
  }
}

?>

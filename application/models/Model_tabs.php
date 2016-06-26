 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tabs extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
        function __construct() {
            parent::__construct();
            $this->load->database();
        }
        
        /** Fungsi menambahkan data menu dan content*/
        function add_data($form_data)
        {
            $this->db->trans_start();
//            $this->db->insert('menu',$form_data['menu']);
            $this->db->insert('data',$form_data);
            $this->db->trans_complete();
        }
        
        function get_data(){
            $this->db->select('id, menu');
            $this->db->from('menu');
            return $this->db->get()->result();
        }
        
        /** Fungsi ambil data menu dan content */
        function get_menu($id){
            $this->db->select('a.id, a.menu, b.id_data, b.content, b.nomer');
            $this->db->from('menu as a');
            $this->db->join('data as b', 'a.id = b.id_tabs');
            $this->db->where('a.id', $id);
            return $this->db->get()->result();
        }
         
        function get_nomer($id){
            $this->db->select('nomer');
            $this->db->from('data');
            $this->db->where('id_tabs', $id);
            $this->db->order_by('nomer', 'ASC');
            return $this->db->get()->result();
        }
        
        function get_sub_menu($id){
            $this->db->select('b.kategori, b.sub_kategori, c.id');
            $this->db->from('data as a');
            $this->db->join('sub_menu as b', 'a.id_data = b.id_data');
            $this->db->join('menu as c', 'a.id_tabs = c.id');
            $this->db->where('c.id', $id);
            return $this->db->get()->result();
        }
}

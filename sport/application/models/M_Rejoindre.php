    <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


    class M_Rejoindre extends CI_Model{
    	public function __construct() {
    		parent::__construct();
    		$this->load->database();
    	}

    	public function join_team($membre,$mail){
    		$query2=$this->db->select('mail')
    		->from('ptMembres')
    		->where('mail',$mail)
    		->get()
    		->row_array();
    		



    		$query=$this->db->select('name')
    		->from('ptTeam')
    		->where('name',$membre['name'])
    		->where('psw_inscription',$membre['psw'])
    		->get()
    		->row_array();


    		if(count($query) == 1) {
    			if(count($query2)!=1){
    				$array=array('mail' => $mail, 'name' => $membre['name']);
    				return $this->db->insert('ptMembres',$array);
    			}
    			else{
    				echo 'Déjà dans l\'équipe';
    				return false;
    			}
    		}
    		else	
    			return false ;

    	}


    	public function team_admin($data_equipe,$mail){
    		$array=array('mail'=>$mail, 'name' => $data_equipe['name'], 'role'=>'admin');
    		return $this->db->insert('ptMembres',$array);
    	}

    	public function getlisteam(){
    		return $this->db->select('*')
    		->from('ptTeam')
    		->get()
    		->result_array();	
    	}
    }


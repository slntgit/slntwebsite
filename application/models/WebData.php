<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class WebData extends CI_Model {


	public function __construct() {
		parent::__construct(); 
	}
 

 public function getServiceByW($value)
 {
        $this->db->where('search_id',$value); 
        return  $query = $this->db->get('tbl_category');
 }
 

public function getfeatures($limit,$order)
{
    $this->db->order_by('id',$order); 
    if ($limit!=NULL) {
        $this->db->limit($limit); 
    }
    return  $query = $this->db->get('features');
}


public function testiMonials($limit,$order)
{
    $this->db->order_by('id',$order); 
    if ($limit!=NULL) {
        $this->db->limit($limit); 
    }
    return  $query = $this->db->get('testimonial');
}



public function getDataMaster($tabe,$order,$orderAs,$limit){
  if ($order!=NULL) {
        $this->db->order_by($orderAs,$order); 
   }
    if ($limit!=NULL) {
        $this->db->limit($limit); 
    }
    return  $query = $this->db->get($tabe);
}




public function randomString($length)
{
   $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz&@#$%!';
    $password = array(); 
    $alpha_length = strlen($alphabet) - 1; 
    for ($i = 0; $i < $length; $i++) 
    {
        $n = rand(0, $alpha_length);
        $password[] = $alphabet[$n];
    }
    return $randpasswordx =  implode($password);
}


public function randomStringClean($length)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = array(); 
    $alpha_length = strlen($alphabet) - 1; 
    for ($i = 0; $i < $length; $i++) 
    {
        $n = rand(0, $alpha_length);
        $password[] = $alphabet[$n];
    }
    return $randpasswordx =  implode($password); 
}




public function getImageMaster($id,$limit,$order,$img_loc) { 
        $this->db->select('*');
        $this->db->from('tbl_web_images');
        $this->db->where('type', $id);  
        $this->db->order_by('id',$order);
        if($limit>0){
            $this->db->limit($limit);
        }
        $query = $this->db->get();
        if ($query->num_rows()>0) {
           if($limit==1){
                        $data=$query->row();
                return $img_loc.'/'.$data->image;
           } else {
                return $query->result_array();
           }
        } else {
            return NULL;
        }
    }

    public function getPageContentMaster($id) { 
        $this->db->select('*');
        $this->db->from('tbl_pages');
        $this->db->where('pagid', $id);  
        $this->db->order_by('id','DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            $data=$query->row();
            return $data->pagecontent;
        } else {
            return NULL;
        }
    }


        public function webSetting($id) { 
        $this->db->select('*');
        $this->db->from('configuration_general');
        $this->db->where('id',$id);
        $query = $this->db->get();
            if ($query->num_rows()>0) {
               return $data=$query->row();
            } else {
                return NULL;
            }
        }





    public function getFaqs() { 
        $this->db->select('*');
        $this->db->from('faq');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
           return $data=$query->result();
        } else {
            return NULL;
        }
    }

    public function howItWork() { 
        $this->db->select('*');
        $this->db->from('how_it_word');
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
           return $data=$query->result();
        } else {
            return NULL;
        }
    }


public function mainCategory($index, $limit)
{
    if ($index!=NULL) {
        $this->db->where('id',$index); 
    } 
    $this->db->where('level=0');  
    $this->db->order_by('name','ASC');
    if ($limit!=NULL) {
       $this->db->limit($limit);
    }
    $query = $this->db->get('tbl_category');
    return $query;
}




    public function menuitemsCategory($selector)
    {
        
        $this->db->where('level=0');  
        $this->db->order_by('name','ASC');
        $query = $this->db->get('tbl_category');
           $mcount=119;
foreach($query->result() as $level0menu):
                $meun.='<li class="nav-item">';
                    $meun.='<a href="'.BASEPATHURL.'services/'.$level0menu->search_id.'" class="nav-link">'.$level0menu->name.'<i class="bx bx-chevron-right"></i></a>';
                    /*Level 1 menu items   */
        $this->db->where('level=1');  
        $this->db->where('cat_it',$level0menu->id);  
        $this->db->order_by('name','ASC');
        $query2 = $this->db->get('tbl_category');
        if($query2->num_rows()>0){

if ($mcount==119) {
   $meun.='<ul class="dropdown-menu">';
} else {
    $meun.='<ul class="dropdown-menu pb-50 pb-'.$mcount.'">';
}
           
$mcount2=119;
foreach($query2->result() as $level1menu):
        $this->db->where('level=2');  
        $this->db->where('cat_it',$level1menu->id);  
        $this->db->order_by('name','ASC');
        $services = $this->db->get('tbl_category');
            $meun.='<li class="nav-item">';
       if($services->num_rows()>0){
                $meun.='<a href="'.BASEPATHURL.'services/'.$level1menu->search_id.'" class="nav-link">'.$level1menu->name.'<i class="bx bx-chevron-right"></i></a>';

        } else {
            $meun.='<a href="'.BASEPATHURL.'services/'.$level1menu->search_id.'" class="nav-link">'.$level1menu->name.'</a>'; 
        }
    if($services->num_rows()>0){
            if ($mcount2==119) {
               $meun.='<ul class="dropdown-menu">';
            } else {
                $meun.='<ul class="dropdown-menu pb-50 pb-'.$mcount2.'">';
            }
            foreach($services->result() as $servicesdata):
                $meun.='<li class="nav-item">
                            <a href="'.BASEPATHURL.'services/'.$servicesdata->search_id.'" class="nav-link">'.$servicesdata->name.'</a>
                        </li>';
            endforeach;
            $meun.='</ul>';

        }
    $meun.='</li>';
    $mcount2++;
endforeach;
            $meun.='</ul>';

        }  /* else if($query2->num_rows()==0){
            $this->db->where('category',$level0menu->id);
            $this->db->order_by('title','ASC');
            $services = $this->db->get('add_products');
            if($services->num_rows()>0){
                if ($mcount==119) {
                   $meun.='<ul class="dropdown-menu">';
                } else {
                    $meun.='<ul class="dropdown-menu pb-50 pb-'.$mcount.'">';
                }
                foreach($services->result() as $servicesdata):
                    $meun.='<li class="nav-item"><a href="'.BASEPATHURL.'services/'.$level0menu->search_id.'/'.$servicesdata->search_id.'" class="nav-link">'.$servicesdata->title.'</a></li>';
                endforeach;
           

            }
        } */
  
    $mcount++;
endforeach;
            $meun.='</ul>';
        $meun.='</li>';
return $meun;

    }


}

 
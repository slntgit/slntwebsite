<?php
            $this->db->select('*');
            $this->db->from('slnt_payment_summery');
            $this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4)));
            $this->db->order_by('id','DESC');
            $this->db->limit(1);
            $booking_details = $this->db->get()->row();
            $datan = array(
                'paystatus'=>  1,
                'paywith'=>'PayPal'
            );
            $this->db->where(array('id'=>$this->uri->segment(3),'payment_id'=>$this->uri->segment(4),'paystatus'=>0));
            $this->db->update('slnt_payment_summery',$datan);
 
                            $this->db->select('*');
                            $this->db->from('slnt_booking_slot');
                            $this->db->where('id',$booking_details->booking_id); 
                            $this->db->order_by('id','DESC');
                            $pujabo = $this->db->get();

                            $pujabooking = $pujabo->row();
                            $totalamt = 0.00;
                            $this->db->select('*');
                            $this->db->from('slnt_puja_time');
                            $this->db->where('id',$pujabooking->time_id);
                            $this->db->where('pooja_time',$pujabooking->puja_id);
                            $bookingTime = $this->db->get();
                            $actbooktime = $bookingTime->row();

                            $this->db->select('*');
                            $this->db->from('slnt_puja');
                            $this->db->where('id',$pujabooking->puja_id);
                            $pujaList = $this->db->get();
                            $actpujalist = $pujaList->row();

                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','ASC');
                            $paymentdetails = $this->db->get();
                            $lastid = $booking_details->booking_id;
                            $ncount=strlen($lastid);
                            if ($ncount<5) {
                                $randpassword=sprintf('%05d', $lastid);
                            } else {
                                $randpassword=$lastid;
                            }
                            $bookingId = 'SPSLNT'.date('Ymd').$randpassword;
                            $datan = array(
                                'status'=>  1,
                                'booking_id'=>  $bookingId
                            );
                            $this->db->where(array('id'=>$booking_details->booking_id,'booking_id'=>''));
                            $this->db->update('slnt_booking_slot',$datan);
                             
                            $this->db->select('*');
                            $this->db->from('slnt_payment_summery');
                            $this->db->where('booking_id',$pujabooking->id);
                            $this->db->where('paystatus',1);
                            $this->db->order_by('id','DESC');
                            $this->db->limit(1);
                            $paymentd = $this->db->get()->row();
                           // redirect('poojaBooking/Thank-You/'.$this->uri->segment(3).'/'.$this->uri->segment(4));
                            redirect('poojaBooking/Sent-Email-Notification-To-Users-Of-Pooja-Booking/'.$this->uri->segment(3).'/'.$this->uri->segment(4));
 ?>
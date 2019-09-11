<?php
/**
 * Created by PhpStorm.
 * User: Itarsia007
 * Date: 16-04-2019
 * Time: 04:36 PM
 */
class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserAuthModel');
		$this->load->model('PaymentModel');
		$this->load->model('TestimonialModel');
		if (!$this->session->userdata('user_id')) {
			return redirect('admin');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('admin');
	}

	/* ------------------------------------------------------------------------------------------ */

	public function index()
	{
		$data['AllRegisterUser'] = $this->UserAuthModel->getCountUser();
		$data['AllPaymentUser']  = $this->PaymentModel->getAllPaymentUser();
		$data['AllTestimonial']   = $this->TestimonialModel->getAllTestimonial();
		$data['LatestRegisterUser'] = $this->UserAuthModel->getTenRecordDashboard();
		$this->load->view('admin/pages/dashboard',$data);
	}

	/* ----------------------register user details ------ */

	public function register_user()
	{
		 $data['registerUser'] = $this->UserAuthModel->allRegisterUser();
		 $this->load->view('admin/pages/register_user',$data);
	}

	public function user_details($id)
	{
		$data['userDetails'] = $this->UserAuthModel->singleUserRecord($id);
		/*$data['paymentDetails'] = $this->PaymentModel->singlePaymentRecord($id);*/
		$this->load->view('admin/pages/user_details',$data);
	}

    public function premium_member()
	{
		$data['premiumMember'] = $this->PaymentModel->premium_member();
		$this->load->view('admin/pages/premium_member',$data);
	}
	public function free_member()
	{
		$data['freeMember'] = $this->UserAuthModel->free_membership();
		$this->load->view('admin/pages/free_member',$data);
	}

	//single free member details
	public function show_free_member_details($id)
	{
		$data['FreeMemberDetails'] = $this->UserAuthModel->freeMemberDetails();
		$this->load->view('admin/pages/show_free_member',$data);
	}

	//single premium member details
	public function show_premium_member_details($id)
	{
		$data['PremiumMemberDetails'] = $this->PaymentModel->PremiumMemberDetails($id);
		$this->load->view('admin/pages/show_premium_member',$data);
	}

	/* -------------..//end register user  --------- */

	/* ----------slider ---- */
	public function add_slider()
	{
		$this->load->view('admin/pages/add_slider');
	}

	public function CreateSlider()
	{
		$this->form_validation->set_rules('slider_title', 'Slider Title', 'required');
		$this->form_validation->set_rules('slider_text','Slider Description','required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('slider_img')) {

			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['slider_img'] = $img_path;

			$this->load->model('SliderModel');
			$slider = $this->SliderModel->insertSlider($post);
			if ($slider) {   //insert success
				$this->session->set_flashdata('feedback', 'Slider Upload Successfully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_slider');
			} else {   //insert failed
				$this->session->set_flashdata('feedback', 'Slider Upload Failed');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_slider');
			}

		} else {

			$this->session->set_flashdata('feedback', 'Slider Upload Failed');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_slider');
		}
	}

	public function show_slider()
	{
		$this->load->model('SliderModel');
		$slider_data = $this->SliderModel->getAllSlider();
		$this->load->view('admin/pages/show_slider', compact('slider_data'));
	}

	public function edit_slider($id)
	{
		$this->load->model('SliderModel');
		$getSlider = $this->SliderModel->findSlider($id);
		$this->load->view('admin/pages/edit_slider', compact('getSlider'));

	}

	public function updateSlider($id)
	{
		$this->form_validation->set_rules('slider_title', 'Slider Title', 'required');
		$this->form_validation->set_rules('slider_text','Slider Description','required');
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$post = $this->input->post();
		unset($post['submit']);
		if ($this->form_validation->run() && $this->upload->do_upload('slider_img')) {
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['slider_img'] = $img_path;
		}
		$this->load->model('SliderModel');
		$slider = $this->SliderModel->updateSlider($id, $post);
		if ($slider) {
			$this->session->set_flashdata('feedback', 'Slider Update Successfully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_slider/' . $id);
		} else {
			$this->session->set_flashdata('feedback', 'Failed to Update ');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_slider/' . $id);
		}
	}

	public function deleteSlider($id)
	{
		$this->load->model('SliderModel');
		$this->db->delete('slider', ['id' => $id]);
		redirect('dashboard/show_slider');
	}
	/* ----------.//end slider ---------- */

	/* -------------our services ------------ */
	public function add_our_services()
	{
		$this->load->view('admin/pages/add_our_services');
	}

	public function create_services()
	{
		$this->form_validation->set_rules('service_title', 'Service Name', 'required');
		$this->form_validation->set_rules('service_desc', 'Service Description', 'required');


		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('service_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['service_img'] = $img_path;

			$this->load->model('ServiceModel');
			$data = $this->ServiceModel->insertService($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Services Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_services');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Services Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_our_services');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Services Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_our_services');
		}
	}

	public function show_services()
	{
		$this->load->model('ServiceModel');
		$getAllServiceData = $this->ServiceModel->showAllServices();
		$this->load->view('admin/pages/show_our_services', compact('getAllServiceData'));
	}

	public function edit_our_services($id)
	{
		$this->load->model('ServiceModel');
		$editOurService = $this->ServiceModel->edit_service($id);
		$this->load->view('admin/pages/edit_our_services', compact('editOurService'));
	}

	public function UpdateService($id)
	{
		$this->form_validation->set_rules('service_title', 'Service Name', 'required');
		$this->form_validation->set_rules('service_desc', 'Service Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('service_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['service_img'] = $img_path;
		}
		$this->load->model('ServiceModel');
		$data = $this->ServiceModel->update_service($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Services Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_services/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_our_services/' . $id);
		}
	}

	public function delete($id)
	{
		$this->load->model('ServiceModel');
		$this->db->delete('services', ['id' => $id]);
		redirect('dashboard/show_services');
	}
	/* ----------------../end our services ----------------- */

	/* -----------------IMPROVE CREDIT SCORE ------------------ */

	function add_improve_credit_score()
	{
		$this->load->view('admin/pages/add_improve_credit_score');
	}

	public function create_improve_credit_score()
	{
		$this->form_validation->set_rules('credit_title', 'Credit Score Title', 'required');
		$this->form_validation->set_rules('credit_desc', 'Credit Description', 'required');


		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('credit_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['credit_img'] = $img_path;

			$this->load->model('CreditScoreModel');
			$data = $this->CreditScoreModel->insertCredit($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Improve Credit Score Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_improve_credit_score');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_improve_credit_score');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_improve_credit_score');
		}
	}

	public function show_improve_credit_score()
	{
		$this->load->model('CreditScoreModel');
		$creditData = $this->CreditScoreModel->AllCreditScore();
		$this->load->view('admin/pages/show_improve_credit_score', compact('creditData'));
	}

	public function edit_improve_credit_score($id)
	{
		$this->load->model('CreditScoreModel');
		$creditData = $this->CreditScoreModel->edit_credit_score($id);
		$this->load->view('admin/pages/edit_improve_credit_score', compact('creditData'));
	}

	public function update_improve_credit_score($id)
	{
		$this->form_validation->set_rules('credit_title', 'Credit Score Plan', 'required');
		$this->form_validation->set_rules('credit_desc', 'Credit Score Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('credit_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['credit_img'] = $img_path;
		}
		$this->load->model('CreditScoreModel');
		$data = $this->CreditScoreModel->update_improve_credit_score($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Improve Credit Score Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_improve_credit_score/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_improve_credit_score/' . $id);
		}
	}

	public function delete_credit_score($id)
	{
		$this->load->model('CreditScoreModel');
		$this->db->delete('improve_credit_score', ['id' => $id]);
		return redirect('dashboard/show_improve_credit_score');
	}

	/* ----------------------end improve credit score  ---------------- */

	/* ------------------------ add what we do -------------------- */

	public function add_what_we_do()
	{
		$this->load->view('admin/pages/add_what_we_do');
	}

	public function create_what_we_do()
	{
		$this->form_validation->set_rules('we_do_title', 'What We Do Title', 'required');
		$this->form_validation->set_rules('we_do_desc', 'What We Do Description', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('do_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['do_img'] = $img_path;

			$this->load->model('WeDoModel');
			$data = $this->WeDoModel->insertWeDo($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'What We Do Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_what_we_do');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_what_we_do');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_what_we_do');
		}
	}

	public function show_what_we_do()
	{
		$this->load->model('WeDoModel');
		$whatWeDoData = $this->WeDoModel->showAllData();
		$this->load->view('admin/pages/show_what_we_do', compact('whatWeDoData'));
	}

	public function edit_what_we_do($id)
	{
		$this->load->model('WeDoModel');
		$editWhatWeDo = $this->WeDoModel->edit_what_we_do($id);
		$this->load->view('admin/pages/edit_what_we_do', compact('editWhatWeDo'));
	}

	public function update_what_we_do($id)
	{
		$this->form_validation->set_rules('we_do_title', 'What We Do Title', 'required');
		$this->form_validation->set_rules('we_do_desc', 'What We Do Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('do_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['do_img'] = $img_path;
		}
		$this->load->model('WeDoModel');
		$data = $this->WeDoModel->update_what_we_do($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'What We Do Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_what_we_do/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_what_we_do/' . $id);
		}
	}

	public function delete_what_we_do($id)
	{
		$this->load->model('WeDoModel');
		$this->db->delete('what_we_do', ['id' => $id]);
		redirect('dashboard/show_what_we_do');
	}

	/* --------------------//end add what we do ----------------- */

	/* -----------------------testimonial ----------------------- */

	public function add_testimonial()
	{
		$this->load->view('admin/pages/add_testimonial');
	}

	public function create_testimonial()
	{
		$this->form_validation->set_rules('client_name', 'Client Name', 'required');
		$this->form_validation->set_rules('client_review', 'Client Review', 'required');

		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->form_validation->run() && $this->upload->do_upload('client_img')) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['client_img'] = $img_path;

			$this->load->model('TestimonialModel');
			$data = $this->TestimonialModel->insertTestimonial($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Testimonial Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_testimonial');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_testimonial');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_testimonial');
		}
	}

	public function show_testimonial()
	{
		$this->load->model('TestimonialModel');
		$testimonialData = $this->TestimonialModel->allTestimonial();
		$this->load->view('admin/pages/show_testimonial', compact('testimonialData'));
	}

	public function edit_testimonial($id)
	{
		$this->load->model('TestimonialModel');
		$editTestimonialData = $this->TestimonialModel->edit_testimonial($id);
		$this->load->view('admin/pages/edit_testimonial', compact('editTestimonialData'));
	}

	public function update_testimonial($id)
	{
		$this->form_validation->set_rules('client_name', 'Client Title', 'required');
		$this->form_validation->set_rules('client_review', 'Client Review', 'required');

		$post = $this->input->post();
		unset($post['submit']);
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ($this->form_validation->run() && $this->upload->do_upload('client_img')) { // validation success

			$data = $this->upload->data();
			$img_path = base_url('uploads/' . $data['raw_name'] . $data['file_ext']);
			$post['client_img'] = $img_path;
		}
		$this->load->model('TestimonialModel');
		$data = $this->TestimonialModel->update_testimonial($id, $post);

		if ($data) { // insert success
			$this->session->set_flashdata('feedback', 'Testimonial Update SuccessFully');
			$this->session->set_flashdata('feedback_class', 'alert-success');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
			redirect('dashboard/show_testimonial/' . $id);
		} else { // failed to insert
			$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/edit_testimonial/' . $id);
		}
	}

	public function delete_testimonial($id)
	{
		$this->load->model('TestimonialModel');
		$this->db->delete('testimonial', ['id' => $id]);
		redirect('dashboard/show_testimonial');
	}

	/* ---------------------..//end testimonial ------------------ */

	/* ------------------refund policy ------------------- */

	public function add_refund_policy()
	{
		$this->load->view('admin/pages/add_refund_policy');
	}

	public function create_refund()
	{
		$this->form_validation->set_rules('refund_title', 'Refund Policy Title', 'required');
		$this->form_validation->set_rules('refund_desc', 'Refund Policy Description', 'required');

		if ($this->form_validation->run()) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);

			$this->load->model('RefundPolicyModel');
			$data = $this->RefundPolicyModel->insertRefund($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Refund Policy  Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_refund_policy');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_refund_policy');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_refund_policy');
		}
	}

	public function show_refund_policy()
	{
		$this->load->model('RefundPolicyModel');
		$refundData = $this->RefundPolicyModel->getAllRefund();
		$this->load->view('admin/pages/show_refund_policy', compact('refundData'));
	}

	public function edit_refund_policy($id)
	{
		$this->load->model('RefundPolicyModel');
		$editRefundData = $this->RefundPolicyModel->edit_refund($id);
		$this->load->view('admin/pages/edit_refund_policy', compact('editRefundData'));
	}

	public function update_refund_policy($id)
	{
		$this->form_validation->set_rules('refund_title', 'Refund Policy Title', 'required');
		$this->form_validation->set_rules('refund_desc', 'Refund Policy Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);

		if ($this->form_validation->run()) { // validation success
			$this->load->model('RefundPolicyModel');
			$data = $this->RefundPolicyModel->update_refund($id, $post);

			if ($data) { // insert success
				$this->session->set_flashdata('feedback', 'Refund Policy Update SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_refund_policy/' . $id);
			} else { // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_refund_policy/' . $id);
			}
		}
	}

	/* -----------------..//end refund policy -------------- */

	/* ----------------- privacy Policy ----------------- */
	public function add_privacy_policy()
	{
		$this->load->view('admin/pages/add_privacy_policy');
	}

	public function create_policy()
	{
		$this->form_validation->set_rules('privacy_title', 'Privacy Policy Title', 'required');
		$this->form_validation->set_rules('privacy_desc', 'Privacy Policy Description', 'required');

		if ($this->form_validation->run()) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);

			$this->load->model('PrivacyPolicyModel');
			$data = $this->PrivacyPolicyModel->insertPrivacy($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Privacy Policy  Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_privacy_policy');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_privacy_policy');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_privacy_policy');
		}
	}

	public function show_privacy_policy()
	{
		$this->load->model('PrivacyPolicyModel');
		$privacyData = $this->PrivacyPolicyModel->getAllPrivacy();
		$this->load->view('admin/pages/show_privacy_policy',compact('privacyData'));
	}

	public function edit_privacy_policy($id)
	{
		$this->load->model('PrivacyPolicyModel');
		$editPrivacyData = $this->PrivacyPolicyModel->edit_privacy_policy($id);
		$this->load->view('admin/pages/edit_privacy_policy',compact('editPrivacyData'));
	}
    public function update_privacy_policy($id)
	{
		$this->form_validation->set_rules('privacy_title', 'Privacy Policy Title', 'required');
		$this->form_validation->set_rules('privacy_desc', 'Privacy Policy Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);

		if ($this->form_validation->run()) { // validation success
			$this->load->model('PrivacyPolicyModel');
			$data = $this->PrivacyPolicyModel->updatePrivacyPolicy($id, $post);

			if ($data) { // insert success
				$this->session->set_flashdata('feedback', 'Privacy Policy Update SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_privacy_policy/' . $id);
			} else { // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_privacy_policy/' . $id);
			}
		}
	}

	/* -----------------------./end privacy Policy -------- */

	/* ---------------contact us ----------------------- */
	public function add_contact_us()
	{
		$this->load->view('admin/pages/add_contactus');
	}
	public function create_contact_us()
	{
		$this->form_validation->set_rules('contact_no', 'Contact Us', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('address','Address','required');

		if ($this->form_validation->run()) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);

			$this->load->model('ContactusModel');
			$data = $this->ContactusModel->insertContact($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Contact Us  Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_contact_us');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_contact_us');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_contact_us');
		}
	}

	public function show_contact_us()
	{
		$this->load->model('ContactusModel');
		$contactData = $this->ContactusModel->getAllContact();
		$this->load->view('admin/pages/show_contactus',compact('contactData'));
	}

	public function edit_contactUs($id)
	{
		$this->load->model('ContactusModel');
		$editData = $this->ContactusModel->editContactUs($id);
		$this->load->view('admin/pages/edit_contactus',compact('editData'));
	}

	public function update_contact($id)
	{
		$this->form_validation->set_rules('contact_no', 'Contact Us', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('address','Address','required');

		$post = $this->input->post();
		unset($post['submit']);

		if ($this->form_validation->run()) { // validation success
			$this->load->model('ContactusModel');
			$data = $this->ContactusModel->update_contact_us($id, $post);

			if ($data) { // insert success
				$this->session->set_flashdata('feedback', 'Contact Us Update SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_contact_us/' . $id);
			} else { // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_contactUs/' . $id);
			}
		}
	}

	/* ----------------..//end contact us ----------------- */

	/* ------------------------about us -------------------- */
	public function add_about_us()
	{
		$this->load->view('admin/pages/add_about_us');
	}
	public function create_about_us()
	{
		$this->form_validation->set_rules('about_desc', 'About us Description', 'required');
		$this->form_validation->set_rules('who_we_are', 'Who We Are', 'required');
		$this->form_validation->set_rules('vision_mission','Vision & Mission','required');

		if ($this->form_validation->run()) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);

			$this->load->model('AboutModel');
			$data = $this->AboutModel->insertAbout($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Contact Us  Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_contact_us');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_contact_us');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_contact_us');
		}
	}

	public function show_about_us()
	{
		$this->load->model('AboutModel');
		$aboutData = $this->AboutModel->getAllAboutUs();
		$this->load->view('admin/pages/show_about_us',compact('aboutData'));
	}

	public function edit_about_us($id)
	{
		$this->load->model('AboutModel');
		$editAbout = $this->AboutModel->editAbout($id);
		$this->load->view('admin/pages/edit_about_us',compact('editAbout'));

	}

	public function update_about_us($id)
	{
		$this->form_validation->set_rules('about_desc', 'About us Description', 'required');
		$this->form_validation->set_rules('who_we_are', 'Who We Are', 'required');
		$this->form_validation->set_rules('vision_mission','Vision & Mission','required');

		$post = $this->input->post();
		unset($post['submit']);

		if ($this->form_validation->run()) { // validation success
			$this->load->model('AboutModel');
			$data = $this->AboutModel->updateAbout($id, $post);

			if ($data) { // insert success
				$this->session->set_flashdata('feedback', 'About Us Update SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_about_us/' . $id);
			} else { // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_about_us/' . $id);
			}
		}
	}

	 /* --------------------..//end about us -------------- */

	/* ----------------public function terms condition -------------- */
	public function add_term_condition()
	{
		$this->load->view('admin/pages/add_terms');
	}

	public function create_term_condition()
	{
		$this->form_validation->set_rules('term_title', 'Terms & Condition Title', 'required');
		$this->form_validation->set_rules('term_desc', 'Terms & Condition Description', 'required');

		if ($this->form_validation->run()) {                                              // validation success
			$post = $this->input->post();
			unset($post['submit']);

			$this->load->model('TermsConModel');
			$data = $this->TermsConModel->insertTerms($post);

			if ($data) {      // insert success
				$this->session->set_flashdata('feedback', 'Terms & Condition  Upload SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_term_condition');
			} else {    // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/add_term_condition');
			}
		} else {                                              //failed validation
			$this->session->set_flashdata('feedback', 'Failed To Upload ! try Again');
			$this->session->set_flashdata('feedback_class', 'alert-danger');
			$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
			redirect('dashboard/add_term_condition');
		}
	}

	public function show_term_condition()
	{
		$this->load->model('TermsConModel');
		$getAllTerms = $this->TermsConModel->getAllTermsData();
		$this->load->view('admin/pages/show_terms',compact('getAllTerms'));
	}

	public function edit_terms($id)
	{
		$this->load->model('TermsConModel');
		$editTerms = $this->TermsConModel->editTerms($id);
		$this->load->view('admin/pages/edit_terms',compact('editTerms'));
	}

	public function update_terms_condition($id)
	{
		$this->form_validation->set_rules('term_title', 'Terms & Condition Title', 'required');
		$this->form_validation->set_rules('term_desc', 'Terms & Condition Description', 'required');

		$post = $this->input->post();
		unset($post['submit']);

		if ($this->form_validation->run()) { // validation success
			$this->load->model('TermsConModel');
			$data = $this->TermsConModel->updateTermsCon($id, $post);

			if ($data) { // insert success
				$this->session->set_flashdata('feedback', 'Terms & Condition Update SuccessFully');
				$this->session->set_flashdata('feedback_class', 'alert-success');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-check-circle"></i>');
				redirect('dashboard/show_term_condition/' . $id);
			} else { // failed to insert
				$this->session->set_flashdata('feedback', 'Failed To Update ! try Again');
				$this->session->set_flashdata('feedback_class', 'alert-danger');
				$this->session->set_flashdata('feedback_icon', '<i class="fa fa-times-circle"></i>');
				redirect('dashboard/edit_terms/' . $id);
			}
		}
	}

	/* ----------------../end terms ----------------------------------- */

	/* ----------------change password --------------------- */
	public function changePassword()
	{

		$this->load->view('admin/pages/changepass');
	}
	public function update_password()
	{
		$this->form_validation->set_rules('password','Old Password','required|min_length[6]|max_length[8]');
		$this->form_validation->set_rules('newpass','New Password','required|min_length[6]|max_length[8]');
		$this->form_validation->set_rules('confpassword','Confirm Password','required|min_length[6]|max_length[8]|matches[newpass]');

		if ($this->form_validation->run())
		{   //validation success
			$old_pass = $this->input->post('password');
			$new_pass = $this->input->post('newpass');
			$conf_pass = $this->input->post('confpassword');

			$this->load->model('AdminModel');
			$id = 1;
			$PassData = $this->AdminModel->changePass($id);

			if ($PassData->password == $old_pass)
			{  //macth password
				if ($new_pass == $conf_pass)
				{
					if ($this->AdminModel->updatePass($new_pass,$id))
					{
						$this->session->set_flashdata('feedback','Password Change Successfully Please Login');
						$this->session->set_flashdata('feedback_class','alert-success');
						$this->session->set_flashdata('feedback_icon','<i class="fa fa-check-circle"></i>');
						redirect('dashboard/logout');
					}
					else
					{
						$this->session->set_flashdata('feedback','Password Update to Failed');
						$this->session->set_flashdata('feedback_class','alert-danger');
						$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
						redirect('dashboard/changePassword');
					}
				}
				else
				{
					$this->session->set_flashdata('feedback','Invalid Old Password & New Password');
					$this->session->set_flashdata('feedback_class','alert-danger');
					$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
					redirect('dashboard/changePassword');
				}
			}
			else
			{  //
				$this->session->set_flashdata('feedback','Invalid Old Password & New Password');
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
				redirect('dashboard/changePassword');
			}

		}
		else
		{  //validation failed
			$this->session->set_flashdata('feedback','Invalid Old Password & New Password');
			$this->session->set_flashdata('feedback_class','alert-danger');
			$this->session->set_flashdata('feedback_icon','<i class="fa fa-times-circle"></i>');
			redirect('dashboard/changePassword');
		}
	}

	/* -----------------..//end change password -------------- */

}
	
	
	
	
	
	
	
    



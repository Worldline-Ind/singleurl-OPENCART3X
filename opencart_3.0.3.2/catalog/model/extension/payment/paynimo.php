<?php
class ModelExtensionPaymentPaynimo extends Model {
    public function getMethod($address, $totaling) {
        $this->load->language('extension/payment/paynimo');

        if ($totaling <= 0.00) {
            $status = true;
        } else {
            $status = false;
        }
        $status = true;

        $method_data = array();

        if ($status) {
            $method_data = array(
                'code'       => 'paynimo',
                'title'      => $this->language->get('text_title'),
                'terms'      => '',
                'sort_order' => $this->config->get('payment_paynimo_sort_order')
            );
        }
        return $method_data;
    }

    public function get() {
      return $this->db->query("SELECT * FROM `" . DB_PREFIX . "paynimo`")->rows;
  }
}
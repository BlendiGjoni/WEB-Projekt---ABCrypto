<?php 

    class product{
        private $product_id;
        private $product_logo;
        private $product_name;
        private $product_name_shortcut;
        private $product_last_price;
        private $product_perc;
        private $product_market_cap;
        private $product_chart;
        private $fk_user_id;

        function __construct($product_id, $product_logo, $product_name, $product_name_shortcut, $product_last_price, $product_perc, $product_market_cap, $product_chart, $fk_user_id){
            $this->product_id = $product_id;
            $this->product_logo = $product_logo;
            $this->product_name = $product_name;
            $this->product_name_shortcut = $product_name_shortcut;
            $this->product_last_price = $product_last_price;
            $this->product_perc = $product_perc;
            $this->product_market_cap = $product_market_cap;
            $this->product_chart = $product_chart;
            $this->fk_user_id = $fk_user_id;
        }

        public function getProductId() {
            return $this->product_id;
        }
    
        public function getProductLogo() {
            return $this->product_logo;
        }
    
        public function getProductName() {
            return $this->product_name;
        }
    
        public function getProductNameShortcut() {
            return $this->product_name_shortcut;
        }
    
        public function getProductLastPrice() {
            return $this->product_last_price;
        }
    
        public function getProductPerc() {
            return $this->product_perc;
        }
    
        public function getProductMarketCap() {
            return $this->product_market_cap;
        }
    
        public function getProductChart() {
            return $this->product_chart;
        }
    
        public function getFkUserId() {
            return $this->fk_user_id;
        }

        public function setProductLogo($product_logo) {
            $this->product_logo = $product_logo;
        }
    
        public function setProductName($product_name) {
            $this->product_name = $product_name;
        }
    
        public function setProductNameShortcut($product_name_shortcut) {
            $this->product_name_shortcut = $product_name_shortcut;
        }
    
        public function setProductLastPrice($product_last_price) {
            $this->product_last_price = $product_last_price;
        }
    
        public function setProductPerc($product_perc) {
            $this->product_perc = $product_perc;
        }
    
        public function setProductMarketCap($product_market_cap) {
            $this->product_market_cap = $product_market_cap;
        }
    
        public function setProductChart($product_chart) {
            $this->product_chart = $product_chart;
        }

    }
?>
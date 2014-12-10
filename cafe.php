<?php
Abstract class User
{
	public menu;
	public news;
	public function get_info(){  // рассылка по электронной почте об акциях, новое блюдо...
	print (menu);
	print (news);
	}
}
Abstract class RU extends User
{
    public  login;
    private password; 
    public email;
}
Class Guest 
{
	public function Look_info(){
	}
}
Class Client extends RU
{
	public function reviews{
	}
	public function place_order {
	}
	public function account {
	}
	protected function pay_order (order){
		if (this. order.sum > 500)
		order.sum = order.sum -0.02*order.sum
		print (order) 	
	}
	public function View_account_status{
		if (this. account >= 5000)
			Client=VIP_Client
	}
}
Class VIP_Client extends Client
{
	public discount;
	protected function pay_order (order){
		order.sum = order.sum -0.1*order.sum 
	print (order)	
	}
}	
Abstract class Personal extends RU
{
    public function get_order {
	}	
}
Class Waiter extends Personal
{
	public function invoice {
	}
}
Class Cook extends Personal
{
}
Class Admin extends Personal
{
    public function add_User (login, password,email){
	}
    public function delete_User (login){
	}
	public function get_Profile (info){
	}
	protected function isEdit_Allowed (login){
	    if (this -> login ! = login){
	    return false;
	    } 
	    else {
	    return true;
	    }
	}
}